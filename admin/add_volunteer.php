<?php include 'template/header.php'; ?>
<?php 
    $name = "";
    $phone = "";
    $email = "";
    $home_town = "";
    $address = "";
    $occupation = ""; 
    $institution = "";
    $status = "1";

    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // $name = $_POST['name'];
        $name = data_filter($_POST['name']);
        $phone = data_filter($_POST['phone']);
        $email = data_filter($_POST['email']);
        $home_town = data_filter($_POST['home_town']);
        $address = data_filter($_POST['address']);
        $occupation = data_filter($_POST['occupation']);
        $institution = data_filter($_POST['institution']);
        
        
        $image = $_FILES['image']['name'];
        $target_dr_name = "upload/volunteer/";
        $target_file_dr_image = $target_dr_name . basename($_FILES['image']['name']);
        
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file_dr_image, PATHINFO_EXTENSION));
        
        // valid file extansion
        $extentsions_arr = array("jpg","jepg","png","gif");
        
        // Check extention is valid or not
        if(in_array($imageFileType, $extentsions_arr)) {
            
            // Upload file
            $is_upload_dr_image = move_uploaded_file($_FILES['image']['tmp_name'], $target_dr_name.$image);
            
            if($is_upload_dr_image) {
                
                // Deprtment Add Query
                $sql_vol_insert = "INSERT INTO volunteer (name, image, phone, email, home_town, address, occupation, institution, status) VALUES ('$name', '$image', '$phone', '$email', '$home_town', '$address', '$occupation', '$institution', '$status')";
                $sql_vol_result = $conn->query($sql_vol_insert);

                if($sql_vol_result === TRUE) {
                  echo "<script>alert('New volenteer Added Sucessfully'); window.location.href = 'view_volunteer.php';</script>";  
                } else {
                  echo "<script>alert('Sorry ! Could not add the volunteer, Try Again'); window.location.href = 'view_volunteer.php';</script>"; 
                }
            } else {
                echo "<script>alert('Sorry ! Could not upload image, Try Again'); window.location.href = 'view_volunteer.php';</script>";  
            }
        } else {
           echo "<script>alert('Sorry ! Inalid extension detected, Try Again'); window.location.href = 'view_volunteer.php';</script>"; 
        }  
    }
    
    // Data validation or filter function
    function data_filter($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } 
?>
<div class="page-wrapper">
    <div class="content">
        <div>
            <h1 class="mt-4">Volunteer</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Volenteer</li>
            </ol>
        </div>
        <div style="margin: 15px;" class="row">
            <div class="col-md-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Volunteer Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Write Volunteer name.." required>
                    </div>

                    <div class="form-group">
                      <label>Volunteer Image</label>
                      <input type="file" class="form-control border" name="image" >
                    </div>

                    <div class="form-group">
                      <label>phone</label>
                      <input type="text" class="form-control" name="phone" placeholder="Write phone number..">
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" placeholder="Write email address">
                    </div>

                    <div class="form-group">
                      <label>Home Town</label>
                      <input type="text" class="form-control" name="home_town" placeholder="Write home town (Ex. Lalbeg, Dhaka)" required>
                    </div>

                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" rows="8" name="address" placeholder="Write address .." required></textarea>
                    </div>

                    <div class="form-group">
                      <label>Cccupation</label>
                      <input type="text" class="form-control" name="occupation" placeholder="Write volunteen occupation .." required>
                    </div>

                    <div class="form-group">
                      <label>Institution</label>
                      <input type="text" class="form-control" name="institution" placeholder="Write volunteen institution .." required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>    
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php'; ?>

