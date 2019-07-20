<?php require_once("../includes/init.php");
require_once ("../includes/session.php");?>
<?php require_once("includes/header.php"); ?>
<?php require_once("includes/top_nav.php"); ?>
<?php require_once("includes/side_nav.php"); ?>
<?php

//ekhan theke
if (!$session->is_admin_signed_in()) {
    header("Location: login.php");
}

?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <?php

            if (isset($_GET['source'])) {
                $source = $_GET['source'];
            } else {
                $source = '';
            }

            switch ($source) {
                case 'add_city':
                    require_once("includes/add_city.php");
                    break;
                case 'edit_city':
                    require_once("includes/edit_city.php");
                    break;
                default:
                    require_once("includes/view_all_cities.php");
                    break;
            }

            ?>
        </div>
    </div>
</div>

<?php require_once("includes/footer.php"); ?>
