<form action="/rest" method="post">
    <dl>
      @csrf
      <dt>CE</dt>
      <dd>
        <select name="id" id="">
        <option value="">CEを選択</option>
            @foreach ($items as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select></dd>
      <dt>品番</dt>
      <dd><input type="text" name="product_number" value="{{old('product_number')}}"></dd>
      <dt>難易度</dt>
      <dd><input type="number" name="level" value="{{old('level')}}"></dd>
      <dt>内容</dt>
      <dd><input type="text" name="detail" value="{{old('detail')}}"></dd>
      <dt>未完了：0　完了：1</dt>
      <dd>
        <select name="status" >
        <option value="0">0</option>
        <option value="1">1</option>
        </select>
      </dd>
    </dl>
    <input type="submit" value="send">
    <input type="button" onclick="history.back()" value="戻る">

</form>
