<!DOCTYPE html>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta charset="utf-8" /> 
  <title>注册 - 美丽说</title> 
  <style>
    table,td{
      border-collapse:collapse;
    }
    td{
      padding:10px;
    }
    input{
      width:200px;
      height:25px;
      border:solid 1px #ddd;
    }
    tr td:first-child{
      text-align:right;
      font-size:14px;
    }
    span{
      font-size:12px;
    }

    .active {
      border:solid 1px blue;
    }
    .span-active{
      color:gray;
    }
    .error{
      border:solid 1px red;
    }
    .span-error{
      color:red;
    }
    .span-success{
      font-weight:bold;
      color:green;
    }
  </style>
  <meta name="description" content="美丽说是白领女性时尚消费品牌，为超过1亿注册用户提供导购信息。建立300万全球女性时尚品牌商品库，超过1000家全球品牌达成官方合作导购体验，更好的满足白领女性的时尚消费需求。" /> 
  <meta name="keywords" content="美丽说,美丽说官网,美丽说首页,美丽说登录,导购,白领,女装,网购" /> 
  <link rel="dns-prefetch" href="http://static.meilishuo.net/" /> 
  <link rel="dns-prefetch" href="http://s6.mogucdn.com/" /> 
  <link rel="dns-prefetch" href="http://s7.mogucdn.com/" /> 
  <link rel="dns-prefetch" href="http://s11.mogucdn.com/" /> 
  <link rel="dns-prefetch" href="http://s16.mogucdn.com/" /> 
  <link rel="dns-prefetch" href="http://s17.mogucdn.com/" /> 
  <link rel="dns-prefetch" href="https://s10.mogucdn.com/" /> 
  <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1" /> 
  <meta name="renderer" content="webkit" /> 
  <meta name="mobile-agent" content="format=html5;url=http://m.meilishuo.com" /> 
  <link rel="icon" href="170330_18lijh27gh4id05ada3cleihlck71_48x48.png" type="image/x-icon" /> 
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/home/css/index.css')); ?>" media="all" /> 
 </head> 
 <body>
  <div class="page"> 
   <h1> <a href="/Home/index"></a> </h1> 
   <div class="content"> 
    <div class="left-box"> 
     <img src="<?php echo e(asset('/home/images/idid_ifrgmmjqmnsgmmbvmizdambqmeyde_370x353.jpg')); ?>" alt="" />
    </div>
    <div class="right-box"> 
     <p class="title"> 新用户注册 <a href="/home/login" class="login">已有账号</a> </p> 
     <form action="/home/submit" method="post">
        <?php echo e(csrf_field()); ?>

       <?php if(session('msg')): ?>  
           <div class="form"> 
               <p class="error-tips" id="errorTip"><?php echo e(session('msg')); ?></p> 
           <div class="item">
       <?php else: ?>
           <div class="form"> 
              <p class="error-tips" id="errorTip"></p> 
           <div class="item">
       <?php endif; ?>
       <tr><td>用户名:</td><td> <input value="" id="phone" maxlength="11" class="ui-input phone"  type="text" name="name"/><span></span></td></tr> 
       </div> 
       <div class="item"> 
        <tr><td>密码:</td><td><input value="" id="phone" maxlength="11" class="ui-input phone"  type="text" name="pass"/><span></span></td></tr> 
       </div>
       </div> 
        <div class="item"> 
        <tr><td>手机号:</td><td><input value="" id="phone" maxlength="11" class="ui-input phone"  type="text" name="tel"/><span></span></td></tr> 
       </div> 
       <div class="item"> 
        <input id="submit" value="注册" class="submit" type="submit" /> 
       </div> 
      </div> 
     </form>
    </div> 
   </div>
  </div>
  <div id="M_PC_footer">
   <div id="M_PC_footer_container"> 
    <div class="inner clearfix"> 
     <div class="clearfix"> 
      <div class="flist">
       <h4>买家帮助</h4> 
       <div class="footer_link">
        <a href="http://www.meilishuo.com/helpcenter/noviceGuide/" target="_top">新手指南</a>
       </div> 
       <div class="footer_link">
        <a href="http://www.meilishuo.com/helpcenter/serviceEnsure/" target="_top">服务保障</a>
       </div> 
       <div class="footer_link">
        <a href="http://www.meilishuo.com/helpcenter/helpCommon/" target="_top">常见问题</a>
       </div> 
       <div class="footer_link">
        <a href="http://www.hd315.gov.cn/xxgk/spzlgs/" target="_top">风险监测</a>
       </div> 
      </div> 
      <div class="flist">
       <h4>商家帮助</h4> 
       <div class="footer_link">
        <a href="http://s.xd.meilishuo.com/welcome" target="_top">供货商招募</a>
       </div> 
       <div class="footer_link">
        <a href="http://xd.meilishuo.com/" target="_top">商家后台</a>
       </div> 
      </div> 
      <div class="flist">
       <h4>关于我们</h4> 
       <div class="footer_link">
        <a href="http://www.meilishuo.com/aboutus" target="_top">关于美丽说</a>
       </div> 
       <div class="footer_link">
        <a href="http://www.meilishuo.com/aboutus/index/contactus" target="_top">联系我们</a>
       </div> 
      </div> 
      <div class="flist aboutus"> 
       <h4>关注我们</h4> 
       <div class="footer_link">
        <a href="http://t.sina.com.cn/meilishuo" target="_top"> <span class="footer_icon_sina"></span>新浪微博 
         <div class="footer_sina_follow">
           一键关注新浪微博 
          <wb:follow-button uid="1718455577" type="red_1" width="67" height="24"></wb:follow-button> 
         </div> </a>
       </div> 
       <div class="footer_link">
        <a href="http://user.qzone.qq.com/1379986183/" target="_top"><span class="footer_icon_qzone"></span>QQ空间</a>
       </div> 
       <div class="footer_link">
        <a href="http://t.qq.com/meilishuo" target="_top"><span class="footer_icon_tencent"></span>腾讯微博</a>
       </div> 
      </div> 
      <div class="flist service"> 
       <h4>美丽说微信服务号</h4> 
       <img class="qrcode" src="<?php echo e(asset('/home/images/idid_ifrdoytghe4gezjymuzdambqmeyde_100x100.png')); ?>" alt="美丽说服务号二维码" /> 
      </div> 
      <div class="flist last"> 
       <h4>美丽说客户端下载</h4> 
       <img class="qrcode" src="<?php echo e(asset('/home/images/7e_74j23d2a5f5j3bj31h70375gbeec1_100x100.png')); ?>" /> 
      </div> 
     </div> 
     <div class="footer_record">
       Copyright &copy;2017 Meilishuo.com &nbsp;
      <a href="https://s10.mogucdn.com/new1/v1/bmisc/518ea1bbd36948b90e658485d2700e62/181714310539.pdf" target="_top">电信与信息服务业务经营许可证100798号</a>&nbsp;
      <a href="https://s10.mogucdn.com/p1/160811/idid_ifrtszjqmmzdazrumezdambqhayde_2436x3500.jpg" target="_top">经营性网站备案信息</a>&nbsp;
      <br /> 京ICP备11031139号&nbsp; 京公网安备110108006045&nbsp;&nbsp; 客服电话：4000-800-577&nbsp; 文明办网文明上网举报电话：010-82615762 &nbsp;
      <a href="http://net.china.com.cn/index.htm" target="_top">违法不良信息举报中心</a> 
     </div> 
    </div>
   </div>
  </div>
  <div id="M_PC_sidebar">
   <div id="M_PC_sidebar_container"> 
    <div class="biu-options"> 
     <div class="biu-download sidebar-btn sidebar-link">
       下载
      <span class="sidebar-text-vertical">APP</span> 
      <div class="sidebar-qrcode"> 
       <img src="<?php echo e(asset('/home/images/7e_0h22fa0g03cgl0c5676cb6k2ii71h_140x140.png')); ?>" alt="美丽说 App 二维码" />
      </div> 
     </div> 
     <div class="biu-cart sidebar-btn"> 
      <a href="http://cart.meilishuo.com/mls/cart/mycart" target="_top" data-keyword="购物车" class="sidebar-link"><span class="cart-num biu-cart-num sidebar-num"></span>购物车</a> 
     </div> 
     <div class="biu-service sidebar-btn"> 
      <a class="biu-open-im sidebar-link" data-keyword="消息"><span class="service-num biu-service-num sidebar-num"></span>消息</a> 
     </div> 
     <div class="biu-coupon sidebar-btn"> 
      <a href="http://www.meilishuo.com/user/login" target="_top" class="sidebar-link" data-keyword="优惠券"><span class="coupon-num biu-coupon-num sidebar-num"></span>优惠券</a> 
     </div> 
     <div class="biu-mark sidebar-btn"> 
      <a href="http://www.meilishuo.com/user/login" target="_top" class="sidebar-link" data-keyword="收藏">收藏</a>
     </div> 
     <div class="biu-footprint sidebar-btn"> 
      <a href="http://www.meilishuo.com/user/login" target="_top" class="sidebar-link" data-keyword="足迹">足迹</a> 
     </div> 
    </div> 
    <div class="biu-go2top js-sidebar-gotop"> 
    </div>
   </div>
  </div>  
 </body>
 <script src="<?php echo e(asset('/Home/js/jquery.js')); ?>"></script>
 <script>
  // var CUSER = false;//检测用户名
  var CPASS = false;//检测密码
  var CPHONE = false;//检测手机号
  var CUSER = false;
  //绑定获得焦点事件
    $('input[name=name]').focus(function(){
      //修改input元素的边框
      $(this).removeClass().addClass('active');
      //修改该元素之后的span标签的文本以及颜色
      $(this).next().html('请输入4~10位的字母数字下划线').removeClass().addClass('span-active');
    });


  //丧失焦点事件
    $('input[name=name]').blur(function(){
      //获取用户的输入值
      var v = $(this).val();
      //检测用户输入值
      // 声明正则
      var reg = /^\w{4,10}$/;
      var res = reg.test(v);
      if(!res) {
        //错误提醒
        $(this).removeClass().addClass('error');
        $(this).next().html('格式错误').removeClass().addClass('span-error');
        CUSER = false;
      }else{
        
            input.removeClass();
            input.next().html('√').removeClass().addClass('span-success');
            CUSER = true;
            
          }

        
      }
    });

  $('input[name=pass]').focus(function(){
      //修改input元素的边框
      $(this).removeClass().addClass('active');
      //修改该元素之后的span标签的文本以及颜色
      $(this).next().html('请输入8~20位非空白字符').removeClass().addClass('span-active');
    });

    $('input[name=pass]').blur(function(){
      //获取元素的值
      var v = $(this).val();
      //声明正则
      var reg = /^\S{8,20}$/;
      //检测
      var res = reg.test(v);
      if(!res) {
        error($(this), '密码格式不正确');
        CPASS = false;
      }else{
        success($(this));
        CPASS = true;
      }

    });

    $('input[name=tel]').focus(function(){
      remind($(this), '请输入您的手机号');
    }).blur(function(){
      //获取输入的值
      var v = $(this).val();
      //声明正则
      var reg = /^1\d{10}$/;
      //检测
      var res = reg.test(v);
      //判断
      if(!res) {
        error($(this), '手机号格式不正确');
        CPHONE = false;
      }else{
        success($(this));
        CPHONE = true;
      }
    });


    function remind(input, content) {
      //修改input元素的边框
      input.removeClass().addClass('active');
      //修改该元素之后的span标签的文本以及颜色
      input.next().html(content).removeClass().addClass('span-active');
    }

    function error(input, content) {
      input.removeClass().addClass('error');
      input.next().html(content).removeClass().addClass('span-error');
    }

    function success(input) {
      input.removeClass();
      input.next().html('√').removeClass().addClass('span-success');
    }

  //表单的提交事件
    $('form').submit(function(){
      //触发元素的丧失焦点事件
      $('input').trigger('blur');

      // console.log(CUSER);
      //判断
      if(CUSER && CPASS  && CPHONE) {
        return true;
      }

      return false;
    });


 </script>
</html>