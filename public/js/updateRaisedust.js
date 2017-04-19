function updateSoildust(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});
	 
	 var old_aid=document.getElementById("old_aid").value;
	 //alert(old_aid)
	 var sdYear=document.getElementById("sdYear").value;
	 var countyId=document.getElementById("countyId").value;
	 var domain=document.getElementById("domain").value;
	 var sdLongitude=document.getElementById("sdLongitude").value;
	 var sdLatitude=document.getElementById("sdLatitude").value;
	 var sdSoiltype=document.getElementById("sdSoiltype").value;
	 var sdUtype=document.getElementById("sdUtype").value;
	 var sdPm25ld=document.getElementById("sdPm25ld").value;
	 var sdPm10ld=document.getElementById("sdPm10ld").value;
	 var sdPmld=document.getElementById("sdPmld").value;
	 var sdArea=document.getElementById("sdArea").value;
	 var soilindex=document.getElementById("soilindex").value;
	 var surindex=document.getElementById("surindex").value;
	 var noindex=document.getElementById("noindex").value;
	 var pindex=document.getElementById("pindex").value;
	 var yrainfall=document.getElementById("yrainfall").value;
	 var ytemp=document.getElementById("ytemp").value;
	 var ywindrate=document.getElementById("ywindrate").value;
	 var yporation=document.getElementById("yporation").value;
	 var controlname=document.getElementById("controlname").value;
	 var pm25Effi=document.getElementById("pm25Effi").value;
	 var pm10Effi=document.getElementById("pm10Effi").value;
	 var tspEffi=document.getElementById("tspEffi").value;
	 var scccode=document.getElementById("scccode").value;
	  
	// alert(countyId)
	 if(sdYear=="" || countyId=="" || sdArea==""  || sdPm25ld=="" || sdPm10ld=="" || soilindex=="" || surindex=="" || noindex=="" || pindex=="" || yrainfall=="" || ytemp==""  || ywindrate=="" || pm25Effi=="" || pm10Effi==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		 $.post("ajax/Soildust/updateSoildust.do",{sdId:old_aid,sdYear: sdYear,countyId:countyId,domain:domain,sdLongitude:sdLongitude,
	   	sdLatitude:sdLatitude,sdSoiltype:sdSoiltype,sdUtype:sdUtype,sdPm25ld:sdPm25ld,sdPm10ld:sdPm10ld,sdPmld:sdPmld,sdArea:sdArea,soilindex:soilindex,surindex:surindex,
	   noindex:noindex,pindex:pindex,yrainfall:yrainfall,ytemp:ytemp,ywindrate:ywindrate,yporation:yporation,controlname:controlname,pm25Effi:pm25Effi,
	   pm10Effi:pm10Effi,tspEffi:tspEffi,scccode:scccode},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("土壤扬尘源修改成功！")
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("对不起，您没有权限进行该操作！");
								}
								else if(flag == -1){
									alert("修改失败！");
								}
							   
		
	        });
	 };
}

