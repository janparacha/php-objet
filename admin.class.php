<?php
include_once('user.class.php');

class Admin extends User
{
    private $droits;

    public function supprimer($user) {
        echo "<p> L'administrateur " . $this->pseudo . " supprime l'utilisateur" . $user->pseudo . "</p>";
    }



    function my_var_dump($var){
        echo "<pre style='background-color: orange; border: 2px solid black'>";
        print_r($var);
        echo"</pre>";
    }
}