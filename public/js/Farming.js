//添加农牧源中的畜牧养殖源信息   YXY  2015.9.1
function addLiveBreeding(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	 var year=document.getElementById("lyear").value;	
	 var countyid=document.getElementById("countyid").value;	
	 var farmname=document.getElementById("farmname").value;
	 var address=document.getElementById("address").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	 var animalkind=document.getElementById("animalkind").value;
	 var manageStage=document.getElementById("manageStage").value;
	 var activityLevel=document.getElementById("activityLevel").value;
	 var scccode=document.getElementById("scccode").value;
	 
	 var computeCycle=document.getElementById("computeCycle").value;
	 
	 var nh3Emf=document.getElementById("nh3Emf").value;	
	 var vocEmf=document.getElementById("vocEmf").value;

	if(year=="" || countyid=="" || scccode=="" || activityLevel==""|| computeCycle==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/LivestockBreeding/addLive.do",{ year: year,countyid:countyid,farmname:farmname,address:address,longitude:longitude,latitude:latitude,
	   	manageStage:manageStage,computeCycle:computeCycle,scccode:scccode,animalkind:animalkind,activityLevel:activityLevel,nh3Emf:nh3Emf,vocEmf:vocEmf},function(data){    
			var json = eval("(" + data + ")");  
			var liveid = json.liveid;
			
							   if(liveid==1){								    
									alert("畜牧集约化养殖源保存成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(liveid == -2){
									alert("没有权限！");
								}
								else if(liveid == -1){
									alert("保存失败！");
								}
							   
		
	        });
	 }
}

//更新畜牧集约化养殖源数据  YXY 2015.9.1
function updateLive(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	 var id = document.getElementById("old_aid").value;
	 var year=document.getElementById("lyear").value;	
	 var countyid=document.getElementById("countyid").value;	
	 var farmname=document.getElementById("farmname").value;
	 var address=document.getElementById("address").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	 
	 var animalkind=document.getElementById("animalkind").value;
	 
	 var manageStage=document.getElementById("manageStage").value;
	 var activityLevel=document.getElementById("activityLevel").value;
	 
	 var computeCycle=document.getElementById("computeCycle").value;
	
	 var scccode=document.getElementById("scccode").value;
	 var nh3Emf=document.getElementById("nh3Emf").value;	
	 var vocEmf=document.getElementById("vocEmf").value;
      
	if(year=="" || countyid=="" || scccode=="" || activityLevel=="" || nh3Emf=="" || vocEmf=="" || computeCycle==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/LivestockBreeding/updateLive.do",{ id:id,year: year,countyid:countyid,farmname:farmname,address:address,longitude:longitude,latitude:latitude,
	   	animalkind:animalkind,manageStage:manageStage,scccode:scccode,computeCycle:computeCycle,activityLevel:activityLevel,nh3Emf:nh3Emf,vocEmf:vocEmf},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("畜牧集约化养殖源更新成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("没有权限！");
								}
								else if(flag == -1){
									alert("更新失败！");
								}
							   
		
	        });
	 }
}

//更新农肥施用源信息  YXY 2015.9.5 
function updateFertilization(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});
	  var id = document.getElementById("old_aid").value;
	 var year=document.getElementById("lyear").value;	
	 var countyid=document.getElementById("countyId").value;	
	 var scccode=document.getElementById("scccode").value;
	 var crop=document.getElementById("crop").value;
	 var niFertilizer=document.getElementById("niFertilizer").value;
	 var activityLevel=document.getElementById("activityLevel").value;
	 
	 var nh3Emf=document.getElementById("nh3Emf").value;
	 var vocEmf=document.getElementById("vocEmf").value;
	 if(year=="" || countyid=="" || scccode=="" || activityLevel=="" || nh3Emf=="" || vocEmf==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/Fertilization/updateFertilization.do",{ id:id,year: year,countyId:countyid,scccode:scccode,crop:crop,niFertilizer:niFertilizer,activityLevel:activityLevel,
	   	nh3Emf:nh3Emf,vocEmf:vocEmf},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("农肥施用源更新成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("没有权限！");
								}
								else if(flag == -1){
									alert("更新失败！");
								}
							   
		
	        });
	 }
}
//添加农肥施用源数据  YXY 2015.9.5
function addFertilization(){
	//使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});	
	 
	 var year=document.getElementById("lyear").value;	
	 var countyid=document.getElementById("countyId").value;
	
	 var scccode=document.getElementById("scccode").value;
	
	 var crop=document.getElementById("crop").value;
	 var niFertilizer=document.getElementById("niFertilizer").value;
	 var activityLevel=document.getElementById("activityLevel").value;
	
	 var nh3Emf=document.getElementById("nh3Emf").value;
	 var vocEmf=document.getElementById("vocEmf").value;

	 if(year=="" || countyid=="" || scccode=="" || activityLevel=="" || nh3Emf=="" || vocEmf==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/Fertilization/addFertilization.do",{year: year,countyId:countyid,scccode:scccode,crop:crop,niFertilizer:niFertilizer,activityLevel:activityLevel,
	   	nh3Emf:nh3Emf,vocEmf:vocEmf},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("农肥施用源添加成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("没有权限！");
								}
								else if(flag == -1){
									alert("添加失败！");
								}
							   
		
	        });
	 }
}

