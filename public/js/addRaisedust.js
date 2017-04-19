//添加土壤扬尘源信息 YXY 2015.8.19
function addSoildust(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	 
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
	 
	
	 if(sdYear=="" || countyId=="" || sdSoiltype=="" || sdUtype=="" || sdArea=="" || sdPm25ld=="" || sdPm10ld=="" || soilindex=="" || surindex=="" || noindex=="" || pindex=="" || yrainfall=="" || ytemp==""  || ywindrate=="" || pm25Effi=="" || pm10Effi=="" ){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		 $.post("ajax/Soildust/addSoildust.do",{ sdYear: sdYear,countyId:countyId,domain:domain,sdLongitude:sdLongitude,
	   	sdLatitude:sdLatitude,sdSoiltype:sdSoiltype,sdUtype:sdUtype,sdPm25ld:sdPm25ld,sdPm10ld:sdPm10ld,sdPmld:sdPmld,sdArea:sdArea,soilindex:soilindex,surindex:surindex,
	   noindex:noindex,pindex:pindex,yrainfall:yrainfall,ytemp:ytemp,ywindrate:ywindrate,yporation:yporation,controlname:controlname,pm25Effi:pm25Effi,pm10Effi:pm10Effi,tspEffi:tspEffi},function(data){    
			var json = eval("(" + data + ")");  
			var sid = json.sid;
			
							   if(sid==1){								    
									alert("土壤扬尘源添加成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(sid == -2){
									alert("没有权限！");
								}
								else if(sid == -1){
									alert("没有保存成功！");
								}
							   
		
	        });
	 }
}

//添加道路扬尘源信息  YXY 2015.8.24
function addRoaddust(){
	//使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});
	  	
	 var year=document.getElementById("year1").value;
	
	 var countyId=document.getElementById("countyId").value;
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
	 
	 if(year=="" || countyId=="" || pm25ld=="" || pm10ld=="" || pm10Effi=="" || pm25Effi=="" || pathlength==""){
		  document.getElementById("addTips").style.display='block';
		  document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  if(ispave=="001"){
			 
			 if(averweight=="" || roadload==""){
				 document.getElementById("addTips").style.display='block';
			     document.getElementById("addTips").innerHTML = "铺装道路平均车重和道路积尘负荷不允许为空！";
			 }else{
				 
				  $.post("ajax/Roaddust/addRoaddust.do",{year:year,countyId:countyId,pathname:pathname,startlongitude:startlongitude,
				   stratlatitude:stratlatitude,endlongitude:endlongitude,endlatitude:endlatitude,ispave:ispave,roadtype:roadtype,pmld:pmld,pm25ld:pm25ld,pm10ld:pm10ld,pathlength:pathlength,
				   averwidth:averwidth,averweight:averweight,carflow:carflow,averspeed:averspeed,dirtratio:dirtratio,waterratio:waterratio,roadload:roadload,rainfallThresh:rainfallThresh,controlname:controlname,pm25Effi:pm25Effi,
				   pm10Effi:pm10Effi,pmEffi:pmEffi},function(data){    
						var json = eval("(" + data + ")");  
			            var rid = json.rid;
			
							   if(rid==1){								    
									alert("道路扬尘源保存成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(rid == -2){
									alert("没有权限！");
								}
								else if(rid == -1){
									alert("没有保存成功！");
								}
				        });
			 }		  
			 }else if(ispave=="002"){	
				
				 if(averspeed=="" || dirtratio=="" || waterratio==""){
					 document.getElementById("addTips").style.display='block';
				     document.getElementById("addTips").innerHTML = "未铺装道路平均车速、道路表面有效积尘率和道路积尘含水率均不允许为空！";
				 }else{
				  $.post("ajax/Roaddust/addRoaddust.do",{year:year,countyId:countyId,pathname:pathname,startlongitude:startlongitude,
				   stratlatitude:stratlatitude,endlongitude:endlongitude,endlatitude:endlatitude,ispave:ispave,roadtype:"000",pm25ld:pm25ld,pm10ld:pm10ld,pathlength:pathlength,
				   averwidth:averwidth,averweight:averweight,carflow:carflow,averspeed:averspeed,dirtratio:dirtratio,waterratio:waterratio,roadload:roadload,rainfallThresh:rainfallThresh,controlname:controlname,pm25Effi:pm25Effi,
				   pm10Effi:pm10Effi,pmEffi:pmEffi},function(data){    
						var json = eval("(" + data + ")");  
			          var rid = json.rid;
			
							   if(rid==1){								    
									alert("道路扬尘源保存成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(rid == -2){
									alert("没有权限！");
								}
								else if(rid == -1){
									alert("没有保存成功！");
								}
										   
					
				        });
			 }	
			 }else{
				 alert("您必须道路铺设情况和道路类型！")
			 }	
	 } 
}
//添加施工扬尘源信息
function addConstructdust(){
	//使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});
	  
	 var year=document.getElementById("yearss").value;
	
	 var countyId=document.getElementById("countyId").value;
	 var name=document.getElementById("name").value;
	 var address=document.getElementById("address").value;
	 var domain=document.getElementById("domain").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	 
	 
	
	// alert(scccode)
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
	 var months=document.getElementById("months").value;
	 
	 var controlNote=document.getElementById("controlNote").value;
	
	 var controlname=document.getElementById("myconback").value;

	 if(year=="" || countyId=="" || planConstructarea=="" || controlname==""){
		  document.getElementById("addTips").style.display='block';
		  document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/Constructdust/addConstruct.do",{year:year,countyId:countyId,name:name,address:address,domain:domain,longitude:longitude,latitude:latitude,
				  constructType:constructType,constructStage:constructStage,planConstructarea:planConstructarea,startArea:startArea,finishArea:finishArea,surfaceWaterpercent:surfaceWaterpercent,
				  roadLoad:roadLoad,windThreshold:windThreshold,startTime:startTime,finishTime:finishTime,months:months,controlNote:controlNote,controlname:controlname
				  },function(data){    
						var json = eval("(" + data + ")");  
			            var id = json.id;
			
							   if(id==1){								    
									alert("施工扬尘源添加成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(id == -2){
									alert("没有权限！");
								}
								else if(id == -1){
									alert("添加失败！");
								}
										   
					
				        });
	 }
}

//添加堆场装卸扬尘源信息
function addLoad(){
	//使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});
	
	 //alert(old_aid)
	 var year=document.getElementById("years").value;
	
	 var countyId=document.getElementById("countyId").value;
	
	 var factoryname=document.getElementById("factoryname").value;
	 var address=document.getElementById("address").value;
	 var domain=document.getElementById("domain").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	
	 
	 var industryname=document.getElementById("industryname").value;
	 var materialWater=document.getElementById("materialWater").value;
	 var materialType=document.getElementById("materialType").value;
	 var materialLoad=document.getElementById("materialLoad").value;
	 //alert(materialLoad)
	 var loadNum=document.getElementById("loadNum").value;
	 var pm10ld=document.getElementById("pm10ld").value;
	 var pm25ld=document.getElementById("pm25ld").value;
	 var pmld=document.getElementById("pmld").value;
	
	 var uwindValue=document.getElementById("uwindValue").value;
	 var controlname = document.getElementById("myconback").value;
	
	  if(year=="" || countyId=="" || materialWater=="" || materialLoad=="" || loadNum=="" || uwindValue=="" || controlname=="" || pm10ld=="" || pm25ld=="" || pmld==""){		  
		  document.getElementById("addTips").style.display='block';
		  document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/CydustLoad/addCydustLoad.do",{year:year,countyId:countyId,factoryname:factoryname,address:address,
	   	domain:domain,longitude:longitude,latitude:latitude,industryname:industryname,materialWater:materialWater,materialType:materialType,
	   materialLoad:materialLoad,loadNum:loadNum,pm10ld:pm10ld,pm25ld:pm25ld,pmld:pmld,uwindValue:uwindValue,controlname:controlname},function(data){    
			var json = eval("(" + data + ")");  
            var id = json.id;

				   if(id==1){								    
						alert("堆场装卸扬尘源保存成功！");
						document.getElementById("addTips").style.display='none';									
					}
					else if(id == -2){
						alert("没有权限！");
					}
					else if(id == -1){
						alert("保存失败！");
					}
	        });
		 
		 
	 }
}

