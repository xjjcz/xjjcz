<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib tagdir="/WEB-INF/tags/simpletable" prefix="simpletable"%>
<%@ include file="/commons/taglibs.jsp"%>

<%
	String path = request.getContextPath();
	String basePath = request.getScheme() + "://"
			+ request.getServerName() + ":" + request.getServerPort()
			+ path + "/";
%>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="<%=basePath%>">
		<title>无组织车间</title>
		 <meta http-equiv="x-ua-compatible" content="IE=Edge" />
		<meta name="keywords"
			content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description"
			content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
		<link rel="stylesheet" href="assets/css/datepicker.css" />
		<link rel="stylesheet" href="assets/css/ui.jqgrid.css" />


		<!-- fonts -->

		<%--		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />--%>

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
       
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
        <script src="js/savehelp.js"></script>
		<script src="js/client.js"></script>
		<script src="assets/js/ace-extra.min.js"></script>
	

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<style type="text/css">
input[disabled] {
     color: #fff!important;
}
.btn[disabled]{
	opacity: 1;
}
</style>
	<body>
		<!--<script src="assets/js/jquery.maskedinput.min.js">
</script>
		--><script src="js/jquery-1.7.2.min.js" type="text/javascript">
</script>
		<script src="js/client.js">
</script>
		<script
			src="http://apps.bdimg.com/libs/fancybox/2.1.5/jquery.fancybox.pack.js"
			type="text/javascript">
</script>
		<%@ include file="/client/header.jsp"%>
		<script type="text/javascript" src="js/autoNumeric.js">
</script>
		<script src="js/shihua.js">
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

function addRow() {

	var tabObj = document.getElementById("grid1");//获取添加数据的表格
	var rowsNum = tabObj.rows.length; //获取当前行数
	var colsNum = tabObj.rows[rowsNum - 1].cells.length;//获取行的列数

	var td = new Array(colsNum);
	var myNewRow = tabObj.insertRow(rowsNum);//插入新行

	for ( var i = 0; i < 6; i++) {
		td[i] = myNewRow.insertCell(i);
//		if (i == 0)
//			td[i].innerHTML = "<input type='checkbox' name='ischeck' id='chkArr'  />";
//		else
		 if (i == 5) {
		 td[i].innerHTML = "<input  name='123' id='1'  style='width:60px' type='button' value='保存' onclick='savepage(-1)'/>";
			//td[i].innerHTML = "<span style='width:100px' id='tt'  class='ui-pg-div' onclick='savepage(-1)' ><span class='ui-icon icon-refresh green'></span></span>";
		} else {

			td[i].innerHTML = "<input  name='chkArr' id='newadd'  style='width:60px' />";

		}

	}

	document.getElementById("add").disabled = true;
}
//删除所选中的行，且直接删除数据库中的数据
function deletejspresult(wsid) {

	var chkObj = document.getElementsByName("ischeck");//???
	var tabObj = document.getElementById("grid1");

	for ( var k = 0; k <= tabObj.rows.length; k++) {

		if (chkObj[k].value == wsid) {

			tabObj.deleteRow(k + 1);
			return;

		}
	}
	return;
}
function batchDelete(action, checkboxName, form) {

	if (!hasOneChecked(checkboxName)) {
		alert('请选择要操作的对象!');
		return;
	}
	if (confirm('确定执行[删除]操作?')) {

		form.action = action;
		form.submit();

	}
}
//单个删除
function oneDelete(wsid) {

	if (confirm('确定执行[删除]操作?')) {
		//deletejspresult(wsid);

		$.post("ajax/FnoOrganizationWorkshopDischargeTemp/onedelete.do", {
			wsid : wsid
		}, function(data) {
			var jsonObj = eval("(" + data + ")");
			var flag1 = jsonObj.flag;
			if (flag1 == 1) {
				alert("删除成功!");
				 window.location.reload();
			} else {
				alert("删除失败!");
			}
		});

	}
}

function hasOneChecked(name) {
	var items = document.getElementsByName(name);
	if (items.length > 0) {
		for ( var i = 0; i < items.length; i++) {
			if (items[i].checked == true) {
				return true;
			}
		}
	} else {
		if (items.checked == true) {
			return true;
		}
	}
	return false;
}