//添加固氮植物源数据  YXY 2015.9.5
function addPesticide(){
	//使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});	
	 var year=document.getElementById("lyear").value;	
	 var countyid=document.getElementById("countyId").value;	
	 var scccode=document.getElementById("scccode").value;
	 var pesticide=document.getElementById("pesticide").value;
	 
	 var activityLevel=document.getElementById("activityLevel").value;
	 
	 var nh3Emf=document.getElementById("nh3Emf").value;
	 var vocEmf=document.getElementById("vocEmf").value;
	 if(year=="" || countyid=="" || scccode=="" || activityLevel==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/Pesticide/addPesticide.do",{year: year,countyId:countyid,scccode:scccode,pesticide:pesticide,activityLevel:activityLevel,
	   	nh3Emf:nh3Emf,vocEmf:vocEmf},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("固氮植物源添加成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("没有权限！");
								}
								else if(flag == -1){
									alert("添加失败！");
								}
							   
		
	        });
	 }
}

//添加秸秆堆肥源数据  YXY 2015.9.5
function addStrawCompost(){
	//使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});	
	 var year=document.getElementById("lyear").value;	
	 var countyid=document.getElementById("countyId").value;	
	 var scccode=document.getElementById("scccode").value;
	 var crop=document.getElementById("crop").value;	
	 var activityLevel=document.getElementById("activityLevel").value;
	 var activityUnit=document.getElementById("activityUnit").value;
	 var nh3Emf=document.getElementById("nh3Emf").value;
	 var vocEmf=document.getElementById("vocEmf").value;
	 if(year=="" || countyid=="" || scccode=="" || activityLevel=="" || nh3Emf=="" || vocEmf==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/StrawCompost/addStraw.do",{year: year,countyId:countyid,scccode:scccode,crop:crop,activityLevel:activityLevel,
	   	activityUnit:activityUnit,nh3Emf:nh3Emf,vocEmf:vocEmf},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("秸秆堆肥源添加成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("没有权限！");
								}
								else if(flag == -1){
									alert("添加失败！");
								}
							   
		
	        });
	 }
}

//更新固氮植物源数据 YXY 2015.9.6
function updatePesticide(){
	//使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});
	 var id = document.getElementById("old_aid").value;
	 var year=document.getElementById("lyear").value;		
	 var countyid=document.getElementById("countyId").value;
	 
	 var scccode=document.getElementById("scccode").value;
	 var pesticide=document.getElementById("pesti").value;
	 
	 var activityLevel=document.getElementById("activityLevel").value;
	 
	 var nh3Emf=document.getElementById("nh3Emf").value;
	 var vocEmf=document.getElementById("vocEmf").value;
	 if(year=="" || countyid=="" || scccode=="" || activityLevel==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/Pesticide/updatePesti.do",{id:id,year: year,countyId:countyid,pesticide:pesticide,activityLevel:activityLevel,
	   	nh3Emf:nh3Emf,vocEmf:vocEmf},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("固氮植物源更新成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("没有权限！");
								}
								else if(flag == -1){
									alert("更新失败！");
								}
							   
		
	        });
	 }
}

//更新秸秆堆肥源数据   YXY 2015.9.6
function updateStrawCompost(){
	//使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});
	 var id = document.getElementById("old_aid").value;
	 var year=document.getElementById("lyear").value;	
	 var countyid=document.getElementById("countyId").value;	
	 var scccode=document.getElementById("scccode").value;
	 var crop=document.getElementById("crop").value;	
	 var activityLevel=document.getElementById("activityLevel").value;
	 var activityUnit=document.getElementById("activityUnit").value;
	 var nh3Emf=document.getElementById("nh3Emf").value;
	 var vocEmf=document.getElementById("vocEmf").value;
	 if(year=="" || countyid=="" || scccode=="" || activityLevel=="" || nh3Emf=="" || vocEmf==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/StrawCompost/updateStraw.do",{id:id,year: year,countyId:countyid,crop:crop,activityLevel:activityLevel,
	   	activityUnit:activityUnit,nh3Emf:nh3Emf,vocEmf:vocEmf},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("秸秆堆肥源更新成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("没有权限！");
								}
								else if(flag == -1){
									alert("更新失败！");
								}
							   
		
	        });
	 }
}

