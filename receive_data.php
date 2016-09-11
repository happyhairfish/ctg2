<?php

$data = json_decode(file_get_contents('php://input'), true);
// print_r($data);
echo $data["id"];
echo $data["i1"];
echo $data["i2"];

save_indicators($data["id"],$data["i1"],$data["i2"]);


function save_indicators($id,$i1,$i2) {
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
  $sql = "INSERT INTO indicators ". "(id,i1, i2) ". "VALUES('$id','$i1','$i2')";

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
