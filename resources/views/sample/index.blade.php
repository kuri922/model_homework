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
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td> 
            <td>{{$item->category_name}}</td>
            <td>{{$item->price}}</td>
            <td><a href="/sample/edit/{{$item->id}}">edit</a> </td>
            <td>
     
      <form action="/sample/delete/{{$item->id}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
               <input type="submit" class="btn btn-danger btn-dell" value="削除" onclick='return confirm("削除しますか？");'> 
      </form>
            </td>
      </tr>
      @endforeach

      <a href="/sample/create">新規画面</a> </td>

   
</body>
</html>