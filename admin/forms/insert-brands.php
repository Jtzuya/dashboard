<?php
include($directory . '/connection/connect.php');

if (isset($_POST['insertBrand_button'])) {
    $brandsTitle = $_POST['insert-brands-title'];

    // Database duplication checker
    $selectQuery = "Select * from `brands` where brand_title = '$brandsTitle'";
    $resultSelect = mysqli_query($con, $selectQuery);
    $resultSelectCount = mysqli_num_rows($resultSelect);
    $insertQuery = "insert into `brands` (brand_title) values ('{$brandsTitle}')";

    switch (true) {
        case $resultSelectCount > 0:
            echo "<script>alert('{$brandsTitle} is already in the database, please enter another brand')</script>";
            break;
        case $resultSelectCount == 0:
            $result = mysqli_query($con, $insertQuery);
            echo "<script>alert('{$brandsTitle} was successfully added to our database')</script>";
    }
}
?>
<div class="insert--brands__wrapper">
    <h3 class="route">Admin > Insert Brands</h3>
    <form action="" method="post">
        <input type="text" name="insert-brands-title" id="insert-brands-title" placeholder="Insert brands..." required>
        <input type="submit" value="Submit Brand" name="insertBrand_button"></input>
    </form>
</div>