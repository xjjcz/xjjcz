<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
		<title>锅炉信息</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="x-ua-compatible" content="IE=Edge" />
		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet"
			href="assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.css" />
		<link rel="stylesheet" href="assets/css/datepicker.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="assets/css/colorpicker.css" />

		<!-- fonts -->

		<link rel="stylesheet"
			href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<script src="js/client.js">
</script>
		<script type="text/javascript"
			src="<c:url value="/widgets/simpletable/simpletable.js"/>">
</script>
		<script src="js/jquery-1.7.2.min.js">
</script>
		<script src="js/autoNumeric.js">
</script>
		<script src="js/checkhelp.js">
</script>
		<script src="js/scchelp.js">
</script>
		<script type="text/javascript">
jQuery(function($) {
	$('.check1').focus(function() {
		$('.check1').autoNumeric();
	});
});
</script>
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js">
</script>

		<script type="text/javascript">

/*$(document).ready(
		function() {

			clientScc2("10", "tboilerFunction", "tboilerFueltype", 1);
			var tboilerFuelunit = '${totalboilertemp.tboilerFuelunit}';
			$("#tboilerFuelunit").val(tboilerFuelunit);
			$("#tboilerFuelunit option[value='" + tboilerFuelunit + "']").attr(
					"selected", true);
			//alert(document.getElementById(material_name1).innerHTML);

		});*/
function changevalue() {
	var myselect = document.getElementById("fueltype").value;
	if (myselect == "燃气") {
		document.getElementById("fuelAusageunit").value = "万立方米";
	} else {
		document.getElementById("fuelAusageunit").value = "吨";
	}
}
function cancel() {
	if (window.confirm(alertold)) {
		window.location.href = "";
	}
}
function addsaveinfo(page, source) {
	//alert(1);
	var m_alert = '${alert}';
	var m_alert = null;
	if (source == "stationary") {
		m_alert = '${totalboilerexsit}';
	} else if (source == "product") {
		m_alert = '${totaldeviceexsit}';
	} else if (source == "procedure") {
		m_alert = '${totalkilnexsit}';
	}

	saveinfo(page, source, 'stationary', m_alert);
}
function checkvalue(witch) {
	var ids = new Array();
	var contents = new Array();
	return checkall(witch, ids, contents);
}
function jumpsave(source) {
	var m_alert = '${alert}';
	return jumpandsave(source, 'stationary', m_alert);
}
function ischanged(name) {
			document.getElementById("malert").value = 1;
			$('#m_alert').show();
		}
function updatedb() {
	// var tboilerTons=document.getElementById("tboilerTons").value;


	if (!checkvalue(1)) {
		return;
	}
	var malert=document.getElementById("malert").value;
	        if(malert==0){
	        	alert("提交数据库成功!");
	        	return;
	        }
	//var tboilerFunction = document.getElementById("tboilerFunction").value;
	//var tboilerFueltype = document.getElementById("tboilerFueltype").value;
	var tboilerFunctionDec = $("#tboilerFunction").find("option:selected")
			.text();
	var tboilerFueltypeDec = $("#tboilerFueltype").find("option:selected")
			.text();
	var janUseamount = document.getElementById("janUseamount").value;
	var febUseamount = document.getElementById("febUseamount").value;
	var marUseamount = document.getElementById("marUseamount").value;
	var aprUseamount = document.getElementById("aprUseamount").value;
	var mayUseamount = document.getElementById("mayUseamount").value;
	var juneUseamount = document.getElementById("juneUseamount").value;
	var julyUseamount = document.getElementById("julyUseamount").value;

	var augUseamount = document.getElementById("augUseamount").value;
	var septUseamount = document.getElementById("septUseamount").value;

	var octUseAmount = document.getElementById("octUseAmount").value;
	var novUseamount = document.getElementById("novUseamount").value;
	var decUseamount = document.getElementById("decUseamount").value;
	var tboilerFuelunit = document.getElementById("tboilerFuelunit").value;
	var tboilerFuelausage = document.getElementById("tboilerFuelausage").value;
	var tboilerTons = document.getElementById("tboilerTons").value;
	// var tboilerFuelunit=document.getElementById("tboilerFuelunit").value;
	$.post("ajax/TotalBoilerTemp/savetotal.do", {

		tboilerFuelausage : tboilerFuelausage,
		tboilerFuelunit : tboilerFuelunit,
		tboilerFunctionDec : tboilerFunctionDec,
		tboilerFueltypeDec : tboilerFueltypeDec,
		janUseamount : janUseamount,
		tboilerTons : tboilerTons,
		febUseamount : febUseamount,
		marUseamount : marUseamount,
		aprUseamount : aprUseamount,
		mayUseamount : mayUseamount,
		juneUseamount : juneUseamount,
		julyUseamount : julyUseamount,
		augUseamount : augUseamount,
		septUseamount : septUseamount,
		octUseAmount : octUseAmount,
		novUseamount : novUseamount,
		decUseamount : decUseamount
	}, function(data) {
		var json = eval("(" + data + ")");
		if (json.sys_code == "suc") {
			alert("提交数据库成功!");
		}
	});
}
</script>





		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>

	<style type="text/css">
