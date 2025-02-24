
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="container" style="padding: 5px; color: darkcyan;" >
      <h1>Student List</h1>
    </div>
    <table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Update</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $student['id'] }}</th>
                    <td>{{ $student['name'] }}</td> 
                    <td>{{ $student['email']}}</td>
                    <td>{{ $student['age']}}</td>
                    <td>
                      <a href="/edit/{{ $student['id'] }}" class="btn btn-primary">Edit</a>
                      <a href="/delete/{{ $student['id'] }}" class="btn btn-danger">Delete</a>
                </tr>
            
            @endforeach
          </tr>

        </tbody>
      </table>
      <br>
      <a href="/" class="btn btn-primary">Home</a>
  </div>
</body>
</html>