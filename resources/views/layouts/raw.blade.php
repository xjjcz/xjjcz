<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
    <title>工艺过程-原料信息</title>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- basic styles -->
    <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/font-awesome.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/font-awesome-ie7.min.css") }}" rel="stylesheet"/>


    <!-- page specific plugin styles -->

    <link href="{{ asset("/css/jquery-ui-1.10.3.custom.min.css") }}" rel="stylesheet"/>


    <link href="{{ asset("/css/chosen.css") }}" rel="stylesheet"/>


    <link href="{{ asset("/css/datepicker.css") }}" rel="stylesheet"/>


    <link href="{{ asset("/css/bootstrap-timepicker.css") }}" rel="stylesheet"/>


    <link href="{{ asset("/css/daterangepicker.css") }}" rel="stylesheet"/>


    <link href="{{ asset("/css/colorpicker.css") }}" rel="stylesheet"/>

    <link href="{{ asset("/css/ui.jqgrid.css") }}" rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset("/css/ace.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("/css/ace-rtl.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("/css/ace-skins.min.css") }}" />
    <script src="{{ asset("/js/client.js") }}"></script>
    <script src="{{ asset("/js/savehelp.js") }}"></script>
    <link rel="stylesheet" href="{{ asset("/js/ace-ie.min.css") }}" />
    <script src="{{ asset("/js/ace-extra.min.js") }}"></script>
    <script src="{{ asset("/js/html5shiv.js") }}"></script>
    <script src="{{ asset("/js/respond.min.js") }}"></script>

    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>

    <!-- ace styles -->
    <script src="{{ asset("/js/jquery-1.7.2.min.js") }}" type="text/javascript">
    </script>
    <script type="text/javascript" src="{{ asset("/js/autoNumeric.js") }}">
    </script>
    <script type="text/javascript">
        jQuery(function ($) {
            $('.check1').focus(function () {
                $('.check1').autoNumeric();
            });
        });
    </script>



    <script type="text/javascript">
        $(document).ready(function () {
            //初始化设备信息
            var $option1 = $("<option></option>");
            $option1.attr("value", "");
            $option1.text("请选择");
            $("#deviceno").append($option1);

            //alert(document.getElementById(material_name1).innerHTML);
            var device_num = parseInt({!! session("device_num") !!});
            for (var i = 1; i <= device_num; i++) {
                var $option = $("<option></option>");
                $option.attr("value", i);
                $option.text("" + i + "号设备");
                $("#deviceno").append($option);
            }
            var deviceNo = {!! $raw_temp["device_no"] or 0 !!};
            alert(deviceNo);
            if (deviceNo != 0) {
                $("#deviceno option[value='" + deviceNo + "']").attr("selected", true);
            }
                $('#m_alert').hide();




                document.getElementById("NO").innerHTML = "<b>" + {!! $NUM !!}
                    + "号原料</b>";

            });
    </script>

    <script type="text/javascript">
        function cjdetele() {
            var cjexfid = document.getElementById("mId").value;
            if (cjexfid == "" || cjexfid == null) {
                cjexfid = -1;
            }
            $.post("ajax/DeviceRawTemp/cjdetele.do", {
                cjexfid: cjexfid
            }, function (data) {
                var json = eval("(" + data + ")");
                //alert(json.sys_code);
                alert(json.value);
                if (json.suc == 1) {
                    jumptopage(json.nub);
                }

            });


        }
        //这个其他页面没有，只有本页面有
        function jumpsave(source) {
            var m_alert = parseInt(document.getElementById("malert").value);
            if (m_alert == 0) {
                m_alert = '${alert}';
            }
            return jumpandsave(source, 'procedure', m_alert);
        }
        /*	 function mychecked(name_name,name_input){
         var svalue=document.getElementById(name_input).value;
         // alert(svalue);
         var array_dust=new Array(1,2,3,4,5,6,7,8,9,10);
         var array_sulfur=new Array("s1","s2","s3","s4","s5","s6");
         var array_nitre=new Array("n1");
         var strs= new Array(); //定义一数组
         strs=svalue.split(","); //字符分割
         //alert(name_name);
         if("dust"==name_name){
         for(var i=0;i<strs.length;i++){
         if(find(strs[i],array_dust)){
         var aname_name=name_name+'_'+strs[i];
         document.getElementById(aname_name).checked=1;
         }
         }
         }
         if("sulfur"==name_name){
         for(var i=0;i<strs.length;i++){
         if(find(strs[i],array_sulfur)){
         var aname_name=name_name+'_'+strs[i];
         document.getElementById(aname_name).checked=1;
         }
         }
         }
         if("nitre"==name_name){
         // alert(strs[i]);
         for(var i=0;i<strs.length;i++){
         if(find(strs[i],array_nitre)){
         var aname_name=name_name+'_'+strs[i];
         document.getElementById(aname_name).checked=1;
         }
         }
         }

         }*/
        /*	function find(name,array_name){

         for(var i=0;i<array_name.length;i++){

         if(name==array_name[i])
         {
         return true;
         }
         }
         return false;
         }*/
        //这个其他的页面没有只有本页面有
        /*function checksboxchecked(e,name,tagername){
         var check_val=document.getElementById(name).value;
         var targer_val=document.getElementById(tagername).value;
         if(e.checked==1){

         if(targer_val==''){
         targer_val=check_val;
         }else{
         targer_val=targer_val+","+check_val;
         var strs= new Array(); //定义一数组
         strs=targer_val.split(","); //字符分割
         if(tagername=="dust_input"){
         strs.sort(function(v1,v2){
         if(parseInt(v1)<parseInt(v2)){
         return -1;

         }else if(parseInt(v1)==parseInt(v2)){
         return 0;
         }
         else if(parseInt(v1)>parseInt(v2)){
         return 1;
         }
         });
         }else{
         strs.sort();
         }
         targer_val=strs.join();
         }

         }else{


         var laocation=targer_val.indexOf(check_val);
         if(laocation==0){
         if(targer_val.indexOf(',')<0){
         targer_val=0;
         }
         else{
         targer_val=targer_val.substr(check_val.length+1,targer_val.length-check_val.length-1);
         }

         }else{
         var start=laocation+check_val.length;
         //	alert(targer_val.substr(0,laocation-1));
         //alert(start);
         //alert(targer_val.substr(start,targer_val.length-start));
         var newtarger_val=targer_val.substr(0,laocation-1)+targer_val.substr(start,targer_val.length-start);
         targer_val=newtarger_val;
         }
         //alert(laocation);


         }

         document.getElementById(tagername).value=targer_val;
         }*/
        //跳转到
        function jumptopage(page) {

            $.post("ajax/TotalProductrawTemp/savepagejump.do", {
                cjnub: page
            }, function (data) {
                var json = eval("(" + data + ")");
                //alert(json.sys_code);
                //如果是0说明是工厂信息的页面否则是设备信息的页面
                if (json.sys_code == "suc") {
                    //如果是0说明是工厂信息的页面否则是设备信息的页面
                    if (page == 0 || page == 100 || page == 200) {
                        window.location.href = "";

                    } else if (page > 0 && page < 100) {
                        window.location.href = "";
                    } else if (page > 200) {
                        window.location.href = "";
                    }
                    else {
                        window.location.href = "";
                    }
                }
            });
        }
        function cancel() {
            // 表示当前页是新添加的页，若取消了本页将被删除，总页面数-1

            //获取当前页
            var newpage = parseInt('${newdevice}');
            var m_pages = parseInt(document.getElementById("page").value);
            var total = parseInt('${totaldevice.rawNum}');

            if (newpage == 1) {
                var number = parseInt('${totaldevice.rawNum}') - 1;
                if (window.confirm(alertnew)) {
                    $.post("ajax/TotalProductrawTemp/savetotalraw.do", {
                        totalraw: number,
                        newdevice: 0
                    }, function (data) {
                    });
                    /* if(m_pages<=1){
                     window.location.href="client/stationary/complanyinfo.jsp";
                     }*/

                    jumptopage(m_pages - 1);
                } else {
                    return;
                }
            } else {
                if (window.confirm(alertold)) {
                    var m_pages = parseInt(document.getElementById("page").value);
                    jumptopage(m_pages - 1);
                } else {
                    return;
                }
            }

        }
        function testselected(myselect, inputval) {
            var val = document.getElementById(inputval).value;

            $("#" + myselect + " option[value='" + val + "']").attr("selected", true);
        }
        function next() {
            var m_pages = parseInt(document.getElementById("page").value);
            addsaveinfo(m_pages + 1, 'product');
        }
        function pre() {

            var m_pages = parseInt(document.getElementById("page").value);
            //alert(m_pages);
            addsaveinfo(m_pages - 1, 'product');

        }
        function ischanged(name) {
            document.getElementById("malert").value = 1;
            $('#m_alert').show();
        }
        //验证填写的值不为空，且是有效的数据
        //若是空值或者无效将对于填写框标红，且该填写框获得焦点并提示用户
        //人性化提示用户，您有数据没有提交到数据库，填写完成，请提交数据再关闭浏览器。
        //增加放弃填写按钮
        function funalert(name, content, witch) {
            var m_value = document.getElementById(name).value;

            //var m_value = document.getElementById(name).value;
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
        function checkvalue(witch) {
            //验证包括的填写的值是
            var ids = new Array("activitiesCategory", "nameCategory",
                "drainageProcess", "uint", "annualOutput", "janUseamount", "febUseamount", "marUseamount", "aprUseamount", "mayUseamount", "juneUseamount", "julyUseamount", "augUseamount", "septUseamount", "octUseAmount", "novUseamount", "decUseamount");
            var contents = new Array("生产活动类别", "原料名称/类别", "生产/排污工艺", "计量单位", "年使用量",
                "原料1月份使用量", "原料2月份使用量", "原料3月份使用量", "原料4月份使用量", "原料5月份使用量", "原料6月份使用量", "原料7月份使用量", "原料8月份使用量", "原料9月份使用量", "原料10月份使用量", "原料11月份使用量", "原料12月份使用量");
            for (var i = 0; i < ids.length; i++) {
                var result = funalert(ids[i], contents[i], witch);
                //判断是否数据是否有效，如果无效返回无效处理数字
                if (result != 2) {
                    return result;
                    break;
                }

            }
            //生产活动类别a	产品名称/类别b	产品备注c	生产/排污工艺d	计量单位e	年使用量	对应装置编号
            return 2;

        }
    </script>
    <script type="text/javascript">

        function updatedata() {

            if (checkvalue(1) != 2) {

                return;
            }
            var malert = document.getElementById("malert").value;
            if (malert == 0) {
                alert("提交数据库成功!");
                return;
            }
            //var isrongji=document.getElementById("isrongji").value;
            var name = document.getElementById("name").value;
            var scc2 = document.getElementById("activitiesCategory").value;
            var scc2Dec = $("#activitiesCategory").find("option:selected").text();
            /*if(scc2==""){
             scc2 = document.getElementById("activitiesCategory1").value;
             scc2Dec=$("#activitiesCategory1").find("option:selected").text();
             }
             */
            var usage = document.getElementById("annualOutput").value;
            var unit = document.getElementById("uint").value;
            var scc4 = document.getElementById("drainageProcess").value;
            var scc4Dec = $("#drainageProcess").find("option:selected").text();

            var scc3 = document.getElementById("nameCategory").value;
            var scc3Dec = $("#nameCategory").find("option:selected").text();
            ///alert(scc3+"三级");
            //alert(scc3Dec)
            var deviceNo = document.getElementById("deviceno").value;
            var m_pages = parseInt(document.getElementById("page").value);
            var janUseamount = document.getElementById("janUseamount").value;

            var febUseamount = document.getElementById("febUseamount").value;
            var marUseamount = document.getElementById("marUseamount").value;
            var aprUseamount = document.getElementById("aprUseamount").value;
            var mayUseamount = document.getElementById("mayUseamount").value;
            var juneUseamount = document.getElementById("juneUseamount").value;
            var julyUseamount = document.getElementById("julyUseamount").value;

            var augUseamount = document.getElementById("augUseamount").value;
            var septUseamount = document.getElementById("septUseamount").value;

            var octUseAmount = document.getElementById("octUseAmount").value;
            var novUseamount = document.getElementById("novUseamount").value;
            var decUseamount = document.getElementById("decUseamount").value;
            var gasNo = document.getElementById("gasNo").value;
            var gasPre = document.getElementById("gasPre").value;
            var gasVocs = document.getElementById("gasVocs").value;
            var treatPre = document.getElementById("treatPre").value;
            var treatNo = document.getElementById("treatNo").value;

            var cjnub = m_pages;//表示保存设备m_pages
            //alert(unit)
            $.post("ajax/DeviceRawTemp/updatedb.do", {
                isnew: 0,
                janUseamount: janUseamount,
                febUseamount: febUseamount,
                marUseamount: marUseamount,
                aprUseamount: aprUseamount,
                mayUseamount: mayUseamount,
                juneUseamount: juneUseamount,
                julyUseamount: julyUseamount,
                augUseamount: augUseamount,
                septUseamount: septUseamount,
                octUseAmount: octUseAmount,
                novUseamount: novUseamount,
                decUseamount: decUseamount,
                gasNo: gasNo,
                gasPre: gasPre,
                gasVocs: gasVocs,
                treatNo: treatNo,
                treatPre: treatPre,
                mname: name,
                scc2: scc2,
                scc2Dec: scc2Dec,
                scc3Dec: scc3Dec,
                scc4Dec: scc4Dec,
                deviceNo: deviceNo,
                scc3: scc3,
                musage: usage,
                unit: unit,
                scc4: scc4,
                nkNo: cjnub,
                cjnub: cjnub
            }, function (data) {
                var json = eval("(" + data + ")");
                //alert(json.sys_code);
                if (json.sys_code == "suc") {

                    alert("提交数据库成功!");
                    document.getElementById("malert").value = 0;
                    $('#m_alert').hide();
                    window.location.reload();
                }
            });
        }
        /**响应菜单的函数
         * page 表示跳转到第几页，0表示工厂信息页，1表示设备一，2表示设备二
         * CAIJUN
         * 2015/5/24
         * */
        function addsaveinfo(page, source) {
            if (checkvalue(1) != 2) {

                return;
            }
            /*  var malert=document.getElementById("malert").value;
             if(malert==0){
             alert("提交数据库成功!");
             return;
             }*/
            //var isrongji=document.getElementById("isrongji").value;
            var name = document.getElementById("name").value;
            var scc2 = document.getElementById("activitiesCategory").value;

            var scc2Dec = $("#activitiesCategory").find("option:selected").text();
            var usage = document.getElementById("annualOutput").value;
            var unit = document.getElementById("uint").value;
            var scc4 = document.getElementById("drainageProcess").value;
            var scc4Dec = $("#drainageProcess").find("option:selected").text();

            var scc3 = document.getElementById("nameCategory").value;
            var scc3Dec = $("#nameCategory").find("option:selected").text();
            var deviceNo = document.getElementById("deviceno").value;
            var m_pages = parseInt(document.getElementById("page").value);
            var cjnub = m_pages;//表示保存设备m_pages
            var janUseamount = document.getElementById("janUseamount").value;
            var febUseamount = document.getElementById("febUseamount").value;
            var marUseamount = document.getElementById("marUseamount").value;
            var aprUseamount = document.getElementById("aprUseamount").value;
            var mayUseamount = document.getElementById("mayUseamount").value;
            var juneUseamount = document.getElementById("juneUseamount").value;
            var julyUseamount = document.getElementById("julyUseamount").value;

            var augUseamount = document.getElementById("augUseamount").value;
            var septUseamount = document.getElementById("septUseamount").value;

            var octUseAmount = document.getElementById("octUseAmount").value;
            var novUseamount = document.getElementById("novUseamount").value;
            var decUseamount = document.getElementById("decUseamount").value;
            var gasNo = document.getElementById("gasNo").value;
            var gasPre = document.getElementById("gasPre").value;
            var gasVocs = document.getElementById("gasVocs").value;
            var treatPre = document.getElementById("treatPre").value;
            var treatNo = document.getElementById("treatNo").value;
            $.post("ajax/DeviceRawTemp/updatedb.do", {
                scc2Dec: scc2Dec,
                scc3Dec: scc3Dec,
                scc4Dec: scc4Dec,
                mname: name,
                isnew: 1,
                scc2: scc2,
                deviceNo: deviceNo,
                scc3: scc3,
                musage: usage,
                unit: unit,
                scc4: scc4,
                nkNo: cjnub,
                cjnub: cjnub,
                janUseamount: janUseamount,
                febUseamount: febUseamount,
                marUseamount: marUseamount,
                aprUseamount: aprUseamount,
                mayUseamount: mayUseamount,
                juneUseamount: juneUseamount,
                julyUseamount: julyUseamount,
                augUseamount: augUseamount,
                septUseamount: septUseamount,
                octUseAmount: octUseAmount,
                novUseamount: novUseamount,
                decUseamount: decUseamount,
                gasPre: gasPre,
                gasVocs: gasVocs,
                treatNo: treatNo,
                treatPre: treatPre
            }, function (data) {
                var json = eval("(" + data + ")");
                //alert(json.sys_code);
                if (json.sys_code == "suc") {

                    alert("提交数据库成功!");
                    document.getElementById("malert").value = 0;
                    $('#m_alert').hide();
                    saveinfo(page, source, 'product', m_alert);
                }
            });

        }
    </script>
</head>
<style type="text/css">
    .page-header h1 {
        padding: 0;
        margin: 0 8px;
        font-size: 24px;
        font-weight: lighter;
        color: #32B16C;
    }

    .page-header h1 small {
        margin: 0 6px;
        font-size: 14px;
        font-weight: normal;
        color: #32B16C;
    }
</style>
<body>
@include("layouts.header")


<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#"> <span
                    class="menu-text"></span> </a>
        @include("layouts.leftnav")

        <div class="main-content">
            <div id="m_alert">
                <ul class="breadcrumb">
                    <li>
                        <a style="color: red" type="hidden">
                            您有数据没有提交到数据库，填写完成，请提交数据再关闭浏览器。</a>
                    </li>
                </ul>
                <!-- .breadcrumb -->
            </div>
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try {
                        ace.settings.check('breadcrumbs', 'fixed')
                    } catch (e) {
                    }
                </script>


                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="#">${item.factoryName}</a>
                    </li>

                    <li>
                        工艺原料信息
                    </li>
                </ul>
                <!-- .breadcrumb -->
            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        <b>企业信息</b>
                        <small><i class="icon-double-angle-right"></i> 概要信息</small>
                    </h1>
                </div>
                <!-- /.page-header -->

                @include("layouts.public_com")


                <div class="page-header" style="margin-top: 20px;">
                    <h1>
                        <b id="NO"></b>

                        <small><i class="icon-double-angle-right"></i> <b>基础信息</b>
                        </small>
                    </h1>
                    <h3 style="color: red">本页面未填报完成，不能保存和填报下一个页面</h3>
                </div>
                <!-- /.page-header -->

                <div class="row" style="height: 11px;">
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right""
                                for="activitiesCategory">
                                生产活动类别<a style="color: red;">*</a>
                                </label>
                                <input type="hidden" name="activitiesCategory_input"
                                       id="activitiesCategory_input"
                                       value='${cur_device.scc2}'/>

                                <div class="col-md-8">

                                    <select id="activitiesCategory"
                                            style="width: 300px;"

                                            Onchange="clientscc3('11',this.value,'nameCategory','drainageProcess')"/>
                                    </select>
                                    <!--  a class="col-md-1" style="color: red;">*</a>-->
                                </div>


                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="nameCategory">
                                    原料名称/类别<a style="color: red;">*</a>
                                </label>
                                <input type="hidden" name="nameCategory_input"
                                       id="nameCategory_input" value='${cur_device.scc3}'/>


                                <div class="col-md-8">
                                    <select id="nameCategory"
                                            style="width: 300px;"
                                            Onchange="clientscc4('11','activitiesCategory',this.value,'drainageProcess')"/>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="drainageProcess">
                                    生产/排污工艺<a style="color: red;">*</a>

                                </label>
                                <input type="hidden" name="drainageProcess_input"
                                       id="drainageProcess_input"
                                       value='${cur_device.scc4}'/>

                                <div class="col-md-8">
                                    <select id="drainageProcess"
                                            style="width: 300px"/>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="name">
                                    原料备注
                                </label>

                                <div class="col-md-8">
                                    <input type="text" id="name" value="${cur_device.mname}"
                                           Onchange="ischanged('deviceFlow')" style="width: 300px;"/>

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="annualOutput">
                                    年使用量<a style="color: red;">*</a>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="annualOutput" id="annualOutput" class="check1"
                                           alt="p8x3p4s"
                                           value="${cur_device.musage}" style="width:300px;"
                                           Onchange="ischanged('deviceFlow')"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','annualOutput')"
                                    />

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="uint">
                                    计量单位<a style="color: red;">*</a>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="uint" value="${cur_device.unit}"
                                           Onchange="ischanged('uint')" style="width: 300px;"/>

                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="deviceno">
                                    对应装置编号<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <select class="col-md-10 " id="deviceno"

                                            Onchange="ischanged('deviceno')" style="width: 300px;">

                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    集气设施编号
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.gasNo}" type="text"
                                           id="gasNo" maxlength="15"
                                           style="width: 300px;" Onchange="ischanged('deviceFlow')"
                                    />

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    集气效率(%)
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.gasPre}" type="text" class="check1" alt="p2x3p2s"
                                           id="gasPre" Onchange="ischanged('deviceFlow')"
                                           style="width: 300px;"
                                    />

                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原辅料VOCs含量(%)
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.gasVocs}" type="text" class="check1" alt="p2x3p2s"
                                           id="gasVocs" Onchange="ischanged('deviceFlow')"
                                           style="width: 300px;"
                                    />

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    治理设施编号
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.treatNo}" type="text"
                                           id="treatNo" Onchange="ischanged('deviceFlow')"
                                           style="width: 300px;"
                                    />

                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    治理设施VOCs去除率(%)
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.treatPre}" type="text" class="check1" alt="p2x3p2s"
                                           id="treatPre" Onchange="ischanged('deviceFlow')"
                                           style="width: 300px;"
                                    />

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12" style="height:30px;font-size:15px">
                        <a style="color: red;">原料月份使用量的单位和原料总使用量单位一致</a>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原料一月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.janUseamount}" type="text"
                                           id="janUseamount" class="check1" alt="p6x3p4s"
                                           Onchange="ischanged('deviceFlow')"
                                           style="height: 25px; margin-top: 3px; width: 170px;"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','janUseamount')"
                                    />

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原料二月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.febUseamount}" type="text"
                                           id="febUseamount" class="check1" alt="p6x3p4s"
                                           style="height: 25px; margin-top: 3px; width: 170px;"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('deviceFlow')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','febUseamount')"
                                    />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原料三月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.marUseamount}" type="text"
                                           id="marUseamount" class="check1" alt="p6x3p4s"
                                           style="height: 25px; margin-top: 3px; width: 170px;"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('deviceFlow')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','marUseamount')"
                                    />

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原料四月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.aprUseamount}" type="text"
                                           id="aprUseamount" class="check1" alt="p6x3p4s"
                                           style="height: 25px; margin-top: 3px; width: 170px;"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('deviceFlow')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','aprUseamount')"
                                    />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原料五月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.mayUseamount}" type="text"
                                           id="mayUseamount" class="check1" alt="p6x3p4s"
                                           style="height: 25px; margin-top: 3px; width: 170px;"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('deviceFlow')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','mayUseamount')"
                                    />

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原料六月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.juneUseamount}" type="text"
                                           id="juneUseamount" class="check1" alt="p6x3p4s"
                                           style="height: 25px; margin-top: 3px; width: 170px;"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('deviceFlow')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','juneUseamount')"
                                    />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原料七月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.julyUseamount}" type="text"
                                           id="julyUseamount" class="check1" alt="p6x3p4s"
                                           style="height: 25px; margin-top: 3px; width: 170px;"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('deviceFlow')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','julyUseamount')"
                                    />

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原料八月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.augUseamount}" type="text"
                                           id="augUseamount" class="check1" alt="p6x3p4s"
                                           style="height: 25px; margin-top: 3px; width: 170px;"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('deviceFlow')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','augUseamount')"
                                    />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原料九月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.septUseamount}" type="text"
                                           id="septUseamount" class="check1" alt="p6x3p4s"
                                           style="height: 25px; margin-top: 3px; width: 170px;"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('deviceFlow')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','septUseamount')"
                                    />

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原料十月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.octUseAmount}" type="text"
                                           id="octUseAmount" class="check1" alt="p6x3p4s"
                                           style="height: 25px; margin-top: 3px; width: 170px;"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('deviceFlow')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','octUseAmount')"
                                    />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原料十一月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.novUseamount}" type="text"
                                           id="novUseamount" class="check1" alt="p6x3p4s"
                                           style="height: 25px; margin-top: 3px; width: 170px;"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('deviceFlow')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','novUseamount')"
                                    />

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    原料十二月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="${cur_device.decUseamount}" type="text"
                                           id="decUseamount" class="check1" alt="p6x3p4s"
                                           style="height: 25px; margin-top: 3px; width: 170px;"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('deviceFlow')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           onblur="sumall('annualOutput','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','decUseamount')"
                                    />

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="margin: 0 auto; text-align:center ">
                        <div class="col-xs-12">
                            <!--  img  border="0" src="img/btn1.png" style="margin-left:60px;" /-->

                            <!--  img  border="0" src="img/btn2.png" style="margin-left:100px;" /-->
                            <ul class="pager">
                                <li class="col-md-3">
                                    <a href="javascript:void(0);" id="prepage" style="font-weight:bold;"
                                       onclick="pre();">&larr;
                                        填报上一个</a>
                                </li>
                                <div class="col-md-3">
                                    <li>
                                        <a href="javascript:void(0);" style="font-weight:bold;" onclick="updatedata();">保存</a>
                                    </li>
                                </div>
                                <div class="col-md-3">
                                    <li>
                                        <a href="javascript:void(0);" style="font-weight:bold;" onclick="cancel();">放弃当前页面</a>
                                    </li>
                                </div>
                                <li class="col-md-3">
                                    <a href="javascript:void(0);" style="font-weight:bold;" id="nextpage"
                                       onclick="next();">填报下一个 &rarr;</a>
                                </li>
                                <input type="hidden" name="page" id="page">
                                <input type="hidden" name="newpage" id="newpage">
                                <input type="hidden" name="malert" id="malert" value='0'>
                                @include("layouts.delete")
                                <input type="hidden" name="mId" id="mId" value='${cur_device.id}'>
                            </ul>


                        </div>
                        @include("layouts.public_end")
                    </div>
                </div>


            </div>
            <!-- /.page-content -->
        </div>
        <!-- /.main-content -->


    </div>
    <!-- /.main-container-inner -->


