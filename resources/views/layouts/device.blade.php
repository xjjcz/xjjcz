<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
    <title>工艺过程-设备信息</title>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
    <!-- basic styles -->
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

    <link rel="stylesheet" href="{{ asset("/css/ace.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/ace-rtl.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/ace-skins.min.css") }}"/>
    <script src="{{ asset("/js/client.js") }}">
    </script>
    <script src="{{ asset("/js/savehelp.js") }}">
    </script>

    <link rel="stylesheet" href="{{ asset("/js/ace-ie.min.css") }}"/>


    <script src="{{ asset("/js/ace-extra.min.js") }}">
    </script>


    <script src="{{ asset("/js/html5shiv.js") }}"></script>
    <script src="{{ asset("/js/respond.min.js") }}"></script>

    <!-- fonts -->

    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>

    <!-- ace styles -->
    <script src="{{ asset("/js/jquery-1.7.2.min.js") }}" type="text/javascript">
    </script>
    <script type="text/javascript" src="{{ asset("/js/autoNumeric.js") }}">
    </script>
    <script src="{{ asset("/js/checkhelp.js") }}"></script>
    <script src="{{ asset("/js/schelp.js") }}"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $('.check2').focus(function () {
                $('.check2').autoNumeric();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            //alert(document.getElementById(material_name1).innerHTML);
            var exhaust_temps = {!! json_encode(session("exhaust_temps"))  !!};

            var exf_no = exhaust_temps.length;
            var $option1 = $("<option></option>");
            $option1.attr("value", "");
            $option1.text("请选择");
            $("#mchimney").append($option1);
            //	var json = eval("(" + data + ")");
            for (var i = 1; i <= exf_no; i++) {
                var $option = $("<option></option>");
                $option.attr("value", i);
                $option.text("烟囱" + i + "号");
                $("#mchimney").append($option);
            }

            var nkNo = {{ $device_temp["EXHUST_NO"] or 0 }};
            if (nkNo != 0) {
                $("#mchimney option[value='" + nkNo + "']").attr("selected", true);
            }
            exhaustModel();
            var page = '${page_device}';
            document.getElementById("NO").innerHTML = "<b>" + page + "号设备</b>";
            document.getElementById("page").value = page
            $('#m_alert').hide();
            //document.getElementById("newpage").value = json.newpage;
            //alert(fkilnUseful);z
            //	clientscccj4('10', fkilnUseful, fuelType, 'model')

            //select元素的内容加载

            //testselected("mchimney","mchimney_input");

            //testselected("activity_meas","activity_meas_input");
            //从后台得到是否更改的按钮信息，若更改提示信息，否则不显示


            // 如果当前页面是最后一页，下一步不显示
            if (parseInt(page) == parseInt('${totaldevice.deviceNum}')) {
                $('#nextpage').hide();
                $('#detelepage').show();
                var newpage = parseInt('${newdevice}');
                if (newpage == 1) {
                    $('#detelepage').hide();
                } else {
                    $('#detelepage').show();
                }
            } else {
                //nextpage.show();
                $('#nextpage').show();
                $('#detelepage').hide();
            }
            if (parseInt(page) == 1) {
                $('#prepage').hide();
            } else {
                //nextpage.show();
                $('#prepage').show();
            }

            //alert("pages:"+json.page);
            //加载当前页面设备的信息到cursolventequ中去
        });
        function cjdetele() {
            var cjexfid = document.getElementById("mId").value;
            if (cjexfid == "" || cjexfid == null) {
                cjexfid = -1;
            }
            $.post("ajax/DeviceTemp/cjdetele.do", {
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
    </script>

    <script type="text/javascript">
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
            $.post("ajax/DeviceTemp/savepagejump.do", {
                cjnub: page
            }, function (data) {
                var json = eval("(" + data + ")");
                //alert(json.sys_code);
                if (json.sys_code == "suc") {
                    //如果是0说明是工厂信息的页面否则是设备信息的页面
                    if (page == 0) {
                        window.location.href = "";


                    } else {
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

            var total = parseInt('${totaldevice.deviceNum}');

            if (newpage == 1) {
                var number = parseInt('${totaldevice.deviceNum}') - 1;
                if (window.confirm('你确定要取消当前操作吗？若确定，当前页面填写数据将丢失，新增页面将删除。')) {
                    $.post("ajax/TotalProductrawTemp/savetotalpage.do", {
                        totalpage: number,
                        newdevice: 0
                    }, function (data) {
                    });


                    jumptopage(m_pages - 1);
                } else {
                    return;
                }
            } else {
                if (window.confirm('你确定要取消当前操作吗？若确定，当前页面填写数据将丢失。')) {
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
            var ids = new Array("name", "deviceFlow", "designPower",
                "practicalPower", "designUnit", "yearrunDays");
            var contents = new Array("生产装置名称", "主要工艺流程", "设计生产能力", "年生产能力", "年生产能力单位",
                "全年运行天数");
            for (var i = 0; i < ids.length; i++) {
                var result = funalert(ids[i], contents[i], witch);

                //判断是否数据是否有效，如果无效返回无效处理数字
                if (result != 2) {
                    return result;
                    break;
                }

            }
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
            var exhustNo = document.getElementById("mchimney").value;
            //alert(exhustNo);
            var name = document.getElementById("name").value;
            var deviceNo = document.getElementById("deviceNo").value;
            var deviceFlow = document.getElementById("deviceFlow").value;
            var designPower = document.getElementById("designPower").value;
            var practicalPower = document.getElementById("practicalPower").value;
            var yearrunDays = document.getElementById("yearrunDays").value;
            var designUnit = document.getElementById("designUnit").value;
            var m_pages = parseInt(document.getElementById("page").value);
            var cjnub = m_pages;//表示保存设备m_pages

            $.post("ajax/DeviceTemp/updatedb.do", {
                isnew: 0,
                exhustNo: exhustNo,
                name: name,
                deviceNo: deviceNo,
                deviceFlow: deviceFlow,
                designPower: designPower,
                practicalPower: practicalPower,
                yearrunDays: yearrunDays,
                cjnub: cjnub,
                designUnit: designUnit
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
            /* var malert=document.getElementById("malert").value;
             if(malert==0){
             alert("提交数据库成功!");
             return;
             }*/

            var exhustNo = document.getElementById("mchimney").value;
            var name = document.getElementById("name").value;
            var deviceNo = document.getElementById("deviceNo").value;
            var deviceFlow = document.getElementById("deviceFlow").value;
            var designPower = document.getElementById("designPower").value;
            var practicalPower = document.getElementById("practicalPower").value;
            var yearrunDays = document.getElementById("yearrunDays").value;
            var designUnit = document.getElementById("designUnit").value;
            var m_pages = parseInt(document.getElementById("page").value);
            var cjnub = m_pages;//表示保存设备m_pages
            $.post("ajax/DeviceTemp/updatedb.do", {
                isnew: 1,
                exhustNo: exhustNo,
                name: name,
                deviceNo: deviceNo,
                deviceFlow: deviceFlow,
                designPower: designPower,
                practicalPower: practicalPower,
                yearrunDays: yearrunDays,
                cjnub: cjnub,
                designUnit: designUnit
            }, function (data) {
                var json = eval("(" + data + ")");
                //alert(json.sys_code);
                if (json.sys_code == "suc") {

                    alert("提交数据库成功!");
                    var m_alert = null;
                    if (source == "stationary") {
                        m_alert = '${totalboilerexsit}';
                    } else if (source == "product") {
                        m_alert = '${totaldeviceexsit}';
                    } else if (source == "procedure") {
                        m_alert = '${totalkilnexsit}';
                    }
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
                        工艺生产装置信息
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
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="deviceNo">
                                    生产装置编号(无需填写)
                                </label>

                                <div class="col-md-8">
                                    <input type="text" id="deviceNo" disabled="disabled"
                                           value="${cur_device.nkNo}"
                                           Onchange="ischanged('deviceNo')" style="width: 300px;"/>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="name">
                                    生产装置名称 <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input type="text" id="name" value="{{ $device_temp['name'] or '' }}"
                                           Onchange="ischanged('name')" style="width: 300px;"/>

                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="deviceFlow">
                                    主要工艺流程 <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input type="text" id="deviceFlow"
                                           value="${cur_device.deviceFlow}"
                                           Onchange="ischanged('deviceFlow')" style="width: 300px;"/>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="designPower">
                                    设计年生产能力 <a style="color: red;">*</a>

                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="designPower"
                                           value="${cur_device.designPower}" alt="p0x3p3s" class="check2"
                                           onkeyup="checkNum(this);"
                                           Onchange="ischanged('designPower')" style="width: 300px;"/>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="practicalPower">
                                    年生产能力 <a style="color: red;">*</a>

                                </label>

                                <div class="col-md-8">
                                    <input type="text" id="practicalPower"
                                           value="${cur_device.practicalPower}" alt="p0x3p3s" class="check2"
                                           onkeyup="checkNum(this);"
                                           Onchange="ischanged('practicalPower')" style="width: 300px;"/>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="practicalPower">
                                    生产能力单位 <a style="color: red;">*</a>

                                </label>

                                <div class="col-md-8">
                                    <input type="text" id="designUnit"
                                           value="${cur_device.designUnit}"
                                           Onchange="ischanged('designUnit')" style="width: 300px;"/>

                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="yearrunDays">
                                    全年运行天数 <a style="color: red;">*</a>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="yearrunDays" id="yearrunDays" alt="p3x3p0s" class="check2"
                                           onkeyup="checkNum(this);"
                                           value="${cur_device.yearrunDays}" style="width: 300px;"
                                           onblur="IsChangeNew(this.id,0,365,'全年运行天数')"
                                           Onchange="ischanged('practicalPower')"/>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="mchimney">
                                    对应烟囱<a style="color: red;">*</a>
                                </label>
                                <div class="col-md-8">
                                    <select id="mchimney" Onchange="ischanged('practicalPower')"
                                            Onchange="exhaustModel()" style="width: 300px;">

                                    </select>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12" style="height:40px">
                        <p align="center" id="exaust_info"></p>
                    </div>


                </div>


                <div class="row" style="margin: 0 auto; text-align: center;">
                    <div class="col-xs-12">
                        <!--  img  border="0" src="img/btn1.png" style="margin-left:60px;" /-->

                        <!--  img  border="0" src="img/btn2.png" style="margin-left:100px;" /-->
                        <ul class="pager">
                            <li class="col-md-3">
                                <a href="javascript:void(0);" id="prepage" style="font-weight:bold;" onclick="pre();">&larr;
                                    填报上一个</a>
                            </li>
                            <div class="col-md-3">
                                <li>
                                    <a href="javascript:void(0);" style="font-weight:bold;"
                                       onclick="updatedata();">保存</a>
                                </li>
                            </div>
                            <div class="col-md-3">
                                <li>
                                    <a href="javascript:void(0);" style="font-weight:bold;"
                                       onclick="cancel();">放弃当前页面</a>
                                </li>
                            </div>
                            <li class="col-md-3">
                                <a href="javascript:void(0);" id="nextpage" style="font-weight:bold;" onclick="next();">填报下一个
                                    &rarr;</a>
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


<script type="text/javascript">
    window.jQuery
    || document.write("<script src='{{ asset("/js/jquery-2.0.3.min.js") }}'>" + "<"
        + "/script>");
</script>

<!-- <![endif]-->


<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='{{ asset("/js/jquery.mobile.custom.min.js") }}'>" + "<"
            + "/script>");
</script>
<script src="{{ asset("/js/bootstrap.min.js") }}">
</script>
<script src="{{ asset("/js/typeahead-bs2.min.js") }}"></script>

<!-- page specific plugin scripts -->


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
    $("#deviceul").toggle();
    //document.getElementById("kilninfo").setAttribute("class","active");

</script>
<div style="display: none">
    <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540'
            language='JavaScript' charset='gb2312'>
    </script>
</div>
</body>
</html>
