	//加载工厂
	$(document).ready(function() {
			// 分页需要依赖的初始化动作
			$.post("ajax/Factory/getFactoryList.do",function(data){     
		        var jsonObj = eval("(" + data + ")"); 
		        //根据id查找对象，
           		var obj=document.getElementById('factoryList');   
		        for (var i = 0; i < jsonObj.length; i++) {    
         			
         			var z = document.createElement("OPTION");
    				z.setAttribute("value", jsonObj[i].fid+"-"+jsonObj[i].fname);
    				obj.appendChild(z);
        		}   
    		});  
		});
	
	//验证变量集
	var bPro,bPwd,bRpwd,bNick,bReal,bPhone,bWPhone,bFile;
	var bEmail =false;
	var bFactory = false;

	
	//验证工厂
	function checkFactory() { 
		var factoryCN = document.getElementById("factoryCN").value;
		var strs= new Array(); //定义一数组 
		strs=factoryCN.split("-"); //字符分割 
		document.getElementById("factoryId").value = strs[0];
		var factoryId = strs[0];
		if(factoryId!="")
		{
				$.post("ajax/Factory/getFactoryName.do",{ fid: factoryId},function(data){    
			      	var jsonObj = eval("(" + data + ")");  
			        if(!jsonObj.find){
			        	document.getElementById("factoryId_class").setAttribute("class","control-group error");
			        	document.getElementById("factoryIdInfo").innerHTML="该工厂不存在";
			        	bFactory = false;
			        }
			        else{
			        	document.getElementById("factoryId_class").setAttribute("class","control-group success");
			        	document.getElementById("factoryIdInfo").innerHTML="<i class='icon-ok'></i>";
			        	bFactory = true;
			        }   
		    	});
		}
		else
		{
			document.getElementById("factoryId_class").setAttribute("class","control-group error");
			document.getElementById("factoryIdInfo").innerHTML="请输入工厂编号";
			bFactory = false;
		}
	};
	
	//验证邮箱
	function checkEmail() { 
		var email = document.getElementById("email").value;
		if(email!="")
		{
			reg=/^\w{3,}@\w+(\.\w+)+$/;
			if(!reg.test(email)){
				//$("#email_class").addClass("error");
				document.getElementById("email_class").setAttribute("class","control-group error");
				document.getElementById("EmailInfo").innerHTML="Email格式错误";
				bEmail = false;
			}		
			else{
				$.post("ajax/User/checkAjaxEmail.do",{ email: email},function(data){    
			      	var jsonObj = eval("(" + data + ")");  
			        if(jsonObj.exist){
			        	document.getElementById("email_class").setAttribute("class","control-group error");
			        	document.getElementById("EmailInfo").innerHTML="Email已被注册!";
			        	bEmail = false;
			        }
			        else{
			        	document.getElementById("email_class").setAttribute("class","control-group success");
			        	document.getElementById("EmailInfo").innerHTML="<i class='icon-ok'></i>";
			        	bEmail = true;
			        }   
		    	});
			}
		}
		else
		{
			document.getElementById("email_class").setAttribute("class","control-group error");
			document.getElementById("EmailInfo").innerHTML="请输入Email";
			bEmail = false;
		}
	};	
	
	//验证电话
	function checkWorkPhone()
	{
		var workPhone = document.getElementById("workPhone").value;
		if(workPhone!="")
		{
			reg=/^(\d{3,4}\-)?[1-9]\d{6,7}$/;
			if(!reg.test(workPhone)){
				document.getElementById("workPhone_class").setAttribute("class","control-group error");
				document.getElementById("workPhoneInfo").innerHTML="单位电话格式错误";
				bWPhone = false;
			}		
			else{
				document.getElementById("workPhone_class").setAttribute("class","control-group success");
			    document.getElementById("workPhoneInfo").innerHTML="<i class='icon-ok'></i>";
			    bWPhone = true;
			} 
		}
		else
		{
			document.getElementById("workPhone_class").setAttribute("class","control-group error");
			document.getElementById("workPhoneInfo").innerHTML="请输入电话";
			bWPhone = false;
		}
	}
	
	//验证手机
	function checkCellPhone()
	{
		
		var phoneNumber = document.getElementById("phoneNumber").value;
		if(phoneNumber!=""){
			reg=/^(\+\d{2,3}\-)?\d{11}$/;
			if(!reg.test(phoneNumber)){
				document.getElementById("phoneNumber_class").setAttribute("class","control-group error");
				document.getElementById("phoneNumberInfo").innerHTML="手机号码格式错误";
				bPhone = false;
			}		
			else{
				document.getElementById("phoneNumber_class").setAttribute("class","control-group success");
			    document.getElementById("phoneNumberInfo").innerHTML="<i class='icon-ok'></i>";
			    bPhone = true;
			} 
		}
		else
		{
			document.getElementById("phoneNumber_class").setAttribute("class","control-group error");
			document.getElementById("phoneNumberInfo").innerHTML="请输入手机";
			bPhone = false;
		}
	}
	
	//验证密码
	function checkPassword()
	{
		var password = document.getElementById("password").value;
		if(password.length>5&&password.length<16){
			reg=/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,16}$/;
			if(!reg.test(password)){
				document.getElementById("password_class").setAttribute("class","control-group error");
				document.getElementById("passwordInfo").innerHTML="密码应为字母、符号或数字";
				bPwd = false;
			}		
			else{
				document.getElementById("password_class").setAttribute("class","control-group success");
			    document.getElementById("passwordInfo").innerHTML="<i class='icon-ok'></i>";
			    bPwd = true;;
			}
			checkRepeatPwd();
		}
		else
		{
			document.getElementById("password_class").setAttribute("class","control-group error");
			document.getElementById("passwordInfo").innerHTML="密码长度应为6-16";
			bPwd = false;
		}
	}
	
	//验证密码重复输入
	function checkRepeatPwd()
	{
		if($("#repeatPassword").val()!=""){
			if($("#password").val() !== $("#repeatPassword").val()){
				document.getElementById("rpwd_class").setAttribute("class","control-group error");
				document.getElementById("rpwdInfo").innerHTML="前后密码不一致";
				bRpwd = false;
			}else{
				document.getElementById("rpwd_class").setAttribute("class","control-group success");
			    document.getElementById("rpwdInfo").innerHTML="<i class='icon-ok'></i>";
			    bRpwd = true;
			}
		}
		else{
			document.getElementById("rpwd_class").setAttribute("class","control-group error");
			document.getElementById("rpwdInfo").innerHTML="不可为空";
			bRpwd = false;
		}
		
	}
	
	//验证昵称
	function checkNickName()
	{	
		var nickname = document.getElementById("nickname").value;
		if(nickname!=""){
			reg= /^[\u4e00-\u9fa5a-zA-Z0-9_]{1,16}$/;
			if(!reg.test(nickname)){
				document.getElementById("nickname_class").setAttribute("class","control-group error");
				document.getElementById("nicknameInfo").innerHTML="昵称不要超过16字符";
				bNick = false;
			}else{
				document.getElementById("nickname_class").setAttribute("class","control-group success");
			    document.getElementById("nicknameInfo").innerHTML="<i class='icon-ok'></i>";
			    bNick = true;
			}
		}
		else
		{
			document.getElementById("nickname_class").setAttribute("class","control-group error");
			document.getElementById("nicknameInfo").innerHTML="请输入昵称";
			bNick = false;
		}
	}
	
	//验证名字
	function checkRealName()
	{
		var realName = document.getElementById("realName").value;
		if(realName!=""){
			reg= /^[\u4e00-\u9fa5a-zA-Z0-9_]{1,16}$/;
			if(!reg.test(realName)){
				document.getElementById("realName_class").setAttribute("class","control-group error");
				document.getElementById("realNameInfo").innerHTML="名称不要超过16字符";
				bReal = false;
			}else{
				document.getElementById("realName_class").setAttribute("class","control-group success");
			    document.getElementById("realNameInfo").innerHTML="<i class='icon-ok'></i>";
			    bReal = true;
			}
		}
		else
		{
			document.getElementById("realName_class").setAttribute("class","control-group error");
			document.getElementById("realNameInfo").innerHTML="请输入姓名";
			bReal = false;
		}
	}
	
	//确认完协议转到个人信息
	function setProfile()
	{
		bPro = false;
		checkPro();
		
		if(bPro)
		{
			document.getElementById("hometab").href="#home";
			$('#hometab').tab('show');
			jQuery('#protab').removeAttr('href');
			jQuery('#protab').removeAttr('data-toggle');
		}
	}
	//返回个人信息
	function backProfile()
	{
		document.getElementById("hometab").href="#home";
		$('#hometab').tab('show');
		jQuery('#comtab').removeAttr('href');
		jQuery('#comtab').removeAttr('data-toggle');
	}
	//确认完个人信息跳转企业信息
	function setCom()
	{
		//bEmail = false;
		bPwd = false;
		bRpwd = false;
		bNick = false;
		bReal = false;
		bPhone = false;
		
		//checkEmail();
		checkPassword();
		checkNickName();
		checkRealName();
		checkCellPhone();
		
		var email = document.getElementById("email").value;
		if(email=="")
		{
			document.getElementById("email_class").setAttribute("class","control-group error");
			document.getElementById("EmailInfo").innerHTML="请输入Email";
			bEmail = false;
		}
		if(bEmail&&bPwd&&bRpwd&&bNick&&bReal&&bPhone)
		{
			document.getElementById("comtab").href="#com";
			$('#comtab').tab('show');
			
			jQuery('#protab').removeAttr('href');
			jQuery('#protab').removeAttr('data-toggle');
		}	
	}
	//返回协议
	function backPro()
	{
		document.getElementById("protab").href="#pro";
		$('#protab').tab('show');
		jQuery('#hometab').removeAttr('href');
		jQuery('#hometab').removeAttr('data-toggle');
	}
	
	//检验协议
	function checkPro()
	{
		if(document.getElementById("ckPro").checked){
				
				document.getElementById("Pro_class").setAttribute("class","control-group success");
			    document.getElementById("ProInfo").innerHTML="<i class='icon-ok'></i>";
			    bPro = true;
		}
		else
		{
			document.getElementById("Pro_class").setAttribute("class","control-group error");
			document.getElementById("ProInfo").innerHTML="<i class='icon-remove'></i>请同意协议";
			bPro = false;
		}
	}
	
	function register()
	{
		if(document.getElementById("identityFile").value=="")
		{
			document.getElementById("pic_class").setAttribute("class","control-group error");
			document.getElementById("picInfo").innerHTML="<i class='icon-remove'></i>请上传图片";
			bFile = false;
		}
		else{
			document.getElementById("pic_class").setAttribute("class","control-group success");
			document.getElementById("picInfo").innerHTML="<i class='icon-ok'></i>";
			bFile = true;
		}
		
		bWPhone = false;
		checkWorkPhone();
		
		var factoryCN = document.getElementById("factoryCN").value;
		if(factoryCN=="")
		{
			document.getElementById("factoryId_class").setAttribute("class","control-group error");
			document.getElementById("factoryIdInfo").innerHTML="请输入工厂编号";
			bFactory = false;
		}

		
		if(bFile&&bFactory&&bWPhone)
		{
			var inputNum = document.getElementById("inputNum").value;  
			$.post("ajax/User/checkNum.do",{inputNum:inputNum,},function(data){
				var json = eval("(" + data + ")"); 
				if(json.right){
					//获取用户信息
				    var email = document.getElementById("email").value;
					var password = document.getElementById("password").value;
					var realName = document.getElementById("realName").value;
					var workPhone = document.getElementById("workPhone").value;
					var phoneNumber = document.getElementById("phoneNumber").value;
					var notes = document.getElementById("notes").value;
					var identityFile = document.getElementById("identityFile").value;
					var factoryId = document.getElementById("factoryId").value;
					var nickname = document.getElementById("nickname").value;
					
					$.post("ajax/User/register.do",{email:email,password:password,realName:realName,workPhone:workPhone,phoneNumber:phoneNumber,
						notes:notes,identityFile:identityFile,factoryId:factoryId,nickname:nickname},function(data){
						var json = eval("(" + data + ")"); 
						//alert(json.sys_code);
						if(json.sys_code == "suc"){
							alert("ok");
						}
					});
				}
			    else{
				  document.getElementById("vdcode_class").setAttribute("class","control-group error");
				  document.getElementById("vdcodeInfo").innerHTML="验证码不对";
				}
			});
		}
	}

	
	//验证码
	 function loadimage(){ 
	  document.getElementById("randImage").src = "image.jsp?"+Math.random(); 
	  } 
	
	function hh()
	{
		var inputNum = document.getElementById("inputNum").value;  
		  $.post("ajax/User/checkNum.do",{inputNum:inputNum,},function(data){
		    var json = eval("(" + data + ")"); 
			if(json.right){
			  alert("OK");
			}
		    else{
			  alert("验证码不对");
			}
		  }
		  );
	}