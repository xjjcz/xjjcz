function getWaterData(){
		//alert('aaaa');
		//var factoryId = '3563';
		
		var tablebody = document.getElementById("deal_wastwater");
		
		$(tablebody).children().remove();//每次点击的时候，先把子元素都删除
		
		//alert(tablebody);
		///*
		$.post("ajax/Wastewater/getWasteWater.do",function(data){
			//alert('bbbb');
			 var jsonObj = eval("(" + data + ")"); 
			 
		        for (var i = 0; i < jsonObj.length; i++) {
		            var wasterwaterid=jsonObj[i].wasterwaterid;
		            
		        	var wasterwaterpart_pre = jsonObj[i].wasterwaterpart;
		        	//alert(wasterwaterpart_pre);
		        	var wasterwaterpart = getWW(wasterwaterpart_pre);
		        	//alert(wasterwaterpart);
		        	var factor = jsonObj[i].factor;
		        	var handleevolumn = jsonObj[i].handleevolumn;
		        	if(handleevolumn==null)
		        		handleevolumn="";
		        	var realpressure = jsonObj[i].realpressure;
		        	  if(realpressure==null)
		        		  realpressure="";
		        	var voczhili_pre = jsonObj[i].voczhili;
		        	var voczhili = getVOC(voczhili_pre);
		        	var efficiency = jsonObj[i].efficiency;
		        	var capcity = jsonObj[i].capcity;
		        	
		        	if(i%2==0){
		        		tablebody.innerHTML+= "<tr id=\"wastewater"+wasterwaterid+"\" class=\"odd\"><td ><input type=\"checkbox\" name=\"ischeck\"></td><td name=\""+wasterwaterid+"\">"+wasterwaterpart+"</td><td name=\""+wasterwaterid+"\">"+factor+"</td><td name=\""+wasterwaterid+"\">"+handleevolumn+"</td><td name=\""+wasterwaterid+"\">"+realpressure+"</td><td name=\""+wasterwaterid+"\">"+voczhili+"</td><td name=\""+wasterwaterid+"\">"+efficiency+"</td><td name=\""+wasterwaterid+"\">"+capcity+"</td><td><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"edit"+wasterwaterid+"\"   class=\"ui-pg-div \" onclick=\"modify("+wasterwaterid+","+wasterwaterpart_pre+")\" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"save"+wasterwaterid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"savepage("+wasterwaterid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"delete"+wasterwaterid+"\"  class=\"ui-pg-div\" onclick=\"wasteDelete("+wasterwaterid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
		        	}else{
		        		tablebody.innerHTML+= "<tr id=\"wastewater"+wasterwaterid+"\" class=\"even\"><td ><input type=\"checkbox\" name=\"ischeck\"></td><td name=\""+wasterwaterid+"\">"+wasterwaterpart+"</td><td name=\""+wasterwaterid+"\">"+factor+"</td><td name=\""+wasterwaterid+"\">"+handleevolumn+"</td><td name=\""+wasterwaterid+"\">"+realpressure+"</td><td name=\""+wasterwaterid+"\">"+voczhili+"</td><td name=\""+wasterwaterid+"\">"+efficiency+"</td><td name=\""+wasterwaterid+"\">"+capcity+"</td><td><div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\"><span id=\"edit"+wasterwaterid+"\"  class=\"ui-pg-div \" onclick=\"modify("+wasterwaterid+","+wasterwaterpart_pre+") \" ><span class=\"ui-icon ui-icon-pencil red\"></span></span><span id=\"save"+wasterwaterid+"\"  style=\"display:none;\"  class=\"ui-pg-div\" onclick=\"savepage("+wasterwaterid+")\"><span class=\"ui-icon icon-refresh green\"></span></span><span id=\"delete"+wasterwaterid+"\"  class=\"ui-pg-div\" onclick=\"wasteDelete("+wasterwaterid+") \"><span class=\"ui-icon icon-trash bigger-120 red\" ></span></span></div></td></tr>"
		        	}
		        } 		 
		});
	}

	function getWW(index){
		var msg;
		//alert(index);
		//alert('aaaccc');
		switch(index){
		
		//alert(index);
		 case "1":
			 //alert('cccc');
			 msg = "废水处理厂";
			 break;
		 case "2":
			 //alert('cccc');
			 msg = "冷却塔-未控制";
			 break;
		 case "3":
			 msg = "冷却塔-减少泄露";
			 break;
		 case "4":
			 msg = "油水分离器-未加盖";
			 break;
		 case "5":
			 msg = "油水分离器-加盖";
			 break;
		}
		return msg;
	}
	    function addRow(){
					
				var tabObj=document.getElementById("wastewater");//获取添加数据的表格
			    var td=new Array(9);
			    
			    var myNewRow = tabObj.insertRow(tabObj.rows.length);//插入新行
		       
			  
			   for(var i = 0 ; i < 9 ; i ++){
				        
			   			td[i]=myNewRow.insertCell(i);
                         
			   			if(i==0){
			   				td[i].innerHTML="<input type='checkbox' name='ischeck' id='chkArr'  />";
			   			      // alert(td[i]);
			   			       }
                        else if(i==1){
                            td[i].innerHTML=" <select type='select'  style='font-size:15px;' name='chkArr' id='wastewaterhandle' onchange='initwastefactor(this,this.id,this.value,1)' ></select> ";
                             var $option1 = $("<option></option>");    
		           			    $option1.attr("value", 1);    
		            			$option1.text("废水处理厂");    
		           				var $option2 = $("<option></option>");    
		           			    $option2.attr("value", 2);    
		            			$option2.text("冷却塔-未控制"); 
		            			var $option3 = $("<option></option>");    
		           			    $option3.attr("value", 3);    
		            			$option3.text("冷却塔-减少泄露");
		            			var $option4 = $("<option></option>");    
		           			    $option4.attr("value", 4);    
		            			$option4.text("油水分离器-未加盖");  
		            			var $option5 = $("<option></option>");    
		           			    $option5.attr("value", 5);
		           			    $option5.text("油水分离器-加盖"); 
		            			$("#wastewaterhandle").append($option1); 
		            			$("#wastewaterhandle").append($option2);
		            			$("#wastewaterhandle").append($option3); 
		            			$("#wastewaterhandle").append($option4); 
		            			$("#wastewaterhandle").append($option5);  
		            			
		            			  
                            }
                        else if (i==2){
                        	td[i].innerHTML="<input  name='chkArr' id='chkArr'  style='width:150px' value='0.005' disabled='true' />";

                        }    
			   			else if (i==5){
			   				td[i].innerHTML=" <select type='select'  style='font-size:15px;' name='chkArr' id='addvoczhili' onchange='showER(this,this.id,this.value,1,-1)' ></select> ";
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
			   			else if (i==6){
			   				   td[i].innerHTML="<input  name='chkArr' id='jisuanEr'  style='width:150px' value='0.30' disabled='true' />";
			   			}
			   			else if (i==7){
			   				
			   			}
			   			else if (i==8)
			   			    td[i].innerHTML="<span style='width:100px' id='update'  class='ui-pg-div' onclick='savepage(-1)'><span class='ui-icon icon-refresh green'></span></span>";
			   			else if(i==3)
			   				td[i].innerHTML="<input id='addrowhandlevolumn' name='chkArr'   style='width:150px'  onkeyup=\"checkNum(this);\"/>";
			   			else 
			   				td[i].innerHTML="<input id='addrowrealpressure' name='chkArr'  style='width:150px'  onkeyup=\"checkNum(this);\"/>";
			   					

				}
			  
			
			    			document.getElementById("add").disabled=true;  
			    		
			   }
	    
         function modify(wastewaterid,wasterwaterpart){
				//alert(wasterwaterpart);
				$('#edit'+wastewaterid).hide();	
				$('#delete'+wastewaterid).hide();
				$('#save'+wastewaterid).show();
				 var tds=document.getElementsByName(wastewaterid);
				 
				 for (i =0 ; i < 8; i++){
					 if (i==0){//得到该单元的标签，取消禁用
						 tds[i].innerHTML="<select id='wastewaterhandle' type='select' name='modify"+wastewaterid+"'  onchange='initwastefactor(this,this.id,this.value,2,"+wastewaterid+")'  style='font-size:15px;' ></select>";
                                
									                              var $option1 = $("<option ></option>");    
											           			    $option1.attr("value", 1);    
											            			$option1.text("废水处理厂");    
											           				var $option2 = $("<option ></option>");    
											           			    $option2.attr("value", 2);    
											            			$option2.text("冷却塔-未控制"); 
											            			var $option3 = $("<option ></option>");    
											           			    $option3.attr("value", 3);    
											            			$option3.text("冷却塔-减少泄露");
											            			var $option4 = $("<option  ></option>");    
											           			    $option4.attr("value", 4);    
											            			$option4.text("油水分离器-未加盖");  
											            			var $option5 = $("<option ></option>");    
											           			    $option5.attr("value", 5);
											           			    $option5.text("油水分离器-加盖"); 
											           			    if(wasterwaterpart==1)
											           			    	$option1.attr("selected",'selected');
											           			    else if (wasterwaterpart==2)
											           			    	$option2.attr("selected",'selected');
											           			    else if (wasterwaterpart==3)
											           			    	$option3.attr("selected",'selected');
											           			    else if (wasterwaterpart==4)
											           			    	$option4.attr("selected",'selected');
											           			    else if (wasterwaterpart==5)
											           			    	$option5.attr("selected",'selected');
											           			    
											            			$("#wastewaterhandle").append($option1); 
											            			$("#wastewaterhandle").append($option2);
											            			$("#wastewaterhandle").append($option3); 
											            			$("#wastewaterhandle").append($option4); 
											            			$("#wastewaterhandle").append($option5); 
					 
					 }
					 else if (i==1){//name必须为modify，方便更新时得到值
						 //alert(1);
						  tds[i].innerHTML="<input style='width:90px' disabled='disabled' name='modify"+wastewaterid+"'  value="+tds[i].innerHTML+ ">";
					 }
					 else if (i==4){
						 tds[i].innerHTML=" <select type='select' id='addvoczhili' style='font-size:15px;' name='modify"+wastewaterid+"'  onchange='showER(this,this.id,this.value,2,"+wastewaterid+")' ></select> ";
                           
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
					 else if (i==5){
						 		tds[i].innerHTML="<input style='width:90px' disabled='disabled' id='jisuanEr"+wastewaterid+"' name='modify"+wastewaterid+"'  value="+tds[i].innerHTML+ ">";
					 }
					 else if(i==6){
						 //do nothing
					 }
					 
					 else if(i==2)
							tds[i].innerHTML="<input style='width:90px'  id='modifyhandlevolumn1'  name='modify"+wastewaterid+"'  onkeyup=\"checkNum(this);\"  value="+tds[i].innerHTML+ ">";
				      else 
							tds[i].innerHTML="<input style='width:90px'  id='modifyrealpressure1'  name='modify"+wastewaterid+"' onkeyup=\"checkNum(this);\"  value="+tds[i].innerHTML+ ">";
				 }
				 //点击编辑后，编辑按钮消失，出现保存按钮
					
 
			}
		function initwastefactor(thisObj, thisObjID,value,flag,wastewaterid){
					//1为新增，2位更新
					 
					var elms = document.getElementsByName("chkArr");
					var $td = $(thisObj).parents('tr').children('td'); 
					
					if(flag==1){
					if(value==1){
						$td[2].innerHTML="<input  name='chkArr' id='chkArr'  style='width:150px' value='0.005' disabled='true' />";
					}
					else if(value==2){
						$td[2].innerHTML="<input  name='chkArr' id='chkArr'  style='width:150px' value='0.0007' disabled='true' />";
					}
				 	else if(value==3){
						$td[2].innerHTML="<input  name='chkArr' id='chkArr'  style='width:150px' value='0.00008' disabled='true' />";
					}
					else if(value==4){
						$td[2].innerHTML="<input  name='chkArr' id='chkArr'  style='width:150px' value='0.6' disabled='true' />";
					}
					else if(value==5){
						$td[2].innerHTML="<input  name='chkArr' id='chkArr'  style='width:150px' value='0.024' disabled='disabled' />";
					}
				}
				else{
					if(value==1){
						$td[2].innerHTML="<input  name='modify"+wastewaterid+"' id='chkArr'  style='width:150px' value='0.005' disabled='true' />";
					}
					else if(value==2){
						$td[2].innerHTML="<input  name='modify"+wastewaterid+"'  style='width:150px' value='0.0007' disabled='true' />";
					}
				 	else if(value==3){
						$td[2].innerHTML="<input  name='modify"+wastewaterid+"'  style='width:150px' value='0.00008' disabled='true' />";
					}
					else if(value==4){
						$td[2].innerHTML="<input  name='modify"+wastewaterid+"'  style='width:150px' value='0.6' disabled='true' />";
					}
					else if(value==5){
						$td[2].innerHTML="<input  name='modify"+wastewaterid+"' id='chkArr'  style='width:150px' value='0.024' disabled='disabled' />";
					}
				}
			}
			
			
		    function savepage (wastewaterid){
			     
				
				if (wastewaterid  == -1)
				{
				 
					var elms = document.getElementsByName("chkArr");
					var array = new Array(elms.length);
					for( var i=0;i<elms.length;i++){
						
						   array[i]=elms[i].value;
				 	}
					
					var jisuanEr=document.getElementById("jisuanEr").value;
   					 
   					var capcity=array[2]*array[1]*(1-jisuanEr)*0.001;
   					 
   					//有一种情况，capcity会计算出科学计数法  会出现bug
   					// alert(jisuanEr);
   					// alert(capcity.toString());
   					
				}
				else{
					
					var elms = document.getElementsByName("modify"+wastewaterid);
					var array = new Array(elms.length);
					for( var i=0;i<elms.length;i++){
							array[i]=elms[i].value;
					 }
					
					 var jisuanEr=document.getElementById("jisuanEr"+wastewaterid).value;
					 var capcity=array[2]*array[1]*(1-jisuanEr)*0.001;
					 
					//alert(new Number(capcity.toString()));
					 
				}
				$.post("ajax/Wastewater/save.do",{	  	  flagwastewaterid:wastewaterid,
														  wasterwaterpart:array[0],
														  handlevolumn:array[2],
														  factor:array[1],
														  realpressure:array[3],
														  voczhili:array[4],
														  efficiency:jisuanEr,
														  capcity:capcity
														  },function(data){    
														
														  var jsonObj = eval("(" + data + ")");  
														  //alert(jsonObj.wastewaterid);
											              if(jsonObj.status==1){//1为新增    
											                  //把返回的loadingid给页面赋值
											                  var tabObj=document.getElementById("wastewater");//获取添加数据的表格

											                  tabObj.deleteRow(tabObj.rows.length-1);//插入新行
											                  
											                  var myNewRow = tabObj.insertRow(tabObj.rows.length);//插入新行
											                  myNewRow.setAttribute("id","wastewater"+jsonObj.wastewaterid);
											                
											                   
											                  var td=new Array(11);
															  
											                  for(var i = 0 ; i < 9 ; i ++){
					  												 td[i]=myNewRow.insertCell(i);
					  												 
															   if(i==0)
													   				td[i].innerHTML="<input type='checkbox' name='ischeck'   value='"+jsonObj.wastewaterid+"' />";
													   			else if(i==1)
                                                                   {
													   				td[i].setAttribute("name",jsonObj.wastewaterid);
                                                                   td[i].innerHTML=" <select type='select' style='font-size:15px;'  disabled='disabled' name='chkArr' id='wastewaterhandle"+jsonObj.wastewaterid+"'></select> ";
                                
									                                var $option1 = $("<option ></option>");    
											           			    $option1.attr("value", jsonObj.wasterwaterpart); 
											           			    if(jsonObj.wasterwaterpart==1)
											            			$option1.text("废水处理厂");    
											           				 else if (jsonObj.wasterwaterpart==2)
											            			$option1.text("冷却塔-未控制"); 
											            			else if (jsonObj.wasterwaterpart==3)   
											            			$option1.text("冷却塔-减少泄露");
											            			 else if (jsonObj.wasterwaterpart==4) 
											            			$option1.text("油水分离器-未加盖");  
											            			 else if (jsonObj.wasterwaterpart==5)
											           			    $option1.text("油水分离器-加盖"); 
											           			    $('#wastewaterhandle'+jsonObj.wastewaterid).append($option1);
                                                                    td[i].innerHTML=$option1.text();
                                                                   }     
                                                               else if (i==5){
                                                            	   td[i].setAttribute("name",jsonObj.wastewaterid);
																   	td[i].innerHTML=" <select type='select'  style='font-size:15px;'   id='newvoc"+jsonObj.wastewaterid+"' disabled='disabled'  ></select> ";
										                            
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
												           				
												            			$('#newvoc'+jsonObj.wastewaterid).append($option1); 
												            			
                                                            	          td[i].innerHTML=$option1.text();
                                                               }
															   else if (i==7){
																   		td[i].innerHTML=jsonObj.Capcity;
															   }
													   			else if(i==8){
													   				td[i].innerHTML="<span id='edit"+jsonObj.wastewaterid+"'   class='ui-pg-div' onclick='modify("+jsonObj.wastewaterid+","+jsonObj.wasterwaterpart+")' ><span class='ui-icon ui-icon-pencil red'></span></span>" +
													   				"<span id='save"+jsonObj.wastewaterid+"' style='display:none;'  class='ui-pg-div' onclick='savepage("+jsonObj.wastewaterid+")'><span class='ui-icon icon-refresh green'></span></span>" +
													   				"<span id='delete"+jsonObj.wastewaterid+"'  class='ui-pg-div' onclick='wasteDelete("+jsonObj.wastewaterid+")'><span class='ui-icon icon-trash bigger-120 red' ></span></span>";
													   				
													   				
													   			}
													   			else{
													   				td[i].setAttribute("name",jsonObj.wastewaterid);
													   				td[i].innerHTML=array[i-1];
													   				}
				   												}
											                }
											              else{//2为更新
											            	    $('#edit'+jsonObj.wastewaterid).show();	
																$('#delete'+jsonObj.wastewaterid).show();
																$('#save'+jsonObj.wastewaterid).hide();
											            	  var td=document.getElementsByName(jsonObj.wastewaterid);
				 										 	  //alert(jsonObj.wastewaterid);
											            	
											            	  	  td[0].setAttribute("name",jsonObj.wastewaterid);
                                                                   td[0].innerHTML=" <select type='select' style='font-size:15px;'  disabled='disabled' name='chkArr' id='wastewaterhandle'></select> ";
                                
									                                var $option1 = $("<option ></option>");
									                                $option1.attr("value", jsonObj.wasterwaterpart);
									                                if(jsonObj.wasterwaterpart==1) 
									                                	$option1.text("废水处理厂");
											           			    else if (jsonObj.wasterwaterpart==2)
											           			    	$option1.text("冷却塔-未控制"); 
											           			    else if (jsonObj.wasterwaterpart==3)
											           			    	$option1.text("冷却塔-减少泄露");
											           			    else if (jsonObj.wasterwaterpart==4)
											           			    	$option1.text("油水分离器-未加盖");  
											           			    else if (jsonObj.wasterwaterpart==5)
											           			    	$option1.text("油水分离器-加盖"); 
											            			$("#wastewaterhandle").append($option1);
											            		//alert($option1.text());
											            	  td[0].innerHTML=$option1.text();
											            	  td[1].innerHTML=array[1];
				 										 	  td[2].innerHTML=array[2];
				 										 	  td[3].innerHTML=array[3];
											            	  td[4].setAttribute("name",jsonObj.wastewaterid);
														      td[4].innerHTML=" <select type='select'  style='font-size:15px;'   id='newvoc"+jsonObj.wastewaterid+"' disabled='disabled'  ></select> ";
										                            
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
												           	$('#newvoc'+jsonObj.wastewaterid).append($option1); 
												           	  td[4].innerHTML=$option1.text();
											            	  td[5].innerHTML=jisuanEr;
											            	  td[6].innerHTML=jsonObj.Capcity;
											            	 
											              }
											                
				}); 
				
				
				document.getElementById("add").disabled=false;
			}
		    
		    function showER(thisObj, thisObjID,value,flag,wastewaterid){
					var $td = $(thisObj).parents('tr').children('td'); 
					
					if(flag==1){
					if(value==1||value==2||value==3||value==4){
						$td[6].innerHTML="<input  name='chkArr' id='jisuanEr'  style='width:50px' value='0.30' disabled='disabled' />";
					}
					
					else if(value==5){
						$td[6].innerHTML="<input  name='chkArr' id='jisuanEr'  style='width:50px' value='0' disabled='disabled' />";
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
						$td[6].innerHTML="<input  name='modify' id='jisuanEr"+wastewaterid+"'  style='width:50px' value='0.30' disabled='true' />";
					}
					 
					else if(value==5){
						$td[6].innerHTML="<input  name='modify' id='jisuanEr"+wastewaterid+"'  style='width:50px' value='0' disabled='disabled' />";
					}
					else if (value==6){//loadingid 在jisuanEr.jsp里已经写好，没再改
						window.open ('jisuanEr.jsp?loadingid='+wastewaterid,'newwindow','height=300,width=400,top=50,left=500,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no');
					}
					
				}
				
			}
		   /* 
		    function deleteRow(){
				
			
			var chkObj=document.getElementsByName("ischeck");//???
  			var tabObj=document.getElementById("wastewater");
  			alert(tabObj.rows.length);
   			for(var k=1;k<tabObj.rows.length;k++){
   				alert(chkObj[k].checked);
    			if(chkObj[k].checked){
    				
     				tabObj.deleteRow(k);
     				k=-1;
    			}
   			}
   			
			}
		    function deletejspresult(wastewaterid){
			
			var chkObj=document.getElementsByName("ischeck");//???
  			var tabObj=document.getElementById("wastewater");
  			
  			 
   			for(var k=0;k<=tabObj.rows.length;k++){
		         
    			if(chkObj[k].value==wastewaterid){
    				 
     				tabObj.deleteRow(k+1);
     				return;
     				
    			}
   			}
   			return;
			}
		    function oneDelete(wastewaterid){
			
			
    		if (confirm('确定执行[删除]操作?')){
    		deletejspresult(wastewaterid);
    		
		    $.post("/tjjcz/pages/Wastewater/onedelete.do?wastewaterid="+wastewaterid);
		      
    		}
			}
		    */
		    function wasteDelete(wasterwaterid){
		    	//alert(wastewaterid);
     		//这里的materialid 实际上是product 的id，代码重用，懒得改了
     		$.post("ajax/Wastewater/wastewaterDelete.do",{wastewaterid:wasterwaterid},function(data){
     		
     			var jsonObj = eval("("+data+")");
     		if(jsonObj.status==1){
     			//alert("保存成功");
     			alert("删除成功"); 
     			$("#wastewater"+wasterwaterid).remove();
     		}else{
     			alert("保存失败");
     		}
     		});
           }
		    function checkNum(obj) {  
			    obj.value = obj.value.replace(/[^\d\.]/g,'');  
			}
			
		    