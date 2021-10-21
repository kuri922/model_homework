




<form action="/sample/edit/update/{{$item->id}}"method="POST">
{{ csrf_field( ) }}

    <input type="hidden" name="_method"  value="PUT">  
        <input type="text" name="name"  placeholder="アイテム名" value="{{ $item->name}}">
        <input type="text" name="category_name" placeholder="カテゴリー" value="{{ $item->category_name }}">
        <input type="text" name="price" placeholder="価格" value="{{ $item->price }}">
        <input type="submit">
</form> 