<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="../../css/reset.css">
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <p class="title mb-15">Todo List</p>
      @error('content')
      <ul>
        <li>{{$message}}</li>
      </ul>
      @enderror
      <div class="todo">
        <form action="/todo/create" method="post" class="mb-30 between flex">
          @csrf
          <input type="text" name="content" class="input-add">
          <input type="submit" value="追加" class="button-add">
        </form>
        <table class="table">
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
              <form action="/todo/update" method="post" id="form_update{{$item->id}}">
              @csrf
              <input type="hidden" name="id" value="{{$item->id}}">
              <input type="text" name="content" value="{{$item->content}}" class="input-update">
              </form>
            </td>
            <td>
              <button form="form_update{{$item->id}}" class="button-update">更新</button>
            </td>
            <td>
              <form action="/todo/delete" method="post">
              @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
                <button class="button-delete">削除</button>
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