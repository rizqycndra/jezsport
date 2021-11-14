<div class="sidebar">
    <div class="sidebar-head">
        <img src="../img/logo-1.svg" alt="">
        <span onclick="menuControl('close')" class="iconify display-mobile" data-icon="gg:close" data-height="30"></span>
    </div>
    <div class="sidebar-content">
        <a class="sidebar-btn" onclick="dropdownSidebar()">
            <span class="iconify" data-icon="bx:bxs-user-check" data-height="25"></span>
            <p>Rizqycndra</p>
        </a>
        <div class="sidebar-content-gap"></div>
        <a href="index" class="sidebar-btn" id="sidebarIndex">
            <span class="iconify" data-icon="ic:sharp-space-dashboard" data-height="25"></span>
            <p>Dashboard</p>
        </a>
        <a href="order" class="sidebar-btn" id="sidebarOrder">
            <span class="iconify" data-icon="bi:bag-fill" data-height="25"></span>
            <p>Order</p>
            <span class="sidebar-btn-label">3</span>
        </a>
        <div class="sidebar-content-gap"></div>
        <a href="product" class="sidebar-btn" id="sidebarProduct">
            <span class="iconify" data-icon="mdi:package" data-height="25"></span>
            <p>Product</p>
        </a>
        <a href="customer" class="sidebar-btn" id="sidebarCustomer">
            <span class="iconify" data-icon="bx:bxs-user-circle" data-height="25"></span>
            <p>Customer</p>
        </a>
        <a href="banner" class="sidebar-btn" id="sidebarBanner">
            <span class="iconify" data-icon="ph:flag-banner-fill" data-height="25"></span>
            <p>Banner</p>
        </a>
        <div class="sidebar-content-gap"></div>
        <a href="settings" class="sidebar-btn" id="sidebarSettings">
            <span class="iconify" data-icon="ant-design:setting-filled" data-height="25"></span>
            <p>Settings</p>
        </a>
        <a href="logout" class="sidebar-btn" id="adminLogout">
            <span class="iconify" data-icon="si-glyph:turn-off" data-height="25"></span>
            <p>Logout</p>
        </a>
    </div>
    <div class="sidebar-footer">
        <p>V 1.0</p>
    </div>

    <script>
        $(window).ready(function(){
            var path = window.location.pathname;
            var parts = path.split('/');
            var urlPath = parts.pop() || parts.pop();  // handle potential trailing slash
            urlPath = urlPath.replace('-',' ').replace('-',' ');
            switch (urlPath){
                case "index":
                    $('#sidebarIndex').addClass('sidebar-btn-active')
                    break;
                case "order":
                    $('#sidebarOrder').addClass('sidebar-btn-active')
                    break;
                case "product":
                    $('#sidebarProduct').addClass('sidebar-btn-active')
                    break;
                case "customer":
                    $('#sidebarCustomer').addClass('sidebar-btn-active')
                    break;
                case "banner":
                    $('#sidebarBanner').addClass('sidebar-btn-active')
                    break;
                case "setting":
                    $('#sidebarSettings').addClass('sidebar-btn-active')
                    break;
            }
        })
    </script>

</div>