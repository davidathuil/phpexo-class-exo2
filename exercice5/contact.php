<!DOCTYPE html>
<html>

<head>
    <title>Landing Page</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="./style.css" />
</head>

</html>

<body>
    <?php 
echo "test contact"
    echo $_POST["prixHT"];
    ?>
    <br>
    <?php echo $_POST["TVA"];?>
    <br>
    <?php echo $_POST["nom"];?>
    <br>
    <?php echo $_POST["categorie"];?>
    <br>
    <?php echo $_POST["stock"];?>
    <br>
    <?php echo $_POST["description"];?>
    <br>

    <?php 
      if($_POST) {
    // Récupération du contenu
    echo "le Formulaire est valide";
    }
    ?>
   

</body> 