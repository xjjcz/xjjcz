<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ taglib tagdir="/WEB-INF/tags/simpletable" prefix="simpletable"%>
<%@ include file="/commons/taglibs.jsp" %>

<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="<%=basePath%>">
		<title>无组织裸土扬尘源</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 		<meta http-equiv="x-ua-compatible" content="IE=Edge" />
		<!-- basic styles -->

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
		<link rel="stylesheet" href="assets/css/datepicker.css" />
		<link rel="stylesheet" href="assets/css/ui.jqgrid.css" />
		

		<!-- fonts -->

<%--		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />--%>

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<script src="js/client.js"></script>
		<script src="js/savehelp.js"></script>
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<style type="text/css"> 
 

</style>
	<body onload="setdate()" >
	<script src="assets/js/jquery.maskedinput.min.js"></script>
	<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="js/client.js"></script>
	<script src="http://apps.bdimg.com/libs/fancybox/2.1.5/jquery.fancybox.pack.js" type="text/javascript"></script>
	<%@ include file="/client/header.jsp" %>
	<script type="text/javascript" src="js/autoNumeric.js"></script>
	<script src="js/shihua.js"></script>
	<script src="js/checkhelp.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$('#ability').focus(function(){
				$('#ability').autoNumeric();
			});
			$('#hour').focus(function(){
				$('#hour').autoNumeric();
			}); 
		}); 
	</script>
	<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
			
			<script type="text/javascript">
			
			
			$(document).ready(function() {
	 $('.fancybox').fancybox({
	  padding : 0,
	  autoScale:true,
	  width:350,
	  height:180,
	  openEffect: 'elastic'
	 });
	});
			
		
			/** 
	   *page 页面的第几个元素
	   *source 要跳到的页面
	   */
