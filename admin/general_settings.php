<?php 
include 'template/header.php'; 
$general_setting_id = "1";
$title = "";
$slogan = "";
$donate_link = "";
$email = "";
$phone = "";
$address = "";
$fb_link = "";
$tw_link = "";
$yt_link = "";
$copyright = "";

$view_gs_sql = "SELECT * FROM  general_setting  WHERE id='$general_setting_id'";
$view_gs_sql_result = $conn->query($view_gs_sql)->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $slogan = $_POST["slogan"];
  $donate_link = $_POST["donate_link"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $fb_link = $_POST["fb_link"];
  $tw_link = $_POST["tw_link"];
  $yt_link = $_POST["yt_link"];
  $copyright = $_POST["copyright"];
  

  $gs_prev_logo = $view_gs_sql_result['logo'];

  $logo = $_FILES['logo']['name'];
  $target_dir = "upload/gs/";
  $target_file = $target_dir . basename($_FILES['logo']['name']);

  // Select File Type / Extention
  $logoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Allowed File Extensions
  $extension_arr = array('jpg', 'jpeg', 'png', 'gif');
  
  if($logo == "") {
      $update_gs_sql = "UPDATE general_setting  SET title='$title', slogan='$slogan', donate_link='$donate_link', email='$email', phone='$phone', address='$address', fb_link='$fb_link', tw_link='$tw_link', yt_link='$yt_link', copyright='$copyright' WHERE id='$general_setting_id'";
      $update_gs_sql_result = $conn->query($update_gs_sql);

      if ($update_gs_sql_result == TRUE) {
          echo "<script>alert('General Settings Updated Successfully !'); window.location.href='general_settings.php';</script>";
      } else {
          echo "<script>alert('Sorry! Could Not Update General Settings !'); window.location.href='general_settings.php';</script>";
      }
  } else {
      if (in_array($logoFileType, $extension_arr)) {
      
          unlink('upload/gs/' . $gs_prev_logo);

          $is_uploaded = move_uploaded_file($_FILES['logo']['tmp_name'], $target_dir . $logo);

          if ($is_uploaded) {
            $update_gs_sql = "UPDATE general_setting  SET title='$title', logo='$logo', slogan='$slogan', donate_link='$donate_link', email='$email', phone='$phone', address='$address', fb_link='$fb_link', tw_link='$tw_link', yt_link='$yt_link', copyright='$copyright' WHERE id='$general_setting_id'";
            $update_gs_sql_result = $conn->query($update_gs_sql);

            if ($update_gs_sql_result == TRUE) {
              echo "<script>alert('General Settings Updated Successfully !'); window.location.href='general_settings.php';</script>";
            } else {
                echo "<script>alert('Sorry! Could Not Update General Settings !'); window.location.href='general_settings.php';</script>";
            }
          } else {
              echo "<script>alert('Sorry! Logo Could Not be Uploaded !');</script>";
          }
      } else {
          echo "<script>alert('Sorry! Invalid extention Detected !');</script>";
      }
  }
}

?>

<div class="page-wrapper">
    <div class="content">
        <div>
            <h1 class="mt-4">Site Setting</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">All Settings</li>
            </ol>
        </div>
        <?php
        // $sql = "SELECT * FROM setting";
        // $table = mysqli_query($conn, $sql);
        // while($view_gs_sql_result = mysqli_fetch_assoc($table))
        // { 
        ?>
        <div style="margin: 15px;" class="view_gs_sql_result">
            <div class="col-md-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Site Title</label>
                      <input type="text" class="form-control" value="<?php echo $view_gs_sql_result['title']; ?>" name="title" placeholder="Write Site Title ..">
                    </div>

                    <div class="form-group">
                      <label>Logo Image</label><br/>
                      <img style="margin-bottom: 15px;" src="upload/gs/<?php echo $view_gs_sql_result['logo']; ?>" height="80px">
                      <input type="file" class="form-control border" name="logo">
                    </div>

                    <div class="form-group">
                      <label>Slogan</label>
                      <input type="text" class="form-control" value="<?php echo $view_gs_sql_result['slogan']; ?>" name="slogan" placeholder="Write Site Slogan ..">
                    </div>

                    <div class="form-group">
                      <label>Donate Link</label>
                      <input type="text" class="form-control" value="<?php echo $view_gs_sql_result['donate_link']; ?>" name="donate_link" placeholder="Write Donate Link ..">
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" value="<?php echo $view_gs_sql_result['email']; ?>" name="email" placeholder="Write Email ID ..">
                    </div>

                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="text" class="form-control" value="<?php echo $view_gs_sql_result['phone']; ?>" name="phone" placeholder="Write Phone Number ..">
                    </div>
                    
                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" view_gs_sql_results="8" name="address" placeholder="Write Department Detail .."><?php echo $view_gs_sql_result['address']; ?></textarea>
                    </div>

                    <div class="form-group">
                      <label>Facebook Link</label>
                      <input type="text" class="form-control" value="<?php echo $view_gs_sql_result['fb_link']; ?>" name="fb_link" placeholder="Write Facebook Link ..">
                    </div>

                    <div class="form-group">
                      <label>Twitter Link</label>
                      <input type="text" class="form-control" value="<?php echo $view_gs_sql_result['tw_link']; ?>" name="tw_link" placeholder="Write twitter Link ..">
                    </div>

                    <div class="form-group">
                      <label>Youtube Link</label>
                      <input type="text" class="form-control" value="<?php echo $view_gs_sql_result['yt_link']; ?>" name="yt_link" placeholder="Write Youtube Link ..">
                    </div>

                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" view_gs_sql_results="8" name="copyright" placeholder="Write Copyright Text .."><?php echo $view_gs_sql_result['copyright']; ?></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
        <?php //} ?>
    </div>
</div>
<?php include 'template/footer.php'; ?>


