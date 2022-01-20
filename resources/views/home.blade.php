<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <title>Система мониторинга АКЭС</title>
    </head>
    <body>
        <div class="window_home">
            <div class="theme_home">
                <div class="theme_content">
                    <div class="text"><h3>Система мониторинга АКЭС</h3></div>
                    <button class="button to_login" type="button">
                        <a href="{{ url('login') }}" class="button_text">Авторизироваться</a>
                    </button>
                </div>
                <div class="theme_background">
                    <span class="background_shape shape4"></span>
                    <span class="background_shape shape3"></span>		
                    <span class="background_shape shape2"></span>
                    <span class="background_shape_home shape1_home"></span>
                </div>	
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
