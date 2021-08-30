<?php
    require_once __DIR__ . "./database/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
        <img src="https://1000marche.net/wp-content/uploads/2020/03/Spotify-logo.png" alt="">
    </header>
    <div class="main">
        <div class="container">
            <div class="row">
            <?php
                foreach ($database as $disc) {?>
                    <div class="col-2 disc">
                        <img src="<?php$disc['poster'];?>" alt="">
                }
            ?>
            </div>
        </div>
    </div>

<script src="./js/script-1.js"></script>
</body>
</html>