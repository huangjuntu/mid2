<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"/home/wwwroot/website/dev/apps/welfare/view/index/ss.html";i:1503656333;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0"/>
        <style>
        #loginDiv {
        	background:blue;
        	position: absolute;
        }
        		</style>
    </head>
    <body>
        <div id="content">
            <img id="bgImg" src="__PUBLIC__/img/MAF_2017_bg.jpg" width="100%"/>
            <div id="loginDiv">
            </div>
        </div>
        <script src="__PUBLIC__/js/jquery-3.2.1.min.js"></script>
        <script>
        			$(function() {
        	var image = document.getElementById("bgImg");
        	var div = $("#loginDiv");
        	if(image.complete) {
        		setDiv(image,div);
        	} else {
        		image.onload = function () {
        			setDiv(image,div);
        			console.log("d");
            	};
        	}
        });
        			
        			function setDiv(img,div) {
        				var height = img.height;
        				console.log(height);
        				div.css('top', height * 0.48);
        				div.css('height', height * 0.1);
        				div.css('width', 300);
        			}
        		</script>
    </body>
</html>
