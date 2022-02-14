<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data = BookModel::all();
        return view('book', ['books' => $data]);
    }
}
