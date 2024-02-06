<x-header></x-header>
<div class="card mb-3">
    <img src="./images/{{ $book->image }}" class="card-img-top" alt="Ошибочка вышла">
    @foreach ($books as $book)
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <p class="card-text">{{ $book->description }}</p>
            <p class="card-text"><small class="text-body-secondary">{{ $book->author }}</small></p>
        </div>
    @endforeach
</div>
</body>

</html>
