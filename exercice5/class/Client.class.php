<?php
class Client
{


    public string $nom;
    public string $email;
    public string  $password;
    public string $adresse;


    public function __construct($nom, $email, $password, $adresse,)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->adresse = $adresse;
    }
}
