<?php
include_once('cfg.php');
if (!empty($_POST["startCityID"])) {
    $tourCity = get_tourCity($_POST['startCityID']);
    if (mysqli_num_rows($tourCity) > 0) {
        echo '<option value="" selected disabled>Select Tour City</option>';
        while ($tourCity_info = mysqli_fetch_array($tourCity)) {
?>
<option value="<?php echo $tourCity_info[0]; ?>"><?php echo $tourCity_info[1]; ?></option>
<?php
        }
    } else {
        echo '<option value="">Tour City not available</option>';
    }
}