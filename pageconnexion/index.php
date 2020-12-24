<?php

session_start();            //obligatoire , demarre une session

if(!isset($_SESSION['user'])){
    header("Location:login.php");
    exit;   // arret du code là
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naitflix sans bdd</title>     <!-- Netflix made in China-->
    <link rel="stylesheet" href="./css/style1.css" />
</head>
<body>

<?php include('src/header.php'); ?>
    <section>
        <div id="login-body">
            Vous êtes connecté "<?= $_SESSION['user']?>"<a href="logout.php"> <strong style='color:red'>Cliquez ici </strong> </a> pour vous déconnecter.
        </div>
    </section>

<?php include ('src/footer.php'); ?>
</body>
</html>