</div>
<!-- /.main-container -->


</div>
<!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->


<!-- <![endif]-->


<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery
    || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<"
        + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>" + "<" + "/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<"
            + "/script>");
</script>
<script src="{{ asset("/js/jquery-ui-1.10.3.custom.min.js") }}"></script>

<script src="{{ asset("/js/jquery.ui.touch-punch.min.js") }}"></script>

<script src="{{ asset("/js/chosen.jquery.min.js") }}"></script>

<script src="{{ asset("/js/fuelux/fuelux.spinner.min.js") }}"></script>

<script src="{{ asset("/js/date-time/bootstrap-datepicker.min.js") }}"></script>

<script src="{{ asset("/js/date-time/bootstrap-timepicker.min.js") }}"></script>

<script src="{{ asset("/js/date-time/moment.min.js") }}"></script>

<script src="{{ asset("/js/date-time/daterangepicker.min.js") }}"></script>

<script src="{{ asset("/js/bootstrap-colorpicker.min.js") }}"></script>

<script src="{{ asset("/js/jquery.knob.min.js") }}"></script>

<script src="{{ asset("/js/jquery.autosize.min.js") }}"></script>

<script src="{{ asset("/js/jquery.inputlimiter.1.3.1.min.js") }}"></script>

<script src="{{ asset("/js/jquery.maskedinput.min.js") }}"></script>

