<?php
require '../vendor/autoload.php';

//Autoloader::register();

use App\Wcs\Hello;
$hello = new Hello();
echo $hello->talk();
?>