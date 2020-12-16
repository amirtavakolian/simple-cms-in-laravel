<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('user.store') }}" method="post">
      @csrf
      <label for="">Username: </label>
        <input type="text" name="user">
        <br><br>

        <label for="">Password: &nbsp;</label>
        <input type="text" name="pass">
        <br><br>
        <label for="">Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="email">
        <br><br>
        <input type="submit" value="Register" style="display: block; width:20%">
    </form>
</body>

</html>
