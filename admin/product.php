<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "../data/template/admin/head.php"; ?>
</head>
<body>

    <?php include_once "../data/template/admin/sidebar.php"; ?>

    <div class="content">
        <div class="content-head">
            <span onclick="menuControl('show')" class="iconify display-mobile" data-icon="eva:menu-fill" data-height="30"></span>
            <h1>Product</h1>
        </div>
        <div class="order-tab">
                <a onclick="tabSelect('modernjersey'), productListRequest('modernjersey')" tabselect="modernjersey">Jersey Modern</a>
                <a onclick="tabSelect('classicjersey'), productListRequest('classicjersey')" tabselect="classicjersey">Jersey Klasik</a>
                <a onclick="tabSelect('accstuff'), productListRequest('accstuff')" tabselect="accstuff">Aksesoris</a>
                <a onclick="tabSelect('otherstuff'), productListRequest('otherstuff')" tabselect="otherstuff">Lainnya</a>
                <a onclick="tabSelect('soldstuff'), productListRequest('soldstuff')" tabselect="soldstuff" class="text-warning">Habis</a>
            </div>
        <div class="product">
            <div class="order-tab-content" id="modernjersey"></div>
            <div class="order-tab-content" id="classicjersey"></div>
            <div class="order-tab-content" id="accstuff"></div>
            <div class="order-tab-content" id="otherstuff"></div>
            <div class="order-tab-content" id="soldstuff"></div>
        </div>
    </div>

    <script src="../js/admin.js"></script>

    <script>

        $(window).ready(function(){
            tabSelect('modernjersey')
            productListRequest('modernjersey')
        })

        function productListRequest(requestType) {
            $('#'+requestType).load('../data/admin/request-product-list.php?id='+requestType)
        }

    </script>

</body>
</html>