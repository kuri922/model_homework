<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>model sample</title>
</head>
<body>
  <ul>
    @foreach($items as $item)
      <li>{{$item->id}}</li>
      <li>{{$item->name}}</li>
      <li>{{$item->category_name}}</li>
      <li>{{$item->price}}</li>
    @endforeach
  </ul>
</body>
</html>