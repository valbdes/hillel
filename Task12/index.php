<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Helpers\ImageHelper;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;


spl_autoload_register(function ($namespace) {
    include_once __DIR__ . '/' . str_replace('\\', '/', $namespace)  . '.php';
}, true);


try {
    $obj = new MainController();
    $obj1 = new DashboardController();
    $obj2 = new OrdersController();
    $obj3 = new ImageHelper();
    $obj3 = new Order();
    $obj3 = new Product();
    $obj3 = new User();
} catch (Throwable $t) {
    echo  $t->getMessage();
}
