<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>
<!DOCTYPE html>
<html>

<head>
	<base href="<%=basePath%>">
	<title>登陆</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.css" />
		<link rel="stylesheet" href="assets/css/datepicker.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="assets/css/colorpicker.css" />

		<!-- fonts -->

		

		<!-- ace styles -->
        <script src="assets/js/ace-extra.min.js"></script>
		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/glabol.css">
    <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="js/holder.js"></script>
	
<style type="text/css"> 
.fileInput{width:84px;height:32px; background:url(img/btn_pic.png);overflow:hidden;position:relative;}
.upfile{position:absolute;top:-100px;}
.upFileBtn{width:84px;height:32px;opacity:0;filter:alpha(opacity=0);cursor:pointer;}

.bs-docs-example {
	position: relative;
	margin: 15px 0;
	padding: 39px 19px 14px;
	background-color: #fff;
	border: 1px solid #ddd;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
#login {
    margin: 60px auto 0;
    width: 300px;
    border: 1px solid #68a;
    color: #333;
    background: #fff;
}
#login h3 {
    margin: 1px 0 0 1px;
    font-size: 14px;
    line-height: 28px;
    color: #047;
    background: #B2D2EB;
    border-bottom: 1px solid #68a;
    
}
#login p {
    margin: 5px;
    line-height: 24px;
    height: 24px;
}
#login input.login {
    width: 200px;
    border: 1px solid #ccc;
}
#login input.cmd {
    background: #CEE1EF;
    border: 1px solid #68a;
}
#login p label {
    display: block;
    float: left;
    width: 60px;
    text-align: right;
}

</style> 

<script type="text/javascript">	

	//验证码
	 function loadimage(){ 
	  document.getElementById("randImage").src = "image.jsp?"+Math.random(); 
	  } 
	
	function login()
	{
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;
			$.post("ajax/User/login.do",{facNo:email,password:password},function(data){
				var json = eval("(" + data + ")"); 
				//alert(json.login);
				if(json.login=="01"){
					document.getElementById("warnInfo").innerHTML = "用户名或密码错误 <a href='getPwd.jsp'>找回</a>";
					
					$('#alertBox').show();
				}
				else if(json.login=="02"){
					document.getElementById("warnInfo").innerHTML = "没有验证邮箱";
					$('#alertBox').show();
				}
				else if(json.login=="03"){
					document.getElementById("warnInfo").innerHTML = "账户在审核中";
					$('#alertBox').show();
				}
				else if(json.login=="04"){
					alert(${sessionScope["UserInfo"].roleId});
					document.getElementById("warnInfo").innerHTML = "ok";
					window.location.href="pages/Factory/clientlist.do";
					//$('#alertBox').show();
				}
				else if(json.login=="05"){
					document.getElementById("warnInfo").innerHTML = "用户名密码不可为空";
					$('#alertBox').show();
				}
			});
		
	}
</script>
	

</head>
	<body >	
       <div id="web_bg" style="position:absolute; width:100%; height:100%; z-index:-1;"> 

           <img src="img/bg.png" height="100%" width="100%"/> 
            		    		   			   			 			   		    
	   </div>
	   <div id="biaoti" style="position:absolute; width:100%; height:100%; z-index:-1;padding-top:8%;padding-left:16%;">
               <img src="img/biaoti.png" height="80%" width="80%"/> 
        </div>
	    <div id="alertBox" class="alert" style="width:169px;" >

		    <img style="position:fixed;" src="img/bg.png" height="100%" width="100%" /> 	  		   
			    <div id="alertBox" class="alert" style="width:169px;" >

				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <span id="warnInfo">用户名或密码错误！</span>

		       </div>	
		 </div>					
	  			
		<div style="background-image: url('img/dikuang.png');height:300px;width:300px;float:left; margin-left:40%;margin-top:22%;">	
		 <table style="margin-left:42px;margin-top:30px;">
				    <tr>
				        <td><label style="font-size: 16px;font-family: '黑体';">企业代码：</label></td>
				    </tr>
				    <tr>

				    <td><input type="text" id="email"    style="background-image: url('img/shurukuang.png');height:30px;border:0;margin-top:7px;"></td>
				    </tr>
				     <tr>
				        <td><label style="font-size: 16px;font-family: '黑体';">账号密码：</label></td>
				    </tr>
				    <tr>
				    <td><input type="password" id="password"  style="background-image: url('img/shurukuang.png');height:30px;border:0;margin-top:7px;"></td>
				    </tr>
				     <tr>
				        <td><a href="#" style="float:right;">忘记密码</a></td>
				    </tr>
				    <tr>
				    <td>
				    <button type="button" class="btn btn-success" onclick="login();" style="width: 210px;margin-top:15px;" ><div style="font-size:20px;">登录</div></button></td>
				 	</tr>				 	
				 </table>
			 </div> 																					 		 		 					    
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
    $("#alertBox").alert('close');
    </script>
    
	</body>
</html>
