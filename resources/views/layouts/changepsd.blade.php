<!DOCTYPE html>


<html lang="en">
<head>

		<title>修改密码</title>
		<meta name="keywords"	content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description"	content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="x-ua-compatible" content="IE=Edge" />

        <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet"/>
        <link href="{{ asset("/css/font-awesome.min.css") }}" rel="stylesheet"/>
        <link href="{{ asset("/css/font-awesome-ie7.min.css") }}" rel="stylesheet"/>





		   <link href="{{ asset("/css/jquery-ui-1.10.3.custom.min.css") }}" rel="stylesheet"/>


		   <link href="{{ asset("/css/chosen.css") }}" rel="stylesheet"/>


		   <link href="{{ asset("/css/datepicker.css") }}" rel="stylesheet"/>


		   <link href="{{ asset("/css/bootstrap-timepicker.css") }}" rel="stylesheet"/>


		   <link href="{{ asset("/css/daterangepicker.css") }}" rel="stylesheet"/>


		   <link href="{{ asset("/css/colorpicker.css") }}" rel="stylesheet"/>


		   <link href="{{ asset("/css/ui.jqgrid.css") }}" rel="stylesheet"/>

		<link rel="stylesheet" href="{{ asset("/css/ace.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("/css/ace-rtl.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("/css/ace-skins.min.css") }}" />
		<script src="{{ asset("/js/client.js") }}">
</script>
		<script src="{{ asset("/js/savehelp.js") }}">
</script>

		  <link rel="stylesheet" href="{{ asset("/js/ace-ie.min.css") }}" />


		<script src="{{ asset("/js/ace-extra.min.js") }}">
</script>


		<script src="{{ asset("/js/html5shiv.js") }}"></script>
		<script src="{{ asset("/js/respond.min.js") }}"></script>
		<![endif]-->
	</head>
	<body onload="setdate()">

		<script src="{{ asset("/js/jquery.maskedinput.min.js") }}">
</script>
		<script src="{{ asset("/js/jquery-1.7.2.min.js") }}" type="text/javascript">
</script>
		<script src="{{ asset("/js/client.js") }}">
</script>
		<script
			src="{{ asset("http://apps.bdimg.com/libs/fancybox/2.1.5/jquery.fancybox.pack.js") }}"
			type="text/javascript">
</script>
		@include("layouts.header")
		<script type="text/javascript" src="{{ asset("/js/autoNumeric.js") }}">
</script>
		<script src="{{ asset("/js/shihua.js") }}">
</script>
		<script src="{{ asset("/js/checkhelp.js") }}">
</script>
		<script type="text/javascript">
jQuery(function($) {
	$('#ability').focus(function() {
		$('#ability').autoNumeric();
	});
	$('#hour').focus(function() {
		$('#hour').autoNumeric();
	});
});
</script>
		<script type="text/javascript">
try {
	ace.settings.check('main-container', 'fixed')
} catch (e) {
}
</script>

		<script type="text/javascript">

            $(document).ready(function() {
                $('.fancybox').fancybox( {
                    padding : 0,
                    autoScale : true,
                    width : 350,
                    height : 180,
                    openEffect : 'elastic'
                });
            });





            //单个删除
            function changepsd(){
                var fac_no = 123;
                alert(fac_no);
                var oldpwd=$("#oldpsd").val();
                var newpwd=$("#newpsd").val();
                var confirmpsd=$("#confirmpwd").val();
                if(oldpwd==""){
                    alert("旧密码不可为空");
                    return ;
                }
                if(newpwd==""){
                    alert("新密码不可为空");
                    return ;
                }
                if(newpwd!=confirmpsd){
                    alert("你输入的确认密码和新密码不同！");
                    return ;
                }
                if (confirm('你确认修改吗?')){
                    $(document).ready(function () {
                        var id = 1;
                        $.post("{{ url("changepsddo") }}",{'_token':'{{ csrf_token() }}','fac_no':fac_no,'newpwd':newpwd},function (data) {
                            console.log(data);
                        });
                    });
                }
            }

		</script>

		<div class="main-container-inner">
			<a class="menu-toggler" id="menu-toggler" href="#"> <span
				class="menu-text"></span> </a>
			@include("layouts.leftnav")



			<div>
				<script type="text/javascript">
try {
	ace.settings.check('sidebar', 'collapsed')
} catch (e) {
}
</script>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
try {
	ace.settings.check('breadcrumbs', 'fixed')
} catch (e) {
}
</script>

					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="#">{{ session("factory")["factory_name"] }}</a>
						</li>


						<li class="active">
							修改密码
						</li>
					</ul>
					<!-- .breadcrumb -->


				</div>





				<div class="page-content" style="height: 50%">
					<div class="page-header">
						<h1>
							<b>企业信息</b>
							<small> <i class="icon-double-angle-right"></i> 修改密码 </small>
						</h1>
					</div>
					<!-- /.page-header -->
					<div class="row" style="height: 600px;">
						<div class="col-md-12">
							<!-- PAGE CONTENT BEGINS -->

							<div class="form-group">
								<label class="col-md-5 control-label no-padding-left"
									for="form-field-3">
									原始密码：
								</label>

								<div class="col-md-7">
									<input type="password" id='oldpsd' style='width: 260px'
										class="ui-pg-div " />
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<!-- PAGE CONTENT BEGINS -->

							<div class="form-group">
								<label class="col-md-5 control-label no-padding-left"
									for="form-field-3">
									新的密码：
								</label>

								<div class="col-md-7">
									<input type="password" id='newpsd' style='width: 260px'
										class="ui-pg-div " />
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<!-- PAGE CONTENT BEGINS -->

							<div class="form-group">
								<label class="col-md-5 control-label no-padding-left"
									for="form-field-3">
									密码确认：
								</label>

								<div class="col-md-7">
									<input type="password" id='confirmpwd' style='width: 260px'
										class="ui-pg-div " />
								</div>
							</div>
						</div>
						<div style="margin-top: 0px; font-weight: bold;">
							<div class="col-xs-12">
								<ul class="pager">
									<div class="col-md-12" style="text-align: center;">
										<li>
											<a  onclick="changepsd();">确认修改</a>
										</li>
									</div>
								</ul>


							</div>


						</div>
						<!-- /.main-content -->
					</div>
					<!-- /.main-container-inner -->
				</div>
				<!-- /.main-container -->
				<script type="text/javascript">
window.jQuery
		|| document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<"
				+ "/script>");
