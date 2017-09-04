//兑换点击按钮
function modalBottom() {
	layer.open({
		type: 1,
		title: "请填入兑换信息",
		closeBtn: 0,
		shadeClose: true,
		skin: 'yourclass',
		content: '<div class="info_form" id="info_form">\
						<form id="contact" action="" method="post">\
							<div class="iblock"><span class="leftname">收货人姓名</span><input placeholder="请输入收货人姓名" type="text" required class="rightinput"></div><div class="clear"></div>\
							<div class="iblock"><span class="leftname">手机号码</span><input placeholder="请输入收货人电话" type="tel" required class="rightinput"></div><div class="clear"></div>\
							<div class="iblock"><span class="leftname">邮箱地址</span><input placeholder="请输入收货人邮箱" type="email" required class="rightinput"></div><div class="clear"></div>\
							<div class="iblock"><span class="leftname">配送地址</span><input placeholder="请输入收货人地址" type="text" required class="rightinput"></div><div class="clear"></div>\
							<textarea placeholder="留言~" required></textarea>\
							<button name="doExchange" type="button" id="doExchange"><a href="last.html">我要兑换</a></button> \
						</form>\
					</div>'
	});
}