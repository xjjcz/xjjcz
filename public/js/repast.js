//修改社会餐饮源  YXY 2015.11.6
function updaterepast(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	 var old_aid=document.getElementById("old_aid").value;
	
	 var year=document.getElementById("sdYear").value;		 
	 var countyId=document.getElementById("countyId").value;
	
	 var restaurant=document.getElementById("restaurant").value;
	 var address=document.getElementById("address").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	
	 var cookingNum=document.getElementById("cookingNum").value;
	

	 var smokeRate=document.getElementById("smokeRate").value;
	 var annualRuntime=document.getElementById("annualRuntime").value;
	 var removalEffi=document.getElementById("removalEffi").value;
	 
	  var gasConsumption=document.getElementById("gasConsumption").value;
	  var coalConsumption=document.getElementById("coalConsumption").value;
	  var coalgasConsumption=document.getElementById("coalgasConsumption").value;
	  var powerConsumption=document.getElementById("powerConsumption").value;
	  var methanolConsumption=document.getElementById("methanolConsumption").value;
	  var otherConsumption=document.getElementById("otherConsumption").value;
	  var otherConunit=document.getElementById("otherConunit").value;
	  var oilConsumption=document.getElementById("oilConsumption").value;
	  
	 //var pmEmf=document.getElementById("pmEmf").value;
	
     
	 if(year=="" || cookingNum=="" || smokeRate=="" || annualRuntime=="" || removalEffi==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/Repast/updateRepast.do",{id:old_aid,year: year,countyId:countyId,restaurant:restaurant,address:address,
	   	 longitude:longitude,latitude:latitude,cookingNum:cookingNum,smokeRate:smokeRate,annualRuntime:annualRuntime,removalEffi:removalEffi,
	    gasConsumption:gasConsumption,coalConsumption:coalConsumption,coalgasConsumption:coalgasConsumption,powerConsumption:powerConsumption
	     ,methanolConsumption:methanolConsumption,otherConsumption:otherConsumption,otherConunit:otherConunit,oilConsumption:oilConsumption},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("社会餐饮源修改成功！");
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
 
//添加社会餐饮源数据  YXY 2015.11.6
function addRepast(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	
	 var year=document.getElementById("year").value;		 
	 var countyId=document.getElementById("countyId").value;
	 
	
	 var restaurant=document.getElementById("restaurant").value;
	 var address=document.getElementById("address").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	//获取SCC的描述
	
	var scc3descrip=$("#scc3").find("option:selected").text();//scc3的描述信息
	var scc4descrip=$("#scc4").find("option:selected").text();//scc4的描述信息
	var sdescript="其他源/"+"餐饮"+"/"+scc3descrip+"/"+scc4descrip;
	 var cookingNum=document.getElementById("cookingNum").value;
	//alert(cookingNum)
	
	 var smokeRate=document.getElementById("smokeRate").value;
	 var annualRuntime=document.getElementById("annualRuntime").value;
	 var removalEffi=document.getElementById("removalEffi").value;
	 //获取燃料消耗量
	  var gasConsumption=document.getElementById("gasConsumption").value;
	  var coalConsumption=document.getElementById("coalConsumption").value;
	  var coalgasConsumption=document.getElementById("coalgasConsumption").value;
	  var powerConsumption=document.getElementById("powerConsumption").value;
	  var methanolConsumption=document.getElementById("methanolConsumption").value;
	  var otherConsumption=document.getElementById("otherConsumption").value;
	  var otherConunit=document.getElementById("otherConunit").value;
	  var oilConsumption=document.getElementById("oilConsumption").value;
	 
	  //获取SCC
	  var scc3=document.getElementById("scc3").value;
	  var scc4=document.getElementById("scc4").value;
	 var  scccode="2001"+scc3+scc4;
	 //alert(scccode)
	// var pmEmf=document.getElementById("pmEmf").value;
	
	 //var scccode = document.getElementById("scccode").value;
     //alert(year+","+countyId+","+cookingNum+","+smokeRate+","+annualRuntime+","+removalEffi+","+scccode);
	
	 if(year=="" || countyId=="" || restaurant=="" || cookingNum=="" || smokeRate=="" || annualRuntime=="" || removalEffi=="" || scc3=="" || scc4==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		
		  $.post("ajax/Repast/addRepast1.do",{year: year,countyId:countyId,restaurant:restaurant,address:address,sourceDiscrip:sdescript,
	   	 longitude:longitude,latitude:latitude,cookingNum:cookingNum,smokeRate:smokeRate,annualRuntime:annualRuntime,removalEffi:removalEffi,
	    gasConsumption:gasConsumption,coalConsumption:coalConsumption,coalgasConsumption:coalgasConsumption,powerConsumption:powerConsumption,
	     methanolConsumption:methanolConsumption,otherConsumption:otherConsumption,otherConunit:otherConunit,oilConsumption:oilConsumption,scccode:scccode},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("社会餐饮源添加成功！");
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

//修改烧烤餐饮源数据 YXY 20160724
function updaterepastBarbecue(){
	//使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	 var old_aid=document.getElementById("old_aid").value;
	
	 var year=document.getElementById("sdYear").value;		 
	 var countyId=document.getElementById("countyId").value;
	
	 var restaurant=document.getElementById("restaurant").value;
	 var address=document.getElementById("address").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	
	 var mealConsumption=document.getElementById("mealConsumption").value;
	

	 var dayRunntime=document.getElementById("dayRunntime").value;
	 var annualRuntime=document.getElementById("annualRuntime").value;
	
	 
	  var gasConsumption=document.getElementById("gasConsumption").value;
	  var coalConsumption=document.getElementById("coalConsumption").value;
	 
	  var powerConsumption=document.getElementById("powerConsumption").value;
	  var methanolConsumption=document.getElementById("methanolConsumption").value;
	  var otherConsumption=document.getElementById("otherConsumption").value;
	  var otherConunit=document.getElementById("otherConunit").value;
	
	  
	 //var pmEmf=document.getElementById("pmEmf").value;

    
	 if(year=="" || mealConsumption=="" || dayRunntime=="" || annualRuntime=="" ){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		   //alert(123)
		  $.post("ajax/RepastBarbecue/updaterepastBarbecue.do",{id:old_aid,year: year,countyId:countyId,restaurant:restaurant,address:address,
	   	 longitude:longitude,latitude:latitude,mealConsumption:mealConsumption,dayRunntime:dayRunntime,annualRuntime:annualRuntime,
	    gasConsumption:gasConsumption,coalConsumption:coalConsumption,powerConsumption:powerConsumption
	     ,methanolConsumption:methanolConsumption,otherConsumption:otherConsumption,otherConunit:otherConunit},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("烧烤餐饮源修改成功！");
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
//添加烧烤餐饮数据  YXY 20160724
function addRepastBarbecue(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	//alert(123)
	 var year=document.getElementById("year").value;		 
	 var countyId=document.getElementById("countyId").value;
	
	 var restaurant=document.getElementById("restaurant").value;
	 var address=document.getElementById("address").value;
	 var longitude=document.getElementById("longitude").value;
	 var latitude=document.getElementById("latitude").value;
	
	 var mealConsumption=document.getElementById("mealConsumption").value;
	//alert(cookingNum)
	
	 var dayRunntime=document.getElementById("dayRunntime").value;
	 var annualRuntime=document.getElementById("annualRuntime").value;
	 //var removalEffi=document.getElementById("removalEffi").value;
	 //获取燃料消耗量
	  var gasConsumption=document.getElementById("gasConsumption").value;
	  var coalConsumption=document.getElementById("coalConsumption").value;
	  //var coalgasConsumption=document.getElementById("coalgasConsumption").value;
	  var powerConsumption=document.getElementById("powerConsumption").value;
	  var methanolConsumption=document.getElementById("methanolConsumption").value;
	  var otherConsumption=document.getElementById("otherConsumption").value;
	  var otherConunit=document.getElementById("otherConunit").value;
	  //var oilConsumption=document.getElementById("oilConsumption").value;
	 
	  //获取SCC
	  var scc3=document.getElementById("scc3").value;
	  var scc4=document.getElementById("scc4").value;
	 var  scccode="2001"+scc3+scc4;
	 //alert(scccode)
	// var pmEmf=document.getElementById("pmEmf").value;
	
	 //var scccode = document.getElementById("scccode").value;
     //alert(year+","+countyId+","+cookingNum+","+smokeRate+","+annualRuntime+","+removalEffi+","+scccode);
	
	 if(year=="" || countyId=="" || restaurant=="" || mealConsumption=="" || dayRunntime=="" || annualRuntime==""  || scc3=="" || scc4==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
		
	 }else{
		//alert(123)
		  $.post("ajax/RepastBarbecue/addRepastBarbecue.do",{year: year,countyId:countyId,restaurant:restaurant,address:address,
	   	 longitude:longitude,latitude:latitude,mealConsumption:mealConsumption,dayRunntime:dayRunntime,annualRuntime:annualRuntime,
	   scccode:scccode,
	     gasConsumption:gasConsumption,coalConsumption:coalConsumption,powerConsumption:powerConsumption,
	     methanolConsumption:methanolConsumption,otherConsumption:otherConsumption,otherConunit:otherConunit},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("烧烤餐饮源添加成功！");
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

//修改家庭餐饮源  YXY 2015.11.6
function updaterepastfamily(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	 var old_aid=document.getElementById("old_aid").value;
	
	 var year=document.getElementById("sdYear").value;		 
	 //var countyId=document.getElementById("countyId").value;
	
	 var nonfarmNum=document.getElementById("nonfarmNum").value;
	 var farmNum=document.getElementById("farmNum").value;
	 var totalNum=document.getElementById("totalNum").value;
	 
	 //获取燃料消耗量
	 var gasConsumption=document.getElementById("gasConsumption").value;
	 var coalConsumption=document.getElementById("coalConsumption").value;
	 var otherConsumption=document.getElementById("otherConsumption").value;
	 var otherConunit=document.getElementById("otherConunit").value;
	 var oilConsumption=document.getElementById("oilConsumption").value;
	
	
	// var cleanerNum=document.getElementById("cleanerNum").value;
	 var smokeRate=document.getElementById("smokeRate").value;
	 var annualRuntime=document.getElementById("annualRuntime").value;
	 var removalEffi=document.getElementById("removalEffi").value;
	
     
	 if(year=="" || totalNum=="" || smokeRate=="" || annualRuntime=="" || removalEffi==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		  $.post("ajax/RepastFamily/updateRepastF.do",{id:old_aid,year: year,nonfarmNum:nonfarmNum,farmNum:farmNum,
	   	 totalNum:totalNum,smokeRate:smokeRate,annualRuntime:annualRuntime,removalEffi:removalEffi,
	    gasConsumption:gasConsumption,coalConsumption:coalConsumption,otherConsumption:otherConsumption,otherConunit:otherConunit,oilConsumption:oilConsumption},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("家庭餐饮源修改成功！");
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


//添加家庭餐饮源数据  YXY 2016.1.16
function addRepastF(){
	 //使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		}); 
	
	
	 var year=document.getElementById("year").value;		 
	 var countyId=document.getElementById("countyId").value;
	
	  var nonfarmNum=document.getElementById("nonfarmNum").value;
	 var farmNum=document.getElementById("farmNum").value;
	 var totalNum=document.getElementById("totalNum").value;
	 //获取燃料消耗量
	 var gasConsumption=document.getElementById("gasConsumption").value;
	 var coalConsumption=document.getElementById("coalConsumption").value;
	 var otherConsumption=document.getElementById("otherConsumption").value;
	 var otherConunit=document.getElementById("otherConunit").value;
	 var oilConsumption=document.getElementById("oilConsumption").value;
	  
	 var smokeRate=document.getElementById("smokeRate").value;
	 var annualRuntime=document.getElementById("annualRuntime").value;
	 var removalEffi=document.getElementById("removalEffi").value;
	
	 var scccode = document.getElementById("scccode").value;
     //alert(year+","+countyId+","+cookingNum+","+smokeRate+","+annualRuntime+","+removalEffi+","+scccode);
	
	 if(year=="" || countyId=="" || totalNum=="" || smokeRate=="" || annualRuntime=="" || removalEffi==""){
		 document.getElementById("addTips").style.display='block';
		 document.getElementById("addTips").innerHTML = "带红色*的数据为必填数据，请检查是否都已填写！";
	 }else{
		
		  $.post("ajax/RepastFamily/addRepastF.do",{year: year,countyId:countyId,nonfarmNum:nonfarmNum,farmNum:farmNum,totalNum:totalNum,smokeRate:smokeRate,annualRuntime:annualRuntime,removalEffi:removalEffi,
	    scccode:scccode,
	     gasConsumption:gasConsumption,coalConsumption:coalConsumption,otherConsumption:otherConsumption,otherConunit:otherConunit,oilConsumption:oilConsumption},function(data){    
			var json = eval("(" + data + ")");			
			var id = json.id;		
							   if(id==1){								    
									alert("家庭餐饮源添加成功！");
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