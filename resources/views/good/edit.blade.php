@extends('good/layout')
@section('content')
<!--削除
<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>商品登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <form action="/good/{{ $good->id }}" method="post">
                <!-- updateメソッドにはPUTメソッドがルーティングされているのでPUTにする -->
<!--削除               <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">商品名</label>
                    <input type="text" class="form-control" name="title" value="{{ $good->title }}">
                </div>
                <div class="form-group">
                    <label for="price">説明文</label>
                    <input type="text" class="form-control" name="description" value="{{ $good->description }}">
                </div>
                <div class="form-group">
                    <label for="author">価格</label>
                    <input type="text" class="form-control" name="price" value="{{ $good->price }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/good">戻る</a>
            </form>
        </div>
    </div>
</div>
-->
@include('good/form', ['target' => 'update'])
@endsection
