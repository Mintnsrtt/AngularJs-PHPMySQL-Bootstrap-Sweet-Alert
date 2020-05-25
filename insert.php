<?php 
$con=mysqli_connect("localhost","root","","dbstudent");
$data=json_decode(file_get_contents("php://input"));
if(count($data)>0){
   $fname=mysqli_real_escape_string($con,$data->fname);
   $lname=mysqli_real_escape_string($con,$data->lname);
   $query="insert into tbuser(fname,lname) values('$fname','$lname')";

   if(mysqli_query($con,$query)){
        echo "Data inserted";
   }else{
        echo "Error";
   }
}

?>
