<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>新規作成</title>
</head>
<body>
  <h1>新規作成</h1>
  <p>{{$msg}}</p>
  <form action="/new" method="POST">
    @csrf
    <dl>
    <dt>タイトル</dt>
    <dd><input type="text" name="title" value = ''></dd>
    <dt>詳細</dt>
    <dd><textarea name="detail" id=""></textarea></dd>
    </dl>
    <p><input type="submit" value="登録"></p>
  </form>
</body>
</html>
