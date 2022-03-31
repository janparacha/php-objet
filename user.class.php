<?php

class User
{
    // Propriétés
    protected $pseudo;
    private $email;
    private $signature;
    private $actif;

    public function getPseudo()
    {
        return $this-> pseudo;
    }
    public function setPseudo($newPseudo)
    {
        if (!empty($newPseudo) and strlen($newPseudo) < 10 )
        {
        $this->pseudo = $newPseudo;
        }
        else {
            echo '<p> Pseudo vide ou trop long</p>';
        }

    }
    public function envoyerEmail($titre,$message)
    {
        mail($this->email, $titre, $message); 
    }
    public function setEmail ($newEmail) 
    {
        if (!empty($newEmail) and strlen($newEmail) < 100) 
        {
            $this->email = $newEmail;
        }
        else 
        {
            echo '<p> Mail trop long </p>';
        }
    }
}