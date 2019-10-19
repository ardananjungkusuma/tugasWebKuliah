<?php
$catService = $_POST['catService'];
$catEat = $_POST['catEat'];
$datepick = $_POST['datepick'];
$nama = $_POST['nama'];
$phone_number = $_POST['phone_number'];
$message = $_POST['message'];
$email = $_POST['email'];

echo "Service : ".$catService."<br>";
echo "Eat : ";
foreach($catEat as $catEat){
    echo($catEat." ");
}
echo "<br>";
// if(!empty($_POST['catEat'])){
//     foreach($_POST['catEat'] as $selected){
//     echo "Eat : "$selected."<br>";
//     }
// }
echo "Date : ".$datepick."<br>";
echo "Name : ".$nama."<br>";
echo "Phone Number : ".$phone_number."<br>";
echo "Message : ".$message."<br>";
echo "Email : ".$email."<br>";
?>