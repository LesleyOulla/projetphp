<?php 

require('database.php');
require('verification.php');

$array = [];

// fonction de verification des éléments à partir d'une fonction des pages database et verfication
$verification = new Verification();
$verification->email($_GET['email']);

echo $verification->getIndexError(0);


;

$db = new Database();
$db->connectDb();

echo $_GET['nom'];
?>
<?php 
    require('database.php');
    require('verification.php');

    $array = [];

    $verification = new Verification();
    $verification->email($_GET['email']);

    echo $verification->getIndexError(0);
    

    $db = new Database();
    $db->connectDb();
?>