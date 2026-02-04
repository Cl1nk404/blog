<?php
declare(strict_types=1);

require '../vendor/autoload.php';
header('Content-Type: text/html; charset=utf-8');

use App\Kernel;

$kernel = new Kernel();
$kernel->handle($_SERVER['REQUEST_URI']);
