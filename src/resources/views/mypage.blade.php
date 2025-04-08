<!-- app.blade.phpを呼び出し -->
@extends('layouts.app')

@section('css')
<!-- このページで使用するcssを呼び出し -->
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}" />
@endsection


@section('link')
<!-- ヘッダーのリンクを記述する -->

<!-- 検索フォーム -->
<form class="header-search">
    @csrf
    <input type="text" name="query" placeholder="何をお探しですか？" class="search-input" required>
</form>

<!-- ヘッダーナビリンク -->
<nav class="header-nav">
    <ul class="header-links">

    @section('nav')
        <!-- ログイン状態時に表示される -->
                @auth
                <li class="header-nav_mypage">
                    <a class="header-link_mypage" href="/mypage">マイページ</a>
                </li>
        <!-- ログアウト機能 -->
                <li class="header-nav_logout">
                    <form class="form-logout" action="/logout" method="post">
                @csrf
                    <button type="submit" class="header-nav_logout-button">ログアウト</button>
                    </form>
                </li>
                @endauth

        <!-- ログアウト時に表示される -->
                @guest
                <li class="header-nav_mypage">
                    <a class="header-link_mypage" href="/login">マイページ</a>
                </li>
        <!-- ログイン機能 -->
                <li class="header-nav_logout">
                    <form class="form-logout" action="/login" method="post">
                @csrf
                    <a href="/login" class="header-nav_logout-button">ログイン</a>
                    </form>
                </li>
                @endguest

    @endsection

        <li class="header-nav_listing">
            <a href="" class="header-link_listing">出品</a>
        </li>
    </ul>
</nav>
@endsection
