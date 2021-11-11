<!DOCTYPE html>
<html lang="id">
<head>
    <?php include_once "data/template/head.php"; ?>
</head>
<body>

    <?php include_once "data/template/navigation.php"; ?>

    <div class="container-half">
        <div class="title title-left">
            <h1>Invoice Pembayaran</h1>
        </div>
        <div class="invoice-head">
            <p>Nomor Pembayaran : 312312423, Pembayaran Belum Selesai</p>
            <p>RP 300.000</p>
        </div>
        <div class="invoice">
            <div class="invoice-pay">
                <p>Kode Pembayaran</p>
                <img src="img/invoice-payment/qris.png" alt="" class="invoice-pay-list">
                <div class="invoice-qr">
                    <img src="img/invoice-qr/qr-0000001.png" alt="">
                    <a href="img/invoice-qr/qr-0000001.png" download="QRPAYMENT - 0000001 - Jezsport">Download</a>
                </div>
                <a href="#" class="invoice-paid">Sudah Bayar</a>
                <p>Expired 20 November 2021</p>
            </div>
            <div class="invoice-desc">
                <h5>Metode Pembayaran</h5>
                <p>QRIS (DANA, GOPAY, SHOPEEPAY)</p>
                <h5>Nama Pemesan</h5>
                <p>Rizqy Candra Saputra</p>
                <h5>No Telp. & Email</h5>
                <p>085722855830, rzqcandra@gmail.com</p>
                <h5>Tanggal Belanja</h5>
                <p>10 November 2021</p>
                <h5>Produk Yang Di Pesan</h5>
                <p>Real Madrid 21-22 Home, M (Ready Stock)</p>
                <p>Real Madrid 21-22 Home, M (Ready Stock)</p>
                <p>Real Madrid 21-22 Home, M (Ready Stock)</p>
            </div>
        </div>
    </div>

    <?php include_once "data/template/footer.php"; ?>

    <script src="js/main.js"></script>

</body>
</html>