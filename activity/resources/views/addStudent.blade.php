<form action="/create" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id= "name" name="name" placeholder="Name">
    <label for="email">Email:</label>
    <input type="text" id= "email" name="email" placeholder="Email">
    <label for="age">Age:</label>
    <input type="text" id= "age" name="age" placeholder="Age">

   <button>Create</button>