.page-header h1 {
	padding: 0;
	margin: 0 8px;
	font-size: 24px;
	font-weight: lighter;
	color: #32B16C;
}

.page-header h1 small {
	margin: 0 6px;
	font-size: 14px;
	font-weight: normal;
	color: #32B16C;
}
</style>

	<body>
		<%@ include file="/client/header.jsp"%>



		<div class="main-container" id="main-container">
			<script type="text/javascript">
try {
	ace.settings.check('main-container', 'fixed')
} catch (e) {
}
</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#"> <span
					class="menu-text"></span> </a>
				<%@ include file="/client/leftnav.jsp"%>

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
								<a href="#">${item.factoryName}</a>
							</li>
							<li>
								总锅炉信息
							</li>
						</ul>
						<!-- .breadcrumb -->

                    </div>

						<div class="page-content">

							<div class="page-header">
								<h1>
									<b>企业信息</b>
									<small> <i class="icon-double-angle-right"></i> <b>概要信息</b>
									</small>
								</h1>
							</div>
							<!-- /.page-header -->
							<%@ include file="/client/public_com.jsp"%>
							<div class="page-header" style="margin-top: 50px;">
								<h1>
									<b>固定燃烧源</b>

									<small> <i class="icon-double-angle-right"></i> <b>基础信息</b>
									</small>
								</h1>
							</div>
							<!-- /.page-header -->

							<div class="row" style="height: 40px;">
								<!-- PAGE CONTENT BEGINS -->


								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-4 control-label no-padding-right"
											for="form-field-1">
											锅炉总数：
										</label>

										<div class="col-md-8">
											<label
												style="font-size: 16px; font-family: '楷体'; font-weight: bold; margin-top: 2px;">
												${totalpagesboiler}
											</label>
										</div>
									</div>

								</div>

					</div>
				</div>
				<!-- /.page-content -->
			</div>
			<!-- /.main-content -->
		</div>
		<!-- /.main-container-inner -->



		<!-- /.main-container -->
		<script type="text/javascript">
$("#station").toggle();
//$("#fabrinfo").toggle();
document.getElementById("stationinfo").setAttribute("class", "active");
</script>
		<!-- basic scripts -->

		<!--[if !IE]> -->



		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
window.jQuery
		|| document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<"
				+ "/script>");
</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
if ("ontouchend" in document)
	document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<"
			+ "/script>");
</script>
		<script src="assets/js/bootstrap.min.js">
</script>
		<script src="assets/js/typeahead-bs2.min.js">
</script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js">
</script>
		<script src="assets/js/ace.min.js">
</script>

	</body>
</html>
