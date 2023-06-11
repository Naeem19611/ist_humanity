<?php include 'template/header.php'; ?>

<?php 
$vol_id = "";

// getting volaign id
if(isset($_GET['vol_id'])) {
     $vol_id = $_GET['vol_id'];
}

// getting Volenteer data
$sql_vol = "SELECT * FROM volunteer WHERE id='$vol_id'";
$result_sql_vol = $conn->query($sql_vol)->fetch_assoc();

// getting image data
$vol_image = $result_sql_vol['image'];

// deleting image file
unlink("upload/volunteer/" . $vol_image);

// delete query
$sql_delete_query = "DELETE FROM  volunteer  WHERE id='$vol_id'";
$result_delete_query = $conn->query($sql_delete_query);

// notification
if($result_delete_query === TRUE) {
    echo "<script>alert('Volunteer data deleted Successfully!'); window.location.href = 'view_volunteer.php'; </script>";  
} else {
    echo "<script>alert('Sorry ! Could not delete Volunteer data, Try Again'); window.location.href = 'view_volunteer.php';</script>";  
}