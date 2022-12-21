<!-- creating connection to our database -->
<?php include($directory . '/admin/connection/connect.php'); ?>

<main>
    <div class="main--content__wrapper">
        <h1 class="content--heading">Meat Shop</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eaque non expedita alias earum suscipit.</p>

        <div class="main__wrapper">
            <div class="products">
                <div class="product">
                    <div class="product--image">
                        <img loading="lazy" src="https://baconmockup.com/640/360" alt="">
                    </div>
                    <div class="product--content">
                        <h3>Product Title</h3>
                        <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis enim cum, id ullam asperiores consequatur!</p>
                        <div>
                            <p class="price">$20.00</p>
                        </div>
                        <div class="ctas">
                            <button>Add to cart</button>
                            <button>View More</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product--image">
                        <img loading="lazy" src="https://baconmockup.com/640/361" alt="">
                    </div>
                    <div class="product--content">
                        <h3>Product Title</h3>
                        <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis enim cum, id ullam asperiores consequatur!</p>
                        <div>
                            <p class="price">$20.00</p>
                        </div>
                        <div class="ctas">
                            <button>Add to cart</button>
                            <button>View More</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product--image">
                        <img loading="lazy" src="https://baconmockup.com/640/362" alt="">
                    </div>
                    <div class="product--content">
                        <h3>Product Title</h3>
                        <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis enim cum, id ullam asperiores consequatur!</p>
                        <div>
                            <p class="price">$20.00</p>
                        </div>
                        <div class="ctas">
                            <button>Add to cart</button>
                            <button>View More</button>
                        </div>
                    </div>
                </div>
            </div>
            <aside>
                <div class="brands">
                    <h2>Brands</h2>
                    <ul>
                        <?php
                        $sql_brands_query = 'SELECT brand_title, brand_id FROM brands';
                        $sql_brands_con = mysqli_query($con, $sql_brands_query);

                        $brands_array = mysqli_fetch_all($sql_brands_con, MYSQLI_ASSOC); // returns an associative array
                        mysqli_free_result($sql_brands_con);

                        foreach ($brands_array as $brand) {
                            $brand_id = $brand['brand_id'];
                            $brand_title = $brand['brand_title'];
                            $title_concat = strtolower($brand_title);
                            echo "<a href='index.php?brand-name-{$title_concat}={$brand_id}'><li>{$brand_title}</li></a>";
                        };
                        ?>
                    </ul>
                </div>
                <div class="categories">
                    <h2>Categories</h2>
                    <ul>
                        <?php
                        $sql_categories_query = 'SELECT category_title, category_id from categories';
                        $sql_categories_con = mysqli_query($con, $sql_categories_query);

                        $categories_array = mysqli_fetch_all($sql_categories_con, MYSQLI_ASSOC);
                        mysqli_free_result($sql_categories_con);

                        foreach ($categories_array as $category) {
                            $category_id = $category['category_id'];
                            $category_title = $category['category_title'];
                            $title_concat = strtolower($category_title);
                            echo "<a href='index.php?category-name-{$title_concat}={$category_id}'><li>{$category_title}</li></a>";
                        };
                        ?>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</main>