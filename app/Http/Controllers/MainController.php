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

    public function bookPage(Book $book){
        return view('book', ['book' =>$book]);
    }
    public function trash(Request $request){
        // $books = Book::all();
        return view('trash');
    }
    public function addItem(Request $request)
    {
        // Валидация данных, если необходимо

        // Получаем данные о товаре из запроса
        $BookId = $request->input('book_id');
        $Book = Book::findOrFail($BookId);

        // Добавляем товар в корзину (логика может зависеть от того, как вы реализовали корзину)
        // Например, вы можете использовать сессию для хранения корзины
        // Или сохранять данные о корзине в базе данных для зарегистрированных пользователей
        // Здесь предполагается использование сессии
        $trash = session()->get('trash', []);

        // Добавляем товар в массив корзины
        $trash[$BookId] = [
            'id' => $Book->id,
            'name' => $Book->description,
            'name' => $Book->title,
            'price' => $Book->price,
            'name' => $Book->author,
            'name' => $Book->genre_id,
            'name' => $Book->age_limit_id,
            // Другие данные о товаре, которые вы хотите сохранить
        ];

        // Обновляем данные о корзине в сессии
        session()->put('cart', $cart);

        // Можете вернуть редирект или какой-то JSON-ответ в зависимости от вашей логики
        return redirect()->back()->with('success', 'Товар успешно добавлен в корзину');
    }
}
