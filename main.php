<?php
include __DIR__ . "/models/movies.php";

$films = [
    new film("Never break down", "2:00h","khalil" ),
    new film("Ritorno al futuro", "1:50","Regista 2"),
    new film("Bad Boys", "3:03","Regista3")
];
return $films;