function modify(wsid){
				$('#edit'+wsid).hide();	
				$('#save'+wsid).show();
				 var tds=document.getElementsByName(wsid);
				 for (i =0 ; i <7; i++){
					
						tds[i].innerHTML="<input style='width:60px'  name='modify"+wsid+"' value="+tds[i].innerHTML+">";

				 }
				 //点击编辑后，编辑按钮消失，出现保存按钮
				
 
			}
			
		//判断一个数是不是小数
        function isNum(s) {
			 var regu = "^([0-9]*[.0-9])$"; // 小数测试
			 var re = new RegExp(regu);
			 if (s.search(re) != -1)
			  return true;
			 else
			  return false;
		}
				//验证纬度范围
        function checklat(x){
        //alert("验证纬度");
		  		var pphone=x;
		     	if(pphone!=''){
					if(isNaN(pphone)){
						alert("纬度必须是数字，请重新输入！");
						return false;
					}else{
						if(isNum(pphone)|| pphone.toString().split(".")[1].length<4){
		     			  alert("纬度必须是数字且准确到小数点后四位，请重新输入！");
		     			  return false ;
		     			// document.getElementById(x).focus();
		     		}else{
		     			if (pphone>34.4167&&pphone<48.1667){
		     				return true;				         
						}
						else{
							alert("您输入的纬度超出填写范围34.4167~48.1667，请重新输入！");
							return false;
						    //document.getElementById(x).focus();						  
							}
						}
						return false;
						
					}
					
		     		
				//34.37~49.55
					
		     	}
		     	return  false;
			}
		
		//验证经度度范围93.68~96.30"
		function checklon(x){
		  		var pphone=x;
		     	if(pphone!=''){
					if(isNaN(pphone)){
						alert("经度必须是数字，请重新输入！");
						return false;
					}else{
							if(isNum(pphone)|| pphone.toString().split(".")[1].length<4){
							  alert("经度必须是数字且准确到小数点后四位，请重新输入！");
							  return false;
							 //document.getElementById(x).focus();
						}else{
							if (pphone>73.6667&&pphone<96.3000){
								return true;
							}
							else{
							  alert("您输入的经度超出填写范围73.6667~96.3000，请重新输入！");
							  return false ;
							 
							}
						}
							return false;
							
					}
		     		
		  			
				//34.37~49.55
				}
				return false;
			}
					
	
			
			//保存完成后，新增按钮点亮，一次只允许添加一行
			function savepage (wsid){
				//用js提取页面中值			
				if (wsid==-1)
				{
					var elms = document.getElementsByName("chkArr");
					var array = new Array(elms.length);
					for( var i=0;i<5;i++){
						array[i]=elms[i].value;
						
				 	}
					

				}
				
				else{
					var elms = document.getElementsByName("modify"+wsid);
					
					var array = new Array(elms.length);
					for( var i=0;i<elms.length;i++){
							array[i]=elms[i].value;
					 }
					
				}
				
				if(isNaN(array[0])){
			         alert("车间编号必须输入数字！");
			         return;
			     }else if(isNaN(array[4])){
			         alert("车间面积必须输入数字！");
			         return;
			     }else if(array[4].length==0){
				      alert("车间面积不能为空！");
				      return;
				}else if(array[0].length==0){
				      alert("车间编号不能为空！");
				      return;
				}
				else {
					if(array[1].length!=0){ 
						if(checklon(array[1]));//检查
						else return ;
					}
					 if(array[2].length!=0){
					// alert("纬度检查");
						//如果检查不通过，直接return;
						if(checklat(array[2]));
					 	else return ;
					 }   
					$.post("ajax/FnoOrganizationWorkshopDischargeTemp/save.do",{
				                                            wsid:wsid, 
														  workshopid:array[0],
														  longitude:array[1],
														  latitude:array[2],
														  productionUse:array[3],
														  workshopArea:array[4]
														  
															  },function(data){    
															 
														  var jsonObj = eval("(" + data + ")"); 
														if(jsonObj.saveflag==1){
														alert("保存成功！");
														 window.location.reload();
														}
														  if(jsonObj.status==1){//1为新增
														 
											                  //把返回的wsid给页面赋值
											                  
											                  var tabObj=document.getElementById("grid1");//获取添加数据的表格

											                  tabObj.deleteRow(tabObj.rows.length-1);//插入新行
											                  
											                  var myNewRow = tabObj.insertRow(tabObj.rows.length);//插入新行
											                   
											                  var td=new Array(5);
															  
											                  for(var i = 0 ; i < 6 ; i ++){
					  												 td[i]=myNewRow.insertCell(i);
					  												
															  
													   			 if(i==5){
													   				
													   				td[i].innerHTML="<span id='edit"+jsonObj.wsid+"'   class='ui-pg-div' onclick='modify("+jsonObj.wsid+")' ><span class='ui-icon ui-icon-pencil red'></span></span>" +
													   				"<span id='save"+jsonObj.wsid+"'  style='display:none;' class='ui-pg-div' onclick='savepage("+jsonObj.wsid+")'><span class='ui-icon icon-refresh green'></span></span>" +
													   				"<span id='delete"+jsonObj.wsid+"'  class='ui-pg-div' onclick='oneDelete("+jsonObj.wsid+")'><span class='ui-icon icon-trash bigger-120 red' ></span></span>";

													   			}
															  
													   			else{
													   				td[i].setAttribute("name",jsonObj.wsid);
													   				td[i].innerHTML=array[i];
													   				}
				   												}
											                  }
														  else{// 2为更新
														 
											                var tds=document.getElementsByName(wsid);
				 												for (i =0 ; i < 6; i++){
				 												tds[i].innerHTML=array[i];  
																}
																}
																
														  }
				);
				
				}
				 
				 
				  
				document.getElementById("add").disabled=false;
				$('#edit'+wsid).show();	
				$('#save'+wsid).hide(); 
			}//end
			
			function setAllCheckboxState(name,state) {
				var elms = document.getElementsByName("ischeck");

				for(var i = 0; i < elms.length; i++) {
					elms[i].checked = state;
				}
			}
			
