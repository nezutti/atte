<style>
  *{
    margin:0px;
    padding:0px;
  }
</style>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @component('components.header')
  @endcomponent
  <div class="stamps">
    <form method="post" action="/work/add">
      <input type="hidden" name="start_at">
      <button type="submit">勤務開始</button>
    </form>
    <form method="post" action="work/update">
      <input type="hidden" name="end_at">
      <input type="button" name="end_at" value="勤務終了">
    <form method="post" action="rest/add">
      <input type="button" name="start_at" value="休憩開始">
    </form>
    <form method="post" aciton="rest/update">
      <input type="button" name="end_at" value="休憩終了">
    </form>
  </div>
  @component('components.footer')
  @endcomponent
</body>
</html>