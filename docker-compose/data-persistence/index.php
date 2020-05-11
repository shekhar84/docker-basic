<?php 
header("content-type: text");
$host = "db_test";
$username = "root";
$pw = "root!pwd";
$conn = new mysqli($host,$username,$pw);
if ($conn->connect_errno > 0){
    echo $db_test->connect_error;
} else {
    echo "db connection successful\n";
    $db_test_databases=mysqli_query($conn, "SHOW DATABASES;");
    while( $row = mysqli_fetch_row($db_test_databases)){
        echo $row[0]."\n";
    }
}

