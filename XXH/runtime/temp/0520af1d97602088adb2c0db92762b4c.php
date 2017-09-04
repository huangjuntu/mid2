<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/home/wwwroot/website/dev/apps/welfare/view/index/order_details.html";i:1504168500;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0" />
		<title>兑换信息 - 四达上海</title>
		<style>
            /*全局公共样式*/input,button,select,textarea{outline: none;}
            *{padding: 0px;margin: 0px;}
            form,select,input,img{border: 0;margin: 0px;padding: 0px;vertical-align: middle;width: 100%;}
            li{list-style: none;}
            a{text-decoration: none;}
            body,html{height: auto;margin: 0 auto;min-width: 20rem;max-width: 35rem;}
            
            /*文中局部公共样式*/
            .i_strong{font-weight: bold;}
            
            /*banner的背景*/
            #content{width: auto;height: 100%;margin: 0 auto;padding: 0 1rem;}
            .banner_bg{background: url(__PUBLIC__/img/banner_top.jpg);height: 14rem;background-size: 100% 100%;width: 100%;margin-bottom: 1rem;}
            
            /*标题样式*/
            .title_ti2{width: 100%;height: 6rem;background: pink;margin: 0rem auto;background: url(__PUBLIC__/img/title_bg.png) no-repeat;background-size: 100% 100%;}
            .title_ti2 span{color: #FFFFFF;font-size: 0.92rem;display: block;margin: 0 auto;height: 6rem;line-height: 6rem;text-align: center;}
            
            .text_intro{background: rgb(241, 241, 241) url(__PUBLIC__/img/quot.jpg) no-repeat 1% 0.31rem;color: #6C6B6B;margin: 10px 0px;padding: 0.93rem 1.25rem 0.93rem 2.81rem;font-size: 0.87rem;line-height: 1.39rem;outline: 0px;border: 0px currentcolor;vertical-align: baseline;}
            
            
            /*兑换信息表格*/
           /* Border styles */
          	#table-1{padding: 1rem;text-align: center;width: 100%;margin: 0 auto;border: 4px solid #FCB42B;border-radius: 1.75rem;overflow: hidden;font-size: 14px;color: #6C6B6B;margin: 2rem 0 4rem 0;}
			#table-1 thead{margin-bottom: 1rem;background: #FFF !important;}
			#table-1 td{padding: 7px 10px;overflow: hidden;text-overflow: ellipsis;overflow: hidden;}
			#table-1 th{padding: 10px 0;}
			#table-1 tbody tr:nth-child(even){background: #FFF;}
			#table-1 tbody tr:nth-child(odd){background: rgb(235, 242, 224);}
		</style>
	</head>

	<body id="body">
		<div class="banner_bg"></div>
		<div id="content">
			<!--产品标题-->
			<div class="title_ti2" style="cursor:pointer;" onclick="javascript:window.location.href = '__URL__/product/id/<?php echo $product['product_id']; ?>.html';">
				<span><?php echo $product['title']; ?></span>
			</div>

			<!--品鉴记录与规格-->
			<div id="panel1" class="panel"></div>
			<div class="text_intro">
				<span class="i_strong">【品鉴记录】</span><br />
				<span><?php echo $product['abstract']; ?></span>
			</div>
			
			<!--兑换信息表格-->
			<table id="table-1">
				<thead>
					<th colspan="2"><h2>兑换成功</h2></th>
				</thead>
				<tbody>
					<tr>
						<td style="width: 30%;">您的姓名:</td>
						<td style="width: 70%;"><?php echo $order['realname']; ?></td>
					</tr>
					<tr>
						<td>手机号码:</td>
						<td><?php echo $order['mobile']; ?></td>
					</tr>
					<tr>
						<td>电子邮箱:</td>
						<td><?php echo $order['email']; ?></td>
					</tr>
					<tr>
						<td>收件地址:</td>
						<td><?php echo $order['address']; ?></td>
					</tr>
					<tr>
						<td>备　　注:</td>
						<td><?php echo $order['remark']; ?></td>
					</tr>
                    <?php if(empty($order['express']) || (($order['express'] instanceof \think\Collection || $order['express'] instanceof \think\Paginator ) && $order['express']->isEmpty())): ?>
                    <tr>
                        <td colspan="2">尚无物流信息！</td>
                    </tr>
                    <?php else: ?>
                    <tr>
                        <td>快递公司:</td>
                        <td><?php echo $order['express']; ?></td>
                    </tr>
                    <tr>
                        <td>快递单号:</td>
                        <td><?php echo $order['express_number']; ?></td>
                    </tr>
                    <?php endif; ?>
				</tbody>
			</table>
	</body>

</html>