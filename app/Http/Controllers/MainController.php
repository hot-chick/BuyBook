<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class MainController extends Controller
{
    public function catalog(Request $request){
        $books = Book::all();
        return view('catalog', compact('books'));
    }

    // public function book(Request $request){

    // }
}
