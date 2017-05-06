<!DOCTYPE html>
<!--[if IE 7]>
  <html class="ie7 lt-ie10">
  <![endif]-->
  <!--[if IE 8]>
    <html class="ie8 lt-ie10">
    <![endif]-->
    <!--[if IE 9]>
      <html class="ie9 lt-ie10">
      <![endif]-->
      <!--[if gt IE 9]>
        <!-->
        <html>
        <!--<![endif]-->
        
        <head>
        @section('head')
        @show

          <meta charset="utf-8" />
          <title>最新美丽说网购平台模板</title>
          <meta name="description" content="美丽说是白领女性时尚消费第一品牌，为超过1亿注册用户提供导购信息。建立300万全球女性时尚品牌商品库，超过1000家全球品牌达成官方合作导购体验，更好的满足白领女性的时尚消费需求。" />
          <meta name="keywords" content="美丽说,美丽说官网,美丽说首页,美丽说登录,导购,白领,女装,网购" />
          <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1" />
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <link rel="stylesheet" type="text/css" href="/homes/pc/css/base.css?1607170150.25" />
          <link rel="icon" href="/homes/pic/_o/75/6e/2f6871f198c0bd7615ffbf9a2f5f_49_48.c5.png" type="image/x-icon" />
          <link rel="stylesheet" type="text/css" href="/homes/pc/css/page/welcome.css?1607170150.25" />
          <script type="text/javascript" src="/homes/pc/jsmin/fml.js?1"></script>
       <link rel="stylesheet" type="text/css" href="{{ asset('/home/css/talk.css') }}">   
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="/bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>

          <script>fml.setOptions({
              'sversion': '1607170150.25',
              'defer': true,
              'modulebase': 'pc/jsmin/'
            });
            var Meilishuo = {
              "config": {
                "nt": "1yQyN1tU7ssTVQ5GeZ16w7IF/0VPJbAp1lO2BxZa52X2e4+pti0UtSulDoUBzzqn",
                "main_site_domain": "/",
                "server_url": "/",
                "picture_url": "#",
                "captcha_url": "#",
                "im_url": "http://imlab.meilishuo.com/",
                "forSale": false,
                "controller": "welcome",
                "isLogin": true,
                "userInfo": {
                  "name": "阿猫来了",
                  "uid": "11cnkktq",
                  "avatar": "new1/v1/bdefaultavatar/03.jpg"
                }
              }
            };</script>
            
        </head>

        
        <body>
          <div class="head">
            <div id="com-topbar">
              <div class="inner">
                <ul>
                  <li class="drop">
                    <a href="setPersonal.html" class="nick" target="_blank">
                      <img class="face" src="/homes/new1/v1/bdefaultavatar/03.jpg" />阿猫来了
                      <em class="arrow"></em></a>
                    <ul class="down account">
                      <li>
                        <a href="setPersonal.html" target="_blank">账号与安全</a></li>
                      <li>
                        <a href="#">退出</a></li>
                    </ul>
                  </li>
                  <li class="drop">
                    <a href="mylike.html" target="_blank">
                      <em class="collect"></em>我的收藏</a>
                    <ul class="down">
                      <li>
                        <a href="mylike.html" target="_blank">收藏宝贝</a></li>
                      <li>
                        <a href="mylikestore.html" target="_blank">收藏店铺</a></li>
                    </ul>
                  </li>
                  <li class="drop cart-wrapper">
                    <a target="_blank" href="mycart.html" class="my-cart">
                      <em class="cart"></em>我的购物车</a>
                    <div class="hidden">
                      <ul class="cart-goods"></ul>
                      <p class="cart-account">
                        <span>购物车里还有
                          <a class="num" href="mycart.html" target="_blank"></a>件商品</span>
                        <a class="check-cart" href="mycart.html" target="_blank">查看购物车</a></p>
                    </div>
                  </li>
                  <li>
                    <a href="orderlist.html" target="_blank">
                      <em class="order"></em>我的订单</a>
                  </li>
                  <li class="drop">
                    <a target="_blank">帮助中心
                      <em class="arrow"></em></a>
                    <ul class="down">
                      <li>
                        <a href="buyerService.html" target="_blank">买家服务</a></li>
                      <li>
                        <a href="#/help#/index" target="_blank">商家服务</a></li>
                      <li>
                        <a href="ruleCenter.html" target="_blank">规则中心</a></li>
                    </ul>
                  </li>
                  <li>
                    <a onclick="Chat()" target="_blank" class="last">联系商家</a></li>
                </ul>
              </div>
            </div>
            <div id="com-search">
              <div class="inner">
                <a href="index.html" class="logo">
                  <img src="http://d02.res.meilishuo.net/pic/_o/50/a7/735e2614e3911e621f0446e54597_204_52.c5.png" alt=""></a>
                <a href="" class="sublogo"></a>
                <div class="search">
                  <div class="search-tab">
                    <span class="active">宝贝</span>
                    </div>
                  <div class="search-box">
                    <input type="text" class="search-txt">
                    <span class="search-btn"></span>
                    <div class="suggest-box"></div>
                  </div>
                  <div class="hotword"></div>
                </div>
              </div>
            </div>
          </div>
          @section('content')
          
          @show
          <div id="com-foot">
            <div class="inner">
              <div class="flist">
                <h4>买家帮助</h4>
                <div>
                  <a href="noviceGuide.html" target="_blank">新手指南</a></div>
                <div>
                  <a href="serviceEnsure.html" target="_blank">服务保障</a></div>
                <div>
                  <a href="helpCommon.html" target="_blank">常见问题</a></div>
                <div>
                  <a href="shoppingHelp.html" target="_blank">购物帮助</a></div>
              </div>
              <div class="flist">
                <h4>友情链接</h4>
                @section('youqing')
                <div>
                  <a href="#/business" target="_blank">商家入驻</a>
                </div>
                <div>
                  <a href="#" target="_blank">商家后台</a>
                </div>
                <div>
                  <a href="#" target="_blank">商家推广</a>
                </div>
                @show
              </div>
              <div class="flist">
                <h4>关于我们</h4>
                <div>
                  <a href="aboutus.html" target="_blank">关于美丽说</a></div>
                <div>
                  <a href="contactus.html" target="_blank">联系我们</a></div>
              </div>
              <div class="flist aboutus">
                <h4>关注我们</h4>
                <div>
                  <a href="#" target="_blank">
                    <span class="i-sina"></span>新浪微博
                    <div class="follow">一键关注新浪微博
                      <wb:follow-button uid="1718455577" type="red_1" width="67" height="24"></wb:follow-button></div>
                  </a>
                </div>
                <div>
                  <a href="#" target="_blank">
                    <span class="i-qzone"></span>QQ空间</a>
                </div>
                <div>
                  <a href="#" target="_blank">
                    <span class="i-tencent"></span>腾讯微博</a>
                </div>
              </div>
              <div class="flist service">
                <h4>美丽说微信服务号</h4>
                <img class="qrcode" src="/homes/p2/160802/7e_61hjl8kjfjfagkg3cdaj05fghck9c_100x100.png" alt="美丽说服务号二维码" /></div>
              <div class="flist last" style="float:left;">
                <h4>美丽说客户端下载</h4>
                <p style="background:none; margin-top:0px;" class="client">
                  <img class="qrcode" src="/homes/p2/160802/7e_74j23d2a5f5j3bj31h70375gbeec1_100x100.png"></p>
              </div>
              <div class="record">Copyright ©2016 Meilishuo.com &nbsp;
                <a href="new1/v1/bmisc/518ea1bbd36948b90e658485d2700e62/181714310539.pdf" target="_blank">电信与信息服务业务经营许可证100798号</a>&nbsp;
                <a href="p1/160811/idid_ifrtszjqmmzdazrumezdambqhayde_2436x3500.jpg" target="_blank">经营性网站备案信息</a>&nbsp;
                <br />京ICP备11031139号&nbsp; 京公网安备110108006045&nbsp;&nbsp; 客服电话：4000-800-577&nbsp; 文明办网文明上网举报电话：010-82615762 &nbsp;
                <a href="http://net.china.com.cn/index.htm" target="_blank">违法不良信息举报中心</a></div>
            </div>
          </div>
          <p style="display: none" class="biu-login">11cnkktq</p>
          <div class="biu-sidebar">
            <div class="biu-options">
              <div class="biu-download">下载
                <span>APP</span>
                <div class="mls-qrcode">
                  <img src="/homes/p2/160802/7e_0h22fa0g03cgl0c5676cb6k2ii71h_140x140.png"></div>
              </div>
              <div class="biu-cart">
                <a href="mycart.html" target="_blank">
                  <span class="cart-num biu-cart-num"></span>购物车</a>
              </div>
              <div class="biu-service">
                <a id="xiaoxi">
                  <span id="xiaoxi"></span>消息</a>
              </div>
              <div class="biu-coupon">
                <a href="coupon.html#" target="_blank">
                  <span class="coupon-num biu-coupon-num"></span>优惠券</a>
              </div>
              <div class="biu-mark">
                <a href="mylike.html#" target="_blank">收藏</a></div>
              <div class="biu-footprint">
                <a href="footprint.html#" target="_blank">足迹</a></div>
            </div>
            <div class="biu-go2top"></div>
          </div>


