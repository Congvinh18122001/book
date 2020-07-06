<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
  .mt-3{
    min-height: 580px;
  }
</style>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ route('main') }}"><i class="fas fa-heart"></i>Book -.-'</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('main') }}">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('inputBook') }}">Admin
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('inputBook') }}">Book</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <br><br><br>
    <!-- Page Content -->
<div class="container mt-3">
  <h1>Input Category</h1>
<br>
  <form method="POST" action="{{ route('insertcategory') }}">
     {{ csrf_field() }}
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">tên danh mục</span>
        </div>
        <input type="text" class="form-control" name="category">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>


  </form>
 
</div>
<footer class="py-5 bg-dark" clear="bottom">
  <div class="container">
    <p class="m-0 text-center text-white">Quadeptrai<i class="fas fa-heart"></i>book.com</p>
  </div>
  <!-- /.container -->
</footer>
</body>
</html>

