
<!DOCTYPE html>


<html lang="en">
<head>
<title>道路扬尘源</title>

<!-- basic styles -->
	<meta name="keywords"	content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
	<meta name="description"	content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="x-ua-compatible" content="IE=Edge" />

	<link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet"/>
	<link href="{{ asset("/css/font-awesome.min.css") }}" rel="stylesheet"/>
	<link href="{{ asset("/css/font-awesome-ie7.min.css") }}" rel="stylesheet"/>
    <meta http-equiv="x-ua-compatible" content="IE=Edge" />
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
	<script src="{{ asset("/js/client.js") }}"></script>
	<script src="{{ asset("/js/savehelp.js") }}"></script>
	<link rel="stylesheet" href="{{ asset("/js/ace-ie.min.css") }}" />
	<script src="{{ asset("/js/ace-extra.min.js") }}"></script>
	<script src="{{ asset("/js/html5shiv.js") }}"></script>
	<script src="{{ asset("/js/respond.min.js") }}"></script>

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
<link rel="stylesheet" href="{{ asset("http://fonts.googleapis.com/css?family=Open+Sans:400,300") }}" />
{{--<script type="text/javascript" src="<c:url value="/widgets/simpletable/simpletable.js"/>"></script>--}}


<script type="text/javascript">
	jQuery(function($) {
		$('.check1').focus(function() {
			$('.check1').autoNumeric();
		});
	});
</script>

<script type="text/javascript">

$(document).ready(function() {

	var tep = document.getElementById("roadnull").value;
	if(tep==1){
		document.getElementById("grid1").style.display='block';
	    document.getElementById("add").style.display='none';
	    document.getElementById("headroad").style.display='block';
	}



	//var num = document.getElementById("itemroaddusti").value;
	//alert(num);
		//for ( var cur = 1; cur <= num; cur++) {
		//alert("controlMeasures" + cur);
		  //  var temp=document.getElementById("ispave"+cur).value
		    //alert(temp);
<%--		    if(temp==1){--%>
<%--		    	--%>
<%--		    document.getElementById("updateroadType1"+cur).style.display="block";--%>
<%--			document.getElementById("updateroadType2"+cur).style.display="none";--%>
<%--		    document.getElementById("roadcontrolupdate1"+cur).style.display="block";--%>
<%--			document.getElementById("roadcontrolupdate2"+cur).style.display="none";			--%>
<%--		      }--%>
<%--		    else if(temp==11){--%>
<%--		    document.getElementById("updateroadType1"+cur).style.display="none";--%>
<%--			document.getElementById("updateroadType2"+cur).style.display="block";--%>
<%--		    document.getElementById("roadcontrolupdate1"+cur).style.display="none";--%>
<%--			document.getElementById("roadcontrolupdate2"+cur).style.display="block";--%>
<%--		    }--%>
<%--		    else{--%>
<%--		    	--%>
<%--		    }--%>
<%--		   // alert(21);--%>
<%--			var conn = document.getElementById("roadcontrolMeasures"+cur).value;--%>
<%--			var finalname = "";--%>
<%--			var strs = new Array(); //定义一数组 --%>
<%--			strs = conn.split(",");--%>
<%--			//alert(strs.length);--%>
<%--			var i = 0;--%>
<%--			for (i = 0; i < strs.length; i++) {--%>
<%--				if(strs!=""){--%>
<%--					if (strs[i] == "A") {--%>
<%--					$("input[name='controlupdate1" + cur + "'][value='A']").attr(--%>
<%--							'checked', true);--%>
<%--					//$("[control=A1]").attr('checked',true);--%>
<%--				}  if (strs[i] == "B") {--%>
<%--					$("input[name='controlupdate1" + cur + "'][value='B']").attr(--%>
<%--							'checked', true);--%>
<%--				} if (strs[i] == "C") {--%>
<%--					$("input[name='controlupdate1" + cur + "'][value='C']").attr(--%>
<%--							'checked', true);--%>
<%--				} if (strs[i] == "D") {--%>
<%--					$("input[name='controlupdate1" + cur + "'][value='D']").attr(--%>
<%--							'checked', true);--%>
<%--				} if (strs[i] == "E") {--%>
<%--					$("input[name='controlupdate1" + cur + "'][value='E']").attr(--%>
<%--							'checked', true);--%>
<%--				}  if (strs[i] == "F") {--%>
<%--					$("input[name='controlupdate1" + cur + "'][value='F']").attr(--%>
<%--							'checked', true);--%>
<%--				}  if (strs[i] == "G") {--%>
<%--					$("input[name='controlupdate2" + cur + "'][value='G']").attr(--%>
<%--							'checked', true);--%>
<%--				}if (strs[i] == "H") {--%>
<%--					$("input[name='controlupdate2" + cur + "'][value='H']").attr(--%>
<%--							'checked', true);--%>
<%--				}if (strs[i] == "I") {--%>
<%--					$("input[name='controlupdate2" + cur + "'][value='I']").attr(--%>
<%--							'checked', true);--%>
<%--				}--%>
<%--				}--%>
<%--				 else {--%>
<%--				}--%>
<%--			}--%>


	});

