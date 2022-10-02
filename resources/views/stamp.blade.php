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
      @if(!($is_attendance_start))
      <a href="/work/add" class="attendance-btn">勤務開始</a>
      
      @else
      <p class="attendance-btn inactive">勤務開始</P>
      @endif
    </form>
    
    <form method="post" action="work/update">
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      @if(($is_attendance_start) && !($is_rest_end))
      <a href="/work/update" type="submit" id="workend"  name="end_at">勤務終了</a>
      @else
      <p class="attendance-btn inactive">勤務終了</p>
      @endif
    </form>
    <form method="post" action="/rest/add">
      @csrf
      <input type="hidden" name="work_id" value="{{$item->id}}">
      @if(($is_attendance_start) && !($is_rest_end))
      <a href="/rest/add" class="attendance-btn"  id="reststart" name="start_at">休憩開始</a>
      @else
      <p class="attendance-btn inactive">休憩開始</p>
      @endif
    </form>
    <form method="post" aciton="rest/update">
      @csrf
      <input type="hidden" name="work_id" value="{{$item->id}}">
      @if(($is_attendance_start) && ($is_rest_end))
      <a href="/rest/end" class="attendance-btn"  id="reststart" name="end_at">休憩終了</a>
      @else
      <p class="attendance-btn inactive">休憩終了</P>
      @endif
      
    </form>
    
  </div>
  @component('components.footer')
  @endcomponent

</body>

</html>