</script>

		<div class="main-container-inner">
			<a class="menu-toggler" id="menu-toggler" href="#"> <span
				class="menu-text"></span> </a>
			<%@ include file="/client/leftnav.jsp"%>



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
							<a href="#">${item.factoryName}</a>
						</li>

						
						<li class="active">
							企业车间信息
						</li>
					</ul>
					<!-- .breadcrumb -->


				</div>

				<form id="queryForm" name="queryForm"
					action="<c:url value="/pages/Loadingprocess/save.do"/>"
					method="get" style="display: inline;">
					<div class="page-content" style="height: 50%">
						<div class="page-header">
							<h1>
								<b>企业信息</b>
								<small> <i class="icon-double-angle-right"></i> 概要信息 </small>
							</h1>
							
						</div>
						<!-- /.page-header -->
						<%@ include file="/client/public_com.jsp"%>
						<div class="row">
							<div class="col-xs-12">


								<div class="dataTables_wrapper">
									<div class="page-header">
										<h1>
											<b>无组织车间信息</b>

										</h1>
										<h3 style="color: red">若无车间，车间面积请填写露天装置的占地面积</h3>
									</div>
									<div class="table-header">
										无组织车间信息
									</div>

									<table id="grid1" width="100%" border="0" cellspacing="0"
										class="table table-striped table-bordered table-hover">
										<thead>

											<tr style="color:#32B16C;">

												<th style="width: 1px; display:none">
													<input type="checkbox"
														onclick="setAllCheckboxState('ischeck',this.checked)"
														name="check">
												</th>
												<th sortColumn="workshopid">
													车间编号
												</th>
												<th sortColumn="longitude">
													经度(73.6667~96.3000)
												</th>
												<!-- 排序时为th增加sortColumn即可,new SimpleTable('sortColumns')会为tableHeader自动增加排序功能; -->
												<th sortColumn="latitude">
													纬度(34.4167~48.1667)
												</th>
												<th sortColumn="production_use">
													生产用途
												</th>
												<th sortColumn="workshop_area">
													车间面积(m^2)
												</th>
												<th>
													操作
												</th>
											</tr>

										</thead>
										<tbody>
											<c:forEach items="${page.result}" var="item"
												varStatus="status">
												<tr>
													<td style=display:none>
														<input type="checkbox" name="ischeck" value="${item.wsid}">
													</td>
													<td name='${item.wsid}' >
														<c:out value='${item.workshopid}' />
													</td>
													<td name='${item.wsid}'>
													<c:out value='${item.longitude}' />
													</td>
													<td name='${item.wsid}'>
														<c:out value='${item.latitude}' />
													</td>
													<td name='${item.wsid}'>
														<c:out value='${item.productionUse}' />
													</td>
													<td name='${item.wsid}'>
														<c:out value='${item.workshopArea}' />
													</td>
													<td style="vertical-align: middle; width: 160px;">

														<!--<span id='edit${item.wsid}' class="ui-pg-div "
															onclick="modify(${item.wsid}) "><span
															class="ui-icon ui-icon-pencil red"></span>
														</span>
														-->
														
													<input  id='edit${item.wsid}'  style='width:60px' type='button' value='修改' onclick="modify(${item.wsid}) "/>
														
														<!--<span id='save${item.wsid}' style="display: none;"
															class="ui-pg-div" onclick="savepage(${item.wsid})"><span
															class="ui-icon icon-refresh green"></span>
														</span>
														-->
														<input  id='save${item.wsid}'  style='width:60px;display: none;' type='button' value='保存' onclick="savepage(${item.wsid})"/>
													
														
														<!--<span id='delete${item.wsid}' class="ui-pg-div"
															onclick="oneDelete(${item.wsid}) "><span
															class="ui-icon icon-trash bigger-120 red"></span>
														</span>
												-->
												<input  id='delete${item.wsid}'  style='width:60px' type='button' value='删除' onclick="oneDelete(${item.wsid}) "/>
													
												
												</tr>
											</c:forEach>
										</tbody>
									</table>

								</div>
								<br />
								<br />
								<br />
								<br />
								<br />
								<br />
								<div align="center">
									<input type="button" class="btn btn-info" style="width: 90px"
										value="新增车间" id="add" onclick="addRow()" />

								</div>

									<div class="row" style="height:60px;text-align:center;margin-top:20px;" >
									    <%@ include file="/client/public_end.jsp"%>
							</div>
							
									<!-- /.page-content -->
				</form>
			</div>
			<!-- /.main-content -->

		</div>
		<!-- /.main-container-inner -->

		<a href="#" id="btn-scroll-up"
			class="btn-scroll-up btn btn-sm btn-inverse"> <i
			class="icon-double-angle-up icon-only bigger-110"></i> </a>
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
		<script type="text/javascript">
