<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Images</title>
</head>
<body>
    <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
        @csrf()
        <label>Image Name</label>
        <input type="text" name="name">
        <br>
        <br>
        <label>Upload Image</label>
        <input type="file" name="image">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
