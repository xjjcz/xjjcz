function industrysmall(m_value,m_indutrySmall){
	//alert(123)
	cleaSec("industryId");
	var $option = $("<option></option>");
				$option.attr("value","");
				$option.text("请选择");				
				$("#industryId").append($option);
	$.post("ajax/IndustrySmall/getindustrySmallId.do",{industrybigid:m_value}, function(data) {
			var jsonObj = eval("(" + data + ")");
			for ( var i = 0; i < jsonObj.length; i++) {
				var $option = $("<option></option>");
				$option.attr("value", jsonObj[i].IndustrySmallCode);
				$option.text(jsonObj[i].IndustrySmallDec);				
				$("#industryId").append($option);
				
			}
		  
			
			$("#industryId option[value='"+m_indutrySmall+"']").attr("selected", true);
		
	 });
}

function laodIndustryBig(m_indutryBig) {
			$.post(
									"ajax/IndustryBig/getindustryBigId.do",
									function(data) {
										var jsonObj = eval("(" + data + ")");
										for ( var i = 0; i < jsonObj.length; i++) {
											var $option = $("<option></option>");
											$option.attr("value",
													jsonObj[i].industryBigcode);
											$option
													.text(jsonObj[i].industryBigname);
											$("#industryBigid").append($option);

										}
									
										$(
												"#industryBigid option[value='"
														+ m_indutryBig + "']")
												.attr("selected", true);
										//$("#industryBigid").value("${adminfactory.industryBigid}");

									});

}
function laodcountyCity(m_countyCity) {
			$.post("ajax/City/getCityId.do", function(data) {
						var jsonObj = eval("(" + data + ")");
						for ( var i = 0; i < jsonObj.length; i++) {
							var $option = $("<option></option>");
							$option.attr("value", jsonObj[i].cityId);
							$option.text(jsonObj[i].cityName);
							//$("#RcountyId").append($option); 
							$("#countyCity").append($option);
						}
						$("#countyCity option[value='" + m_countyCity + "']")
								.attr("selected", true);

					});

}

