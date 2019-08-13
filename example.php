<?php
require 'vendor/autoload.php';

use MyPackage\example\Package;

$name = new Package();
echo $name->myName();