<?php

/*echo "<h1>";*/
if (isset($_GET["firstname"]))
    echo $_GET["firstname"];
/*echo "</h1>";*/
echo "<br>";
if (isset($_GET["firstname"]))
    echo $_GET["lastname"];

//header("Location: new.html"); /* Redirect browser */