<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>商品登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
          @if($target == 'store')
          <form action="/api/good" method="post"  enctype="multipart/form-data">
          @elseif($target == 'update')
            <form action="/api/good/{{ $good->id }}" method="post" enctype="multipart/form-data">
                @method('PUT')
          @endif
                @csrf
                <div class="form-group">
                    <label for="title">商品名</label>
                    <input type="text" class="form-control" name="title" value="{{ $good->title }}" maxlength="1000"　required >
                </div>
                <div class="form-group">
                    <label for="description">説明文</label>
                    <input type="text" class="form-control" name="description" value="{{ $good->description }}" maxlength="5000" required >
                </div>
                <div class="form-group">
                    <label for="price">価格</label>
                    <input type="text" class="form-control" name="price" value="{{ $good->price }}" required>
                </div>
                <div class="form-group">
                    <label for="image">画像</label>
                    <input type="file" name="image">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/api/good">戻る</a>
            </form>
        </div>
    </div>
</div>
