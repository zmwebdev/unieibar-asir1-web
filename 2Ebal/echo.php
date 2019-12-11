<?php

/*echo "<h1>";*/
if (isset($_GET["firstname"]))
    echo $_GET["firstname"];
/*echo "</h1>";*/
echo "<br>";
if (isset($_GET["lastname"]))
    echo $_GET["lastname"];

echo "<br>";
if (isset($_GET["pasahitza"]))
    echo $_GET["pasahitza"];

echo "<br>";
if (isset($_GET["gender"]))
    echo $_GET["gender"];
        
echo "<br>";
if (isset($_GET["have_a_bike"]))
    echo $_GET["have_a_bike"];

//header("Location: new.html"); /* Redirect browser */