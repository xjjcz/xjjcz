
function jumpandsave(source,tagger,m_alert){
	if(source!=tagger){ 
        	   if(m_alert==1){        		   
        	       alert("请保存提交当前页面，再填写其它源");
        		   return false;
         		}else{
         		   return true;
         		}
    }
	return true;
}
function saveinfo(page,tagger,source,m_alert){
			var location = (window.location+'').split('/');  
			var basePath = location[0]+'//'+location[2]+'/'+location[3];  
           if(tagger=="exhaust"){
        	   $.post("ajax/ExhaustTemp/savepage.do",{page:page},function(data){
							var json = eval("(" + data + ")"); 
							if(json.sys_code == "suc"){
							 	window.location.href=basePath+"/pages/Client/exhuast.do";
							 }
				 		});
           }
           if(tagger=="feiqi"){
        	   $.post("ajax/FeiqiTemp/savepage.do",{page:page},function(data){
							var json = eval("(" + data + ")"); 
							if(json.sys_code == "suc"){
								window.location.href=basePath+"/pages/Client/feiqi.do";
							 }
				 		});
           }
          if(tagger=="stationary"){
        	   if(page==0){
        			  if( m_alert==null||m_alert==0){
//	        			  if(confirm("您没有锅炉信息，是否新建")){
//	        				  
//	        			  }
//	        			  else{
//	        				  return;
//	        			  }
	        		  }
        		  }
	        	$.post("ajax/TotalBoilerTemp/savepage.do",{page:page},function(data){
							var json = eval("(" + data + ")"); 
							if(json.sys_code == "suc"){
								//如果是0说明是工厂信息的页面否则是设备信息的页面
								
								if(page==0||page==100)
								 {
									window.location.href=basePath+"/pages/Client/stationinfo.do";
								 }else{
									window.location.href=basePath+"/pages/Client/boilershell.do";
								 }						    	
							}
								
							
						});
	        	}
        	  if(tagger=="product"){
        		  //如果没有总信息，需要新增页面
        		 // var a='${totaldevice}';
        		  //alert(m_alert);
        		  if(page==0){
        			  if( m_alert==null||m_alert==0){
//	        			  if(confirm("您没有原料和产品信息，是否新建")){
//	        				  
//	        			  }
//	        			  else{
//	        				  return;
//	        			  }
	        		  }
        		  }
        		  $.post("ajax/TotalProductrawTemp/savepage.do",{page:page},function(data){
						var json = eval("(" + data + ")"); 
						//alert(json.sys_code);
						if(json.sys_code == "suc"){
							//如果是0说明是工厂信息的页面否则是设备信息的页面
							 if(page==0)
							 {
								 window.location.href=basePath+"/pages/Client/proceduretotalinfo.do";
							   
							 }else if(page>0&&page<100){
								  window.location.href=basePath+"/pages/Client/device.do";
							   
							 }else if(page>200){
								  window.location.href=basePath+"/pages/Client/product.do";
								 
							 }else{
								   window.location.href=basePath+"/pages/Client/raw.do";
							 }				    	
						}
							
						
					});
        		}
        	  if(tagger=="rongji"){
        		 
        		   if(page==0){
        			  if( m_alert==null||m_alert==0){
//	        			  if(confirm("您没有溶剂使用源的原料和产品信息，是否新建")){
//	        				  
//	        			  }
//	        			  else{
//	        				  return;
//	        			  }
	        		  }
        		  }
        		  $.post("ajax/TotalRongjiTemp/savepage.do",{page:page},function(data){
						var json = eval("(" + data + ")"); 
						//alert(json.sys_code);
						if(json.sys_code == "suc"){
							//如果是0说明是工厂信息的页面否则是设备信息的页面
							 if(page==0)
							 {
							    window.location.href=basePath+"/pages/Client/solventproceduretotalinfo.do";
							 }else if(page>0&&page<100){
							 	window.location.href=basePath+"/pages/Client/solventraw.do";
							 }else{
							    window.location.href=basePath+"/pages/Client/solventproduct.do";
							 }				    	
						}
							
						
					});
        		}
        		 
        	  
        	  if(tagger=="procedure"){
        		   if(page==0){
        			  if( m_alert==null||m_alert==0){
//	        			  if(confirm("您没有窑炉信息，是否新建")){
//	        				  
//	        			  }
//	        			  else{
//	        				  return;
//	        			  }
	        		  }
        		  }
        		  $.post("ajax/TotalKilnTemp/savepage.do",{page:page},function(data){
						var json = eval("(" + data + ")");
						if(json.sys_code == "suc"){
							//如果是0说明是工厂信息的页面否则是设备信息的页面
							 if(page==0)
							 {
								  window.location.href=basePath+"/pages/Client/kilntotalinfo.do";
							 }
							 else{
								  window.location.href=basePath+"/pages/Client/kilnshell.do";
							 }					    	
						}	
					});
        	  }
      }
        function finishall(){
        	if(confirm("亲！你确定提交所有状态吗？只有完成所有的填报才能点击此按钮")){
	        	$.post("ajax/Factory/changestatus.do",{},function(data){
	        		 var jsonObj = eval("(" + data + ")"); 
	        		 //alert(jsonObj.status);
	        		 if(jsonObj.status=="suc"){
	        			 alert("恭喜你，完成所有填报工作！");
	        		 }else{
	        			 alert("登录超时，更新失败，请重新登录，亲！");
	        		 }
	        	 });
        	}
        	 
        }
       //自动获取除尘措施下拉框 郭楠 2015-7-25
   		function prevent(type,id,value){
					         var $option = $("<option></option>");    
						       $option.attr("value", "");    
						       $option.text("请选择");   			       
						       $("#"+id).append($option);  
						     if(type=="dust"){
									 $.post("ajax/Dustremove/list.do",function(data){ 
						       		 var jsonObj = eval("(" + data + ")");    
						       		 for (var i = 0; i < jsonObj.length; i++) {    
							            var $option = $("<option></option>");    
							            $option.attr("value", jsonObj[i].dustid);  
							            //alert(jsonObj[i].dustid);
							            $option.text(jsonObj[i].dustname);    
							            $("#"+id).append($option);    
							 	  	 }
						       		$("#"+id+" option[value='"+value+"']").attr("selected", true);
						       	});
							}
						    if(type=="nitre"){
						    	$.post("ajax/Nitreremove/list.do",function(data){     
						       		 var jsonObj = eval("(" + data + ")");    
						       		 for (var i = 0; i < jsonObj.length; i++) {    
							            var $option = $("<option></option>");    
							            $option.attr("value", jsonObj[i].nitreid);    
							            $option.text(jsonObj[i].nitrename);    
							            $("#"+id).append($option); 
							 	   }
						       		 $("#"+id+" option[value='"+value+"']").attr("selected", true);
						       	});
						    }
						    if(type=="sulphur"){
						    		$.post("ajax/Sulphurremove/list.do",function(data){     
						       		 var jsonObj = eval("(" + data + ")");    
						       		 for (var i = 0; i < jsonObj.length; i++) {    
							            var $option = $("<option></option>");    
							            $option.attr("value", jsonObj[i].sulphurid);    
							            $option.text(jsonObj[i].sulphurname);    
							            $("#"+id).append($option);  
							 	   }
						       		  $("#"+id+" option[value='"+value+"']").attr("selected", true);
						       	});
						    }
	      }
   			
   
   		//设备信息加载
   		function exhaustModel(){
		                    
							var exhaustNum=document.getElementById("mchimney").value;
							 
							if(exhaustNum!=''){
								$.post("ajax/ExhaustTemp/exhaustModel.do",{exhaustNum:exhaustNum},function(data){
									var json = eval("(" + data + ")");
									//document.getElementById("exaust_info").value =json.value;
									
									document.getElementById("exaust_info").innerHTML = "<b style='color:purple'>烟囱"+exhaustNum+"的详细信息：</br>" + json.value+"</b>";
									//alert(json.sys_code);
									//alert(page);
								});
							}
							else{
								document.getElementById("exaust_info").innerHTML = "<b style='color:purple'></b>";
							}
	}