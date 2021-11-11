<div class="nav-c">
    <div class="nav-left">
        <a href="/" class="nav-brand">
            <img src="img/logo-1.svg" alt="" class="display-mobile-hidden" title="Jezstore - Toko Jersey Online">
            <img src="img/logo-2.svg" alt="" class="display-mobile" title="Jezstore - Toko Jersey Online">
        </a>
        <div class="nav-btn display-mobile-hidden">
            <a href="#" title="Promo Terbaru Dari Jezstore">promo</a>
            <a href="#" title="Artikel Terbaru Dari Jezstore">artikel</a>
            <a href="#" title="Produk Terbaru Dari Jezstore">terbaru</a>
            <a href="#" title="Produk Klasik Dari Jezstore">klasik</a>
            <a href="#" title="Aksesoris Olahraga Dari Jezstore">aksesoris</a>
        </div>
    </div>
    <marquee class="display-mobile" direction="left" >
        <a href="#">
            Selamat Datang Di Jezstore.com #BroJez
        </a>
    </marquee>
    <div class="nav-right">
        <div class="nav-btn nav-btn-icon">
            <a title="Cari Produk" id="navSearch" class="display-mobile-hidden">
                <form action="search">
                    <input type="text" id="navSearchValue" class="nav-search-input display-mobile-hidden" placeholder=" Cari Produk">
                    <input type="submit">
                </form>
                <span class="iconify display-mobile-hidden" data-height="25" data-icon="ant-design:search-outlined"></span>
            </a>
            <a title="Lihat Keranjang" onclick="controlCart('show')">
                <span class="iconify" data-height="25" data-icon="akar-icons:shopping-bag"></span>
            </a>
            <a title="Menu" class="display-mobile" onclick="controlMenu('show')">
                <span class="iconify" data-height="25" data-icon="gg:menu"></span>
            </a>
        </div>
    </div>
</div>
<div class="nav-empty"></div>

<div class="menu">
    <div class="menu-head">
        <p>Menu</p>
        <div onclick="controlMenu('close')">
            <span class="iconify" data-icon="gg:close" data-height="25"></span>
        </div>
    </div>
    <div class="menu-item">
        <a>
            <span class="iconify" data-height="25" data-icon="ant-design:search-outlined"></span>
            <input type="text" id="" class="menu-search" placeholder="Cari Produk...">
        </a>
        <div class="menu-item-gap"></div>
        <a href="#">
            <span class="iconify" data-height="25" data-icon="ps:promo"></span>
            <p>Promo</p>
        </a>
        <a href="#">
            <span class="iconify" data-height="25" data-icon="ic:outline-article"></span>
            <p>Artikel</p>
        </a>
        <div class="menu-item-gap"></div>
        <a href="#">
            <span class="iconify" data-height="25" data-icon="entypo:dot-single"></span>
            <p>Terbaru</p>
        </a>
        <a href="#">
            <span class="iconify" data-height="25" data-icon="entypo:dot-single"></span>
            <p>Klasik</p>
        </a>
        <a href="#">
            <span class="iconify" data-height="25" data-icon="entypo:dot-single"></span>
            <p>Aksesoris</p>
        </a>
        <div class="menu-item-gap"></div>
        <a onclick="controlCart('show')">
            <span class="iconify" data-height="25" data-icon="akar-icons:shopping-bag"></span>
            <p>Keranjang (0)</p>
        </a>
    </div>
</div>

<?php include_once "data/template/cart.php"; ?>