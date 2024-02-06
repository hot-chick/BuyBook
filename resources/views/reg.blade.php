<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>BuyBook</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data" action="/signup_valid" class="auth">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
        </div>
        @error('name')
            <div class="alert alert-danger alert-dismissible">
                <div class="alert-text">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @enderror
        <div class="mb-3">
            <label for="email" class="form-label">Электронная почта</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        @error('email')
            <div class="alert alert-danger alert-dismissible">
                <div class="alert-text">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @enderror
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        @error('password')
            <div class="alert alert-danger alert-dismissible">
                <div class="alert-text">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @enderror
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Подтвердите пароль</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
        </div>
        @error('confirm_password')
            <div class="alert alert-danger alert-dismissible">
                <div class="alert-text">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @enderror
        <button type="submit" class="cardButton_my_css">Войти</button>
    </form>

    <div class="links">
        <a class="nav-link" href="/auth">Есть аккаунт? Войдите!</a>
        <br>
        <a class="nav-link" href="/">Вернуться на главную</a>
    </div>


    <script>
        const password = document.getElementById("password");
        const confirm_password = document.getElementById("confirm_password");
        const form = document.getElementById("FORM");

        form.addEventListener("submit", (event) => {
            if (password.value !== confirm_password.value) {
                event.preventDefault();
                alert("Пароли не совпадают");
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
