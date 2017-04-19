$(function(){
		//alert('bbbbb');
		$("#devicename").change(function(){
			var gassurveyid = $("#devicename").val();
			var devicename = $("#devicename option:selected").text();
			var defaultvaule = $("#devicename").val();
			var tablebody = document.getElementById("gasraw");
			var tablebody_1 = document.getElementById("gaspro");
			$(tablebody).children().remove();//每次点击的时候，先把子元素都删除
			$(tablebody_1).children().remove();//每次点击的时候，先把子元素都删除
			
			//alert(devicename);
			//alert(gassurveyid);
			if(defaultvaule == -1){
				//alert('aaaa');
				 $("#devicename1").val("");
				 $("#processflow").val("");
				 $("#production").val("");
				 $("#runhour").val("");
				 $("#emissionradio").val("");
				 $("#handledevicename").val("");
				 $("#handledeviceflow").val("");
				 $("#voczhili").val("");
				 $("#handledeviceefficiency").val("");
				 $("#capcity").val("");
			}else{
				$.post("ajax/WastegasDevice/loadData.do",{'gassurveyid':gassurveyid,'devicename':devicename},function(data){
				 var jsonObj = eval("(" + data + ")"); 
				 //alert(jsonObj[1][0].materialname);
				 //alert(jsonObj[0].processflow);
				 //下面对废弃装置信息赋值
				 $("#devicename1").val(jsonObj[0].devicename1);
				 $("#processflow").val(jsonObj[0].processflow);
				 $("#production").val(jsonObj[0].production);
				 $("#runhour").val(jsonObj[0].runhour);
				 $("#emissionradio").val(jsonObj[0].emissionradio);
				 $("#handledevicename").val(jsonObj[0].handledevicename);
				 $("#handledeviceflow").val(jsonObj[0].handledeviceflow);
				 $("#voczhili").val(jsonObj[0].voczhili);
				 $("#handledeviceefficiency").val(jsonObj[0].handledeviceefficiency);
				 $("#capcity").val(jsonObj[0].capcity);
				 
				 
				 //循环取得原料信息
				 for(var i=0;i<jsonObj[1].length;i++){
					 var materialname = jsonObj[1][i].materialname;
					 var process = jsonObj[1][i].process;
					 var rawproduction = jsonObj[1][i].rawproduction;
					 var materialid = jsonObj[1][i].materialid;
					 //alert(materialid);
					if(i%2==0){
						tablebody.innerHTML+= "<tr class=\"odd\" id=\"rawtablerow_"+materialid+"\"><td class=\"center\"><label><input type=\"checkbox\" class=\"ace\" name=\"items\" /><span class=\"lbl\"></span></label></td><td id=\"materialname_"+materialid+"\">"+materialname+"</td><td id=\"process_"+materialid+"\">"+process+"</td><td id=\"rawproduction_"+materialid+"\">"+rawproduction+"</td><td id=\"rawlistedit_"+materialid+"\"><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"edit_"+materialid+"\"   class=\"ui-pg-div \" onclick=\"wasteGasRawEdit("+materialid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"save_"+materialid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"wasteGasRawSave("+materialid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"delete_"+materialid+"\"  class=\"ui-pg-div\" onclick=\"wasteGasRawDelete("+materialid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
					}else{
						tablebody.innerHTML+= "<tr class=\"odd\" id=\"rawtablerow_"+materialid+"\"><td class=\"center\"><label><input type=\"checkbox\" class=\"ace\" name=\"items\" /><span class=\"lbl\"></span></label></td><td id=\"materialname_"+materialid+"\">"+materialname+"</td><td id=\"process_"+materialid+"\">"+process+"</td><td id=\"rawproduction_"+materialid+"\">"+rawproduction+"</td><td id=\"rawlistedit_"+materialid+"\"><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"edit_"+materialid+"\"   class=\"ui-pg-div \" onclick=\"wasteGasRawEdit("+materialid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"save_"+materialid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"wasteGasRawSave("+materialid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"delete_"+materialid+"\"  class=\"ui-pg-div\" onclick=\"wasteGasRawDelete("+materialid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
					}
    
				 }
				 
				 //循环取得产品信息
				  for(var i=0;i<jsonObj[2].length;i++){
					 var productname = jsonObj[2][i].productname;
					 var downprocess = jsonObj[2][i].downprocess;
					 var consumption = jsonObj[2][i].consumption;
					 var productid = jsonObj[2][i].productid;
					 if(i%2==0){
		        		tablebody_1.innerHTML+= "<tr class=\"odd\" id=\"protablerow_"+productid+"\"><td class=\"center\"><label><input type=\"checkbox\" class=\"ace\" name=\"items\" /><span class=\"lbl\"></span></label></td><td id=\"productname_"+productid+"\">"+productname+"</td><td id=\"downprocess_"+productid+"\">"+downprocess+"</td><td id=\"consumption_"+productid+"\">"+consumption+"</td><td><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"proedit_"+productid+"\"   class=\"ui-pg-div \" onclick=\"wasteGasProEdit("+productid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"prosave_"+productid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"wasteGasProSave("+productid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"prodelete_"+productid+"\"  class=\"ui-pg-div\" onclick=\"wasteGasProDelete("+productid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
		        	}else{
		        		tablebody_1.innerHTML+= "<tr class=\"even\" id=\"protablerow_"+productid+"\"><td class=\"center\"><label><input type=\"checkbox\" class=\"ace\" name=\"items\" /><span class=\"lbl\"></span></label></td><td id=\"productname_"+productid+"\">"+productname+"</td><td id=\"downprocess_"+productid+"\">"+downprocess+"</td><td id=\"consumption_"+productid+"\">"+consumption+"</td><td><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"proedit_"+productid+"\"   class=\"ui-pg-div \" onclick=\"wasteGasProEdit("+productid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"prosave_"+productid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"wasteGasProSave("+productid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"prodelete_"+productid+"\"  class=\"ui-pg-div\" onclick=\"wasteGasProDelete("+productid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
		        	}
				 }
				 
				 
			});
			}
			
			
		});
	});
  //下面原辅料部分列表的各种操作
     function wasteGasRawDelete(materialid){
     	
     		$.post("ajax/WastegasDevice/listDelete.do",{'materialid':materialid},function(data){
     		var jsonObj = eval("("+data+")");
     		if(jsonObj.status==1){
     			//alert("保存成功");
     			alert("删除成功"); 
     			$("#rawtablerow_"+materialid).remove();
     		}else{
     			alert("保存失败");
     		}
     	});
     }
     
     function wasteGasRawSave(materialid){
     	var objArray = new Array("materialname_","process_","rawproduction_");
     	var materialname = $("#i"+objArray[0]+materialid).val();
     	var process = $("#i"+objArray[1]+materialid).val();
     	var rawproduction = $("#i"+objArray[2]+materialid).val();
     	
     	$.post("ajax/WastegasDevice/listUpdate.do",{'materialid':materialid,'materialname':materialname,'process':process,'rawproduction':rawproduction},function(data){
     		var jsonObj = eval("("+data+")");
     		if(jsonObj.status==1){
     			//alert("保存成功");
     			$("#materialname_"+materialid).html(materialname);
     			$("#process_"+materialid).html(process);
     			$("#rawproduction_"+materialid).html(rawproduction);
     			
     			$("#edit_"+materialid).css("display","");
				$("#save_"+materialid).css("display","none");
				$("#delete_"+materialid).css("display","");
     		}else{
     			alert("保存失败");
     		}
     	});
     }              
                   
   function wasteGasRawEdit(id){
     	//alert("materialid:"+id);
		var objArray = new Array("materialname_","process_","rawproduction_");
		var len = objArray.length;
		for(var i=0;i<len;i++){
		    setInputgas(objArray[i],id);
		}
		
		$("#edit_"+id).css("display","none");
		$("#save_"+id).css("display","");
		$("#delete_"+id).css("display","none");
	
	 }
   function setInputgas(objstr,materialid){
		
		var obj = document.getElementById(objstr+materialid);
		var objVal = obj.innerHTML;
		//var objVal = $(obj).val();
		//alert(objVal);
		var id = "i"+ objstr+materialid;
		if(objstr=="materialname_"||objstr=="process_"||
		objstr=="productname_"||objstr=="downprocess_"){
		obj.innerHTML = "<input class=\"form-control\" style=\"width:50%\" id="+id+" name="+id+" value="+objVal+" maxlenth=\"200\"/>";
		}
		else
			obj.innerHTML = "<input class=\"form-control\" style=\"width:50%\" id="+id+" name="+id+" value="+objVal+" onkeyup=\"checkNum(this);\"/>";
			
	}
   //产品信息各种操作
   function wasteGasProEdit(id){
     	//alert("materialid:"+id);
		var objArray = new Array("productname_","downprocess_","consumption_");
		var len = objArray.length;
		for(var i=0;i<len;i++){
		    setInput(objArray[i],id);
		}
		$("#proedit_"+id).css("display","none");
		$("#prosave_"+id).css("display","");
		$("#prodelete_"+id).css("display","none");
	
	 }
   function wasteGasProSave(materialid){
     	var objArray = new Array("productname_","downprocess_","consumption_");
     	var productname = $("#i"+objArray[0]+materialid).val();
     	var downprocess = $("#i"+objArray[1]+materialid).val();
     	var consumption = $("#i"+objArray[2]+materialid).val();
     	
     	$.post("ajax/WastegasDevice/proListUpdate.do",{'materialid':materialid,'productname':productname,'downprocess':downprocess,'consumption':consumption},function(data){
     		var jsonObj = eval("("+data+")");
     		if(jsonObj.status==1){
     			//alert("保存成功");
     			$("#productname_"+materialid).html(productname);
     			$("#downprocess_"+materialid).html(downprocess);
     			$("#consumption_"+materialid).html(consumption);
     			
     			$("#proedit_"+materialid).css("display","");
				$("#prosave_"+materialid).css("display","none");
				$("#prodelete_"+materialid).css("display","");
     		}else{
     			alert("保存失败");
     		}
     	});
     }              
        //产品信息列表
	 function wasteGasProDelete(materialid){
     		//这里的materialid 实际上是product 的id，代码重用，懒得改了
     		$.post("ajax/WastegasDevice/proListDelete.do",{'materialid':materialid},function(data){
     		var jsonObj = eval("("+data+")");
     		if(jsonObj.status==1){
     			//alert("保存成功");
     			alert("删除成功"); 
     			$("#protablerow_"+materialid).remove();
     		}else{
     			alert("保存失败");
     		}
     	});
     }
