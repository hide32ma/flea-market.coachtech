<!-- app.blade.phpを呼び出し -->
@extends('layouts.app')

@section('css')
<!-- このページで使用するcssを呼び出し -->
<link rel="stylesheet" href="{{ asset('css/edit.css') }}" />
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
            <a href="/sell" class="header-link_listing">出品</a>
        </li>
    </ul>
</nav>
@endsection



@section('content')


@if (Auth::user()->is_first_login)

<!-- バリデーションエラー表示 -->
    @if ($errors->any())
        <ul class="error-message">
            @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif


<!-- コンテンツを記述する -->
<div class="profile-edit_content">
    <div class="profile-edit_top">
        <div class="profile-edit_top-name">
            プロフィール設定
        </div>
    </div>


    <!-- フォーム -->
    <form class="form" action="/mypage/profile" method="post">

    @csrf

    <div class="profile-edit_name">
        <div class="user-name">
            ユーザー名
        </div>
        <input class="input_user-name" type="text" name="user_name" value="{{ old('user_name') }}" />
    </div>


    <div class="profile-edit_zip_code">
        <div class="user-zip_code">
            郵便番号
        </div>
        <input class="input_user-zip_code" type="text" name="zip_code" value="{{ old('zip_code') }}"/>
    </div>

    <div class="profile-edit_address">
        <div class="user-address">
            住所
        </div>
        <input class="input_user-address" type="text" name="address" value="{{ old('address') }}" />
    </div>


    <div class="profile-edit_building_name">
        <div class="user-building_name">
            建物名
        </div>
        <input class="input_user-building_name" type="text" name="building_name" value="{{ old('building_name') }}"/>
    </div>



    <div class="profile-edit">
        <button type="submit" class="profile-edit_button">
            更新する
        </button>
    </div>


    </form>
    <!-- フォーム終了 -->



</div>

@else

<div>２回目以降のログインページ</div>


@endif

@endsection
