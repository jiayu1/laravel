<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0 ,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>结算页面</title>

		<link href="<?php echo e(asset('weilai/AmazeUI-2.4.2/assets/css/amazeui.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('weilai/basic/css/demo.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('weilai/css/cartstyle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('weilai/css/jsstyle.css')); ?>" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="<?php echo e(asset('weilai/js/address.js')); ?>"></script>
	</head>
	<body>
		<!--顶部导航条-->
		<div class="am-container header">
			<ul class="message-l">
				<div class="topMessage">
					<div class="menu-hd">
						<a href="#" target="_top" class="h">亲，请登录</a>
						<a href="#" target="_top">免费注册</a>
					</div>
				</div>
			</ul>
			<ul class="message-r">
				<div class="topMessage home">
					<div class="menu-hd"><a href="#" target="_top" class="h">商城首页</a></div>
				</div>
				<div class="topMessage my-shangcheng">
					<div class="menu-hd MyShangcheng"><a href="#" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
				</div>
				<div class="topMessage mini-cart">
					<div class="menu-hd"><a id="mc-menu-hd" href="#" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
				</div>
				<div class="topMessage favorite">
					<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
			</ul>
			</div>

			<!--悬浮搜索框-->
			<div class="nav white">
				<div class="logo"><img src="../images/logo.png" /></div>
				<div class="logoBig">
					<li><img src="" /></li>
				</div>
				<div class="search-bar pr">
					<a name="index_none_header_sysc" href="#"></a>
					<form>
						<input id="searchInput" name="index_none_header_sysc" type="hidden" placeholder="" autocomplete="off">
						<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
					</form>
				</div>
			</div>
			<div class="clear"></div>
			<form action="/home/dolick" method="post" name='myform'>
                 <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('DELETE')); ?>

             </form>

			<div class="concent">
				<!--地址-->
				<div class="paycont">
					<div class="address">
						<h3>确认收货地址 </h3>
						<div class="control">
							<a href="#" id="jiayu" class="tc-btn createAddr theme-login am-btn am-btn-danger">使用新地址</a>
						</div>
						<div class="clear"></div>
						<ul id="addresslist">
							<div class="per-border"></div>
							
							
								<span style="display:none" id="session"><?php echo e(session('homeuser')->id); ?></span>
							<div class="per-border"></div>
							 <script type="text/javascript" src="<?php echo e(asset('Home/js/jquery-1.8.3.min.js')); ?>"></script>
								  <script type="text/javascript">
								  var uid = $('#session').html();
								    $.ajax({
								    	url:'/home/qingqiu',
								    	type:'get',
								    	async:'true',
								    	data:{'pid':uid},
								    	dataType:'json',
								    	success:function(data)
								    	{
                                           // console.log(data);

                                           // for(var i=0; i<data.length; i++){
                                           //    var newLi = $('li[info="showaddress"]').clone(true);

                                           // 		newLi.attr('id',$(this).Address_id).css('display','block');

                                           // 		$('#addresslist').append(newLi);
                                           // }


                                           $(data).each(function(){

                                           		// console.log(data.Address_id.value);
                                           		var newLi = $('.clear').next('li').clone(true);
                                           		newLi.attr('id',$(this).attr('Address_id')).css('display','block');
                                           		newLi.find('div:eq(0)').find('div:eq(0)').find('p:first').find('span').html($(this).attr('ad_name'));
                                           		newLi.find('div:eq(0)').find('div:eq(0)').find('p:last').find('span').html($(this).attr('phone'));
                                           		newLi.find('div:eq(0)').find('div:eq(1)').find('span:eq(1)').html($(this).attr('provice'));
                                           		newLi.find('div:eq(0)').find('div:eq(1)').find('span:eq(2)').html($(this).attr('city'));
                                           		newLi.find('div:eq(0)').find('div:eq(1)').find('span:eq(3)').html($(this).attr('county'));
                                           		newLi.find('div:eq(0)').find('div:eq(1)').find('span:eq(4)').html($(this).attr('detail'));
                                           		

                                           		$('#addresslist').append(newLi);

                                           	});
								    	},
								    	error:function()
								    	{
								    		alert('ajax请求失败');
								    	}

								    })

								  </script>
						</ul>
						<div class="clear"></div>
					</div>
					<!--物流-->
					<div class="logistics">
						<h3>选择物流方式</h3>
						<ul class="op_express_delivery_hot">
							<li data-value="yuantong" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -468px"></i>圆通<span></span></li>
							<li data-value="shentong" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -1008px"></i>申通<span></span></li>
							<li data-value="yunda" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -576px"></i>韵达<span></span></li>
							<li data-value="zhongtong" class="OP_LOG_BTN op_express_delivery_hot_last "><i class="c-gap-right" style="background-position:0px -324px"></i>中通<span></span></li>
							<li data-value="shunfeng" class="OP_LOG_BTN  op_express_delivery_hot_bottom"><i class="c-gap-right" style="background-position:0px -180px"></i>顺丰<span></span></li>
						</ul>
					</div>
					<div class="clear"></div>

					<!--支付方式-->
					<div class="logistics">
						<h3>选择支付方式</h3>
						<ul class="pay-list">
							<li class="pay card"><img src="<?php echo e(asset('weilai/images/wangyin.jpg')); ?>" />银联<span></span></li>
							<li class="pay qq"><img src="<?php echo e(asset('weilai/images/weizhifu.jpg')); ?>" />微信<span></span></li>
							<li class="pay taobao"><img src="<?php echo e(asset('weilai/images/zhifubao.jpg')); ?>" />支付宝<span></span></li>
						</ul>
					</div>
					<div class="clear"></div>

					<!--订单-->
					<div class="concent">
						<div id="payTable">
							<h3>确认订单信息</h3>
							<div class="cart-table-th">
								<div class="wp">
									<div class="th th-item">
										<div class="td-inner">商品信息</div>
									</div>
									<div class="th th-price">
										<div class="td-inner">单价</div>
									</div>
									<div class="th th-amount">
										<div class="td-inner">数量</div>
									</div>
									<div class="th th-sum">
										<div class="td-inner">金额</div>
									</div>
									<div class="th th-oplist">
										<div class="td-inner">配送方式</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
							<tr class="item-list">
								<div class="bundle  bundle-last">	
							</tr>
							<div class="clear"></div>
							</div>
							<tr id="J_BundleList_s_1911116345_1" class="item-list">
								<div id="J_Bundle_s_1911116345_1_0" class="bundle  bundle-last">
								  <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="bundle-main">
										<ul class="item-content clearfix">
											<div class="pay-phone">
												<li class="td td-item">
													<div class="item-pic">
														<a href="#" class="">
															<img src="/Admin/upload/<?php echo e($v->pic); ?> " width='78' height='78' class=""></a>
															 <!-- itempic J_ItemImg -->
													</div>
													<div class="item-info">
														<div class="item-basic-info">
															<a href="#" target="_blank" title="<?php echo e($v->name); ?>" class="item-title J_MakePoint" data-point="tbcart.8.11"><?php echo e($v->name); ?></a>
														</div>
													</div>
												</li>
												<li class="td td-info">
													<div class="item-props">
														<span class="sku-line">颜色：10#蜜橘色+17#樱花粉</span>
														<span class="sku-line">包装：两支手袋装（送彩带）</span>
													</div>
												</li>
												<li class="td td-price">
													<div class="item-price price-promo-promo">
														<div class="price-content">
															<em class="J_Price price-now" id="ddd"><?php echo e($v->price); ?></em>
														</div>
													</div>
												</li>
											</div>

											<li class="td td-amount">
												<div class="amount-wrapper ">
													<div class="item-amount ">
														<span class="phone-title">购买数量</span>
														<div class="sl">
															<input class="min am-btn" name="" type="button" value="-" />
															<input class="text_box" name="" type="text" value="" style="width:30px;" />
															<input class="add am-btn" name="" type="button" value="+" />
														</div>
													</div>
												</div>
											</li>
											<li class="td td-sum">
												<div class="td-inner">
													<em tabindex="0" class="J_ItemSum number" id="ch">117.00</em>
												</div>
											</li>
											<li class="td td-oplist">
												<div class="td-inner">
													<span class="phone-title">配送方式</span>
													<div class="pay-logis">
														包邮
													</div>
												</div>
											</li>
										</ul>
										<div class="clear"></div>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<script type="text/javascript" src="<?php echo e(asset('Home/js/jquery-1.8.3.min.js')); ?>"></script>
								  <script type="text/javascript">
								   // $(".min am-btn").click(function(){
								   	  var ab = $("#ddd").html() * $(".text_box").val() ;

								   	  var cs = parseInt($("#ch").html(ab,attr());
								   	  // var ca = $(".text_box").val();
								   	   console.log(cs);

								   // })
								    // console.log(ab);

								  </script>

							</tr>
							</div>
							<div class="clear"></div>
							<div class="pay-total">
							<!--含运费小计-->
							<div class="buy-point-discharge ">
								<p class="price g_price ">
									合计（含运费） <span>¥</span><em class="pay-sum">244.00</em>
								</p>
								<a class="cart_surebtn fr" href="javascript:;">确认并付款 ></a>
							</div>		
						</div>

						<div class="clear"></div>
					</div>
				</div>
				<div class="footer">
					<div class="footer-hd">
						<p>
							<a href="#">关于我们</a>
							<b>|</b>
							<a href="#">商城首页</a>
							<b>|</b>
							<a href="#">支付宝</a>
							<b>|</b>
							<a href="#">物流</a>
						</p>
					</div>
				</div>
			</div>
			<div class="theme-popover-mask"></div>
			<div class="theme-popover">

				<!--标题-->
				<div class="am-cf am-padding">
					<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">新增地址</strong> / <small>Add address</small></div>
				</div>
				<hr/>

				<div class="am-u-md-12">
					<form action="/home/address" method="post" class="am-form am-form-horizontal">
                        <?php echo e(csrf_field()); ?>

						<div class="am-form-group">
							<label for="user-name" class="am-form-label">收货人</label>
							<div class="am-form-content">
								<input type="text" id="user-name" placeholder="收货人" name="ad_name">
							</div>
						</div>
    <!-- for="user-phone -->
						<div class="am-form-group">
							<label  class="am-form-label">手机号码</label>
							<div class="am-form-content">
								<input id="user-phone" placeholder="手机号必填" type="email" name="phone">
							</div>
						</div>

						<div class="am-form-group">
							<label for="user-phone" class="am-form-label">所在地</label>
						<!-- <form action='' method='post'> -->
							<div class="am-form-content address">
								<select data-am-selected id='cid' name="city1[]">
									<option>--请选择--</option>
								</select>
							</div>
						 <!-- </form> -->
						 <script type="text/javascript" src="<?php echo e(asset('Home/js/jquery-1.8.3.min.js')); ?>"></script>
						 <script type="text/javascript">
						 $('#jiayu').click(function(){

						   $.ajax({
									url:'/home/province',
									type:'get',
									async:true,
									data:{'upid':0},
									dataType:'json',
									success:function(data)
									{
								
										console.log(data);
										//遍历从数据库查出来的数据，生成option选项追加到select里
										for (var i = 0; i < data.length; i++) {
											$('#cid').append("<option value="+data[i].id+">"+data[i].name+"</option>");
										};
									},
									error:function(XMLHttpRequest, textStatus, errorThrown)
									{
										alert(textStatus);
									}
								});
						    //给所有的select标签绑定change事件
							$('select').live("change",function(){
								//干掉当前你选择的select标签后面的select标签
								$(this).nextAll('select').remove();
								//判断你选择是不是--请选择--
								if($(this).val() != '--请选择--'){
									//因为在ajax的回调函数中需要使用当前对象，但是$(this)在ajax的回调函数中用不了
									var ob = $(this);
									$.ajax({
										url:'/home/county',
										type:'get',
										async:true,
										data:{upid:$(this).val()},
										dataType:'json',
										success:function(data)
										{
											// alert(data);
											// console.log(data);
											//判断是不是最后一级城市，最后一级城市查数据库length==0
											if(data.length>0){
												//生成一个新的select标签
												var select = $("<select name='city1[]'><option>--请选择--</option></select>");
												//遍历从数据库查出来的数据，生成option选项追加到select里
												for (var i = 0; i < data.length; i++) {
													$(select).append("<option value="+data[i].id+">"+data[i].name+"</option>");
												};
												//外部插入到前一个select后面
												ob.after(select);
											}
										},
										error:function()
										{
											alert('ajax请求失败');
										}
									});
								}
							});
						});
						 </script>	
						</div>

						<div class="am-form-group">
							<label for="user-intro" class="am-form-label">详细地址</label>
							<div class="am-form-content">
								<textarea class="" rows="3" id="user-intro" placeholder="输入详细地址" name="detail"></textarea>
								<small>100字以内写出你的详细地址...</small>
							</div>
						</div>

						<div class="am-form-group theme-poptit">
							<div class="am-u-sm-9 am-u-sm-push-3">
								<input type="submit" class="am-btn am-btn-danger" value="保存">
								<div class="am-btn am-btn-danger close">取消</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="clear"></div>
		

			<li class="user-addresslist" id=""  style="display:none" info="showaddress">

				<div class="address-left">
					<div class="user DefaultAddr">
							<p>收货人:<span></span></p>
							<p>电话:<span></span></p>	
					</div>
					<div class="default-address DefaultAddr">
						<span class="buy-line-title buy-line-title-type">收货地址：</span>
					
					   		<span class="province"></span>
							<span class="city"></span>
							<span class="dist"></span>
							<span class="street"></span>
														
					</div>
				</div>
				<div class="address-right">
					<a href="../person/address.html">
						<span class="am-icon-angle-right am-icon-lg"></span></a>
				</div>
				<div class="clear"></div>

				<div class="new-addr-btn">
					<a href="#" class="hidden">设为默认</a>
					<span class="new-addr-bar hidden">|</span>
					<a href="#">编辑</a>
					<span class="new-addr-bar">|</span>
					<a href="javascript:doDel(<?php echo e(session('homeuser')->id); ?>)" onclick="delClick(this);">删除</a>
					  <!-- <a href="javascript:doDel(<?php echo e(session('homeuser')->id); ?>)">删除</a> -->
				</div>
				
			</li>
	</body>
	<script>
	  function doDel(id){
        if(confirm('你确定要删除吗? ')){
          var form = document.myform;
             form.action = '/home/dolick/'+id;
             form.submit();

        }
       }
	</script>
	 
	
</html>