function updateRoaddust(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});
	 //alert(123)
	  var old_aid=document.getElementById("old_aid").value;
	 //alert(old_aid)
	 var year=document.getElementById("year1").value;
	
	
	 var pathname=document.getElementById("pathname").value;
	 var startlongitude=document.getElementById("startlongitude").value;
	 var stratlatitude=document.getElementById("stratlatitude").value;
	 var endlongitude=document.getElementById("endlongitude").value;
	 var endlatitude=document.getElementById("endlatitude").value;
	
	 
	 var ispave=document.getElementById("ispave").value;
	 var roadtype=document.getElementById("roadtype").value;
	 var pm25ld=document.getElementById("pm25ld").value;
	 var pm10ld=document.getElementById("pm10ld").value;
	 var pmld=document.getElementById("pmld").value;
	 var pathlength=document.getElementById("pathlength").value;
	 var averwidth=document.getElementById("averwidth").value;
	 var averweight=document.getElementById("averweight").value;
	 var carflow=document.getElementById("carflow").value;
	 
	 var averspeed=document.getElementById("averspeed").value;
	 var dirtratio=document.getElementById("dirtratio").value;
	 var waterratio=document.getElementById("waterratio").value;
	 var roadload=document.getElementById("roadload").value;
	 
	 var rainfallThresh=document.getElementById("rainfallThresh").value;
	 var controlname=document.getElementById("controlname").value;
	 var pm25Effi=document.getElementById("pm25Effi").value;
	 var pm10Effi=document.getElementById("pm10Effi").value;
	 var pmEffi=document.getElementById("pmEffi").value;
	 
	  var scccode=document.getElementById("scccode").value;
	
	
	 if(year=="" || pm25ld=="" || pm10ld=="" || pm10Effi=="" || pm25Effi=="" || pathlength==""){
		  document.getElementById("addTips").style.display='block';
		  document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  if(ispave=="铺装道路"){
			 
			 if(averweight=="" || roadload==""){
				 document.getElementById("addTips").style.display='block';
			     document.getElementById("addTips").innerHTML = "平均车重和道路积尘负荷不允许为空！";
			 }else{
				 
				  $.post("ajax/Roaddust/updateRoaddust.do",{rdId:old_aid,year: year,pathname: pathname,startlongitude: startlongitude,
				   	stratlatitude: stratlatitude,scccode:scccode,endlongitude: endlongitude,endlatitude: endlatitude, ispave: ispave,roadtype: roadtype,pmld:pmld,pm25ld: pm25ld,pm10ld: pm10ld,pathlength: pathlength,
				   averwidth: averwidth,averweight: averweight,carflow: carflow,averspeed: averspeed,dirtratio: dirtratio,waterratio: waterratio,roadload:roadload,controlname:controlname,pm25Effi:pm25Effi,
				   pm10Effi:pm10Effi,pmEffi: pmEffi},function(data){    
						var json = eval("(" + data + ")");  
						var flag = json.flag;					
										   if(flag==1){								    
												alert("道路扬尘源修改成功！")
												document.getElementById("addTips").style.display='none';									
											}
											else if(flag == -2){
												alert("对不起，您没有权限进行该操作！");
											}
											else if(flag == -1){
												alert("修改失败！");
											}
										   
					
				        });
			 }		  
			 }else{
				 if(averspeed=="" || dirtratio=="" || waterratio==""){
					 document.getElementById("addTips").style.display='block';
				     document.getElementById("addTips").innerHTML = "平均车速、道路表面有效积尘率和道路积尘含水率均不允许为空！";
				 }else{
				  $.post("ajax/Roaddust/updateRoaddust.do",{rdId:old_aid,year: year,pathname: pathname,startlongitude: startlongitude,
				   	stratlatitude: stratlatitude,scccode:scccode,endlongitude: endlongitude,endlatitude: endlatitude, ispave: ispave,roadtype: "",pmld:pmld,pm25ld: pm25ld,pm10ld: pm10ld,pathlength: pathlength,
				   averwidth: averwidth,averweight: averweight,carflow: carflow,averspeed: averspeed,dirtratio: dirtratio,waterratio: waterratio,roadload:roadload,controlname:controlname,pm25Effi:pm25Effi,
				   pm10Effi:pm10Effi,pmEffi: pmEffi},function(data){    
						var json = eval("(" + data + ")");  
						var flag = json.flag;
						
										   if(flag==1){								    
												alert("道路扬尘源修改成功！")
												document.getElementById("addTips").style.display='none';									
											}
											else if(flag == -2){
												alert("对不起，您没有权限进行该操作！");
											}
											else if(flag == -1){
												alert("修改失败！");
											}
										   
					
				        });
			 }	
			 }	
	 }
	 
}
//更新施工扬尘源
function updateConstructdust(){
	  //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});
	 
	 var old_aid=document.getElementById("old_aid").value;
	 //alert(old_aid)
	 var year=document.getElementById("years").value;
	
	 var countyId=document.getElementById("countyId").value;
	
	 var name=document.getElementById("name").value;
	 var address=document.getElementById("address").value;
	 var domain=document.getElementById("domain").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	// var scccode=document.getElementById("scccode").value;
	 
	 var constructType=document.getElementById("constructType").value;
	 var constructStage=document.getElementById("constructStage").value;
	 var planConstructarea=document.getElementById("planConstructarea").value;
	 var startArea=document.getElementById("startArea").value;
	 
	 var finishArea=document.getElementById("finishArea").value;
	 var surfaceWaterpercent=document.getElementById("surfaceWaterpercent").value;
	 var roadLoad=document.getElementById("roadLoad").value;
	 var windThreshold=document.getElementById("windThreshold").value;
	
	 var startTime=document.getElementById("startTime").value;
	 var finishTime=document.getElementById("finishTime").value;
	 var tspEffi=document.getElementById("tspEffi").value;
	 var pm10Effi=document.getElementById("pm10Effi").value;
	 
	 var pm25Effi=document.getElementById("pm25Effi").value;
	 var months=document.getElementById("months").value;
	 var controlNote=document.getElementById("controlNote").value;
	 var controlname = document.getElementById("mycon").value;
	 if(controlname==""){
		 controlname = document.getElementById("firstop").value;
	 }
	 if(controlname.charAt(controlname.length - 1)=="、"){
		 controlname=controlname.substring(0,controlname.length-1); 
	 }
	// alert(controlname+"mmmmmmm");
	  if(year=="" || countyId=="" || scccode=="" || planConstructarea=="" || controlname==""){
		  document.getElementById("addTips").style.display='block';
		  document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/Constructdust/updateConstruct.do",{id:old_aid,year:year,countyId:countyId,name:name,address:address,
	   	domain:domain,longitude:longitude,latitude:latitude,constructType:constructType,constructStage:constructStage,planConstructarea:planConstructarea,
	   startArea:startArea,finishArea:finishArea,surfaceWaterpercent:surfaceWaterpercent,roadLoad:roadLoad,windThreshold:windThreshold,startTime:startTime,finishTime:finishTime,
	   pm10Effi:pm10Effi,tspEffi:tspEffi,pm25Effi:pm25Effi,months:months,controlNote:controlNote,controlname:controlname},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("施工扬尘源修改成功！")
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("对不起，您没有权限进行该操作！");
								}
								else if(flag == -1){
									alert("修改失败！");
								}
							   
		
	        });
	 }
}

