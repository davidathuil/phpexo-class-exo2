<?php

$choix = "client";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["formsname"] == "inputclient") {
        require_once __DIR__ . "/class/Client.class.php";
        $clientNew = new Client($_POST["nom"], $_POST["email"], $_POST["password"], $_POST["adresse"]);
        $a = $clientNew;
    } else if ($_POST["formsname"] == "inputfournisseur") {
        require_once __DIR__ . "/class/Fournisseur.class.php";
        $fournisseurNew = new Fournisseur($_POST["nom"], $_POST["email"], $_POST["password"], $_POST["adresse"], $_POST["statutjuridique"], $_POST["siret"], $_POST["ca"], $_POST["numeroagrement"]);
        $a = $fournisseurNew;
    } else if ($_POST["formsname"] == "inputvendeur") {
        require_once __DIR__ . "/class/Vendeur.class.php";
        $vendeurNew = new Vendeur($_POST["nom"], $_POST["email"], $_POST["password"], $_POST["adresse"], $_POST["statutjuridique"], $_POST["siret"], $_POST["ca"]);
        $a = $vendeurNew;
    } else if ($_POST["choix"]) {
        $choix = $_POST["choix"];
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Landing Page</title>
    <meta charset="utf-8">


</head>

</html>


<body>
    <h1>Je suis un titre</h1>
    <form action="index.php" method="POST" onchange="this.submit()">
        <select name="choix">
            <option value="client">Client</option>
            <option value="fournisseur">Fournisseur</option>
            <option value="vendeur">Vendeur</option>
        </select>
        <input style="display:none" name="formsname" value="inputchoix">
        <input type="submit" value="submit">
    </form>
    <?php echo $choix; ?>
    <form action="index.php" method="POST">

        <input type="text" name="nom" placeholder="nom" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="1234" required>
        <input type="text" name="adresse" placeholder="adresse" required>
        <input style="display:none" name="formsname" value="input<?php echo $choix ?>">

        <?php
        if (isset($_POST["choix"])) {
            if (($_POST["choix"] == "fournisseur") || $_POST["choix"] == "vendeur") {


                echo "on rajoute les champs de formulaire"; ?>
                <input type="text" name="statutjuridique" placeholder="statutjuridique" required>
                <input type="text" name="siret" placeholder="siret" required>
                <input type="number" step="0.01" name="ca" placeholder="Chiffre d'affaire" required>

            <?php
            }
        }
        if (isset($_POST["choix"])) {
            if ($_POST["choix"] == "fournisseur") {


                echo "on rajoute les champs de formulaire fournisseur"; ?>
                <input type="text" name="numeroagrement" placeholder="numeroagrement" required>

        <?php  }
        } ?>

        <input type="submit" value="Validation">
    </form>

    <?php
    if ($_POST) {
        if (isset($clientNew) || isset($vendeurNew) || isset($fournisseurNew)) { ?>

            <h1>boucle clientnew</h1>
            <?php echo "Le Formulaire est bien validé"; ?><br>

            <?php echo "Le nom est:" . $a->nom; ?><br>
            <?php echo "Le mail est:" . $a->email; ?><br>
            <?php echo "La password hash est:" . $a->password; ?><br>
            <?php echo "L'adresse est:" . $a->adresse; ?><br>

        <?php }
        if (isset($vendeurNew) || isset($fournisseurNew)) { ?>

            <h1>Partie vendeurNew en+</h1>

            <?php echo "Le statutjuridique est:" . $a->statutjuridique; ?><br>
            <?php echo "Le siret est:" . $a->siret; ?><br>
            <?php echo "Le ca est:" . $a->ca; ?><br>

        <?php }
        if (isset($fournisseurNew)) { ?>
            <h1>Partie fournisseurNew en +</h1>

            <?php echo "Le numeroagrement est:" . $fournisseurNew->numeroagrement; ?><br>

        <?php } ?>
    <?php } ?>

</body>