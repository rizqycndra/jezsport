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
        <div class="product">
            <table class="table">
                <thead>
                    <tr>
                        <th class="table-tn display-desktop"></th>
                        <th>Nama Produk</th>
                        <th class="display-desktop">Jenis</th>
                        <th class="display-desktop">Harga</th>
                        <th>SKU</th>
                        <th>Stok</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="display-desktop"><img src="../img/product/00001.png" alt=""></td>
                        <td>Real Madrid 21-22 Home Kit</td>
                        <td class="display-desktop">Jersey</td>
                        <td class="display-desktop">RP 100.000</td>
                        <td>01RMHO2122, 1015</td>
                        <td>2</td>
                        <td><a href="product-detail">Edit</a></td>
                    </tr>
                    <tr>
                        <td class="display-desktop"><img src="../img/product/00001.png" alt=""></td>
                        <td>Real Madrid 21-22 Home Kit</td>
                        <td class="display-desktop">Jersey</td>
                        <td class="display-desktop">RP 100.000</td>
                        <td>01RMHO2122, 1015</td>
                        <td>2</td>
                        <td><a href="product-detail">Edit</a></td>
                    </tr>
                    <tr>
                        <td class="display-desktop"><img src="../img/product/00001.png" alt=""></td>
                        <td>Real Madrid 21-22 Home Kit</td>
                        <td class="display-desktop">Jersey</td>
                        <td class="display-desktop">RP 100.000</td>
                        <td>01RMHO2122, 1015</td>
                        <td>2</td>
                        <td><a href="product-detail">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../js/admin.js"></script>

    <script>

    

    </script>

</body>
</html>