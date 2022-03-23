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
    public function create(Request $request)
    {
        $this->validate($request,Todoexe::$rules);
        $todo = new Todoexe;
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }
    public function update(Request $request)
    {
        $this->validate($request, Todoexe::$rules);
        $form =$request->all();
        unset($form['_token']);
        Todoexe::where('id', $request->id)->update($form);
        return redirect('/');
    }
    Public function delete(Request $request)
    {
        $items = Todoexe::find($request->id);
        return view('delete', ['form'=> $items]);
    }
    Public function remove(Request $request)
    {
        Todoexe::find($request->id)->delete();
        return redirect('/');
    }
}
