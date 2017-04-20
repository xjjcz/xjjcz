<!DOCTYPE html>
<html>
<head>
    <title>工厂信息</title>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
    <!-- basic styles -->

    <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/font-awesome.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/font-awesome-ie7.min.css") }}" rel="stylesheet"/>





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
    <script src="{{ asset("/js/client.js") }}">
    </script>
    <script src="{{ asset("/js/savehelp.js") }}">
    </script>

    <link rel="stylesheet" href="{{ asset("/js/ace-ie.min.css") }}" />


    <script src="{{ asset("/js/ace-extra.min.js") }}">
    </script>


    <script src="{{ asset("/js/html5shiv.js") }}"></script>
    <script src="{{ asset("/js/respond.min.js") }}"></script>


    <script type="text/javascript">


        function addsaveinfo(page, target) {
            var m_alert = 0;


        }
        function cleaSec(objID) {
            var selectObj = document.getElementById(objID);
            var length = selectObj.options.length;
            for (var i = 1; i <= length; i++) {
                selectObj.options[0] = null;
            }
        }

        function ischanged(name) {
            document.getElementById("malert").value = 1;
            $('#m_alert').show();
        }

        function checkvalue(witch) {
            var ids = new Array("sourceType", "industryBigid", "industryId", "legalperson", "factorySize", "countyRegisterCity", "countyidRegister", "addressRegister", "countyCity", "countyId", "address", "factoryLongitude", "factoryLatitude", "totalOutput", "yearDays", "daysHours", "principalName", "principalMobile", "principalEmail");
            var contents = new Array("污染源类型", "行业大分类", "行业小分类", "法定代表人", "企业规模", "注册城市", "注册行政区", "注册详细地址", "实际城市", "实际行政区", "实际详细地址", "企业经度", "企业纬度", "生产总值", "年生产天数", "日生产小时数", "统计负责人", "移动电话", "电子邮箱");
            return checkall(witch, ids, contents);

        }
        function addFactory() {


            if (!checkvalue(1)) {
                return;
            }
            var malert = document.getElementById("malert").value;
            if (malert == 0) {
                alert("提交数据库成功!");
                return;
            }
            var factoryUsedname = document.getElementById("factoryUsedname").value;
            var sourceType = document.getElementById("sourceType").value;
            var industryBigid = document.getElementById("industryBigid").value;
            var industryBigname = $("#industryBigid").find("option:selected").text();
            var industryId = document.getElementById("industryId").value;
            var industryName = $("#industryId").find("option:selected").text();
            var legalperson = document.getElementById("legalperson").value;
            var factorySize = document.getElementById("factorySize").value;
            var countyRegisterCity = document.getElementById("countyRegisterCity").value;
            var countyidRegister = document.getElementById("countyidRegister").value;
            var addressRegister = document.getElementById("addressRegister").value;
            var countyCity = document.getElementById("countyCity").value;
            var cityName = $("#countyCity").find("option:selected").text();
            var countyId = document.getElementById("countyId").value;
            var countyName = $("#countyId").find("option:selected").text();
            var address = document.getElementById("address").value;
            var factoryLongitude = document.getElementById("factoryLongitude").value;
            var factoryLatitude = document.getElementById("factoryLatitude").value;
            var totalOutput = document.getElementById("totalOutput").value;
            var yearDays = document.getElementById("yearDays").value;
            var daysHours = document.getElementById("daysHours").value;
            var principalName = document.getElementById("principalName").value;
            var principalPhone = document.getElementById("principalPhone").value;
            var principalMobile = document.getElementById("principalMobile").value;
            var principalEmail = document.getElementById("principalEmail").value;
            var powerAmount = document.getElementById("powerAmount").value;
            var lon1 = document.getElementById("lon1").value;
            var lon2 = document.getElementById("lon2").value;
            var lon3 = document.getElementById("lon3").value;
            var lon4 = document.getElementById("lon4").value;
            var lon5 = document.getElementById("lon5").value;
            var lon6 = document.getElementById("lon6").value;
            var lon7 = document.getElementById("lon7").value;
            var lat1 = document.getElementById("lat1").value;
            var lat2 = document.getElementById("lat2").value;
            var lat3 = document.getElementById("lat3").value;
            var lat4 = document.getElementById("lat4").value;
            var lat5 = document.getElementById("lat5").value;
            var lat6 = document.getElementById("lat6").value;
            var lat7 = document.getElementById("lat7").value;

        }

    </script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]-->
    <script type="text/javascript" src="{{ asset("/js/html5shiv.js") }}"></script>
    <script type="text/javascript" src="{{ asset("/js/respond.min.js") }}"></script>
    <!--[endif]-->

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
        @include("layouts.leftnav")
        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs"
                 style="background-color: #32B16C; height: 2px; margin-top: 5px">
                <script type="text/javascript">
                    try {
                        ace.settings.check('breadcrumbs', 'fixed')
                    } catch (e) {
                    }
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href=''>企业信息</a>
                    </li>
                </ul>
                <!-- .breadcrumb -->
            </div>


            <div class="page-content">

                <div class="page-header">
                    <h1>
                        <b>企业信息</b>
                        <small><i class="icon-double-angle-right"></i> <b>基本信息</b>
                        </small>
                    </h1>
                    <h3 style="color: red">本页面未填报完成，不能保存和填报下一个页面</h3>
                </div>
                <!-- /.page-header -->

                <form id="factoryForm" name="factoryForm" method="post"
                      style="display: inline;"
                      action="">
                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        机构代码
                                    </label>

                                    <div class="col-md-8">
                                        <label id='factotyno' style="font-size: 15px; margin-top: 3px;">

                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-1">
                                        企业名称
                                    </label>
                                    <div class="col-md-8">
                                        <label id='factoryName'
                                               style="font-size: 15px; margin-top: 3px;">

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        曾用名
                                    </label>
                                    <div class="col-md-8">

                                        <input type="text" id="factoryUsedname"
                                               name="factoryUsedname" class="form-control"
                                               style="height: 25px; width: 170px;" value=""
                                               Onchange="ischanged('kilnuse')"/>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-4">
                                        污染源类型<a style="color:red">*</a>
                                    </label>
                                    <div class="col-md-8">
                                        <select name="sourceType" id="sourceType" class="form-control"
                                                style="width: 173px; height: 30px;" value=""
                                                Onchange="ischanged('kilnuse')">
                                            <option value="">请选择</option>
                                            <option value="废气国控">废气国控</option>
                                            <option value="废气市控">废气市控</option>
                                            <option value="废气市控">废气省控</option>
                                            <option value="废气市控">废气其它</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-1">
                                        行业大分类<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <select name="industryBigid" id="industryBigid"
                                                onchange="industrysmall(this.value)" class="form-control"
                                                style="width: 173px; height: 30px;" value="">
                                            <option value="">请选择</option>


                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                    >
                                        行业小分类<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <select name="industryId" id="industryId" class="form-control"
                                                style="width: 173px; height: 30px;" value=""
                                                Onchange="ischanged('kilnuse')">
                                            <option value="">请选择</option>

                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        法定代表人<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="legalperson" class="form-control"
                                               style="height: 25px; width: 170px;"
                                               value="" Onchange="ischanged('kilnuse')"/>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        企业规模<a style="color:red">*</a>
                                    </label>
                                    <div class="col-md-8">
                                        <select name="factorySize" id="factorySize" class="form-control"
                                                style="width: 173px; height: 30px;" value=""
                                                Onchange="ischanged('kilnuse')">
                                            <option value="">请选择</option>
                                            <option value="1">小型企业</option>
                                            <option value="2">中小型企业</option>
                                            <option value="3">中型企业</option>
                                            <option value="4">大中型企业</option>
                                            <option value="5">大型企业</option>
                                        </select>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        注册省份
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control"
                                               style="height: 25px; width: 170px;" readonly="readonly"
                                               value="新疆"/>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        注册城市<a style="color:red">*</a>
                                    </label>
                                    <div class="col-md-8">

                                        <select name="countyRegisterCity" id="countyRegisterCity"
                                                class="form-control"
                                                style="width: 173px; height: 30px;"
                                                onchange="changeCity(this.value,'countyidRegister','')">
                                            <option value="">请选择
                                            </option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        注册行政区<a style="color:red">*</a>
                                    </label>
                                    <div class="col-md-8">

                                        <select name="countyidRegister" id="countyidRegister"
                                                class="form-control"
                                                style="width: 173px; height: 30px;" Onchange="ischanged('kilnuse')">
                                            <option value="">
                                                请选择
                                            </option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        注册详细地址<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="addressRegister" class="form-control"
                                               style="height: 25px; width: 170px;"
                                               value="" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        实际省份
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control"
                                               style="height: 25px; width: 170px;" readonly="readonly"
                                               value="新疆"/>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        实际城市<a style="color:red">*</a>
                                    </label>
                                    <div class="col-md-8">
                                        <select name="countyCity" id="countyCity"
                                                class="form-control"
                                                style="width: 173px; height: 30px;"
                                                onchange="changeCity(this.value,'countyId','')">
                                            <option value="">
                                                请选择
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        实际行政区<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">

                                        <select name="countyId" id="countyId"
                                                class="form-control"
                                                style="width: 173px; height: 30px;" Onchange="ischanged('kilnuse')">
                                            <option value="">
                                                请选择
                                            </option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        实际详细地址<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="address" class="form-control"
                                               style="height: 25px; width: 170px;"
                                               value="" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        企业经度<a style="color:red">*</a>
                                    </label>
                                    <div class="col-md-8">
                                        <input value="" type="text"
                                               id="factoryLongitude" class="check1" alt="p3x3p6s"
                                               onblur="checklon(this.id)"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="73.6667~96.3000" Onchange="ischanged('kilnuse')"/>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right">
                                        企业纬度<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input value="" type="text"
                                               onblur="checklat(this.id)" id="factoryLatitude" class="check1"
                                               alt="p3x3p6s"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="34.4167~48.1667" Onchange="ischanged('kilnuse')"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-2">
                                        填报内容的年份
                                    </label>
                                    <div class="col-md-8">
                                        <a style="color:red"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-2">
                                        生产总值(万元)<a style="color:red">*</a>
                                    </label>
                                    <div class="col-md-8">
                                        <input value="" type="text"
                                               id="totalOutput" class="check1" alt="p0x3p4s"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-2">
                                        年生产天数(整数)<a style="color:red">*</a>
                                    </label>
                                    <div class="col-md-8">
                                        <input value="" type="text"
                                               id="yearDays" class="check1" alt="p3x3p0s"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               Onchange="ischanged('kilnuse')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               onblur="IsChangeNew(this.id,0,365,'年生产天数')"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-2">
                                        日生产小时数(整数)<a style="color:red">*</a>
                                    </label>
                                    <div class="col-md-8">
                                        <input value="" type="text"
                                               id="daysHours" class="check1" alt="p3x3p0s"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               Onchange="ischanged('kilnuse')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               onblur="IsChangeNew(this.id,0,24,'日生产小时数')"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-2">
                                        年用电量(万千瓦时)<a style="color:red">*</a>
                                    </label>
                                    <div class="col-md-8">
                                        <input value="" type="text"
                                               id="powerAmount" class="check1" alt="p0x3p4s"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               Onchange="ischanged('kilnuse')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"/>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <!-- PAGE CONTENT BEGINS -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        统计负责人<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="principalName" class="form-control"
                                               Onchange="ischanged('kilnuse')"
                                               value="" style="height: 25px; width: 170px;"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        固定电话
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="principalPhone" class="form-control"
                                               Onchange="ischanged('kilnuse')"
                                               style="height: 25px; width: 170px;" value=""
                                               onblur="checkpphone(this.id);"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="height: 40px;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-1">
                                        移动电话<a style="color:red">*</a>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="principalMobile" class="form-control"
                                               Onchange="ischanged('kilnuse')"
                                               style="height: 25px; width: 170px;" value=""
                                               onblur="checkpmobile(this.id);"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        电子邮箱<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="principalEmail" class="form-control"
                                               style="height: 25px; width: 170px;" value=""
                                               onblur="checkpemail(this.id);" Onchange="ischanged('kilnuse')"/>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="row" style="height: 40px;" id="preparerrow1">
                        <div class="col-md-12">
                            <a style="color: red">生产厂区四至拐点经纬度指的是工厂面积拐点的经纬度，企业厂区面积小于1平方千米的，不用填报四至拐点经纬度,其他企业至少填写四个角落的经纬度</a>
                        </div>
                    </div>
                    <div class="row" style="height: 40px;" id="preparerrow1">
                        <div class="col-md-12">
                            <!-- PAGE CONTENT BEGINS -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点经度1<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lon1" value="" class="check1" alt="p3x3p6s"
                                               onblur="checklonfour1(this.id,0)"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="73.6667~96.3000" Onchange="ischanged('kilnuse')"/>


                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点纬度1<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lat1" value=""
                                               onblur="checklatfour1(this.id,0)" class="check1" alt="p3x3p6s"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="34.4167~48.1667" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height: 40px;" id="preparerrow1">
                        <div class="col-md-12">
                            <!-- PAGE CONTENT BEGINS -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点经度2<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lon2" value=""
                                               class="check1" alt="p3x3p6s"
                                               onblur="checklonfour1(this.id,1)"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="73.6667~96.3000" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点纬度2<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lat2" value=""
                                               onblur="checklatfour1(this.id,1)" class="check1" alt="p3x3p6s"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="34.4167~48.1667" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height: 40px;" id="preparerrow1">
                        <div class="col-md-12">
                            <!-- PAGE CONTENT BEGINS -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点经度3<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lon3" value=""
                                               class="check1" alt="p3x3p6s"
                                               onblur="checklonfour1(this.id,2)"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="73.6667~96.3000" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点纬度3<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lat3" value=""
                                               onblur="checklatfour1(this.id,2)" class="check1" alt="p3x3p6s"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="34.4167~48.1667" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height: 40px;" id="preparerrow1">
                        <div class="col-md-12">
                            <!-- PAGE CONTENT BEGINS -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点经度4<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lon4" value=""
                                               class="check1" alt="p3x3p6s"
                                               onblur="checklonfour1(this.id,3)"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="73.6667~96.3000" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点纬度4<a style="color:red">*</a>
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lat4" class="form-control" value=""
                                               onblur="checklatfour1(this.id,3)" class="check1" alt="p3x3p6s"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="34.4167~48.1667" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="height: 40px;" id="preparerrow1">

                        <div class="col-md-12">
                            <!-- PAGE CONTENT BEGINS -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点经度5
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lon5" value=""
                                               class="check1" alt="p3x3p6s"
                                               onblur="checklonfour1(this.id,4)"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="73.6667~96.3000" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点纬度5
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lat5" class="form-control" value=""
                                               onblur="checklatfour1(this.id,4)" class="check1" alt="p3x3p6s"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="34.4167~48.1667" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height: 40px;" id="preparerrow1">
                        <div class="col-md-12">
                            <!-- PAGE CONTENT BEGINS -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点经度6
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lon6" value=""
                                               class="check1" alt="p3x3p6s"
                                               onblur="checklonfour1(this.id,5)"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="73.6667~96.3000" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点纬度6
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lat6" class="form-control"
                                               style="height: 25px; width: 170px;" value=""
                                               class="check1" alt="p3x3p6s"
                                               onblur="checklatfour1(this.id,5);"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="34.4167~48.1667" Onchange="ischanged('kilnuse')"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height: 40px;" id="preparerrow1">
                        <div class="col-md-12">
                            <!-- PAGE CONTENT BEGINS -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点经度7
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lon7" value=""
                                               class="check1" alt="p3x3p6s"
                                               onblur="checklonfour1(this.id,6)"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"
                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="73.6667~96.3000" Onchange="ischanged('kilnuse')"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        生产厂区四至拐点纬度7
                                    </label>

                                    <div class="col-md-8">
                                        <input type="text" id="lat7" class="form-control" value=""
                                               onblur="checklatfour1(this.id,6)" class="check1" alt="p3x3p6s"
                                               style="height: 25px; margin-top: 3px; width: 170px;"
                                               onkeyup="if(isNaN(value))execCommand('undo')"

                                               onafterpaste="if(isNaN(value))execCommand('undo')"
                                               placeholder="34.4167~48.1667" Onchange="ischanged('kilnuse')"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="">
                        <div class="row" style="height: 40px;">

                            <div class="col-md-12">
                                <!-- PAGE CONTENT BEGINS -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            填报状态(无需填写)：
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="status" disabled="disabled"
                                                   class="form-control"
                                                   style="height: 25px; width: 170px;color: red"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">


                        <div style="text-align: center;">
                            <button type="button" class="btn btn-primary"
                                    style="width:80px;line-height:8px;margin-left:15px;"
                                    onclick="addFactory();">
                                <label style="font-size: 16px; color:white">
                                    保&nbsp;存
                                </label>
                            </button>
                            <input type="hidden" name="malert" id="malert" value='0'>
                        </div>
                    </div>
                </form>


            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    window.jQuery
    || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<"
        + "/script>");
