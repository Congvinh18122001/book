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
            <a class="nav-link" href="{{ route('inputBook') }}">Admin
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('displayCategory') }}">Category</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br><br><br>
  <!-- Page Content -->
<div class="container">
  <h2 class="text-center">Detail's Book Information</h2>
  <br>
  <form method="post" action="{{ route('serch') }}">
    {{ csrf_field() }}
    <div class="input-seach">
      <input name="s" id="myInput" type="text" placeholder="Search.." class="form-control">
    </div>
  </form>
  <br><br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Index</th>
        <th>Tên sách</th>
        <th>Giá</th>
        <th>Ngày cập nhập </th>
        <th>Id danh mục</th>
        <th>Nội dung</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($bookList as $book)
          <tr>
            <td> {{++$index}} </td>
            <td>{{$book->title}}</td>
            <td>{{$book->price}}</td>
            <td>{{$book->update_date}}</td>
          <td><a href="/book/displaycategoryofid/{{$book->categoryId}}">-- {{$book->categoryId}} --</a></td>
            <td>{{$book->content}}</td>
            <td> <a href="/book/editBook/{{ $book->id }}" class="btn btn-warning">Sửa</a></td>
            <td> <a href="/book/deletebook/{{ $book->id }}" class="btn btn-danger">Xóa</a></td>

          </tr>
      @endforeach
    </tbody>
  </table>
  {{-- {{ $bookList->links() }} --}}
  <a href="{{ route('inputBook') }}" class="btn btn-primary">Add</a>
  <a href="{{ route('displayBook') }}" class="btn btn-primary">Show All</a>
</div>
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Quadeptrai<i class="fas fa-heart"></i>book.com</p>
  </div>
  <!-- /.container -->
</footer>
</body>
</html>
