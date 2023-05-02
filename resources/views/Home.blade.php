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
    <title>Home</title>
</head>
<body>

    
    <h1> projecten </h1>
    <ul>
    <li> <a href="/home">Home </a> </li>
    <li> <a href="/project">Project aanmaken </a> </li>
    <li> <a href="/category">category </a> </li>
    <li> <a href="/lijst">lijst </a> </li>
    </ul> </br>

    
    @foreach ($project as $item)
    <p class="solid">  </br> {{$item->name}}
     </br> {{$item->done}} 
     </br> {{$item->Start_date}} 
     </br> {{$item->End_date}} 
     </br> {{$item->User_id}} </br>
     <td><a href="/projectEdit/{{$item->id}}">Wijzig</a></td>
    
    </p>
    @endforeach

   





</body>

</html>