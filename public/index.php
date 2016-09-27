<?php
/**
 * Created by PhpStorm.
 * User: zanon
 * Date: 9/26/16
 * Time: 10:18 PM
 */

require_once __DIR__ . '/../vendor/autoload.php';

use ArizonaTest\Controller\HomeController,
    ArizonaTest\Controller\ContriesController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = substr($uri, strpos($uri, 'index.php'));
$method = $_SERVER['REQUEST_METHOD'];

if ($uri == '/' && $method == 'GET') {
    HomeController::index();
} else if ($uri == '/countries/download' && $method == 'GET') {
    ContriesController::download();
} else if ($uri == '/countries/list' && $method == 'GET') {
    ContriesController::list();
} else {
    header('HTTP/1.1 404 Not Found');
    echo '{"error":404}';
}