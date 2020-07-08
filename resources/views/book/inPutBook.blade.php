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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
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
              <a class="nav-link "  href="{{ route('inputBook') }}">Admin
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('inputCategory') }}">Category</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <br><br><br>
    <!-- Page Content -->
<div class="container">
  <div class="container mt-3">
    <h1>Input book</h1>
  <br>
    <form method="POST" action="{{ route('insertbook') }}" >
      {{ csrf_field() }}
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Id </span>
        </div>
      <input type="text" class="form-control" name="id" value="{{$id}}" placeholder="id" readonly>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Tên sách </span>
        </div>
      <input type="text" class="form-control" value="{{$title}}" name="title" >
      </div>
      <select name="categoryId" class="custom-select mb-3">
        <option selected>Danh mục</option>
       @foreach ($categoryList as $item)
      <option value="{{$item->id}}">{{$item->category}}</option>
       
       @endforeach
      </select>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Giá</span>
          </div>
        <input type="text" class="form-control" value="{{$price}}" name="price">
        </div>
        <div class="form-group">
          <label for="comment">Nội dung:</label>
        <textarea class="form-control" rows="5" id="comment"  placeholder ="Content..."  name="content">{{$content}}</textarea>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">href_param</span>
          </div>
        <input type="text" class="form-control" value="{{$href_param}}" name="href_param">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">ngày tạo</span>
          </div>
          <input type="date" class="form-control" name="create_date">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" >ngày cập nhật</span>
          </div>
          <input type="date" class="form-control" name="update_date">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
  
    </form>
    <br>
   <a href="{{ route('displayBook') }}" class="btn btn-primary">Show book</a>
   <br><br>
  </div>
</div>
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Quadeptrai<i class="fas fa-heart"></i>book.com</p>
  </div>
  <!-- /.container -->
</footer>
</body>
</html>

