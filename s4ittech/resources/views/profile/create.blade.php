<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="bg-dark">
        <div class="container">
            <div class="h1 text-center p-3 text-white">Welcome to s4ittech</div>
        </div>
    </div>
    <div class="container py-4">
        <div class="d-flex justify-content-between">
            <div class="h3">Profile</div>
            <div>
                <a href="{{route('profile.index')}}" class="btn btn-primary"> Back </a>
            </div>
        </div>
    </div>
    <div class="container">
        <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="username">UserName</label>
                <input type="text" name="username" id="username" class="form-control">
                @error('username')
                <p class="text-danger" >{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email">email</label>
                <input type="email"  name="email" id="email" class="form-control">
                @error('email')
                <p class="text-danger" >{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control">
                @error('first_name')
                <p class="text-danger" >{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control">
                @error('last_name')
                <p class="text-danger" >{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="age">Age</label>
                <input type="text" name="age" id="age" class="form-control">
                @error('age')
                <p class="text-danger" >{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="file">Profile Image</label>
                <input type="file" name="image" id="file" class="form-control">
                @error('image')
                <p class="text-danger" >{{$message}}</p>
                @enderror
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>