$("#set2").toggle();
document.getElementById("workshop").setAttribute("class", "active");
</script>
		<script src="assets/js/bootstrap.min.js">
</script>
		<script src="assets/js/typeahead-bs2.min.js">
</script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/date-time/bootstrap-datepicker.min.js">
</script>
		<script src="assets/js/jqGrid/jquery.jqGrid.min.js">
</script>
		<script src="assets/js/jqGrid/i18n/grid.locale-en.js">
</script>
		<script src="assets/js/jquery.maskedinput.min.js">
</script>

		<script src="assets/js/jquery-ui-1.10.3.custom.min.js">
</script>
		<script src="assets/js/jquery.ui.touch-punch.min.js">
</script>
		<script src="assets/js/chosen.jquery.min.js">
</script>
		<script src="assets/js/fuelux/fuelux.spinner.min.js">
</script>
		<script src="assets/js/date-time/bootstrap-datepicker.min.js">
</script>
		<script src="assets/js/date-time/bootstrap-timepicker.min.js">
</script>
		<script src="assets/js/date-time/moment.min.js">
</script>
		<script src="assets/js/date-time/daterangepicker.min.js">
</script>
		<script src="assets/js/bootstrap-colorpicker.min.js">
</script>
		<script src="assets/js/jquery.knob.min.js">
</script>
		<script src="assets/js/jquery.autosize.min.js">
</script>
		<script src="assets/js/jquery.inputlimiter.1.3.1.min.js">
</script>
		<!--<script src="assets/js/jquery.maskedinput.min.js">
</script> -->
		<script src="assets/js/bootstrap-tag.min.js">
</script>
		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js">
</script>
		<script src="assets/js/ace.min.js">
</script>

		<!-- inline scripts related to this page -->


		<script src="assets/js/bootstrap.min.js">
</script>
		<script src="assets/js/typeahead-bs2.min.js">
</script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/date-time/bootstrap-datepicker.min.js">
</script>
		<script src="assets/js/jqGrid/jquery.jqGrid.min.js">
</script>
		<script src="assets/js/jqGrid/i18n/grid.locale-en.js">
</script>

		<!-- ace scripts -->


		<div style="display: none">
			<script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540'
				language='JavaScript' charset='gb2312'>
</script>
		</div>
	</body>

</html>
