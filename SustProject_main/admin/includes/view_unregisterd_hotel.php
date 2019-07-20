<?php
//ob_start();
//ekhan theke
if (!$session->is_admin_signed_in()) {
    header("Location: login.php");
}
else{
    if ($_SESSION["admin_id"]) {
        $id = $_SESSION["admin_id"];
    } else {
        $session->logout();
        redirect("location:login.php");
    }
}

?>
<?php
$hotels = RegisterHotel::get_unregistered_hotel();
?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Unregistered Hotels
                    <small>Subheading</small>
                </h1>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Hotel Name</th>
                        <th>Hotel Admin</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>City Name</th>
                        <th>Hotel Location</th>
                        <th>Hotel Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = mysqli_fetch_assoc($hotels)!=false) { var_dump($row); ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['hotel_name']; ?></td>
                            <td><?php echo $row['hotel_admin_name']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                            <td><?php echo $row['hotel_email']; ?></td>
                            <td><?php echo $row['city_name']; ?></td>
                            <td><?php echo $row['hotel_location']; ?></td>
                            <td><?php echo $row['hotel_description']; ?></td>
                            <td><img src="../images/hotels/<?php echo $row['hotel_image']; ?>" alt="" width="50px"
                                     height="50px">
                            </td>
                            <td>
                                <input type="submit" name="confirm" class="btn btn-success " style="width: 100px"
                                       value="Confirm">
                                <input type="submit" name="reject" class="btn btn-danger "
                                       style="width: 100px; margin-top: 10px;" value="Reject">
                            </td>
                        </tr>
                    <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>

<?php require_once("includes/footer.php"); ?>
