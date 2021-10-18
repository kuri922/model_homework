<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<html> 
  <body>
  <form action="{{url('/sample/result')}}" method="POST">
  {{ csrf_field( ) }}
<label for="name">アイテム名</label>
<input type="text"name="name">

<label for="name">カテゴリー</label>
<input type="text"name="category_name">

<label for="name">価格</label>
<input type="text"name="price">
<input type="submit">
</form>
</html>