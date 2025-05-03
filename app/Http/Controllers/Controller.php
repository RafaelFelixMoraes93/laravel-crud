<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function anotacoes() {
        return view("anotacoes");
    }

    public function relacionamentos() {
        return view("relacionamentos");
    }
}
