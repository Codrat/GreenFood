<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.
if( $_POST )
{
    $servername = '0.0.0.0';
    $username = 'carinab';
    $password = "";
    $database = "GreenFood";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
//    if ($db->connect_error) {
 //       die("Connection failed: " . $db->connect_error);
//    } 
//    echo "Connected successfully (".$db->host_info.")";
    
    $users_name = $_POST['name'];
    $users_email = $_POST['email'];
    $valoare_bmi= $_POST['yourBMI']
    
     $queryy = "INSERT INTO Subscribers (Name, Email,ValoareBMI) VALUES ('$users_name','$users_email,$valoare_bmi')";

mysqli_query($db, $queryy);

//if (mysqli_query($db, $queryy)) {
  //  echo "New record created successfully";
//} else {
 //   echo "Error: " . $queryy . "<br>" . mysqli_error($db);
//}

  mysqli_close($db);
  header("Location: redirect.html");

}
?>