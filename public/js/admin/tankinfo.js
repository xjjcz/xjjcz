function showjsp(value){
	
			
				
				if(value==1){
					$('#lishi1').hide();	
					$('#lishi2').hide();
					$('#lishiwoshi1').show();
					$('#lishiwoshi2').show();
					$('#waifu1').hide();
					$('#waifu2').hide();
					$('#neifu1').hide();
					$('#neifu2').hide();
					$('#waifuneifu1').hide();
					$('#waifuneifu2').hide();
				}
				else if (value==2){
					$('#lishi1').show();	
					$('#lishi2').show();
					$('#lishiwoshi1').show();
					$('#lishiwoshi2').show();
					$('#waifu1').hide();
					$('#waifu2').hide();
					$('#neifu1').hide();
					$('#neifu2').hide();
					$('#waifuneifu1').hide();
					$('#waifuneifu2').hide();
				}
				else if (value==3){
					$('#lishi1').hide();	
					$('#lishi2').hide();
					$('#lishiwoshi1').hide();
					$('#lishiwoshi2').hide();
					$('#waifu1').hide();
					$('#waifu2').hide();
					$('#neifu1').show();
					$('#neifu2').show();
					$('#waifuneifu1').show();
					$('#waifuneifu2').show();
				}
				else if (value==4||value==5){
					$('#lishi1').hide();	
					$('#lishi2').hide();
					$('#lishiwoshi1').hide();
					$('#lishiwoshi2').hide();
					$('#waifu1').show();
					$('#waifu2').show();
					$('#neifu1').hide();
					$('#neifu2').hide();
					$('#waifuneifu1').show();
					$('#waifuneifu2').show();
				}
				else if(value==-1){
					$('#lishi1').hide();	
					$('#lishi2').hide();
					$('#lishiwoshi1').hide();
					$('#lishiwoshi2').hide();
					$('#waifu1').hide();
					$('#waifu2').hide();
					$('#neifu1').hide();
					$('#neifu2').hide();
					$('#waifuneifu1').hide();
					$('#waifuneifu2').hide();
				}
				
			}
	function initjsp(){
	                
					$('#lishi1').hide();	
					$('#lishi2').hide();
					$('#lishiwoshi1').hide();
					$('#lishiwoshi2').hide();
					$('#waifu1').hide();
					$('#waifu2').hide();
					$('#neifu1').hide();
					$('#neifu2').hide();
					$('#waifuneifu1').hide();
					$('#waifuneifu2').hide();
					$("#createtank").show();
			    	$("#savetank").show();
			    	$("#submittank").hide();
			    	$("#deletetank").show();
			    	
			}
	
	
	
        //获取tanktype ,对应的name
     
        function getTanktype(tanktype){
        	
        
        	var msg;
        	switch(tanktype){
        		case "1":
        			msg = "卧式固定顶罐";
        			break;
        		case "2":
        			msg = "立式固定顶罐";
        			break;
        		case "3":
        			msg = "内浮顶罐";
        			break;
        		case "4":
        			msg = "外浮顶罐";
        			break;
        		case "5":
        			msg = "穹顶外浮顶罐";
        			break;
        	}
        	return msg;
        }
           function setdate(){
						var date=document.getElementById("reportdate").value;
					
					    if(date==""){
						var d = new Date();
						var str = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+(d.getHours())+":"+d.getMinutes();
						
						$("#reportdate").val(str);
						return str;
					}
						else {
							$("#reportdate").val(date);
							return date;
							}
				}
        
         
		//第二选择不同选项做出相应变化
		$(function(){
				$("#tanktype").change(function(){
				//alert('asasasasas');
			    var tanktype_pre = $("#tanktype").val();
			    //alert(tanktype_pre);
			    
			    var tankArray = new Array();
			    tankArray = tanktype_pre.split("_");
			    
			    //获取tanktype 和 tankid
			    var tanktype = tankArray[0];
			    var tankid = tankArray[1];
			    
			    //alert(tanktype);
			    //alert(tankid);
			    if(tanktype== -1){
			    	//alert('你现在什么也没选');
			    	initjsp();
			    	$("#info input").val(""); //将所有元素置空
			    	$("#info select").val("-1"); //将所有select 框置空
			    	$("#tankinfo input").val(""); //将所有元素置空
			    	$("#tankinfo select").val("-1"); //将所有select 框置空
			    }else{
			    	showjsp(tanktype);//这儿控制下面隐藏域显示情况
			    	//储罐信息
			    	//储液信息
			    	//储罐规格
			    	//储罐特性
			    	//隐藏域特性
			    	$.post("ajax/GetTankInfo/getData.do",{'tankid':tankid},function(data){
			    		var jsonObj = eval("(" + data + ")");
			    		//获取基本数据
			            var tankid=jsonObj[0].tankid;
			    		var reporter=jsonObj[0].reporter;
			    		var reportdate=jsonObj[0].reportdate;
			    		var phone=jsonObj[0].phone;
			    		
			    		var chosedtanktype = jsonObj[0].tanktype;
			    		var solutionname = jsonObj[0].solutionname;
			    		var solutionversion = jsonObj[0].solutionversion;
			    		var samenum = jsonObj[0].samenum;
						var	solutioncomposition = jsonObj[0].solutioncomposition;
						var	solutionfraction = jsonObj[0].solutionfraction;
						var	streampressure = jsonObj[0].streampressure;
						var	streamfraction = jsonObj[0].streamfraction;
						var	liquidfraction = jsonObj[0].liquidfraction;
						var	liquiddensity = jsonObj[0].liquiddensity;
						var	liquidmaxtem = jsonObj[0].liquidmaxtem;
						var	liquidmintem = jsonObj[0].liquidmintem;
						var	liquidavertem = jsonObj[0].liquidavertem;
						var	subjecttem = jsonObj[0].subjecttem;
						var	tanklength = jsonObj[0].tanklength;
						var	tankdiameter = jsonObj[0].tankdiameter;
						var	workingvolumn = jsonObj[0].workingvolumn;
						var	frequency = jsonObj[0].frequency;
						var	capacity = jsonObj[0].capacity;
						var	maxheight = jsonObj[0].maxheight;
						var	averageheight = jsonObj[0].averageheight;
						var	innerstate = jsonObj[0].innerstate;
						var	tankcolor = jsonObj[0].tankcolor;
						var	paintstate = jsonObj[0].paintstate;
						var	vacuumset = jsonObj[0].vacuumset;
						var	pressureset = jsonObj[0].pressureset;
						var	isunderground = jsonObj[0].isunderground;
						var	issetheat = jsonObj[0].issetheat;
						var	outtanktoptype = jsonObj[0].outtanktoptype;
						var	outtanktopconfig = jsonObj[0].outtanktopconfig;
						var	tankstructure = jsonObj[0].tankstructure;
						var	outinfirstseal = jsonObj[0].outinfirstseal;
						var	outinsecondseal = jsonObj[0].outinsecondseal;
						var	tankcolor = jsonObj[0].tankcolor;
						var	uptanktoppaintstate = jsonObj[0].uptanktoppaintstate;
						var uptanktoptype=jsonObj[0].uptanktoptype;
						var uptanktopheight=jsonObj[0].uptanktopheight;
						var uproundradius=jsonObj[0].uproundradius;
						var uptanktopgrade=jsonObj[0].uptanktopgrade;
						var	inissupport = jsonObj[0].inissupport;
						var	insupportnum = jsonObj[0].insupportnum;
						var	insupportradius = jsonObj[0].insupportradius;
						var	infloatconnect = jsonObj[0].infloatconnect;
						var	inweldtype = jsonObj[0].inweldtype;
						var	infloatpantype = jsonObj[0].infloatpantype;
						var	instructuretype = jsonObj[0].instructuretype;
						var	inconnectwidth = jsonObj[0].inconnectwidth;
						var	inplatesize = jsonObj[0].inplatesize;
					    var intanktoppaintstate=jsonObj[0].intanktoppaintstate;
					     

			    			
		    			//将数据回显出来
		    			$("#tankid").val(tankid);
		    			$("#reporter").val(reporter);
		    			$("#reportdate").val(reportdate);
		    			$("#phone").val(phone);
		    			$("#chosedtanktype").val(chosedtanktype);
		    			$("#solutionname").val(solutionname);
		    			$("#solutionversion").val(solutionversion);
		    			$("#samenum").val(samenum);
						$("#solutioncomposition").val(solutioncomposition);
						$("#solutionfraction").val(solutionfraction);
						$("#streampressure").val(streampressure);
						$("#streamfraction").val(streamfraction);
						$("#liquidfraction").val(liquidfraction);
						$("#liquiddensity").val(liquiddensity);
						$("#liquidmaxtem").val(liquidmaxtem);
						$("#liquidmintem").val(liquidmintem);
						$("#liquidavertem").val(liquidavertem);
						$("#subjecttem").val(subjecttem);
						$("#tanklength").val(tanklength);
						$("#tankdiameter").val(tankdiameter);
						$("#workingvolumn").val(workingvolumn);
						$("#frequency").val(frequency);
						$("#capacity").val(capacity);
						$("#maxheight").val(maxheight);
						$("#averageheight").val(averageheight);
						$("#innerstate").val(innerstate);
						$("#tankcolor").val(tankcolor);
						$("#paintstate").val(paintstate);
						$("#vacuumset").val(vacuumset);
						$("#pressureset").val(pressureset);
						$("#isunderground").val(isunderground);
						$("#issetheat").val(issetheat);
						$("#outtanktoptype").val(outtanktoptype);
						$("#outtanktopconfig").val(outtanktopconfig);
						$("#tankstructure").val(tankstructure);
						$("#outinfirstseal").val(outinfirstseal);
						$("#outinsecondseal").val(outinsecondseal);
						$("#tankcolor").val(tankcolor);
						$("#uptanktoppaintstate").val(uptanktoppaintstate);
						$("#inissupport").val(inissupport);
						$("#insupportnum").val(insupportnum);
						$("#insupportradius").val(insupportradius);
						$("#infloatconnect").val(infloatconnect);
						$("#inweldtype").val(inweldtype);
						$("#infloatpantype").val(infloatpantype);
						$("#instructuretype").val(instructuretype);
						$("#inconnectwidth").val(inconnectwidth);
						$("#inplatesize").val(inplatesize);
			    		$("#uptanktoptype").val(uptanktoptype);
			    		$("#uptanktopheight").val(uptanktopheight);
			    		$("#uproundradius").val(uproundradius);
			    		$("#uptanktopgrade").val(uptanktopgrade);
			    		$("#intanktoppaintstate").val(intanktoppaintstate);
			    		setSelectRead();
			    		
			    	});
			    	
			    }
			
		
		});
	
	
		});
		function  savetankinfo(){
			        
			    var factoryid  = $("#factoryid").val();
			    var tankid=document.getElementById("tankid").value;
				var reporter=document.getElementById("reporter").value;
				var date=document.getElementById("reportdate").value;
				var phone=document.getElementById("phone").value;
			    var tanktype=document.getElementById("chosedtanktype").value;
				var solutionname=document.getElementById("solutionname").value;
				var solutionversion=document.getElementById("solutionversion").value;//储液型号
				var samenum=document.getElementById("samenum").value;
				var solutioncomposition=document.getElementById("solutioncomposition").value;
				var solutionfraction=document.getElementById("solutionfraction").value;
				var streampressure=document.getElementById("streampressure").value;
				var streamfraction=document.getElementById("streamfraction").value;
				var liquidfraction=document.getElementById("liquidfraction").value;
				var liquiddensity=document.getElementById("liquiddensity").value;
				var liquidmaxtem=document.getElementById("liquidmaxtem").value;
				var liquidmintem=document.getElementById("liquidmintem").value;
				var liquidavertem=document.getElementById("liquidavertem").value;
				var subjecttem=document.getElementById("subjecttem").value;
				var tanklength=document.getElementById("tanklength").value;
				var tankdiameter=document.getElementById("tankdiameter").value;
				var workingvolumn=document.getElementById("workingvolumn").value;
				var frequency=document.getElementById("frequency").value;
				var capacity=document.getElementById("capacity").value;
				var maxheight=document.getElementById("maxheight").value;
				var averageheight=document.getElementById("averageheight").value;
				var innerstate=document.getElementById("innerstate").value;
				var tankcolor=document.getElementById("tankcolor").value;
				var paintstate=document.getElementById("paintstate").value;
				var vacuumset=document.getElementById("vacuumset").value;
				var pressureset=document.getElementById("pressureset").value;
				var isunderground=document.getElementById("isunderground").value;
				var issetheat=document.getElementById("issetheat").value;
				var infloatpantype=document.getElementById("infloatpantype").value;
				var instructuretype=document.getElementById("instructuretype").value;
				var inconnectwidth=document.getElementById("inconnectwidth").value;
				var inplatesize=document.getElementById("inplatesize").value;
				var uptanktoptype=document.getElementById("uptanktoptype").value;
				var uptanktopheight=document.getElementById("uptanktopheight").value;
				var uproundradius=document.getElementById("uproundradius").value;
				var uptanktopgrade=document.getElementById("uptanktopgrade").value;
				var intanktoppaintstate=document.getElementById("intanktoppaintstate").value;
				var inissupport=document.getElementById("inissupport").value;
				var insupportnum=document.getElementById("insupportnum").value;
			    var insupportradius=document.getElementById("insupportradius").value;
				var infloatconnect=document.getElementById("infloatconnect").value;
				var inweldtype=document.getElementById("inweldtype").value;
				var infloatpantype=document.getElementById("infloatpantype").value;
				var outinfirstseal=document.getElementById("outinfirstseal").value;
				var outinsecondseal=document.getElementById("outinsecondseal").value;
				var outtanktoptype=document.getElementById("outtanktoptype").value;
				var outtanktopconfig=document.getElementById("outtanktopconfig").value;
			    var tankstructure=document.getElementById("tankstructure").value;
			    var uptanktoppaintstate=document.getElementById("uptanktoppaintstate").value;
					
					     //后面是jsp页面的值，前面是model里的变量
					$.post("ajax/Tankinfo/saveTankInfoAdmin.do",{	
						                 				factoryId:factoryid,
														  tankid:tankid,
														  phone:phone,
														  reportdate:date,
														  reporter:reporter,
														  tanktype:tanktype,
														  solutionname:solutionname,
														  solutionversion:solutionversion,
														  samenum:samenum,
														  solutioncomposition:solutioncomposition,
														  solutionfraction:solutionfraction,
														  streampressure:streampressure,
														  streamfraction:streamfraction,
														  liquidfraction:liquidfraction,
														  liquiddensity:liquiddensity,
														  liquidmaxtem:liquidmaxtem,
														  liquidmintem:liquidmintem,
														  liquidavertem:liquidavertem,
														  subjecttem:subjecttem,
														  tanklength:tanklength,
														  tankdiameter:tankdiameter,
														  workingvolumn:workingvolumn,
														  frequency:frequency,
														  capacity:capacity,
														  maxheight:maxheight,
														  averageheight:averageheight,
														  innerstate:innerstate,
														  tankcolor:tankcolor,
														  paintstate:paintstate,
														  vacuumset:vacuumset,
														  pressureset:pressureset,
														  isunderground:isunderground,
														  issetheat:issetheat,
														  infloatpantype:infloatpantype,
														  instructuretype:instructuretype,
														  inconnectwidth:inconnectwidth,
														  inplatesize:inplatesize,
														  uptanktoptype:uptanktoptype,
														  uptanktopheight:uptanktopheight,
														  uproundradius:uproundradius,
														  uptanktopgrade:uptanktopgrade,
														  intanktoppaintstate:intanktoppaintstate,
														  inissupport:inissupport,
														  insupportnum:insupportnum,
														  insupportradius:insupportradius,
														  infloatconnect:infloatconnect,
														  inweldtype:inweldtype,
														  infloatpantype:infloatpantype,
														  outinfirstseal:outinfirstseal,
														  outinsecondseal:outinsecondseal,
														  outtanktoptype:outtanktoptype,
														  outtanktopconfig:outtanktopconfig,
														  tankstructure:tankstructure,
														  uptanktoppaintstate:uptanktoppaintstate
														  
														  },function(data){    
														  
														  var jsonObj = eval("(" + data + ")");
														  var flag=jsonObj.flag;
														  if(flag==1){
															  alert("更新成功！");
															  }
														  else{
															   alert("更新失败！");
														  }
														  
														  
														 
				}); 
			
		}
		   $(function(){
				$("#chosedtanktype").change(function(){
					var tanktype=$("#chosedtanktype").val();
					showjsp(tanktype);
					
				});
		     });
			function createtankbutton(){
				$("#tanktype").attr('value' , $('#tanktype option:first').val());
				var tanktype=$('#tanktype').val();
				  if(tanktype== -1){
			    	//alert('你现在什么也没选');
			    	
			    	setSelectWrite();
			    	initjsp();
			    	$("#info input").val(""); //将所有元素置空
			    	$("#info select").val("-1"); //将所有select 框置空
			    	$("#tankinfo input").val(""); //将所有元素置空
			    	$("#tankinfo select").val("-1"); //将所有select 框置空
			    	setdate();
			    	buttonshow(tanktype);
			    	
			    }
			}
			function reload(){
				$("#tanktype").attr('value' , $('#tanktype option:first').val());
				var tanktype=$('#tanktype').val();
				if(tanktype== -1){
			    	//alert('你现在什么也没选');
			    	//alert(1);
			    	
			    	setSelectWrite();
			    	initjsp();
			    	$("#info input").val(""); //将所有元素置空
			    	$("#info select").val("-1"); //将所有select 框置空
			    	$("#tankinfo input").val(""); //将所有元素置空
			    	$("#tankinfo select").val("-1"); //将所有select 框置空
			    	buttoncontrol(tanktype);
			    	setdate();
			    	deletetankitem();
			    	
		    	
			    }
				
			}
			
			
			function buttonshow(tanktype) {
				if(tanktype==-1){
					$("#createtank").hide();
			    	$("#savetank").hide();
			    	$("#submittank").show();
			    	$("#deletetank").hide();
				}
				else{
					$("#createtank").show();
			    	$("#savetank").show();
			    	$("#submittank").hide();
			    	$("#deletetank").show();
				}
				}  
			function buttoncontrol(tanktype){
				if(tanktype==-1){
					$("#createtank").show();
			    	$("#savetank").show();
			    	$("#submittank").hide();
			    	$("#deletetank").show();
				}
				
			}
			
			function submittank(){
				 var factoryid  = $("#factoryid").val();
				var reporter=document.getElementById("reporter").value;
				var date=setdate();
				var phone=document.getElementById("phone").value;
			    var tanktype=document.getElementById("chosedtanktype").value;
				var solutionname=document.getElementById("solutionname").value;
				var solutionversion=document.getElementById("solutionversion").value;//储液型号
				var samenum=document.getElementById("samenum").value;
				var solutioncomposition=document.getElementById("solutioncomposition").value;
				var solutionfraction=document.getElementById("solutionfraction").value;
				var streampressure=document.getElementById("streampressure").value;
				var streamfraction=document.getElementById("streamfraction").value;
				var liquidfraction=document.getElementById("liquidfraction").value;
				var liquiddensity=document.getElementById("liquiddensity").value;
				var liquidmaxtem=document.getElementById("liquidmaxtem").value;
				var liquidmintem=document.getElementById("liquidmintem").value;
				var liquidavertem=document.getElementById("liquidavertem").value;
				var subjecttem=document.getElementById("subjecttem").value;
				var tanklength=document.getElementById("tanklength").value;
				var tankdiameter=document.getElementById("tankdiameter").value;
				var workingvolumn=document.getElementById("workingvolumn").value;
				var frequency=document.getElementById("frequency").value;
				var capacity=document.getElementById("capacity").value;
				var maxheight=document.getElementById("maxheight").value;
				var averageheight=document.getElementById("averageheight").value;
				var innerstate=document.getElementById("innerstate").value;
				var tankcolor=document.getElementById("tankcolor").value;
				var paintstate=document.getElementById("paintstate").value;
				var vacuumset=document.getElementById("vacuumset").value;
				var pressureset=document.getElementById("pressureset").value;
				var isunderground=document.getElementById("isunderground").value;
				var issetheat=document.getElementById("issetheat").value;
				var infloatpantype=document.getElementById("infloatpantype").value;
				var instructuretype=document.getElementById("instructuretype").value;
				var inconnectwidth=document.getElementById("inconnectwidth").value;
				var inplatesize=document.getElementById("inplatesize").value;
				var uptanktoptype=document.getElementById("uptanktoptype").value;
				var uptanktopheight=document.getElementById("uptanktopheight").value;
				var uproundradius=document.getElementById("uproundradius").value;
				var uptanktopgrade=document.getElementById("uptanktopgrade").value;
				var intanktoppaintstate=document.getElementById("intanktoppaintstate").value;
				var inissupport=document.getElementById("inissupport").value;
				var insupportnum=document.getElementById("insupportnum").value;
			    var insupportradius=document.getElementById("insupportradius").value;
				var infloatconnect=document.getElementById("infloatconnect").value;
				var inweldtype=document.getElementById("inweldtype").value;
				var infloatpantype=document.getElementById("infloatpantype").value;
				var outinfirstseal=document.getElementById("outinfirstseal").value;
				var outinsecondseal=document.getElementById("outinsecondseal").value;
				var outtanktoptype=document.getElementById("outtanktoptype").value;
				var outtanktopconfig=document.getElementById("outtanktopconfig").value;
			    var tankstructure=document.getElementById("tankstructure").value;
			    var uptanktoppaintstate=document.getElementById("uptanktoppaintstate").value;
			    if(tanktype==-1){
			    	alert("请选择储罐类型");
			    }
					else{
					     //后面是jsp页面的值，前面是model里的变量
					$.post("ajax/Tankinfo/createTankInfoAdmin.do",{	
						                 				factoryId:factoryid,
														  phone:phone,
														  reportdate:date,
														  reporter:reporter,
														  tanktype:tanktype,
														  solutionname:solutionname,
														  solutionversion:solutionversion,
														  samenum:samenum,
														  solutioncomposition:solutioncomposition,
														  solutionfraction:solutionfraction,
														  streampressure:streampressure,
														  streamfraction:streamfraction,
														  liquidfraction:liquidfraction,
														  liquiddensity:liquiddensity,
														  liquidmaxtem:liquidmaxtem,
														  liquidmintem:liquidmintem,
														  liquidavertem:liquidavertem,
														  subjecttem:subjecttem,
														  tanklength:tanklength,
														  tankdiameter:tankdiameter,
														  workingvolumn:workingvolumn,
														  frequency:frequency,
														  capacity:capacity,
														  maxheight:maxheight,
														  averageheight:averageheight,
														  innerstate:innerstate,
														  tankcolor:tankcolor,
														  paintstate:paintstate,
														  vacuumset:vacuumset,
														  pressureset:pressureset,
														  isunderground:isunderground,
														  issetheat:issetheat,
														  infloatpantype:infloatpantype,
														  instructuretype:instructuretype,
														  inconnectwidth:inconnectwidth,
														  inplatesize:inplatesize,
														  uptanktoptype:uptanktoptype,
														  uptanktopheight:uptanktopheight,
														  uproundradius:uproundradius,
														  uptanktopgrade:uptanktopgrade,
														  intanktoppaintstate:intanktoppaintstate,
														  inissupport:inissupport,
														  insupportnum:insupportnum,
														  insupportradius:insupportradius,
														  infloatconnect:infloatconnect,
														  inweldtype:inweldtype,
														  infloatpantype:infloatpantype,
														  outinfirstseal:outinfirstseal,
														  outinsecondseal:outinsecondseal,
														  outtanktoptype:outtanktoptype,
														  outtanktopconfig:outtanktopconfig,
														  tankstructure:tankstructure,
														  uptanktoppaintstate:uptanktoppaintstate
														  
														  },function(data){    
														  
														  var jsonObj = eval("(" + data + ")");
														  var flag=jsonObj.flag;
														  if(flag==1){
															  alert("提交成功！");
															  reload();
															  }
														  else{
															   alert("提交失败！");
														  }
														  
														  
														 
				}); 
					     }
				
			}
		/*
		function selectReadOnly(selectedId){ 
			      alert(2)
					var obj = document.getElementById(selectedId); 
					obj.onmouseover = function(){ 
					obj.setCapture(); 
					} 
					obj.onmouseout = function(){ 
					obj.releaseCapture(); 
					} 
					obj.onfocus = function(){ 
					obj.blur(); 
					} 
					obj.onbeforeactivate = function(){ 
					return false; 
					} 
					} 
		*/
		function setSelectRead(){

         var chosedtanktype=document.getElementById("chosedtanktype");
         chosedtanktype.onclick = function() {     
         var index = this.selectedIndex;     
         this.onchange = function() {     
              this.selectedIndex = index;     
			  };     
			   };  
			
			};
		function setSelectWrite(){
			var chosedtanktype=document.getElementById("chosedtanktype");
			chosedtanktype.onclick = function() {     
			 this.onchange = function() {     
			this.selectedIndex; 
			 };     
			        };  
			};
			function onchangetanktype(){
				var tanktype=$('#tanktype').val();
				if(tanktype==-1){
					alert("请先选择储罐！");
				}
				
			}
			
			function onchangeChosedtank()
			{ 
				var chosedtanktype=$('#chosedtanktype').val();
				if(chosedtanktype==-1){
					alert("请选择储罐类型");
					$("#tankinfo input").val(""); //将所有元素置空
			    	$("#tankinfo select").val("-1"); //将所有select 框置空
				}
			}
    		function deleteTankinfo(tankid){
				//alert(123)
				//alert(tankid);
				bootbox.confirm("您确定要删除这条数据吗?", function(result) {					
						if (result == false) {
							//Example.show("Prompt dismissed");
						} else {
						    $.post("ajax/Tankinfo/deletetankinfo.do",{tankid:tankid},function(data){    
								var jsonObj = eval("(" + data + ")"); 								
								if(jsonObj.status=="1"){
									alert("恭喜您，数据删除成功！");
									reload();
									
								}
								else{
									//没权限
									alert("操作失败！");
								}
							});
						}
					});		    	    				
			}
    		function deletetankitem()
    		{
    			
    			//alert(1);
    			document.getElementById("tanktype").options.length = 1;
    			var factoryid  = $("#factoryid").val();
    			$.post("ajax/GetTankInfo/getTankName.do",{'factoryid':factoryid} ,function(data) {
	
				var jsonObj = eval("(" + data + ")");
				 //alert(jsonObj);
				for ( var i = 0; i < jsonObj.length; i++) {
					
					//获取基本数据
					var tanktype = jsonObj[i].tanktype;
					var tankid = jsonObj[i].tankid;
						
					var tankvalue = tanktype+"_"+tankid;
					var tankname = getTanktype(tanktype)+"_"+tankid;
				
					$option = $("<option></option>");
					$option.attr("value", tankvalue);
					$option.text(tankname);
					$("#tanktype").append($option);
				}
	
			});
    			 //jQuery("#select_id option[value='']").remove();
				
			}