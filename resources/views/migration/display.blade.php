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

<div class="container">
  <h2 class="text-center">Managenment Detail's Student Information</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Index</th>
        <th>Fullname</th>
        <th>Age</th>
        <th>Address</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($stdList as $std)
          <tr>
            <td> {{++$index}} </td>
          <td>{{$std->name}}</td>
            <td>{{$std->age}}</td>
            
            <td>{{$std->address}}</td>
            <td> <a href="/deleteStudent/{{ $std->rollno }}" class="btn btn-danger">Delete</a></td>
          </tr>
      @endforeach
    </tbody>
  </table>
  {{ $stdList->links() }}
  <a href="{{ route('input') }}" class="btn btn-primary">Add</a>
</div>

</body>
</html>
