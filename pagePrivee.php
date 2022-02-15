<?php
    session_start();
    include('library.php');
    extract($_SESSION);
    if(empty($_SESSION['auth'])){
        header('location: login.php');
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page privee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <h1>Pannel : Page privee</h1>
    <a href="logout.php">Ce deconnecter</a>
    <p class="bg-success">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam eius odit unde expedita nostrum, error assumenda quo sunt atque qui?
    Sapiente quo nam possimus et! Debitis necessitatibus tempore temporibus, expedita voluptatem nemo! Aut odit nesciunt sit nobis distinctio blanditiis cupiditate?
    Facilis itaque, explicabo accusamus quo incidunt numquam laboriosam fuga. Consequuntur exercitationem, fuga esse praesentium nulla quasi recusandae officiis at libero?
    Tempora id, eos similique quae hic perferendis ex accusamus atque molestiae vitae voluptatem possimus saepe adipisci a nulla esse temporibus.
    Laborum dolores magnam ducimus quas reprehenderit incidunt deleniti cupiditate! Quibusdam unde, in est saepe delectus ab magni laborum ducimus labore?
    Nemo dolorum in quasi doloremque tempora recusandae magni ullam aliquam. Sunt sint quis saepe natus animi itaque fugiat ipsa eligendi!
    Quidem voluptatem perferendis nihil dolorem assumenda ipsum? Ad pariatur deleniti in magni itaque quis. Ut corrupti doloremque ullam praesentium beatae?
    Sequi sapiente et facere, alias consequuntur reprehenderit nesciunt odio consequatur sit itaque ad iste fugit quibusdam cumque quidem incidunt quos?
    Tempora tenetur magni eaque perferendis, perspiciatis, impedit aliquid id, nemo molestiae maiores qui accusamus ratione sed odio obcaecati voluptate in.
    Perferendis sint blanditiis alias tenetur eaque omnis deserunt veritatis quisquam ratione, laborum tempore fugiat aliquid, odio mollitia, quod a nihil.</p>
</body>
</html>