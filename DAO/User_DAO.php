<?php
require("Db_info.php") ;

class User_DAO extends Controller {

    private $db_connect ;
    // fonction pour créer un nouvel utilisateur et l'insérer dans la base de données
    public function insert($data) {

        $this->db_connect = connectToDb() ;

        $db = connectToDb() ;
        $firstname = $data['firstname'] ;
        $lastname = $data['lastname'] ;
        $nickname = $data['nickname'] ;
        $mail = $data['mail'] ;
        $password = $data['password'] ;
        $password = hash("sha256", $password) ;

        // 1ére requete afin de vérifier si l'utilisateur n'existe pas déjà
        $verif = $db->prepare("
        SELECT * FROM User
        WHERE (`mail` = :mail AND `password` = :password)
        ");
        $verif->bindValue(
            ':mail',
            $mail,
            PDO::PARAM_STR) ;
        $verif->bindValue(
            ':password',
            $password,
            PDO::PARAM_STR) ;

        $verif->execute() ;
        $result = $verif->fetch(PDO::FETCH_ASSOC) ;

        // Si l'utilisateur n'existe pas déjà
        // On peut en créer un nouveau
        if (!$result) {
            $stmt = $db->prepare("
            INSERT INTO User (
                firstname,
                lastname,
                nickname,
                mail,
                password)
                VALUES (:firstname, :lastname, :nickname, :mail, :password)"
                ) ;
                // On utilise le try catch pour la gestion des erreurs
            try {
                $stmt->execute(array(
                   ':firstname' => $firstname,
                   ':lastname' => $lastname,
                   ':nickname' => $nickname,
                   ':mail' => $mail,
                   ':password' => $password
                ));

                // On enregistre l'id et le nickname du nouvel utilisateur dans la superglobale SESSION
                // afin de pouvoir personaliser les pages selon ces informations
                ?>
                <meta http-equiv="refresh" content="2; URL=/Dashboard">
                <?php
                echo "Bienvenu ".$nickname ;
                $_SESSION["id_user"] = $db->lastInsertId() ;
                $_SESSION["name"] = $nickname ;
                return TRUE ;
            } catch (PDOException $e) {
                echo "Erreur : ".$e->getMessage() ;
            }
        // Si l'utilisateur existe déjà
        } else {
            // redirection au bout de deux secondes vers la page signin avec un message d'explication
            ?>
            <meta http-equiv="refresh" content="2; URL=/Signin">
            <?php
            echo "User existant" ;
        }
    }

    public function login($data) {

        $db = connectToDb() ; 
        $nickname = $data['nickname'] ;
        $password = $data['password'] ;
        $password = hash("sha256", $password) ;

        $stmt = $db->prepare("
        SELECT * FROM User
        WHERE (`nickname` = :nickname )
        ");
        try {
            $stmt->bindValue(
                ':nickname',
                $nickname,
                PDO::PARAM_STR) ;
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC) ;
            if ($result === false) {
                ?>
                <meta http-equiv="refresh" content="2; URL=/Signin">
                <?php
                echo "Vous n'etes pas enregistré dans notre base de données.\n" ;
                echo "Redirection vers le formulaire d'inscription";
                // echo "<img src='/Views/Assets/Images/inconnu.png'>";
             } else {
                if ($result["nickname"] == $nickname) {
                    if ($result["password"] == $password) {
                        $_SESSION["name"] = $result["nickname"] ;
                        $_SESSION["id_user"] = $result["id_user"] ;
                        ?>
                        <meta http-equiv="refresh" content="2; URL=/Dashboard">
                        <?php
                        echo "Ravi de vous revoir ".$nickname ;
                        return TRUE ;
                    } else {
                        ?>
                        <meta http-equiv="refresh" content="2; URL=/">
                        <?php
                        echo "wrong password" ;
                    }
                } else {
                    ?>
                    <meta http-equiv="refresh" content="2; URL=/">
                    <?php
                    echo "Utilisateur inconnu" ;
                }
             }

        } catch (PDOException $e) {
            echo "Erreur : ".$e->getMessage() ;
        }

    }

    public function update($data){
       
        $db = connectToDB();
        $id_user = $_SESSION["id_user"] ;
        $firstname = $data['firstname'] ;
        $lastname = $data['lastname'] ;
        $nickname = $data['nickname'] ;
        $mail = $data['mail'] ;
        $password = $data['password'] ;
        $password = hash("sha256", $password) ;

        
        $statement = $db->prepare("
        UPDATE User 
        SET id_user = :id_user, firstname = :firstname, lastname = :lastname, nickname = :nickname, mail = :mail, password = :password
        WHERE id_user = :id_user
         ");
         try {
            $statement->execute(array(
                ':id_user' => $id_user,
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':nickname' => $nickname,
                ':mail' => $mail,
                ':password' => $password
            ));
            ?>
            <meta http-equiv="refresh" content="3; URL=/Dashboard">
            <?php
            echo $nickname.", vous venez de mettre à jour vos informations !";
            $_SESSION['name'] = $nickname ;
            return TRUE;
         }
         catch (PDOException $e) {
            echo "Erreur : ". $e->getMessage();
         }


    }

    public function signout(){
        $db = connectToDB();
        $statement = $db->prepare("
        DELETE FROM User
        WHERE id_user = :id_user
        ");
        try {
            $statement->bindValue(':id_user', $_SESSION['id_user']);
            $statement->execute();
            ?>
            <meta http-equiv="refresh" content="2; URL=/">
            <?php
            echo "Adieu ".$_SESSION['name']."!!! Nous allons vous regretter !!!";
            unset($_SESSION);
            return TRUE;
        } catch (PDOException $e) {
            echo "Erreur : ". $e->getMessage();
        }
    }
    
}