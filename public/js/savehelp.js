function addsaveinfo(page, target) {
	
	var m_alert = 0;
    
	$.post("ajax/ExhaustTemp/getinfo.do", {
		target : target
	}, function(data) {
		var json = eval("(" + data + ")");
		//alert(json.result);

			saveinfo(page, target, 'all', json.result);

		});

}
function checkvalue() {
	return false;
}
function checkvalue(a) {
	return 2;
}