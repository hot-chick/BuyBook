<x-header></x-header>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    .item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
    }

    .item:last-child {
        border-bottom: none;
    }

    .item-info {
        flex: 1;
    }

    .item-name {
        font-weight: bold;
    }

    .item-price,
    .item-quantity,
    .item-total {
        width: 100px;
        text-align: center;
    }

    .total {
        text-align: right;
        margin-top: 20px;
        font-weight: bold;
    }
</style>
</head>

<body>
    <div class="container">
        <h1>Корзина</h1>
        @foreach($trashes as $trash)
        <div class="item">
            <div class="item-info">
                <div class="item-name">Товар 1</div>
            </div>
            <div class="item-price">{{$trash->book_id}}</div>
            
        </div>
        @endforeach

        <div class="total">
            Итого: 475
        </div>
    </div>
</body>

</html>