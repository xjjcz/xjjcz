//增加SCC
function addSCC(){
	//使用ajax同步 不适用异步	
	 $.ajaxSetup({ 
    		async : false 
		});  
		
		
	//**********标志位及id信息*****************//
     var scc1flag=true;
    var scc2flag=true;
    var scc3flag=true;
    var scc4flag=true;
	 var monthid;
    var monthsuccess=false;
    var weekid;
    var weeksuccess=false;
    var dayid;
    var daysuccess=false;
    var vocid;
    var vocsuccess=false;
    var noxid;
    var noxsuccess=false;
    var pm25id;
    var pm25success=false;
		
	//**********基础信息*****************//
	var scc,scc1,scc2,scc3,scc4,epascc;
	//获取一级SCC
	var scc1_1=document.getElementById("old_scc_1").value;
	var scc1_2=document.getElementById("number_1").value;
	var scc1val=document.getElementById("describe_1").value;
	if(scc1_1 != "" && scc1_2==""){
		    scc1 = scc1_1;		    
	}		
	else if(scc1_2 != "" && scc1_1==""){
		scc1 = scc1_2;
	}else if(scc1_2 != "" && scc1_1!="")
	{
		scc1=scc1_2;
	}else{
		scc1flag=false;
		alert("一级SCC不能为空！");
	}
	if(scc1!=""){
		//alert(scc1)
		$.post("ajax/Scc1/checkScc1.do",{scc1:scc1,description:scc1val},function(data){ 		                                        	         
                        });
	}
	if(scc1flag){
		var scc2_1=document.getElementById("old_scc_2").value;
		var scc2_2=document.getElementById("number_2").value;
		var scc2val=document.getElementById("describe_2").value;
		if(scc2_1 != "" && scc2_2==""){
			    scc2 = scc2_1;		    
		}		
		else if(scc2_2 != "" && scc2_1==""){
			scc2 = scc2_2;
		}else if(scc2_2 != "" && scc2_1!="")
		{
			scc2=scc2_2;
		}else{
			scc2flag=false;
			alert("二级SCC不能为空！");
		}
		if(scc2!=""){
			//alert(scc1)
			$.post("ajax/Scc2/checkScc2.do",{scc1:scc1,scc2:scc2,description:scc2val},function(data){ 		                                        	         
	                        });
		}
		if(scc2flag){
			var scc3_1=document.getElementById("old_scc_3").value;
			var scc3_2=document.getElementById("number_3").value;
			var scc3val=document.getElementById("describe_3").value;
			if(scc1!="" && scc2!="" && scc3_1 != "" && scc3_2==""){
				    scc3 = scc3_1;		    
			}		
			else if(scc1!="" && scc2!="" && scc3_2 != "" && scc3_1==""){
				scc3 = scc3_2;
			}else if(scc1!="" && scc2!="" && scc3_2 != "" && scc3_1!="")
			{
				scc3=scc3_2;
			}else{
				scc3flag=false;
				alert("三级SCC不能为空！");
			}
			if(scc3!=""){
				//alert(scc1)
				$.post("ajax/Scc3/checkScc3.do",{scc1:scc1,scc2:scc2,scc3:scc3,description:scc3val},function(data){ 		                                        	         
		                        });
			}
			if(scc3flag){
				var scc4_1=document.getElementById("old_scc_4").value;
				var scc4_2=document.getElementById("number_4").value;
				var scc4val=document.getElementById("describe_4").value;
				if(scc1!="" && scc2!="" && scc3!="" && scc4_1 != "" && scc4_2==""){
					    scc4 = scc4_1;		    
				}		
				else if(scc1!="" && scc2!="" && scc3!="" && scc4_2 != "" && scc4_1==""){
					scc4 = scc4_2;
				}else if(scc1!="" && scc2!="" && scc3!="" && scc4_2 != "" && scc4_1!="")
				{
					scc4=scc4_2;
				}else{
					scc4flag=false;
					alert("四级SCC不能为空！");
				}
				if(scc4!=""){
					//alert(scc1)
					$.post("ajax/Scc4/checkScc4.do",{scc1:scc1,scc2:scc2,scc3:scc3,scc4:scc4,description:scc4val},function(data){ 		                                        	         
			                        });
				}
				if(scc4flag){
					scc=scc1+scc2+scc3+scc4;
	epascc=document.getElementById("epaScc").value;
	
	
	
	//**********月分配信息*****************//
	var january=document.getElementById("january").value;
	
	var february=document.getElementById("february").value;
	var march=document.getElementById("march").value;
	var april=document.getElementById("april").value;
	var may=document.getElementById("may").value;
	var june=document.getElementById("june").value;
	var july=document.getElementById("july").value;
	var august=document.getElementById("august").value;
	var september=document.getElementById("september").value;
	var october=document.getElementById("october").value;
	var november=document.getElementById("november").value;
	var december=document.getElementById("december").value;
	var summonth=0;
	summonth=Number(january)+Number(february)+Number(march)+Number(april)+Number(may)+Number(june)+Number(july)+Number(august)+Number(september)+Number(october)+Number(november)+Number(december);
	//alert(january+february)
	//alert()
	//alert(january+february+march+april+may+june+july+august+september+october+november+december)
	//**********将月分配信息加入数据库*****************//
	  /* 
	  * @param {Object} data
	  */
	if(january=="" || february=="" || march=="" || april=="" || may=="" || june=="" || july=="" || august=="" || september=="" || october=="" || november=="" || december==""){
		
		document.getElementById("addTips").style.display='block';
		document.getElementById("addTips").innerHTML = "月活动水平不允许为空！";
	}else{
		//alert(summonth)
		$.post("ajax/ActivityM/addMonth.do",{january:january,february:february,march:march,april:april,may:may,june:june,
		 july:july,august:august,september:september,october:october,november:november,december:december,totalMonth:summonth},
		function(data){    			 			    	
			    		var json = eval("(" + data + ")");  
			var flag = json.sid;
			
							   if(flag==1){	
								    
									monthsuccess=true;
									document.getElementById("addTips").style.display='none';
									monthid=json.nk_monthid;                                 								
								}
								else if(flag == -2){
									alert("没有权限！");
								}
								else if(flag == -1){
									alert("月活动水平添加失败,请重新添加！");
								}
			    	});
	}
	if(monthsuccess){
		//**********周分配信息*****************//
		var monday=document.getElementById("monday").value;
		var tuesday=document.getElementById("tuesday").value;
		var wednesday=document.getElementById("wednesday").value;
		var thursday=document.getElementById("thursday").value;
		var friday=document.getElementById("friday").value;
		var saturday=document.getElementById("saturday").value;
		var sunday=document.getElementById("sunday").value;	
		var sumweek=Number(monday)+Number(tuesday)+Number(wednesday)+Number(thursday)+Number(friday)+Number(saturday)+Number(sunday);
		if(monday=="" || tuesday=="" || wednesday=="" || thursday=="" || friday=="" || saturday=="" || sunday==""){
			document.getElementById("addTips").style.display='block';
			document.getElementById("addTips").innerHTML = "周活动水平不允许为空！";
		}else{
			//alert(sumweek)
			 $.post("ajax/ActivityW/addWeek.do",{monday:monday,tuesday:tuesday,wednesday:wednesday,thursday:thursday,friday:friday,
				saturday:saturday,sunday:sunday,totalWeek:sumweek },function(data){    
				var json = eval("(" + data + ")");  
				var flag = json.sid;
				
								   if(flag==1){	
									    
										weeksuccess=true;
										document.getElementById("addTips").style.display='none';
										weekid=json.nk_weekid;   
										//alert(weekid);								
										}
									else if(flag == -2){
										alert("没有权限！");
									}
									else if(flag == -1){
										alert("周活动水平添加失败，请重新添加！");
									}
								   
			
		        });
		}
	}
	if(monthsuccess && weeksuccess){
		//**********日分配信息*****************//
		var amOne=document.getElementById("amOne").value;
		var amTwo=document.getElementById("amTwo").value;
		var amThree=document.getElementById("amThree").value;
		var amFour=document.getElementById("amFour").value;
		var amFive=document.getElementById("amFive").value;
		var amSix=document.getElementById("amSix").value;
		var amSeven=document.getElementById("amSeven").value;
		var amEight=document.getElementById("amEight").value;
		var amNine=document.getElementById("amNine").value;
		var amTen=document.getElementById("amTen").value;
		var amEleven=document.getElementById("amEleven").value;
		var amTwelve=document.getElementById("amTwelve").value;
		var pmOne=document.getElementById("pmOne").value;
		var pmTwo=document.getElementById("pmTwo").value;
		var pmThree=document.getElementById("pmThree").value;
		var pmFour=document.getElementById("pmFour").value;
		var pmFive=document.getElementById("pmFive").value;
		var pmSix=document.getElementById("pmSix").value;
		var pmSeven=document.getElementById("pmSeven").value;
		var pmEight=document.getElementById("pmEight").value;
		var pmNine=document.getElementById("pmNine").value;
		var pmTen=document.getElementById("pmTen").value;
		var pmEleven=document.getElementById("pmEleven").value;
		var pmTwelve=document.getElementById("pmTwelve").value;
		
		var amDay=Number(amOne)+Number(amTwo)+Number(amThree)+Number(amFour)+Number(amFive)+Number(amSix)+Number(amSeven)+Number(amEight)+Number(amNine)+Number(amTen)+Number(amEleven)+Number(amTwelve);
		var pmDay=Number(pmOne)+Number(pmTwo)+Number(pmThree)+Number(pmFour)+Number(pmFive)+Number(pmSix)+Number(pmSeven)+Number(pmEight)+Number(pmNine)+Number(pmTen)+Number(pmEleven)+Number(pmTwelve);
		var sumday=amDay+pmDay;
		if(amOne=="" || amTwo=="" || amThree=="" || amFour=="" || amFive=="" || amSix=="" || amSeven=="" || amEight=="" || amNine=="" || amTen=="" || amEleven=="" || amTwelve=="" ||
		   pmOne=="" || pmTwo=="" || pmThree=="" || pmFour=="" || pmFive=="" || pmSix=="" || pmSeven=="" || pmEight=="" || pmNine=="" || pmTen=="" || pmEleven=="" || pmTwelve==""){
			document.getElementById("addTips").style.display='block';
			document.getElementById("addTips").innerHTML = "日活动水平不允许为空！";
		   }else{
			   $.post("ajax/ActivityD/addDay.do",{amOne:amOne,amTwo:amTwo,amThree:amThree,amFour:amFour,amFive:amFive,amSix:amSix,amSeven:amSeven,amEight:amEight,amNine:amNine,amTen:amTen,amEleven:amEleven,amTwelve:amTwelve,
				 pmOne:pmOne,pmTwo:pmTwo, pmThree:pmThree, pmFour:pmFour,pmFive:pmFive,pmSix:pmSix,pmSeven:pmSeven,pmEight:pmEight,pmNine:pmNine,pmTen:pmTen,pmEleven:pmEleven,pmTwelve:pmTwelve,totalDay:sumday,
				},function(data){    
				var json = eval("(" + data + ")");  
				var flag = json.sid;
				
								   if(flag==1){									    
										daysuccess=true;
										document.getElementById("addTips").style.display='none';
										dayid=json.nk_dayid;   
										//alert(dayid);								
										}
									else if(flag == -2){
										alert("没有权限！");
									}
									else if(flag == -1){
										alert("日活动水平添加失败，请重新添加！");
									}
								   
			
		        });
		   }
	}
	if(monthsuccess && weeksuccess && daysuccess){
		//**********VOCs成分谱信息*****************//
		var formRate=document.getElementById("formRate").value;
		var ald2Rate=document.getElementById("ald2Rate").value;
		var aldxRate=document.getElementById("aldxRate").value;
		var etohRate=document.getElementById("etohRate").value;
		var ch4Rate=document.getElementById("ch4Rate").value;
		var meohRate=document.getElementById("meohRate").value;
		var ethaRate=document.getElementById("ethaRate").value;
		var parRate=document.getElementById("parRate").value;
		var ethRate=document.getElementById("ethRate").value;
		var oleRate=document.getElementById("oleRate").value;
		var ioleRate=document.getElementById("ioleRate").value;
		var isopRate=document.getElementById("isopRate").value;
		var terpRate=document.getElementById("terpRate").value;
		var tolRate=document.getElementById("tolRate").value;
		var xylRate=document.getElementById("xylRate").value;
		
		if(formRate=="" || ald2Rate=="" || aldxRate=="" || etohRate=="" || ch4Rate=="" || meohRate=="" || ethaRate=="" || parRate=="" || ethRate=="" || oleRate=="" ||
		   ioleRate=="" || isopRate=="" || terpRate=="" || tolRate=="" || xylRate==""){
			    document.getElementById("addTips").style.display='block';
			    document.getElementById("addTips").innerHTML = "VOC成分谱不允许为空！";
		   }else{
			   $.post("ajax/ProfileVoc/addVoc.do",{formRate:formRate,ald2Rate:ald2Rate,aldxRate:aldxRate,etohRate:etohRate,ch4Rate:ch4Rate,meohRate:meohRate,ethaRate:ethaRate,parRate:parRate,ethRate:ethRate
				   ,oleRate:oleRate,ioleRate:ioleRate,isopRate:isopRate,terpRate:terpRate,tolRate:tolRate,xylRate:xylRate},function(data){    
									var json = eval("(" + data + ")");  
									var flag = json.sid;
				
								   if(flag==1){									    
										vocsuccess=true;
										document.getElementById("addTips").style.display='none';
										vocid=json.nk_vocid;   
										//alert(vocid);								
										}
									else if(flag == -2){
										alert("没有权限！");
									}
									else if(flag == -1){
										alert("VOC成分谱添加失败，请重新添加！");
									}
								   
			
		        });
		   }
	}
	
	if(monthsuccess && weeksuccess && daysuccess && vocsuccess){
		//**********PM2.5成分谱信息*****************//
		var pso4Rate=document.getElementById("pso4Rate").value;
		
		var pno3Rate=document.getElementById("pno3Rate").value;
		
		var pecRate=document.getElementById("pecRate").value;
		
		var pocRate=document.getElementById("pocRate").value;
		var pmothrRate=document.getElementById("pmothrRate").value;
		
		var pcaRate=document.getElementById("pcaRate").value;
		var pmgRate=document.getElementById("pmgRate").value;
		var pkRate=document.getElementById("pkRate").value;
		var pncomRate=document.getElementById("pncomRate").value;
		
		var pfeRate=document.getElementById("pfeRate").value;
		var palRate=document.getElementById("palRate").value;
		var psiRate=document.getElementById("psiRate").value;
		var ptiRate=document.getElementById("ptiRate").value;
		var pmnRate=document.getElementById("pmnRate").value;
		var pclRate=document.getElementById("pclRate").value;
		var pnh4Rate=document.getElementById("pnh4Rate").value;
		var pnaRate=document.getElementById("pnaRate").value;
		var ph2oRate=document.getElementById("ph2oRate").value;
		var pmcRate=document.getElementById("pmcRate").value;
		
		if(pso4Rate=="" || pno3Rate=="" || pecRate=="" || pocRate=="" || pmothrRate=="" || pcaRate=="" || pmgRate=="" || pkRate=="" || pncomRate=="" || pfeRate=="" ||
				palRate=="" || psiRate=="" || ptiRate=="" || pmnRate=="" || pclRate=="" || pnh4Rate=="" || pnaRate=="" || ph2oRate=="" || pmcRate==""){
			    document.getElementById("addTips").style.display='block';
			    document.getElementById("addTips").innerHTML = "PM2.5成分谱不允许为空！";
		}else{
			$.post("ajax/ProfilePm25/addPm25.do",{pso4Rate:pso4Rate,pno3Rate:pno3Rate,pecRate:pecRate,pocRate:pocRate,pmothrRate:pmothrRate,pcaRate:pcaRate,pmgRate:pmgRate,pkRate:pkRate,
				pncomRate:pncomRate,pfeRate:pfeRate,palRate:palRate,psiRate:psiRate,ptiRate:ptiRate,pmnRate:pmnRate,pclRate:pclRate,pnh4Rate:pnh4Rate,pnaRate:pnaRate,
				ph2oRate:ph2oRate,pmcRate:pmcRate},function(data){    
									var json = eval("(" + data + ")");  
									var flag = json.sid;
				
								   if(flag==1){									    
										pm25success=true;
										document.getElementById("addTips").style.display='none';
										pm25id=json.nk_pm25id;   
										//alert(pm25id);																	
										}
									else if(flag == -2){
										alert("没有权限！");
									}
									else if(flag == -1){
										alert("PM2.5成分谱添加失败，请重新添加！");
									}
								   
			
		        });
		}
	}
	
	if(monthsuccess && weeksuccess && daysuccess && vocsuccess && pm25success){
		
		//**********NOX成分谱信息*****************//
		var noRate=document.getElementById("noRate").value;
		var no2Rate=document.getElementById("no2Rate").value;
		
		if(noRate=="" || no2Rate==""){
			document.getElementById("addTips").style.display='block';
			document.getElementById("addTips").innerHTML = "NOX成分谱不允许为空！";
		}else{
			$.post("ajax/ProfileNox/addNox.do",{noRate:noRate,no2Rate:no2Rate},function(data){    
									var json = eval("(" + data + ")");  
									var flag = json.sid;
				
								   if(flag==1){									    
										noxsuccess=true;
										document.getElementById("addTips").style.display='none';
										noxid=json.nk_noxid;   
										//alert(noxid);																	
										}
									else if(flag == -2){
										alert("没有权限！");
									}
									else if(flag == -1){
										alert("NOX成分谱添加失败，请重新添加！");
									}
								   
			
		        });
		}		
	}
	
	if(scc1!="" && scc1!=null && scc1!=undefined && monthsuccess && weeksuccess && daysuccess && vocsuccess && pm25success && noxsuccess){
		//**********排放因子信息*****************//
		var nox=document.getElementById("nox").value;
		var so2=document.getElementById("so2").value;
		var nh3=document.getElementById("nh3").value;
		//(nh3+"nh3")
		var vocs=document.getElementById("vocs").value;
		var co=document.getElementById("co").value;
		var pm10=document.getElementById("pm10").value;
		var pm25=document.getElementById("pm25").value;
		var oc=document.getElementById("oc").value;
		//alert(oc+"oc")
		var danwei=document.getElementById("danwei").value;
		var pm=document.getElementById("pm").value;
		var bc=document.getElementById("bc").value;
		//alert(bc+"bc")
		//alert(scc)
		if(nox=="" || so2=="" || nh3=="" || vocs=="" || co=="" || pm10=="" || pm25=="" || oc=="" || pm=="" || bc==""){
			document.getElementById("addTips").style.display='block';
			document.getElementById("addTips").innerHTML = "排放因子不允许为空！";
		}else{
			$.post("ajax/Scc/addScc.do",{scc:scc,epaScc:epascc,nox:nox,so2:so2,nh3:nh3,vocs:vocs,co:co,pm10:pm10,pm25:pm25,oc:oc,pm:pm,bc:bc,monthid:monthid,
				nkweekid:weekid,nkdayid:dayid,nknoxid:noxid,nkpm25id:pm25id,nkvocid:vocid,danwei:danwei},function(data){    
									var json = eval("(" + data + ")");  
									var flag = json.sid;
				
								   if(flag==1){									    
										
										document.getElementById("addTips").style.display='none';
										alert("SCC添加成功！");														
										}
									else if(flag == -2){
										alert("没有权限！");
									}
									else if(flag == -1){
										alert("SCC添加失败，请重新添加！");
									}
								   
			
		        });
		}
	}
				}
			}
		}
		
	}

}

function accAdd(arg1,arg2){ 
var r1,r2,m; 
try{r1=arg1.toString().split(".")[1].length}catch(e){r1=0} 
try{r2=arg2.toString().split(".")[1].length}catch(e){r2=0} 
m=Math.pow(10,Math.max(r1,r2)) 
return (arg1*m+arg2*m)/m 
} 
//给Number类型增加一个add方法，调用起来更加方便。 
Number.prototype.add = function (arg){ 
return accAdd(arg,this); 
}