<!DOCTYPE html>
<html>

<head>
    <tittle> </tittle>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



</head>

<body>
    <?php session_start();
    include('nav.php');
    include('Backend/check_login.php');
    include_once("Backend/cfg.php"); ?>

    <section class="my-5">

        <div class="py-5">
            <h2 class="text-center">Package History </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
               <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Duration</th>
                    <th>Adults</th>
                    <th>Children</th>
                    <th>Start City</th>
                    <th>Tour City</th>
                    <th>Tour Type</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $result = get_user_history($_SESSION['user_id']);
                    while ($info = mysqli_fetch_array($result)) {
                    if ($info[7] == 1) {
                        $tour_type = "Economy";
                     }
                     else{
                        $tour_type = "Special";
                     } ?>
                <tr>
                    <td><?php echo date("d/m/Y", strtotime($info[0])) ?></td>
                    <td><?php echo date("d/m/Y", strtotime($info[1])) ?></td>
                    <td><?php echo $info[2]." Days"; ?></td>
                    <td><?php echo $info[3]." Adults"; ?></td>
                    <td><?php echo $info[4]." Children"; ?></td>
                    <td><?php echo get_city_name($info[5]); ?></td>
                    <td><?php echo get_city_name($info[6]); ?></td>
                    <td><?php echo $tour_type; ?></td>
                    <?php } ?>
                </tr>
                </tbody>
              </table>
            </div>
        </div>
    </section>
</body>

</html>