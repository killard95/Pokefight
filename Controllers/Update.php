<?php

class Update extends Controller {

    public function index() {
        $this->render("Update_template");
    }

    public function update() {

        $newUser = new User_DAO ;
        // $newUser->insert($_POST);

        if($newUser->update($_POST)) {
            // $info['message'] = ['msg' => 'User has been signed in'];
            // $this->set($info) ;
            // $this->render("Signin_template");
        }
    }
}