//修改石化有组织废气排放数据  YXY 2016.11.25
function updateshGasEmission(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	 var old_aid=document.getElementById("old_aid").value;
	
	 var year=document.getElementById("sdYear").value;		 
	 var countyId=document.getElementById("countyId").value;
	
	 var companyName=document.getElementById("companyName").value;
	 var address=document.getElementById("address").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	
	 var gyName=document.getElementById("gyName").value;
	

	 var activity=document.getElementById("activity").value;
	 var activityNote=document.getElementById("activityNote").value;
	 var density=document.getElementById("density").value;
	 
	  var efficency=document.getElementById("efficency").value;
	  var scccode=document.getElementById("scccode").value;
	 //alert(countyId)
     
	 if(year=="" ||  activity=="" || efficency==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/ShGasEmission/updateShGasEmission.do",{id:old_aid,year: year,countyId:countyId,companyName:companyName,address:address,
	   	 longitude:longitude,latitude:latitude,gyName:gyName,activity:activity,activityNote:activityNote,density:density,efficency:efficency,scccode:scccode},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("石化有组织废气排放源修改成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(id == -2){
									alert("没有权限！");
								}
								else if(id == -1){
									alert("修改失败！");
								}
							   
		
	        });
	 }
}

//添加石化无组织废气排放源数据  YXY 2016.11.25
function addGasEmission(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	
	 var year=document.getElementById("year").value;		 
	 var countyId=document.getElementById("countyId").value;
	 
	
	 var companyName=document.getElementById("companyName").value;
	 var address=document.getElementById("address").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	//获取SCC的描述
	
	
	var sdescript="工艺过程源/"+$("#scccode").find("option:selected").text();
	 var gyName=document.getElementById("gyName").value;
	//alert(cookingNum)
	
	 var activity=document.getElementById("activity").value;
	 var activityNote=document.getElementById("activityNote").value;
	 var density=document.getElementById("density").value;
	 var efficency=document.getElementById("efficency").value;
	 var  scccode=document.getElementById("scccode").value;
	 
	 //alert(scccode)
	// var pmEmf=document.getElementById("pmEmf").value;
	
	 //var scccode = document.getElementById("scccode").value;
     //alert(year+","+countyId+","+cookingNum+","+smokeRate+","+annualRuntime+","+removalEffi+","+scccode);
	
	 if(year=="" || countyId=="" || companyName=="" || activity=="" || efficency=="" || scccode==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		//alert(123)
		  $.post("ajax/ShGasEmission/addGasEmission.do",{year: year,countyId:countyId,companyName:companyName,address:address,sourceDiscrip:sdescript,
	   	 longitude:longitude,latitude:latitude,gyName:gyName,activity:activity,activityNote:activityNote,density:density,
	    efficency:efficency,scccode:scccode},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("石化有组织排放源添加成功！");
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


//修改石化装置密封点数据  YXY 2016.12.25
function updatesealPoint(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	 var old_aid=document.getElementById("old_aid").value;
	
	 var year=document.getElementById("sdYear").value;		 
	 var countyId=document.getElementById("countyId").value;
	
	 var companyName=document.getElementById("companyName").value;
	 var companyCode=document.getElementById("companyCode").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	
	 var unitType=document.getElementById("unitType").value;
	
	  var scccode=document.getElementById("scccode").value;
	  var vocEmission=document.getElementById("vocEmission").value;
	  //alert(countyId)
     
	 if(year==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		// alert("dsfsfsf")
		  $.post("ajax/ShSealPoint/updateSealPoint.do",{id:old_aid,year: year,countyId:countyId,companyName:companyName,companyCode:companyCode,
	   	 longitude:longitude,latitude:latitude,unitType:unitType,scccode:scccode,vocEmission:vocEmission},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("石化装置密封点源修改成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(id == -2){
									alert("没有权限！");
								}
								else if(id == -1){
									alert("修改失败！");
								}
							   
		
	        });
	 }
}

//添加石化装置密封点数据  YXY 2016.11.25
function addSealPoint(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	
	 var year=document.getElementById("year").value;		 
	 var countyId=document.getElementById("countyId").value;
	 
	
	 var companyName=document.getElementById("companyName").value;
	 var companyCode=document.getElementById("companyCode").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	//获取SCC的描述
	
	
	var sdescript="工艺过程源/"+$("#scccode").find("option:selected").text();
	 var unitType=document.getElementById("unitType").value;
	//alert(cookingNum)
	
	 var vocEmission=document.getElementById("vocEmission").value;
	
	 var  scccode=document.getElementById("scccode").value;
	 
	 //alert(scccode)
	// var pmEmf=document.getElementById("pmEmf").value;
	
	 //var scccode = document.getElementById("scccode").value;
     //alert(year+","+countyId+","+cookingNum+","+smokeRate+","+annualRuntime+","+removalEffi+","+scccode);
	
	 if(year=="" || countyId=="" || companyName=="" || vocEmission=="" || scccode==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		//alert(123)
		  $.post("ajax/ShSealPoint/addSealPoint.do",{year: year,countyId:countyId,companyName:companyName,companyCode:companyCode,sourceDiscrip:sdescript,
	   	 longitude:longitude,latitude:latitude,unitType:unitType,
	    vocEmission:vocEmission,scccode:scccode},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("石化装置密封点添加成功！");
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

//修改石化废水无组织排放数据  YXY 2016.12.25
function updateEffluentEmission(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	 var old_aid=document.getElementById("old_aid").value;
	
	 var year=document.getElementById("sdYear").value;		 
	 var countyId=document.getElementById("countyId").value;
	
	 var companyName=document.getElementById("companyName").value;
	 var companyCode=document.getElementById("companyCode").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	
	 var activityNote=document.getElementById("activityNote").value;
	 var vocEfficency=document.getElementById("vocEfficency").value;
	  var scccode=document.getElementById("scccode").value;
	  var activity=document.getElementById("activity").value;
	  //alert(countyId)
     
	 if(year=="" || activity=="" || vocEfficency=="" ){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		// alert("dsfsfsf")
		  $.post("ajax/ShEffluentEmission/updateEffluentEmission.do",{id:old_aid,year: year,countyId:countyId,companyName:companyName,companyCode:companyCode,
	   	 longitude:longitude,latitude:latitude,activityNote:activityNote,vocEfficency:vocEfficency,scccode:scccode,activity:activity},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("石化废水无组织排放修改成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(id == -2){
									alert("没有权限！");
								}
								else if(id == -1){
									alert("修改失败！");
								}
							   
		
	        });
	 }
}


//添加石化废水无组织排放数据  YXY 2016.11.25
function addEffluentEmission(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	
	 var year=document.getElementById("year").value;		 
	 var countyId=document.getElementById("countyId").value;
	// alert(123)
	
	 var companyName=document.getElementById("companyName").value;
	 var companyCode=document.getElementById("companyCode").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	//获取SCC的描述
	
	
	var sdescript="工艺过程源/"+$("#scccode").find("option:selected").text();
	 var activityNote=document.getElementById("activityNote").value;
	  var activity=document.getElementById("activity").value;
	//alert(cookingNum)
	
	 var vocEfficency=document.getElementById("vocEfficency").value;
	
	 var  scccode=document.getElementById("scccode").value;
	 
	 //alert(scccode)
	// var pmEmf=document.getElementById("pmEmf").value;
	
	 //var scccode = document.getElementById("scccode").value;
     //alert(year+","+countyId+","+cookingNum+","+smokeRate+","+annualRuntime+","+removalEffi+","+scccode);
	
	 if(year=="" || countyId=="" || companyName=="" || vocEfficency=="" || scccode=="" || activity==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		//alert(123)
		  $.post("ajax/ShEffluentEmission/addEffluentEmission.do",{year: year,countyId:countyId,companyName:companyName,companyCode:companyCode,sourceDiscrip:sdescript,
	   	 longitude:longitude,latitude:latitude,activityNote:activityNote,activity:activity,
	    vocEfficency:vocEfficency,scccode:scccode},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("石化废水无组织排放添加成功！");
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

//修改石化VOC处理装置排放数据  YXY 2016.12.25
function updateVocDevice(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	 var old_aid=document.getElementById("old_aid").value;
	
	 var year=document.getElementById("sdYear").value;		 
	 var countyId=document.getElementById("countyId").value;
	
	 var companyName=document.getElementById("companyName").value;
	 var companyCode=document.getElementById("companyCode").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	
	 var workshopSection=document.getElementById("workshopSection").value;
	 var gyName=document.getElementById("gyName").value;
	 var exitAirVolume=document.getElementById("exitAirVolume").value;
	 var exitConcentration=document.getElementById("exitConcentration").value;
	 var annualRuntime=document.getElementById("annualRuntime").value;
	  var scccode=document.getElementById("scccode").value;
	 
     
	 if(year=="" || exitAirVolume=="" || exitConcentration=="" || annualRuntime==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		// alert("dsfsfsf")
		  $.post("ajax/ShVocDeviceEffi/updateVocDeviceEffi.do",{id:old_aid,year: year,countyId:countyId,companyName:companyName,companyCode:companyCode,
	   	 longitude:longitude,latitude:latitude,workshopSection:workshopSection,gyName:gyName,exitAirVolume:exitAirVolume,exitConcentration:exitConcentration,scccode:scccode,annualRuntime:annualRuntime},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("石化VOC处理装置排放修改成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(id == -2){
									alert("没有权限！");
								}
								else if(id == -1){
									alert("修改失败！");
								}
							   
		
	        });
	 }
}
//添加石化VOC处理装置排放数据  YXY 2016.11.25
function addVocDeviceEffi(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	
	 var year=document.getElementById("year").value;		 
	 var countyId=document.getElementById("countyId").value;
	// alert(123)
	
	 var companyName=document.getElementById("companyName").value;
	 var companyCode=document.getElementById("companyCode").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	//获取SCC的描述
	
	
	var sdescript="工艺过程源/"+$("#scccode").find("option:selected").text();
	
	 var workshopSection=document.getElementById("workshopSection").value;
	  var gyName=document.getElementById("gyName").value;
	//alert(cookingNum)
	
	 var exitAirVolume=document.getElementById("exitAirVolume").value;
	 var exitConcentration=document.getElementById("exitConcentration").value;
	 var annualRuntime=document.getElementById("annualRuntime").value;
	
	 var  scccode=document.getElementById("scccode").value;
	 
	 //alert(scccode)
	// var pmEmf=document.getElementById("pmEmf").value;
	
	 //var scccode = document.getElementById("scccode").value;
     //alert(year+","+countyId+","+cookingNum+","+smokeRate+","+annualRuntime+","+removalEffi+","+scccode);
	
	 if(year=="" || countyId=="" || companyName=="" || exitAirVolume=="" || scccode=="" || exitConcentration=="" || annualRuntime==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		//alert(123)
		  $.post("ajax/ShVocDeviceEffi/addVocDeviceEffi.do",{year: year,countyId:countyId,companyName:companyName,companyCode:companyCode,sourceDiscrip:sdescript,
	   	 longitude:longitude,latitude:latitude,workshopSection:workshopSection,gyName:gyName,exitAirVolume:exitAirVolume,exitConcentration:exitConcentration,
	    annualRuntime:annualRuntime,scccode:scccode},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("石化VOC处理装置添加成功！");
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
