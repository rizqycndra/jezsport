<!DOCTYPE html>
<html lang="id">
<head>
    <?php include_once "data/template/head.php"; ?>
</head>
<body>

    <?php include_once "data/template/navigation.php"; ?>

    <div class="container-half product">
        <div class="product-img">
            <div class="product-img-arrow">
                <span class="iconify product-arrow-left" data-icon="fe:arrow-left" data-height="50" onclick="plusSlides(-1)"></span>
                <span class="iconify product-arrow-right" data-icon="fe:arrow-right" data-height="50" onclick="plusSlides(1)"></span>
            </div>
            <img src="img/product/00001.png" alt="" class="mySlides">
            <img src="img/product/00002.png" alt="" class="mySlides">
            <img src="img/product/00003.png" alt="" class="mySlides">
        </div>
        <div class="product-content">
            <h1>Real Madrid 21-22 HOME</h1>
            <p class="price"><strike>RP 150.000</strike> ‣ RP 100.000</p>
            <p>Jersey Real Madrid Edisi 2021-2022 HOME</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div>
                <span>Size: </span>
                <select name="size" id="productSize">
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                </select>
            </div>
            <a href="checkout">Tambah Ke Keranjang</a>
        </div>
    </div>

    <div class="container-half">
        <div class="title title-left">
            <h2>Produk Serupa</h2>
        </div>
        <div class="catalog">
            <a href="product" class="catalog-item">
                <img src="img/product/00001.png" alt="">
                <h4>Real Madrid 21-22 HOME</h4>
                <p><strike>RP 150.000</strike> ‣ RP 100.000</p>
            </a>
            <a href="product" class="catalog-item">
                <img src="img/product/00001.png" alt="">
                <h4>Real Madrid 21-22 HOME</h4>
                <p><strike>RP 150.000</strike> ‣ RP 100.000</p>
            </a>
            <a href="product" class="catalog-item">
                <img src="img/product/00001.png" alt="">
                <h4>Real Madrid 21-22 HOME</h4>
                <p><strike>RP 150.000</strike> ‣ RP 100.000</p>
            </a>
            <a href="product" class="catalog-item">
                <img src="img/product/00001.png" alt="">
                <h4>Real Madrid 21-22 HOME</h4>
                <p><strike>RP 150.000</strike> ‣ RP 100.000</p>
            </a>
        </div>
    </div>

    <div class="container-half">
        <div class="title title-left">
            <h2>Produk Lainnya</h2>
        </div>
        <div class="catalog">
            <a href="product" class="catalog-item">
                <img src="img/product/00001.png" alt="">
                <h4>Real Madrid 21-22 HOME</h4>
                <p><strike>RP 150.000</strike> ‣ RP 100.000</p>
            </a>
            <a href="product" class="catalog-item">
                <img src="img/product/00001.png" alt="">
                <h4>Real Madrid 21-22 HOME</h4>
                <p><strike>RP 150.000</strike> ‣ RP 100.000</p>
            </a>
            <a href="product" class="catalog-item">
                <img src="img/product/00001.png" alt="">
                <h4>Real Madrid 21-22 HOME</h4>
                <p><strike>RP 150.000</strike> ‣ RP 100.000</p>
            </a>
            <a href="product" class="catalog-item">
                <img src="img/product/00001.png" alt="">
                <h4>Real Madrid 21-22 HOME</h4>
                <p><strike>RP 150.000</strike> ‣ RP 100.000</p>
            </a>
        </div>
    </div>

    <?php include_once "data/template/promotion.php"; ?>

    <?php include_once "data/template/footer.php"; ?>

    <script src="js/main.js"></script>
    <script src="js/product.js"></script>

</body>
</html>