//添加堆场风蚀扬尘源信息
function addcydustStack(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});
	 
	 //alert(old_aid)
	 var year=document.getElementById("yearss").value;
	
	 var countyId=document.getElementById("countyId").value;
	
	 var factoryname=document.getElementById("factoryName").value;
	 var address=document.getElementById("address").value;
	 var domain=document.getElementById("domain").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	 //var scccode=document.getElementById("scccode").value;
	 
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
	
	 var controlname = document.getElementById("myconback").value;
	
	  if(year=="" || countyId=="" || mwindnum=="" || groundWind=="" || groundWindhigh=="" || groundRough=="" || controlname=="" || windfThresh==""){
		  document.getElementById("addTips").style.display='block';
		  document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/CydustStack/addStack.do",{year:year,countyId:countyId,factoryName:factoryname,address:address,
	   	domain:domain,longitude:longitude,latitude:latitude,materialType:materialType,sarea:sarea,materialRough:materialRough,groundRough:groundRough,
	   windFriction:windFriction,groundWindhigh:groundWindhigh,groundWind:groundWind,windfThresh:windfThresh,mwindnum:mwindnum,object1:object1,controlname:controlname},function(data){    
			var json = eval("(" + data + ")");  
			var id = json.id;
			
							   if(id==1){								    
									alert("堆场风蚀扬尘源添加成功！")
									document.getElementById("addTips").style.display='none';									
								}
								else if(id == -2){
									alert("对不起，您没有权限进行该操作！");
								}
								else if(id == -1){
									alert("添加失败！");
								}
							   
		
	        });
		 
		 
	 }
	
	
	
	
}