//更新堆场装卸扬尘源
function updateCydustLoad(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});
	 
	 var old_aid=document.getElementById("old_aid").value;
	 //alert(old_aid)
	 var year=document.getElementById("years").value;
	
	 var countyId=document.getElementById("countyId").value;
	
	 var factoryname=document.getElementById("factoryname").value;
	 var address=document.getElementById("address").value;
	 var domain=document.getElementById("domain").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	// var scccode=document.getElementById("scccode").value;
	 
	 var industryname=document.getElementById("industryname").value;
	 var materialWater=document.getElementById("materialWater").value;
	 var materialType=document.getElementById("materialType").value;
	 var materialLoad=document.getElementById("materialLoad").value;
	 
	 var loadNum=document.getElementById("loadNum").value;
	 var pm10ld=document.getElementById("pm10ld").value;
	 var pm25ld=document.getElementById("pm25ld").value;
	 var pmld=document.getElementById("pmld").value;
	
	 var uwindValue=document.getElementById("uwindValue").value;
	 var controlname = document.getElementById("mycon").value;
	 if(controlname==""){
		 controlname = document.getElementById("firstop").value;
	 }
	// alert(controlname+"之前")
	// alert(controlname.replace(/^(.*[n])*.*(.|n)$/g, "$2"));
	 if(controlname.charAt(controlname.length - 1)=="、"){
		 controlname=controlname.substring(0,controlname.length-1); 
	 }
	// alert(controlname+"之后");
	  if(year=="" || countyId=="" || materialWater=="" || materialLoad=="" || loadNum=="" || uwindValue=="" || controlname==""){
		  document.getElementById("addTips").style.display='block';
		  document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/CydustLoad/updateLoad.do",{id:old_aid,year:year,countyId:countyId,factoryname:factoryname,address:address,
	   	domain:domain,longitude:longitude,latitude:latitude,industryname:industryname,materialWater:materialWater,materialType:materialType,
	   materialLoad:materialLoad,loadNum:loadNum,pm10ld:pm10ld,pm25ld:pm25ld,pmld:pmld,uwindValue:uwindValue,controlname:controlname},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("堆场装卸扬尘源修改成功！")
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("对不起，您没有权限进行该操作！");
								}
								else if(flag == -1){
									alert("修改失败！");
								}
							   
		
	        });
		 
		 
	 }
}

//更新堆场风蚀扬尘源
function updateCydustStack(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});
	 
	 var old_aid=document.getElementById("old_aid").value;
	 //alert(old_aid)
	 var year=document.getElementById("years").value;
	//alert(year)
	 var countyId=document.getElementById("countyId").value;
	
	 var factoryname=document.getElementById("factoryName").value;
	 var address=document.getElementById("address").value;
	 var domain=document.getElementById("domain").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	// var scccode=document.getElementById("scccode").value;
	 
	// var industryname=document.getElementById("industryname").value;
	// var materialWater=document.getElementById("materialWater").value;
	 var materialType=document.getElementById("materialType").value;
	 var sarea=document.getElementById("sarea").value;
	 
	 var materialRough=document.getElementById("materialRough").value;
	 var groundRough=document.getElementById("groundRough").value;
	 var windFriction=document.getElementById("windFriction").value;
	 var groundWindhigh=document.getElementById("groundWindhigh").value;
	
	 var groundWind=document.getElementById("groundWind").value;
	 
	 var windfThresh=document.getElementById("windfThresh").value;
	 var mwindnum=document.getElementById("mwindnum").value;
	 var object1=document.getElementById("myobject").value;
	
	 
	 var controlname = document.getElementById("mycon").value;
	  if(controlname==""){
		 controlname = document.getElementById("firstop").value;
	 }
	// alert(controlname+"之前")
	// alert(controlname.replace(/^(.*[n])*.*(.|n)$/g, "$2"));
	 if(controlname.charAt(controlname.length - 1)=="、"){
		 controlname=controlname.substring(0,controlname.length-1); 
	 }
	//alert(controlname)
	  if(year=="" || countyId=="" || mwindnum=="" || groundWind=="" || groundWindhigh=="" || groundRough=="" || controlname=="" || windfThresh==""){
		  document.getElementById("addTips").style.display='block';
		  document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/CydustStack/updateStack.do",{id:old_aid,year:year,countyId:countyId,factoryName:factoryname,address:address,
	   	domain:domain,longitude:longitude,latitude:latitude,materialType:materialType,sarea:sarea,materialRough:materialRough,groundRough:groundRough,
	   windFriction:windFriction,groundWindhigh:groundWindhigh,groundWind:groundWind,windfThresh:windfThresh,mwindnum:mwindnum,object1:object1,controlname:controlname},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("堆场风蚀扬尘源修改成功！")
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("对不起，您没有权限进行该操作！");
								}
								else if(flag == -1){
									alert("修改失败！");
								}
							   
		
	        });
		 
		 
	 }
}