<!-- app.blade.phpを呼び出し -->
@extends('layouts.app')

@section('css')
<!-- このページで使用するcssを呼び出し -->
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('link')
<!-- ヘッダーのリンクを記述する -->

@endsection

@section('content-title')
<!-- h2タグを記述する -->

@endsection

@section('content')
<!-- コンテンツを記述する -->
<div class="auth-register_content">
    <div class="auth-register_top">
        <div class="auth-register_top-name">
            会員登録
        </div>
    </div>

    <!-- フォーム -->
    <form class="form" action="/register" method="post">

    @csrf

    <div class="auth-register_user-name">
        <div class="user-name">
            ユーザー名
        </div>
        <input class="input_user-name" type="text" name="name" value="{{ old('name') }}" />
    </div>

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

    <div class="auth-register_confirmation-password">
        <div class="confirmation-password">
            確認用パスワード
        </div>
        <input class="input_confirmation-password" type="password" name="password_confirmation" />
    </div>

</div>

<div class="auth-registration">
    <button class="registration-button">
        登録する
    </button>
</div>

    </form>
    <!-- フォーム終了 -->

<div class="login-page_migration">
    <a href="" class="input-migration">
        ログインはこちら
    </a>
</div>

@endsection