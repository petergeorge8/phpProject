<?php

require __DIR__ . "/vendor/autoload.php";
define("APP_DIR", __DIR__ . "/App/");
define("VIEWS_DIR", __DIR__ . "/Views/");

$route = new App\Router;

$route->get("/", [App\Controllers\HomeController::class, "index"]);
$route->get("/home", [App\Controllers\HomeController::class, "index"]);

$route->get("/uploadFile", [App\Controllers\HomeController::class, "index"]);
$route->post("/uploadFile", [App\Controllers\UploadFileController::class, "uploadToFolder"]);

$route->get("/hospital/doctor", [App\Controllers\DoctorController::class, "index"]);
$route->get("/hospital/addDoctor", [App\Controllers\DoctorController::class, "add"]);



$route->reslove($_SERVER["REQUEST_URI"], strtolower($_SERVER["REQUEST_METHOD"]));