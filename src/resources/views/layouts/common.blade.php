<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Noto+Serif+JP');

    .header {
      display: flex;
      justify-content: center;
      align-items: center;

      background-color: #FFFFFF;
      color: #8b7969;
      font-family: 'Noto Serif JP', sans-serif;

      border-bottom: 1px solid #8b7969;
    }

    .header-ttl {
      text-align: center;
      font-size: 40px;
      font-weight: 400;
      line-height: 52.12px;

    }

    .header-nav {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      position: absolute;
      top: 50px;
      right: 100px;
      padding: 5px 10px;

      border: 1px solid rgba(217, 198, 181, 1);
      background-color: #F6F6F6;
      color: rgba(217, 198, 181, 1);
      /* 内側の余白を追加 */
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    .content__title {
      display: flex;
      justify-content: center;
      color: #8b7969;
      font-family: 'Noto Serif JP', sans-serif;
    }
    </style>
    @livewireStyles
</head>
<header class="header">
  <h1 class="header-ttl">
    <a href="/login">FashionablyLate</a>
  </h1>
  @php
  $page = trim($__env->yieldContent('page'));
  $links = [
  'register' => ['text' => 'login', 'url' => '/login'],
  'login' => ['text' => 'register', 'url' => '/register'],
  'admin' => ['text' => 'logout', 'url' => '/logout', 'method' => 'post'],
  'contact' => ['text' => 'contact', 'url' => '/contact/index']
  ];
  @endphp
  @if(array_key_exists($page, $links))
  <nav>
    <div class="header-nav">
    @if($page === 'admin')
        <form id="logout-form" action="{{ $links[$page]['url'] }}" method="POST" style="display: none;">
          @csrf
        </form>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          {{ $links[$page]['text'] }}
        </a>
        @else
        <a href="{{ $links[$page]['url'] }}">
          {{ $links[$page]['text'] }}
        </a>
        @endif
      </div>
    </div>
  </nav>
  @endif
</header>

<body>
  <div class="content">
    @yield('content')
    @livewireScripts
  </div>
</body>


</html>