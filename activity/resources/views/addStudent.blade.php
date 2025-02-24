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
    <div class="container mt-5" style="border: 1px solid #0031b7da; padding: 10px; background-color: rgba(0, 26, 255, 0.475); width: 500px;">
        <div style="text-align: center;">
            <h1>Add Student</h1>
        <a href="/viewList" class="btn btn-primary">View List</a>
        </div>
        <div class="mt-4">
            <form action="/create" method="POST">
                @csrf
                <div class="mt-3">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="mt-3">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="mt-3">
                    <label for="age">Age:</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Age" required>
                </div>
            
                <div class="mt-3" style="text-align: center;">
               <button class="btn btn-success">Create</button>
                </div>
            </form>
        </div>
        
        </div>
        {{-- <script>
            function forButton(){
                alert("Student Added Successfully");
            }
        </script> --}}
</body>
</html>