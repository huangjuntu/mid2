<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"/home/wwwroot/website/dev/apps/welfare/view/index/products.html";i:1504247896;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>礼品列表 - 四达上海</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0" />
		<style>
		
		/*全局公共样式*/
		input,button,select,textarea{outline: none;}
		*{padding: 0px;margin: 0px;}
		form,select,input,img{border: 0;margin: 0px;padding: 0px;vertical-align: middle;width: 100%;}
		li{list-style: none;}
		a{text-decoration: none;}
		body,html{height: auto;margin: 0 auto;min-width: 20rem;max-width: 35rem;}
		
		/*banner的背景*/
		#content{width: auto;height: 100%;margin: 0 auto;padding: 0 1rem;}
		.banner_bg{background: url(__PUBLIC__/img/banner_top.jpg);height: 14rem;background-size: 100% 100%;width: 100%;margin-bottom: 1rem;}
		
		/*图片样式*/
		.img_mo{position: relative;float: left;margin:0 1% 1rem 1%;width: 48%;height: 13rem;background: url(__PUBLIC__/img/line_bg.png) repeat;padding-bottom: 0.5rem;box-shadow: 0px 0px 0.31rem #333;}
		.img_mo_pg{width: 100%;height: 8rem;}
		.img_mo_pg img{width: 100%;height: 100%;}
		.mo_bottom{width: 100%;margin-top: 0.2rem;display: block;z-index: 999;text-align: center;background-color: rgba(254,254,254,0.2);}
		.mo_bottom .one{color:#6e6e6e;font-size:0.87rem;font-weight: bold;margin-top: 0.2rem;padding: 0.2rem 0.8rem;box-sizing: border-box;display: block;}
		.mo_bottom .two{color:#6e6e6e;font-size:0.62rem}
		.mo_bottom .three{display: block;height: 1.87rem;line-height: 1.87rem;font-size: 0.87rem;background-color: #c5ae7a;border-radius: 0.31rem;position: absolute;bottom: 0rem;width: 86%;margin: 0 7% 0.5rem 7%;text-align: center;}
		.mo_bottom .three a{color: #fff;display: block;}
		
		</style>
	</head>

	<body>
		<div class="banner_bg"></div>
		<div id="content">
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product): $mod = ($i % 2 );++$i;?>
			<div class="img_mo">
				<div class="img_mo_pg"><img src="__PUBLIC__/img/0/a_<?php echo $product['product_id']; ?>.jpg" /></div>
				<div class="mo_bottom">
					<span class="one"><?php echo $product['title']; ?></span>
					<span class="three"><a href="__URL__/product/id/<?php echo $product['product_id']; ?>.html">查看详情</a></span>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<div style="clear: both;"></div>
		</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script>
			var divArr = document.getElementsByClassName("one");	
			var cnt = divArr.length;	
			var temph=0;		
			for(var i=0;i<cnt;i++){			
				var oneh=new Array();			
				oneh[i]=$(".one").eq(i).height();						
				if(oneh[i]>temph){				
					temph=oneh[i];			
				}else{				
						
					}		
			}										
			for(var i=0;i<cnt;i++){					
				if($(".one").eq(i).height()<temph){				
					$(".one").eq(i).css("height",temph);				
					$(".one").eq(i).css("line-height",temph+"px");			
				} 		
			}
		</script>
	</body>

</html>