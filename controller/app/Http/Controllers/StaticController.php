<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return "<h1>welcome</h1>";
    }

    public function about () {
        return "<h1>about </h1>";
    }
    
    public function store() {
        return "<h1>store</h1>";
    }
      public function update(Request $request, $id)
    {
        return "<h1>Mise à jour de la promotion numéro ".$id."</h1>";
    }

