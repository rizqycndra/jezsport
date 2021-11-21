<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "../data/template/admin/head.php"; ?>
</head>
<body>

    <?php include_once "../data/template/admin/sidebar.php"; ?>

    <?php
    if ($_GET['q']) {
        switch ($_GET['q']) {
            case 'wrongformat': $uploadNotif = 'ERROR: Format yang diupload salah'; break;
            case 'toolarge': $uploadNotif = 'ERROR: Ukuran gambar terlalu besar (max: 2MB)'; break;
            case 'error': $uploadNotif = 'ERROR: Gambar gagal diupload'; break;
            case 'success': $uploadNotif = 'Gambar berhasil diupload'; break;
        }
    ?>

    <div class="modal">
        <div class="modal-body">
            <p><?= $uploadNotif ?></p>
            <div class="modal-gap"></div>
            <div class="modal-btn">
                <a onclick="modalClose()">ok</a>
            </div>
        </div>
        <div class="modal-bg"></div>
    </div>

    <?php
    }
    ?>

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
                    <form action="../data/admin/banner/change-banner" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="banner" value="main-banner">
                        <input name="fileToUpload" id="fileToUpload" type="file" onchange="form.submit()">
                    </form>
                </div>
            </div>
            <h2>Category Banner</h2>
            <div class="row">
                <div class="box box-fit">
                    <img src="../img/ctgr-1.png" alt="">
                    <form action="../data/admin/banner/change-banner" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="banner" value="ctgr-1">
                        <input name="fileToUpload" id="fileToUpload" type="file" onchange="form.submit()">
                    </form>
                </div>
                <div class="box box-fit">
                    <img src="../img/ctgr-2.png" alt="">
                    <form action="../data/admin/banner/change-banner" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="banner" value="ctgr-2">
                        <input name="fileToUpload" id="fileToUpload" type="file" onchange="form.submit()">
                    </form>
                </div>
                <div class="box box-fit">
                    <img src="../img/ctgr-3.png" alt="">
                    <form action="../data/admin/banner/change-banner" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="banner" value="ctgr-3">
                        <input name="fileToUpload" id="fileToUpload" type="file" onchange="form.submit()">
                    </form>
                </div>
            </div>
            <h2>Promotion Banner</h2>
            <div class="row">
                <div class="box box-fit">
                    <img src="../img/promo-1.png" alt="">
                    <form action="../data/admin/banner/change-banner" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="banner" value="promo-1">
                        <input name="fileToUpload" id="fileToUpload" type="file" onchange="form.submit()">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/admin.js"></script>

    <script>

    

    </script>

</body>
</html>