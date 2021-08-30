<?php 
/*
Stampiamo i dischi solo con l’utilizzo di PHP, 
che stampa direttamente i dischi in pagina: al caricamento della pagina 
ci saranno tutti i dischi.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Php Ajax dischi</title>
<body>

<?php 
    require_once __DIR__ . "/database/dischi.php";
?>

<header>
    <img class="logo" src="./img/logo.png" alt="Spotify logo">
</header>

<div class="container">
    <div class="row">

        <?php 
            foreach($dischi as $disco) {?>

                <div class="album-card col-5" >
                    <img src="<?php echo $disco['poster'] ?>" alt="<?php echo "Cover album - {$disco['title']}"?>">
                    <h5><?php echo $disco['title'] ?></h5>
                    <h6><?php echo $disco['author'] ?></h6>
                    <h6><?php echo $disco['year'] ?></h6>
                </div>

            <?php
            }
        ?>

    </div>

</div>
    
</body>
</html>