</script>
<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<"
            + "/script>");
</script>
<script src="{{ asset("/js/bootstrap.min.js") }}">
</script>
<script src="{{ asset("/js/typeahead-bs2.min.js") }}">
</script>

<script src="{{ asset("/js/date-time/bootstrap-datepicker.min.js") }}">
</script>
<script src="{{ asset("/js/jqGrid/jquery.jqGrid.min.js") }}">
</script>
<script src="{{ asset("/js/jqGrid/i18n/grid.locale-en.js") }}">
</script>
<script src="{{ asset("js/jquery.maskedinput.min.js") }}">
</script>

<script src="{{ asset("/js/jquery-ui-1.10.3.custom.min.js") }}">
</script>
<script src="{{ asset("/js/jquery.ui.touch-punch.min.js") }}">
</script>
<script src="{{ asset("/js/chosen.jquery.min.js") }}">
</script>
<script src="{{ asset("/js/fuelux/fuelux.spinner.min.js") }}">
</script>
<script src="{{ asset("/js/date-time/bootstrap-datepicker.min.js") }}">
</script>
<script src="{{ asset("/js/date-time/bootstrap-timepicker.min.js") }}">
</script>
<script src="{{ asset("/js/date-time/moment.min.js") }}">
</script>
<script src="{{ asset("/js/date-time/daterangepicker.min.js") }}">
</script>
<script src="{{ asset("/js/bootstrap-colorpicker.min.js") }}">
</script>
<script src="{{ asset("/js/jquery.knob.min.js") }}">
</script>
<script src="{{ asset("/js/jquery.autosize.min.js") }}">
</script>
<script src="{{ asset("/js/jquery.inputlimiter.1.3.1.min.js") }}">
</script>
<script src="{{ asset("/js/jquery.maskedinput.min.js") }}">
</script>
<script src="{{ asset("/js/bootstrap-tag.min.js") }}">
</script>
<!-- ace scripts -->

