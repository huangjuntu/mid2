<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"/home/wwwroot/website/dev/apps/welfare/view/index/order.html";i:1503630581;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
        <script src="__PUBLIC__/js/jquery-3.2.1.min.js">
        </script>
        <script type="text/javascript">
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
            
            $(function() {
                $("#doExchange").click(function() {
                    var product_id = '<?php echo $product['product_id']; ?>';
                    var realname = $("#realname").val();
                    var mobile = $("#mobile").val();
                    var email = $("#email").val();
                    var address = $("#address").val();
                    
                    if (realname == "") {
                        alert("温馨提示：请填写姓名。");
                        return false;
                    }
                    if (!$.ISMobile(mobile)) {
                        alert("温馨提示：手机号码没有填写或者格式错误。");
                        return false;
                    }
                    if (!$.ISEmail(email)) {
                        alert("温馨提示：邮件地址没有填写或者格式错误。");
                        return false;
                    }
                    if (address == "") {
                        alert("温馨提示：请填写收件地址。");
                        return false;
                    }
                    
                    if (confirm("确定兑换吗？")) {
                        $.post("__URL__/doExchange",{product_id:product_id,realname:realname,mobile:mobile,email:email,address:address,remark:$("#remark").val()},function(data){
                            console.log(data.error);
                            if (data.error) {
                                alert(data.message);
                            } else {
                                alert(data.message);
                                window.location.href = '__URL__/order.html';
                            }
                        });
                    }
                    return false;
                });
            });
        </script>
    </head>
    <body>
        <h2>
            礼品详情
        </h2>
        <div>
            ID: <?php echo $product['product_id']; ?>
            <br/>
            类别: <?php echo $product['category']; ?>
            <br/>
            标题: <?php echo $product['title']; ?>
            <br/>
            摘要: <?php echo $product['abstract']; ?>
            <br/>
            内容: <?php echo $product['content']; ?>
            <br/>
        </div>
        <h2>
            兑换信息
        </h2>
        您的姓名:
        <input id="realname" name="realname" type="text"/>
        <br/>
        手机号码:
        <input id="mobile" name="mobile" type="text"/>
        <br/>
        电子邮箱:
        <input id="email" name="email" type="text"/>
        <br/>
        收件地址:
        <input id="address" name="address" type="text"/>
        <br/>
        备　　注:
        <textarea id="remark" name="remark"></textarea>
        <br/>
        <input id="doExchange" name="doExchange" type="button" value="我要兑换"/>
    </body>
</html>