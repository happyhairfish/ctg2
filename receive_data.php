<?php

$data = json_decode(file_get_contents('php://input'), true);
// print_r($data);
echo $data["id"];
echo $data["i1"];
echo $data["i2"];

save_indicators($data["id"],$data["i1"],$data["i2"],$data["i3"],$data["i4"],$data["i5"],$data["i6"],$data["i7"],$data["i8"],$data["i9"],$data["i10"],$data["i11"],$data["i12"],$data["i13"],$data["i14"],$data["i15"],$data["i16"],$data["i17"],$data["i18"],$data["i19"],$data["i20"],$data["i21"],$data["i22"],$data["i23"],$data["i24"],$data["i25"],$data["i26"],$data["i27"],$data["i28"],$data["i29"],$data["i30"],$data["i31"],$data["i32"],$data["juego"]);


function save_indicators($id,$i1,$i2,$i3,$i4,$i5,$i6,$i7,$i8,$i9,$i10,$i11,$i12,$i13,$i14,$i15,$i16,$i17,$i18,$i19,$i20,$i21,$i22,$i23,$i24,$i25,$i26,$i27,$i28,$i29,$i30,$i31,$i32,$juego) {
  echo "hjvhk";
  echo $id;
  echo $i1;
  echo $i2;

  $dbserver = "localhost";
  $dbuser = "root";
  $password = "root";
  $dbname = "indicators";

	// Create connection
  $conn = mysql_connect($dbserver, $dbuser, $password);
	// $conn = new mysqli($dbserver, $dbuser, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// $sql = "INSERT INTO indicators (id, i1, i2) VALUES ('$id', '$i1', '$i2')";
  $sql = "INSERT INTO indicators ". "(id,i1,i2,i3,i4,i5,i6,i7,i8,i9,i10,i11,i12,i13,i14,i15,i16,i17,i18,i19,i20,i21,i22,i23,i24,i25,i26,i27,i28,i29,i30,i31,i32,juego) ". "VALUES('$id','$i1','$i2','$i3','$i4','$i5','$i6','$i7','$i8','$i9','$i10','$i11','$i12','$i13','$i14','$i15','$i16','$i17','$i18','$i19','$i20','$i21','$i22','$i23','$i24','$i25','$i26','$i27','$i28','$i29','$i30','$i31','$i32','$juego')";

	// if ($conn->query($sql) === TRUE) {
	//     echo "New record created successfully";
	// } else {
	//     echo "Error: " . $sql . "<br>" . $conn->error;
	// }
  //
	// $conn->close();
  mysql_select_db('indicators');
  $retval = mysql_query( $sql, $conn );

  if(! $retval ) {
    die('Could not enter data: ' . mysql_error());
  }

  echo "Entered data successfully\n";

  mysql_close($conn);

}

?>
