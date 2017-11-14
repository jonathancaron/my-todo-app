<?php

require 'config.php';

try

{

$bdd = new PDO("mysql:host=$servername;dbname=$dbname;charset=$char", $username, $pass);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch (Exception $e)

{

    die('Erreur : ' . $e->getMessage());
}
?>
