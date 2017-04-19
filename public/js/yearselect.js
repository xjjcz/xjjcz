  function getyear(m_value,name,start,end) { 
			    var datatime=new Date();
		         var my_year=datatime.getFullYear();
				     	// $("#myear").clear();
				 var $option1 = $("<option></option>"); 
				 $option1.attr("value", "");    
				 $option1.text("全部");  
				 $("*[name='"+name+"']").append($option1);
				   
				    for(var i=start;i<end;i++){
					    var $option = $("<option></option>");    
				    $option.attr("value", my_year+i);    
				    $option.text(my_year+i);  
				     
				   $("*[name='"+name+"']").append($option); 
				   
				}
				
		}
  
    function updategetyear(m_value,name,start,end) { 
			    var datatime=new Date();
		         var my_year=datatime.getFullYear();
				     	// $("#myear").clear();	
				    for(var i=start;i<end;i++){
					    var $option = $("<option></option>");    
				    $option.attr("value", my_year+i);    
				    $option.text(my_year+i);  
				     
				   $("*[name='"+name+"']").append($option); 
				   
				}
				
		}