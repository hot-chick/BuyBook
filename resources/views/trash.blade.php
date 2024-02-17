<x-header></x-header>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    h1 {
        color: black;
        padding: 20px;
        text-align: center;
    }

    .cart-items {
        list-style-type: none;
        padding: 0;
    }

    .cart-item {
        border-bottom: 1px solid #ccc;
        padding: 10px;
    }

    .cart-total {
        border-top: 1px solid #ccc;
        padding: 10px;
        text-align: right;
    }

    .buttonn {
        display: flex;
        justify-content: center
    }
</style>

<div class="container">
    <h1>Ваша корзина</h1>
    <main>
        <ul class="cart-items">
            <!-- Элементы корзины будут добавлены с помощью JavaScript -->
        </ul>
        <div class="cart-total">
            <strong>Итого:</strong> <span id="total">0</span> руб.
        </div>
        <div class="buttonn">
            <button class="cardButton_my_css" id="clear-cart">Очистить корзину</button>
        </div>
    </main>
</div>

</body>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cartItems = document.querySelector('.cart-items');
        const clearCartBtn = document.getElementById('clear-cart');
        const totalSpan = document.getElementById('total');

        // Пример: добавляем элементы корзины
        const items = [{
                name: 'Товар 1',
                price: 10
            },
            {
                name: 'Товар 2',
                price: 20
            },
            {
                name: 'Товар 3',
                price: 30
            }
        ];

        let total = 0;
        items.forEach(item => {
            const li = document.createElement('li');
            li.textContent = `${item.name} - ${item.price} руб.`;
            cartItems.appendChild(li);
            total += item.price;
        });

        totalSpan.textContent = total;

        // Обработчик кнопки очистки корзины
        clearCartBtn.addEventListener('click', function() {
            cartItems.innerHTML = '';
            total = 0;
            totalSpan.textContent = total;
        });
    });
</script>

</html>
