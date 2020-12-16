<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

 <div style="background-color: red; color:white;">{{session("error")}}</div>
 <br><br>
  
  <form action="{{route("processForm")}}" method="post">
    @csrf
    <input type="text" name="user" id="">
    <br><br>
    <input type="password" name="pass" id="">
    <br><br>
    <input type="submit" value="Login" name="login">
  </form>


</body>
</html>