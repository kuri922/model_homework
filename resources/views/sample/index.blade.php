<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<html> 
  <body>
  <form action="{{url('/sample/model')}}" method="POST">
  {{ csrf_field( ) }}

<input type="text"name="name" placeholder="アイテム名">


<input type="text"name="category_name" placeholder="カテゴリー">

<input type="text"name="price" placeholder="価格">
<input type="submit">
</form>
</html>