
<!DOCTYPE html>
<html>

<!-- Head -->
<head>
<base href="/frontend/">
    <title>登录表单</title>

    <!-- Meta-Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <!-- //Meta-Tags -->

    <!-- Style --> <link rel="stylesheet" href="css/style2.css" type="text/css" media="all">



</head>
<!-- //Head -->

<!-- Body -->
<body>

    <h1>注册表单</h1>

    <div class="container w3layouts agileits">

        <div class="register w3layouts agileits">
            <h2>注 册</h2>
            <form action="<?php echo e(url('index/register')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="a">
                <input class="a1" style="border:0px solid white;width:100px;height:30px;" type="button" value="个人"><input class="a2" style="border:0px solid white;height:30px;width:100px;" type="button" value="医院">
            </div>
                <input class="hidden" type="hidden" name="status" value="0">
                <input type="text" name="name" placeholder="用户名" required="">
                <input type="text" name="email" placeholder="邮箱" required="">
                <input type="text" style="width:50%" placeholder="输入验证码"><img class="img"  src="<?php echo e(url('/captcha')); ?>">
                <input type="password" name="password" placeholder="密码" required="">
                <input type="password" name="password_confirmation" placeholder='确认密码' required="">
                <input type="text" name="phone" placeholder="手机号码" required="">
            <div class="send-button w3layouts agileits">
                    <input type="submit" value="免费注册">
            </div>
            <a style="color:white" href="<?php echo e(url('index/login')); ?>">已有账号?选择登录</a>
            </form>
            <div class="clear"></div>
        </div>
            
            <div class="clear"></div>
        </div><div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
        

        <div class="clear"></div>

    </div>


</body>
<!-- //Body -->

</html>
<script type="text/javascript">
    $(".a1").css('background','red');
    $(".img").click(function(){
        this.src="<?php echo e(url('captcha')); ?>"+'?r='+Math.random();
    })
    $(".a1").click(function(){
        $(this).css('background','red');
        $('.a2').css('background','');
        $(".hidden").val('0');
    })
    $(".a2").click(function(){
        $(this).css('background','red');
        $(".a1").css('background','');
        $(".hidden").val('1');
    })
</script>