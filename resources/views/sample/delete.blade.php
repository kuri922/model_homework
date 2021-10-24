<!doctype html>
<html lang="ja">
 
<head>
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
 
<body>
<script>
  $(function(){
  $(".btn-dell").click(function(){
  if(confirm("本当に削除しますか？")){
  }else{
  return false;
  }
  });
  });
  </script>
</body>
</html>

