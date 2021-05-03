<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class PageController extends controller{
    public function dashboard(){
        return Inertia::render('Dashboard');
    }

    public function index(){
        return Inertia::render('Welcome');
    }
}