</script>
<script type="text/javascript">


	function addinfo() {


		var companyName = document.getElementById("companyName").innerHTML;

		var pathLength = document.getElementById("pathLength").value;
		var ispave = document.getElementById("ispave").value;
		var averWidth = document.getElementById("averWidth").value;

		var averWeight = document.getElementById("averWeight").value;
		var carFlow = document.getElementById("carFlow").value;
		var averSpeed = document.getElementById("averSpeed").value;
		var clearTimeInstall = document.getElementById("clearTimeInstall").value;
		var clearTimeUninstall = document.getElementById("clearTimeUninstall").value;
		var sweepSpring = document.getElementById("sweepSpring").value;

		var sweepSummer = document.getElementById("sweepSummer").value;
		var sweepFall = document.getElementById("sweepFall").value;
		var waterTimesSpring = document.getElementById("waterTimesSpring").value;

		var waterTimesSummer = document.getElementById("waterTimesSummer").value;
		var waterTimesFall = document.getElementById("waterTimesFall").value;
		var dustSuppression = document.getElementById("dustSuppression").value;


		if(ispave==1){
        scc="1602001003";
		}
		else{
			scc="1602002000";
		}
<%--	     if(ispave==1){--%>
<%--	     var str=document.getElementsByName("new1control");--%>
<%--	     var objarray=str.length;--%>
<%--	     var controlMeasures="1";--%>
<%--	     for (var i=0;i<objarray;i++)--%>
<%--	     {--%>
<%--		  if(str[i].checked == true)--%>
<%--		    {--%>
<%--			  controlMeasures+=","+str[i].value;--%>
<%--		    }--%>
<%--	      }--%>
<%--	     }--%>
<%--	     else{--%>
<%--	     var str=document.getElementsByName("new2control");--%>
<%--	     var objarray=str.length;--%>
<%--	     var controlMeasures="11";--%>
<%--	       for (var i=0;i<objarray;i++)--%>
<%--	        {--%>
<%--		    if(str[i].checked == true)--%>
<%--		    {--%>
<%--			  controlMeasures+=","+str[i].value;--%>
<%--		    }--%>
<%--	      }--%>
<%--	     }--%>

		//alert(1);


		if(pathLength==""||ispave==""||averWeight==""||
				averSpeed==""||averWidth==""||carFlow==""||clearTimeInstall==""||
				clearTimeUninstall==""||sweepSpring==""||sweepSummer==""||sweepFall==""||
				waterTimesSpring==""||waterTimesSummer==""||waterTimesFall==""||dustSuppression==""){
			alert("红色标识为必填字段！");
				}
		else{
		$.post("ajax/FroadDustSourceTemp/save.do", {
			scccode:scc,
			companyName: companyName,

	 		pathLength : pathLength,
		 	ispave : ispave,
			averWidth : averWidth,
			averWeight : averWeight ,
			carFlow : carFlow,
			averSpeed  : averSpeed,
			clearTimeInstall : clearTimeInstall,
			clearTimeUninstall : clearTimeUninstall,
			sweepSpring : sweepSpring,
			sweepSummer : sweepSummer,
			sweepFall : sweepFall ,
			waterTimesSpring : waterTimesSpring,
			waterTimesSummer : waterTimesSummer,
			waterTimesFall : waterTimesFall ,
			dustSuppression : dustSuppression

<%--			pm25Emission:pm25Emission,--%>
<%--			pm10Emission:pm10Emission--%>

		},
				function(data) {
					var json = eval("(" + data + ")");
					if (json.flag== 1) {
						alert("道路扬尘源保存成功！");

						window.location.reload();

					} else {
						alert("道路扬尘源保存失败！");
					}

				});


		}
		}


	function deleteRoad(rId){
			//alert(12345);
	$.post("ajax/FroadDustSourceTemp/deleteRoad.do",{roadDustid:rId},function(data){
						var jsonObj = eval("(" + data + ")");
								if(jsonObj.status=="1"){
									alert("恭喜您，数据删除成功！")
									window.location.reload();
						}
							else{
							//没权限
							alert("对不起，您没有权限进行该操作！");
							}
						});
			}

