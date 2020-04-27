<?php
include_once '../vendor/autoload.php';
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Helpers\ImageHelper;
use Models\Order;
use Models\Product;
use Models\User;


try {
    $obj = new MainController();
    $obj1 = new DashboardController();
    $obj2 = new OrdersController();
    $obj3 = new ImageHelper();
    $obj4 = new Order();
    $obj5 = new Product();
    $obj6 = new User();
} catch (Throwable $t) {
    echo  $t->getMessage();
}
