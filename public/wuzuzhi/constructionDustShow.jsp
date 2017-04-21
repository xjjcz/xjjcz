<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%@ page contentType="text/html;charset=UTF-8"%>
<%@ include file="/commons/taglibs.jsp"%>
<%@ taglib tagdir="/WEB-INF/tags/simpletable" prefix="simpletable"%> 
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%
	String path = request.getContextPath();
	String basePath = request.getScheme() + "://"
			+ request.getServerName() + ":" + request.getServerPort()
			+ path + "/";
	int itemcondusti = 0;
%>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="<%=basePath%>">
		<title>施工扬尘源</title>
		 <meta http-equiv="x-ua-compatible" content="IE=Edge" />
		<!-- basic styles -->

		<!--<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<link href="client/wuzuzhi/css/bootstrap.min.css" rel="stylesheet"
			media="screen">
		<link href="client/wuzuzhi/css/bootstrap-datetimepicker.min.css"
			rel="stylesheet" media="screen">
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
		<script src="js/savehelp.js"></script>
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
		<script src="js/savehelp.js"></script>
		<script src="js/autoNumeric.js"></script>
		<script src="js/checkhelp.js">
</script>
		<script type="text/javascript">
jQuery(function($) {
	$('.check1').focus(function() {
		$('.check1').autoNumeric();
	});
});

</script>

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js">
</script>

<script type="text/javascript">
function addTable() {
	document.getElementById("grid1").style.display = 'block';
	document.getElementById("add").style.display = 'none';
}
//判断开工日期和结束日期的大小
function compareDate(DateOne,DateTwo){     
   
var OneMonth = DateOne.substring(5,DateOne.lastIndexOf ("-"));    
var OneDay = DateOne.substring(DateOne.length,DateOne.lastIndexOf ("-")+1);    
var OneYear = DateOne.substring(0,DateOne.indexOf ("-"));    
   
var TwoMonth = DateTwo.substring(5,DateTwo.lastIndexOf ("-"));    
var TwoDay = DateTwo.substring(DateTwo.length,DateTwo.lastIndexOf ("-")+1);    
var TwoYear = DateTwo.substring(0,DateTwo.indexOf ("-"));    
   
if (Date.parse(OneMonth+"/"+OneDay+"/"+OneYear) >    
Date.parse(TwoMonth+"/"+TwoDay+"/"+TwoYear))    
{    
return true;    
}    
else   
{    
	alert("日期输入不符合实际情况，请重新填写！");
return false;    
}    
   
}   

