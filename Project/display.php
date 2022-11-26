<html>
<head>
<style>
table,th,td
{
    border: 1px solid black;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 4px; 
}
</style>
</head>
<body bgcolor="#EEFDEF">
<?php
$con = mysqli_connect("localhost","root","","Students");
$query = "select * from records";
echo "<table>
<tr>
<th>ROLLNUMBER</th>
<th>NAME</th>
<th>DEPARTMENT</th>
</tr>";
$run = mysqli_query($con , $query);
    if (mysqli_num_rows($run) > 0) {
        while($row = mysqli_fetch_assoc($run)) {
            echo "<tr>";
            echo "<td>" . $row['roll'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['dept'] . "</td>";
            echo "</tr>";
        }
    }
echo "</table>";
?>
</body>
</html>