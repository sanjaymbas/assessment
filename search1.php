<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());

    mysql_select_db("search") or die(mysql_error());  
    include "connect.php";
   $output = '';
  if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]i#","", $search);

    $query = mysqli_query("SELECT FROM self WHERE name equal '%$search%'") or die ("Could not search");
    $count = mysqli_num_rows($query);
    
    if($count == 0){
      $output = "There was no search results!";

    }else{

      while ($row = mysqli_fetch_array($query)) {

        $name = $row ['name'];
        $avg = $row ['avg'];

        $output .='<div> '.$name.''.$avg.''</div>';

      }

    }
  } 
     
     
?>
<!DOCTYPE html>
<html>
<body>
<center>
<body bgcolor="red" topmargin='300'>
<h3>Search</h3>

<input type="search" id="mySearch" placeholder="Search for something.."><br><br>

<button onclick="myFunction()">Submit</button>

<p id="demo"></p>

<script>
function myFunction() {
  var x = document.getElementById("mySearch").placeholder;
  document.getElementById("demo").innerHTML = x;
}
</script>
</center>
</body>
</html>