<!-- 模态框开始 -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">消息</h4>
        </div>
        <div class="modal-body">
          <div style="height:500px;width:570px;border:solid 1px red">

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
          <button type="button" class="btn btn-primary">确定</button>
        </div>
      </div>
    </div>
  </div>
<!-- 模态框结束 -->
<!-- 客服在线聊天 -->
<div id="main" style="display: none;position: fixed;top:120px;left: 500px;z-index: 9999">
           
            <div id="right">
                <div id="content">
                    <h2 id="content-title">您好，美丽说客服竭诚为您服务</h2>
                    <hr />
                    <div id="show_msg">
                        
                    </div>
                </div>
                <div id="send">
                    <div id="control">
                    <form id="Formchat">
                    颜色：
                    <select name="color" id="color">
                        <option value="">请选择</option>
                        <option style="color:#FF8888" value="#FF8888">爱的暗示</option>
                        <option style="color:#00BBFF" value="#00BBFF">忧郁的蓝</option>
                        <option style="color:#0000FF" value="#0000FF">碧空蓝天</option>
                        <option style="color:#9F88FF" value="#9F88FF">灰蓝种族</option>
                        <option style="color:#000088" value="#000088 ">蔚蓝海洋</option>
                        <option style="color:#77FFEE" value="#77FFEE">清清之蓝</option>
                        <option style="color:#4400B3" value="#4400B3">发亮篮紫</option>
                        <option style="color:#A500CC" value="#A500CC">紫的拘谨</option>
                        <option style="color:#B088FF" value="#B088FF">卡其制服</option>
                        <option style="color:#D1BBFF" value="#D1BBFF">伦敦灰雾</option>
                        <option style="color:#DC143C" value="#DC143C">卡布其诺</option>
                        <option style="color:#A52A2A" value="#A52A2A">苦涩心红</option>
                        <option style="color:#FF0000" value="#FF0000">正宗喜红</option>
                        <option style="color:#990099" value="#990099">红的发紫</option>
                        <option style="color:#FF0000" value="#FF0000">红旗飘飘</option>
                        <option style="color:#D2691E" value="#D2691E ">黄金岁月</option>
                        <option style="color:#800080" value="#800080">紫金绣贴</option>
                        <option style="color:#006400" value="#006400">橄榄树绿</option>
                        <option style="color:#000000" value="#000000">绝对黑色</option> 
                    </select>
                   
                    <br />
                    <textarea id="msg" name="msg"></textarea><br/>
                    <input type="button" value="发送" onclick="sendmsg()" />
                    <input type="button" value="退出聊天" onclick="outchat()">
                    
                    </form>
                    </div>
                </div>
            </div>
        </div>
  <!-- 客服在线聊天 -->


          <script type="text/javascript" src="/homes/pc/jsmin/jquery.js?1.12.4"></script>
          <script type="text/javascript" src="/homes/__static/logger/0.1.8/logger.js"></script>
          <script src="/homes/__newtown/im_web/assets/common/openim/index.js"></script>
          <script src="/homes/pc/~page/welcome+base?1607170150.25"></script>
          <script>fml.use('page/welcome');;
            fml.use('base');;
            fml.iLoad();</script>
          
          <script type="text/javascript">
                function Chat(){
        $('#main').css('display','block');
        showmsg();
        inte = setInterval("showmsg()",2000);
    }

     //及时显示聊天内容
    //利用ajax每间隔2s就去服务器获得一次聊天信息
    var maxID = 0;
    function showmsg(){

         $.ajax({
                type:'GET',
                url:"{{url('/home/chat/showmsg')}}",
                data:{maxID:maxID},
                success:function(data)
                {

                    var s = "";
                    $(data).each(function(i,n){
                        if(n['sender']=='顾客'){
                            var speaker = '我';
                            s += "<p style='color:#417F4B'>"+speaker+"&nbsp;"+n['add_time']+"</p>";
                            s += "<p style='color:"+n['color']+"'>"+n['msg']+"</p>";
                        }else{
                            speaker = '美丽说客服';
                            s += "<p style='color:#0075B8'>"+speaker+"&nbsp;"+n['add_time']+"</p>";
                            s += "<p style='color:"+n['color']+"'>"+n['msg']+"</p>";
                        }
                        //把已经获得消息的最大id赋予给maxID
                        maxID = n['id'];
                    });

                    var showdiv = $('#show_msg');
                    var msg = showdiv.html();
                    var aa = msg + s;
                    showdiv.html(aa);

                    var show = $('#show_msg')[0];
                    show.scrollTop = show.scrollHeight;
                    //设置滚动条卷起高度
                    // showdiv.scrollTop = showdiv.scrollHeight;
                    
                },
                error:function()
                {
                    alert("服务器繁忙，请稍等");
                }

            });
        
    }
    

    function sendmsg(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
    var fm = $('#Formchat')[0];
    //FormData收集表单信息
    var fd = new FormData(fm);

    //ajax提交表单信息到服务器存储
    
                $.ajax({
                    type:'POST',
                    url:"{{url('/home/chat/sendmsg')}}",
                    data:fd,
                    processData: false,    //必须设置
                    contentType: false,
                    success:function(data){
                        if(data==0){
                           $('#color').val('');
                          $('#msg').val('');
                        }
                    },
                    error:function()
                    {
                        alert("发送失败,请重试");
                    }

                });
                    //必须设置
    }

    function outchat(){
        $('#main').css('display','none');
        clearInterval(inte);
    }

        var did = document.getElementById('main');
        var mw = 0;
        var mh = 0;
        var isDown = false;

        did.onmousedown = function(e)
        {
            isDown = true;
            var _mx = e.pageX;
            var _my = e.pageY;
            var ol = did.offsetLeft;
            var ot = did.offsetTop;

            mw = _mx - ol;
            mh = _my - ot;

            this.style.cursor = 'move';

        }

        window.onmousemove = function(e)
        {
            if(!isDown) return;
            var newmx = e.pageX;
            var newmy = e.pageY;

            dl = newmx - mw;
            dt = newmy - mh;

            did.style.left = dl + 'px';
            did.style.top = dt + 'px';
        }

        did.onmouseup = function()
        {
            isDown = false;
            did.style.cursor = 'default';
        }
          </script>
        </body>
        
        </html>