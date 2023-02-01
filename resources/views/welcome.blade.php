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
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <title>View users</title>
    <style>
    body{
        background-color:cyan;
    }
 </style>
  </head>
  <body>
 <h1 class="text-center">CRUD LARAVEL</h1>   <a href="{{url('/adduser')}}" style="float:right;"><button class="btn btn-primary">Add Users</button></a>  
<div class="container">
<table class="table table-striped table-dark">
<thead>
<tr>
<th>Id</th>
<th>First name</th>
<th>Last name</th>
<th>Email</th>
<th>Phone</th>
<th>Edit</th>
<th>Delete</th>
</tr>    
</thead>
<tbody>
  @foreach($users as $user)
<tr>
<td>{{$user->id}}</td>
<td>{{$user->fname}}</td>
<td>{{$user->lname}}</td>
<td>{{$user->email}}</td>
<td>{{$user->phone}}</td>
<td><a href="{{url('/editUser',$user->id)}}"><button class="btn btn-primary">Edit</button></a></td>
<td><a href="{{url('/deleteUser',$user->id)}}"><button class="btn btn-danger">Delete</button></a></td>
</tr>
@endforeach    
</tbody>    
</table>
  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
