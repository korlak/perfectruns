<?php
//автопідключення классів
spl_autoload_register(static function ($className) {
    $path = str_replace('\\', '/', $className.'.php');
    if(file_exists($path))
        include_once($path);
});

//перевірка чи адреса існує, якщо ні повертається порожній рядок
if(isset($_GET['route']))
    $route = $_GET['route'];
else
    $route = '';


//передача адреси в класс з роутингом
$router = new core\Router($route);
$router->run();
$router->finish();