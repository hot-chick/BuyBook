<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Trash;

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
        // $books = Book::all();
        return view('trash');
    }
    public function addItem(Request $request)
    {

        $book = Book::findOrFail("id");

        $trash_create = trash::create([
            'user_id' => Auth::user()->id,
            'book_id'  => $book,
        ]);
        
        if ($trash_create) {
            return redirect("/trash")->with("success", "");
        } else {
            return redirect()->back()->with("error", "Неверный логин или пароль");
        }
        // // Валидация данных, если необходимо

        // // Получаем данные о товаре из запроса
        // $BookId = $request->input('book_id');
        // $Book = Book::findOrFail($BookId);

        // // Добавляем товар в корзину (логика может зависеть от того, как вы реализовали корзину)
        // // Например, вы можете использовать сессию для хранения корзины
        // // Или сохранять данные о корзине в базе данных для зарегистрированных пользователей
        // // Здесь предполагается использование сессии
        // $trash = session()->get('trash', []);

        // // Добавляем товар в массив корзины
        // $trash[$BookId] = [
        //     'trash_id' => $Book->trash_id,
        //     'user_id' => Auth::user()->id,
        //     'book_id' => $Book->book_id,
        //     // Другие данные о товаре, которые вы хотите сохранить
        // ];

        // // Обновляем данные о корзине в сессии
        // session()->put('trash', $trash);

        // // Можете вернуть редирект или какой-то JSON-ответ в зависимости от вашей логики
        // return redirect()->back()->with('success', 'Товар успешно добавлен в корзину');


        
    }

    
    
}
