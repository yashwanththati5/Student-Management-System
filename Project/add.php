<html>
<head>
    <style>
         #add{
    margin-top: 190px;
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
 $name = $_POST['name'];
 $dept = $_POST['dept'];
 if($roll and $name and $dept)
 {
    $query = "select * from records where roll = '$roll'";
    $run = mysqli_query($con , $query);
    if (mysqli_num_rows($run) > 0) {
        echo "<script>alert('Duplicate RollNo Found , Change RollNuber !')</script>";
        echo "<div align = 'center'><a href='left.html' style='text-decoration: none;' id = 'add'>Return To Home</a></div>";
    }
    else{
        $quer = "insert into records(roll , name , dept) values('$roll' , '$name' , '$dept')";
        $r = mysqli_query($con , $quer);
        if($r)
        {
            print("<script>alert('Data Added to the data base')</script>");
            echo "<div align = 'center'><a href='left.html' style='text-decoration: none;' id = 'add'>Return To Home</a></div>";
        }

    }
}
    else 
    {
        echo "<div align = 'center'><a href='left1.html' style='text-decoration: none;' id = 'add'>Return To Home</a></div>";
    }
?>
</body>
</html>