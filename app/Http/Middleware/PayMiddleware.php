<?php

namespace App\Http\Middleware;

use Closure;

class PayMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->pay();
        return $next($request);
    }

    private function pay()
    {
        
        // $order=$this->session->userdata('order');
        // $car=$this->session->userdata('car');
        //合作身份者id，以2088开头的16位纯数字
        $alipay_config['partner']       = env('partner');
        //收款支付宝账号
        $alipay_config['seller_email']  = env('seller_email');
        //安全检验码，以数字和字母组成的32位字符
        $alipay_config['key']           = env('key');
        //↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
        //签名方式 不需修改
        $alipay_config['sign_type']    = strtoupper('MD5');
        //字符编码格式 目前支持 gbk 或 utf-8
        //$alipay_config['input_charset']= strtolower('utf-8');
        //ca证书路径地址，用于curl中ssl校验
        //请保证cacert.pem文件在当前文件夹目录中
        $alipay_config['cacert']    = getcwd().'\\cacert.pem';
        //访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
        $alipay_config['transport']    = 'http';
        // ******************************************************配置 end*************************************************************************************************************************

        // ******************************************************请求参数拼接 start*************************************************************************************************************************
        $parameter = array(
            "service" => "create_direct_pay_by_user",
            "partner" => $alipay_config['partner'], // 合作身份者id
            "seller_email" => $alipay_config['seller_email'], // 收款支付宝账号
            "payment_type"  => '1', // 支付类型
            "notify_url"    => "http://bw.com133.com/notify_url.php", // 服务器异步通知页面路径
            "return_url"    => 'http://www.baidu.com', // 页面跳转同步通知页面路径
            "out_trade_no"  => '20171717171718', // 商户网站订单系统中唯一订单号
            "subject"   => '亢清阳', // 订单名称
            "total_fee" => "0.01", // 付款金额
            "body"  => "", // 订单描述 可选
            "show_url"  => "", // 商品展示地址 可选
            "anti_phishing_key" => "", // 防钓鱼时间戳  若要使用请调用类文件submit中的query_timestamp函数
            "exter_invoke_ip"   => "", // 客户端的IP地址
            "_input_charset"    => 'utf-8', // 字符编码格式
        );
        // 去除值为空的参数
        foreach ($parameter as $k => $v) {
            if (empty($v)) {
                unset($parameter[$k]);
            }
        }
        // 参数排序
        ksort($parameter);
        reset($parameter);
        // 拼接获得sign
        $str = "";
        foreach ($parameter as $k => $v) {
            if (empty($str)) {
                $str .= $k . "=" . $v;
            } else {
                $str .= "&" . $k . "=" . $v;
            }
        }
        $parameter['sign'] = md5($str . $alipay_config['key']);
        $parameter['sign_type'] = $alipay_config['sign_type'];
        $sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='https://mapi.alipay.com/gateway.do?_input_charset=utf-8' method='get'>";
        foreach ($parameter as $k => $v) {
            $sHtml.= "<input type='hidden' name='" . $k . "' value='" . $v . "'/>";
        }

        $sHtml = $sHtml."<script>document.forms['alipaysubmit'].submit();</script>";

        // ******************************************************模拟请求 end*************************************************************************************************************************
        

        echo $sHtml;
    }
}
