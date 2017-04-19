function allowall(m_value) {
	if (m_value == 3) {
		document.getElementById("re-bg").style.display = "block";
	} else if (m_value == 2) {
		var ret = confirm("你确认通过审核吗?");
		if (ret == true) {
			$.post("ajax/Audit/allow.do", {isalow:1
				}, function(data) {
						var json = eval("(" + data + ")");
						if (json.status == 1) {
						   document.getElementById("re-bg").style.display = "none";
		
						} else {
					}
		});
		}
	}

}

function reCancel() {
	document.getElementById("re-bg").style.display = "none";
}
function post_reply(){
		var ret = confirm("你确认不通过审核吗?");
		var noname=0;
		var connect=0;
		var allower=5;
		if($("#noname").prop("checked") == true) {
               noname = 1;
        }
		if($("#connect").prop("checked") == true) {
               connect = 1;
        }
        m_value=document.getElementById("ueditor").value;
		if (ret == true) {
			$.post("ajax/Audit/allow.do", {noname:noname,connect:connect,suggest:m_value,isalow:allower
				}, function(data) {
						var json = eval("(" + data + ")");
						if (json.status == 1) {
								document.getElementById("re-bg").style.display = "none";
						} else {
						
		
						
					}
				});
			
		}else{
		
		}
}