
<?php
    session_start();
    extract($_SESSION);
    if(!empty($_SESSION['auth'])){
        header('location: pagePrivee.php');
        die();
    }
    $status = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        extract($_POST);
        if(!empty($pass) && !empty($email)){
            include_once('library.php');
            if(isLoged($pass, $email)){
                $_SESSION['auth'] = array(
                    "email"=> $email,
                    "pass"=> $pass
                );
               header('location: pagePrivee.php');
            }else 
                $status = "mauvais login";

        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="container bg-info d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">

    <form action="login.php" method="POST"
            class="bg-white pb-5 w-50 d-flex flex-column justify-content-center align-items-center gap-3 rounded">
        <div class="form-group w-50 text-center my-3">
            <h1>Login form</h1>
            <p> Sécuriser avec les Sessions</p>
            <pre class="alert alert-danger"><?php echo $status; ?></pre>
        </div>
        <div class="form-group w-50">
            <label for="email">Address email:</label>
            <input name="email" required type="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group w-50">
            <label for="pass">Mot de passe:</label>
            <input name="pass" required type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="">
            <label class="form-check-label" for="">Se souvenir de moi</label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Me connecter</button>
        </div>
    </form>
</body>
</html>