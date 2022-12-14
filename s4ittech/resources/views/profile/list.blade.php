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
                <a href="{{route('profile.create')}}" class="btn btn-primary"> Create </a>
            </div>
        </div>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        @if(Session::has('s'))
            <div class="alert alert-danger">
                {{Session::get('s')}}
            </div>
        @endif
        @if(Session::has('r'))
            <div class="alert alert-success">
                {{Session::get('r')}}
            </div>
        @endif
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Profile</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($profile as $p)       
              <tr>
                <th scope="row">{{$p->id}}</th>
                <td>{{$p->username}}</td>
                <td>{{$p->email}}</td>
                <td>{{$p->first_name}}</td>
                <td>{{$p->last_name}}</td>
                <td>{{$p->age}}</td>
                <td><img src="profile_image/{{$p->image}}" height="100px" width="100px"></td>
                <td>
                    <a href="{{url('profile/'.$p->id.'/edit')}}" class="btn btn-primary">Edit</a>
                    <a href="{{url('profile/'.$p->id)}}" class="btn btn-success">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>