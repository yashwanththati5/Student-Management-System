<html>
<head> 
    <style>
    #add{
    width: 100%;
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }
    input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    }
    </style>
</head>
<body bgcolor="white">
<?php
$ser = "localhost";
$usr = "root";
$pwd = "";
$dbname = "Students";
 $con = mysqli_connect($ser , $usr , $pwd , $dbname);
 $roll = $_POST['roll'];
 $name = $_POST['name'];
 $dept = $_POST['dept'];
 if($roll)
 {
    $query = "select * from records where roll = '$roll'";
    $run = mysqli_query($con , $query);
    if (mysqli_num_rows($run) == 0) {
        echo "Enter the valid RollNumber !"."<br>"."<br>";
        echo "<a href = 'update.html' style='text-decoration: none;' id = 'add'> Click here to change the RollNumber ! </a>";
    }
    else{
        if($name) {
            $query = "update records set name = '$name' where roll = '$roll'";
            $run = mysqli_query($con , $query);
            echo "<div align = 'center'><a href='update.html' style='text-decoration: none;' id = 'add'>Return To Update</a></div>";
            if($run)
            {
                echo "<script>alert('Succesfully Updated !')</script>";
            }
         }
         if($dept){
            $query = "update records set dept = '$dept' where roll = '$roll'";
            $run = mysqli_query($con , $query);
            if($run)
            {
                echo "<script>alert('Succesfully Updated !')</script>";
            }
            echo "<div align = 'center'><a href='update.html' style='text-decoration: none;' id = 'add'>Return To Update</a></div>";
         }
    }
 }
 else {
    echo "Enter the valid RollNumber !"."<br>"."<br>";
    echo "<a href = 'update.html' style='text-decoration: none;' id = 'add'> Click here to change the RollNumber ! </a>";
}
 ?>
</body>
</html>