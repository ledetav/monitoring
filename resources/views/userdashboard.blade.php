<!DOCTYPE html>
<html lang="en">
<head>
    <title>Панель управления</title> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" > 
</head>
<body>
    <button class="mode-switch" title="Switch Theme">
        <i class="fa-solid fa-moon fa-xl"></i>
    </button>
      <div id="app">
        <div class="light-theme dark-theme">
          <user-dashboard></user-dashboard> 
        </div>
    </div>
    <div class="horisontal-menu ">
      <ul class="horisontal-menu-list">
        <li class="horisontal-menu-list-item exit">
          <a href='/login'>          
            <i class="fa-solid fa-power-off"></i>
              <span>Выйти</span>
          </a>
        </li>
      </ul>
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/90e416a9da.js" crossorigin="anonymous"></script>
</body>
</html>