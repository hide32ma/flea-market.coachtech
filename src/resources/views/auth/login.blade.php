<!-- app.blade.phpを呼び出し -->
@extends('layouts.app')

@section('css')
<!-- このページで使用するcssを呼び出し -->
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('link')
<!-- ヘッダーのリンクを記述する -->

@endsection

@section('content-title')
<!-- h2タグを記述する -->

@endsection

@section('content')
<!-- コンテンツを記述する -->
<div class="auth-login_content">
    <div class="auth-login_top">
        <div class="auth-login_top-name">
            ログイン
        </div>
    </div>

<!-- バリデーションエラー表示 -->
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <!-- フォーム -->
    <form class="form" action="/login" method="post">

    @csrf

    <div class="auth-register_mail-address">
        <div class="mail-address">
            メールアドレス
        </div>
        <input class="input_mail-address" type="email" name="email" value="{{ old('email') }}" />
    </div>


    <div class="auth-register_login-password">
        <div class="login-password">
            パスワード
        </div>
        <input class="input_login-password" type="password" name="password" value="{{ old('password') }}"/>
    </div>



    <div class="auth-registration">
        <button type="submit" class="registration-button">
            ログインする
        </button>
    </div>


    </form>
    <!-- フォーム終了 -->

    <div class="member-registration-page_migration">
        <a href="/register" class="input-migration">
            会員登録はこちら
        </a>
    </div>

</div>

@endsection