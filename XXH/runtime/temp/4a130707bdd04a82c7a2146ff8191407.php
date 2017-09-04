<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"/home/wwwroot/website/dev/apps/welfare/view/index/product.html";i:1504244650;}*/ ?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0" />
        <title><?php echo $product['title']; ?> - 四达上海</title>
        <style>
            /*全局公共样式*/input,button,select,textarea{outline: none;}
            *{padding: 0px;margin: 0px;}
            form,select,input,img{border: 0;margin: 0px;padding: 0px;vertical-align: middle;width: 100%;}
            li{list-style: none;}
            a{text-decoration: none;}
            body,html{height: auto;margin: 0 auto;min-width: 20rem;max-width: 35rem;}
            
            /*文中局部公共样式*/
            .i_strong{font-weight: bold; font-size: 1rem !important;}
            .bag_zq span{color: #6C6B6B;}
            .clear{clear: both}
            
            /*banner的背景*/
            #content{width: auto;height: 100%;margin: 0 auto;padding: 0 1rem;}
            .banner_bg{background: url(__PUBLIC__/img/banner_top.jpg);height: 14rem;background-size: 100% 100%;width: 100%;margin-bottom: 1rem;}
            
            /*标题样式*/
            .title_ti2{width: 100%;height: 6rem;background: pink;margin: 0rem auto;background: url(__PUBLIC__/img/title_bg.png) no-repeat;background-size: 100% 100%;}
            .title_ti2 span{font-weight: bold;color: #FFFFFF;font-size: 1rem;display: block;margin: 0 auto;height: 6rem;line-height: 6rem;text-align: center;}
            
            /*图片样式*/
			.img_bg{box-sizing: border-box;width: 100%;height: auto;margin-bottom: 1rem;border-radius: 10px;overflow: hidden;border: 1px solid #DADADA;}
            
            /*商品文字信息介绍*/
            .text_intro{background: rgb(241, 241, 241) url(__PUBLIC__/img/quot.jpg) no-repeat 1% 0.31rem;color: #6C6B6B;margin: 0.625rem 0px;padding: 0.93rem 1.25rem 0.93rem 2.81rem;font-size: 0.87rem;line-height: 1.39rem;outline: 0px;border: 0px currentcolor;vertical-align: baseline;}
        
        	/*规格*/
			 .record_pj{line-height: 1.39rem;margin: 2rem 0 2rem 0;padding: 0.937rem;font-size: 0.87rem; border-width: 1px 0.4em; border-style: solid; border-color: rgb(194, 201, 42); border-radius: 0.3em;}
			 .record_pj span{color: #6C6B6B;}
			 .record_pj span:nth-of-type(2){text-indent: 2em;display: block;}
			 
			/*品鉴记录*/
			.record_zq{padding-right: 0.31rem;padding-left: 0.31rem;border: 1px solid rgb(252, 180, 43);line-height: 0.62rem;margin: 3rem 0 2rem 0;}
			.record_zq_top_bg{margin-top: -0.5rem;margin-left: 8.75rem;width: 50%;height: 0.5rem;background-color: rgb(254, 254, 254);}
			.record_zq_top_bg span{border-radius: 100%;width: 0.5rem;height: 0.5rem;display: inline-block;background-color: rgb(252, 180, 43);}
			.record_zq_con{margin: 0.93rem;color: rgb(62, 62, 62);line-height: 2em;font-size: 0.87rem;}
			.record_zq_con span{color: #6C6B6B}
			.record_zq_bottom_bg{margin-bottom: -0.25rem;margin-left: 1.56rem;width: 65%;height: 0.62rem;text-align: right;background-color: rgb(254, 254, 254);}
			.record_zq_bottom_bg span{margin-bottom: 1px;border-radius: 100%;width: 0.5rem;height: 0.5rem;display: inline-block;background-color: rgb(252, 180, 43);}
    
            /*2-2 品鉴记录中的列表*/
			.record_zq_con ul li{font-size: 0.875rem;line-height: 1.1875rem;margin: 0.8rem 0;color: #6C6B6B;}
			.record_zq_con ul li .cat{font-weight: bold;}
			.record_zq_con h4{font-weight: normal;color: #6C6B6B;border-bottom: 1px dotted #FCB42B;}

            /*产品支持 产品包装 产品契机*/
            .bag_zq{margin: 2rem 0rem;font-size: 0.87rem;padding: 0.93rem;border: 2px solid rgb(240, 240, 240);color: rgb(62, 62, 62);line-height: 1.5rem;box-shadow: rgb(170, 170, 170) 0px 0px 0.18rem;}
            .bag_zq span{line-height: 1.5rem;}
            
            /*品牌介绍*/
            .intro_zq{font-size: 0.87rem;color: #6C6B6B;margin: 2rem 0rem 5rem 0rem;padding: 2rem 1rem;border-left: 3px solid rgb(252, 180, 43);border-top-width: 3px;border-right-width: 3px;border-bottom-width: 3px;border-top-left-radius: 50px;border-bottom-right-radius: 50px;box-shadow: rgb(165, 165, 165) 5px 5px 2px 0px;background-color: rgb(250, 250, 250);}
            .intro_zq span{line-height: 1.5rem;}
            
            /*按钮*/
            .footer{width: 100%; height: 4rem; line-height: 4rem; background: white; position: fixed; bottom: 0; min-width: 20rem; max-width: 35rem;}
            .footer span{margin: 0.5rem 5%;box-sizing: border-box;float:left;color: #fff;font-weight: normal;display: block;width: 40%;text-align: center;height: 3rem;line-height: 3rem;border-radius: 1rem;border: 1px solid #d2a000;box-shadow: 0 1px 2px #fedd71 inset, 0 -1px 0 #a38b39 inset, 0 -2px 3px #fedd71 inset;background: -webkit-linear-gradient(top, #fece34, #d8a605);}
            .footer span:active{border: 0px solid #ef4300;}
            .footer span a{color: white;display: block;font-weight: bold;}
            
            /*弹出层信息统计表格*/
            #contact input,textarea{font: 400 12px/16px "Open Sans", Helvetica, Arial, sans-serif;}
            #contact{margin: 0px auto;width: 90%;}
            #contact h4{color: #F96;display: block;font-size: 1.2rem;font-weight: bold;margin-bottom: 0.6rem;}
            #contact input,textarea{width: 90%;border: 1px solid #CCC;background: #FFF;margin: 0 0 0.4rem;padding: 0.5rem;}
            #contact input[type="text"]:hover,#contact input[type="email"]:hover,#contact input[type="tel"]:hover,#contact input[type="url"]:hover,#contact textarea:hover{-webkit-transition: border-color 0.3s ease-in-out;-moz-transition: border-color 0.3s ease-in-out;transition: border-color 0.3s ease-in-out;border: 1px solid #AAA;}
            #contact textarea{height: 100px;resize: none;width: 100%;box-sizing: border-box;}
            #contact button[type="button"]{cursor: pointer;width: 100%;border: none;background: #F9683D;color: #FFF;line-height: 2.5rem;height: 2.5rem;font-size: 0.9375rem;box-sizing: border-box;}
            #contact input:focus,#contact textarea:focus{outline: 0;border: 1px solid #999;}
            #contact .leftname{display: block;float: left;width: 25%;height: 1.875rem;line-height: 1.875rem;text-align: center;border: 1px solid #dedede;border-right: none;border-bottom-left-radius: 0.3125rem;border-top-left-radius: 0.3125rem;background-color: #dedede;box-sizing: border-box;}
            #contact .rightinput{display: block;width: 75%;height: 1.875rem;line-height: 1.875rem;box-sizing: border-box;}
            #contact .iblock{margin-bottom: 0.1875rem;}
            .face{background: black;opacity: 0.6;z-index: 888;margin: 0 auto;width: 100%;height: 100%;position: fixed;top: 0;left: 0;padding-top: 20%;display: none;}
            .info_form{padding-bottom: 2rem;z-index: 999;margin: 0 auto;width: 90%;height: 100%;top: 0;left: 0;}
            
            /*补充layer的样式*/
            .layui-m-layer1 .layui-m-layerchild{border: none;border-radius: 0;border-radius: 10px;min-width: 20rem;max-width: 30rem;}
            
            /*配送范围 2-2*/
			.rang{width: 100%;padding: 0.9375rem;background: #F1F1F1;line-height: 1.875rem;font-size: 0.875rem;box-sizing: border-box;border-left: 0.3125rem solid #0099CC;margin-bottom: 1.25rem;}
					
			/*兑换流程2-3*/
			.mov_exchange{margin-top: 2rem;}
			.mov_exchange span{color: #6C6B6B;display: inline-block;margin: 0 0 1rem 0;line-height: 1.5rem;font-size: 0.95rem;}

            /*下面的电影影院列表*/
			.mov_list{margin: 0 0 5rem 0;box-sizing: border-box;}
			.mov_list span{color: #6C6B6B;font-size: 0.875rem;line-height: 1.5rem;box-sizing: border-box;}
			.movie_tc{margin: 1rem 0;box-sizing: border-box;}
			.movie_tc table{border-collapse: collapse;border-spacing: 0px;font-size: 0.8rem !important;width: 100%;box-sizing: border-box;}
			.movie_tc .table1{border-left: 2px solid #F1F1F1;border-top: 2px solid #F1F1F1;box-sizing: border-box;}
			.movie_tc .table1 th{border-right:1px solid #7FAF3F;border-bottom:1px solid #7FAF3F;box-sizing: border-box;}
			.movie_tc .table2_con{overflow-y:scroll ;height: 20rem;border-left: 2px solid #F1F1F1;border-bottom: 2px solid #F1F1F1;box-sizing: border-box;}
			.movie_tc .table2_con .table2 tr{border-bottom:1px solid #7FAF3F;box-sizing: border-box;}
			.movie_tc .table2_con .table2 td{border-right:1px solid #7FAF3F;box-sizing: border-box;}
			.movie_tc .table1 .bg_line{background: #DEDEDE;height: 2rem;line-height: 2rem;box-sizing: border-box;}	
			.movie_tc .table1 .one{height: 2rem;line-height: 2rem;background: #7FAF3F;font-size: 1.2rem;color: white;box-sizing: border-box;}
			.movie_tc table td{height: 1rem;line-height: 1rem;padding: 0.5rem;color:#6C6B6B;}
			
			.movie_tc .table2_con .table2 .star{text-align: center;font-size: 0.4rem;font-family: 宋体;}
			.movie_tc .table2_con .table2 .two{font-weight: normal !important;font-size: 0.8rem !important;}
	
			 /*注意事项 2-8*/
			.attent_thing{font-size: 0.87rem;color: #6C6B6B;}
			.attent_thing span{line-height: 1.5rem;}
			
			/*配送范围列表2-9*/
			.rang_list{margin: 0 0 2rem 0;}
			.rang_list span{color: #6C6B6B;font-size: 0.875rem;line-height: 1.5rem;}
			.rang_tc{margin: 1rem 0;}
			.rang_tc table{border-collapse: collapse;border-spacing: 0px;font-size: 0.8rem !important;width: 100%;}
			.rang_tc .table1{border-left: 2px solid #F1F1F1;border-top: 2px solid #F1F1F1;}
			.rang_tc .table1 th{border-right:1px solid #7FAF3F;border-bottom:1px solid #7FAF3F;}
			.rang_tc .table2_con{overflow-y:scroll ;height: 20rem;border-left: 2px solid #F1F1F1;border-bottom: 2px solid #F1F1F1;}
			.rang_tc .table2_con .table2 tr{border-bottom:1px solid #7FAF3F;}
			.rang_tc .table2_con .table2 td{border-right:1px solid #7FAF3F;}
			.rang_tc .table1 .bg_line{background: #DEDEDE;height: 2rem;line-height: 2rem;}	
			.rang_tc .table1 .one{height: 2rem;line-height: 2rem;background: #7FAF3F;font-size: 1.2rem;color: white}
			
			.rang_tc .table2_con .table2 tr:last-child{border-bottom: 0;}
			.rang_tc table td{height: 1rem;line-height: 1rem;padding: 0.5rem;color:#6C6B6B;}
			.rang_tc table td:first-child{font-weight: bold;font-size: 0.9rem;color:#D87912;}       
			        
        
        </style>
    </head>

    <body id="body">
        <div class="banner_bg"> </div>
        <div id="content">
            <!--产品标题-->
            <div class="title_ti2">
                <span style="font-weight:bold;"><?php echo $product['title']; ?></span>
            </div>
            
            <!--品鉴记录-->
			<div class="record_pj">
				<span class="i_strong">【品鉴记录】</span><br />
				<span><?php echo $product['abstract']; ?></span>
			</div>
			
            <!--放数据库中-begin-->
           <?php echo $product['content']; ?>
            <!--放数据库中-end-->
            
        </div>
        
        <!--按钮处-->
        <?php if(empty($order['product_id']) || (($order['product_id'] instanceof \think\Collection || $order['product_id'] instanceof \think\Paginator ) && $order['product_id']->isEmpty())): ?>
        <div class="footer">
            <span><a href="javascript:modalBottom();">兑换</a></span>
            <span><a href="javascript:history.back();">返回</a></span>
        </div>
        <?php endif; ?>
        <script src="__PUBLIC__/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="http://cdn.huangjuntu.vip/js/layer3.0.3/mobile/layer.js"></script>
        <script>
//          下滑动一定距离时出现锚点
            jQuery.ISEmail = function(email) {
                var strlen = email.length;
                var email_rule = /^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/;
                return (strlen >= 6 && strlen <= 40 && email_rule.test(email));
            }
            
            jQuery.ISMobile = function(mobile) {
                var strlen = mobile.length;
                var mobile_rule = /^[0-9-+]+$/;
                return (strlen == 11 && mobile_rule.test(mobile));
            }
            
//          兑换点击按钮
            function modalBottom() {
                layer.open({
                    type: 1,
                    title: "请填入收货信息",
                    closeBtn: 0,
                    shadeClose: true,
                    skin: 'yourclass',
                    content: '<div class="info_form" id="info_form">\
                    <form id="contact" action="" method="post">\
    <div class="iblock"><span class="leftname">收货人姓名</span><input id="realname" name="realname" placeholder="请输入收货人姓名" type="text" autofocus class="rightinput"></div><div class="clear"></div>\
    <div class="iblock"><span class="leftname">手机号码</span><input id="mobile" name="mobile" placeholder="请输入收货人手机号码" type="tel" class="rightinput"></div><div class="clear"></div>\
    <div class="iblock"><span class="leftname">邮箱地址</span><input id="email" name="email" placeholder="请输入收货人邮件地址" type="email" class="rightinput"></div><div class="clear"></div>\
    <div class="iblock"><span class="leftname">配送地址</span><input id="address" name="address" placeholder="请输入收货人地址" type="text" class="rightinput"></div><div class="clear"></div>\
    <textarea id="remark" name="remark" placeholder="留言~"></textarea>\
    <button name="doExchange" type="button" id="doExchange">我要兑换</button>\
</form>\
                </div>',
                });
                
                $("#doExchange").on('click',function() {
                    var product_id = '<?php echo $product['product_id']; ?>';
                    var realname = $("#realname").val();
                    var mobile = $("#mobile").val();
                    var email = $("#email").val();
                    var address = $("#address").val();
                    
                    if (realname == "") {
                        MsgBox("温馨提示：请填写收货人姓名。");
                        return false;
                    }
                    if (!$.ISMobile(mobile)) {
                        MsgBox("温馨提示：收货人手机号码没有填写或者格式错误。");
                        return false;
                    }
                    if (!$.ISEmail(email)) {
                        MsgBox("温馨提示：收货人邮件地址没有填写或者格式错误。");
                        return false;
                    }
                    if (address == "") {
                        MsgBox("温馨提示：请填写收货人地址。");
                        return false;
                    }
                    
                        $.post("__URL__/doExchange",{product_id:product_id,realname:realname,mobile:mobile,email:email,address:address,remark:$("#remark").val()},function(data){
                            console.log(data.error);
                            if (data.error) {
                                MsgBox(data.message);
                            } else {
                                MsgBox(data.message);
                                window.location.href = '__URL__/order.html';
                            }
                        });
                    return false;
                });
            }
            
            function MsgBox(message) {
                layer.open({
                    type: 1,
                    title: "温馨提示",
                    time: 2,
                    closeBtn: 0,
                    shadeClose: true,
                    skin: 'yourclass',
                    content: '<div class="info_form">' + message + '</div>',
                });
            }
        </script>
    </body>

</html>