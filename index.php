<?php
require_once "vendor/autoload.php";

session_start();

use Migue\Timetrack\Config\Parameters;
use Migue\Timetrack\Controllers\ViewController;
/*use Migue\Timetrack\Database\Conn;*/


$nameController = "migue\Timetrack\Controllers\\";
$nameController = $nameController . (($_GET['controller']) ?? Parameters::$DEFAULT_CONTROLLER) . 'Controller';

$action = $_GET['action'] ?? Parameters::$DEFAULT_ACTION;


if (class_exists($nameController)) {
    $controller = new $nameController();
    
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else (new ViewController())->viewError('Action not found');
} else (new ViewController())->viewError('Controller not found');



/*
try {
    $db = Conn::connect(); 
    echo "✅ Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
*/
?>