<?php include('styles.php'); ?>
<?php
include($directory . '/connection/connect.php');

if (isset($_POST['saveProductToDatabase'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    $product_compare_price = $_POST['product_compare_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_brand = $_POST['product_brand'];
    $product_status = 'true';

    // images
    $product_image_1 = $_FILES['product_image_1']['name'];
    $product_image_2 = $_FILES['product_image_2']['name'];
    $product_image_3 = $_FILES['product_image_3']['name'];

    // image temporary names
    $temp_image_1 = $_FILES['product_image_1']['temp_name'];
    $temp_image_2 = $_FILES['product_image_2']['temp_name'];
    $temp_image_3 = $_FILES['product_image_3']['temp_name'];

    switch (true) {
        case $product_title != ' ' || $product_description != ' ' ||  $product_price != ' ' ||
            $product_compare_price != ' ' ||  $product_keywords != ' ' || $product_category != ' ' ||
            $product_brand != ' ' || $product_image_1 != ' ' || $product_image_2 != ' ':

            // move images
            move_uploaded_file($temp_image_1, "{$directory}/images/{$product_image_1}");
            move_uploaded_file($temp_image_2, "{$directory}/images/{$product_image_2}");
            move_uploaded_file($temp_image_3, "{$directory}/images/{$product_image_3}");

            // insert query
            $insert_product = "INSERT INTO `products` (`product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image_1`, `product_image_2`, `product_image_3`, `product_price`, `product_compare_price`, `date`, `status`) 
            VALUES ('$product_title', '$product_description', '$product_keywords', '$product_category', '$product_brand', '$product_image_1', '$product_image_2', '$product_image_3', '$product_price', '$product_compare_price', NOW(), '$product_status')";

            $products_con = mysqli_query($con, $insert_product);

            if (!$products_con) {
                echo mysqli_error($con);
                echo "<script>alert('Failed to insert data')</script>";
                mysqli_close($con);
            } else {
                echo "<script>alert('Successfully inserted')</script>";
                mysqli_close($con);
            }
            break;
        default:
            echo 'somethings needs to be filled';
            break;
    }
}
?>

<div class="insert--products__wrapper">
    <h3 class="route">Admin > Insert Product</h3>

    <!-- enctype allows us to to insert images -->
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form__wrapper">
            <div class="product__layout-1">
                <div class="product__layout-1--wrapper">
                    <div class=" product--title__wrapper">
                        <label for="product_title">Title</label>
                        <input type="text" name="product_title" id="product_title" placeholder="Product title" required autocomplete="off">
                    </div>

                    <div class="product--description__wrapper">
                        <label for="product_description">Description</label>
                        <input type="text" name="product_description" id="product_description" placeholder="Product Description" required autocomplete="off">
                    </div>
                </div>

                <div class="product--images__wrapper">
                    <span>Media:</span>
                    <div class="product--image__1">
                        <label for="product_image_1"></label>
                        <input type="file" accept="image/png, image/gif, image/jpeg" name="product_image_1" id="product_image_1" autocomplete="false">
                    </div>
                    <div class="product--image__2">
                        <label for="product_image_2"></label>
                        <input type="file" accept="image/png, image/gif, image/jpeg" name="product_image_2" id="product_image_2" autocomplete="false">
                    </div>
                    <div class="product--image__3">
                        <label for="product_image_3"></label>
                        <input type="file" accept="image/png, image/gif, image/jpeg" name="product_image_3" id="product_image_3" autocomplete="false">
                    </div>
                </div>

                <div class="product--price__wrapper">
                    <div>
                        <label for="product_price">Price</label>
                        <input type="number" step="any" name="product_price" id="product_price" autocomplete="false" placeholder="i.e. $24.95">
                    </div>
                    <div>
                        <label for="product_compare_price">Compare at Price</label>
                        <input type="number" step="any" name="product_compare_price" id="product_compare_price" autocomplete="false" placeholder="i.e. $94.95">
                    </div>
                </div>
            </div>

            <div class="product__layout-2">
                <div class="product--organization">
                    <h3>Product organization</h3>
                    <div class="product--keywords__wrapper">
                        <label for="product_keywords">Keywords</label>
                        <input type="text" name="product_keywords" id="product_keywords" placeholder="Product keywords" autocomplete="off">
                    </div>
                    <div class="product--category__wrapper">
                        <select name="product_category" id="product_category">
                            <option value="Select Category">Select Category</option>
                            <?php
                            $sql_category_query = 'SELECT * FROM categories';
                            $sql_category_con = mysqli_query($con, $sql_category_query);

                            $category_array = mysqli_fetch_all($sql_category_con, MYSQLI_ASSOC);
                            mysqli_free_result($sql_category_con);

                            foreach ($category_array as $category) {
                                $category_id = $category['category_id'];
                                $category_title = $category['category_title'];
                                echo "<option value='{$category['category_id']}'>{$category['category_title']}</option>";
                            };

                            ?>
                        </select>
                    </div>
                    <div class="product--brand__wrapper">
                        <select name="product_brand" id="product_brand">
                            <option value="Select brand">Select brand</option>
                            <?php
                            $sql_brand_query = 'SELECT * FROM brands';
                            $sql_brand_con = mysqli_query($con, $sql_brand_query);
                            $brand_array = mysqli_fetch_all($sql_brand_con, MYSQLI_ASSOC);
                            mysqli_free_result($sql_brand_con);
                            mysqli_close($con);

                            for ($i = 0; $i < count($brand_array); $i++) {
                                $brand_id = $brand_array[$i]['brand_id'];
                                $brand_title = $brand_array[$i]['brand_title'];
                                echo "<option value='$brand_id'>$brand_title</option>";
                            };
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" value="Save" name="saveProductToDatabase" required />
        </div>
    </form>
</div>