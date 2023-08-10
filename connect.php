<?php 
$host="localhost";
$user="root";
$password="";
$db="logindb";

mysqli_connect($host,$user,$password,$db);

if(isset($_post['email'])){
    
    $Email=$_post['email'];
    $Password=$_post['psw'];
    
    $sql="select * from login where Email='".$Email."'AND Password='".$Password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>