<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COACHTECH-FLEA-MARKET</title>

    <!-- sanitize.css呼び出し -->
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />

    <!-- common.css呼び出し -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />

    @yield('css')

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">aaa</h1>
        </div>
    </header>

<main>

    @yield('content')



</main>
</body>
</html>
