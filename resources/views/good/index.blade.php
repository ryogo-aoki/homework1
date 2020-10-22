@extends('good/layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">商品一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">商品名</th>
        <th class="text-center">画像</th>
        <th class="text-center">説明文</th>
        <th class="text-center">価格</th>
        <th class="text-center">操作</th>
      </tr>
      @foreach($goods as $good)
      <tr>
        <td>
         <a href="/api/good/{{ $good->id }}/edit">{{ $good->id }}</a>
       </td>
        <td>{{ $good->title }}</td>
        <td>
          <div>
        <img src="{{ $good->image }}" alt="image" style="width: 30%; height: auto;"/>
          </div></td> <!--imageにするべき-->
        <td>{{ $good->description }}</td>
        <td>{{ $good->price }}</td>
        <td>

           <a href="/api/good/{{ $good->id }}/edit">編集</a>

          <form action="/api/good/{{ $good->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            @csrf
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/api/good/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>
@endsection
