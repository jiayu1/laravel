//# sourceMappingURL=index.js.map

require(["base/MoGu"],function(MoGu){function _switchStatus(e,o){switch(e.model){case"关注":collectPost.addfollow(e.userId,o);break;case"领现金券":collectPost.getCashCoupon(e.proId,o);break;case"领券":collectPost.getShopCoupon(e.proId,e.shopId||"",o);break;case"收藏":collectPost.collectShop(e.shopId,o);break;case"锚点":var t=e.floor,r=$(".mod_row").eq(t).offset().top;$(window,document).scrollTop(r),lock=!0}}var lock=!0,index=0,parentDom;$("a.anchor").each(function(index,item){var $self=$(item),_href=decodeURIComponent($self.attr("href")).replace(" ","");if(_href&&/{([,]*\w*\:(\w|[\u4e00-\u9fa5])*)*}/.test(_href)){var _arr=_href.match(/(\w|[\u4e00-\u9fa5])+(?=[,|}])/g),temp=0,matchArr=[];if(_arr&&"object"==typeof _arr&&_arr.length){for(;temp<_arr.length;temp++){var storeStr=_arr[temp];_href=_href.replace(storeStr,'"'+storeStr+'"')}matchArr=_href.match(/{([,]*\w*\:['"]+(\w|[\u4e00-\u9fa5])*['" ]+)*}/);var _json=eval("("+matchArr[0]+")");switch(_json.model){case"领现金券":var scriptDom=document.createElement("script");scriptDom.src="http://www.mogujie.com/Anquan_Ncp/scriptzero?id=singlebanner",document.body.appendChild(scriptDom)}}}}),$(".mod_row").on("click","a.anchor",function(ev){var $self=$(this),_href=decodeURIComponent($self.attr("href")).replace(" ","");if(parentDom=$self.parents(".module_row"),_href&&/{([,]*\w*\:(\w|[\u4e00-\u9fa5])*)*}/.test(_href)&&!$(ev.target).hasClass("anchor_del")){if(!lock)return!1;lock=!1;var _arr=_href.match(/(\w|[\u4e00-\u9fa5])+(?=[,|}])/g),temp=0,matchArr=[];if(_arr&&"object"==typeof _arr&&_arr.length){for(;temp<_arr.length;temp++){var storeStr=_arr[temp];_href=_href.replace(storeStr,'"'+storeStr+'"')}matchArr=_href.match(/{([,]*\w*\:['"]+(\w|[\u4e00-\u9fa5])*['" ]+)*}/);var _json=eval("("+matchArr[0]+")");return _switchStatus(_json,ev),!1}return lock=!0,!0}return lock=!0,!0});var collectPost={getCashCoupon:function(e,o){var t=window._f_pa?window._f_pa(o):"",r=window._v_pa,a="http://promotion.mogujie.com/jsonp";$.ajax({url:a+"/getPlatformCoupon/1",data:{campId:e,_mgjuuid:MoGu&&MoGu.util&&MoGu.util.getCookie("__mgjuuid"),domain:8,platform:"pc",_a:t,_b:r},type:"GET",dataType:"jsonp"}).then(function(e){var o="";if(e&&e.success&&"SUCCESS"==e.returnCode&&e.data){e.data;o="成功领取"}else if(e&&"SESSION_INVALID"==e.returnCode){var t="http://portal.mogujie.com/user/login?redirect_url="+encodeURIComponent(window.location.href);window.location.href=t,lock=!0}else o=e.message;o&&($.alert(o),lock=!0)})},getShopCoupon:function(e,o,t){var r="http://promotion.mogujie.com/jsonp";$.ajax({url:r+"/getShopCoupon/1",data:{campId:e,shopId:o},type:"GET",dataType:"jsonp"}).then(function(e){var o="";if(e&&e.success&&"SUCCESS"==e.returnCode&&e.data){e.data;o="成功领取"}else if(e&&"SESSION_INVALID"==e.returnCode){var t="http://portal.mogujie.com/user/login?redirect_url="+encodeURIComponent(window.location.href);window.location.href=t,lock=!0}else o=e.message;o&&($.alert(o),lock=!0)})},addfollow:function(e){$.ajax({url:"http://www.mogujie.com/x6/follow/addfollow",data:{uid:e},type:"GET",dataType:"jsonp"}).then(function(e){var o="";switch(e.status.code){case 1001:o="关注成功";break;case 1002:case 1022:lock=!0;var t="http://portal.mogujie.com/user/login?redirect_url="+encodeURIComponent(window.location.href);window.location.href=t;break;case 1003:case 1032:o="关注失败";break;case 1004:o="已关注";break;case 1005:o="操作频繁，请稍后尝试";break;case 4004:o=e.status.msg;break;default:o=e.status.msg}o&&$.alert(o,function(){lock=!0})})},collectShop:function(e){$.ajax({url:"http://www.mogujie.com/x6/shop/"+e+"/collectShop",data:{isCollected:1,noCancel:1},type:"GET",dataType:"jsonp"}).then(function(e){var o="";switch(e.status.code){case 1001:o="收藏成功";break;case 1002:case 1022:lock=!0;var t="http://portal.mogujie.com/user/login?redirect_url="+encodeURIComponent(window.location.href);window.location.href=t;break;case 1003:case 1032:o="收藏失败";break;case 1004:o="已收藏";break;case 1005:o="操作频繁，请稍后尝试";break;case 4004:o=e.status.msg;break;default:o=e.status.msg}o&&$.alert(o,function(){lock=!0})})}}});
//# sourceMappingURL=index.js.map

require(["base/MoGu"],function(a){$(document).ready(function(){var a=$(".MCUBE_MOD_ID_131210"),e=$(window),t=a.find(".nav_wrap"),i=a.offset().top-47,o=t.outerHeight();a.height(o);$(".nav_item.active");t.on("click",".nav_item",function(){var a=$(this),e=a.data("category");a.hasClass("active")||(a.addClass("active").siblings().removeClass("active"),$(document).trigger("waterfall_repaint",{data:{category:e}}),window.scrollTo(0,i+42))}),window._updateNavHeight=function(){i=$(".MCUBE_MOD_ID_131210").offset().top-47},e.on("scroll",function(){window._updateNavHeight();var a=e.scrollTop();a>i?t.addClass("nav_fixed"):t.removeClass("nav_fixed")})})});
//# sourceMappingURL=index.js.map

define("MCUBE_MOD_ID_129804:wall-item.tpl",[],function(){return'	{{?it.v}}	\n		<div class="item-wrap">\n			<a class="item-goods" href="{{= it.v.link}}">\n				<div class="lazy-load-img img-box">\n					<img src="{{= it.v.image}}">\n					<span class="mark"></span>\n				</div>\n\n				<div class="sale-info">\n					<div class="title">{{= it.v.title }}</div>\n					<div class="price-box">\n						<span class="price">￥{{= it.v.discountPrice }}</span>\n						<span class="orgin-price">￥{{= it.v.price}}</span>\n						<span class="discount">{{= it.v.discount }}折</span>\n					</div>\n					<div class="timedown-box">\n						<span class="time" data-endtime="{{= it.v.endTime}}">剩余-天-小时-分</span>\n						<span class="person"><i>{{= it.v.sale }}</i>人已参加</span>\n					</div>\n				</div>\n			</a>\n		</div>\n	{{?}}'}),require(["components/waterfall","MCUBE_MOD_ID_129804:wall-item.tpl"],function(a,n){var t,i=$(".MCUBE_MOD_ID_129804"),e=i.find(".category").val(),l={};initFunc=function(n){waterfall=a.init({el:$(".wall-wrap"),wrapEl:$(".module-wrap").length?$(".module-wrap"):$(window),tmpl:n.itemTpl,url:n.url,data:n.data,dataFilter:function(a){return t=a.result.eventwall.nowTime,console.log(t),a.result.eventwall.list},colNum:5,colGap:"0 0",onFetchSuccess:function(){waterfall.getParam("rawData").result.eventwall.isEnd&&waterfall.lock()},onLayoutFinished:function(){MoGu&&MoGu.dynamicImage&&MoGu.dynamicImage.checkImages(),$(".time").each(function(a){var n=$(this),i=parseInt(n.data("endtime")-t);d=parseInt(i/86400),h=parseInt(i/3600%24),m=parseInt(i/60%60),n.html("剩余"+d+"天"+(h<10?"0"+h:h)+"小时"+(m<10?"0"+m:m)+"分")})}}).start()},l={url:"http://t.meilishuo.com/tuanItem?bizKey=eventwall&day=0&tCatIds=1&sortName=tuanSort",data:{category:e},itemTpl:n},initFunc(l),$(document).on("waterfall_repaint",function(a,n){l=$.extend(l,n),$(".wall-wrap").html(""),waterfall&&waterfall.destroy(),initFunc(l)})});
//# sourceMappingURL=index.js.map
