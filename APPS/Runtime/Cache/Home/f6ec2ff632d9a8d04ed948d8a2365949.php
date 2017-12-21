<?php if (!defined('THINK_PATH')) exit();?>

    <head>

        <meta charset="utf-8">
        <title>宠物家</title>

        <link rel="stylesheet" href="/pet/Public/assets/css/reset.css">
        <link rel="stylesheet" href="/pet/Public/assets/css/supersized.css">
        <link rel="stylesheet" href="/pet/Public/assets/css/style.css">


    </head>

    <body>

        <div class="page-container">
            <h1>宠物家</h1>

            <form action="" method="post">
                <input type="text" name="uname" class="username" placeholder="Username">
                <input type="password" name="pwd" class="password" placeholder="Password">

                <button type="submit">登录</button>
                <div class="error"><span>+</span></div>
            </form> 
            <div class="connect">
                <p>Or connect with:</p>
                <p>
                    <a class="facebook" href=""></a>
                    <a class="twitter" href=""></a>

                </p>
            </div><a href="<?php echo U('Login/sign');?>">注册</a>
        </div>

        <!-- Javascript -->
        <script src="/pet/Public/assets/js/jquery-1.8.2.min.js"></script>
        <script src="/pet/Public/assets/js/supersized.3.2.7.min.js"></script>
        <script src="/pet/Public/assets/js/supersized-init.js"></script>
        <script src="/pet/Public/assets/js/scripts.js"></script>

    </body>

</html>