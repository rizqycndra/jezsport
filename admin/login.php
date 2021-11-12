<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "../data/template/admin/head.php";?>
</head>
<body>

    <div class="login">
        <div class="login-head">
            <h1>Jezsport</h1>
        </div>
        <div class="login-input">
            <form action="">
                <div>
                    <span class="iconify" data-icon="ant-design:user-outlined" data-height="30"></span>
                    <input type="text" name="username" placeholder="Username" autocomplete="off" required>
                </div>
                <div>
                    <span class="iconify" data-icon="akar-icons:lock-on" data-height="30"></span>
                    <input type="password" name="username" placeholder="Password" autocomplete="off" required>
                </div>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>

</body>
</html>