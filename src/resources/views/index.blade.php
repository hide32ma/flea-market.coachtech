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
        <li class="header-nav_login">
            <a href="" class="header-link_login">ログイン</a>
        </li>
        <li class="header-nav_mypage">
            <a href="" class="header-link_mypage">マイページ</a>
        </li>
        <li class="header-nav_listing">
            <a href="" class="header-link_listing">出品</a>
        </li>
    </ul>
</nav>
@endsection

<!-- tabメニュー -->
<div class="tab-menu">
    <div class="tab-menu_active">
        <a href="" class="active-button">おすすめ</a>
    </div>
    <div class="tab-menu_my-list">
        <a href="" class="my-list_button">マイページ</a>
    </div>
</div>


@section('content-title')
<!-- h2タグを記述する -->


@endsection


@section('content')
<!-- コンテンツを記述する -->
<div class="product-container">
    @foreach ($products as $product)
        <div class="product-item">
            <img src="{{ $product->image }}" alt="COACHTECH" class="product-image" width="290" height="290">
            <div class="product-name">
            {{ $product->name }}
            </div>
        </div>
    @endforeach
</div>

@endsection