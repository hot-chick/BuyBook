<?php

namespace App\Http\Controllers;

// use Auth;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Trash;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function catalog(Request $request){
        $books = Book::all();
        return view('catalog', compact('books'));
    }

    public function bookPage(Book $book){
        return view('book', ['book' =>$book]);
    }
    public function trash(Request $request){
        $user_id = Auth::user()->id;
        $trashes = trash::all();
        // dd($books);
        return view('trash', compact('trashes'));
        
    }
    public function addItem(Request $request)
    {

        $book = Book::findOrFail($request->book_id);

        $trash_create = trash::create([
            'user_id' => Auth::user()->id,
            'book_id'  => $book->id,
        ]);
        
        if ($trash_create) {
            return redirect("/trash")->with("success", "");
        } else {
            return redirect()->back()->with("error", "Что-то пошло не так");
        }
    }

    
    
}
