<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>
<body>
  <div>
    <div>
      <p>Todo List</p>
      <div>
        <form action="/add" method="post">
          @csrf
          <input type="text" name="content">
          <input type="submit" value="追加">
        </form>
        <table>
          <tbody>
            <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
            </tr>
            @isset($items)
            @foreach($items as $item)
            <tr>
            <td>{{$item->created_at}}</td>
            <td>
              <form action="update" method="post" id="form_update">
              @csrf
              <input type="hidden" name="id" value="{{$item->id}}">
              <input type="text" name="content" value="{{$item->content}}">
              </form>
            </td>
            <td>
              <button form="form_update">更新</button>
            </td>
            <td>
              <form action="delete" method="post">
              @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
                <button>削除</button>
              </form>
            </td>
            </tr>
            @endforeach
            @endisset
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>