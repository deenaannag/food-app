<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="https://png.pngtree.com/back_origin_pic/05/07/23/e53e2138838b60dcb17edf89de0878e3.jpg">
    <h1>Update Member</h1>
    <form action="/editfood"method="post">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="foodname" value="{{$data['foodname']}}"><br> <br>
    <input type="text" name="itemno" value="{{$data['itemno']}}"><br> <br>
    <input type="text" name="price"value="{{$data['price']}}"><br> <br>
     <input type="file"  name="image"id="inputGroupFile02"value="{{$data['image']}}"><br> <br> 
        
        <button type="submit">Update</button>
    </form>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>