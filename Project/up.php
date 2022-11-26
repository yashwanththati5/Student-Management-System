<html>
    <head>
        <style>
             input[type=text]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    }
    input[type=submit] , #add{
    width: 100%;
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }
        </style>
    </head>
<body bgcolor="lightgreen">
<?php
$ser = "localhost";
$usr = "root";
$pwd = "";
$dbname = "Students";
 $con = mysqli_connect($ser , $usr , $pwd , $dbname);
 $roll = $_POST['roll'];
 if($roll)
 {
    $query = "select * from records where roll = '$roll'";
    $run = mysqli_query($con , $query);
    if (mysqli_num_rows($run) == 0) {
        echo "Enter the valid RollNumber !"."<br>"."<br>";
        echo "<a href = 'delete.html' style='text-decoration: none;' id = 'add'> Click here to change the RollNumber ! </a>";
    } 
    else{
        $query = "delete from records where roll = '$roll'";
        $run = mysqli_query($con , $query);
        if($run){
            echo "<script> alert('Deleted Succesfully !')</script>";
        }
        echo "<div align = 'center'><a href='delete.html' style='text-decoration: none;' id = 'add'>Return To Delete</a></div>";
    }
}
else {
    echo "Enter the valid RollNumber !"."<br>"."<br>";
    echo "<a href = 'delete.html' style='text-decoration: none;' id = 'add'> Click here to change the RollNumber ! </a>";
}
 ?>
 </body>
 </html>