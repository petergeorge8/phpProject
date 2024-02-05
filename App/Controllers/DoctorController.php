<?php

namespace App\Controllers;

use App\View;

class DoctorController
{

    private int $id;
    private string $name;
    private int $spec_id;

    public function index()
    {
        return View::make("hospital/doctor");
    }
    public function add()
    {
        return View::make("hospital/addDoctor");
    }
}
