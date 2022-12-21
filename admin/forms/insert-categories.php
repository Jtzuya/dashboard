<?php
include($directory . '/connection/connect.php');

if (isset($_POST['insertCategory_button'])) {
    $categoryTitle = $_POST['insert-category-title'];

    // Database duplication checker
    $selectQuery = "Select * from `categories` where category_title = '$categoryTitle'";
    $resultSelect = mysqli_query($con, $selectQuery);
    $resultSelectCount = mysqli_num_rows($resultSelect);
    $insertQuery = "insert into `categories` (category_title) values ('{$categoryTitle}')";

    if (!preg_match('/^[\s]+$/', $categoryTitle)) {
        switch (true) {
            case $resultSelectCount > 0:
                echo "<script>alert('{$categoryTitle} is already in the database, please enter another category')</script>";
                break;
            case $resultSelectCount == 0:
                $result = mysqli_query($con, $insertQuery);
                echo "<script>alert('{$categoryTitle} was successfully added to our database')</script>";
        }
    } else {
        echo "<script>alert('You cannot insert an empty item to the database.')</script>";
    }
}
?>

<div class="insert--categories__wrapper">
    <h3 class="route">Admin > Insert Categories</h3>
    <form action="" method="post">
        <input type="text" name="insert-category-title" id="insert-category" placeholder="Insert Category..." required autocomplete="false">
        <input type="submit" name="insertCategory_button" value="Submit Category">
    </form>
</div>