<?php

session_start();  

if(isset($_POST['submit'])){
    //Vérifie que mon form est soumis
    $users = array('test@test.fr'=> 'test', 'bidule@bidule.fr'=>'bidule') ;
    // je vérifie et j'assigne le mdp et email soumis à des variables
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset ($_POST['password']) ? $_POST['password'] : '';

    // je vérifie que email et mdp existent dans mon tab users

    if(isset($users[$email]) && $users[$email] == $password) {
       // Si dans le tableau de users j'ai un email qui correspond à l'émail recherché
       // et que dans le tab users le mdp correspond à l'émail

       $_SESSION['user'] = $email;

       header('Location:index.php');
       exit;
    }else {
        //Message d'erreur en cas de mauvaise authentification
        $error = "<span style='color:red'> Identifiants invalides </span>";
    }
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
        <h1> Connectez-vous </h1>

        <form action ="login.php" method="post" name="login_form">
        <?php if(isset($error)) 
                echo $error; ?>
        <table class="table">

        <tr>
            <td> Email </td> <br/>
            <td> <input type="email" name="email" class="input"></td>
        </tr>

        <tr>
            <td> Mot de passe </td> <br/>
            <td> <input type="password" name="password" class="input"></td>
        </tr>

        <td> &nbsp;</td>
        <td> <input name="submit" type= "submit" value="login" class ="button"> </td>

        </table>
        </form>

        <label id="option"> <input type="checkbox" name= "auto" checked> Se souvenir de moi </label>
        </div>
    </section>

<?php include('src/footer.php'); ?>
</body>
</html>