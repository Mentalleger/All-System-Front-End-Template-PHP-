<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="flex:1;width:100vw;">
    <?php
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
        case 'dashboard': $title = "Dashboard"; include "pages/PageViews/dashboard.php"; break;
        case 'employee': $title = "Employee"; include "pages/PageViews/employee.php"; break;
        case 'products': $title = "Products"; include "pages/PageViews/products.php"; break;
        case 'cart': $title = "Cart"; include "pages/PageViews/cart.php"; break;

        default: include "pages/PageViews/dashboard.php"; break;
    }
    }else{
    include "page/home.php";
    }
    ?>
</div>
