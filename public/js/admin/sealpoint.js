 
//下面是装置密封垫部分对图标的操作
	//click + sign to add a new item
	//1. create seal raw items
	function createSealRawItem(tbodyname){
		//不同函数用不同参数表
		 var point_devicename = $("#point_devicename").val();//密封装置id
		 var objArray = new Array("sealmaterialname","sealprocess","sealrawproduction","sealrawlistedit");//这里包含了最后的编辑按钮的id
		 var editButtonArray = new Array("sealedit_","sealsave_","sealdelete_");//使用时修改
		 var editButtonFunctionNames = new Array("sealRawEdit","sealRawSave","sealRawDelete");
		 var rowName = "sealrawtablerow_";
		 var saveNewFunctionName = "saveSealRawNew";
		
     	 if(point_devicename=="-1"){
     	 	alert("请先选择废气排放装置");
     	 	return;
     	 }else{
     		createCommonNew(tbodyname,objArray,editButtonArray,editButtonFunctionNames,rowName,saveNewFunctionName);
     	 }
	}
	
	//这个函数只有一个作用，就是组装那些不通用的 json 数据
	function saveSealRawNew(tbodyname,objArray,editButtonArray,editButtonFunctionNames,rowName){
		var jsonData = commonSavePre(objArray);
     	
		//下面是需要修改的部分
   		var sealpointsurveyid = $("#point_devicename").val();
     	var factoryid = $("#factoryid").val();
     	jsonData['sealpointsurveyid'] = sealpointsurveyid;
     	jsonData['factoryid'] = factoryid;
     	
     	//下面调用的函数名也需要改
     	commonSaveNew(objArray,editButtonArray,editButtonFunctionNames,rowName,"GetSealPoint","saveSealRawNew",jsonData);
	}
	
	
	//---------------------------------------------------------------------
	
	//2. create seal pro items
	function createSealProItem(tbodyname){
	//不同函数用不同参数表
		 var point_devicename = $("#point_devicename").val();//密封装置id
		 var objArray = new Array("sealproductname","sealproductprocess","sealproproduction","sealprolistedit");//这里包含了最后的编辑按钮的id
		 var editButtonArray = new Array("sealproedit_","sealprosave_","sealprodelete_");//使用时修改
		 var editButtonFunctionNames = new Array("sealProEdit","sealProSave","sealProDelete");
		 var rowName = "sealprotablerow_";
		 var saveNewFunctionName = "saveSealProNew";
		
     	 if(point_devicename=="-1"){
     	 	alert("请先选择废气排放装置");
     	 	return;
     	 }else{
     		createCommonNew(tbodyname,objArray,editButtonArray,editButtonFunctionNames,rowName,saveNewFunctionName);
     	 }
	}
	
	function saveSealProNew(tbodyname,objArray,editButtonArray,editButtonFunctionNames,rowName){
		var jsonData = commonSavePre(objArray);
     	
		//下面是需要修改的部分
   		var sealpointsurveyid = $("#point_devicename").val();
     	var factoryid = $("#factoryid").val();
     	jsonData['sealpointsurveyid'] = sealpointsurveyid;
     	jsonData['factoryid'] = factoryid;
     	
     	//下面调用的函数名也需要改
     	commonSaveNew(objArray,editButtonArray,editButtonFunctionNames,rowName,"GetSealPoint","saveSealProNew",jsonData);
	}
	
	//---------------------------------------------------------------------
	
	//3. create seal info items
	//use param type to identify which item it is
	function createSealInfoItem(tbodyname){
	//不同函数用不同参数表
		 var point_devicename = $("#point_devicename").val();//密封装置id
		 var objArray = new Array("unittype","leaknum","guanlianrate","rate","sealrunhour","controltech","efficiency","sealcapcity","sealinfolistedit");//这里包含了最后的编辑按钮的id
		 var editButtonArray = new Array("sealinfoedit_","sealinfosave_","sealinfodelete_");//使用时修改
		 var editButtonFunctionNames = new Array("sealInfoEdit","sealInfoSave","sealInfoDelete");
		 var rowName = "sealinfotablerow_";
		 var saveNewFunctionName = "saveSealInfoNew";
		
     	 if(point_devicename=="-1"){
     	 	alert("请先选择废气排放装置");
     	 	return;
     	 }else{
     		createCommonNew(tbodyname,objArray,editButtonArray,editButtonFunctionNames,rowName,saveNewFunctionName);
     	 }
		
	}
	
	function saveSealInfoNew(tbodyname,objArray,editButtonArray,editButtonFunctionNames,rowName){
		var jsonData = commonSavePre(objArray);
     	
		
		
		//下面是需要修改的部分
   		var sealpointsurveyid = $("#point_devicename").val();
     	var factoryid = $("#factoryid").val();
     	jsonData['sealpointsurveyid'] = sealpointsurveyid;
     	jsonData['factoryid'] = factoryid;
     	
     	switch(tbodyname){
			case 'sealfamen':
				jsonData['type'] = '1';
				break;
			case 'sealbeng':
				jsonData['type'] = '2';
				break;
			case 'sealfalan':
				jsonData['type'] = '3';
				break;
			case 'seallianjie':
				jsonData['type'] = '4';
				break;
			case 'sealkaiguan':
				jsonData['type'] = '5';
				break;
			case 'sealother':
				jsonData['type'] = '6';
				break;
				
		}
     	
     	//下面调用的函数名也需要改
     	commonSaveNew(objArray,editButtonArray,editButtonFunctionNames,rowName,"GetSealPoint","saveSealInfoNew",jsonData);
     	//$("#"+objArray[len-1]).children("span").get(0).onclick=function(){
		   //  	}
	}
	
	//---------------------------------------------------------------------
	
	
	
	//改变编辑按钮的显示状态
	function changeDisplayStatus(objArray,id){
		var len = objArray.length;
		for(var i=0;i<len;i++){
			jqueryObj = $("#"+objArray[i]+id);
			if(jqueryObj.css("display")=="none"){
				jqueryObj.css("display","");
			}else{
				jqueryObj.css("display","none");
			}
		}
		
	}
	
	//依次返回一行所有数据，保存在一个数组中
	function getTdValues(id,objArray){
		var len = objArray.length;
     	//alert(len);
     	var tdArray = new Array();
     	for(var i=0;i<len;i++){
     		tdArray[i] =  $("#i"+objArray[i]+id).val();//ajax 传递数据与数组顺序对应
     	}
     	return tdArray;
	}
	
	//编辑的通用函数
	function commonEdit(id,objArray,editButtonArray){
		
		var len = objArray.length;
		for(var i=0;i<len;i++){
		
		    setInput(objArray[i],id);
		}
		changeDisplayStatus(editButtonArray,id);
		
	}
	function setInput(objstr,materialid){
		
		var obj = document.getElementById(objstr+materialid);
		var objVal = obj.innerHTML;
		//var objVal = $(obj).val();
		//alert(objVal);
		var id = "i"+ objstr+materialid;
		if(objstr=="sealmaterialname"||objstr=="sealprocess"||
		objstr=="sealproductname"||objstr=="sealproductprocess"||objstr=="unittype"){
		obj.innerHTML = "<input class=\"form-control\" style=\"width:50%\" id="+id+" name="+id+" value="+objVal+" maxlenth=\"200\"/>";
		}
		else
			obj.innerHTML = "<input class=\"form-control\" style=\"width:50%\" id="+id+" name="+id+" value="+objVal+" onkeyup=\"checkNum(this);\"/>";
			
	}
	
	//保存的通用函数
	//传入参数依次为，行id,td元素 id数组,编辑按钮数组, 传递到后台的json数据,后台对应Action的名称,调用该函数的函数名称
	function commonSave(id,objArray,editButtonArray,tdArray,jsonData,actionName,functionName){
		var actionDoName = "do"+ functionName.replace(/(\w)/,function(v){return v.toUpperCase()}); 
		//alert(actionDoName);
		//alert(actionName);
     	var len = objArray.length;
     	$.post("ajax/"+actionName+"/"+actionDoName+".do",jsonData,function(data){
     		var jsonObj = eval("("+data+")");
     		if(jsonObj.status==1){
     			//alert("保存成功");
     			for(var i=0;i<len;i++){
     				$("#"+objArray[i]+id).html(tdArray[i]);
     			}
     			changeDisplayStatus(editButtonArray,id);
     		}else{
     			alert("保存失败");
     		}
     	});
	}
	
	//删除的函数
	function commonDelete(id,actionName,functionName,rowName){
		var actionDoName = "do"+ functionName.replace(/(\w)/,function(v){return v.toUpperCase()}); 
		$.post("ajax/"+actionName+"/"+actionDoName+".do",{'id':id},function(data){
     		var jsonObj = eval("("+data+")");
     		if(jsonObj.status==1){
     			//alert("保存成功");
     			alert("删除成功"); 
     			$("#"+rowName+id).remove();
     		}else{
     			alert("保存失败");
     		}
     	});
	}
	
	
	
	//Raw edit & save & delete
	//1. delete
	function sealRawDelete(id){
		var rowName = "sealrawtablerow_";
		commonDelete(id,"GetSealPoint","sealRawDelete",rowName);
	}
	

	//2. save
	function sealRawSave(id){
		var objArray = new Array("sealmaterialname_","sealprocess_","sealrawproduction_");//使用时修改
		var editButtonArray = new Array("sealedit_","sealsave_","sealdelete_");//使用时修改
     	var tdArray = getTdValues(id,objArray);
		var jsonData = {'id':id,'sealmaterialname':tdArray[0],'sealprocess':tdArray[1],'sealrawproduction':tdArray[2]};//使用时修改
		commonSave(id,objArray,editButtonArray,tdArray,jsonData,"GetSealPoint","sealRawSave");
	
	}
	
	//3. edit
	function sealRawEdit(id){
		var objArray = new Array("sealmaterialname_","sealprocess_","sealrawproduction_");
		var editButtonArray = new Array("sealedit_","sealsave_","sealdelete_");
		commonEdit(id,objArray,editButtonArray);
	}
	
	
	
	//---------------------------------------------------------------------
	
	//Pro edit & save & delete
	//1. delete
	function sealProDelete(id){
		var rowName = "sealprotablerow_";
		commonDelete(id,"GetSealPoint","sealProDelete",rowName);
	}
	//2. save
	function sealProSave(id){
		var objArray = new Array("sealproductname_","sealproductprocess_","sealproproduction_");//使用时修改
		var editButtonArray = new Array("sealproedit_","sealprosave_","sealprodelete_");//使用时修改
     	var tdArray = getTdValues(id,objArray);
		var jsonData = {'id':id,'sealproductname':tdArray[0],'sealproductprocess':tdArray[1],'sealproproduction':tdArray[2]};//使用时修改
		commonSave(id,objArray,editButtonArray,tdArray,jsonData,"GetSealPoint","sealProSave");
	}
	
	//3. edit
	function sealProEdit(id){
		var objArray = new Array("sealproductname_","sealproductprocess_","sealproproduction_");//使用时修改
		var editButtonArray = new Array("sealproedit_","sealprosave_","sealprodelete_");//使用时修改
		commonEdit(id,objArray,editButtonArray);
	}
	
	//---------------------------------------------------------------------
	
	//info edit & save & delete
	//1. delete
	function sealInfoDelete(id,type){
		var rowName = "sealinfotablerow_";
		commonDelete(id,"GetSealPoint","sealInfoDelete",rowName);
	}
	//2. save
	function sealInfoSave(id){
		var objArray = new Array("unittype_","leaknum_","guanlianrate_","rate_","sealrunhour_","controltech_","efficiency_","sealcapcity_");//使用时修改
		var editButtonArray = new Array("sealinfoedit_","sealinfosave_","sealinfodelete_");//使用时修改
     	var tdArray = getTdValues(id,objArray);
		var jsonData = {'id':id,'unittype':tdArray[0],'leaknum':tdArray[1],'guanlianrate':tdArray[2],'rate':tdArray[3],'runhour':tdArray[4],'controltech':tdArray[5],'efficiency':tdArray[6],'capcity':tdArray[7]};//使用时修改
		commonSave(id,objArray,editButtonArray,tdArray,jsonData,"GetSealPoint","sealInfoSave");
	}
	
	//3. edit
	function sealInfoEdit(id){
		var objArray = new Array("unittype_","leaknum_","guanlianrate_","rate_","sealrunhour_","controltech_","efficiency_","sealcapcity_");//使用时修改
		var editButtonArray = new Array("sealinfoedit_","sealinfosave_","sealinfodelete_");//使用时修改
		commonEdit(id,objArray,editButtonArray);
	}


	$(function(){
		$("#point_devicename").change(function(){
			 var sealpointsurveyid = $("#point_devicename").val();
			 
			 var raw_table = document.getElementById("sealraw");
			 var product_table = document.getElementById("sealproduct");
			 
			 //var tablebody_0 = document.getElementById("sealraw");
			 //var tablebody_1 = document.getElementById("sealproduct");
			 var tablebody_1 = document.getElementById("sealfamen");
			 //alert(tablebody_1);
			 var tablebody_2 = document.getElementById("sealbeng");
			 var tablebody_3 = document.getElementById("sealfalan");
			 var tablebody_4 = document.getElementById("seallianjie");
			 var tablebody_5 = document.getElementById("sealkaiguan");
			 var tablebody_6 = document.getElementById("sealother");
			 
			 var table_seal = null;//用于处理密封泄露情况
			 $(raw_table).children().remove();
			 $(product_table).children().remove();
			 for(var i=1;i<7;i++){
				 var str = eval("tablebody_" +i);
				 //alert(str);
				 $(str).children().remove();
			 }
			     if(sealpointsurveyid == -1){
			    	//alert('你现在什么也没选');
			    	$("#pointinfo input").val(""); //将所有元素置空
			    	$("#pointinfo select").val("-1"); //将所有select 框置空
			    }else{
			    	//ajax 请求获取数据
			    	$.post("ajax/GetSealPoint/getData.do",{'sealpointsurveyid':sealpointsurveyid},function(data){
			    		var jsonObj = eval("(" + data + ")");
			    		
			    		//获取基本数据
			    		var selected_devicename = jsonObj[0][0].devicename;
			    		var projectPorperty = jsonObj[0][0].projectPorperty;
			    		var ability = jsonObj[0][0].ability;
			    		var hour = jsonObj[0][0].hour;
			    		
			    		
		    			//将数据回显出来
		    			$("#selected_devicename").val(selected_devicename);
		    			$("#projectPorperty").val(projectPorperty);
		    			$("#ability").val(ability);
		    			$("#hour").val(hour);
						
		    			 //循环取得原料信息
						 for(var i=0;i<jsonObj[1].length;i++){
							 //alert('aaaa');
							 var materialname = jsonObj[1][i].materialname;
							 //alert(materialname);
							 var process = jsonObj[1][i].process;
							 var consumption = jsonObj[1][i].consumption;
							 var materialid = jsonObj[1][i].materialid;
							 
							 if(i%2==0){
								raw_table.innerHTML+= "<tr class=\"odd\" id=\"sealrawtablerow_"+materialid+"\"><td class=\"center\"><label><input type=\"checkbox\" class=\"ace\" name=\"items\" /><span class=\"lbl\"></span></label></td><td id=\"sealmaterialname_"+materialid+"\">"+materialname+"</td><td id=\"sealprocess_"+materialid+"\">"+process+"</td><td id=\"sealrawproduction_"+materialid+"\">"+consumption+"</td><td id=\"sealrawlistedit_"+materialid+"\"><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"sealedit_"+materialid+"\"   class=\"ui-pg-div \" onclick=\"sealRawEdit("+materialid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"sealsave_"+materialid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"sealRawSave("+materialid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"sealdelete_"+materialid+"\"  class=\"ui-pg-div\" onclick=\"sealRawDelete("+materialid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
				        	}else{
				        		raw_table.innerHTML+= "<tr class=\"even\" id=\"sealrawtablerow_"+materialid+"\"><td class=\"center\"><label><input type=\"checkbox\" class=\"ace\" name=\"items\" /><span class=\"lbl\"></span></label></td><td id=\"sealmaterialname_"+materialid+"\">"+materialname+"</td><td id=\"sealprocess_"+materialid+"\">"+process+"</td><td id=\"sealrawproduction_"+materialid+"\">"+consumption+"</td><td id=\"sealrawlistedit_"+materialid+"\"><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"sealedit_"+materialid+"\"   class=\"ui-pg-div \" onclick=\"sealRawEdit("+materialid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"sealsave_"+materialid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"sealRawSave("+materialid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"sealdelete_"+materialid+"\"  class=\"ui-pg-div\" onclick=\"sealRawDelete("+materialid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
				        	}
							 
						 }
						 
						 //循环取得产品信息
						  for(var i=0;i<jsonObj[2].length;i++){
							 var productname = jsonObj[2][i].productname;
							 var downprocess = jsonObj[2][i].downprocess;
							 var production = jsonObj[2][i].production;
							 var productid = jsonObj[2][i].productid;
							 if(i%2==0){
								product_table.innerHTML+= "<tr class=\"odd\" id=\"sealprotablerow_"+productid+"\"><td class=\"center\"><label><input type=\"checkbox\" class=\"ace\" name=\"items\" /><span class=\"lbl\"></span></label></td><td id=\"sealproductname_"+productid+"\">"+productname+"</td><td id=\"sealproductprocess_"+productid+"\">"+downprocess+"</td><td id=\"sealproproduction_"+productid+"\">"+production+"</td><td id=\"sealprolistedit_"+productid+"\"><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"sealproedit_"+productid+"\"   class=\"ui-pg-div \" onclick=\"sealProEdit("+productid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"sealprosave_"+productid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"sealProSave("+productid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"sealprodelete_"+productid+"\"  class=\"ui-pg-div\" onclick=\"sealProDelete("+productid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
				        	}else{
				        		product_table.innerHTML+= "<tr class=\"odd\" id=\"sealprotablerow_"+productid+"\"><td class=\"center\"><label><input type=\"checkbox\" class=\"ace\" name=\"items\" /><span class=\"lbl\"></span></label></td><td id=\"sealproductname_"+productid+"\">"+productname+"</td><td id=\"sealproductprocess_"+productid+"\">"+downprocess+"</td><td id=\"sealproproduction_"+productid+"\">"+production+"</td><td id=\"sealprolistedit_"+productid+"\"><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"sealproedit_"+productid+"\"   class=\"ui-pg-div \" onclick=\"sealProEdit("+productid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"sealprosave_"+productid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"sealProSave("+productid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"sealprodelete_"+productid+"\"  class=\"ui-pg-div\" onclick=\"sealProDelete("+productid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
				        	}
						 }
						 
		    			 
						 //循环取得密封点泄露情况
						   
						  for(var i=0;i<jsonObj[3].length;i++){
							 var unittype = jsonObj[3][i].unittype;
							 var leaknum = jsonObj[3][i].leaknum;
							 var guanlianratepre = jsonObj[3][i].guanlianrate;
							 var guanlianrate= getGLPF(guanlianratepre);
							 
							 var rate = jsonObj[3][i].rate;
							 var runhour = jsonObj[3][i].runhour;
							 var controltechPRE = jsonObj[3][i].controltech;
							 var controltech=getKZJS(jsonObj[3][i].type,controltechPRE);
							 var efficiency = jsonObj[3][i].efficiency;
							 var capcity = jsonObj[3][i].capcity;
							 var type = jsonObj[3][i].type;
							 
							 var leakid = jsonObj[3][i].leakid;
							 
							 table_seal = eval("tablebody_" + type);
							  
							 //alert(table_seal);
							 
							 if(i%2==0){
								table_seal.innerHTML+= "<tr class=\"odd\" id=\"sealinfotablerow_"+leakid+"\">   <td class=\"center\"><label><input type=\"checkbox\" class=\"ace\" name=\"items\" /><span class=\"lbl\"></span></label></td><td id=\"unittype_"+leakid+"\">"+unittype+"</td><td id=\"leaknum_"+leakid+"\">"+leaknum+"</td><td id=\"guanlianrate_"+leakid+"\">"+guanlianrate+"</td><td id=\"rate_"+leakid+"\">"+rate+"</td><td id=\"sealrunhour_"+leakid+"\">"+runhour+"</td><td id=\"controltech_"+leakid+"\">"+controltech+"</td><td id=\"efficiency_"+leakid+"\">"+efficiency+"</td><td id=\"sealcapcity_"+leakid+"\">"+capcity+"</td><td id=\"sealinfolistedit_"+leakid+"\"><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"sealinfoedit_"+leakid+"\"   class=\"ui-pg-div \" onclick=\"sealInfoEdit("+leakid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"sealinfosave_"+leakid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"sealInfoSave("+leakid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"sealinfodelete_"+leakid+"\"  class=\"ui-pg-div\" onclick=\"sealInfoDelete("+leakid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
				        	 }else{
				        		table_seal.innerHTML+= "<tr class=\"even\" id=\"sealinfotablerow_"+leakid+"\"><td class=\"center\"><label><input type=\"checkbox\" class=\"ace\" name=\"items\" /><span class=\"lbl\"></span></label></td><td id=\"unittype_"+leakid+"\">"+unittype+"</td><td id=\"leaknum_"+leakid+"\">"+leaknum+"</td><td id=\"guanlianrate_"+leakid+"\">"+guanlianrate+"</td><td id=\"rate_"+leakid+"\">"+rate+"</td><td id=\"sealrunhour_"+leakid+"\">"+runhour+"</td><td id=\"controltech_"+leakid+"\">"+controltech+"</td><td id=\"efficiency_"+leakid+"\">"+efficiency+"</td><td id=\"sealcapcity_"+leakid+"\">"+capcity+"</td><td id=\"sealinfolistedit_"+leakid+"\"><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"sealinfoedit_"+leakid+"\"   class=\"ui-pg-div \" onclick=\"sealInfoEdit("+leakid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"sealinfosave_"+leakid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"sealInfoSave("+leakid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"sealinfodelete_"+leakid+"\"  class=\"ui-pg-div\" onclick=\"sealInfoDelete("+leakid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
				        	 }
						 }

			    			
			    	});
			    }
		});
	});
				
				//根据控制技术id装换成文字，根据密封垫不同，控制技术也不同
				function getGLPF(index){
					var msg;
					switch(index){
					 case 1:
						  
						 msg = "读数为0默认排放速率";
						 break;
					 case 2:
						  
						 msg = "关联排放速率-10000ppmv";
						 break;
					 case 3:
						 
						 msg = "关联排放速率-100000ppmv";
						 break;
					 case 4:
						 msg = "根据排放速率方程计算";
						 break;
					 
					}
					return msg;
				}
				//得到数据库中关联排放速率转换成文字
				function getKZJS(type,controltech){
					var msg;
					 
					if(type==1){//阀门
					 	 switch(controltech){
					 case 1:
						  
						 msg = "无排放设计";
						 break;
					 case 2:
						  
						 msg = "安全阀-密闭尾气系统";
						 break;
					 case 3:
						 
						 msg = "安全阀-爆破片组件";
						 break;
					 case 4:
						 msg = "无控制措施";
						 break;
					 
					}
						}
					 


				else if(type==2){
						switch(controltech){
					 case 1:
						  
						 msg = "无排放设计";
						 break;
					 case 2:
						  
						 msg = "密闭尾气系统";
						 break;
					 case 3:
						 
						 msg = "双向机械密封";
						 break;
					 case 4:
						 msg = "无控制措施";
						 break;
					 
					}
					}
					
					else if (type==3){
						switch(controltech){
					 case 1:
						  
						 msg = "无控制措施";
						 break;
					}
					}
					
					else if (type==4){
						switch(controltech){
					 case 1:
						  
						 msg = "焊接";
						 break;
					 case 2:
						  
						 msg = "无控制措施";
						 break;
					 
					 
					}
					}
					else if (type==5){
						switch(controltech){
					 case 1:
						  
						 msg = "盲板、官帽、关渡或者二次阀";
						 break;
					 case 2:
						  
						 msg = "无控制措施";
						 break;
					  
					 
					}
					}
					else if (type==6){
						switch(controltech){
					 case 1:
						  
						 msg = "无控制措施";
						 break;
					 
					}
					}

					return msg;
					
					
				}

	//装置密封点部分
				function saveSealPointInfo(){
				//alert(id);
				//alert('aaa');
				
				
				var selected_devicename = $("#selected_devicename").val();
				var projectPorperty = $("#projectPorperty").val();
				var ability = $("#ability").val();
				var hour = $("#hour").val();
				var sealpointsurveyid = $("#point_devicename").val();
				//alert(sealpointsurveyid);
				
				
				if(sealpointsurveyid==-1){
					alert("请先选择装置");
					return;
				}
				$.post("ajax/GetSealPoint/saveDate.do",
					{'sealpointsurveyid':sealpointsurveyid,'selected_devicename':selected_devicename,'projectPorperty':projectPorperty,'ability':ability,'hour':hour},
					function(data){    
			    		var jsonObj = eval("(" + data + ")");  
			    		if(jsonObj.status=="1"){
			    			alert('保存成功');
			    		}
			    		
			    	});  
			}
				
				
   function commonSaveNew(objArray,editButtonArray,editButtonFunctionNames,rowName,actionName,functionName,jsonData){
     	    //准备调用使用的 actionname 和方法
     		var actionDoName = "do"+ functionName.replace(/(\w)/,function(v){return v.toUpperCase()});//对应的后台的 .do 的 name
     		$.post("ajax/"+actionName+"/"+actionDoName+".do",jsonData,function(data){
	     		var jsonObj = eval("("+data+")");
		     	var len = objArray.length;
		     	//alert("aa:" + len);
		     	var id = jsonObj.id;
		     	var objValues = getNewDataArray(objArray);
		     	//alert(objValues);
		     	//alert(id);
		     	
		     	for(var i=0;i<len-1;i++){
		     		$("#"+objArray[i]).parent().attr("id",objArray[i]+"_"+id);//更改input 变成普通的表格
		     		$("#"+objArray[i]+"_"+id).html(objValues[i]);//更改id
		     	}
		     	$("#"+objArray[len-1]).parent().attr("id",objArray[len-1]+"_"+id);
		     	$("#"+objArray[len-1]).parent().parent().attr("id",rowName +id);//行的id
		     	
		     	///var divobj = $("#"+objArray[len-1]+"_"+id).children("div").get(0);
		     	//alert(divobj);
		     	//divobj
		     	$($("#"+objArray[len-1]+"_"+id).children("div").get(0)).attr("id","");
     			
     			$($("#"+objArray[len-1]+"_"+id).children("div").get(0)).html("<div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id="+editButtonArray[0]+id+" class=\"ui-pg-div \" onclick="+editButtonFunctionNames[0]+"("+id+")"+"><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id="+editButtonArray[1]+id+"  style=\"display:none;\"  class=\"ui-pg-div\" onclick="+editButtonFunctionNames[1]+"("+id+")"+"><span class=\"ui-icon icon-refresh green\"></span></span><span id="+editButtonArray[2]+id+"  class=\"ui-pg-div\" onclick="+editButtonFunctionNames[2]+"("+id+")"+"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div>");
		     	
		     	if(status==1){
		     		alert("插入成功")
		     	}
	     	});
	}
   //获取一行数据
	function getNewDataArray(objArray){
		var objValues = new Array();
     	var len = objArray.length;
     	for(var i=0;i<len;i++){
     		objValues[i] = $("#"+objArray[i]).val();
     		//alert(objArray[i] + ":" + objValues[i]);
     	}
     	return objValues;
	}
	function createCommonNew(tbodyname,objArray,editButtonArray,editButtonFunctionNames,rowName,saveNewFunctionName){
			    var len = objArray.length;
			    //alert(len);
     	 		//新添加一行每一个 td 里面实质上是input 框
     	 	 	var tbody = document.getElementById(tbodyname);
		     	var row = tbody.insertRow(0);
		     	//alert(rowName);
		     	row.setAttribute("id",rowName+"_");
		     	
		     	var cellsArray = new Array();//相当于所有的td
		     		
		     	var cell_0 = document.createElement("td");
		     	cell_0.className="center";
		     	cell_0.innerHTML = "<input type='checkbox' class='ace' value=''/><span class='lbl'></span>";
		     	cellsArray[0] = cell_0;
		     
		      if(tbodyname=="sealraw"||tbodyname=="sealproduct"){
		     	for (var i=1;i<len;i++){
		     		if(i==1||i==2){
		     		cellsArray[i] = document.createElement("td");
		     		cellsArray[i].innerHTML = "<input class=\"form-control\" style=\"width:50%;height:26px;\" id="+objArray[i-1]+" maxlenth=\"200\"/>";
		     	     }
		     		else{
		     		cellsArray[i] = document.createElement("td");
		     		cellsArray[i].innerHTML = "<input class=\"form-control\" style=\"width:50%;height:26px;\" id="+objArray[i-1]+" onkeyup=\"checkNum(this);\"/>";
		     		}
		     		}
		     	}
		     else{
		    	 //从单元类型开始添加
		    	 
		    	 for (var i=1;i<len;i++){
		    		 
		     		if(i==1){		     		
		     			cellsArray[i] = document.createElement("td");
		     			cellsArray[i].innerHTML = "<input class=\"form-control\" style=\"width:50%;height:26px;\" id="+objArray[i-1]+" maxlenth=\"200\"/>";		     	    
		     			}		     		 
		     		if(i==2){
			     		cellsArray[i] = document.createElement("td");
			     		cellsArray[i].innerHTML = "<input class=\"form-control\" style=\"width:50%;height:26px;\" id="+objArray[i-1]+" onkeyup=\"checkNum(this);\"/>";
		     		}
		     		if(i==3){
			     		cellsArray[i] = document.createElement("td");
			     		cellsArray[i].innerHTML = "<select type='select'   style='font-size:15px;width:170pxui-pg-div' name='chkArr'  id='addguanlianrate' onchange='' ></select> ";
		     			var $option1 = $("<option></option>");    
		           		$option1.attr("value", 1);  
		           		$option1.text("读数为0默认排放速率");    
		           		 
		           		 
		           		$("#addguanlianrate").appendChild($option1); 
		     		}
		     		}
		    	 
		     }
		     	//alert(objArray[len-1]);
		     	var cell_editButton = document.createElement("td");
		     	cell_editButton.innerHTML = "<div id="+objArray[len-1]+" class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"save\" class=\"ui-pg-div\" ><span class=\"ui-icon icon-refresh green\"></span></span></div>";
		     	cellsArray[len] = cell_editButton;
		     	//循环添加
		     	for(var i=0;i<=len;i++){
		     		  //var cellobj = eval("cell_" + i);
		     		  row.appendChild(cellsArray[i]);
		     	}
		     	
		     	//动态绑定一个onclick 事件，将组装的json作为参数进行传递，创建时绑定
		     	$("#"+objArray[len-1]).children("span").get(0).onclick=function(){
		     		eval(saveNewFunctionName)(tbodyname,objArray,editButtonArray,editButtonFunctionNames,rowName);//不好意思，又用eval 了
		     	}
	}
	function commonSavePre(objArray){
		//组装json 数据
		var objValues = new Array();
		objValues = getNewDataArray(objArray);
	
     	var jsonData = {};
     	for(var i=0;i<objArray.length -1;i++){
     		jsonData[objArray[i]] = objValues[i];
     	}
     	return jsonData;
		     	
	}
