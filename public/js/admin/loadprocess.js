//装在过程
         function addrowloading(){
				
				var tabObj=document.getElementById("grid1");//获取添加数据的表格
   				var rowsNum = tabObj.rows.length;  //获取当前行数
			    var colsNum=tabObj.rows[rowsNum-1].cells.length;//获取行的列数
			    
			    var td=new Array(colsNum);
			    var myNewRow = tabObj.insertRow(rowsNum);//插入新行

				   for(var i = 0 ; i < 13 ; i ++){
					   td[i]=myNewRow.insertCell(i);
					   if(i==0)
			   				td[i].innerHTML="<input type='checkbox' name='ischeck' id='chkArr'  />";
			   			//	新增3级下拉功能
			   		   else if (i==1){
			   			  td[i].innerHTML=" <select id='Trans' name='chkArr' onchange='initoper(this.value)'  style='width:80px;' ></select>";

			   		  	  inittrans();
			   		   }
					   else if (i==10){
						  td[i].innerHTML="<input  name='chkArr' id='jisuanEr' disabled='disabled' style='width:80px' value='0.30' />";
					   }
			   		   else if (i==2){
			   			  td[i].innerHTML=" <select id='Oper' name='chkArr' onchange='initfactor(this.value)'  style='width:80px;' ></select>";

			   		   }
					   else if (i==3){
						  td[i].innerHTML=" <select id='Factor' name='chkArr' onchange=''  style='width:65px;' ></select>";						   

					   }
					   
					   else if (i==9){
							  td[i].innerHTML=" <select type='select'  style='font-size:15px;' name='chkArr' id='addvoczhili'  onchange='showER(this,this.id,this.value,1,-1)' ></select> ";
                             var $option1 = $("<option></option>");    
		           			    $option1.attr("value", 1);    
		            			$option1.text("直接燃烧");    
		           				var $option2 = $("<option></option>");    
		           			    $option2.attr("value", 2);    
		            			$option2.text("催化燃烧"); 
		            			var $option3 = $("<option></option>");    
		           			    $option3.attr("value", 3);    
		            			$option3.text("活性炭吸附");
		            			var $option4 = $("<option></option>");    
		           			    $option4.attr("value", 4);    
		            			$option4.text("硫化床吸附");  
		            			var $option5 = $("<option></option>");    
		           			    $option5.attr("value", 5);
		           			    $option5.text("无处理措施"); 
		            			var $option6 = $("<option></option>");    
		           			    $option6.attr("value", 6);
		           			    $option6.text("企业自测"); 
		            			$("#addvoczhili").append($option1); 
		            			$("#addvoczhili").append($option2);
		            			$("#addvoczhili").append($option3); 
		            			$("#addvoczhili").append($option4); 
		            			$("#addvoczhili").append($option5);  
		            			$("#addvoczhili").append($option6);  
					   }
					   else if (i==8){
						   		td[i].innerHTML="<input  name='chkArr' id='newadd'  style='width:80px' disabled='disabled' />";
					   }
					   else if (i==11){
						   		td[i].innerHTML="<input  name='chkArr' id='newadd'  style='width:80px' disabled='disabled' />";
					   }
			   			else if(i==12){
			   					td[i].innerHTML="<span style='width:100px' id='save'  class='ui-pg-div' onclick='loadsavepage(-1)'><span class='ui-icon icon-refresh green'></span></span>";
			   			}
			   			else{
			   				
			   					
			   					td[i].innerHTML="<input  name='chkArr' id='newadd'+"+i+"  style='width:80px' onkeyup=\"checkNum(this);\"/>";
			  				
			   				}
			   
				   }
					   
				 document.getElementById("add").disabled=true;  
			   }
     function getLoadData(){
		
		var tablebody = document.getElementById("load_tablebody");
		var factoryid = $("#factoryid").val();
		//alert(factoryid);
		$(tablebody).children().remove();//每次点击的时候，先把子元素都删除
		
		$.post("ajax/GetLoadProcessData/getLoadProcessData.do",{"factoryid":factoryid},function(data){
			 var jsonObj = eval("(" + data + ")"); 
			 //alert(1);
		        for (var i = 0; i < jsonObj.length; i++) {
		        	var transportation = jsonObj[i].transportation;
		        	//alert(wasterwaterpart_pre);
		        	var operateschema = jsonObj[i].operateschema;
		        	//alert(wasterwaterpart);
		        	var factor = jsonObj[i].factor;
		        	
		        	var loadingvolume = jsonObj[i].loadingvolume;
		        	if(loadingvolume==null)
		        		loadingvolume="";
		        	var realpressure = jsonObj[i].realpressure;
		        	if(realpressure==null)
		        		realpressure="";
		        	var weight = jsonObj[i].weight;
		        	if(weight==null)
		        		weight="";
		        	var temperature = jsonObj[i].temperature;
		        	if(temperature==null)
		        		temperature="";
		        	var loadingloss = jsonObj[i].loadingloss;
		        	var voczhili_pre = jsonObj[i].voczhili;
		        	var voczhili = getVOC(voczhili_pre);
		        	var efficiency = jsonObj[i].efficiency;
		        	var capcity = jsonObj[i].capcity;
		        	var loadingid = jsonObj[i].loadingid;
		        	//alert(loadingid);
		        	
		        	//if(i%2==0){
		        		tablebody.innerHTML+="<tr><td><input type=\"checkbox\" name=\"ischeck\" value="+loadingid+"></td><td name="+loadingid+">"+transportation+"</td><td name="+loadingid+">"+operateschema+"</td><td name="+loadingid+">"+factor+"</td><td name="+loadingid+">"+loadingvolume+"</td><td name="+loadingid+">"+realpressure+"</td><td name="+loadingid+">"+weight+"</td><td name="+loadingid+">"+temperature+"</td><td name="+loadingid+">"+loadingloss+"</td><td name="+loadingid+">"+voczhili+"</td><td name="+loadingid+">"+efficiency+"</td><td name="+loadingid+">"+capcity+"</td><td style=\"vertical-align:middle;width:80px;\"><span id=\"loadedit"+loadingid+"\" class=\"ui-pg-div \" onclick=\"loadmodify("+loadingid+") \"><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"loadsave"+loadingid+"\" style=\"display:none;\" class=\"ui-pg-div\" onclick=\"loadsavepage("+loadingid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"loaddelete"+loadingid+"\" class=\"ui-pg-div\" onclick=\"loadDelete("+loadingid+") \"><span class=\"ui-icon icon-trash bigger-120 red\"></span></span></td></tr>";
		        		//tablebody.innerHTML+= "<tr class=\"odd\" id=\"loadinfotablerow_"+loadingid+"\"><td class=\"center\"><label><input type=\"checkbox\" class=\"ace\"  /><span class=\"lbl\"></span></label></td><td id=\"loadtransportation_"+loadingid+"\">"+transportation+"</td><td id=\"loadoperateschema_"+loadingid+"\">"+operateschema+"</td><td id=\"loadfactor_"+loadingid+"\">"+factor+"</td><td id=\"loadingvolume_"+loadingid+"\">"+loadingvolume+"</td><td id=\"loadrealpressure_"+loadingid+"\">"+realpressure+"</td><td id=\"loadweight_"+loadingid+"\">"+weight+"</td><td id=\"loadtemperature_"+loadingid+"\">"+temperature+"</td><td id=\"loadingloss_"+loadingid+"\">"+loadingloss+"</td><td id=\"loadvoczhili_"+loadingid+"\">"+voczhili+"</td><td id=\"loadefficiency_"+loadingid+"\">"+efficiency+"</td><td id=\"loadcapcity_"+loadingid+"\">"+capcity+"</td><td id=\"loadinfolistedit_"+loadingid+"\"><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"loadinfoedit_"+loadingid+"\"   class=\"ui-pg-div \" onclick=\"loadInfoEdit("+loadingid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"loadinfosave_"+loadingid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"loadInfoSave("+loadingid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"loadinfodelete_"+loadingid+"\"  class=\"ui-pg-div\" onclick=\"loadInfoDelete("+loadingid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
		        	//}else{
						//tablebody.innerHTML+="<tr><td><input type=\"checkbox\" name=\"ischeck\" value="+loadingid+"></td><td name="+loadingid+">"+transportation+"</td><td name="+loadingid+">"+operateschema+"</td><td name="+loadingid+">"+factor+"</td><td name="+loadingid+">"+loadingvolume+"</td><td name="+loadingid+">"+realpressure+"</td><td name="+loadingid+">"+weight+"</td><td name="+loadingid+">"+temperature+"</td><td name="+loadingid+">"+loadingloss+"</td><td name="+loadingid+">"+voczhili+"</td><td name="+loadingid+">"+efficiency+"</td><td name="+loadingid+">"+capcity+"</td><td style=\"vertical-align:middle;width:80px;\"><span id=\"edit"+loadingid+" class=\"ui-pg-div \" onclick=\"loadmodify("+loadingid+") \"><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"save"+loadingid+" style=\"display:none;\" class=\"ui-pg-div\" onclick=\"loadsavepage("+loadingid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"delete"+loadingid+" class=\"ui-pg-div\" onclick=\"loadDelete("+loading+") \"><span class=\"ui-icon icon-trash bigger-120 red\"></span></span></td></tr>";
		        		//tablebody.innerHTML+= "<tr class=\"even\" id=\"loadinfotablerow_"+loadingid+"\"><td class=\"center\"><label><input type=\"checkbox\" class=\"ace\"  /><span class=\"lbl\"></span></label></td><td id=\"loadtransportation_"+loadingid+"\">"+transportation+"</td><td id=\"loadoperateschema_"+loadingid+"\">"+operateschema+"</td><td id=\"loadfactor_"+loadingid+"\">"+factor+"</td><td id=\"loadingvolume_"+loadingid+"\">"+loadingvolume+"</td><td id=\"loadrealpressure_"+loadingid+"\">"+realpressure+"</td><td id=\"loadweight_"+loadingid+"\">"+weight+"</td><td id=\"loadtemperature_"+loadingid+"\">"+temperature+"</td><td id=\"loadingloss_"+loadingid+"\">"+loadingloss+"</td><td id=\"loadvoczhili_"+loadingid+"\">"+voczhili+"</td><td id=\"loadefficiency_"+loadingid+"\">"+efficiency+"</td><td id=\"loadcapcity_"+loadingid+"\">"+capcity+"</td><td id=\"loadinfolistedit_"+loadingid+"\"><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"loadinfoedit_"+loadingid+"\"   class=\"ui-pg-div \" onclick=\"loadInfoEdit("+loadingid+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"loadinfosave_"+loadingid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"loadInfoSave("+loadingid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"loadinfodelete_"+loadingid+"\"  class=\"ui-pg-div\" onclick=\"loadInfoDelete("+loadingid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
		        	//}
		        } 		 
		});
	}
	
     function loadsavepage (loadingid){
				 //alert(1);
				$('#loadedit'+loadingid).show();	
				$('#loadsave'+loadingid).hide();
				$('#loaddelete'+loadingid).show();
				//用js提取页面中值
				//var reporter=document.getElementById("reporter").value;
				//var date=document.getElementById("reportdate").value;
				//var phone=document.getElementById("phone").value;
				var factoryid  = $("#factoryid").val();
						
				if (loadingid==-1)
				{
					var elms = document.getElementsByName("chkArr");
					var array = new Array(elms.length);
					
					var Trans=$("#Trans option:selected");
					var Oper=$("#Oper option:selected");
					var Factor=$("#Factor option:selected");
					
					var factorNum=Factor.text().toString()*1;
					for( var i=3;i<elms.length;i++){
						
						array[i]=elms[i].value;
				 	}
					 
					//s饱和因子  factorNum
					//P真实蒸汽压 array[4]
					//M物料分子量 array[5]
					//T液体温度 array[6]
					var loadingloss=12.46*(factorNum*array[4]*array[5])/(1.8*array[6]+492)*(0.454/3.785);
					var jisuanEr=document.getElementById("jisuanEr").value;
   					//capcity存计算的排放量
					var capcity=array[3]*loadingloss*(1-jisuanEr)*0.001;
   					
   					 
				}
				
				else{
			
					var elms = document.getElementsByName("loadmodify"+loadingid);
					
					var array = new Array(elms.length);
					var Trans=$("#Trans option:selected");
					var Oper=$("#Oper option:selected");
					var Factor=$("#Factor option:selected");
					
					 var factorNum=Factor.text().toString()*1;
					for( var i=3;i<elms.length;i++){
							array[i]=elms[i].value;
					 }
					 
					 var loadingloss=12.46*(factorNum*array[4]*array[5])/(1.8*array[6]+492)*(0.454/3.785);
					 
					var jisuanEr=document.getElementById("jisuanEr"+loadingid).value;
					 
   					//capcity存计算的排放量
					var capcity=array[3]*loadingloss*(1-jisuanEr)*0.001;
   					
   					 
   					array[8]=array[7];
   					  
					
				}
				
				$.post("ajax/Loadingprocess/save.do",{
														  flagloadingid:loadingid,
														  factoryId:factoryid,
														  
														  transportation:Trans.text().toString(),
														  operateschema:Oper.text().toString(),
														  loadingvolume:array[3],
														  factor:factorNum,
														  realpressure:array[4],
														  weight:array[5],
														  temperature:array[6],
														  loadingloss:loadingloss,
														  voczhili:array[8],
														  efficiency:jisuanEr, 
														  capcity:capcity//要计算
															  },function(data){    
															 
														  var jsonObj = eval("(" + data + ")"); 
														  
														  if(jsonObj.status==1){//1为新增
											                  											                  //把返回的loadingid给页面赋值
											                  var tabObj=document.getElementById("grid1");//获取添加数据的表格

											                  tabObj.deleteRow(tabObj.rows.length-1);//插入新行
											                  
											                  var myNewRow = tabObj.insertRow(tabObj.rows.length);//插入新行
											                   
											                  var td=new Array(13);
															  
											                  for(var i = 0 ; i < 13 ; i ++){
					  												 td[i]=myNewRow.insertCell(i);
					  												
															   if(i==0)
													   				td[i].innerHTML="<input type='checkbox' name='ischeck'   value='"+jsonObj.loadingid+"' />";
													   			
													   			else if(i==12){
													   				
													   				td[i].innerHTML="<span id='loadedit"+jsonObj.loadingid+"'   class='ui-pg-div' onclick='loadmodify("+jsonObj.loadingid+")' ><span class='ui-icon ui-icon-pencil red'></span></span>" +
													   				"<span id='loadsave"+jsonObj.loadingid+"'  style='display:none;' class='ui-pg-div' onclick='loadsavepage("+jsonObj.loadingid+")'><span class='ui-icon icon-refresh green'></span></span>" +
													   				"<span id='loaddelete"+jsonObj.loadingid+"'  class='ui-pg-div' onclick='loadDelete("+jsonObj.loadingid+")'><span class='ui-icon icon-trash bigger-120 red' ></span></span>";

													   			}
															   else if(i==1){
																    td[i].setAttribute("name",jsonObj.loadingid);
																    td[i].innerHTML=Trans.text().toString();
															   }
															   else if(i==2){
																    td[i].setAttribute("name",jsonObj.loadingid);
																    td[i].innerHTML=Oper.text().toString();
															   }
															   else if(i==3){
																    td[i].setAttribute("name",jsonObj.loadingid);
																    td[i].innerHTML=factorNum;
															   }
															   else if (i==8){
																    td[i].setAttribute("name",jsonObj.loadingid);
																    td[i].innerHTML=jsonObj.Loadingloss;
															   }
															   else if(i==9){
																   	td[i].setAttribute("name",jsonObj.loadingid);
																   	td[i].innerHTML=" <select  type='select'  style='font-size:15px;'   id='loadnewvoc"+jsonObj.loadingid+"'  disabled='disabled'  onchange='showER(this,this.id,this.value,2)' ></select> ";
										                            
																   	var $option1 = $("<option></option>");    
												           			    $option1.attr("value", jsonObj.Voczhili);    
												            			if(jsonObj.Voczhili==1)
												           			    	$option1.text("直接燃烧");  
												            			else if (jsonObj.Voczhili==2)
												           			    	$option1.text("催化燃烧");  
												            			else if (jsonObj.Voczhili==3)
												           			    	$option1.text("活性炭吸附");  
												            			else if (jsonObj.Voczhili==4)
												           			    	$option1.text("硫化床吸附");  
												            			else if (jsonObj.Voczhili==5)
												           			    	$option1.text("无处理措施"); 
												            			else  if(jsonObj.Voczhili==6)
												            				$option1.text("企业自测");
												           				
												            			$('#loadnewvoc'+jsonObj.loadingid).append($option1); 
												            			
												            			td[i].innerHTML=$option1.text();
															   }
															   else if(i==11){
																   td[i].setAttribute("name",jsonObj.loadingid);
																   td[i].innerHTML=jsonObj.Capcity;//jason在此传值
															   }
													   			else{
													   				td[i].setAttribute("name",jsonObj.loadingid);
													   				td[i].innerHTML=array[i-1];
													   				}
				   												}
											                  }
														  else{// 2为更新
															
															  var tds=document.getElementsByName(jsonObj.loadingid);
				 												tds[9].innerHTML=jisuanEr;    
														  		tds[10].innerHTML=capcity; 
																 for (i =0 ; i < 12; i++){
																	  
																	   if(i==0) 
																		    tds[i].innerHTML=Trans.text().toString();
																	   
																	   else if(i==1) 
																		    tds[i].innerHTML=Oper.text().toString();
																	    
																	   else if(i==2) 
																		    tds[i].innerHTML=factorNum;
																	    
																	   else if(i==7) 
																   			tds[i].innerHTML=loadingloss; 
															   		   else if(i==8){
																   			    
																			   	td[i].innerHTML=" <select  type='select'  style='font-size:15px;' id='loadnewvoc"+jsonObj.loadingid+"'  disabled='disabled'  ></select> ";
													                           alert(jsonObj.loadingid);
																			 
																			   var $option1 = $("<option></option>");    
															           			    $option1.attr("value", jsonObj.Voczhili);    
															            			if(jsonObj.Voczhili==1)
															           			    	$option1.text("直接燃烧");  
															            			else if (jsonObj.Voczhili==2)
															           			    	$option1.text("催化燃烧");  
															            			else if (jsonObj.Voczhili==3)
															           			    	$option1.text("活性炭吸附");  
															            			else if (jsonObj.Voczhili==4)
															           			    	$option1.text("硫化床吸附");  
															            			else if (jsonObj.Voczhili==5)
															           			    	$option1.text("无处理措施"); 
															            			else  if(jsonObj.Voczhili==6)
															            				$option1.text("企业自测");
															           				 //alert(jsonObj.loadingid);
															            		       
															            			$('#loadnewvoc'+jsonObj.loadingid).append($option1);
															            			
															            			  td[8].innerHTML=$option1.text();
															            			
															   		}
																	   else if(i==9) {
																		   
																   		tds[i].innerHTML=jisuanEr; 
																   		}
																	   else if (i==10){  ///这一句一直不执行，县放过去。
																		   alert(10);
																		   tds[i].innerHTML=capcity; 
																		   }
																	    
																	   else 
																			tds[i].innerHTML=array[i];
																			 
																	}
				 												  
																
														  }
											                
				});  
				document.getElementById("add").disabled=false;
				 
					
			}//end
			
			
			//下面是编辑的过程
	function loadmodify(loadingid){
				//$('#edit'+loadingid).hide();	
				//alert(loadingid);
				//alert($('#edit'+loadingid));
				$('#loadedit'+loadingid).css("display","none");	
				$('#loadsave'+loadingid).css("display","");
				$('#loaddelete'+loadingid).css("display","none");
				 var tds=document.getElementsByName(loadingid);
				 var Trans=$("#Trans option:selected");
					var Oper=$("#Oper option:selected");
					var Factor=$("#Factor option:selected");
				 for (i =0 ; i < 10; i++){
					if(i==0){									 
						tds[i].innerHTML="<select id='Trans' name='loadmodify"+loadingid+"' onchange='initoper(this.value)'  style='width:80px;' ></select>";
						inittrans();
					 }
					else if(i==1){
						tds[i].innerHTML="<select id='Oper' name='loadmodify"+loadingid+"' onchange='initfactor(this.value)'  style='width:80px;' ></select>";
					 }
					
					else if(i==2){
						tds[i].innerHTML="<select id='Factor' name='loadmodify"+loadingid+"' onchange=''  style='width:80px;' ></select>";
					 }
					else if(i==3||i==4||i==5||i==6)
						tds[i].innerHTML="<input style='width:70px'  name='loadmodify"+loadingid+"' id='modify'+"+i+" onkeyup=\"checkNum(this);\" value="+tds[i].innerHTML+ ">";

					else if (i==9)
						tds[i].innerHTML="<input style='width:70px'  name='loadmodify"+loadingid+"'   id='jisuanEr"+loadingid+"' disabled='disabled'  value="+tds[i].innerHTML+ ">";
					else if (i==8){//拼接下拉
						 tds[i].innerHTML=" <select type='select' id='addvoczhili' style='font-size:15px;' name='loadmodify"+loadingid+"'  onchange='showER(this,this.id,this.value,2,"+loadingid+")' ></select> ";
                           
						 var $option1 = $("<option></option>");    
		           			    $option1.attr("value", 1);    
		            			$option1.text("直接燃烧");    
		           				var $option2 = $("<option></option>");    
		           			    $option2.attr("value", 2);    
		            			$option2.text("催化燃烧"); 
		            			var $option3 = $("<option></option>");    
		           			    $option3.attr("value", 3);    
		            			$option3.text("活性炭吸附");
		            			var $option4 = $("<option></option>");    
		           			    $option4.attr("value", 4);    
		            			$option4.text("硫化床吸附");  
		            			var $option5 = $("<option></option>");    
		           			    $option5.attr("value", 5);
		           			    $option5.text("无处理措施"); 
		            			var $option6 = $("<option></option>");    
		           			    $option6.attr("value", 6);
		           			    $option6.text("企业自测"); 
		            			$("#addvoczhili").append($option1); 
		            			$("#addvoczhili").append($option2);
		            			$("#addvoczhili").append($option3); 
		            			$("#addvoczhili").append($option4); 
		            			$("#addvoczhili").append($option5);  
		            			$("#addvoczhili").append($option6);  
		            			 
					}
					
				 }
				 //点击编辑后，编辑按钮消失，出现保存按钮
				}
			
			//插入运输工具下拉,一级下拉
			function inittrans(){
				
				 $.post("pages/Loadingtrans/listTrans.do",function(data){     
	       		 var jsonObj = eval("(" + data + ")");    
	       		 for (var i = 0; i < jsonObj.length; i++) {    
		            var $option = $("<option></option>");    
		            $option.attr("value", jsonObj[i].Transid);    
		            $option.text(jsonObj[i].Trans +"("+jsonObj[i].Transid+")");    
		           
		            $("#Trans").append($option);    
		            
	        	} 
	        	initoper(jsonObj[0].Transid);  
	        	});
			}
			
			//得到操作模式下拉，二级下拉
			function initoper(Transid){
				$.post("ajax/Loadingoper/listOper.do",{ transId: Transid},function(data){    
			         
			        var jsonObj = eval("(" + data + ")");  
			        cleaSec("Oper");
			        for (var i = 0; i < jsonObj.length; i++) {    
			            var $option = $("<option></option>");    
			            $option.attr("value", jsonObj[i].Operaid);    
			            $option.text(jsonObj[i].Oper +"("+jsonObj[i].Operaid+")");    
			            $("#Oper").append($option);    
			        } 
			        initfactor(jsonObj[0].Operaid);   
			    });  
			}
			//得到饱和系数，三级下拉
			function initfactor(Operaid){
					$.post("ajax/Loadingfactor/listFactor.do",{ operaId: Operaid},function(data){      
			        var jsonObj = eval("(" + data + ")");  
			         cleaSec("Factor");
			        for (var i = 0; i < jsonObj.length; i++) {    
			            var $option = $("<option></option>");    
			           $option.attr("value", jsonObj[i].Factorid);    
			            $option.text(jsonObj[i].Factor);     
			            $("#Factor").append($option);    
					}
			       
				}); 
				
			}
			
			function cleaSec(objID){
				var selectObj = document.getElementById(objID);
				var length = selectObj.options.length;
				for(var i = 1;i <= length;i++){
					selectObj.options[0] = null;
				}
			};
			
			//根据选项来确定去除率
			function showER(thisObj, thisObjID,value,flag,loadingid){
					var $td = $(thisObj).parents('tr').children('td'); 
					
					if(flag==1){
					if(value==1||value==2||value==3||value==4){
						$td[10].innerHTML="<input  name='chkArr' id='chkArr'  style='width:50px' value='0.30' disabled='disabled' />";
					}
					
					else if(value==5){
						$td[10].innerHTML="<input  name='chkArr' id='chkArr'  style='width:50px' value='0' disabled='disabled' />";
					}
					else if (value==6){
						window.open ('jisuanEr.jsp?loadingid=-1','newwindow','height=300,width=400,top=50,left=500,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no');
//						var str =window.showModalDialog('jisuanEr.jsp','dialogWidth=400px;dialogHeight=300px');
						//var str =window.showModalDialog('../../jisuanEr.jsp');
						//alert(str);
					}
				}
				else{
					 
					if(value==1||value==2||value==3||value==4){
						$td[10].innerHTML="<input  name='modify' id='jisuanEr"+loadingid+"'  style='width:50px' value='0.30' disabled='true' />";
					}
					 
					else if(value==5){
						$td[10].innerHTML="<input  name='modify' id='jisuanEr"+loadingid+"'  style='width:50px' value='0' disabled='disabled' />";
					}
					else if (value==6){
						window.open ('jisuanEr.jsp?loadingid='+loadingid,'newwindow','height=300,width=400,top=50,left=500,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no');
					}
					
				}
					 
			}
			//单个删除
			function loadDelete(loadingid){
			
    		if (confirm('确定执行[删除]操作?')){
    		deletejspresult(loadingid);
    		
		    $.post("/tjjcz/pages/Loadingprocess/onedelete.do?loadingid="+loadingid);
		     
    		}
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
				//1. delete
	function loadInfoDelete(id){
		var rowName = "loadinfotablerow_";
		commonDelete(id,"GetLoadProcessData","loadInfoDelete",rowName);
	}
	

	//2. save
	function loadInfoSave(id){
		var objArray = new Array("loadtransportation_","loadoperateschema_","loadfactor_","loadingvolume_","loadrealpressure_","loadweight_","loadtemperature_","loadingloss_","loadvoczhili_","loadefficiency_","loadcapcity_");//使用时修改
		var editButtonArray = new Array("loadinfoedit_","loadinfosave_","loadinfodelete_");//使用时修改
     	var tdArray = getTdValues(id,objArray);
		var jsonData = {'id':id,'loadtransportation':tdArray[0],'loadoperateschema':tdArray[1],'loadfactor':tdArray[2],'loadingvolume':tdArray[3],'loadrealpressure':tdArray[4],'loadweight':tdArray[5],'loadtemperature':tdArray[6],'loadingloss':tdArray[7],'loadvoczhili':tdArray[8],'loadefficiency':tdArray[9],'loadcapcity':tdArray[10]};//使用时修改
		commonSave(id,objArray,editButtonArray,tdArray,jsonData,"GetLoadProcessData","loadInfoSave");
	
	}
	
	//3. edit
	function loadInfoEdit(id){
		var objArray = new Array("loadtransportation_","loadoperateschema_","loadfactor_","loadingvolume_","loadrealpressure_","loadweight_","loadtemperature_","loadingloss_","loadvoczhili_","loadefficiency_","loadcapcity_");//使用时修改
		var editButtonArray = new Array("loadinfoedit_","loadinfosave_","loadinfodelete_");//使用时修改
		commonEdit(id,objArray,editButtonArray);
	}
	
	//下面是点击+ 号时候的新建操作
	function createLoadInfoItem(tbodyname){
	//不同函数用不同参数表
		 //var point_devicename = $("#point_devicename").val();//密封装置id
		 var objArray = new Array("loadtransportation","loadoperateschema","loadfactor","loadingvolume","loadrealpressure","loadweight","loadtemperature","loadingloss","loadvoczhili","loadefficiency","loadcapcity","loadinfolistedit");//使用时修改
		 var editButtonArray = new Array("loadinfoedit_","loadinfosave_","loadinfodelete_");//使用时修改
		 var editButtonFunctionNames = new Array("loadInfoEdit","loadInfoSave","loadInfoDelete");
		 var rowName = "loadinfotablerow_";
		 var saveNewFunctionName = "saveLoadInfoNew";
		
     	 createCommonNew(tbodyname,objArray,editButtonArray,editButtonFunctionNames,rowName,saveNewFunctionName);
	}