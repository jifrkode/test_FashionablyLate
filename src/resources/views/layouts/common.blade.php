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
      justify-content: space-between;
      align-items: center;
      height: 70px;
      padding: 0 30px;
      background-color: #FFFFFF;
      color: #8b7969;
      font-family: 'Noto Serif JP', sans-serif;
    }

    .header-ttl {
      font-size: 24px;
      width: 80px;
      text-align: center;
      flex-grow: 1;
    }

    .header-nav-item:not(:last-child) {
      margin-right: 30px;
    }

    a {
      text-decoration: none;
      color: inherit;
    }
  </style>
</head>
<header class="header">
  <h1 class="header-ttl">
    <a href="">FashionablyLate</a>
  </h1>
  @if(trim($__env->yieldContent('page')) === 'register')
  <nav class="header-nav">
    <a href="https://estra-inc.notion.site/85fa2ceff6ee475d8a64873488aceda3#af4df8d0416b4584b8940cdf423c5ced">
      register
    </a>
  </nav>
  @endif
</header>

<body>
  <div class="content">
    @yield('content')
  </div>
</body>


</html>