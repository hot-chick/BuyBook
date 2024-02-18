<x-header></x-header>
<div class="container" style="max-width: 500px">
    <div class="card text-center">
        <div class="card-header">
            {{ $book->title }}
        </div>
        <div class="card-body">
            <img style="max-width: 500px;" src="../images/{{ $book->image }}" class="card-img-top" alt="Ошибочка вышла">
            <p class="card-text">{{ $book->description }}</p>
            <form action="/addItem" enctype="multipart/form-data" method="post">
                @csrf
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <button type="submit">Добавить в корзину</button>
            </form>
        </div>
        <div class="card-footer text-body-secondary">
            {{ $book->author }}
        </div>
    </div>
</div>

</body>

</html>