<%--	  function addsaveinfo(page, source) {--%>
<%--	                   var m_alert = '${alert}';--%>
<%--	                   var m_alert=null;--%>
<%--				       if(source=="stationary"){--%>
<%--						       m_alert='${totalboilerexsit}';--%>
<%--				       }else if(source=="product"){--%>
<%--						       m_alert='${totaldeviceexsit}';--%>
<%--					   }else if(source=="procedure"){--%>
<%--						        m_alert='${totalkilnexsit}';--%>
<%--					   }--%>
<%--	          saveinfo(page, source, 'procedure', m_alert);--%>
<%--            }--%>
			
			
			function addnewRow(){
			
				var tabObj=document.getElementById("grid1");//获取添加数据的表格
   				var rowsNum = tabObj.rows.length;  //获取当前行数
			    var colsNum=tabObj.rows[rowsNum-1].cells.length;//获取行的列数
			    
			    var td=new Array(colsNum);
			    var myNewRow = tabObj.insertRow(rowsNum);//插入新行
			    

				   for(var i = 0 ; i <2 ; i ++){
					   td[i]=myNewRow.insertCell(i);
					   if(i==1){
			   					td[i].innerHTML="<input type='button' value='保存' style='width:60px'   class='ui-pg-div' onclick='savepagesoil(-1)' />";
			   			}
			   				else if(i==0){
			   					
			   					td[i].innerHTML="<input  name='chkArr' id='newadd'  style='width:120px'  onkeyup='checkNum(this);' maxlength='20'  />";
			  				
			  	}
				   }
				 document.getElementById("addbare").disabled=true;  
			   }
	
			//删除所选中的行，且直接删除数据库中的数据
		function deletejspresult(loadingid){
			 
			var chkObj=document.getElementsByName("ischeck");//???
  			var tabObj=document.getElementById("grid1");
  			
  			 
   			for(var k=0;k<=tabObj.rows.length;k++){
		         
    			if(chkObj[k].value==loadingid){
    				 
     				tabObj.deleteRow(k+1);
     				return;
    			   }
   			    }
   			return;
			}

			//单个删除
			function oneDelete(loadingid){
			
    		if (confirm('确定执行[删除]操作?')){
    			
    		//deletejspresult(loadingid);
    		
		    $.post("ajax/FbareSoilDustSourceTemp/delete.do",
		    	{baresoilid:loadingid},function(data){
		    	 var jsonObj = eval("(" + data + ")"); 
		    	 var flag1=jsonObj.flag;
		    	 if(flag1==1){
		    		 alert("删除成功!");
		    		  window.location.reload();
		    	 }
		    	 else{
		    		 alert("删除失败!"); 
		    	 }
		    }); 
    		}
			}
			
			function modify (loadingid){
			
				$('#edit'+loadingid).hide();	
				$('#save'+loadingid).show();
				$('#delete'+loadingid).hide();
				 var tds=document.getElementsByName(loadingid);

			 tds[0].innerHTML="<input style='width:120px'  name='modify"+loadingid+"' onkeyup='checkNum(this);' maxlength='20' value="+tds[0].innerHTML+ ">";
					 document.getElementById("addbare").disabled=true; 

				 //点击编辑后，编辑按钮消失，出现保存按钮

 
			}

			//2015年6月19日  刘晓晨 
			//保存完成后，新增按钮点亮，一次只允许添加一行
			function savepagesoil (loadingid){
				//用js提取页面中值
				
				if(loadingid==-1){
					var elms=document.getElementsByName("chkArr");
					var array=new Array(elms.length)
					for(var i=1;i<2;i++)
					{
						array[i]=elms[i-1].value;
					}
					var barearea=array[1];
				}
				else{
					var elms = document.getElementsByName("modify"+loadingid);
					var array = new Array(elms.length);
					
					for( var i=0;i<elms.length;i++){
							array[i]=elms[i].value;
							
					 }	
					var barearea=array[0];
					}

				if(isNaN(barearea)){
			         alert("裸土面积不为数字");
			         return;
			     }
<%--					--%>
               if(barearea==""){
            	   alert("裸土面积不能为空！");
               }
               else{
				$.post("ajax/FbareSoilDustSourceTemp/saveinfo.do",{
				            bareSoilid:loadingid,
							bareSoilArea:barearea
							 },function(data){    
								 var jsonObj = eval("(" + data + ")"); 
														  
<%--														  if(jsonObj.status==1){//1为新增--%>
<%--															  alert(23);--%>
<%--											                  	 window.location.reload();--%>
											                  	 //把返回的loadingid给页面赋值
<%--											                  var tabObj=document.getElementById("grid1");//获取添加数据的表格--%>
<%----%>
<%--											                  tabObj.deleteRow(tabObj.rows.length-1);//插入新行--%>
<%--											                  --%>
<%--											                  var myNewRow = tabObj.insertRow(tabObj.rows.length);//插入新行--%>
<%--											                   --%>
<%--											                  var td=new Array(2);--%>
<%--															  --%>
<%--											                  for(var i = 0 ; i < 2 ; i ++){--%>
<%--					  												 td[i]=myNewRow.insertCell(i);--%>
<%--					  												--%>
<%--															   if(i==1){--%>
<%--													   				--%>
<%--													   				td[i].innerHTML="<span id='edit"+jsonObj.baresoilid+"'   class='ui-pg-div' onclick='modify("+jsonObj.baresoilid+")' ><span class='ui-icon ui-icon-pencil red'></span></span>" +--%>
<%--													   				"<span id='save"+jsonObj.baresoilid+"'  style='display:none;' class='ui-pg-div' onclick='savepagesoil("+jsonObj.baresoilid+")'><span class='ui-icon icon-refresh green'></span></span>" +--%>
<%--													   				"<span id='delete"+jsonObj.baresoilid+"'  class='ui-pg-div' onclick='oneDelete("+jsonObj.baresoilid+")'><span class='ui-icon icon-trash bigger-120 red' ></span></span>";--%>
<%----%>
<%--													   			}	   			--%>
<%--													   			else{--%>
<%--													   				td[i].setAttribute("name",jsonObj.baresoilid);--%>
<%--													   				 alert(barearea);--%>
<%--													   				td[i].innerHTML=jsonObj.barearea;--%>
<%--													   			}--%>
<%--				   											}--%>
<%--											              }--%>
<%--														else{ 2为更新--%>
<%--															--%>
<%--															  var tds=document.getElementsByName(jsonObj.baresoilid);--%>
<%--				 												  --%>
<%--															 window.location.reload();--%>
<%--															td[0].innerHTML=jsonObj.barearea;--%>
<%--																--%>
<%--													    }--%>
														
														  if(jsonObj.flagsave==1){
															  alert("更新成功！");
									                       window.location.reload();
														  }
														  else{
															  alert("更新失败！");
														  }
														  
														  
											                
				});  
				
				document.getElementById("addbare").disabled=false;
				$('#edit'+loadingid).show();	
				$('#save'+loadingid).hide(); 
				$('#delete'+loadingid).show();
				}
			}//end
			
			
<%--			--%>
			function setAllCheckboxState(name,state) {
				var elms = document.getElementsByName("ischeck");

				for(var i = 0; i < elms.length; i++) {
				elms[i].checked = state;
				}
			}
			
			
			</script>
			
			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>
				<%@ include file="/client/leftnav.jsp" %>
				
				
	
				<div>
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
						<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">${item.factoryName}</a>
							</li>

							
							<li class="active">企业裸土信息</li>
						</ul><!-- .breadcrumb -->

						
					</div>
				
				
				
				

