<div class="main__wrapper">
    <aside>
        <div class="admin__navigation">
            <ul>
                <li>
                    <button>
                        <a href="/admin/index.php">
                            <i class='bx bxs-home'></i>
                            <span>Home</span>
                        </a>
                    </button>
                </li>
                <li>
                    <button>
                        <a href="/admin/index.php?insert-products">
                            <i class='bx bx-layer-plus'></i>
                            <span>Insert Product</span>
                        </a>
                    </button>
                </li>
                <li>
                    <button>
                        <i class='bx bxs-leaf'></i>
                        <span>View Products</span>
                    </button>
                </li>
                <li>
                    <button>
                        <a href="/admin/index.php?insert-categories">
                            <i class='bx bx-collection'></i>
                            <span>Insert Categories</span>
                        </a>
                    </button>
                </li>
                <li>
                    <button>
                        <a href="/admin/index.php?insert-brands">
                            <i class='bx bxl-deezer'></i>
                            <span>Insert Brands</span>
                        </a>
                    </button>
                </li>
                <li>
                    <button>
                        <i class='bx bx-horizontal-right'></i>
                        <span>View Brands</span>
                    </button>
                </li>
                <li>
                    <button>
                        <i class='bx bxs-shopping-bags'></i>
                        <span>All Orders</span>
                    </button>
                </li>
                <li>
                    <button>
                        <i class='bx bx-wallet'></i>
                        <span>All Payments</span>
                    </button>
                </li>
                <li>
                    <button>
                        <i class='bx bxs-user-rectangle'></i>
                        <span>Customers</span>
                    </button>
                </li>
            </ul>
        </div>
        <div class="other--options">
            <button>
                <i class='bx bx-log-out-circle'></i>
                <span>Logout</span>
            </button>
        </div>
    </aside>
    <div class="admin__main--frame">
        <!--<span>Output: </span>-->
        <?php
        switch (true) {
            case isset($_GET['insert-categories']):
                include($directory . '/forms/insert-categories.php');
                break;
            case isset($_GET['insert-brands']):
                include($directory . '/forms/insert-brands.php');
                break;
            case isset($_GET['insert-products']):
                include($directory . '/forms/insert-product.php');
                break;
        }
        ?>
    </div>
</div>