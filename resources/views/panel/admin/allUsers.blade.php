<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Users Table:</h1>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Password</th>
      <th>Email</th>
      <th>Role</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)        
      <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['user']}}</td>
        <td>{{$item['pass']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['role']}}</td>
        
        <td><a href="{{route('user.edit',['user'=>$item['id']])}}">Edit</a></td>
        <td><a href="{{route("user.destroy",['user'=>$item['id']])}}">Delete</a></td>
      </tr>
    @endforeach
  </tbody>
</table>


</body>
</html>