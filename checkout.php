<!DOCTYPE html>
<html lang="id">
<head>
    <?php include_once "data/template/head.php"; ?>
</head>
<body>

    <?php include_once "data/template/navigation.php" ?>

    <div class="container-half">
        <div class="title title-left">
            <h2>Form Pengiriman</h2>
        </div>
        <div class="checkout">
            <div class="checkout-form">
                <form action="invoice" class="jez-input">
                    <label>Nama Penerima</label>
                    <input type="text" name="" placeholder="Bro Jez">
                    <label>No Telp. & Whatsapp</label>
                    <input type="number" name="" placeholder="08XX XXXX XXXX">
                    <label>Email</label>
                    <input type="email" name="" placeholder="brojez@jezsport.com">
                    <label>Alamat</label>
                    <textarea name="" rows="5" placeholder="Alamat Tujuan Pengiriman"></textarea>
                    <div class="jez-input-2">
                        <div>
                            <label>Provinsi</label>
                            <select name="" id="getProvince">
                                <option value="">Pilih Provinsi</option>
                            </select>
                        </div>
                        <div>
                            <label>Kota</label>
                            <select name="" id="getCity" class="disabled">
                                <option value="">Pilih Kota</option>
                            </select>
                        </div>
                    </div>
                    <div class="jez-input-2">
                        <div>
                            <label>Kurir</label>
                            <select name="" id="getCourier" class="disabled">
                                <option value="">Pilih Kurir Pengiriman</option>
                                <option value="jne">JNE</option>
                            </select>
                        </div>
                        <div>
                            <label>Pelayanan</label>
                            <select name="" id="getService" class="disabled">
                                <option value="">Pilih Jenis Layanan</option>
                            </select>
                        </div>
                    </div>
                    <span id="getCourierDetail"></span>
                    <label>Metode Pembayaran</label>
                    <select name="" id="">
                        <option value="">Pilih Metode Pembayaran</option>
                        <option value="qris">QRIS (DANA, GOPAY, SHOPEEPAY)</option>
                        <option value="tva">Transfer Virtual Account</option>
                        <option value="cstore">Indomaret</option>
                    </select>
                    <input type="hidden" name="voucher" id="checkoutVoucher">
                    <input type="submit" value="Bayar">
                </form>
            </div>

            <script src="js/checkout.js"></script>

            <div class="checkout-detail">
                <div class="checkout-d-item">
                    <a>
                        <img src="img/product/00001.png" alt="">
                        <div>
                            <p>Real Madrid 21-22 HOME</p>
                            <span><strike>RP 150.000</strike> ‣ RP 100.000, M</span>
                        </div>
                    </a>
                    <a>
                        <img src="img/product/00001.png" alt="">
                        <div>
                            <p>Real Madrid 21-22 HOME</p>
                            <span><strike>RP 150.000</strike> ‣ RP 100.000, L</span>
                        </div>
                    </a>
                    <a>
                        <img src="img/product/00001.png" alt="">
                        <div>
                            <p>Real Madrid 21-22 HOME</p>
                            <span><strike>RP 150.000</strike> ‣ RP 100.000, L</span>
                        </div>
                    </a>
                </div>
                <div id="addVoucher" class="jez-input">
                    <h5>+ Voucher</h5>
                    <input type="text" placeholder="Masukan Kode Voucher">
                </div>
                <h4>Total RP 300.000</h3>
            </div>
        </div>
    </div>

    <?php include_once "data/template/footer.php"; ?>

    <script src="js/main.js"></script>

</body>
</html>