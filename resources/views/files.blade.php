<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" name="example-form" action="{{url('/files')}}"  enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel">
        <button type="submit">Up</button>
    </form>

    <script>
        
    </script>
</body>
</html>