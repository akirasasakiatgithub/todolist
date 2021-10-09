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
          <input type="text" name="post">
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
            @isset(items)
            @foreach(items as item)
            <tr>
            <td>{{date}}</td>//日時の関数
            <td><form action="update" method="post"><input type="text"></td>//formで囲んでみた
            <td><button>更新</button></form></td>
            <td><form action="delete" method="post"><button>削除</button></form></td>
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