// glh 新增一条数据
function addCon() {
	var numm=document.getElementById("itemcondusti").value;
	//alert(numm);
	//alert("890");
	//var companyName= document.getElementById("companyName").value;
	var longitude1 = document.getElementById("nlongitude1").value;
	var longitude2 = document.getElementById("nlongitude2").value;
	var longitude3 = document.getElementById("nlongitude3").value;
	var longitude4 = document.getElementById("nlongitude4").value;

	var latitude1 = document.getElementById("nlatitude1").value;
	var latitude2 = document.getElementById("nlatitude2").value;
	var latitude3 = document.getElementById("nlatitude3").value;
	var latitude4 = document.getElementById("nlatitude4").value;

	var constructionType = document.getElementById("nconstructionType").value;
	var constructState = document.getElementById("nconstructState").value;
	var constructArea = document.getElementById("nconstructArea").value;
	var finisharea = document.getElementById("nfinisharea").value;
	var nowkgarea = document.getElementById("nnowkgarea").value;
	var startdate = document.getElementById("nstartdate").value;
	var finishdate = document.getElementById("nfinishdate").value;
	
	var strMonth=document.getElementsByName("Month");
		var objarray=strMonth.length;
		var chestrMonth="";
		for (var i=0;i<objarray;i++)
		{
			  if(strMonth[i].checked == true)
			  {
			   chestrMonth+=strMonth[i].value+",";
			  }
		} 
		if(chestrMonth==""){
			chestrMonth="无";
		}
	
	var str=document.getElementsByName("control");
	var objarray=str.length;
	var controlMeasures="";
	for (var i=0;i<objarray;i++)
	{
		  if(str[i].checked == true)
		  {
			  controlMeasures+=str[i].value+",";
		  }
	}
	if(controlMeasures==""){
			controlMeasures="";
		}
	//判断字段是否为空，是否有未填写的信息
	
	//活跃年份可以为空
	if(constructionType==""){alert("施工类型未进行选择");}
	else if(constructState==""){alert("建筑施工阶段未进行选择");}
	else if(constructArea==""){alert("规划面积未填写");}
	else if(controlMeasures==""){alert("控制措施未进行选择");}
	else if(finishdate!=""&& startdate!=""){
	if(compareDate(finishdate,startdate)){
	//alert(1);companyName: companyName,scccode:scccode,
$.post("ajax/FconstructionDustSourceTemp/addCon.do", {
			
		 	longitude1 : longitude1,
			longitude2 : longitude2,
			longitude3 : longitude3,
			longitude4 : longitude4,
			latitude1 : latitude1,
	 		latitude2 : latitude2,
		 	latitude3 : latitude3,
			latitude4 : latitude4,
			 
		 	constructionType : constructionType ,
		 	constructState : constructState,
		 	constructArea  : constructArea,
		 	finisharea : finisharea,
		 	nowkgarea : nowkgarea,
			startdate : startdate,
		 	finishdate : finishdate,
		 	
			constructMonths : chestrMonth ,
			controlMeasures : controlMeasures,
		},
				function(data) {
				//alert(1345);
					
					var json = eval("(" + data + ")");
					if (json.status == 1) {
						numm++;
						alert("当前共填写数据"+numm+"条,该施工扬尘源保存成功！");
						window.location.reload();
					} else {
						alert("施工扬尘源保存失败！");
					}

				});
			
		}
	}else{
		startdate="2016-01-01"
		finishdate="2016-01-02";
		$.post("ajax/FconstructionDustSourceTemp/addCon.do", {
			
		 	longitude1 : longitude1,
			longitude2 : longitude2,
			longitude3 : longitude3,
			longitude4 : longitude4,
			latitude1 : latitude1,
	 		latitude2 : latitude2,
		 	latitude3 : latitude3,
			latitude4 : latitude4,
			 
		 	constructionType : constructionType ,
		 	constructState : constructState,
		 	constructArea  : constructArea,
		 	finisharea : finisharea,
		 	nowkgarea : nowkgarea,
			startdate : startdate,
		 	finishdate : finishdate,
		 	
			constructMonths : chestrMonth ,
			controlMeasures : controlMeasures,
		},
				function(data) {
				//alert(1345);
					var json = eval("(" + data + ")");
					if (json.status == 1) {
						numm++;
						alert("当前共填写数据"+numm+"条,该施工扬尘源保存成功！");
						window.location.reload();
					} else {
						alert("施工扬尘源保存失败！");
					}

				});
	}

}
//更新一条数据
function updateCon(item) {
//alert("updateCon");
		var dustitem=item;
		var constructDustid = document.getElementById("constructDustid"+dustitem).value;
		//var companyName = document.getElementById("companyName"+cur).value;
		var longitude1 = document.getElementById("longitude1"+dustitem).value;
		var longitude2 = document.getElementById("longitude2"+dustitem).value;
		var longitude3 = document.getElementById("longitude3"+dustitem).value;
		var longitude4 = document.getElementById("longitude4"+dustitem).value;
		
		var latitude1 = document.getElementById("latitude1"+dustitem).value;
		var latitude2 = document.getElementById("latitude2"+dustitem).value;
		var latitude3 = document.getElementById("latitude3"+dustitem).value;
		var latitude4 = document.getElementById("latitude4"+dustitem).value;
			
		var constructionType = document.getElementById("constructionType"+dustitem).value;
		var constructState = document.getElementById("constructState"+dustitem).value;
		var constructArea = document.getElementById("constructArea"+dustitem).value;
		var finisharea = document.getElementById("finisharea"+dustitem).value;
		var nowkgarea = document.getElementById("nowkgarea"+dustitem).value;
		var startdate = document.getElementById("startdate"+dustitem).value;
		var scccode=document.getElementById("scccode"+dustitem).value;
		var finishdate = document.getElementById("finishdate"+dustitem).value;
		
		//月份复选框
		var strMonth=document.getElementsByName("Month"+dustitem);
		var objarray=strMonth.length;
		var chestrMonth="";
		for (var i=0;i<objarray;i++)
		{
			  if(strMonth[i].checked == true)
			  {
			   chestrMonth+=strMonth[i].value+",";
			  }
		} 
		if(chestrMonth==""){
			chestrMonth="无";
		}
		//控制措施
		var str=document.getElementsByName("control"+dustitem);
		var objarray=str.length;
		var controlMeasures="";
		for (var i=0;i<objarray;i++)
		{
			  if(str[i].checked == true)
			  {
			   controlMeasures+=str[i].value+",";
			  }
		} 
		if(controlMeasures==""){
			controlMeasures="";
		}
		
		//判断是否有未填写的信息
		 if(constructionType==""){alert("施工类型未进行选择");}
		else if(constructState==""){alert("建筑施工阶段未进行选择");}
		else if(constructArea==""){alert("规划面积未填写");}
		else if(controlMeasures==""){alert("控制措施未进行选择");}
		else if(finishdate!=""&& startdate!=""){
			if(compareDate(finishdate,startdate)){
		//alert(1);
		//companyName: companyName,
		$.post("ajax/FconstructionDustSourceTemp/updateCon.do", {
			constructDustid:constructDustid,
		 	longitude1 : longitude1,
			longitude2 : longitude2,
			longitude3 : longitude3,
			longitude4 : longitude4,
			latitude1 : latitude1,
	 		latitude2 : latitude2,
		 	latitude3 : latitude3,
			latitude4 : latitude4,
			
		 	constructionType : constructionType ,
		 	constructState : constructState,
		 	constructArea  : constructArea,
		 	finisharea : finisharea,
		 	nowkgarea : nowkgarea,
			startdate : startdate,
			scccode:scccode,
		 	finishdate : finishdate,
			constructMonths : chestrMonth ,
			controlMeasures : controlMeasures,
		},
				function(data) {
				//alert(1345);
					var json = eval("(" + data + ")");
					if (json.status == 1) {
							alert("施工扬尘源更新成功！");
					} else {
						alert("施工扬尘源更新失败！");
					}
				});
		}
		
	}else{
		startdate="2016-01-01"
		finishdate="2016-01-02";
		$.post("ajax/FconstructionDustSourceTemp/updateCon.do", {
			constructDustid:constructDustid,
		 	longitude1 : longitude1,
			longitude2 : longitude2,
			longitude3 : longitude3,
			longitude4 : longitude4,
			latitude1 : latitude1,
	 		latitude2 : latitude2,
		 	latitude3 : latitude3,
			latitude4 : latitude4,
			
		 	constructionType : constructionType ,
		 	constructState : constructState,
		 	constructArea  : constructArea,
		 	finisharea : finisharea,
		 	nowkgarea : nowkgarea,
			startdate : startdate,
			scccode:scccode,
		 	finishdate : finishdate,
			constructMonths : chestrMonth ,
			controlMeasures : controlMeasures,
		},
				function(data) {
				//alert(1345);
					var json = eval("(" + data + ")");
					if (json.status == 1) {
							alert("施工扬尘源更新成功！");
					} else {
						alert("施工扬尘源更新失败！");
					}
				});
	}
}

	
//删除
function deleteCon(cId){
			//alert(12345);
	$.post("ajax/FconstructionDustSourceTemp/deleteCon.do",{constructDustid:cId},function(data){    
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
//glh 加载option中的内容
$(document).ready(function() {
	//判断如果page的result为空。直接调用add方法
	//alert(1);
	var	str=${page.result[0].constructArea}+" ";
	//alert(str);
	if(str==" "|| str==null)
	{
		document.getElementById("yihao").style.display = 'block';
		addTable();
	}else{
		
	};
	var num = document.getElementById("itemcondusti").value;
		for ( var cur = 1; cur <= num; cur++) {
			var conn = document.getElementById("controlMeasures" + cur).value;
			if (conn.charAt(conn.length - 1) == "、"
					|| conn.charAt(conn.length - 1) == ",") {
				conn = conn.substring(0, conn.length - 1);
			}
			//alert(conn);
			var strs = new Array(); //定义一数组 
			strs = conn.split(",");
			//alert(strs.length);
			var i = 0;
			for (i = 0; i < strs.length; i++) {
				if(strs!=""){
					if (strs[i] == "A1") {
					$("input[name='control" + cur + "'][value='A1']").attr(
							'checked', true);
					//$("[control=A1]").attr('checked',true);
				}  if (strs[i] == "A2") {
					$("input[name='control" + cur + "'][value='A2']").attr(
							'checked', true);
				} if (strs[i] == "B") {
					$("input[name='control" + cur + "'][value='B']").attr(
							'checked', true);
				} if (strs[i] == "C") {
					$("input[name='control" + cur + "'][value='C']").attr(
							'checked', true);
				} if (strs[i] == "D") {
					$("input[name='control" + cur + "'][value='D']").attr(
							'checked', true);
				}  if (strs[i] == "E") {
					$("input[name='control" + cur + "'][value='E']").attr(
							'checked', true);
				}  if (strs[i] == "F") {
					$("input[name='control" + cur + "'][value='F']").attr(
							'checked', true);
				}
				  if (strs[i] == "无") {
					$("input[name='control" + cur + "'][value='无']").attr(
							'checked', true);
				}
				
				}
				 else {
					 
				}
			}

		}
		
		//加载月份复选框情况信息
		for ( var cur = 1; cur <= num; cur++) {
			var conn = document.getElementById("constructMonths" + cur).value;
			var strs = new Array(); //定义一数组 
			strs = conn.split(",");
			var i = 0;
			for (i = 0; i < strs.length; i++) {
				if(strs!=""){
						if (strs[i] == "1") {
						$("input[name='Month" + cur + "'][value='1']").attr(
								'checked', true);
					}  if (strs[i] == "2") {
						$("input[name='Month" + cur + "'][value='2']").attr(
								'checked', true);
					} if (strs[i] == "3") {
						$("input[name='Month" + cur + "'][value='3']").attr(
								'checked', true);
					} if (strs[i] == "4") {
						$("input[name='Month" + cur + "'][value='4']").attr(
								'checked', true);
					} if (strs[i] == "5") {
						$("input[name='Month" + cur + "'][value='5']").attr(
								'checked', true);
					}  if (strs[i] == "6") {
						$("input[name='Month" + cur + "'][value='6']").attr(
								'checked', true);
					}  if (strs[i] == "7") {
						$("input[name='Month" + cur + "'][value='7']").attr(
								'checked', true);
					}if (strs[i] == "8") {
						$("input[name='Month" + cur + "'][value='8']").attr(
								'checked', true);
					}if (strs[i] == "9") {
						$("input[name='Month" + cur + "'][value='9']").attr(
								'checked', true);
					}if (strs[i] == "10") {
						$("input[name='Month" + cur + "'][value='10']").attr(
								'checked', true);
					}if (strs[i] == "11") {
						$("input[name='Month" + cur + "'][value='11']").attr(
								'checked', true);
					}if (strs[i] == "12") {
						$("input[name='Month" + cur + "'][value='12']").attr(
								'checked', true);
					}
				
				}
				 else {
				}
			}
			
		}
		
	});
</script>

</head>

	<style type="text/css">

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
				<%@ include file="/client/leftnav.jsp"%>
				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs"
						style="height: 2px; margin-top: 5px">
						<script type="text/javascript">
try {
	ace.settings.check('breadcrumbs', 'fixed')
} catch (e) {
}
</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#"></a>
							</li>
							<li>
								企业施工信息
							</li>
						</ul>
						<!-- .breadcrumb -->
					</div>

					<div class="page-content">
						<form aid="queryForm" name="queryForm"
							action="<c:url value="/pages/FconstructionDustSource/list.do"/>"
							method="get" style="display: inline;">
							<div class="gridTable">
								<c:forEach items="${page.result}" var="condustSourcePage"
									varStatus="status">
									<%
										itemcondusti++;
									%>
									<div class="col-md-12" style="margin-top: 20px; height: 40px">
										<p style="font-size: 20px; text-align: left; color: #32B16C">
											<%=itemcondusti%>号施工扬尘源信息
										</p>
									</div>
									<div class="col-md-12" style="height: 40px;display:none;">
										<div class="col-md-4" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点经度1：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="longitude1<%=itemcondusti%>"
												class="check1" 
												onblur="checklonfour(this.id,0,4)" 
												onkeyup="if(isNaN(value))execCommand('undo')"
												onafterpaste="if(isNaN(value))execCommand('undo')"  
												placeholder="73.6667~96.3000" 
												style="height: 30px; width: 170px;"
												alt="p3x3p4s"
												value='${condustSourcePage.longitude1}' />
												</div>
											</div>
										</div>
										<div class="col-md-4" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点纬度1：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="latitude1<%=itemcondusti%>"
														class="check1"
														onblur="checklatfour(this.id,0,4)" 
														onkeyup="if(isNaN(value))execCommand('undo')"
														onafterpaste="if(isNaN(value))execCommand('undo')"  
														placeholder="34.4167~48.1667"
														alt="p3x3p4s"
														style="height: 30px; width: 170px;"
														value='${condustSourcePage.latitude1}' />
												</div>
											</div>
										</div>
										<div class="col-md-4" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点经度2：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="longitude2<%=itemcondusti%>"
														 class="check1"
														 alt="p3x3p4s"
													onblur="checklonfour(this.id,1,4)" onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000" 
														style="height: 30px; width: 170px;"
														value='${condustSourcePage.longitude2}' />
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="height: 40px;display:none">
										<div class="col-md-4" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点纬度2：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="latitude2<%=itemcondusti%>"
														class="check1"
														alt="p3x3p4s"
													onblur="checklatfour(this.id,1,4)" onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="34.4167~48.1667"
														style="height: 30px; width: 170px;"
														value='${condustSourcePage.latitude2}' />
												</div>
											</div>
										</div>
										<div class="col-md-4" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点经度3：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="longitude3<%=itemcondusti%>"
														 class="check1"
														 alt="p3x3p4s"
							onblur="checklonfour(this.id,2,4)" onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000" 
														style="height: 30px; width: 170px;"
														value='${condustSourcePage.longitude3}' />
												</div>
											</div>
										</div>
										<div class="col-md-4" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点纬度3：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="latitude3<%=itemcondusti%>"
														class="check1"
														alt="p3x3p4s"
							onblur="checklatfour(this.id,2,4)" onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="34.4167~48.1667"
														style="height: 30px; width: 170px;"
														value='${condustSourcePage.latitude3}' />
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-md-12" style="height: 40px">
										<div class="col-md-6" style="height: 35px;display:none" >
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点经度4：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="longitude4<%=itemcondusti%>"
													class="check1"
													alt="p3x3p4s"
													onblur="checklonfour(this.id,3,4)"
													onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')"  
													placeholder="73.6667~96.3000" 
													style="height: 30px; width: 170px;"
													value='${condustSourcePage.longitude4}' />
												</div>
											</div>
										</div>
										<div class="col-md-6" style="height: 35px;display:none" >
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点纬度4：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="latitude4<%=itemcondusti%>"
														class="check1"
														alt="p3x3p4s"
													onblur="checklatfour(this.id,3,4)" 
													onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="34.4167~48.1667"
														style="height: 30px; width: 170px;"
														value='${condustSourcePage.latitude4}' />
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="height: 40px">
										<div class="col-md-6" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													施工类型:<a style="color: red">*</a>
												</label>

												<div class="col-md-8">
													<input type="text" id="constructionType<%=itemcondusti%>"
														class="form-control" style="height: 30px; width: 250px;"
														value='${condustSourcePage.constructionType}' readonly="readonly"/>
												</div>
											</div>
										</div>
										
										<div class="col-md-6" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													建筑施工阶段:<a style="color: red">*</a>
												</label>

												<div class="col-md-8">
													<input type="text" id="constructState<%=itemcondusti%>"
														class="form-control" style="height: 30px; width: 170px;"
														value='${condustSourcePage.constructState}' readonly="readonly" />
												</div>
											</div>
										</div>
									</div>
								

									<div class="col-md-12" style="height: 40px">
										<div class="col-md-6" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													施工规划面积(m<sup>2</sup>):
													<a style="color: red">*</a>
												</label>

												<div class="col-md-8">
													<input type="text" id="constructArea<%=itemcondusti%>"
														onkeyup="checkNum(this);" class="form-control"
														style="height: 30px; width: 250px;"
														value='${condustSourcePage.constructArea}' />
												</div>
											</div>
										</div>
										
										<div class="col-md-6" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													施工开工面积(m<sup>2</sup>):
													
												</label>

												<div class="col-md-8">
													<input type="text" id="nowkgarea<%=itemcondusti%>"
														onkeyup="checkNum(this);" class="form-control"
														style="height: 30px; width: 170px;"
														value='${condustSourcePage.nowkgarea}' />
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="height: 40px;display:none;">
										<div class="col-md-6" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													施工竣工面积(m<sup>2</sup>):
													
												</label>

												<div class="col-md-8">
													<input type="text" id="finisharea<%=itemcondusti%>"
														onkeyup="checkNum(this);" class="form-control"
														style="height: 30px; width: 170px;"
														value='${condustSourcePage.finisharea}' />
												</div>
											</div>
										</div>
										<div class="col-md-6" style="height: 35px;display:none;">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													SCC编码：
													<a style="color: red">*</a>
												</label>

												<div class="col-md-8">
													<input type="text" id="scccode<%=itemcondusti%>"
														 class="form-control"
														style="height: 30px; width: 170px;"
														value='${condustSourcePage.scccode}' readonly="readonly" />
													<input type="text" id="constructDustid<%=itemcondusti%>"
														class="form-control"
														style="height: 30px; width: 170px; display: none"
														value='${condustSourcePage.constructDustid}' />		
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-12" style="height: 40px">
										<div class="col-md-12" style="height: 35px">
											<div class="form-group">
												<label class="col-md-2 control-label no-padding-right"
													for="form-field-3" style="width:130px">
													年活动月份:
													
												</label>
											</div>
										</div>
									</div>
									
									<div class="col-md-12" style="height: 40px">
										<div class="col-md-12" style="height: 35px">
											<div class="form-group">
												<div class="col-md-12" style="width:600px;padding-left:20px;">
													<input type="text" id="constructMonths<%=itemcondusti%>"
														onkeyup="checkNum(this);" class="form-control"
														style="height: 30px; width: 170px; display: none"
														value='${condustSourcePage.constructMonths}' />
												<label><input name="Month<%=itemcondusti%>" type="checkbox" value="1" />1月</label>
												<label><input name="Month<%=itemcondusti%>" type="checkbox"value="2" />2月</label>
												<label><input name="Month<%=itemcondusti%>" type="checkbox"value="3" />3月</label>
												<label><input name="Month<%=itemcondusti%>" type="checkbox"value="4" />4月</label>
												<label><input name="Month<%=itemcondusti%>" type="checkbox"value="5" />5月</label>
												<label><input name="Month<%=itemcondusti%>" type="checkbox" value="6" />6月</label>
												<label><input name="Month<%=itemcondusti%>" type="checkbox"value="7" />7月</label>
												<label><input name="Month<%=itemcondusti%>" type="checkbox"value="8" />8月</label>
												<label><input name="Month<%=itemcondusti%>" type="checkbox"value="9" />9月</label>
												<label><input name="Month<%=itemcondusti%>" type="checkbox"value="10" />10月</label>
												<label><input name="Month<%=itemcondusti%>" type="checkbox"value="11" />11月</label>
												<label><input name="Month<%=itemcondusti%>" type="checkbox"value="12" />12月</label>
												
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-12" style="height: 35px">
										<div class="col-md-12" style="height: 35px">
											<div class="form-group" >
											<label class="col-md-2 control-label no-padding-right"for="form-field-3" style="width:130px">
												控制措施:<a style="color: red">*</a>
											</label>
											</div>
										</div>
									</div>
									
									<div class="col-md-12" style="height: 35px">
										<div class="col-md-12" style="height: 35px">
											<div class="form-group" >
												<div class="col-md-12" style="width:700px;padding-left:20px;">
												<input type="text" id="controlMeasures<%=itemcondusti%>"
														onkeyup="checkNum(this);" class="form-control"
														style="height: 30px; width: 170px; display: none"
														value='${condustSourcePage.controlMeasures}' />
													<label><input name="control<%=itemcondusti%>" type="checkbox" value="A1" />1.8m硬质围挡</label>
													<label><input name="control<%=itemcondusti%>" type="checkbox" value="A2" />2.4m硬质围挡</label>
													<label><input name="control<%=itemcondusti%>" type="checkbox" value="B" />化学抑尘剂</label>
													<label><input name="control<%=itemcondusti%>" type="checkbox" value="C" />覆盖防尘布</label>
													<label><input name="control<%=itemcondusti%>" type="checkbox" value="E" />路面铺装和洒水</label>
													<label><input name="control<%=itemcondusti%>" type="checkbox" value="F" />封闭</label>
													<label><input name="control<%=itemcondusti%>" type="checkbox" value="无" />无控制措施</label>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-12" style="height: 40px">
										<div class="col-md-10" style="height: 35px">
											<div class="form-group" style="width:400px">
												<label class="col-md-3 control-label no-padding-right"
													for="form-field-3" style="width:130px">
													施工开始日期：
													
												</label>
												<div class="input-group date form_date "
													style="width: 200px" data-date="" data-date-format=""
													data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input id="startdate<%=itemcondusti%>" class="form-control"
														style="height: 30px; width: 170px;" size="16" type="text"
														value='${condustSourcePage.startdate}' readonly>
													<span class="input-group-addon"><span
														class="glyphicon glyphicon-remove"></span> </span>
													<span class="input-group-addon"><span
														class="glyphicon glyphicon-calendar"></span> </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="height: 40px">
										<div class="col-md-10" style="height: 35px">
											<div class="form-group" style="width:400px">
												<label class="col-md-3 control-label no-padding-right"
													for="form-field-3" style="width:130px">
													施工结束日期：
													
												</label>
												<div class="input-group date form_date "
													style="width: 200px" data-date="" data-date-format=""
													data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input id="finishdate<%=itemcondusti%>"
														class="form-control" style="height: 30px; width: 170px;"
														size="16" type="text"
														value='${condustSourcePage.finishdate}' readonly>
													<span class="input-group-addon"><span
														class="glyphicon glyphicon-remove"></span> </span>
													<span class="input-group-addon"><span
														class="glyphicon glyphicon-calendar"></span> </span>
												</div>
											</div>
										</div>
									</div>


									<div align="right" style="margin-right: 110px;">
										<input type="button" class="btn btn-primary"
											style="width: 80px; line-height: 8px; margin-left: 15px;"
											value="更新数据" id="saveCon"
											onclick="updateCon(<%=itemcondusti%>)" />
										<input type="button" class="btn btn-primary"
											style="width: 80px; line-height: 8px; margin-left: 15px;"
											value="删除" id="saveCon"
											onclick="deleteCon('${condustSourcePage.constructDustid}')" />
									</div>
								</c:forEach>
								<div class="col-md-8" style="display: none">
									<input type="text" id="itemcondusti" class="form-control"
										style="height: 30px; width: 170px;" value='<%=itemcondusti%>' />
								</div>


								<div id="grid1" style="margin-top: 10px; display: none">
									<div class="page-header"
										style="margin-top: 20px; height: 40px；">
										<h1>
											<b>施工扬尘源新增</b>
										</h1>
									</div>
									<div class="col-md-12" id="yihao" style="margin-top: 20px; height: 40px;display:none;">
										<p style="font-size: 20px; text-align: left; color: #32B16C">
											1号施工扬尘源信息
										</p>
									</div>
									<div class="col-md-12" style="height: 40px;display:none" >
										<div class="col-md-4" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点经度1：
													
												</label>
												<div class="col-md-8">
													<input type="text" id="nlongitude1"
													class="check1" alt="p3x3p4s"
													onblur="checklonfour(this.id,0,4)" style="height: 25px; margin-top: 3px; width: 170px;"
													onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000" />
												</div>
											</div>
										</div>
										<div class="col-md-4" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点纬度1：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="nlatitude1"
													onblur="checklatfour(this.id,0,4)"   
													class="check1" 
													alt="p3x3p4s"
													onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')" 
													placeholder="34.4167~48.1667"
													style="height: 25px; margin-top: 3px; width: 170px;"
													 />
												</div>
											</div>
										</div>
										<div class="col-md-4" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点经度2：
												
												</label>

												<div class="col-md-8">
													<input type="text" id="nlongitude2"
													class="check1" alt="p3x3p4s"
													onblur="checklonfour(this.id,1,4)" style="height: 25px; margin-top: 3px; width: 170px;"
													onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000"/>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="height: 40px;display:none">
										<div class="col-md-4" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点纬度2：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="nlatitude2"
													onblur="checklatfour(this.id,1,4)"   class="check1" alt="p3x3p4s"
													style="height: 25px; margin-top: 3px; width: 170px;"
													onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667" />
												</div>
											</div>
										</div>
										<div class="col-md-4" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点经度3：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="nlongitude3"
													class="check1" alt="p3x3p4s"
													onblur="checklonfour(this.id,2,4)" style="height: 25px; margin-top: 3px; width: 170px;"
													onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000" />
												</div>
											</div>
										</div>
										<div class="col-md-4" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点纬度3：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="nlatitude3"
													onblur="checklatfour(this.id,2,4)"   class="check1" alt="p3x3p4s"
													style="height: 25px; margin-top: 3px; width: 170px;"
													onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667" />
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="height: 40px">
										<div class="col-md-4" style="height: 35px;display:none">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点经度4：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="nlongitude4"
													class="check1" alt="p3x3p4s"
													onblur="checklonfour(this.id,3,4)" style="height: 25px; margin-top: 3px; width: 170px;"
													onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000" />
												</div>
											</div>
										</div>
										<div class="col-md-4" style="height: 35px;display:none" >
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													拐点纬度4：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="nlatitude4"
													onblur="checklatfour(this.id,3,4)"   class="check1" alt="p3x3p4s"
													style="height: 25px; margin-top: 3px; width: 170px;"
													onkeyup="if(isNaN(value))execCommand('undo')"
													onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667" />
												</div>
											</div>
										</div>
										<div class="col-md-6" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													施工类型:<a style="color: red">*</a>
												</label>

												<div class="col-md-8">
													<!--<input type="text" id="nconstructionType"
														class="form-control" style="height: 30px; width: 170px;" />
													--><select name="constructType" id="nconstructionType" class="form-control"  style="width:170px;height:30px;">
														<option value=""></option> 
														<option value="城市市政基础设施建设">城市市政基础设施建设</option> 
														<option value="建筑物建造与拆迁建筑物建造与拆迁">建筑物建造与拆迁</option> 
														<option value="设备安装工程">设备安装工程</option> 
														<option value="装饰修缮工程">装饰修缮工程</option> 						    	
													</select> 
												</div>
											</div>
										</div>
										
										<div class="col-md-6" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													建筑施工阶段:<a style="color: red">*</a>
												</label>

												<div class="col-md-8">
													<!--<input type="text" id="nconstructState"
														class="form-control" style="height: 30px; width: 170px;" />
													--><select name="constructStage" id="nconstructState" class="form-control"   style="width:170px;height:30px;">
														<option value=""></option> 
														<option value="未分类">未分类</option> 
														<option value="土方开挖">土方开挖</option> 
														<option value="地基建设">地基建设</option> 
														<option value="土方回填">土方回填</option> 		
														<option value="主体建设">主体建设</option>
														<option value="装饰装修">装饰装修</option>				    		
													</select>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-12" style="height: 40px">
										<div class="col-md-6" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													施工规划面积(m<sup>2</sup>):
													<a style="color: red">*</a>
												</label>

												<div class="col-md-8">
													<input type="text" id="nconstructArea"
														onkeyup="checkNum(this);" class="form-control"
														style="height: 30px; width: 170px;" />
												</div>
											</div>
										</div>
										
										<div class="col-md-6" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													施工开工面积(m<sup>2</sup>):
													
												</label>

												<div class="col-md-8">
													<input type="text" id="nnowkgarea"
													onkeyup="checkNum(this);" class="form-control"
													style="height: 30px; width: 170px;" />
												</div>
											</div>
										</div>
										
										
										
									</div>
									<div class="col-md-12" style="height:40px;display:none;">
										<div class="col-md-6" style="height: 35px">
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													施工竣工面积(m<sup>2</sup>)：
													
												</label>

												<div class="col-md-8">
													<input type="text" id="nfinisharea"
													 onkeyup="checkNum(this);" class="form-control"
														style="height: 30px; width: 170px;" />
												</div>
											</div>
										</div>
										

										<div class="col-md-4" style="height: 35px;display:none;" >
											<div class="form-group">
												<label class="col-md-4 control-label no-padding-right"
													for="form-field-3">
													SCC编码：
													<a style="color: red">*</a>
												</label>

												<div class="col-md-8">
													<select name="nscccode" id="nscccode" class="form-control"   style="width:170px;height:30px;">
														<option value="1603001000">1603001000</option> 
														<option value="1603001002">1603001002</option> 
														<option value="1603001003">1603001003</option> 
														<option value="1603001004">1603001004</option> 
														<option value="1603001005">1603001005</option> 
														<option value="1603002000">1603002000</option> 
														<option value="1603002001">1603002001</option> 
														<option value="1603002002">1603002002</option> 
														<option value="1603002003">1603002003</option> 
														<option value="1603002004">1603002004</option> 
														<option value="1603002005">1603002005</option> 
														<option value="1603003000">1603003000</option> 
														<option value="1603003001">1603003001</option> 
														<option value="1603003002">1603003002</option> 
														<option value="1603003003">1603003003</option> 
														<option value="1603003004">1603003004</option> 
														<option value="1603003005">1603003005</option> 
														<option value="1603004000">1603004000</option> 
														<option value="1603004001">1603004001</option> 
														<option value="1603004002">1603004002</option> 
														<option value="1603004003">1603004003</option> 
														<option value="1603004004">1603004004</option> 
														<option value="1603004005">1603004005</option> 
													</select>	
														
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-md-12" style="height: 40px">
										<div class="col-md-12" style="height: 35px">
											<div class="form-group">
												<label class="col-md-2 control-label no-padding-right"
													for="form-field-3" style="width:130px">
													年活动月份:		
												</label>
											</div>
										</div>
									
									</div>
									
									<div class="col-md-12" style="height: 40px">
										<div class="col-md-12" style="height: 35px">
											<div class="form-group">
												<div class="col-md-12" style="width:600px;padding-left:20px;">
												<label><input name="Month" type="checkbox" value="1" />1月</label>
												<label><input name="Month" type="checkbox"value="2" />2月</label>
												<label><input name="Month" type="checkbox"value="3" />3月</label>
												<label><input name="Month" type="checkbox"value="4" />4月</label>
												<label><input name="Month" type="checkbox"value="5" />5月</label>
												<label><input name="Month" type="checkbox" value="6" />6月</label>
												<label><input name="Month" type="checkbox"value="7" />7月</label>
												<label><input name="Month" type="checkbox"value="8" />8月</label>
												<label><input name="Month" type="checkbox"value="9" />9月</label>
												<label><input name="Month" type="checkbox"value="10" />10月</label>
												<label><input name="Month" type="checkbox"value="11" />11月</label>
												<label><input name="Month" type="checkbox"value="12" />12月</label>
												</div>
											</div>
										</div>
									
									</div>
									
									<div class="col-md-12" style="height: 35px">
										<div class="col-md-12" style="height: 35px;">
											<div class="form-group" >
											<label class="col-md-2 control-label no-padding-right"for="form-field-3" style="width:130px">
												控制措施:<a style="color: red">*</a>
											</label>
												
											</div>
										</div>
									</div>
									
									<div class="col-md-12" style="height: 35px">
										<div class="col-md-12" style="height: 35px;">
											<div class="form-group" >
											
												<div class="col-md-12" style="width:700px;padding-left:20px;">
													<label><input name="control" type="checkbox" value="A1" />1.8m硬质围挡</label>
													<label><input name="control" type="checkbox" value="A2" />2.4m硬质围挡</label>
													<label><input name="control" type="checkbox" value="B" />化学抑尘剂</label>
													<label><input name="control" type="checkbox" value="C" />覆盖防尘布</label>
													<label><input name="control" type="checkbox" value="E" />路面铺装和洒水</label>
													<label><input name="control" type="checkbox" value="F" />封闭</label>
													<label><input name="control" type="checkbox" value="无" />无控制措施</label>
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-md-12" style="height: 40px">
										<div class="col-md-10" style="height: 35px">
											<div class="form-group" style="width:400px">
												<label class="col-md-3 control-label no-padding-right"
													for="form-field-3" style="width:130px">
													施工开始日期：
													
												</label>
												<div class="input-group date form_date "
													style="width: 200px" data-date="" data-date-format=""
													data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input id="nstartdate" class="form-control"
														style="height: 30px; width: 170px;" size="16" type="text"
														value="" readonly>
													<span class="input-group-addon"><span
														class="glyphicon glyphicon-remove"></span> </span>
													<span class="input-group-addon"><span
														class="glyphicon glyphicon-calendar"></span> </span>
												</div>
											</div>
										</div>

									</div>
									
									
									<div class="col-md-12" style="height: 40px">
										<div class="col-md-10" style="height: 35px">
											<div class="form-group" style="width:400px">
												<label class="col-md-3 control-label no-padding-right"
													for="form-field-3" style="width:130px">
													施工结束日期：
													
												</label>


												<div class="input-group date form_date "
													style="width: 200px" data-date="" data-date-format=""
													data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input id="nfinishdate" class="form-control"
														style="height: 30px; width: 170px;" size="16" type="text"
														value="" readonly>
													<span class="input-group-addon"><span
														class="glyphicon glyphicon-remove"></span> </span>
													<span class="input-group-addon"><span
														class="glyphicon glyphicon-calendar"></span> </span>
												</div>
											</div>
										</div>

									</div>

									<div align="left">
										<input type="button" class="btn btn-primary"
											style="width: 80px; line-height: 8px; margin-left: 15px;"
											value="保存" onclick="addCon()" />
									</div>
								</div>

								<div style="text-align: center; width: 100%;display: none">
									<simpletable:pageToolbar page="${page}"></simpletable:pageToolbar>
								</div>
								<div align="left">
									<input type="button" class="btn btn-primary"
										style="width: 80px; line-height: 8px; margin-left: 15px;"
										value="新增" id="add" onclick="addTable()"/>
								</div>
							</div>
							<!--/.gridTable -->
							<div class="row" style="height:60px;text-align:center;" >
							    <%@ include file="/client/public_end.jsp"%>
							</div>
							
						</form>
					</div>
					<!-- /.page-content -->
				</div>
				<!-- /.main-content -->
			</div>
			<!-- /.main-container-inner -->

		</div>
		<!-- /.main-container -->

		<script type="text/javascript"
			src="client/wuzuzhi/jquery/jquery-1.8.3.min.js" charset="UTF-8">
</script>
		<script type="text/javascript"
			src="client/wuzuzhi/js/bootstrap.min.js">
</script>
		<script type="text/javascript"
			src="client/wuzuzhi/js/bootstrap-datetimepicker.js" charset="UTF-8">
</script>
		<script type="text/javascript"
			src="client/wuzuzhi/js/bootstrap-datetimepicker.zh-CN.js"
			charset="UTF-8">
</script>
		<script type="text/javascript">
$(".form_date").datetimepicker( {
	language : 'zh-CN',
	weekStart : 1,
	todayBtn : 1,
	autoclose : 1,
	todayHighlight : 1,
	startView : 2,
	minView : 2,
	forceParse : 0
});
</script>

		<script type="text/javascript">
$("#set2").toggle();
document.getElementById("condust").setAttribute("class", "active");
</script>
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

		<!-- inline scripts related to this page -->
		<div style="display: none">
			<script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540'
				language='JavaScript' charset='gb2312'>
</script>
		</div>
	</body>
</html>