</script>
				<script type="text/javascript">
if ("ontouchend" in document)
	document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<"
			+ "/script>");
</script>
				<script src="{{ asset("/js/bootstrap.min.js") }}">
</script>
				<script src="{{ asset("/js/typeahead-bs2.min.js") }}">
</script>

				<script src="{{ asset("/js/date-time/bootstrap-datepicker.min.js") }}">
</script>
				<script src="{{ asset("/js/jqGrid/jquery.jqGrid.min.js") }}">
</script>
				<script src="{{ asset("/js/jqGrid/i18n/grid.locale-en.js") }}">
</script>
				<script src="{{ asset("js/jquery.maskedinput.min.js") }}">
</script>

				<script src="{{ asset("/js/jquery-ui-1.10.3.custom.min.js") }}">
</script>
				<script src="{{ asset("/js/jquery.ui.touch-punch.min.js") }}">
</script>
				<script src="{{ asset("/js/chosen.jquery.min.js") }}">
</script>
				<script src="{{ asset("/js/fuelux/fuelux.spinner.min.js") }}">
</script>
				<script src="{{ asset("/js/date-time/bootstrap-datepicker.min.js") }}">
</script>
				<script src="{{ asset("/js/date-time/bootstrap-timepicker.min.js") }}">
</script>
				<script src="{{ asset("/js/date-time/moment.min.js") }}">
</script>
				<script src="{{ asset("/js/date-time/daterangepicker.min.js") }}">
</script>
				<script src="{{ asset("/js/bootstrap-colorpicker.min.js") }}">
</script>
				<script src="{{ asset("/js/jquery.knob.min.js") }}">
</script>
				<script src="{{ asset("/js/jquery.autosize.min.js") }}">
</script>
				<script src="{{ asset("/js/jquery.inputlimiter.1.3.1.min.js") }}">
</script>
				<script src="{{ asset("/js/jquery.maskedinput.min.js") }}">
</script>
				<script src="{{ asset("/js/bootstrap-tag.min.js") }}">
</script>
				<!-- ace scripts -->

				<script src="{{ asset("/js/ace-elements.min.js") }}">
</script>
				<script src="{{ asset("/js/ace.min.js") }}">
</script>

				<script type="text/javascript">
$("#pasd").toggle();
document.getElementById("lipsd").setAttribute("class", "active");
</script>
				<script type="text/javascript">
jQuery(function($) {
	$.mask.definitions['~'] = '[+-]';
	$('.input-mask-date').mask('9999/99/99');
	$('.input-mask-phone').mask('(999) 999-9999');//可以校验电话
	$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
	$(".input-mask-product").mask("a*-999-a999", {
		placeholder : " ",
		completed : function() {
			alert("You typed the following: " + this.val());
		}
	});

});
</script>
				<script src="{{ asset("/js/bootstrap.min.js") }}">
</script>
				<script src="{{ asset("/js/typeahead-bs2.min.js") }}">
</script>


				<script src="{{ asset("/js/date-time/bootstrap-datepicker.min.js") }}">
</script>
				<script src="{{ asset("/js/jqGrid/jquery.jqGrid.min.js") }}">
</script>
				<script src="{{ asset("/js/jqGrid/i18n/grid.locale-en.js") }}">
</script>


				<div style="display: none">
					<script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540'
						language='JavaScript' charset='gb2312'>
                    </script>
				</div>
</body>

</html>