//更新畜牧散养源数据  YXY 2015.9.1
function updateFree(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	 var id = document.getElementById("old_aid").value;
	 var year=document.getElementById("lyear").value;	
	 var countyid=document.getElementById("countyid").value;	
	 
	 
	 var animalkind=document.getElementById("animalkind").value;
	 
	 var manageStage=document.getElementById("manageStage").value;
	 var activityLevel=document.getElementById("activityLevel").value;
	 
	 var computeCycle=document.getElementById("computeCycle").value;
	
	 var scccode=document.getElementById("scccode").value;
	 var nh3Emf=document.getElementById("nh3Emf").value;	
	 var vocEmf=document.getElementById("vocEmf").value;
      
	if(year=="" || countyid=="" || scccode=="" || activityLevel=="" || computeCycle==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/FreeStockbreeding/updateFreeBreed.do",{ id:id,year: year,countyid:countyid,animalkind:animalkind,manageStage:manageStage,
	   	scccode:scccode,computeCycle:computeCycle,activityLevel:activityLevel,nh3Emf:nh3Emf,vocEmf:vocEmf},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("畜牧散养源更新成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("没有权限！");
								}
								else if(flag == -1){
									alert("更新失败！");
								}
							   
		
	        });
	 }
}

//添加农牧源中的畜牧散养源信息   YXY  2015.9.1
function addFreeBreeding(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	 var year=document.getElementById("lyear").value;	
	 var countyid=document.getElementById("countyid").value;	
	 
	 var animalkind=document.getElementById("animalkind").value;
	 var manageStage=document.getElementById("manageStage").value;
	 var activityLevel=document.getElementById("activityLevel").value;
	 var scccode=document.getElementById("scccode").value;
	 
	 var computeCycle=document.getElementById("computeCycle").value;
	 
	 var nh3Emf=document.getElementById("nh3Emf").value;	
	 var vocEmf=document.getElementById("vocEmf").value;
     
	if(year=="" || countyid=="" || scccode=="" || activityLevel==""|| computeCycle==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/FreeStockbreeding/addFreeBreed.do",{ year: year,countyid:countyid,manageStage:manageStage,computeCycle:computeCycle,scccode:scccode,
	   	animalkind:animalkind,activityLevel:activityLevel,nh3Emf:nh3Emf,vocEmf:vocEmf},function(data){    
			var json = eval("(" + data + ")");  
			var liveid = json.liveid;
			
							   if(liveid==1){								    
									alert("畜牧散养源保存成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(liveid == -2){
									alert("没有权限！");
								}
								else if(liveid == -1){
									alert("保存失败！");
								}
							   
		
	        });
	 }
}

//更新土壤本底源数据  YXY 2015.10.13
function updateBaseSoil(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	 var id = document.getElementById("old_aid").value;
	 var year=document.getElementById("lyear").value;	
	 var countyid=document.getElementById("countyId").value;	
	 
	 
	 var cultivateArea=document.getElementById("cultivateArea").value;
	 
	
	
	 var scccode=document.getElementById("scccode").value;
	 var nh3Emf=document.getElementById("nh3Emf").value;	
	 var vocEmf=document.getElementById("vocEmf").value;
      
	if(year=="" || countyid=="" || scccode=="" || cultivateArea==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/BaseSoil/updateBaseSoil.do",{ id:id,year: year,countyId:countyid,cultivateArea:cultivateArea,nh3Emf:nh3Emf,vocEmf:vocEmf},function(data){    
			var json = eval("(" + data + ")");  
			var flag = json.flag;
			
							   if(flag==1){								    
									alert("土壤本底源更新成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(flag == -2){
									alert("没有权限！");
								}
								else if(flag == -1){
									alert("更新失败！");
								}
							   
		
	        });
	 }
}

//添加农牧源土壤本底源信息   YXY  2015.10.13
function addBaseSoil(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	 var year=document.getElementById("lyear").value;	
	 
	 var countyId=document.getElementById("countyId").value;		 
	 var cultivateArea=document.getElementById("cultivateArea").value;	
	 var scccode=document.getElementById("scccode").value;	 	 
	 var nh3Emf=document.getElementById("nh3Emf").value;	
	 var vocEmf=document.getElementById("vocEmf").value;
    
	if(year=="" || countyId=="" || scccode=="" || cultivateArea==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/BaseSoil/addSoil.do",{year:year,countyId:countyId,cultivateArea:cultivateArea,scccode:scccode,nh3Emf:nh3Emf,vocEmf:vocEmf},function(data){    
			var json = eval("(" + data + ")");  
			var liveid = json.liveid;
			
							   if(liveid==1){								    
									alert("土壤本底源保存成功！");
									document.getElementById("addTips").style.display='none';									
								}
								else if(liveid == -2){
									alert("没有权限！");
								}
								else if(liveid == -1){
									alert("保存失败！");
								}
							   
		
	        });
	 }
}
