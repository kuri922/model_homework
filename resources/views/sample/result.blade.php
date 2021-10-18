
    <!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>登録</title>
    </head>
    <body>
    @foreach($items as $item)

    <p>id：{{$item->id}}</p>
        <p>アイテム名：{{$item->name}}</p>
        <p>カテゴリー：{{$item->category_name}}</p>
        <p>価格：{{$item->price}}</p>
    @endforeach

    

        <button type="button" onClick="history.back()">戻る</button>
    </body>
</html>

   