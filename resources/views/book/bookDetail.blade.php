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
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <br><br><br>
    <!-- Page Content -->
<div class="container">
  <div class="container mt-3">
<div class="row">
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://bitly.com.vn/ne6bH" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#" name="nameproduct1">{{$book->title}}</a>
                </h4>
                <h5 name = "price1">{{$book->price}}₫</h5>
                <p class="card-text">update : {{$book->update_date}}</p>
            </div>
           
        </div>
    </div>
    <div class="col-lg-8 col-md-6 mb-4">
        <h3>Nội dung : <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small></h3>
        
        <div class="card h-50">
           <p>{{$book->content}}</p>
           
        </div>
    </div>
    </div> 
 </div>
</div>
<footer class="py-5 bg-dark" aria-readonly="true">
    <div class="container">
      <p class="m-0 text-center text-white">Quadeptrai<i class="fas fa-heart"></i>book.com</p>
    </div>
    <!-- /.container -->
  </footer>
</body>
</html>

