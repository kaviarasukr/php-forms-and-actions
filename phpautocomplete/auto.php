<?php
$con = mysqli_connect("localhost","root","","wordpress");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else
 {
 	$sql = "SELECT post_title FROM wp_posts";
    $result = mysqli_query($con, $sql) or die("Error " . mysqli_error($con));
    // empty array

    $dname_list = array();
    
    //loop iteration

    while($row = mysqli_fetch_array($result))
    {
        // var_dump($row)."\r\n";

        // array insertion

        $dname_list[] = $row['post_title'];
    }
 echo json_encode($dname_list);
    
 }
?>