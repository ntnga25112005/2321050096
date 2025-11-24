<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bai 1 PHP</title>
</head>
<body>
  <?php
  //1 Cú pháp in ra màn hình
  echo "Hello World!<br>";

  echo "PHP<br>";
  //2 Biến
  //Cú pháp: $ + tenBien = giá trị của biến
  $ten = "Thúy Nga";
  $tuoi = 20;

  echo"Xin chào ". $ten. " ".$tuoi. " tuổi <br>";

  //3. Hằng
  define("soPi","3.14");
  echo soPi."<br>";

  //4. Phân biệt '' và ""
  echo'$ten'."<br>";//coi $ten là chuỗi
  echo"$ten"."<br>";//coi $ten là biến

  //5. Chuỗi
  echo strlen($ten)."<br>";//Độ dài chuỗi
  echo str_word_count($ten)."<br>";//Đếm số từ
  echo strpos($ten,"T")."<br>";//vị trí kí tự 
  echo str_replace("Thúy","Thanh",$ten)."<br>";//Thay thế kí tự Thúy thành Thanh

  //6. Toán tử
  $soThuNhat = 10;
  $soThuHai = 3;
  //+ - * /
  // echo $soThuNhat + $soThuHai ."<br>";
  // += -= *= /=
  // echo $soThuNhat %= $soThuHai . "<br>";
  // so sánh == != < > <= >= ===
  
  //7. Câu điều kiện
  //Kiểm tra tổng của số thứ nhất và số thứ hai, nếu <15 thì hiện thị tổng là... nhỏ hơn 15, nếu =15 thì hiển thị tổng là 15, nếu >15 thì hiển thị tổng là.... lớn hơn 15
  $tong = $soThuNhat + $soThuHai;
  if($tong < 15){
    echo"tổng là $tong nhỏ hơn 15";
  } elseif ($tong == 15) {
    echo "tổng là 15";
  } else echo "tông là $tong lơn hơn 15";
echo "<br>";
  //8.switch case 
  $color = "red";
  switch ($color){
    case "red":
      echo "is red"; 
      break;
    case "blue":
      echo "is blue";
      break;
    default:
      echo "no color";
      break;
  }
  echo"<br>";

  //9. for
  for ($i = 0; $i < 100; $i++){
    echo $i."<br>";
  }

  ?>

</body>
</html>