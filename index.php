<?php
include __DIR__ . "/header.php";
include __DIR__ . "/main.php";
include __DIR__ . "/footer.php";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
    <link rel="stylesheet" href="stile.css">
</head>

<body>
    <header>
        <h1><?php echo $header; ?></h1>
    </header>
    
    <main>
        <ul>
            <?php foreach ($films as $film) { 
                echo "<li> $film</li>";
             }?> 
        </ul>
    </main>
    <footer>
        <h2><?php echo $footer;?></h2>
    </footer>
</body>

</html>