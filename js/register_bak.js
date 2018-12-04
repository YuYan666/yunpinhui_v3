$().ready(function() {

	var wait = 60;
	function countdown(obj, msg) {
		obj = $(obj);

		if (wait == 0) {
			obj.removeAttr("disabled");
			obj.val(msg);
			wait = 60;
		} else {
			if (msg == undefined || msg == null) {
				msg = obj.val();
			}
			obj.attr("disabled", "disabled");
			obj.val(wait + "秒后重新获取");
			wait--;
			setTimeout(function() {
				countdown(obj, msg)
			}, 1000)
		}
	}

	/**
	 * 发送邮箱验证码
	 * 
	 * @param emailObj
	 *            邮箱对象
	 * @param emailCodeObj
	 *            邮箱验证码对象
	 * @param sendButton
	 *            点击发送邮箱验证码的按钮对象，用于显示倒计时信息
	 */
	function sendEmailCode(emailObj, emailCodeObj, sendButton) {
		// 发送邮件
		// &XDEBUG_SESSION_START=ECLIPSE_DBGP
		var url = 'register.php?act=send_email_code';
		$.post(url, {
			email: emailObj.val()
		}, function(result) {
			if (result == 'ok') {
				// 倒计时
				countdown(sendButton);
			} else {
				alert(result);
			}
		}, 'text');
	}

	/**
	 * 发送邮箱验证码
	 * 
	 * @param mobileObj
	 *            手机号对象
	 * @param mobileCodeObj
	 *            短信验证码对象
	 * @param sendButton
	 *            点击发送短信证码的按钮对象，用于显示倒计时信息
	 */
	function sendMobileCode(mobileObj, mobileCodeObj, sendButton) {
		// 发送邮件
		var url = 'register.php?act=send_mobile_code';
		$.post(url, {
			mobile_phone: mobileObj.val()
		}, function(result) {
			if (result == 'ok') {
				// 倒计时
				countdown(sendButton);
			} else {
				alert(result);
			}
		}, 'text');
	}
	
	$.validator.addMethod("password", function(){
		return false;
	});
	
	var validator = $("#formUser").validate({
		debug: false,
		rules: {
			email: {
				required: true,
				email: true,
				remote: {
					url: "register.php", // 后台处理程序
					type: "post", // 数据发送方式
					dataType: "json", // 接受数据格式
					data: { // 要传递的数据
						act: 'check_email_exist',
						email: function() {
							return $("#email").val();
						}
					}
				}
			},
			email_code: {
				required: true
			},
			mobile_phone: {
				required: true,
				mobile: true,
				remote: {
					url: "register.php", // 后台处理程序
					type: "post", // 数据发送方式
					dataType: "json", // 接受数据格式
					data: { // 要传递的数据
						act: 'check_mobile_exist',
						mobile: function() {
							return $("#mobile_phone").val();
						}
					}
				}
			},
			mobile_code: {
				required: true
			},
			password: {
				required: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				equalTo: "#password"
			},
			captcha: {
				required: true
			}
		},
		messages: {
			email: {
				required: "邮箱地址不能为空",
				email: "邮件地址不合法",
				remote: "邮箱地址已存在"
			},
			email_code: {
				required: "邮箱验证码不能为空"
			},
			mobile_phone: {
				required: "手机号码不能为空",
				mobile: "手机号码不合法",
				remote: "手机号码已存在",
			},
			mobile_code: {
				required: "短信验证码不能为空"
			},
			password: {
				required: "登录密码不能为空",
				minlength: "登录密码不能少于6个字符"
			},
			confirm_password: {
				required: "确认密码不能为空",
				equalTo: "两次输入密码不一致"
			},
			captcha: {
				required: "验证码不能为空"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo(element.parent());
		}
	});
	$("#email").blur(function() {
		if($(this).valid()){
			
		}
	});
	$("#zemail").click(function() {
		if (!$("#email").valid()) {
			return;
		}
		send_email_code($("#email_code"), $(this));
	});
	$("#mobile_phone").blur(function() {
		$(this).valid();
	});
	$("#zphone").click(function() {
		if (!$("#mobile_phone").valid()) {
			return;
		}
		send_mobile_code($("#mobile_phone"), $(this));
	});
	$("#btn_submit").click(function() {

		if (!validator.form()) {
			return;
		}
		
		$("#formUser").attr("action", "register.php?act=register");
		$("#formUser").submit();
		
	});
});