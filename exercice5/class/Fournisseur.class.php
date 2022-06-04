<?php
class Fournisseur
{

    public string $nom;
    public string $email;
    public string  $password;
    public string $adresse;
    public string $statutjuridique;
    public string $siret;
    public float $ca;
    public string $numeroagrement;


    public function __construct(string $nom, string $email, string $password, string $adresse, string $statutjuridique, string $siret, float $ca, string $numeroagrement)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->adresse = $adresse;
        $this->statutjuridique = $statutjuridique;
        $this->siret = $siret;
        $this->ca = $ca;
        $this->numeroagrement = $numeroagrement;
    }
}
