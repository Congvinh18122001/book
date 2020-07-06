

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Registation </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		.panel{
			border: 1px solid black;
			border-radius: 5px;
			padding: 20px;
			margin: 30px;
			color: white;
			padding-top: 0px;
		}
		.panel-heading{
			background-color: lightblue;
           margin-left: -20px;
		   width: 104%;
		   border-top-left-radius:5px;
		   border-top-right-radius: 5px; 
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center"> input Student's detail information</h2>
			</div>
			<div class="panel-body">
				<form  action=" {{ route('insert') }} " method="post">
                   {{ csrf_field() }}
					<div class="form-group">
						<label for="name">Fullname:</label>
						<input required="true" type="text" name="name" class="form-control" id="name">
					</div>
          <div class="form-group">
						<label for="age">Age:</label>
						<input required="true" type="text" name="age" class="form-control" id="age">
					</div>
					<div class="form-group">
						<label for="address">Address:</label>
						<input required="true" type="text" name="address" class="form-control" id="address">
					</div>
					<button class="btn btn-success" type="submit">Save</button>
				</div>
				</form>
				<br>
				<a href="{{ route('display') }}" class="btn btn-primary">View</a>
		</div>
	</div>
</body>
</html>
