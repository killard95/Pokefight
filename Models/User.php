<?php
// Objet utilisateur
class User {

    private $firstname ;
    private $lastname ;
    private $nickname ;
    private $mail ;
    private $password ;
    // constructeur afin de créer un nouvel utilisateur
    public function __construct($f,$l,$n,$m,$p) {
        $this->firstname = $f ;
        $this->lastname = $l ;
        $this->nickname = $n ;
        $this->mail = $m ;
        $this->password = $p ;
    }
    // fonction get qui retourne un des attribut d'un objet utilisateur
    public function get($attr) {
        return $this->$attr ;
    }
    // fonction set qui modifie la valeur d'un objet utilisateur
    public function set($attr, $value) {
        $this->$attr = $value ;
    }
}