<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Signin Form </title>
  </head>
  <body>
    <form  action={{$url}} method="post" >
        @csrf
   <div class="container ">
    <h1 class="text-center">{{$title}}</h1>
    <div class="form-group mt-2 ">
        <label for="" class="w-50 m-auto d-block">Name</label>
        <input type="text" name="name" id="name" class="form-control w-50  m-auto" placeholder="Name" value="{{old('name')}}">
        <span class="text-danger w-50 m-auto d-block">
            @error('name')
                {{$message}}
            @enderror
        </span>
    </div>
    <div class="form-group mt-2">
        <label for="text" class="w-50 m-auto d-block">Email</label>
        <input type="text" name="email" id="email" class="form-control w-50 m-auto" placeholder="Email" value="{{old('email')}}">
        <span class="text-danger w-50 m-auto d-block">
            @error('email')
            {{$message}}
        @enderror
        </span>
    </div>
    <div class="form-group mt-2 ">
        <label for="text" class="w-50 m-auto d-block">Password</label>
        <input type="text" name="password" id="password" class="form-control w-50 m-auto" placeholder="Password">
        <span class="text-danger w-50 m-auto d-block">
            @error('password')
            {{$message}}
        @enderror
        </span>
    </div>
    <div class="form-group mt-2 ">
        <label for="text" class="w-50 m-auto d-block">ConfirmPassword</label>
        <input type="text" name="cpassword" id="cpassword" class="form-control w-50 m-auto" placeholder="CPassword">
        <span class="text-danger w-50 m-auto d-block">
            @error('cpassword')
            {{$message}}
        @enderror
        </span>
    </div>
    <button type="submit" class="btn btn-primary m-auto d-block mt-2">Submit</button>
   </div>
</form>
  </body>
</html>
