<!DOCTYPE html>
<html lang="ja">
<head>
  <style>
  body ul {
display: flex;
list-style: none;
gap: 6px 10px;
padding: 10px;

}
table td{
  padding : 20px 10px;
}
  </style>
  <meta charset="UTF-8">
  <title>登録内容</title>
</head>
<body>

      <ul>
            <li>id</li> <li>アイテム名</li> <li>カテゴリー</li><li>価格</li>
      </ul> 

      <table>
  @foreach($items as $item)

      <tr>
            <td>{{$item->id}}</td> <td>{{$item->name}}</td> 
            <td>{$item->category_name}}</td>
            <td>{{$item->price}}</td>
            <td><a href="/sample.edit', {{$item->id}}">edit</a> </td>
      </tr>
    
  @endforeach
 

  <button type="button" onClick="history.back()">新規登録</button>
</body>
</html>