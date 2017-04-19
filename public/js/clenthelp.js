           

			function cleaSec(objID){
				var selectObj = document.getElementById(objID);
				var length = selectObj.options.length;
				for(var i = 1;i <= length;i++){
					selectObj.options[0] = null;
				}
			};
           function innitSccb(scca) {
				
			        if(scca!=""){
						$("#m_scc").val(scca);
					
					}
			        else{
			        	 cleaSec("sccb");
			        	 
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("Select");   			       
					     $("#sccb").append($option); 
					      innitSccc(""); 
					     return;
			        }
			   		$.post("ajax/Scc2/listSccb.do",{ aid: scca},function(data){    
			         
			        var jsonObj = eval("(" + data + ")");  
			        cleaSec("sccb");
			        innitSccc("");
			       var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("Select");   			       
			       $("#sccb").append($option);  
			        for (var i = 0; i < jsonObj.length; i++) {    
			            var $option = $("<option></option>");    
			            $option.attr("value", jsonObj[i].SccbCode);    
			            $option.text(jsonObj[i].SccbDes +"("+jsonObj[i].SccbCode+")");    
			            $("#sccb").append($option);    
			        } 
			         
			    });  
			};
			function innitSccc(sccb) { 
					if(sccb!=""){
						var m_scc=$("#m_scc").val();
						$("#m_scc").val(m_scc.substring(0,2)+sccb);
					}
					else{
						 cleaSec("sccc");
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("Select");   			       
					     $("#sccc").append($option);  
					     innitSccd("");
					     return;
					}
				//var psccB = document.getElementById("psccB").value;   
			   		$.post("ajax/Scc3/listSccc.do",{ bid: sccb},function(data){      
			        var jsonObj = eval("(" + data + ")");  
			        cleaSec("sccc");
			        innitSccd("");
			        var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("Select");   			       
			       $("#sccc").append($option);  
			        for (var i = 0; i < jsonObj.length; i++) {    
			            var $option = $("<option></option>");    
			           $option.attr("value", jsonObj[i].ScccCode);    
			            $option.text(jsonObj[i].ScccDes +"("+jsonObj[i].ScccCode+")");     
			            $("#sccc").append($option);    
					}
			            
				});  
			};
			function innitSccd(sccc) { 
					if(sccc!=""){
						var m_scc=$("#m_scc").val();
						$("#m_scc").val(m_scc.substring(0,4)+sccc);
					}
					else{
						 cleaSec("sccd");
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("Select");   			       
					     $("#sccd").append($option);  
					     return;
					}
					$.post("ajax/Scc4/listSccd.do",{cid: sccc},function(data){    
					var jsonObj = eval("(" + data + ")");  
			        cleaSec("sccd");
			        var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("Select");   			       
			       $("#sccd").append($option);  
			        for (var i = 0; i < jsonObj.length; i++) {    
			            var $option = $("<option></option>");    
			           $option.attr("value", jsonObj[i].SccdCode);    
			            $option.text(jsonObj[i].SccdDes +"("+jsonObj[i].SccdCode+")");     
			            $("#sccd").append($option);    
			        } 
				});  
			};
			function selectedsccd(sccd){
				if(sccd!=""){
						var m_scc=$("#m_scc").val();
						$("#m_scc").val(m_scc.substring(0,7)+sccd);
				}
			}
			
			