</script>
	<script type="text/javascript">
	function updateInfo(cur){


		var factoryid = document.getElementById("roadfactoryid"+cur).value;
		var roadDustid = document.getElementById("roadDustid"+cur).value;
		var companyName = document.getElementById("companyName"+cur).innerHTML;
		//alert(companyName);
		var pathLength = document.getElementById("pathLength"+cur).value;
		var ispave = document.getElementById("ispave"+cur).value;

		var averWidth = document.getElementById("averWidth"+cur).value;
		var averWeight = document.getElementById("averWeight"+cur).value;
		var carFlow = document.getElementById("carFlow"+cur).value;
		var averSpeed = document.getElementById("averSpeed"+cur).value;
		var clearTimeInstall = document.getElementById("clearTimeInstall"+cur).value;

		var clearTimeUninstall = document.getElementById("clearTimeUninstall"+cur).value;
		var sweepSpring = document.getElementById("sweepSpring"+cur).value;
		var sweepSummer = document.getElementById("sweepSummer"+cur).value;
		var sweepFall = document.getElementById("sweepFall"+cur).value;
		var waterTimesSpring = document.getElementById("waterTimesSpring"+cur).value;

		var waterTimesSummer = document.getElementById("waterTimesSummer"+cur).value;
		var waterTimesFall = document.getElementById("waterTimesFall"+cur).value;
		var dustSuppression = document.getElementById("dustSuppression"+cur).value;



		if(ispave=="1"){
			//alert(4);

				scc="1602001003";
		}
		else{
			scc="1602002000";
		}

		if(pathLength==""||ispave==""||averWeight==""||
				averSpeed==""||averWidth==""||carFlow==""||clearTimeInstall==""||
				clearTimeUninstall==""||sweepSpring==""||sweepSummer==""||sweepFall==""||
				waterTimesSpring==""||waterTimesSummer==""||waterTimesFall==""||dustSuppression==""){
			   alert("红色标识为必填字段！");
			   return;
			   }
		else{

		$.post("ajax/FroadDustSourceTemp/saveClientRoad.do", {
			scccode:scc,
			factoryid:factoryid,
			roadDustid:roadDustid,
			companyName: companyName,
	 		pathLength : pathLength,
		 	ispave : ispave,

			averWidth : averWidth,
			averWeight:averWeight,
			carFlow:carFlow,
			averSpeed:averSpeed,
			clearTimeInstall : clearTimeInstall ,
			clearTimeUninstall : clearTimeUninstall,
			sweepSpring : sweepSpring,
			sweepSummer : sweepSummer,
			sweepFall : sweepFall,
			waterTimesSpring : waterTimesSpring,

			waterTimesSummer:waterTimesSummer,
			waterTimesFall:waterTimesFall,
			dustSuppression:dustSuppression

		       },function(data){
				//alert("nihao 123");
						var json = eval("(" + data + ")");
					    if(json.status==1){
						    alert("保存成功！");

					    }else{
					    	alert("保存失败！");
					    }

					});
		}

	}

	function addTable(){
				document.getElementById("grid1").style.display='block';
			    document.getElementById("add").style.display='none';
			     document.getElementById("headroad").style.display='none';
			   }




	</script>


