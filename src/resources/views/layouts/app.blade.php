<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>flea-market</title>

    <!-- sanitize.css呼び出し -->
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />

    <!-- common.css呼び出し -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />

    <!-- ページによって呼び出すcssが違う -->
    @yield('css')

</head>

<body>
    <div class="app">
        <header class="header">
            <h1 class="header-heading">
                <img src="{{ asset('img/logo.svg') }}" alt="">
            </h1>

            <!-- ページによっては使用する 又は使用しない -->
            @yield('link')

        </header>

        <div class="content-title">

            <!-- h2タグ -->
            @yield('content-title')

        </div>
    </div>

<main>

    <!-- メインコンテンツ -->
    @yield('content')



</main>
</body>
</html>