<form id="queryForm" name="queryForm" action="<c:url value="/pages/Loadingprocess/save.do"/>" method="get" style="display: inline;">
				<div class="page-content" style="height: 50%">
						 <div class="page-header">
							<h1>
								<b>企业信息</b>
								<small> <i class="icon-double-angle-right"></i> 概要信息 </small>
							</h1>
						</div>
						<!-- /.page-header -->
		   <div class="row" style="height:40px;">
							<div class="col-md-12">
								<!-- PAGE CONTENT BEGINS -->

								    <div class="col-md-3">
										<div class="form-group">
											<label class="col-md-5 control-label no-padding-right" for="form-field-3"> 机构代码：</label>
	
											<div class="col-md-7">
												<label id='factotyno' style="font-size:15px; margin-top:3px;">${item.factoryNo1}</label>
											</div>
										</div>					
									</div>
									
									
									<div class="col-md-4">
										<div class="form-group">
										<label class="col-md-4 control-label no-padding-right" for="form-field-1"> 企业名称： </label>
										<div class="col-md-8">
											<label id='factoryName' style="font-size:15px; margin-top:3px;">
										${item.factoryName}</label>
										</div>
										</div>
									</div>									
								<div class="col-md-4">
										<div class="form-group">
											<label class="col-md-5 control-label no-padding-right" for="form-field-3"> 污染源类型：</label>
	
											<div class="col-md-7">
												<label id='sourceType' style="font-size:15px; margin-top:3px;">
												${item.sourceType} </label>
											</div>
										</div>					
								</div>
									
							</div>
							
							</div>
		
				<div class="row">
				<div class="col-xs-12">
							

	        <div class="dataTables_wrapper">
	        <div class="page-header">
					<h1>
								<b>裸土扬尘源信息</b>
                                 
				</h1>
						</div>
		<div class="table-header">
			裸土扬尘源信息
		</div>
	
		<table id="grid1" width="100%"  border="0" cellspacing="0" class="table table-striped table-bordered table-hover">
		  <thead>
			
			  <tr style="color:#32B16C;">

				<th style="width:1px; display: none"><input type="checkbox" onclick="setAllCheckboxState('ischeck',this.checked)" name="check"  style="display: none"></th>
			     
				<th sortColumn="factor" >裸土面积(平方米)</th>
<%--				<th sortColumn="loadingvolume" >PM25排放量(t)</th>--%>
<%--				<th sortColumn="realpressure" >PM10排放量(t)</th>--%>
				<th>操作</th>
			  </tr>
			  
		  </thead>
		  <tbody >
		  	  <c:forEach items="${page.result}" var="item" varStatus="status">
		  	     <tr>
				<td style="display: none"><input type="checkbox" name="ischeck" value="${item.bareSoilid}" ></td>
				
				<td name='${item.bareSoilid}'><c:out value='${item.bareSoilArea}'/></td>
<%--				<td name='${item[0].bareSoilid}'><c:out value='${item[0].pm25Emission}'/></td>--%>
<%--			    <td name='${item[0].bareSoilid}'><c:out value='${item[0].pm10Emission}'/></td>--%>
				<td style="vertical-align:middle;width:160px;">
				 
				<input type="button" id='edit${item.bareSoilid}' value="编辑"  style='width:60px' class="ui-pg-div " onclick="modify(${item.bareSoilid}) " />
				<input type="button" id='save${item.bareSoilid}'  value="保存" style="display:none; width:60px"  class="ui-pg-div" onclick="savepagesoil(${item.bareSoilid})" />
				<input type="button" id='delete${item.bareSoilid}'  value="删除" style='width:60px' class="ui-pg-div" onclick="oneDelete(${item.bareSoilid}) " />
               
                </tr>
		  	  </c:forEach>
		  </tbody>
		</table>
						  
	</div>
	<br/><br/><br/><br/>
     <div align="center">
     <input type="button" class="btn btn-info" style="width:150px" value="新增裸土面积" id="addbare" onclick="addnewRow()"/>

	</div>
								
						<div class="row" style="height:80px;text-align:center;margin-top:20px;" >
						    <%@ include file="/client/public_end.jsp"%>
							</div>
						 
					
				</form>
				</div><!-- /.main-content -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/jqGrid/jquery.jqGrid.min.js"></script>
		<script src="assets/js/jqGrid/i18n/grid.locale-en.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		
		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="assets/js/date-time/moment.min.js"></script>
		<script src="assets/js/date-time/daterangepicker.min.js"></script>
		<script src="assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="assets/js/jquery.knob.min.js"></script>
		<script src="assets/js/jquery.autosize.min.js"></script>
		<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>
		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
<script type="text/javascript">
			$("#set2").toggle();
		document.getElementById("baredust").setAttribute("class","active");
			
		</script>
		<script type="text/javascript">
			jQuery(function($) {
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('9999/99/99');
				$('.input-mask-phone').mask('(999) 999-9999');//可以校验电话
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			});
		</script>
			<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/jqGrid/jquery.jqGrid.min.js"></script>
		<script src="assets/js/jqGrid/i18n/grid.locale-en.js"></script>

		<!-- ace scripts -->
		
	
	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
	
</html>
