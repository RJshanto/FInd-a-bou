

<?php 

$name=$_REQUEST['name'];
$career=$_REQUEST['career'];
$need1="sorkari job";
$need2="lak taka income kori";
$need3="student";

if($career==$need1){
    header("location:main.php?result=<h1> congratulation {@- $name} তুই সুন্দরী বউ পাবি  </h1>");
   
}elseif($career==$need2){
    header("location:main.php?result=<h1>Ma-ShaA-llah {@- $name} তুই পরীর মতো সুন্দরী বউ পাবি </h1>");
    

}elseif($career==$need3){
    header("location:main.php?result=<h1> {@- $name} দুধের দাঁত উঠেনি তোর আগে বড় হো পরে বিয়ে করিস।</h1>");
    
}else{
    header("location:main.php?result=<h1> {@- $name} তোর বিয়ে হবে না </h1>");
}


?>