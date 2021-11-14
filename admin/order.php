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
            <h1>Order</h1>
        </div>
        <div class="order">
            <div class="order-tab">
                <a onclick="tabSelect('unpaid')" tabselect="unpaid">Belum Dibayar</a>
                <a onclick="tabSelect('fullpaid')" tabselect="fullpaid">Sudah Dibayar</a>
                <a onclick="tabSelect('process')" tabselect="process">Diproses</a>
                <a onclick="tabSelect('shipping')" tabselect="shipping">Diperjalanan</a>
                <a onclick="tabSelect('success')" tabselect="success">Terkirim</a>
                <a onclick="tabSelect('cancel')"  tabselect="cancel" class="text-warning">DIbatalkan</a>
            </div>
            <div class="order-tab-content" id="unpaid">
                <div class="order-list">
                    <div class="box order-item">
                        <div class="order-id">#1364564, RP 208.000 <span>RP 6.000 Potongan</span></div>
                        <div class="gap-line"></div>
                        <div class="row">
                            <div class="order-desc">
                                <p>Antoni</p>
                                <p>Kp. Kebon Kelapa, Desa Cimareme RT02 / RW02
    No.54 Kec.Ngamprah Kab.Bandung Barat</p>
                                <p>Jawa Barat, Kab. Bandung Barat</p>
                                <p>085722855830</p>
                                <p class="order-shipping">JNE, YES, RP 8.000</p>
                            </div>
                            <div class="order-product">
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5456, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5457, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-action">
                                <a class="box-warning" href="#">Diproses</a>
                                <a href="#">Dibatalkan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-list">
                    <div class="box order-item">
                        <div class="order-id">#1364564, RP 208.000 <span>RP 6.000 Potongan</span></div>
                        <div class="gap-line"></div>
                        <div class="row">
                            <div class="order-desc">
                                <p>Antoni</p>
                                <p>Kp. Kebon Kelapa, Desa Cimareme RT02 / RW02
    No.54 Kec.Ngamprah Kab.Bandung Barat</p>
                                <p>Jawa Barat, Kab. Bandung Barat</p>
                                <p>085722855830</p>
                                <p class="order-shipping">JNE, YES, RP 8.000</p>
                            </div>
                            <div class="order-product">
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5456, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5457, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-action">
                                <a class="box-warning" href="#">Diproses</a>
                                <a href="#">Dibatalkan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-tab-content" id="fullpaid">
                <div class="order-list">
                    <div class="box order-item">
                        <div class="order-id">#2364564, RP 208.000 <span>RP 6.000 Potongan</span></div>
                        <div class="gap-line"></div>
                        <div class="row">
                            <div class="order-desc">
                                <p>Antoni</p>
                                <p>Kp. Kebon Kelapa, Desa Cimareme RT02 / RW02
    No.54 Kec.Ngamprah Kab.Bandung Barat</p>
                                <p>Jawa Barat, Kab. Bandung Barat</p>
                                <p>085722855830</p>
                                <p class="order-shipping">JNE, YES, RP 8.000</p>
                            </div>
                            <div class="order-product">
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5456, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5457, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-action">
                                <a class="box-warning" href="#">Diproses</a>
                                <a href="#">Dibatalkan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-tab-content" id="process">
                <div class="order-list">
                    <div class="box order-item">
                        <div class="order-id">#3364564, RP 208.000 <span>RP 6.000 Potongan</span></div>
                        <div class="gap-line"></div>
                        <div class="row">
                            <div class="order-desc">
                                <p>Antoni</p>
                                <p>Kp. Kebon Kelapa, Desa Cimareme RT02 / RW02
    No.54 Kec.Ngamprah Kab.Bandung Barat</p>
                                <p>Jawa Barat, Kab. Bandung Barat</p>
                                <p>085722855830</p>
                                <p class="order-shipping">JNE, YES, RP 8.000</p>
                            </div>
                            <div class="order-product">
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5456, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5457, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-action">
                                <a class="box-warning" href="#">Diproses</a>
                                <a href="#">Dibatalkan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-tab-content" id="shipping">
                <div class="order-list">
                    <div class="box order-item">
                        <div class="order-id">#4364564, RP 208.000 <span>RP 6.000 Potongan</span></div>
                        <div class="gap-line"></div>
                        <div class="row">
                            <div class="order-desc">
                                <p>Antoni</p>
                                <p>Kp. Kebon Kelapa, Desa Cimareme RT02 / RW02
    No.54 Kec.Ngamprah Kab.Bandung Barat</p>
                                <p>Jawa Barat, Kab. Bandung Barat</p>
                                <p>085722855830</p>
                                <p class="order-shipping">JNE, YES, RP 8.000</p>
                            </div>
                            <div class="order-product">
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5456, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5457, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-action">
                                <a class="box-warning" href="#">Diproses</a>
                                <a href="#">Dibatalkan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-tab-content" id="success">
                <div class="order-list">
                    <div class="box order-item">
                        <div class="order-id">#5364564, RP 208.000 <span>RP 6.000 Potongan</span></div>
                        <div class="gap-line"></div>
                        <div class="row">
                            <div class="order-desc">
                                <p>Antoni</p>
                                <p>Kp. Kebon Kelapa, Desa Cimareme RT02 / RW02
    No.54 Kec.Ngamprah Kab.Bandung Barat</p>
                                <p>Jawa Barat, Kab. Bandung Barat</p>
                                <p>085722855830</p>
                                <p class="order-shipping">JNE, YES, RP 8.000</p>
                            </div>
                            <div class="order-product">
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5456, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5457, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-action">
                                <a class="box-warning" href="#">Diproses</a>
                                <a href="#">Dibatalkan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-tab-content" id="cancel">
                <div class="order-list">
                    <div class="box order-item">
                        <div class="order-id">#6364564, RP 208.000 <span>RP 6.000 Potongan</span></div>
                        <div class="gap-line"></div>
                        <div class="row">
                            <div class="order-desc">
                                <p>Antoni</p>
                                <p>Kp. Kebon Kelapa, Desa Cimareme RT02 / RW02
    No.54 Kec.Ngamprah Kab.Bandung Barat</p>
                                <p>Jawa Barat, Kab. Bandung Barat</p>
                                <p>085722855830</p>
                                <p class="order-shipping">JNE, YES, RP 8.000</p>
                            </div>
                            <div class="order-product">
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5456, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                                <div class="order-product-item">
                                    <img src="../img/product/00001.png">
                                    <div class="order-product-item-desc">
                                        <p>#5457, Real Madrid 21-22 Home</p>
                                        <p>M</p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-action">
                                <a class="box-warning" href="#">Diproses</a>
                                <a href="#">Dibatalkan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/admin.js"></script>

    <script>

    $(window).ready(function(){
        tabSelect('unpaid')
    })

    function tabSelect(tabSection) {
        $('.order-tab-content').hide()
        $('.order-tab-active').removeClass('order-tab-active')
        $('#'+tabSection).show()
        $('[tabselect*="'+tabSection+'"]').addClass('order-tab-active')
    }
    </script>

</body>
</html>