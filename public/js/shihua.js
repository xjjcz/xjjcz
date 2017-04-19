			function isneed(id) {
			 
			var m_value = document.getElementById(id).value;
			 
			if (m_value == '') {
						document.getElementById(id).focus();
						document.getElementById(id).style.border = "1px red solid";
						alert("带红色星号为必填项！");
						return 0;
					 }
			return 1;
			}
			
			function isNull(name,id){
				if($('#'+id).val()==''){
					document.getElementById(id).focus();
					document.getElementById(id).style.border = "1px red solid";
					alert(name+"不能为空!");
					return 0;
				}
			}
			function isNum(name,id,value){
				if(isNaN(value)){
					 document.getElementById(id).focus();
					 document.getElementById(id).style.border = "1px red solid";
			         alert(name+"必须输入数字！");
			         return;
			     }
			}