<script src="{{ asset("/js/bootstrap-tag.min.js") }}"></script>

<!-- ace scripts -->


<script src="{{ asset("/js/ace-elements.min.js") }}"></script>

<script src="{{ asset("/js/ace.min.js") }}"></script>

<!-- inline scripts related to this page -->

<script type="text/javascript">
    jQuery(function ($) {
        $('#id-disable-check').on('click', function () {
            var inp = $('#form-input-readonly').get(0);
            if (inp.hasAttribute('disabled')) {
                inp.setAttribute('readonly', 'true');
                inp.removeAttribute('disabled');
                inp.value = "This text field is readonly!";
            }
            else {
                inp.setAttribute('disabled', 'disabled');
                inp.removeAttribute('readonly');
                inp.value = "This text field is disabled!";
            }
        });


        $(".chosen-select").chosen();
        $('#chosen-multiple-style').on('click', function (e) {
            var target = $(e.target).find('input[type=radio]');
            var which = parseInt(target.val());
            if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
            else $('#form-field-select-4').removeClass('tag-input-style');
        });


        $('[data-rel=tooltip]').tooltip({container: 'body'});
        $('[data-rel=popover]').popover({container: 'body'});

        $('textarea[class*=autosize]').autosize({append: "\n"});
        $('textarea.limited').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });

        $.mask.definitions['~'] = '[+-]';
        $('.input-mask-date').mask('99/99/9999');
        $('.input-mask-phone').mask('(999) 999-9999');
        $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        $(".input-mask-product").mask("a*-999-a999", {
            placeholder: " ", completed: function () {
                alert("You typed the following: " + this.val());
            }
        });


        $("#input-size-slider").css('width', '200px').slider({
            value: 1,
            range: "min",
            min: 1,
            max: 8,
            step: 1,
            slide: function (event, ui) {
                var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                var val = parseInt(ui.value);
                $('#form-field-4').attr('class', sizing[val]).val('.' + sizing[val]);
            }
        });

        $("#input-span-slider").slider({
            value: 1,
            range: "min",
            min: 1,
            max: 12,
            step: 1,
            slide: function (event, ui) {
                var val = parseInt(ui.value);
                $('#form-field-5').attr('class', 'col-xs-' + val).val('.col-xs-' + val);
            }
        });


        $("#slider-range").css('height', '200px').slider({
            orientation: "vertical",
            range: true,
            min: 0,
            max: 100,
            values: [17, 67],
            slide: function (event, ui) {
                var val = ui.values[$(ui.handle).index() - 1] + "";

                if (!ui.handle.firstChild) {
                    $(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
                }
                $(ui.handle.firstChild).show().children().eq(1).text(val);
            }
        }).find('a').on('blur', function () {
            $(this.firstChild).hide();
        });

        $("#slider-range-max").slider({
            range: "max",
            min: 1,
            max: 10,
            value: 2
        });

        $("#eq > span").css({width: '90%', 'float': 'left', margin: '15px'}).each(function () {
            // read initial values from markup and remove that
            var value = parseInt($(this).text(), 10);
            $(this).empty().slider({
                value: value,
                range: "min",
                animate: true

            });
        });


        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file: 'No File ...',
            btn_choose: 'Choose',
            btn_change: 'Change',
            droppable: false,
            onchange: null,
            thumbnail: false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });

        $('#id-input-file-3').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'icon-cloud-upload',
            droppable: true,
            thumbnail: 'small'//large | fit
            //,icon_remove:null//set null, to hide remove/reset button
            /**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
            /**,before_remove : function() {
						return true;
					}*/
            ,
            preview_error: function (filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }

        }).on('change', function () {
            //console.log($(this).data('ace_input_files'));
            //console.log($(this).data('ace_input_method'));
        });


        //dynamically change allowed formats by changing before_change callback function
        $('#id-file-format').removeAttr('checked').on('change', function () {
            var before_change
            var btn_choose
            var no_icon
            if (this.checked) {
                btn_choose = "Drop images here or click to choose";
                no_icon = "icon-picture";
                before_change = function (files, dropped) {
                    var allowed_files = [];
                    for (var i = 0; i < files.length; i++) {
                        var file = files[i];
                        if (typeof file === "string") {
                            //IE8 and browsers that don't support File Object
                            if (!(/\.(jpe?g|png|gif|bmp)$/i).test(file)) return false;
                        }
                        else {
                            var type = $.trim(file.type);
                            if (( type.length > 0 && !(/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
                                || ( type.length == 0 && !(/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
                            ) continue;//not an image so don't keep this file
                        }

                        allowed_files.push(file);
                    }
                    if (allowed_files.length == 0) return false;

                    return allowed_files;
                }
            }
            else {
                btn_choose = "Drop files here or click to choose";
                no_icon = "icon-cloud-upload";
                before_change = function (files, dropped) {
                    return files;
                }
            }
            var file_input = $('#id-input-file-3');
            file_input.ace_file_input('update_settings', {
                'before_change': before_change,
                'btn_choose': btn_choose,
                'no_icon': no_icon
            })
            file_input.ace_file_input('reset_input');
        });


        $('#spinner1').ace_spinner({
            value: 0,
            min: 0,
            max: 200,
            step: 10,
            btn_up_class: 'btn-info',
            btn_down_class: 'btn-info'
        })
            .on('change', function () {
                //alert(this.value)
            });
        $('#spinner2').ace_spinner({
            value: 0,
            min: 0,
            max: 10000,
            step: 100,
            touch_spinner: true,
            icon_up: 'icon-caret-up',
            icon_down: 'icon-caret-down'
        });
        $('#spinner3').ace_spinner({
            value: 0,
            min: -100,
            max: 100,
            step: 10,
            on_sides: true,
            icon_up: 'icon-plus smaller-75',
            icon_down: 'icon-minus smaller-75',
            btn_up_class: 'btn-success',
            btn_down_class: 'btn-danger'
        });


        $('.date-picker').datepicker({autoclose: true}).next().on(ace.click_event, function () {
            $(this).prev().focus();
        });
        $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function () {
            $(this).next().focus();
        });

        $('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false
        }).next().on(ace.click_event, function () {
            $(this).prev().focus();
        });

        $('#colorpicker1').colorpicker();
        $('#simple-colorpicker-1').ace_colorpicker();


        $(".knob").knob();


        //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
        var tag_input = $('#form-field-tags');
        if (!( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()))) {
            tag_input.tag(
                {
                    placeholder: tag_input.attr('placeholder'),
                    //enable typeahead by specifying the source array
                    source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
                }
            );
        }
        else {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
            //$('#form-field-tags').autosize({append: "\n"});
        }


        /////////
        $('#modal-form input[type=file]').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'icon-cloud-upload',
            droppable: true,
            thumbnail: 'large'
        })

        //chosen plugin inside a modal will have a zero width because the select element is originally hidden
        //and its width cannot be determined.
        //so we set the width after modal is show
        $('#modal-form').on('shown.bs.modal', function () {
            $(this).find('.chosen-container').each(function () {
                $(this).find('a:first-child').css('width', '210px');
                $(this).find('.chosen-drop').css('width', '210px');
                $(this).find('.chosen-search input').css('width', '200px');
            });
        })
        /**
         //or you can activate the chosen plugin after modal is shown
         //this way select element becomes visible with dimensions and chosen works as expected
         $('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
         */

    });
</script>

<script type="text/javascript">
    $("#device").toggle();
    $("#rawul").toggle();
    //document.getElementById("kilninfo").setAttribute("class","active");

</script>
<div style="display: none">
    <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540'
            language='JavaScript' charset='gb2312'>
    </script>
</div>
</body>
</html>
