     
//验证是否为空
		var alertnew="你确定保存当前页面吗？当前页面未保存数据将丢失，新增页面将删除。";
		var alertold="你确定保存当前页面吗？当前页面未保存数据将丢失。";
		function funalert(name, content, witch) {

				var m_value = document.getElementById(name).value;
				if (m_value == '') {
					if (witch == 0) {
						m_content = "带星号必填，请填写“" + content + "”，点击确定强制离开，“" + content
								+ "”将被自动填充默认值";
						if (confirm(m_content)) {
							document.getElementById(name).value = 0;
							return 1;//自动填充
						} else {
							document.getElementById(name).focus();
							document.getElementById(name).style.border = "2px red solid";
							return 0;
						}
					} else {
						m_content = "带星号必填，请填写“" + content + "“";
						alert(m_content);
						document.getElementById(name).focus();
						document.getElementById(name).style.border = "2px red solid";
						return 0;
					}
			
				}
				return 2;//2表示数据验证有效，可以跳转
		}
		function checkall(witch,ids,contents) {
			//验证包括的填写的值是 
			for ( var i = 0; i < ids.length; i++) {
				var result = funalert(ids[i], contents[i], witch);
				//判断是否数据是否有效，如果无效返回无效处理数字
				if (result != 2) {
					return result;
					break;
				}
		
			}
			return 2;

}
//验证负责人输入的固定电话格式是否正确
      function checkpphone(x){
		  		 
		  		var pphone=document.getElementById(x).value;
		     	if(pphone!=''){
		     		
					var workPhoneExpression = /^(\d{3,4}\-)?[1-9]\d{6,7}$/;
					var workPhoneExp = new RegExp(workPhoneExpression);
					if (workPhoneExp.test(pphone)==true){
					  isWorkPhone1 = true;  
					}
					else{
					  alert("您输入的固定电话格式不正确，请重新输入！");
					  document.getElementById(x).focus();
					}
		     	}
}
        //***********************************验证四至经纬度是否存在相等值  YXY 20160520****************************//
        var Lat_Array = new Array();
        var Lon_Array = new Array();
        //初始化纬度数组
        for(var i=0;i<7;i++){
        		Lat_Array[i]=0;
        } 
        //初始化经度数组
         for(var j=0;j<7;j++){
        		Lon_Array[j]=0;
        	
        } 
        //判断一个数是不是小数
        function isNum(s) {
			 var regu = "^([0-9]*[.0-9])$"; // 小数测试
			 var re = new RegExp(regu);
			 if (s.search(re) != -1)
			  return true;
			 else
			  return false;
		}
        
        //验证输入当前输入的纬度是否合法，并且是否和已有的纬度相同
        function checklatfour1(x,index){
		  		var pphone=document.getElementById(x).value;
		  		//alert(pphone)
		     	if(pphone!=''){ 
		     		if(isNum(pphone)|| pphone.toString().split(".")[1].length<4 ){
		     			  alert("纬度必须准确到小数点后四位，请重新输入！");
		     			 document.getElementById(x).focus();
		     		}else{
		     			if (pphone>34.4167&&pphone<48.1667){
		     				 var flag=false;
					         for(var i=0;i<7;i++){
					        	 if(i==index){
					        		 
					        	 }else{
							    	if(pphone==Lat_Array[i]){
							    		flag=true;
							    		break;
							    	}
						    	}
						    }
						    if(flag==true){
						    	alert("您当前填写的纬度与已有的纬度相等，请重新填写！");
						    	document.getElementById(x).focus();
						    	
						    }else{
						    	
						    	Lat_Array[index]=pphone;
		  		
						    }
						}
						else{
							alert("您输入的纬度超出填写范围，请重新输入！");
						    document.getElementById(x).focus();						  
						}
		     		}
				//34.4167~48.1667
					
		     	}
		}
        
        //验证输入当前输入的经度是否合法，并且是否和已有的经度相同
        function checklonfour1(y,index){
		  		 
		  		var pphone=document.getElementById(y).value;
		  		//alert(pphone)
		  		
		  		
		     	if(pphone!=''){ 
		     		if(isNum(pphone)|| pphone.toString().split(".")[1].length<4 ){
		     			  alert("经度必须准确到小数点后四位，请重新输入！");
		     			 document.getElementById(y).focus();
		     		}else{
		     			if (pphone>73.6667&&pphone<96.3000){
		     				 var flag=false;
					         for(var j=0;j<7;j++){
					        	 if(j==index){
					        		 
					        	 }else{
							    	if(pphone==Lon_Array[j]){
							    		flag=true;
							    		break;
							    	}
						    	}
						    }
						    if(flag==true){
						    	alert("您当前填写的纬度与已有的纬度相等，请重新填写！");
						    	document.getElementById(y).focus();
						    	
						    }else{
						    	
						    	Lon_Array[index]=pphone;
		  		
						    }
						}
						else{
							alert("您输入的纬度超出填写范围，请重新输入！");
						    document.getElementById(y).focus();						  
						}
		     		}
				//73.6667~96.3000
					
		     	}
		}
        
        //验证1-4拐点经纬度是否相同 glh -多添加了一个参数，重写了一个方法
        
        //验证输入当前输入的纬度是否合法，并且是否和已有的纬度相同
        function checklatfour(x,index,num){
		  		var pphone=document.getElementById(x).value;
		  		//alert(pphone)
		     	if(pphone!=''){ 
		     		if(isNum(pphone)|| pphone.toString().split(".")[1].length<4 ){
		     			  alert("纬度必须准确到小数点后四位，请重新输入！");
		     			 document.getElementById(x).focus();
		     		}else{
		     			if (pphone>34.4167&&pphone<48.1667){
		     				 var flag=false;
					         for(var i=0;i<num;i++){
					        	 if(i==index){
					        		 
					        	 }else{
							    	if(pphone==Lat_Array[i]){
							    		flag=true;
							    		break;
							    	}
						    	}
						    }
						    if(flag==true){
						    	alert("您当前填写的纬度与已有的纬度相等，请重新填写！");
						    	document.getElementById(x).focus();
						    	
						    }else{
						    	
						    	Lat_Array[index]=pphone;
		  		
						    }
						}
						else{
							alert("您输入的纬度超出填写范围，请重新输入！");
						    document.getElementById(x).focus();						  
						}
		     		}
				//34.4167~48.1667
					
		     	}
		}
        
        //验证输入当前输入的经度是否合法，并且是否和已有的经度相同
        function checklonfour(y,index,num){
		  		 
		  		var pphone=document.getElementById(y).value;
		  		//alert(pphone)
		  		
		  		
		     	if(pphone!=''){ 
		     		if(isNum(pphone)|| pphone.toString().split(".")[1].length<4 ){
		     			  alert("经度必须准确到小数点后四位，请重新输入！");
		     			 document.getElementById(y).focus();
		     		}else{
		     			if (pphone>73.6667&&pphone<96.3000){
		     				 var flag=false;
					         for(var j=0;j<num;j++){
					        	 if(j==index){
					        		 
					        	 }else{
							    	if(pphone==Lon_Array[j]){
							    		flag=true;
							    		break;
							    	}
						    	}
						    }
						    if(flag==true){
						    	alert("您当前填写的纬度与已有的纬度相等，请重新填写！");
						    	document.getElementById(y).focus();
						    	
						    }else{
						    	
						    	Lon_Array[index]=pphone;
		  		
						    }
						}
						else{
							alert("您输入的纬度超出填写范围，请重新输入！");
						    document.getElementById(y).focus();						  
						}
		     		}
				//73.6667~96.3000
					
		     	}
		}
        
        
       //***********************************验证四至经纬度是否存在相等值****************************//  
        
        
        
        
 		//验证纬度范围
        function checklat(x){
		  		 
		  		var pphone=document.getElementById(x).value;
		  		
		     	if(pphone!=''){ 
		     		if(isNum(pphone)|| pphone.toString().split(".")[1].length<4){
		     			  alert("纬度必须准确到小数点后四位，请重新输入！");
		     			 document.getElementById(x).focus();
		     		}else{
		     			if (pphone>34.4167&&pphone<48.1667){					         
						}
						else{
							alert("您输入的纬度超出填写范围，请重新输入！");
						    document.getElementById(x).focus();						  
						}
		     		}
				//34.4167~48.1667
					
		     	}
			}
		
		//验证经度度范围73.6667~96.3000
		function checklon(x){
		  		var pphone=document.getElementById(x).value;
		  		
		  		
		     	if(pphone!=''){
		     		if(isNum(pphone)|| pphone.toString().split(".")[1].length<4){
		     			  alert("经度必须准确到小数点后四位，请重新输入！");
		     			 document.getElementById(x).focus();
		     		}else{
		     			if (pphone>73.6667&&pphone<96.3000){
					  
						}
						else{
						  alert("您输入的经度超出填写范围，请重新输入！");
						 
						}
		     		}
		  			
				//73.6667~96.3000
					
		     	}
}
		  	 //验证负责人输入的移动电话格式是否正确
		  	 function checkpmobile(y){
		  		 var pmobile=document.getElementById(y).value;
		  		  if(pmobile!=''){
		  			var phoneNumberExpression = /^(\+\d{2,3}\-)?\d{11}$/;
					var phoneNumberExp = new RegExp(phoneNumberExpression);
					if (phoneNumberExp.test(pmobile)==true){
					  //isPhoneNumber = true;
					}
					else{
					   alert("您输入的移动电话格式不正确，请重新输入！");
					   document.getElementById(y).focus();
					}
		  		 } 
		  	 }	
		  	 //验证负责人输入的电子邮箱格式是否正确
		  	 function checkpemail(z){
		  		var pemail=document.getElementById(z).value;
		  		 if(pemail!=''){
		  			var emailExpression = /^\w{3,}@\w+(\.\w+)+$/;
					var emailExp = new RegExp(emailExpression);
					if (emailExp.test(pemail)==true){
					  //isEmail = true;
					}
					else{
					  alert("抱歉，您输入的电子邮箱格式有误，请重新输入！");
					  document.getElementById(z).focus();
					}
		  		 }
		  	 }
		  	 //验证填表人输入的固定电话格式是否正确
		  	 function checkfphone(){
		  		 var fphone=document.getElementById("preparerPhone").value;
		  		 if(fphone!=''){
		  			var workPhoneExpression1 = /^(\d{3,4}\-)?[1-9]\d{6,7}$/;
					var workPhoneExp1 = new RegExp(workPhoneExpression1);
					if (workPhoneExp1.test(fphone)==true){
					  //isWorkPhone2 = true;  
					}
					else{
					  alert("您输入的固定电话格式不正确，请重新输入！");
					  document.getElementById("preparerPhone").focus();
					}
		  		 }
		  	 }
		  	 //验证填表人输入的移动电话格式是否正确
		  	 function checkfmobile(){
		  		 var fmobile=document.getElementById("preparerMobile").value;
		  		 if(fmobile!=''){
		  			 var phoneNumberExpression1 = /^(\+\d{2,3}\-)?\d{11}$/;
						var phoneNumberExp1 = new RegExp(phoneNumberExpression1);
						if (phoneNumberExp1.test(fmobile)==true){
						  //isPhoneNumber = true;
						}
						else{
						   alert("您输入的移动电话格式不正确，请重新输入！");
						   document.getElementById("preparerMobile").focus();
						}
		  		 }
		  	 }
		  	 //验证填表人输入的电子邮箱格式是否正确
        function checkfemail(){
		  		 var femail=document.getElementById("preparerEmail").value;
		  		 if(femail!=''){
		  			var emailExpression1 = /^\w{3,}@\w+(\.\w+)+$/;
					var emailExp2 = new RegExp(emailExpression1);
					if (emailExp2.test(femail)==true){
					  //isEmail = true;
					}
					else{
					  alert("抱歉，您输入的电子邮箱格式有误，请重新输入！");
					  document.getElementById("preparerEmail").focus();
					}
		  		 }
		  	 }
        function checkRate(input)
		{
		     var re = /^[0-9]+.?[0-9]*$/;   //判断字符串是否为数字     //判断正整数 /^[1-9]+[0-9]*]*$/  
		     var nubmer = document.getElementById(input).value;
		    
		     if (!re.test(nubmer))
		    {
		        alert("请输入数字");
		        document.getElementById(input).value = "";
		        return false;
		     }
		}
        function TestLen(obj,len){
        if(document.getElementById(obj).value.length>len){
            alert('最大长度为'+len+'个字符');
           document.getElementById(obj).value = "";
           return false;
            }
         }
		