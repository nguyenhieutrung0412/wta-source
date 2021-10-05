<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class DashbordAdminController extends Controller
{
    public function getIndexAdmin(){
        return View('backend.layouts.index');
    }
}
