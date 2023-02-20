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
    
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <h1 class="mb-3">Edit User </h1>
                @include('backend.includes.massage')
                <form action="{{route('users.update',['id' => $user->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Full name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                    </div>
                    @error("name")
                        <div>
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <div class="mb-3">
                      <label for="username" class="form-label">User name</label>
                      <input type="text" class="form-control" id="username" name="username"  value="{{$user->username}}">
                    </div>
                    @error("username")
                        <div>
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>
                    @error("email")
                        <div>
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                     @enderror
                    <div class="row mt-2">
                        <label for="image" class="col-md-4">Profile Image:</label>
                        <div class="col-md-8">
                            <input type="file" name="image" class="form-control" />
                            @if (!is_null($user->image))
                                <img src="{{asset('/')}}{{$user->image}}" alt="" style="width: 350px;" class="mt-4">
                            @endif
                        </div>
                    </div>
                    @error("image")
                    <div>
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                    @enderror
                    <div class="row mt-2">
                        <label for="password" class="col-md-4">Password</label>
                        <div class="col-md-8">
                            <input type="password" name="password" class="form-control" />
                        </div>
                    </div>
                    @error("password")
                    <div>
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                    @enderror
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
