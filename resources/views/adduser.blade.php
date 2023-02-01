<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Add user:-</title>
<style>
    body
    {
        background-color:cyan;
    }
</style>
</head>
  <body>
  <h1 class="text-center">Add user:-</h1><a  style="float:right;" href="{{url('/')}}"><button class="btn btn-primary">View Users</button></a>
  <div class="container mt-4" style="background-color:yellow;">
<form action="{{url('/adduser')}}" method="post" enctype="multipart/form-data">
        @csrf

    <div class="form-group">
        <label for="fname" class="control-label">First Name</label>
        <input type="text" name="fname" class="form-control" value={{ old('fname') }}><br>
        <span class="text-danger">
            @error('fname')
                {{ $message }}
            @enderror
        </span></div>

        <div class="form-group">
        <label for="lname" class="control-label">Last Name</label>
        <input type="text" name="lname" class="form-control" value={{ old('lname') }}><br>
        <span class="text-danger">
            @error('lname')
                {{ $message }}
            @enderror
       </span></div>

       <div class="form-group">
       <label for="email" class="control-label">Email</label>
        <input type="text" name="email" class="form-control" value={{ old('email') }}><br>
        <span class="text-danger">
            @error('email')
                {{ $message }}
            @enderror
        </span></div>

        <div class="form-group">
        <label for="phone" class="control-label">Phone</label>
        <input type="text" name="phone" class="form-control" value={{ old('phone') }}><br>
        <span class="text-danger">
            @error('phone')
                {{ $message }}
            @enderror
       </span></div>
      <input type="submit" class="btn btn-primary"><br>

    </form><br>       
</div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
