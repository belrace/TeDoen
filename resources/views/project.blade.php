<!DOCTYPE html>
<html lang="en">

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}


</style>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
</head>
<body>

    <h1> projecten </h1>
    <ul>
    <li> <a href="/home">Home </a> </li>
    <li> <a href="/project">Project aanmaken </a> </li>
    <li> <a href="/category">category </a> </li>
    <li> <a href="/lijst">lijst </a> </li>
    </ul> </br>



<form action="" method="post">
    @csrf
    <label for="name">name</label>
    <input id="name" name="name" type="text">
    </br>

    @csrf
    <label for="done">done</label>
    <input id="done" name="done" type="text">
    </br>

    @csrf
    <label for="Start_date">Start_date</label>
    <input id="Start_date" name="Start_date" type="date">
    </br>

    @csrf
    <label for="End_date">End_date</label>
    <input id="End_date" name="End_date" type="date">
    </br>

    @csrf
    <label for="user_id">User_id</label>
    <input id="user_id" name="user_id" type="text">
    </br>

    <button type="submit">opslaan</button>


   





</form>

</body>

</head>

</html>



</form>