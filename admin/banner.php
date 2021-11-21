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
            <h1>Banner</h1>
        </div>
        <div class="banner">
            <h2>Main Banner</h2>
            <div class="row">
                <div class="box box-fit col">
                    <img src="../img/main-banner.png" alt="">
                    <form action="../data/admin/banner/change-mainbanner.php">
                        <input type="file" onchange="form.submit()">
                    </form>
                </div>
            </div>
            <h2>Category Banner</h2>
            <div class="row">
                <div class="box box-fit">
                    <img src="../img/ctgr-1.png" alt="">
                </div>
                <div class="box box-fit">
                    <img src="../img/ctgr-2.png" alt="">
                </div>
                <div class="box box-fit">
                    <img src="../img/ctgr-3.png" alt="">
                </div>
            </div>
            <h2>Promotion Banner</h2>
            <div class="row">
                <div class="box box-fit">
                    <img src="../img/promo-1.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <script src="../js/admin.js"></script>

    <script>

    function uploadSubmit() {
        $(this).hide()
    }

    </script>

</body>
</html>