<script src="{{ asset("/js/ace-elements.min.js") }}">
</script>
<script src="{{ asset("/js/ace.min.js") }}">
</script>

<script type="text/javascript">
    $("#pasd").toggle();
    document.getElementById("lipsd").setAttribute("class", "active");
</script>
<script type="text/javascript">
    jQuery(function($) {
        $.mask.definitions['~'] = '[+-]';
        $('.input-mask-date').mask('9999/99/99');
        $('.input-mask-phone').mask('(999) 999-9999');//可以校验电话
        $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        $(".input-mask-product").mask("a*-999-a999", {
            placeholder : " ",
            completed : function() {
                alert("You typed the following: " + this.val());
            }
        });

    });
</script>
<script src="{{ asset("/js/bootstrap.min.js") }}">
</script>
<script src="{{ asset("/js/typeahead-bs2.min.js") }}">
</script>


<script src="{{ asset("/js/date-time/bootstrap-datepicker.min.js") }}">
</script>
<script src="{{ asset("/js/jqGrid/jquery.jqGrid.min.js") }}">
</script>
<script src="{{ asset("/js/jqGrid/i18n/grid.locale-en.js") }}">
</script>


<div style="display: none">
    <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540'
            language='JavaScript' charset='gb2312'>
    </script>
</div>
</body>
</html>
