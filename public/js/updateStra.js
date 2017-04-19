//添加存储与运输源信息   glh 2015.11.2
function updateStra() {
	//使用ajax同步 不适用异步	
	$.ajaxSetup( {
		async : false
	});
	var old_aid=document.getElementById("old_aid").value;
	alert("执行updateStranOilStorageNow--js文件--old_aid"+old_aid);
	var year = document.getElementById("year2").value;
	var countyId = document.getElementById("countyId").value;
	var oilname = document.getElementById("oilname").value;//加油站名称
	var address = document.getElementById("address").value;
	var longitude = document.getElementById("longitude").value;
	var latitude = document.getElementById("latitude").value;
	var os_type1 = document.getElementById("os_type1").value;//储罐是固定还是浮顶
	alert("罐体类型："+os_type1);
	if (os_type1 == "sampletable1") {
		os_type1 = "固定罐";//数据库中用1表示固顶罐，2表示浮顶罐
	} else if(os_type1 == "sampletable2"){
		os_type1 = "浮顶罐";
	}
	if (year == "" || countyId == "") {
		alert("年份和区县不能为空！");
	}
	if(os_type1=="固定罐"){//固定罐
	//获取固顶罐的数据信息
	var osname = document.getElementById("osname").value;//储罐名称
	var os_d = document.getElementById("os_d").value;
	var os_hsl = document.getElementById("os_hsl").value;
	var os_tax = document.getElementById("os_tax").value;
	var os_tan = document.getElementById("os_tan").value;
	var os_tla = document.getElementById("os_tla").value;
	var os_aa = document.getElementById("os_aa").value;
	var os_type2 = document.getElementById("os_type2").value;//储罐是固定还是浮顶
	var os_type3 = document.getElementById("os_type3").value;//储罐是固定还是浮顶
	
	//立式罐，卧式罐，内浮顶，外浮顶
	if (os_type2 == "type21") {
		os_type2 = "立式罐";
	} else if (os_type2 == "type22") {
		os_type2 = "卧式罐";
	} 
	//拱顶罐，锥顶罐
	if (os_type3 == "type31") {
		os_type3 = "锥顶罐";
	} else if(os_type3=="type32"){
		os_type3 = "拱顶罐";
	}
	var os_srRr = document.getElementById("os_SrRr").value;//罐斜率/半径
	var os_materialName = document.getElementById("os_materialName").value;
	var os_casCode = document.getElementById("os_casCode").value;
	var os_materialDensity = document.getElementById("os_materialDensity").value;
	var os_mv = document.getElementById("os_mv").value;
	var os_pva = document.getElementById("os_pva").value;
	var os_hl = document.getElementById("os_hl2").value;//必填项
	var os_rvp = document.getElementById("os_rvp").value;
	var os_s1 = document.getElementById("os_s1").value;
	var os_s2 = document.getElementById("os_s2").value;
	var os_a = document.getElementById("os_a").value;
	var os_b = document.getElementById("os_b").value;
	var os_c = document.getElementById("os_c").value;
	var os_pi = document.getElementById("os_pi").value;
	var os_pa = document.getElementById("os_pa").value;
	var os_pbp = document.getElementById("os_pbp").value;
	var os_n = document.getElementById("os_n").value;
	var os_q = document.getElementById("os_q").value;
	var os_c1 = document.getElementById("os_c1").value;
	var os_c2 = document.getElementById("os_c2").value;
	var os_qi = document.getElementById("os_qi").value;
	var os_ti = document.getElementById("os_ti").value;
	alert("获取到的id号："+old_aid);
		$.post("ajax/StranOrganicChemistry/updateStra.do", {
			osId:old_aid,
			year : year,
			countyid : countyId,
			oilname : oilname,
			address : address,
			longitude : longitude,
			latitude : latitude,
			
			type1 : os_type1,
			type2:os_type2,
			type3:os_type3,
			
			name:osname,
			d:os_d,
			l:os_hsl,
			hs:os_hsl,
			tax:os_tax, 
			tan:os_tan,
			tla:os_tla, 
			aa:os_aa,
			sr:os_srRr ,
	 		rr:os_srRr,
	 		
	 		materialName:os_materialName ,
	 		casCode:os_casCode ,
			materialDensity: os_materialDensity ,
			mv: os_mv ,
			pva: os_pva, 
			hl: os_hl,
			
			rvp:os_rvp,
			s1:os_s1 ,
	 		s2:os_s2 ,
	 		a:os_a ,
	 		b:os_b ,
	 		c:os_c ,
	 		
			pi: os_pi,
			pa:os_pa ,
			pbp:os_pbp, 
	 		n:os_n,
	 		q:os_q ,
	 		
	 		c1:os_c1,
	 		c2:os_c2 ,
	 		qi:os_qi,
	 		ti:os_ti,
		}, function(data) {
			var json = eval("(" + data + ")");
			var id = json.id;
			if (id == 1) {
				alert("存储与运输保存成功！");
				document.getElementById("addTips").style.display = 'none';
			} else if (id == -2) {
				alert("没有权限！");
			} else if (id == -1) {
				alert("没有保存成功！");
			}
		});
	}
	else if(os_type1=="浮顶罐"){
		alert("浮顶罐");
		//获取浮顶罐的信息,相同信息 glh 2015.11.6
		var osname = document.getElementById("ossname").value;//储罐名称
		var os_d = document.getElementById("oss_d").value;
		var os_hsl = document.getElementById("oss_hsl").value;
		var os_type2 = document.getElementById("oss_type2").value;//储罐是固定还是浮顶
		var os_type3 = document.getElementById("oss_type3").value;//储罐是固定还是浮顶
		
		if (os_type2 == "type23") {
			os_type2 = "内浮顶罐";
		} else {
			os_type2 = "外浮顶罐";
		}
		//拱顶罐，锥顶罐
		if (os_type3 == "type31") {
			os_type3 = "锥顶罐";
		} else if(os_type3=="type32") {
			os_type3 = "拱顶罐";
		}
	
		alert("储罐类型选择完毕");
		var os_kab_style = document.getElementById("os_kab_style").value;//焊接和铆接
		var os_kab = document.getElementById("os_kab").value;//一级分类,机械式鞋形密封
		var os_krakrb = document.getElementById("os_krakrb").value;//二级分类,只有一级，边缘靴板
		var kra;
		var kbr;
		var nn;	

		
	if(os_kab_style=="os_kab_select1"){//焊接
		os_kab_style=1.0;
		if(os_kab=="os_kab1"){
				if(os_krakrb=="os_krakrb1"){//机械式
				//焊接-机械式-只有一级
				kra=5.8;
				krb=0.3;
				nn=2.1;
			}else if(os_krakrb=="os_krakrb2"){
				//焊接-机械式-边缘靴板
				kra=1.6;
				krb=0.3;
				nn=1.6;
			}else if(os_krakrb=="os_krakrb3"){
				//焊接-机械式-边缘刮板
				kra=0.6;
				krb=0.4;
				nn=1.0;
			}
		}else if(os_kab=="os_kab2"){//液体镶嵌式
				if(os_krakrb=="os_krakrb1"){//二级分类
				//焊接-液体镶嵌式-只有一级
				kra=1.6;
				krb=0.3;
				nn=1.5;
			}else if(os_krakrb=="os_krakrb2"){
				//焊接-液体镶嵌式-挡雨板
				kra=0.7;
				krb=0.3;
				nn=1.2;
			}else if(os_krakrb=="os_krakrb3"){
				//焊接-液体镶嵌式-边缘刮板
				kra=0.3;
				krb=0.6;
				nn=0.3;
			}
		}else if(os_kab=="os_kab3"){ //qitixianngqiann
				if(os_krakrb=="os_krakrb1"){//二级分类--气体镶嵌式
				//焊接-气体镶嵌式-只有一级
				kra=6.7;
				krb=0.2;
				nn=3.0;
			}else if(os_krakrb=="os_krakrb2"){
				//焊接-气体镶嵌式-挡雨板
				kra=3.3;
				krb=0.1;
				nn=3.0;
			}else if(os_krakrb=="os_krakrb3"){
				//焊接-气体镶嵌式-边缘刮板
				kra=2.2;
				krb=0.003;
				nn=4.3;
			}
	}
	}else if(os_kab_style=="os_kab_select2"){//铆接
		os_kab_style=1.0;
		if(os_krakrb=="os_krakrb1"){//二级分类
			//铆接-机械式-只有一级
			kra=10.8;
			krb=0.4;
			nn=2.0;
		}else if(os_krakrb=="os_krakrb2"){
			//铆接-机械式-边缘靴板
			kra=9.2;
			krb=0.2;
			nn=1.9;
		}else if(os_krakrb=="os_krakrb3"){
			//铆接-机械式-边缘刮板
			kra=1.1;
			krb=0.3;
			nn=1.5;
		}
	}
	alert("焊接铆接选择完毕");
		var os_v = document.getElementById("os_v").value;
		var os_tla = document.getElementById("oss_tla").value;	
		var os_pva = document.getElementById("oss_pva").value;
	
		var os_materialName = document.getElementById("oss_materialName").value;
		var os_casCode = document.getElementById("oss_casCode").value;
		var os_materialDensity = document.getElementById("oss_materialDensity").value;
		var os_mv = document.getElementById("oss_mv").value;
		var os_rvp = document.getElementById("oss_rvp").value;
		var os_s1 = document.getElementById("oss_s1").value;
		var os_s2 = document.getElementById("oss_s2").value;
		var os_a = document.getElementById("oss_a").value;
		var os_b = document.getElementById("oss_b").value;
		var os_c = document.getElementById("oss_c").value;
	
		var os_css = document.getElementById("os_cs").value;//轻锈、中锈、重锈
		var os_cs;
		if(os_css=="os_cs1"){
			os_cs==0.0015;//以汽油的为例
		}else if(os_css=="os_cs2"){
				os_cs==0.0075;//以汽油的为例
		}else if(os_css=="os_cs3"){
			os_cs==0.15;//以汽油的为例
		}
		alert("Cs选择完毕");
		var os_pa = document.getElementById("oss_pa").value;
		var os_nc = document.getElementById("os_nc").value;//固定支撑柱数量
		var os_nf1 = document.getElementById("os_nf1").value;//数量
		var os_kfab1 = document.getElementById("os_kfab1").value;//入孔
		var kfa1;
		var kfb1;
		var m1;
		if(os_kfab1=="1"){
			kfa1=1.6;
			kfb1=0;
			m1=0;
		}else if(os_kfab1=="2"){
			kfa1=36;
			kfb1=5.9;
			m1=1.2;
		}else {
			kfa1=31;
			kfb1=5.2;
			m1=1.3;
		}
		var os_nf2 = document.getElementById("os_nf2").value;//数量
		var os_kfab2 = document.getElementById("os_kfab2").value;//计量井
		var kfa2;
		var kfb2;
		var m2;
		if(os_kfab2=="1"){
			kfa2=2.8;
			kfb2=0;
			m2=0;
		}else if(os_kfab2=="2"){
			kfa2=14;
			kfb2=5.4;
			m2=1.1;
		}else {
			kfa2=4.3;
			kfb2=17
			m2=0.38;
		}
		var os_nf3 = document.getElementById("os_nf3").value;//数量
		var os_kfab3 = document.getElementById("os_kfab3").value;//两个活动因子
		var kfa3;
		var kfb3;
		var	m3;
		if(os_kfab3=="1"){
			kfa3=33;
			kfb3=0
			m3=0;
		}else if(os_kfab3=="2"){
			kfa3=51;
			kfb3=0
			m3=0;
		}else if(os_kfab3=="3"){
			kfa3=25;
			kfb3=0
			m3=0;
		}else{
			kfa3=10;
			kfb3=0;
			m3=0;
		}
		
		var os_nf4 = document.getElementById("os_nf4").value;//数量
		var os_kfab4 = document.getElementById("os_kfab4").value;//两个活动因子
		var kfa4;
		var kfb4;
		var m4;
		if(os_kfab4=="1"){
			kfa4=0.47;
			kfb4=0.02;
			m4=0.97;
		}else if(os_kfab4=="2"){
			kfa4=2.3;
			kfb4=0;
			m4=0;
		}else {
			kfa4=12;
			kfb4=0;
			m4=0;
		}
		var os_nf5 = document.getElementById("os_nf5").value;//数量
		var os_kfab5 = document.getElementById("os_kfab5").value;//有槽导杆和取样井
		var kfa5;
		var kfb5;
		var m5;
		if(os_kfab5=="1" ||os_kfab5=="2" ){
			kfa5=43;
			kfb5=270;
			m5=1.4;
		}else if(os_kfab5=="3"||os_kfab5=="4"){
			kfa5=31;
			kfb5=36;
			m5=2.0;
		}else if(os_kfab5=="5"){
			kfa5=41;
			kfb5=48;
			m5=1.4;
		}else if(os_kfab5=="6"){
			kfa5=11;
			kfb5=46;
			m5=1.4;
		}else if(os_kfab5=="7"){
			kfa5=8.3;
			kfb5=4.4;
			m5=1.6;
		}else if(os_kfab5=="8"){
			kfa5=21;
			kfb5=7.9;
			m5=1.8;
		}else {
			kfa5=11;
			kfb5=9.9;
			m5=0.89;
		}
		var os_nf6 = document.getElementById("os_nf6").value;//数量
		var os_kfab6 = document.getElementById("os_kfab6").value;//无槽导杆和取样井
		var kfa6;
		var kfb6;
		var m6;
		if(os_kfab6=="1"){
			kfa6=31;
			kfb6=150;
			m6=1.4;
		}else if(os_kfab6=="2"){
			kfa6=25;
			kfb6=2.2;
			m6=2.1;
		}else if(os_kfab6=="3"){
			kfa6=25;
			kfb6=13;
			m6=2.2;
		}else if(os_kfab6=="4"){
			kfa6=14;
			kfb6=3.7;
			m6=0.78;
		}else {
			kfa6=8.6;
			kfb6=12;
			m6=0.81;
		}
		
		var os_nf7 = document.getElementById("os_nf7").value;//数量
		var os_kfab7 = document.getElementById("os_kfab7").value;//呼吸阀
		var kfa7;
		var kfb7;
		var m7;
		if(os_kfab7=="1"){
			kfa7=7.8;
			kfb7=0.01;
			m7=4.0;
		}else {
			kfa7=6.2;
			kfb7=1.2;
			m7=0.94;
		}
		var os_nf8 = document.getElementById("os_nf8").value;//数量
		var os_kfab8 = document.getElementById("os_kfab8").value;//两个活动因子
		var kfa8;
		var kfb8;
		var m8;
		if(os_kfab8=="1" ){
			kfa8=1.3;
			kfb8=0.08;
			m8=0.65;
		}else if(os_kfab8=="2" ){
			kfa8=2.0;
			kfb8=0.37;
			m8=0.91;
		}
		else if(os_kfab8=="3"){
			kfa8=0.53;
			kfb8=0.11;
			m8=0.13;
		}
		else if(os_kfab8=="4"){
			kfa8=0.82;
			kfb8=0.53;
			m8=0.14;
		}else if(os_kfab8=="5"){
			kfa8=0.82;
			kfb8=0.53;
			m8=0.14;
		}else if(os_kfab8=="6"){
			kfa8=1.2;
			kfb8=0.14;
			m8=0.65;
		}else if(os_kfab8=="7"){
			kfa8=0.49;
			kfb8=0.16;
			m8=0.14;
		}else if(os_kfab8=="8"){
			kfa8=0;
			kfb8=0;
			m8=0;
		}
		var os_nf9 = document.getElementById("os_nf9").value;//数量
		var os_kfab9 = document.getElementById("os_kfab9" + "").value;//
		var kfa9;
		var kfb9;
		var m9;
		 if(os_kfab9=="1"){
			kfa9=0.71;
			kfb9=0.1;
			m9=1.0;
		}else if(os_kfab8=="2"){
			kfa9=0.68;
			kfb9=1.8;
			m9=1.0;
		}
		
		var os_nf10 = document.getElementById("os_nf10").value;//数量
		var os_kfab10 = document.getElementById("os_kfab10").value;//两个活动因子
		var kfa10;
		var kfb10;
		var m10;
		 if(os_kfab10=="1"){
			kfa10=98;
			kfb10=0;
			m10=0;
		}else if(os_kfab8=="2"){
			kfa10=56;
			kfb10=0;
			m10=0;
		}
		var os_nf11 = document.getElementById("os_nf11").value;//数量
		var kfa11=1.2;
		var kfb11=0;
		var m11=0;
		alert("kfab选择完毕");
		
		var sd=document.getElementById("os_sd").value;
		if(sd=="1"){
			sd=4.8;
		}else{
			sd=0.8;
		}
		var os_n = document.getElementById("oss_n").value;
		var os_q = document.getElementById("oss_q").value;
		var os_c1 = document.getElementById("oss_c1").value;
		var os_c2 = document.getElementById("oss_c2").value;
		var os_qi = document.getElementById("oss_qi").value;
		var os_ti = document.getElementById("oss_ti").value;
		$.post("ajax/StranOrganicChemistry/updateStra.do", {
			osId:old_aid,
			year : year,
			countyid : countyId,
			oilname : oilname,
			address : address,
			longitude : longitude,
			latitude : latitude,
			
			type1 : os_type1,
			type2:os_type2,
			type3:os_type3,
			
			name:osname,
			d:os_d,
			l:os_hsl,
			hs:os_hsl,
			kabStyle:os_kab_style,
		 	kra:kra,
		  	krb:krb,
		  	nn:nn,
		  	
		  	v:os_v ,
		  	tla:os_tla, 
		  	pva: os_pva, 
		  	materialName:os_materialName ,
	 		casCode:os_casCode ,
			materialDensity: os_materialDensity ,
			mv: os_mv ,
			
			rvp:os_rvp,
			s1:os_s1 ,
	 		s2:os_s2 ,
	 		a:os_a ,
	 		b:os_b ,
	 		c:os_c ,
	 		
			cs:os_cs,
			pa:os_pa ,
	 		nc:os_nc ,
	 		
	 		nf1:os_nf1 ,
			kfa1:kfa1,
			kfb1:kfb1,
			m1:m1,
		 	nf2:os_nf2,
			kfa2:kfa2, 
			kfb2:kfb2,
			m2:m2,
			
	 		nf3:os_nf3 ,
		 	kfa3:kfa3,
			kfb3:kfb3,
			m3:m3,
		 	nf4:os_nf4 ,
		 	kfa4:kfa4,
			kfb4:kfb4,
			m4:m4,
	 		nf5:os_nf5,
		 	kfa5:kfa5,
			kfb5:kfb5,
			m5:m5,
			nf6:os_nf6,
		 	kfa6:kfa6,
			kfb6:kfb6,
			m6:m6,
	 		nf7:os_nf7 ,
		 	kfa7:kfa7,
			kfb7:kfb7,
			m7:m7,
	 		
			nf8:os_nf8 ,
		 	kfa8:kfa8,
			kfb8:kfb8,
			m8:m8,
	 		nf9:os_nf9 ,
		 	kfa9:kfa9,
			kfb9:kfb9,
			m9:m9,
	 		nf10:os_nf10 ,
		 	kfa10:kfa10,
			kfb10:kfb10,
			m10:m10,
	 		nf11:os_nf11,
		 	kfa11:kfa11,
			kfb11:kfb11,
			m11:m11,
			
			sd:sd,
			n:os_n,
	 		q:os_q ,
	 		
		    
		}, function(data) {
			var json = eval("(" + data + ")");
			var id = json.id;
			if (id == 1) {
				alert("有机化学品存储源保存成功！");
				document.getElementById("addTips").style.display = 'none';
			} else if (id == -2) {
				alert("没有权限！");
			} else if (id == -1) {
				alert("没有保存成功！");
			}

		});
	}



	
}