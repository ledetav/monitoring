<!DOCTYPE html>
<html>
<head>
    <title>Авторизация в системе мониторинга АКЭС</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div class="window">
        <div class="theme">
            <div class="theme_content">
                <h3>Авторизироваться в системе</h3>
                <form class="login" method="POST">
                    @csrf
                    <div class="login_field">
                        <i class="login_icon fa fa-user"></i>
                        <input type="text" class="login_input" id="name" name="name" placeholder="Имя пользователя">
                        @error('name')
                            <div class="alert alert-danger">{{ message }}</div>
                        @enderror
                    </div>
                    <div class="login_field">
                        <i class="login_icon fa fa-lock" aria-hidden="true"></i>
                        <input type="password" class="login_input" id="password" name="password" placeholder="Пароль">
                        @error('password')
                            <div class="alert alert-danger">{{ message }}</div>
                        @enderror
                    </div>
                    <button class="button login_submit">
                        <span class="button_text">Войти</span>
                        <i class="button_icon fa fa-chevron-right"></i>
                    </button>				
                </form>
            </div>
            <div class="theme_background">
                <span class="background_shape shape4"></span>
                <span class="background_shape shape3"></span>		
                <span class="background_shape shape2"></span>
                <span class="background_shape shape1"></span>
            </div>	
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://use.fontawesome.com/bd46de58ec.js"></script>
</body>
</html>