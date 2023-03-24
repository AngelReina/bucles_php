<html>
<head><title>Bucle</title></head>
<body>
<table>
<?php   
$num = $_POST["num"];
for($i=0; $i<11; $i++){
    $sol= $num*$i;
    echo "<tr>";
    echo "<td> "."$num"."</td>"."<td> "."X"."</td>"."<td> "."$i"."</td>"."<td> "."="."</td>"."<td> "."$sol"."</td>";
    echo "</tr>";
    
}
?>
</table>
</body>
</html>
