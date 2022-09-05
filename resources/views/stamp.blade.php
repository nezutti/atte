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
      @csrf
      <input type="submit" id="workstart" value="勤務開始" onclick="clickBtn1()">
    </form>
    @if(isset($item))
    <form method="post" action="work/update">
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      
      <input type="submit" id="workend"  name="end_at" value="勤務終了" disabled>
    <form method="post" action="rest/add">
      @csrf
      <input type="hidden" name="work_id" value="{{$item->id}}">
      <input type="submit"  id="reststart" name="start_at" value="休憩開始" disabled>
    </form>
    <form method="post" aciton="rest/update">
      @csrf
      <input type="hidden" name="work_id" value="{{$item->id}}">
      <input type="submit" id="restend" name="end_at" value="休憩終了" disabled>
    </form>
    @endif
  </div>
  @component('components.footer')
  @endcomponent
<script src="{{asset('js/index.js')}}"></script>
</body>

</html>
