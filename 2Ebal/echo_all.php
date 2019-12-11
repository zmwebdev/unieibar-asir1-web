<?php

/*
echo $_GET["firstname"];
echo "<br>";
echo $_GET["lastname"];
*/

foreach ($_SERVER as $key => $val) 
    echo $key . "=>" . $val . "<br/>";

//header("Location: new.html"); /* Redirect browser */