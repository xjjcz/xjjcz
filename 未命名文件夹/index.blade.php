<!DOCTYPE html>
<html>

<head>
    <title>登陆</title>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
    <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset("/css/font-awesome.min.css") }}"/>

    <!--[if IE 7]>
    <link rel="stylesheet" href="{{ asset("/css/font-awesome-ie7.min.css") }}" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <link rel="stylesheet" href="{{ asset("/css/jquery-ui-1.10.3.custom.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/chosen.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/datepicker.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/bootstrap-timepicker.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/daterangepicker.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/colorpicker.css") }}"/>

    <!-- fonts -->


    <!-- ace styles -->
    <script src="assets/js/ace-extra.min.js"></script>
    <link rel="stylesheet" href="{{ asset("/css/ace.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/ace-rtl.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/ace-skins.min.css") }}"/>


    <!--<link rel="stylesheet" type="text/css" href="{{ asset("/css/glabol.css") }}">-->
    <script type="text/javascript" language="JavaScript" src="{{ asset("/js/jquery-3.2.1.min.js") }}"></script>
    <script type="text/javascript" language="JavaScript" src="{{ asset("/js/bootstrap.min.js") }}"></script>
    <script type="text/javascript" language="JavaScript" src="{{ asset("/js/holder.js") }}"></script>

    <style type="text/css">
        .fileInput {
            width: 84px;
            height: 32px;
            background: url({{ asset("/img/btn_pic.png") }});
            overflow: hidden;
            position: relative;
        }

        .upfile {
            position: absolute;
            top: -100px;
        }

        .upFileBtn {
            width: 84px;
            height: 32px;
            opacity: 0;
            filter: alpha(opacity=0);
            cursor: pointer;
        }

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

        .login-box-warp {
            position: absolute;
            top: 40%;
            right: 15%;
            width: 22%;
            height: 38%;
        }

        table {
            width: 90%;
        }

        table tr {

            width: 100%;

        }

        table tr td {
            width: 100%;

        }
    </style>

    <script type="text/javascript">

        //验证码
        function loadimage() {
            document.getElementById("randImage").src = "image.jsp?" + Math.random();
        }

        function keydown() {
            var myEvent = window.event;
            var keyCode = myEvent.keyCode;
            if (keyCode == 13) {
                login();
            }
        }

        function login() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            $.post("ajax/User/login.do", {facNo: email, password: password}, function (data) {
                var json = eval("(" + data + ")");
                //alert(json.login);
                if (json.login == "01") {
                    //document.getElementById("warnInfo").innerHTML = "用户名或密码错误 <a href='getPwd.jsp'>找回</a>";
                    alert("用户名或密码错误 ");
                    //$('#alertBox').show();
                }
                else if (json.login == "02") {
                    alert("没有验证邮箱");
                    //document.getElementById("warnInfo").innerHTML = "没有验证邮箱";
                    //$('#alertBox').show();
                }
                else if (json.login == "03") {
                    alert("账户在审核中");
                    //document.getElementById("warnInfo").innerHTML = "账户在审核中";
                    //$('#alertBox').show();
                }
                else if (json.login == "04") {
                    //alert(${sessionScope["UserInfo"].roleId});
                    //document.getElementById("warnInfo").innerHTML = "ok";
                    window.location.href = "pages/Factory/clientlist.do";
                    //$('#alertBox').show();
                }
                else if (json.login == "05") {
                    alert("用户名密码不可为空");
                    //document.getElementById("warnInfo").innerHTML = "用户名密码不可为空";
                    //$('#alertBox').show();
                }
                else if (json.login == "06") {
                    //  document.getElementById("warnInfo").innerHTML = "用户名密码不可为空";
                    alert("填报还未开启！");

                    //$('#alertBox').show();
                }
            });

        }
    </script>


</head>
<body>
<div id="web_bg"
     style="position: absolute; width: 100%; height: 100%; z-index: -1;">
    <img src="img/bg.png" height="100%" width="100%"/>
</div>
<div class="login-box-warp"
     style="background-color: #003E3E; opacity: 0.9;margin-top:-80px;">
    <table style="margin: 20px;">
        <tr>
            <td>

                <span style="font-size: 20px; text-align: left;color:#32B16C;font-weight:bold;">企业用户登录</span>
            </td>
        </tr>
        <tr>
            <td>
                <div style="position:relative;background-color:white;width: 100%;height: 40px;  margin-top: 15px;border: 1px solid white;-webkit-border-radius: 6px;  border-radius: 6px;padding:0px 5px;">
					<span style="display:block;width:39px;height:39px;position:absolute;top:1px;left:1px;">
						<img src="img/icon15.png" style="width:90%;height:90%;"/>
					</span>
                    <input onkeypress="keydown();" type="text" id="email" value="请输入用户名"
                           onfocus="if(value=='请输入用户名') {value=''}"
                           onblur="if (value=='') {value='请输入用户名'}"
                           style=" height: 38px; line-height:38px; width: 90%;border:0px;padding:0px 0px 0px 45px">
                </div>

            </td>
        </tr>
        <tr>

            <td>
                <div style="position:relative;background-color:white;width: 100%;height: 40px;  margin-top: 15px;border: 1px solid white;-webkit-border-radius: 6px;  border-radius: 6px;padding:0px 5px">
					<span style="display:block;width:39px;height:39px;;position:absolute;top:1px;left:1px;">
						<img src="img/icon14.png" style="width:80%;height:90%;"/>
					</span>
                    <input onkeypress="keydown();" type="password" id="password" value="请输入密码"
                           onfocus="if(value=='请输入密码') {value=''}"
                           onblur="if (value=='') {value='请输入密码'}"
                           style=" height: 38px; line-height:38px; width: 90%;border:0px;padding:0px 0px 0px 45px">
                </div>

            </td>
        </tr>
        <tr>
            <td>
                <a href="#" style="float: right;"></a>
            </td>
        </tr>


        <tr>
            <td>
                <button type="button" class="btn btn-success" onclick="login();"
                        style=" margin: 15px 0px 5px 0px;width: 100%">
                    <div style="font-size: 20px;">
                        登录
                    </div>
                </button>
            </td>
        </tr>
        <tr style="color:white">
            <td style="color:white">
                <p style="color:red">为确保填报顺利，请使用chrome浏览器。</p><a href="http://www.chromeliulanqi.com/"
                                                                 style="color:red;font-weight:bold;">点击下载chrome浏览器</a>
            </td>
        </tr>
    </table>

</div>

<script type="text/javascript">
    $("#alertBox").alert('close');
</script>

</body>
</html>