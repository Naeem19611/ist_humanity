<?php include 'template/header.php'; ?>
<?php
    $sql_vol_view = "SELECT * FROM volunteer";
    $result_vol_view = $conn->query($sql_vol_view);
?>
<div class="page-wrapper">
    <div class="content">
        <div>
            <h1 class="mt-4">Volunteer</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">View Volunteer</li>
            </ol>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Avater</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Home Town</th>
                            <th>Occupation</th>
                            <th>Institution</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($result_vol_view->num_rows > 0) {
                                while ($rows_of_vol = $result_vol_view->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><img style="height: 50px; width: 50px;" src="upload/volunteer/<?php echo $rows_of_vol['image']; ?>" /></td>
                            <td><?php echo $rows_of_vol['name']; ?></td>
                            <td><?php echo $rows_of_vol['phone']; ?></td>
                            <td><?php echo $rows_of_vol['email']; ?></td>
                            <td><?php echo $rows_of_vol['address']; ?></td>
                            <td><?php echo $rows_of_vol['home_town']; ?></td>
                            <td><?php echo $rows_of_vol['occupation']; ?></td>
                            <td><?php echo $rows_of_vol['institution']; ?></td>
                            <td><?php 
                                    if($rows_of_vol['status'] == '1') {
                                        echo "Active";
                                    } else {
                                        echo "Inactive";
                                    }
                                ?>
                             </td>
                            <td>
                                <a href="edit_volunteer.php?vol_id=<?php echo $rows_of_vol['id']; ?>" class="btn btn-md btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="delete_volunteer.php?vol_id=<?php echo $rows_of_vol['id']; ?>" class="btn btn-md btn-danger" onclick="return confirm('Are you sure want to delete this item ?');"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <?php
                            } } else {
                                echo "No Data Found !";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>         
</div>
<script type="text/javascript">
   $(document).ready(function () {
    $('#dataTable').DataTable();
});
</script>
<?php include 'template/footer.php'; ?>



