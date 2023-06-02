<?php

use Core\Router;


spl_autoload_register(function ($class_name) {
    $class_name = str_replace("\\", '/', $class_name); // \\ = \
    $file_path = __DIR__ . "/" . $class_name . ".php";
    require_once $file_path;
});



Router::get('/', 'front');
Router::get('/items', 'items.index');
Router::get('/items/single', 'items.single');
// Create item
Router::post('/items/create', 'items.create');
// Update item
Router::put('/items/update', 'items.update');
// Delete Item
Router::delete('/items/delete', 'items.delete');

Router::redirect();
