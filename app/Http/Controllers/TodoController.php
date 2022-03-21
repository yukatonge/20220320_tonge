<?php

namespace App\Http\Controllers;

use App\Models\Todoexe;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todoexe::all();
        return view('index', ['items' => $items]);
    }
}
