<x-header></x-header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<div class="container-xxl">
    <div class="main">
        {{-- сортировка по жанрам и возрастам --}}
        <div class="row row-cols-1 row-cols-md-4 g-5">
            @foreach ($books as $book)
                <div class="card card_my_css">
                    <img src="./images/{{ $book->image }}" class="card-img-top" alt="Ошибочка вышла">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->author }}</p>
                        <p class="card-text"><small class="text-muted">Цена: {{ $book->price }} рублей</small></p>
                    </div>
                    <a href="/book/{{$book->id}}">Подробнее</a>
                    <button class="cardButton_my_css">В корзину</button>
                </div>
            @endforeach
        </div>

    </div>
</div>
</body>

</html>
