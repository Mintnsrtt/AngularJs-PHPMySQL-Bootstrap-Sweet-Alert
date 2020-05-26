<?php 
$con=mysqli_connect("localhost","root","","dbstudent");
$query="select * from tbuser";
$outp="";
$result=mysqli_query($con,$query);

if (mysqli_num_rows($result)>0){
    while($rs = $result->fetch_array(MYSQLI_ASSOC)){
        if ($outp != "") {$outp .= ",";}
        $outp .= '{"id":"'  . $rs["id"] . '",';
        $outp.='"fname":"'   . $rs["fname"] . '",';
        $outp .= '"lname":"'   . $rs["lname"] . '"}';
      }
      $outp ='{"records":['.$outp.']}';
      echo($outp);
}


?> 