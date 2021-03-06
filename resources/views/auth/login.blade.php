
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
    <!-- //Meta-Tags -->

    <!-- Style --> <link rel="stylesheet" href="css/style2.css" type="text/css" media="all">



</head>
<!-- //Head -->

<!-- Body -->
<body>
    <h1>登录表单</h1>

    <div class="container w3layouts agileits">

        <div class="login w3layouts agileits">
            <h2><a href="">登 录</a></h2>
            <form action="{{url('index/login')}}" method="post">
            {{csrf_field()}}
                <input value="{{ old('name')}}" type="text" name="name" placeholder="用户名" required="">
                <input value="{{ old('password') }}" type="password" name="password" placeholder="密码" required="">
            
            <ul class="tick w3layouts agileits">
                <li>
                    <input type="checkbox" id="brand1" value="">
                    <label for="brand1"><span></span>记住我</label>
                </li>
            </ul>
            <div style="color:red">@if(\Session::has('message')){{\Session::get('message')}}@endif</div>
            <div class="send-button w3layouts agileits">
                <input type="submit" value="登 录">
            </div>
            </form>
            <a href="">忘记密码?</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('index/register')}}">申请账号</a>
            <div class="social-icons w3layouts agileits">
                <p>- 其他方式登录 -</p>
                <ul>
                    <li class="qq"><a href="#">
                    <span class="icons w3layouts agileits"></span>
                    <span class="text w3layouts agileits">QQ</span></a></li>
                    <li class="weixin w3ls"><a href="#">
                    <span class="icons w3layouts"></span>
                    <span class="text w3layouts agileits">微信</span></a></li>
                    <li class="weibo aits"><a href="https://api.weibo.com/oauth2/authorize?client_id=1047198682&response_type=code&redirect_uri=http://www.small3.com/login/weibo">
                    <span class="icons agileits"></span>
                    <span class="text w3layouts agileits">微博</span></a></li>
                    <div class="clear"> </div>
                </ul>
            </div>
            <div class="clear"></div>
        </div><div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
        

        <div class="clear"></div>

    </div>

    <div class="footer w3layouts agileits">
        <p>Copyright &copy; More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
    </div>

</body>
<!-- //Body -->

</html>