function  changeCity(m_value,next,m_countyCode){
	cleaSec(next);
	var $option = $("<option></option>");
				$option.attr("value","");
				$option.text("请选择");				
				$("#"+next).append($option);
	$.post("ajax/County/getCountyId.do", {citycode:m_value},function(data) {
			var jsonObj = eval("(" + data + ")");
			for ( var i = 0; i < jsonObj.length; i++) {
				var $option = $("<option></option>");
				$option.attr("value", jsonObj[i].countyId);
				$option.text(jsonObj[i].countyName);
				//$("#RcountyId").append($option); 
				$("#"+next).append($option);
				
			}
			$("#"+next+" option[value='"+m_countyCode+"']").attr("selected", true);
    });
	
}
function cleaSec(objID){
				var selectObj = document.getElementById(objID);
				var length = selectObj.options.length;
				for(var i = 1;i <= length;i++){
					selectObj.options[0] = null;
				}
}
function checkvalue(witch) {
 	  var ids = new Array("inputfactotyno","sourceType","industryBigid","industryId","legalperson","factorySize","countyRegisterCity","countyidRegister","addressRegister","countyCity","countyId","address","factoryLongitude","factoryLatitude","totalOutput","yearDays","daysHours","principalName","principalMobile","principalEmail");
	  var contents = new Array("组织机构代码","污染源类型","行业大分类","行业小分类","法定代表人","企业规模","注册城市","注册行政区","注册详细地址","实际城市","实际行政区","实际详细地址","企业经度","企业纬度","生产总值","年生产天数","日生产小时数","统计负责人","移动电话","电子邮箱");
	  return checkall(witch,ids,contents);
	
}
function addFactory() {
	if(!checkvalue(1))
	{
			return;
	}
	
	var factoryNo1 = document.getElementById("inputfactotyno").value;
	
	var factoryName = document.getElementById("factoryName").value;
	var factoryUsedname = document.getElementById("factoryUsedname").value;
	var sourceType = document.getElementById("sourceType").value;
	var industryBigid = document.getElementById("industryBigid").value;
	var industryBigname=$("#industryBigid").find("option:selected").text();
	var industryId = document.getElementById("industryId").value;
	var industryName=$("#industryId").find("option:selected").text();
	var legalperson = document.getElementById("legalperson").value;
	var factorySize = document.getElementById("factorySize").value;
	var countyRegisterCity = document.getElementById("countyRegisterCity").value;
	var countyidRegister = document.getElementById("countyidRegister").value;
	var addressRegister = document.getElementById("addressRegister").value;
	var countyCity = document.getElementById("countyCity").value;
	var cityName=$("#countyCity").find("option:selected").text();
	var countyId = document.getElementById("countyId").value;
	var countyName=$("#countyId").find("option:selected").text();
	var address = document.getElementById("address").value;
	var factoryLongitude = document.getElementById("factoryLongitude").value;
	var factoryLatitude = document.getElementById("factoryLatitude").value;
	var totalOutput = document.getElementById("totalOutput").value;
	var yearDays = document.getElementById("yearDays").value;
	var daysHours = document.getElementById("daysHours").value;
	var principalName = document.getElementById("principalName").value;
	var principalPhone = document.getElementById("principalPhone").value;
	var principalMobile = document.getElementById("principalMobile").value;
	var principalEmail = document.getElementById("principalEmail").value;
	var powerAmount = document.getElementById("powerAmount").value;
	var lon1 = document.getElementById("lon1").value;
	var lon2 = document.getElementById("lon2").value;
	var lon3 = document.getElementById("lon3").value;
	var lon4 = document.getElementById("lon4").value;
	var lon5 = document.getElementById("lon5").value;
	var lon6 = document.getElementById("lon6").value;
	var lon7 = document.getElementById("lon7").value;
	var lat1 = document.getElementById("lat1").value;
	var lat2 = document.getElementById("lat2").value;
	var lat3 = document.getElementById("lat3").value;
	var lat4 = document.getElementById("lat4").value;
	var lat5 = document.getElementById("lat5").value;
	var lat6 = document.getElementById("lat6").value;
	var lat7 = document.getElementById("lat7").value;
  	var status = document.getElementById("status").value;
  		var statusdec = $("#status").find("option:selected").text();
	//alert(1);
$.post("ajax/Factory/updatecountyFac.do",{
		factoryNo1:factoryNo1,
		factoryName:factoryName,
		status:status,
		cityName:cityName,
		statusdec:statusdec,
		industryName:industryName,
		countyName:countyName,
		industryBigname:industryBigname,
		factoryUsedname:factoryUsedname,
		cityName:cityName,
		powerAmount:powerAmount,
		sourceType:sourceType,
		industryBigid:industryBigid,
		industryId:industryId,
		legalperson:legalperson,
		factorySize:factorySize,
		countyRegisterCity:countyRegisterCity,
		countyidRegister:countyidRegister,
		addressRegister:addressRegister,
		countyCity:countyCity,
		countyId:countyId,
		address:address,
		factoryLongitude:factoryLongitude,
		factoryLatitude:factoryLatitude,
		totalOutput:totalOutput,
		yearDays:yearDays,
		daysHours:daysHours,
		principalName:principalName,
		principalPhone:principalPhone,
		principalMobile:principalMobile,
		principalEmail:principalEmail,
		lon1:lon1,
		lat1:lat1,
		lon2:lon2,
		lat2:lat2,
		lon3:lon3,
		lat3:lat3,
		lon4:lon4,
		lat4:lat4,
		lon5:lon5,
		lat5:lat5,
		lon6:lon6,
		lat6:lat6,
		lon7:lon7,
		lat7:lat7
		    	},function(data){
						var json = eval("(" + data + ")"); 
					    if(json.status==1){    		  
					    	alert("企业信息保存成功！");
					    }else{
					    	alert("企业信息保存失败！");
					    }
						
					});
}
function saveFactory() {
	
	var factoryNo1 = document.getElementById("factoryNo1").value;
	var factoryName = document.getElementById("factoryName").value;
	var factoryUsedname = document.getElementById("factoryUsedname").value;
	var sourceType = document.getElementById("sourceType").value;
	var industryBigid = document.getElementById("industryBigid").value;
	var industryBigname=$("#industryBigid").find("option:selected").text();
	var industryId = document.getElementById("industryId").value;
	var industryName=$("#industryId").find("option:selected").text();
	var legalperson = document.getElementById("legalperson").value;
	var factorySize = document.getElementById("factorySize").value;
	var countyRegisterCity = document.getElementById("countyRegisterCity").value;
	var countyidRegister = document.getElementById("countyidRegister").value;
	var addressRegister = document.getElementById("addressRegister").value;
	var countyCity = document.getElementById("countyCity").value;
	var cityName=$("#countyCity").find("option:selected").text();
	var countyId = document.getElementById("countyId").value;
	var countyName=$("#countyId").find("option:selected").text();
	var address = document.getElementById("address").value;
	var factoryLongitude = document.getElementById("factoryLongitude").value;
	var factoryLatitude = document.getElementById("factoryLatitude").value;
	var totalOutput = document.getElementById("totalOutput").value;
	var yearDays = document.getElementById("yearDays").value;
	var daysHours = document.getElementById("daysHours").value;
	var principalName = document.getElementById("principalName").value;
	var principalPhone = document.getElementById("principalPhone").value;
	var principalMobile = document.getElementById("principalMobile").value;
	var principalEmail = document.getElementById("principalEmail").value;
	var powerAmount = document.getElementById("powerAmount").value;
	var lon1 = document.getElementById("lon1").value;
	var lon2 = document.getElementById("lon2").value;
	var lon3 = document.getElementById("lon3").value;
	var lon4 = document.getElementById("lon4").value;
	var lon5 = document.getElementById("lon5").value;
	var lon6 = document.getElementById("lon6").value;
	var lon7 = document.getElementById("lon7").value;
	var lat1 = document.getElementById("lat1").value;
	var lat2 = document.getElementById("lat2").value;
	var lat3 = document.getElementById("lat3").value;
	var lat4 = document.getElementById("lat4").value;
	var lat5 = document.getElementById("lat5").value;
	var lat6 = document.getElementById("lat6").value;
	var lat7 = document.getElementById("lat7").value;
  	var status = document.getElementById("status").value;
  	var statusdec = $("#status").find("option:selected").text();
	//alert(1);
$.post("ajax/Factory/addcountyFac.do",{
		factoryNo1:factoryNo1,
		factoryName:factoryName,
		status:status,
		statusdec:statusdec,
		cityName:cityName,
		industryName:industryName,
		countyName:countyName,
		industryBigname:industryBigname,
		factoryUsedname:factoryUsedname,
		cityName:cityName,
		powerAmount:powerAmount,
		sourceType:sourceType,
		industryBigid:industryBigid,
		industryId:industryId,
		legalperson:legalperson,
		factorySize:factorySize,
		countyRegisterCity:countyRegisterCity,
		countyidRegister:countyidRegister,
		addressRegister:addressRegister,
		countyCity:countyCity,
		countyId:countyId,
		address:address,
		factoryLongitude:factoryLongitude,
		factoryLatitude:factoryLatitude,
		totalOutput:totalOutput,
		yearDays:yearDays,
		daysHours:daysHours,
		principalName:principalName,
		principalPhone:principalPhone,
		principalMobile:principalMobile,
		principalEmail:principalEmail,
		lon1:lon1,
		lat1:lat1,
		lon2:lon2,
		lat2:lat2,
		lon3:lon3,
		lat3:lat3,
		lon4:lon4,
		lat4:lat4,
		lon5:lon5,
		lat5:lat5,
		lon6:lon6,
		lat6:lat6,
		lon7:lon7,
		lat7:lat7
		    	},function(data){
						var json = eval("(" + data + ")"); 
					    if(json.status==1){    		  
					    	alert("企业信息保存成功！");
					    }else{
					    	alert("企业信息保存失败！");
					    }
						
					});
}