</head>




<body onLoad="javascript:document.queryForm.reset()">
	<%@ include file="/client/header.jsp"%>

	<div class="main-container" id="main-container">
		<script type="text/javascript">
			try {
				ace.settings.check('main-container', 'fixed')
			} catch (e) {
			}
		</script>
		<div class="main-container-inner">
			<%@ include file="/client/leftnav.jsp"%>
			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs"
					style="background-color: #32B16C;height:2px;margin-top:5px">
					<script type="text/javascript">
						try {
							ace.settings.check('breadcrumbs', 'fixed')
						} catch (e) {
						}
					</script>

					<ul class="breadcrumb">
						<li><i class="icon-home home-icon"></i> <a href="#"></a>
						</li>
						<li><a href="/xjjcz/pages/FroadDustSourceTemp/loadRoaddust.do">企业道路信息</a></li>
					</ul>
					<!-- .breadcrumb -->
				</div>

			<div class="page-content">
		<form aid="queryForm" name="queryForm"
		action="<c:url value="/pages/FroadDustSourceTemp/loadRoaddust.do"/>" method="get" style="display: inline;">
			<input id="roadnull" type="hidden" value="${roadnull}"/>

		<c:forEach items="${froaddust.result}" var="roadDustPage" varStatus="status">
		<%
			itemroaddusti++;
		%>
		<div class="col-md-12" style="margin-top: 30px;  height: 40px">
			<p style="font-size: 20px; text-align: left; color: #32B16C">
				<%%>号道路扬尘源信息
			</p>
		</div>

		<input id="roadDustid<%%>" class="form-control"
			style="height: 30px; width: 170px;"
			value='${roadDustPage.roadDustid}' type="hidden" />
		<input id="roadfactoryid<%%>" class="form-control"
			style="height: 30px; width: 170px;" value='${roadDustPage.factoryid}'
			type="hidden" />

		<div class="col-md-12" style="height: 50px">

			<div class="col-md-6" style="height: 50px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						单位名称
					</label>
					<div class="col-md-7">
					<label id="companyName<%%>"
					style="font-size: 15px; margin-top: 3px;">${item.factoryName}</label>
					</div>


				</div>
			</div>
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						是否喷洒抑尘剂<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
			     <select name="dustSuppression<%%>" id="dustSuppression<%%>"
					class="form-control"  style="width:170px;height:30px;"  >
					 <option value="1"  ${roadDustPage.dustSuppression== 1 ? 'selected = "selected"' : '' }>是</option>
					 <option value="0"  ${roadDustPage.dustSuppression== 0 ? 'selected = "selected"' : '' }>否</option>

				</select>

					</div>
				</div>
			</div>

		</div>
		<div class="col-md-12" style="height: 40px">

		<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						道路长度(km)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="pathLength<%%>"  onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.pathLength}' />
					</div>
				</div>
			</div>
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						道路平均宽度(m)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="averWidth<%%>" onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.averWidth}' />
					</div>
				</div>
			</div>

		</div>

		<div class="col-md-12" style="height: 40px">


			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						平均车重(吨) <span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="averWeight<%%>"   onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.averWeight}' />
					</div>
				</div>
			</div>
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						日均车流量(辆/日)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="carFlow<%%>"   onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.carFlow}' />
					</div>
				</div>
			</div>

		</div>
          <div class="col-md-12" style="height: 40px">
              <div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						平均车速(km/h)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="averSpeed<%%>"   onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.averSpeed}' />
					</div>
				</div>
			</div>
               <div class="col-md-6" style="height: 35px">
                 <div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						吸尘清扫次数(安装真空装置)次数/天<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="clearTimeInstall<%%>"  onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.clearTimeInstall}' />
					</div>
				</div>

               </div>

		</div>
		<div class="col-md-12" style="height: 40px">
	     <div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						吸尘清扫次数(未安装真空装置)次数/天<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="clearTimeUninstall<%%>"  onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.clearTimeUninstall}' />
					</div>
				</div>
			</div>
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						春季湿扫 (次数/天)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="sweepSpring<%%>"   onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.sweepSpring}' />
					</div>
				</div>
			</div>
			</div>
		<div class="col-md-12" style="height: 40px">

			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						夏季湿扫(次数/天)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="sweepSummer<%%>" onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.sweepSummer}' />
					</div>
				</div>
			</div>
		  <div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						秋季湿扫(次数/天)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="sweepFall<%%>"  onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.sweepFall}' />
					</div>
				</div>
			</div>
		</div>
	<div class="col-md-12" style="height: 40px">

			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						春季每日洒水次数<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="waterTimesSpring<%%>"  onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.waterTimesSpring}' />
					</div>
				</div>
			</div>
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						夏季每日洒水次数<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="waterTimesSummer<%%>"  onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.waterTimesSummer}' />
					</div>
				</div>
			</div>


	</div>
	<div class="col-md-12" style="height: 40px">
	          <div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						秋季每日洒水次数<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="waterTimesFall<%%>"   onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							value='${roadDustPage.waterTimesFall}' />
					</div>
				</div>
			</div>
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						是否铺装<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
					 <select name="ispave<%%>" id="ispave<%%>"
					class="form-control"  style="width:170px;height:30px;"  >
					 <option value="1" ${roadDustPage.ispave == 1 ? 'selected = "selected"' : '' }> 是</option>
					 <option  value="11" ${roadDustPage.ispave == 11 ? 'selected = "selected"' : '' } >否</option>
					</select>

					</div>
				</div>
			</div>

	</div>



		       <div align="right" style="margin-right: 110px;">

										<input type="button" class="btn btn-primary"
											style="width: 80px; line-height: 8px; margin-left: 15px;"
											value="更新数据" id="saveCon" onclick="updateInfo(<%%>)" />
										<input type="button" class="btn btn-primary"
											style="width: 80px; line-height: 8px; margin-left: 15px;"
											value="删除" id="saveCon"
											onclick="deleteRoad('${roadDustPage.roadDustid}')" />


				</div>
	 				</c:forEach>
	 				<div class="col-md-8" style="display: none">
									<input type="text" id="itemroaddusti" class="form-control"
										style="height: 30px; width: 170px;" value='<%%>' />
						</div>

	 		        <input type="button" class="btn btn-primary"
						style="width:80px;line-height:8px;margin-left:15px;" value="新增"  id="add" onclick="addTable()"/>

			<div id="grid1" style="margin-top: 10px; display: none">
			<div class="page-header" style="margin-top: 20px; height: 40px;">
									<h1>
										<b>道路扬尘源新增</b>
									</h1>
			</div>
		<div id="headroad"  class="col-md-12" style="margin-top: 30px;  height: 40px">
			<p style="font-size: 20px; text-align: left; color: #32B16C">
				1号道路扬尘源信息
			</p>
		</div>

	 <div class="col-md-12" style="height: 50px">
			<div class="col-md-6" style="height: 50px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						单位名称
					</label>

                 <div class="col-md-7">
					<label id="companyName"
					style="font-size: 15px; margin-top: 3px;">${item.factoryName}</label>
					</div>

				</div>
			</div>
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						是否喷洒抑尘剂<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
			   <select name="dustSuppression" id="dustSuppression" class="form-control"  style="width:170px;height:30px;"  >
					           <option value="1"  >是</option>
					            <option value="0"  >否</option>
					            <select/>


					</div>
				</div>
			</div>


		</div>
		<div class="col-md-12" style="height: 40px">
		<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						道路长度(km)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="pathLength"  onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;" />
					</div>
				</div>
			</div>
		<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						道路平均宽度(m)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="averWidth" onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							 />
					</div>
				</div>
			</div>

		</div>

		<div class="col-md-12" style="height: 40px">
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						平均车重(吨)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="averWeight"   onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							 />
					</div>
				</div>
			</div>
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						日均车流量(辆/日)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="carFlow"   onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							 />
					</div>
				</div>
			</div>
		</div>
          <div class="col-md-12" style="height: 40px">
             <div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						平均车速(km/h)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="averSpeed"   onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							 />
					</div>
				</div>
			</div>
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						吸尘清扫次数(安装真空装置)次数/天<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="clearTimeInstall"   onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							 />
					</div>
				</div>
			</div>
         </div>
		<div class="col-md-12" style="height: 40px">

			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						吸尘清扫次数(未安装真空装置)次数/天<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="clearTimeUninstall"  onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							 />
					</div>
				</div>
			</div>
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						春季湿扫 (次数/天)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="sweepSpring"   onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							 />
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12" style="height: 40px">


			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						夏季湿扫(次数/天)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="sweepSummer" onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							/>
					</div>
				</div>
			</div>
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						秋季湿扫(次数/天)<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="sweepFall"  onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							 />
					</div>
				</div>
			</div>

		</div>
		<div class="col-md-12" style="height: 40px">
			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						春季每日洒水次数<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="waterTimesSpring"  onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							 />
					</div>
				</div>
			</div>

			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						夏季每日洒水次数<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="waterTimesSummer"  onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							 />
					</div>
				</div>
			</div>

		</div>

		<div class="col-md-12" style="height: 40px">

			<div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						秋季每日洒水次数<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
						<input type="text" id="waterTimesFall"   onkeyup="if(isNaN(value))execCommand('undo')"
							class="form-control" style="height: 30px; width: 170px;"
							 />
					</div>
				</div>
			</div>

			 <div class="col-md-6" style="height: 35px">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right"
						for="form-field-3">
						是否铺装<span style="font-size: 18px;color:red; ">*</span>
					</label>

					<div class="col-md-7">
					 <select name="ispave" id="ispave" class="form-control"  style="width:170px;height:30px;"
					  onchange="innitmeasureadd(this.value)" >
					  			<option value="11"  >否</option>
					 			<option value="1"  >是</option>

					<select/>

					</div>
				</div>
			</div>
		</div>

			<div align="left">
			<input type="button" class="btn btn-primary" style="width:80px;line-height:8px;margin-left:15px;" value="保存"
			id="saveRoad" onclick="addinfo()" />
			</div>

			</div>

					</div>
					<div class="row" style="height:100px;text-align:center;" >
					     <%@ include file="/client/public_end.jsp"%>
						</div>

					<!--/.gridTable -->
				</form >

				</div>
					<div class="row" style="height:100px" >
							</div>

				<!-- /.page-content -->
			</div>
			<!-- /.main-content -->
		</div>
		<!-- /.main-container-inner -->

	</div>
	<!-- /.main-container -->


	<script type="text/javascript">
		$("#set2").toggle();
		document.getElementById("roaddust").setAttribute("class","active");
	</script>
	<script type="text/javascript">
		window.jQuery
				|| document
						.write("<script src='assets/js/jquery-2.0.3.min.js'>"
								+ "<"+"/script>");
	</script>



	<script type="text/javascript">
		if ("ontouchend" in document)
			document
					.write("<script src='assets/js/jquery.mobile.custom.min.js'>"
							+ "<"+"/script>");
	</script>




	<!-- inline scripts related to this page -->
	<div style="display:none">
		<script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540'
			language='JavaScript' charset='gb2312'></script>
	</div>
</body>
</html>
