<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>HomePage SHop</title>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			margin-top: 100px;
		}
		a.btn.btn-danger {
		    margin-left: 15px;
		}
		p.btn.btn-success {
		    margin-top: 16px;
		}
		span.btn.btn-primary {
	    margin-left: 15px;
	}
    footer{
        width: 143.4%;
        margin-left: -25%;
    }
    .col-lg-3{
        margin-left: -12%;
        margin-right: 10%;
    }
    
	</style>
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
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('inputBook') }}">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
      <form method="post" width="50%" action="{{ route('mainsearch') }}">
        {{ csrf_field() }}
        <div class="input-seach" >
          <input name="s"  id="myInput" type="text" placeholder="Search.." class="form-control">
        </div>
      </form>
    </div>
    
  </nav>
   
    

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Category</h1>
        <div class="list-group">
          @foreach ($categoryList as $category)
          <a href="/book/mainbookofcategory/{{$category->id}}" class="list-group-item">{{$category->category}}</a>          @endforeach
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://bitly.com.vn/KMy2R" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://bitly.com.vn/KMy2R" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://bitly.com.vn/KMy2R" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
		@foreach ($bookList as $book)
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
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                   <a href="/book/bookdetail/{{$book->href_param}}.html" class="btn btn-danger">Xem chi tiết</a>                   
                </div>
            </div>
        </div>
        @endforeach
			
		

        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Quadeptrai<i class="fas fa-heart"></i>book.com</p>
    </div>
    <!-- /.container -->
  </footer>

</body>

</html>