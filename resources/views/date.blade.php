<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="work">
    <table>
    
      <tr>
        <th>名前</th>
        <th>勤務開始</th>
        <th>休憩時間</th>
        <th>勤務時間</th>
      </tr>
      <tr>
      @foreach($item as $items)
        <td>{{$item->user->name}}</td>
        <td>{{$item->start_at}}</td>
        <td>{{$item->end_at}}</td>
        <td>{{$total_rest}}</td>


</body>
</html>