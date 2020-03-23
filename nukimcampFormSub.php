<?php

$name = $_POST["username"];
$gender = $_POST["gender"];
$birth = $_POST["birthday"];
$idnumber = $_POST["id"];
$phone = $_POST["phonenumber"];
$mail = $_POST["email"];
$live = $_POST["city"];
//$interest = $_POST["interest"];
$study = $_POST["highschool"];
// $file = $_POST["agreement"];
$food = $_POST["meal"];
$history = $_POST["historyOfIllness"];
$historycomment = $_POST["describe"];
$comment = $_POST["comment"];

echo "您的名字:".$name."<br/>";
echo "您的性別:".$gender."<br/>";
echo "您的生日:".$birth."<br/>";
echo "您的身分證字號:".$idnumber."<br/>";
echo "您的聯絡電話:".$phone."<br/>";
echo "您的信箱:".$mail."<br/>";
echo "您的高中:".$study."<br/>";
// echo "家長同意書:".$file."<br/>";
echo "食物偏好:".$food."<br/>";
echo "您的病史:".$history."<br/>";
echo nl2br(htmlspecialchars($historycomment))."<br/>";

$livenumber = count($live);
// echo $livenumber;

for($i = 0; $i < $livenumber; $i++){
    echo "您的居住地:".$live[$i]."<br/>";
}

// 回去補上checkbox嘗試底下內容
// $interset = count($interest);
// for($j = 0; $j<$interestNO; $j++){
//     echo"您的興趣:".$live[$j]."<br/>";
// }

//echo "您的興趣:" implode(",",$interest);

// foreach ($interect as $key => $value){
//     echo "您的興趣:".$value."<br/>";
// }

//echo nl2br($comment);
echo nl2br(htmlspecialchars($comment));

?>