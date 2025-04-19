<!-- app.blade.phpを呼び出し -->
@extends('layouts.app')

@section('css')
<!-- このページで使用するcssを呼び出し -->
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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

                <li class="header-nav_listing">
            <a href="/sell" class="header-link_listing">出品</a>
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

                <li class="header-nav_listing">
                    <a href="/login" class="header-link_listing">出品</a>
                </li>
                @endguest

    @endsection

        
    </ul>
</nav>
@endsection

<!-- tabメニュー -->
@auth
<div class="tab-menu">
    <div class="tab-menu_active">
        <a href="" class="active_button">おすすめ</a>
    </div>
    <div class="tab-menu_my-list">
        <a href="" class="my-list-button">マイページ</a>
    </div>
</div>
@endauth

@guest
<div class="tab-menu">
    <div class="tab-menu_active">
        <a href="" class="active-button">おすすめ</a>
    </div>
    <div class="tab-menu_my-list">
        <a href="/login" class="my-list_button">マイページ</a>
    </div>
</div>
@endguest

@section('content-title')
<!-- h2タグを記述する -->


@endsection


@section('content')
<!-- コンテンツを記述する -->
<div class="product-container">
    @foreach ($products as $product)
        <div class="product-item">
            <a href="{{ route('show', $product->id) }}" class="product-button">
            <img src="{{ $product->image }}" alt="COACHTECH" class="product-image" width="290" height="290">
            <div class="product-name">
            {{ $product->name }}
            </div>
        </div>

        
    @endforeach
</div>



@endsection