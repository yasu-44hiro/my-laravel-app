<form action="/rest" method="post">
    <dl>
      @csrf
      <dt></dt>
      <dd><input type="hidden" name="user_id" value="{{Auth::user()->id}}"></dd>
      <dt class="mb-3"><label for="category_name" class="form-label">カテゴリー</label></dt>
      <dd>
              <div class="input-group">
                    <select name="category_id" id="category_id" class="form-select" aria-label="Default select example">
                        <option selected>カテゴリーを選択</option>
                        @foreach ($items as $item)
                        <option value="{{$item->id}}">{{$item->category_name}}</option>
                        @endforeach
                    </select>
              </div>
      <dt class="mb-3"><label for="title" class="form-label">タイトル</label></dt>
      <dd><input type="text" id="title" name="title" class="form-control" value="{{old('title')}}"></dd>
      <dt><label for="content">内容</label></dt>
      <dd class="form-floating"><textarea class="form-control" id="content" name="content" style="height: 100px">{{old('content')}}</textarea></dd>
    </dl>
    <button class="btn btn-primary" type="submit">投稿</button>
    <a href="{{ url('/rest') }}"><button class="btn btn-primary" type="button" >キャンセル</button></a>
</form>