function saveWasteDeviceInfo(){
				//alert(id);
				//alert('aaa');
				var  processflow = $("#processflow").val();
				var production  = $("#production").val();
				var runhour = $("#runhour").val();
				var emissionradio = $("#emissionradio").val();
				var handledevicename = $("#handledevicename").val();
				var handledeviceflow = $("#handledeviceflow").val();
				var voczhili = $("#voczhili").val();
				var gassurveyid = $("#devicename").val();
				//alert(gassurveyid);
				
			    //alert(processflow);
				$.post("ajax/WastegasDevice/saveDate.do",
					{'gassurveyid':gassurveyid,'processflow':processflow,'production':production,'runhour':runhour,'emissionradio':emissionradio,'handledevicename':handledevicename,'handledeviceflow':handledeviceflow,'voczhili':voczhili},
					function(data){    
			    		alert('保存成功');
			    		var jsonObj = eval("(" + data + ")");  
			    		
			            $("#processflow").val(processflow);
						$("#production").val(production);
						$("#runhour").val(runhour);
						$("#emissionradio").val(emissionradio);
						$("#handledevicename").val(handledevicename);
						$("#handledeviceflow").val(handledeviceflow);
						$("#voczhili").val(voczhili);
			    	
			        
			       
			    	});  
			}
		 //下面是产品列表的操作
     //by haoqiang
     function createProItem(){
     
     	 var gassurveyid = $("#devicename").val();
     	 var factoryid = $("#factoryid").val();
     	 //var productname = 
     	 //alert(factoryid);
     	 if(gassurveyid=="-1"){
     	 	alert("请先选择废气排放装置");
     	 	return;
     	 }else{
     	 	//新添加一行每一个 td 里面实质上是input 框
     	 	 	var tbody = document.getElementById("gaspro");
		     	var row = tbody.insertRow(0);
		     	row.setAttribute("id","protablerow_");
		     	
		     	var cell_0 = document.createElement("td");
		     	cell_0.className="center";
		     	cell_0.setAttribute("id","imaterialid");
		     	cell_0.innerHTML = "<input type='checkbox' class='ace' value=''/><span class='lbl'></span>";
		     	
		     	var cell_1 = document.createElement("td");
		     	cell_1.innerHTML = "<input class=\"form-control\" style=\"width:50%;height:26px;\" id=\"iproductname\" maxlength=\"200\" />";
		     	
		     	var cell_2 = document.createElement("td");
		     	cell_2.innerHTML = "<input class=\"form-control\" style=\"width:50%;height:26px;\" id=\"idownprocess\" maxlength=\"200\" />";
		     	
		     	var cell_3 = document.createElement("td");
		     	cell_3.innerHTML = "<input class=\"form-control\" style=\"width:50%;height:26px;\" id=\"iconsumption\"  onkeyup=\"checkNum(this);\" />";
		     	
		     	var cell_4 = document.createElement("td");
		     	cell_4.innerHTML = "<div id=\"proedittd\" class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"prosave\" class=\"ui-pg-div\" onclick=\"proSaveNew()\"><span class=\"ui-icon icon-refresh green\"></span></span></div>";
		     	
		     	//循环添加
		     	for(var i=0;i<5;i++){
		     		  var cellobj = eval("cell_" + i);
		     		  row.appendChild(cellobj);
		     	}
     	 }
     }        
     //新插入一行的时候上面实质上只需要一个保存按钮，这个方法就是保存按钮上的
     function proSaveNew(){
     	var gassurveyid = $("#devicename").val();
     	var factoryid = $("#factoryid").val();
     	//提交数据
     	var iproductname = $("#iproductname").val();
     	var idownprocess = $("#idownprocess").val();
     	var iconsumption = $("#iconsumption").val();
     	if(iproductname==""||idownprocess==""||iconsumption==""){
     		alert("请填写完整再提交");
     	}else{
     		//数据填写完整，ajax提交
     		$.post("ajax/WastegasDevice/proAddNew.do",{'gassurveyid':gassurveyid,'factoryid':factoryid,'productname':iproductname,'downprocess':idownprocess,'consumption':iconsumption},function(data){
	     		var jsonObj = eval("("+data+")");
	     		var productname = $("#iproductname").val();
		     	var downprocess = $("#idownprocess").val();
		     	var consumption = $("#iconsumption").val();
		     	var productid = jsonObj.productid;
		     	//alert(materialid);
		     	var status = jsonObj.productid;
		     	
		     	
		     	//修改生成表格tr td 的id
		     	$("#iproductname").parent().attr("id","productname_"+productid);
		     	$("#idownprocess").parent().attr("id","downprocess_"+productid);
		     	$("#iconsumption").parent().attr("id","consumption_"+productid);
		     	$("#proedittd").parent().attr("id","prolistedit_"+productid);
		     	$("#proedittd").parent().parent().attr("id","protablerow_"+productid);//这一行用于给tr 添加id 属性，删除操作需要用到行id
		     	
		     	$("#productname_"+productid).html(productname);
     			$("#downprocess_"+productid).html(downprocess);
     			$("#consumption_"+productid).html(consumption);
     			$("#prolistedit_"+productid).html("<div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"proedit_"+productid+"\"   class=\"ui-pg-div \" onclick=\"wasteGasProEdit("+productid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"prosave_"+productid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"wasteGasProSave("+productid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"prodelete_"+productid+"\"  class=\"ui-pg-div\" onclick=\"wasteGasProDelete("+productid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div>");
		     	
		     	if(status==1){
		     		alert("插入成功");
		     	}
		     	
	     	});
     	}
     }
     //wastegas下添加原材料   
     //by haoqiang
     function createRawItem(){
     
     	 var gassurveyid = $("#devicename").val();
     	 var factoryid = $("#factoryid").val();
     	 //var productname = 
     	 //alert(factoryid);
     	 if(gassurveyid=="-1"){
     	 	alert("请先选择废气排放装置");
     	 	return;
     	 }else{
     	 	//新添加一行每一个 td 里面实质上是input 框
     	 	 	var tbody = document.getElementById("gasraw");
		     	var row = tbody.insertRow(0);
		     	row.setAttribute("id","rawtablerow_");
		     	
		     	var cell_0 = document.createElement("td");
		     	cell_0.className="center";
		     	cell_0.setAttribute("id","imaterialid");
		     	cell_0.innerHTML = "<input type='checkbox' class='ace' value=''/><span class='lbl'></span>";
		     	
		     	var cell_1 = document.createElement("td");
		     	cell_1.innerHTML = "<input class=\"form-control\" style=\"width:50%;height:26px;\" id=\"imaterialname\"  maxlength=\"200\"/>";
		     	
		     	var cell_2 = document.createElement("td");
		     	cell_2.innerHTML = "<input class=\"form-control\" style=\"width:50%;height:26px;\" id=\"iprocess\" maxlength=\"20\"/>";
		     	
		     	var cell_3 = document.createElement("td");
		     	cell_3.innerHTML = "<input class=\"form-control\" style=\"width:50%;height:26px;\" id=\"irawproduction\" onkeyup=\"checkNum(this);\"/>";
		     	
		     	var cell_4 = document.createElement("td");
		     	cell_4.innerHTML = "<div id=\"rawedittd\" class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"save\" class=\"ui-pg-div\" onclick=\"saveNew()\"><span class=\"ui-icon icon-refresh green\"></span></span></div>";
		     	
		     	//循环添加
		     	for(var i=0;i<5;i++){
		     		  var cellobj = eval("cell_" + i);
		     		  row.appendChild(cellobj);
		     	}
     	 }
     }        
     //新插入一行的时候上面实质上只需要一个保存按钮，这个方法就是保存按钮上的
     function saveNew(){
     	var gassurveyid = $("#devicename").val();
     	var factoryid = $("#factoryid").val();
     	//提交数据
     	var imaterialname = $("#imaterialname").val();
     	var iprocess = $("#iprocess").val();
     	var irawproduction = $("#irawproduction").val();
     	if(imaterialname==""||iprocess==""||irawproduction==""){
     		alert("请填写完整再提交");
     	}else{
     		//数据填写完整，ajax提交
     		$.post("ajax/WastegasDevice/addNew.do",{'gassurveyid':gassurveyid,'factoryid':factoryid,'materialname':imaterialname,'process':iprocess,'rawproduction':irawproduction},function(data){
	     		var jsonObj = eval("("+data+")");
	     		var materialname = $("#imaterialname").val();
		     	var process = $("#iprocess").val();
		     	var rawproduction = $("#irawproduction").val();
		     	var materialid = jsonObj.materialid;
		     	//alert(materialid);
		     	var status = jsonObj.materialid;
		     	
		     	
		     	//修改生成表格tr td 的id
		     	$("#imaterialname").parent().attr("id","materialname_"+materialid);
		     	$("#iprocess").parent().attr("id","process_"+materialid);
		     	$("#irawproduction").parent().attr("id","rawproduction_"+materialid);
		     	$("#rawedittd").parent().attr("id","rawlistedit_"+materialid);
		     	$("#rawedittd").parent().parent().attr("id","rawtablerow_"+materialid);//这一行用于给tr 添加id 属性，删除操作需要用到行id
		     	
		     	$("#materialname_"+materialid).html(materialname);
     			$("#process_"+materialid).html(process);
     			$("#rawproduction_"+materialid).html(rawproduction);
     			$("#rawlistedit_"+materialid).html("<div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"edit_"+materialid+"\"   class=\"ui-pg-div \" onclick=\"wasteGasRawEdit("+materialid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"save_"+materialid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"wasteGasRawSave("+materialid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"delete_"+materialid+"\"  class=\"ui-pg-div\" onclick=\"wasteGasRawDelete("+materialid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div>");
		     	
		     	if(status==1){
		     		alert("插入成功")
		     	}
		     	
	     	});
     	}
     }