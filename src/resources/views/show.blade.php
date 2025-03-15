<!-- app.blade.phpを呼び出し -->
@extends('layouts.app')

@section('css')
<!-- このページで使用するcssを呼び出し -->
<link rel="stylesheet" href="{{ asset('css/show.css') }}" />
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

@section('content-title')
<!-- h2タグを記述する -->


@endsection

@section('content')
<!-- コンテンツを記述する -->

<div class="main-content">
    <div class="product-image-area">
        <img src="{{ $product->image }}" alt="COACHTECH" class="product-image" width="600" height="600">
    </div>

    <div class="product-description-area">
        <div class="product-title">
            <!-- 商品名 -->
            <div class="product-name">
                <div class="item-title">
                    {{ $product->name }}
                </div>
            </div>
            <!-- ブランド名 -->
            <div class="product-brand_name">
                <div class="item-brand_name">
                    {{ $product->brand_name }}
                </div>
            </div>
            <!-- 商品価格 -->
            <div class="product-price">
                <div class="item-price">
                    <!-- number_formatを使用する事により表示を15000.00〜15,000に調整している -->
                    ¥{{ number_format($product->price) }}(税込)
                </div>
            </div>
            <!-- お気に入りとコメント数 -->
            <div class="product-likes_comments">
                <div class="item-likes">
                    <img src="{{ asset('img/') }}" alt="星">
                </div>

                <div class="item-comments">
                    <img src="{{ asset('img/') }}" alt="コ">
                    </a>
                </div>
            </div>
        </div>

        <div class="purchase-area">
            <div class="purchase-procedure-button">
                <a href="" class="purchase-procedure">購入手続きへ</a>
            </div>
        </div>

        <div class="explantion-area">
            <div class="product-explantion-tab">
                <div class="product-explantion">商品説明</div>
            </div>

            <!-- 商品説明文 -->
            <div class="explantion-text">
                <div class="explantion-text_date">
                    {{ $product->explantion }}
                </div>
            </div>
        </div>

        <div class="info-area">
            <div class="product-info-tab">
                <div class="product-info">商品の情報</div>

            <div class="product-category">
                <div class="category-tab">
                    <div class="product-category_name">カテゴリー</div>
                    <div class="product-category_date">
                        
                    </div>
                </div>
            </div>

            <div class="product-condition">
                <div class="condition-tab">
                    <div class="product-condition_name">商品の状態</div>
                    <div class="product-condition_date">
                        <div class="product-condition_date_name">
                            {{ $product->condition }}
                        </div>
                    </duv>
                </div>
            </div>
        </div>

        <div class="comments-area">
            <div class="comments-tab">
                <div class="comments-count">コメント（1）</div>
            </div>

            <div class="user-profile_comment-area">
                <div class="user-profile-image">

                </div>
            </div>

            <div class="user-profile_name">
                <div class="user-profile_name-date">
                    admin
                </div>
            </div>

            <div class="user-comment_list">
                <div class="user-comment_date">
                    こちらにコメントが入ります。
                </div>
            </div>
        </div>

        <div class="comments-on-product-area">
            <div class="comments-on-product-tab">
                商品へのコメント
            </div>
            <div class="comments-on-product-text">
            </div>
        </div>

        <div class="comment-submit">
            <div class="comment-submit_button">
                <div class="comment-submit_button-name">コメントを送信する</div>
                
            </div>
        </div>






    </div>
</div>






@endsection
