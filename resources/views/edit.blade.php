<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <h1 class="text-center">Update Data</h1>
        <form method="POST" action="/update/{{$posts->id}}">
            @csrf
            <div class="mb-3">
                <label><b>Post title: </b></label>
                <input type="text" name="title" class="form-control" value={{$posts->post_title}}>            
            </div>
            <div class="mb-3">
                <label><b>Post author: </b></label>
                <input type="author" name="author" class="form-control" value={{$posts->post_author}}>            
            </div>
            <input type="submit" name="update" value="Update" class="btn btn-success">
        
        </form>
    
    </div>
    
</body>
</html>