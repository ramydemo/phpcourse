<?php include('connection.php');?>
<?php
$sql = "CREATE TABLE sellers (
    ID int NOT NULL AUTO_INCREMENT,
    Name varchar(60) NOT NULL,
    comp_name varchar(60),
    Email varchar(60),
    grp_id int,
    PRIMARY KEY (ID)
)";
$sql1 = "CREATE TABLE groups (
    grp_ID int NOT NULL AUTO_INCREMENT,
    Name varchar(60) NOT NULL,    
    PRIMARY KEY (grp_ID)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table sellers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
if ($conn->query($sql1) === TRUE) {
    echo "Table groups created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
//mysqli_close($conn);
?>