<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Регистрация и вход</title>
</head>
<body>

    <div class="container">
        <br><h4>Регистрация</h4>
        <form>
            <input type="text" name="reg_nick" id="reg_nick" placeholder="Никнейм" class="form-control"><br>
            <button type="button" name="register" id="register" class="btn btn-success">Зарегистрироваться</button>
        </form>
        <div id="reg_error"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="config/register.js"></script>

    <div class="container">
        <br><h4>Вход</h4>
        <form>
            <input type="text" name="auth_nick" id="auth_nick" placeholder="Никнейм" class="form-control"><br>
            <button type="button" name="authorisation" id="authorisation" class="btn btn-success">Войти</button>
        </form>
        <div id="auth_error"></div>
    </div>
    <script src="config/authorisation.js"></script>

</body>
</html>
