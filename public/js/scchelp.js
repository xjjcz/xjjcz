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
					     $option.text("请选择");   			       
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
			       $option.text("请选择");   			       
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
					     $option.text("请选择");   			       
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
			       $option.text("请选择");   			       
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
					     $option.text("请选择");   			       
					     $("#sccd").append($option);  
					     return;
					}
					$.post("ajax/Scc4/listSccd.do",{cid: sccc},function(data){    
					var jsonObj = eval("(" + data + ")");  
			        cleaSec("sccd");
			        var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("请选择");   			       
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
			
			function clientchangeScc2(scc1_value,scc2_id,scc3_id,scc4_id,load){
				 // alert(scc1_value);
				if(scc1_value!=""){
					  
				  }else{
			        	 cleaSec(scc2_id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc2_id).append($option); 
					    // clientScc3(scc1,"",scc3id);
					    //  clientscc3(scc1,"",scc3id,"",isfirst); 
					     return;
			      }
				
			   	   $.post("ajax/Scc2/listSccb.do",{aid:scc1_value},function(data){  
			       var jsonObj = eval("(" + data + ")");  
			       cleaSec(scc2_id);
			       var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("请选择");   			       
			       $("#"+scc2_id).append($option);  
			     
			         for (var i = 0; i < jsonObj.length; i++) {    
			            var $option = $("<option></option>");    
			            $option.attr("value", jsonObj[i].SccbCode);    
			            $option.text(jsonObj[i].SccbDes+"("+jsonObj[i].SccbCode+")");    
			            $("#"+scc2_id).append($option);   
			            
			        } 
			            
				         var inputname=scc2_id+"_input";
				         var val=document.getElementById(inputname).value;    
				         $("#"+scc2_id+" option[value='"+val+"']").attr("selected", true);
				         clientscc3(scc1_value,val,scc3_id,scc4_id,load); 
			         	 
			         
			          
			    });  
			   	   
				
			}
			function clientchangeScc3(scc1_value,scc2_id,scc3_id,scc4_id,load){
				if(scc1_value!=""){
					  
				  }else{
			        	 cleaSec(scc2_id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc2_id).append($option); 
					    // clientScc3(scc1,"",scc3id);
					    //  clientscc3(scc1,"",scc3id,"",isfirst); 
					     return;
			      }
				
			   	   $.post("ajax/Scc2/rawscc.do",{},function(data){  
			       var jsonObj = eval("(" + data + ")");  
			       cleaSec(scc2_id);
			       var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("请选择");   			       
			       $("#"+scc2_id).append($option);  
			     
			         for (var i = 0; i < jsonObj.length; i++) {    
			            var $option = $("<option></option>");    
			            $option.attr("value", jsonObj[i].SccbCode);    
			            $option.text(jsonObj[i].SccbDes+"("+jsonObj[i].SccbCode+")");    
			            $("#"+scc2_id).append($option);   
			            
			        } 
			            
				         var inputname=scc2_id+"_input";
				         var val=document.getElementById(inputname).value;    
				         $("#"+scc2_id+" option[value='"+val+"']").attr("selected", true);
				         clientscc3(scc1_value,val,scc3_id,scc4_id,load); 
			         	 
			         
			          
			    });  
			}
			function clientScc2(scc1,scc2id,scc3id,isfirst) {
				   // alert(scc1);
					
			        if(scc1!=""){
						//$("#m_scc").val(scca);
					}
			        else{
			        	 cleaSec(scc2id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc2id).append($option); 
//					     clientScc3(scc1,"",scc3id);
//					      clientscc3(scc1,"",scc3id,"",isfirst); 
					     return;
			        }
			       var inputname=scc2id+"_input";
			   	   $.post("ajax/Scc2/listSccb.do",{ aid:scc1},function(data){  
			       var jsonObj = eval("(" + data + ")");  
			      
			       cleaSec(scc2id);
			       var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("请选择");   			       
			       $("#"+scc2id).append($option);  
			     
			         for (var i = 0; i < jsonObj.length; i++) {    
			            var $option = $("<option></option>");    
			            $option.attr("value", jsonObj[i].SccbCode);    
			            $option.text(jsonObj[i].SccbDes+"("+jsonObj[i].SccbCode+")");    
			            $("#"+scc2id).append($option);   
			            
			        } 
			         
				         var inputname=scc2id+"_input";
				     
				         var val=document.getElementById(inputname).value;    
				         $("#"+scc2id+" option[value='"+val+"']").attr("selected", true);
			         	 clientscc3(scc1,val,scc3id,"",isfirst); 
			         
			          
			    });  
			   	   
			   };
       //scc3id  scc4id 3级和4级的下拉id值
	    //由于在总信息中提供了一、二级值，要进行三、四级信息的设置
        function clientscc3(scc1,scc2,scc3id,scc4id,isfirst){
        
    	          //var scc2=document.getElementById(scc2id).value;  
        	     
			        if(scc2!=""){
						//$("#m_scc").val(scca);
					
					}
			        else{
			        	 cleaSec(scc3id);
			        	 cleaSec(scc4id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc3id).append($option); 
					     //clientscc4(scc1,scc2id,"",scc4id); 
					     return;
			        }
        
        	$.post("ajax/Scc3/listSccc.do",{aid:scc1,bid:scc2},function(data){   
                          
			        var jsonObj = eval("(" + data + ")");
			        cleaSec(scc3id);
			        var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("请选择");   			       
			       $("#"+scc3id).append($option); 
			      // clientscc4(scc1,scc2id,"");
			        for (var i = 0; i < jsonObj.length; i++) {  
		            var $option = $("<option></option>");    
		            $option.attr("value", jsonObj[i].ScccCode);    
		            $option.text(jsonObj[i].ScccDes +"("+jsonObj[i].ScccCode+")"); 
		            $("#"+scc3id).append($option);    
		            
	        	} 
			        
			        if(isfirst==1){
				         var inputname=scc3id+"_input";
				         
				         var val=document.getElementById(inputname).value;    
				         $("#"+scc3id+" option[value='"+val+"']").attr("selected", true);
				       	 if(scc4id!=''){
			        		clientscccj4(scc1,scc2,val,scc4id);
			        	 }
			         }
			        
			        
				});  
        		
        };

       function clientscc4(scc1,scc2id,scc3id,scc4id){
    	  
    	   if(scc3id!=""){
						//$("#m_scc").val(scca);
					
					}
			        else{
			        	 cleaSec(scc4id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc4id).append($option); 
					     return;
			        }
    	   var tboilerFunction=document.getElementById(scc2id).value;
    	
    	   $.post("ajax/Scc4/listSccd.do",{aid:scc1,bid:tboilerFunction,cid:scc3id},function(data){      
			       var jsonObj = eval("(" + data + ")");  
			       cleaSec(scc4id); 
			       var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("请选择");   			       
			       $("#"+scc4id).append($option);  
			      
			        for (var i = 0; i < jsonObj.length; i++) {  
			            var $option = $("<option></option>");    
			           $option.attr("value", jsonObj[i].SccdCode);    
			            $option.text(jsonObj[i].SccdDes+"("+jsonObj[i].SccdCode+")");     
			            $("#"+scc4id).append($option);    
      			  } 
			          var inputname=scc4id+"_input";
			         var val=document.getElementById(inputname).value; 
			         $("#"+scc4id+" option[value='"+val+"']").attr("selected", true);
				});  
        } ;     
        
        function clientscccj4(scc1,scc2,scc3,scc4id){
        	
    	   if(scc3!=""){
						//$("#m_scc").val(scca);
					
					}
			        else{
			        	 cleaSec(scc4id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc4id).append($option); 
					     return;
			        }
    	   //var tboilerFunction=document.getElementById(scc2id).value;
    	   $.post("ajax/Scc4/listSccd.do",{aid:scc1,bid:scc2,cid:scc3},function(data){      
			       var jsonObj = eval("(" + data + ")");  
			       cleaSec(scc4id); 
			       var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("请选择");   			       
			       $("#"+scc4id).append($option);  
			     
			        for (var i = 0; i < jsonObj.length; i++) {  
			            var $option = $("<option></option>");    
			           $option.attr("value", jsonObj[i].SccdCode);    
			            $option.text(jsonObj[i].SccdDes+"("+jsonObj[i].SccdCode+")");     
			            $("#"+scc4id).append($option);    
      			  } 
                     var inputname=scc4id+"_input";
			         var val=document.getElementById(inputname).value; 
			         $("#"+scc4id+" option[value='"+val+"']").attr("selected", true);
				});  
        } ;     
        function auditscc2(scc1value,scc2id,scc2value){
        			if(scc1value!=""){
						
					}
			        else{
			        	 cleaSec(scc2id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc2id).append($option); 
					     return;
			        }
			      
			   	   $.post("ajax/Scc2/listSccb.do",{ aid:scc1value},function(data){  
					       var jsonObj = eval("(" + data + ")");  
					       cleaSec(scc2id);
					       var $option = $("<option></option>");    
					       $option.attr("value", "");    
					       $option.text("请选择");   			       
					       $("#"+scc2id).append($option);  
					     
					         for (var i = 0; i < jsonObj.length; i++) {    
					            var $option = $("<option></option>");    
					            $option.attr("value", jsonObj[i].SccbCode);    
					            $option.text(jsonObj[i].SccbDes+"("+jsonObj[i].SccbCode+")");    
					            $("#"+scc2id).append($option);   
			            
			        } 
				    $("#"+scc2id+" option[value='"+scc2value+"']").attr("selected", true);
			    }); 
 };
  	 function auditrawscc2(scc1value,scc2id,scc2value){
        			if(scc1value!=""){
						
					}
			        else{
			        	 cleaSec(scc2id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc2id).append($option); 
					     return;
			        }
			      
			   	   $.post("ajax/Scc2/rawscc.do",{ aid:scc1value},function(data){  
					       var jsonObj = eval("(" + data + ")");  
					       cleaSec(scc2id);
					       var $option = $("<option></option>");    
					       $option.attr("value", "");    
					       $option.text("请选择");   			       
					       $("#"+scc2id).append($option);  
					     
					         for (var i = 0; i < jsonObj.length; i++) {    
					            var $option = $("<option></option>");    
					            $option.attr("value", jsonObj[i].SccbCode);    
					            $option.text(jsonObj[i].SccbDes+"("+jsonObj[i].SccbCode+")");    
					            $("#"+scc2id).append($option);   
			            
			        } 
				    $("#"+scc2id+" option[value='"+scc2value+"']").attr("selected", true);
			    }); 
 };
  		function auditscc3(scc1value,scc2value,scc3id,scc3value){
        
    	          //var scc2=document.getElementById(scc2id).value;  
        	     
			        if(scc2value!=""){
						//$("#m_scc").val(scca);
					
					}
			        else{
			        	 cleaSec(scc3id);
			        	
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc3id).append($option); 
					     return;
			        }
          
        	$.post("ajax/Scc3/listSccc.do",{aid:scc1value,bid:scc2value},function(data){   
                         
			        var jsonObj = eval("(" + data + ")");
			        cleaSec(scc3id);
			        var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("请选择");   			       
			       $("#"+scc3id).append($option); 
			      // clientscc4(scc1,scc2id,"");
			        for (var i = 0; i < jsonObj.length; i++) {  
		            var $option = $("<option></option>");    
		            $option.attr("value", jsonObj[i].ScccCode);    
		            $option.text(jsonObj[i].ScccDes +"("+jsonObj[i].ScccCode+")"); 
		            $("#"+scc3id).append($option);    
		            
	        	} 
			     $("#"+scc3id+" option[value='"+scc3value+"']").attr("selected", true); 
//			        if(isfirst==1){
//				         var inputname=scc3id+"_input";
//				         
//				         var val=document.getElementById(inputname).value;    
//				       
//				         $("#"+scc3id+" option[value='"+val+"']").attr("selected", true);
//				       	 if(scc4id!=''){
//			        		clientscccj4(scc1,scc2,val,scc4id);
//			        	 }
//			         }
			        
			        
				});  
        		
        };
        function auditrawscc3(scc1value,scc2value,scc3id,scc3value){
        
    	          var scc2=document.getElementById(scc3id).value;  
        	
			        if(scc2value!=""){
						//$("#m_scc").val(scca);
					
					}
			        else{
			        	 cleaSec(scc3id);
			        	
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc3id).append($option); 
					     return;
			        }
            
        	$.post("ajax/Scc3/rawscc.do",{aid:scc1value,bid:scc2value},function(data){   
                        
			        var jsonObj = eval("(" + data + ")");
			        cleaSec(scc3id);
			        var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("请选择");   			       
			       $("#"+scc3id).append($option); 
			      // clientscc4(scc1,scc2id,"");
			        for (var i = 0; i < jsonObj.length; i++) {  
		            var $option = $("<option></option>");    
		            $option.attr("value", jsonObj[i].ScccCode);    
		            $option.text(jsonObj[i].ScccDes +"("+jsonObj[i].ScccCode+")"); 
		            $("#"+scc3id).append($option);    
		            
	        	} 
			     $("#"+scc3id+" option[value='"+scc3value+"']").attr("selected", true); 
//			        if(isfirst==1){
//				         var inputname=scc3id+"_input";
//				         
//				         var val=document.getElementById(inputname).value;    
//				       
//				         $("#"+scc3id+" option[value='"+val+"']").attr("selected", true);
//				       	 if(scc4id!=''){
//			        		clientscccj4(scc1,scc2,val,scc4id);
//			        	 }
//			         }
			        
			        
				});  
        		
        };
        // auditscc4('10',m_value,m_value2,id,value);
        function auditscc4(scc1value,scc2value,scc3value,scc4id,scc4value){
        
    	   if(scc3value!=""){
						//$("#m_scc").val(scca);
					
					}
			        else{
			        	 cleaSec(scc4id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc4id).append($option); 
					     return;
			        }
    	   //var tboilerFunction=document.getElementById(scc2id).value;
    	   $.post("ajax/Scc4/listSccd.do",{aid:scc1value,bid:scc2value,cid:scc3value},function(data){      
			       var jsonObj = eval("(" + data + ")");  
			       cleaSec(scc4id); 
			       var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("请选择");   			       
			       $("#"+scc4id).append($option);  
			     
			        for (var i = 0; i < jsonObj.length; i++) {  
			            var $option = $("<option></option>");    
			           $option.attr("value", jsonObj[i].SccdCode);    
			            $option.text(jsonObj[i].SccdDes+"("+jsonObj[i].SccdCode+")");     
			            $("#"+scc4id).append($option);    
      			  } 
                    
			        
			         $("#"+scc4id+" option[value='"+scc4value+"']").attr("selected", true);
				});  
        } ;  
         function auditrawscc4(scc1value,scc2value,scc3value,scc4id,scc4value){
        
    	   if(scc3value!=""){
						//$("#m_scc").val(scca);
					
					}
			        else{
			        	 cleaSec(scc4id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc4id).append($option); 
					     return;
			        }
    	   //var tboilerFunction=document.getElementById(scc2id).value;
    	   $.post("ajax/Scc4/rawscc.do",{aid:scc1value,bid:scc2value,cid:scc3value},function(data){      
			       var jsonObj = eval("(" + data + ")");  
			       cleaSec(scc4id); 
			       var $option = $("<option></option>");    
			       $option.attr("value", "");    
			       $option.text("请选择");   			       
			       $("#"+scc4id).append($option);  
			     
			        for (var i = 0; i < jsonObj.length; i++) {  
			            var $option = $("<option></option>");    
			           $option.attr("value", jsonObj[i].SccdCode);    
			            $option.text(jsonObj[i].SccdDes+"("+jsonObj[i].SccdCode+")");     
			            $("#"+scc4id).append($option);    
      			  } 
                    
			       
			         $("#"+scc4id+" option[value='"+scc4value+"']").attr("selected", true);
				});  
        } ;  
        
         function scctwo(scc1value,scc2id,scc2value,scc3id,scc4id){
        			if(scc1value!=""){
						
					}
			        else{
			        	 cleaSec(scc2id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc2id).append($option); 
					     return;
			        }
			      
			   	   $.post("ajax/Scc2/listSccb.do",{ aid:scc1value},function(data){  
					       var jsonObj = eval("(" + data + ")");  
					       cleaSec(scc2id);
					       var $option = $("<option></option>");    
					       $option.attr("value", "");    
					       $option.text("请选择");   			       
					       $("#"+scc2id).append($option);  
					       for (var i = 0; i < jsonObj.length; i++) {    
					            var $option = $("<option></option>");    
					            $option.attr("value", jsonObj[i].SccbCode);    
					            $option.text(jsonObj[i].SccbDes+"("+jsonObj[i].SccbCode+")");    
					            $("#"+scc2id).append($option);   
			            
			        		} 
				    $("#"+scc2id+" option[value='"+scc2value+"']").attr("selected", true);
			    }); 
 				};
 				  function sccthree(scc1value,scc2id,scc2value,scc3id,scc3value,scc4id){
        			if(scc1value!=""){
						
					}
			        else{
			        	 cleaSec(scc2id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc2id).append($option); 
					     return;
			        }
			      
				   	   $.post("ajax/Scc2/listSccb.do",{ aid:scc1value},function(data){  
						       var jsonObj = eval("(" + data + ")");  
						       cleaSec(scc2id);
						       var $option = $("<option></option>");    
						       $option.attr("value", "");    
						       $option.text("请选择");   			       
						       $("#"+scc2id).append($option);  
						       for (var i = 0; i < jsonObj.length; i++) {    
						            var $option = $("<option></option>");    
						            $option.attr("value", jsonObj[i].SccbCode);    
						            $option.text(jsonObj[i].SccbDes+"("+jsonObj[i].SccbCode+")");    
						            $("#"+scc2id).append($option);   
				            
				        		} 
					    $("#"+scc2id+" option[value='"+scc2value+"']").attr("selected", true);
				    }); 
 				};
 				function sccfour(scc1value,scc2id,scc2value,scc3id,scc3value,scc4id,scc4value){
        			if(scc1value!=""){
						
					}
			        else{
			        	 cleaSec(scc2id);
						 var $option = $("<option></option>");    
					     $option.attr("value", "");    
					     $option.text("请选择");   			       
					     $("#"+scc2id).append($option); 
					     return;
			        }
			      
				   	   $.post("ajax/Scc2/listSccb.do",{ aid:scc1value},function(data){  
						       var jsonObj = eval("(" + data + ")");  
						       cleaSec(scc2id);
						       var $option = $("<option></option>");    
						       $option.attr("value", "");    
						       $option.text("请选择");   			       
						       $("#"+scc2id).append($option);  
						       for (var i = 0; i < jsonObj.length; i++) {    
						            var $option = $("<option></option>");    
						            $option.attr("value", jsonObj[i].SccbCode);    
						            $option.text(jsonObj[i].SccbDes+"("+jsonObj[i].SccbCode+")");    
						            $("#"+scc2id).append($option);   
				            
				        		} 
					    $("#"+scc2id+" option[value='"+scc2value+"']").attr("selected", true);
				    }); 
 				};
      
        