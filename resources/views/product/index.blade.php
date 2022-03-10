<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="container">
    <div class="row">
    <div class="col-6">
   
    <form action="" method="POST">
     @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
   </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="price">
  </div>
  <div class="mb-3">
  <label for="img">Select image:</label>
  <input type="file" id="iamge" name="image" >

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div class="col-6">
 <table class="table table-striped">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
       <th scope="col">Category</th>
       <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($product as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
     
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td> <img src="/image/{{ $product->image }}" width="100px"> </td>
      <td>{{$product->category}}</td>
      <td>
      <a href="{{ url('/product/edit', $product->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
      <a href="{{ url('/product/delete', $product->id) }}" class="btn btn-outline-danger btn-sm">Delete</a>
     
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
 </div>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>