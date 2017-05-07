<!DOCTYPE html>
<html lang="en">
<head>
    <title>工厂信息</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
    <!-- basic styles -->

    <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset("/css/font-awesome.min.css") }}"/>


    <!-- page specific plugin styles -->

    <link rel="stylesheet" href="{{ asset("/css/jquery-ui-1.10.3.custom.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/chosen.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/datepicker.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/bootstrap-timepicker.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/daterangepicker.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/colorpicker.css") }}"/>

    <!-- fonts -->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>

    <!-- ace styles -->

    <link rel="stylesheet" href="{{ asset("/css/ace.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/ace-rtl.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("/css/ace-skins.min.css") }}"/>
    <script type="text/javascript" language="JavaScript" src="{{ asset("/js/client.js") }}"></script>
    <script type="text/javascript" src="{{ asset("/js/simpletable.js") }}"></script>
    <script type="text/javascript" src="{{ asset("/js/jquery-3.2.1.min.js") }}"></script>
    <script type="text/javascript" language="JavaScript" src="{{ asset("/js/bootstrap.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("/js/checkhelp.js") }}"></script>
    <script type="text/javascript" src="{{ asset("/js/autoNumeric.js") }}"></script>

    <script type="text/javascript">

        jQuery(function ($) {
            $('.check1').focus(function () {
                $('.check1').autoNumeric();
            });
        });
    </script>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="{{ asset("/css/ace-ie.min.css") }}"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script type="text/javascript" src="{{ asset("/js/ace-extra.min.js") }}"></script>


    <script type="text/javascript">
        //alert(document.getElementById(material_name1).innerHTML);
        //加载排气筒信息
        //var m_status = '${item.status}';

        /*if (m_status == '') {
         m_status = 0;
         }*/
        /*$.post("ajax/Status/getStatus.do", {
         mstatus : m_status
         }, function(data) {

         var jsonObj = eval("(" + data + ")");
         //alert(jsonObj.sys_status);
         document.getElementById("status").value = jsonObj.sys_status;
         });
         industry_big

         //注册城市

         */
        $(document).ready(function () {
            var datatime = new Date();


            //行业规模
            var factorySize = {!! session('factory')['factory_size'] !!};
            document.getElementById("factorySize").val = factorySize;
            $("#factorySize option[value='" + factorySize + "']").attr("selected", true);


            //行业大分类
            var industry_big = {!! $industry_big !!};
            //alert(industry_big[0].industry_name);
            for (var i = 0; i < industry_big.length; i++) {
                var $option = $("<option></option>");
                $option.attr("value", industry_big[i].industry_code);
                $option.text(industry_big[i].industry_name);
                $("#industryBigid").append($option);
            }
            //让数据库中的值在下拉框中选中；
            var big = {!! session('factory')['industry_bigid'] !!} ;
            $("#industryBigid option[value='" + big + "']").attr("selected", true);
            if ($("#industryBigid").val() != '') {
                industrysmall($("#industryBigid").val());
            }
            //alert($("#industryBigid").val());


            //列出注册城市

            var allcity ={!! $city !!};
            for (var i = 0; i < allcity.length; i++) {
                var $option = $("<option></option>");
                $option.attr("value", allcity[i].city_code);
                $option.text(allcity[i].city_name);
                $("#countyRegisterCity").append($option);
            }
            //列出世纪城市
            for (var i = 0; i < allcity.length; i++) {
                var $option = $("<option></option>");
                $option.attr("value", allcity[i].city_code);
                $option.text(allcity[i].city_name);
                $("#countyCity").append($option);
            }
            var m_countyRegisterCity = '{!! session('factory')['county_register_city'] !!}';
            var actualcity = '{!! session('factory')['county_register_city'] !!}';
            $("#countyRegisterCity option[value='" + m_countyRegisterCity + "']").attr("selected", true);
            $("#countyCity option[value='" + actualcity + "']").attr("selected", true);

            if ($("#countyRegisterCity").val() != '') {
                changeCity($("#countyRegisterCity").val(), 'countyidRegister',{!! session('factory')['countyid_register'] !!});
            }
            if ($("#countyCity").val() != '') {
                changeCity($("#countyRegisterCity").val(), 'countyId',{!! session('factory')['county_id'] !!});
            }
            //  污染源类型
            var abc = '{!! session('factory')['source_type'] !!}';
            //$("#sourceType").val(abc);
            $("#sourceType option[value='" + abc + "']").attr("selected", true);
            //$("#countyRegisterCity option[vlaue ='" + m_countyRegisterCity + "']").attr("selected", true);
        });

        //  污染源类型
        //var abc = "${item.sourceType}";
        //$("#sourceType").val(abc);
        //$("#sourceType option[value='" + abc + "']").attr("selected", true);

        //注册城市

        /*
         var ace = "${item.industryBigid}";
         if (ace != '') {
         industrysmall('${item.industryBigid}');
         }
         var m_countyCity = '${item.countyCity}';
         $.post("ajax/City/getCityId.do", function (data) {
         var jsonObj = eval("(" + data + ")");
         for (var i = 0; i < jsonObj.length; i++) {
         var $option = $("<option></option>");
         $option.attr("value", jsonObj[i].cityId);
         $option.text(jsonObj[i].cityName);
         //$("#RcountyId").append($option);
         $("#countyCity").append($option);
         }
         $("#countyCity option[value='" + m_countyCity + "']").attr("selected", true);


         });

         if (m_countyCity != '') {
         var m_countyCode = '${item.countyId}';
         changeCity(m_countyCity, 'countyId', m_countyCode);
         }
         var m_countyRegisterCity='${item.countyRegisterCity}';
         $.post("ajax/City/getCityId.do", function(data) {
         var jsonObj = eval("(" + data + ")");
         for ( var i = 0; i < jsonObj.length; i++) {
         var $option = $("<option></option>");
         $option.attr("value", jsonObj[i].cityId);
         $option.text(jsonObj[i].cityName);
         //$("#RcountyId").append($option);
         $("#countyRegisterCity").append($option);
         }
         $("#countyRegisterCity option[value='"+m_countyRegisterCity+"']").attr("selected", true);
         });
         if(m_countyRegisterCity!=''){
         var m_countyidRegister='${item.countyidRegister}';
         //changeCity(countyRegisterCity,'countyidRegister',countyidRegister);
         changeCity(m_countyRegisterCity,'countyidRegister',m_countyidRegister);
         }*/


        //alert(document.getElementById(material_name1).innerHTML);
        /*$.post("ajax/FabricationproTemp/loadallinfo.do",{
         },function(data){

         var json = eval("(" + data + ")");
         });


         //alert(document.getElementById(material_name1).innerHTML);
         $.post("ajax/SolventEquTemp/loadallinfo.do",{
         },function(data){
         var json = eval("(" + data + ")");


         });


         //alert(document.getElementById(material_name1).innerHTML);
         $.post("ajax/BoilerTemp/loadallinfo.do",{
         },function(data){

         var json = eval("(" + data + ")");
         });*/

        //34.3700~49.55"

        function industrysmall(m_value) {
            $("#industryId").empty();
            var $option = $("<option></option>");
            $option.attr("value", "");
            $option.text("请选择");
            $("#industryId").append($option);
            $.post("{{url("GetindustrySmallId")}}", {
                '_token': '{{ csrf_token() }}',
                industrybigid: m_value
            }, function (data) {
                for (var i = 0; i < data.length; i++) {
                    var $option = $("<option></option>");
                    $option.attr("value", data[i].industry_small);
                    $option.text(data[i].industry_name);
                    $("#industryId").append($option);

                }
                var m_indutrySmall ={!! session('factory')['industry_id'] !!};
                $("#industryId option[value='" + m_indutrySmall + "']").attr("selected", true);

            });
        }

        function addsaveinfo(page, target) {
            var m_alert = 0;

            $.post("ajax/ExhaustTemp/getinfo.do", {
                target: target
            }, function (data) {
                var json = eval("(" + data + ")");
                //alert(json.result);

                saveinfo(page, target, 'all', json.result);

            });

        }

        function ischanged(name) {
            document.getElementById("malert").value = 1;
            $('#m_alert').show();
        }
        function cleaSec(objID) {
            var selectObj = document.getElementById(objID);
            var length = selectObj.options.length;
            for (var i = 1; i <= length; i++) {
                selectObj.options[0] = null;
            }
        }

        function changeCity(m_value, next, m_countyCode) {
            $("#" + next).empty();
            var $option = $("<option></option>");
            $option.attr("value", "");
            $option.text("请选择");
            $("#" + next).append($option);
            $.post("{{url('GetCounty')}}", {'_token': '{{ csrf_token() }}', citycode: m_value}, function (data) {
                for (var i = 0; i < data.length; i++) {
                    var $option = $("<option></option>");
                    $option.attr("value", data[i].COUNTY_ID);
                    $option.text(data[i].COUNTY_NAME);
                    $("#" + next).append($option);

                }
                $("#" + next + " option[value='" + m_countyCode + "']").attr("selected", true);
            });

        }
        function checkvalue(witch) {
            var ids = new Array("sourceType", "industryBigid", "industryId", "legalperson", "factorySize", "countyRegisterCity", "countyidRegister", "addressRegister", "countyCity", "countyId", "address", "factoryLongitude", "factoryLatitude", "totalOutput", "yearDays", "daysHours", "principalName", "principalMobile", "principalEmail");
            var contents = new Array("污染源类型", "行业大分类", "行业小分类", "法定代表人", "企业规模", "注册城市", "注册行政区", "注册详细地址", "实际城市", "实际行政区", "实际详细地址", "企业经度", "企业纬度", "生产总值", "年生产天数", "日生产小时数", "统计负责人", "移动电话", "电子邮箱");
            return checkall(witch, ids, contents);

        }
        function addFactory() {

            var factoryName = document.getElementById("factoryName").value;
            var factoryUsedname = document.getElementById("factoryUsedname").value;
            var sourceType = document.getElementById("sourceType").value;
            var industryBigid = document.getElementById("industryBigid").value;
            var industryBigname = $("#industryBigid").find("option:selected").text();
            var industryId = document.getElementById("industryId").value;
            var industryName = $("#industryId").find("option:selected").text();
            var legalperson = document.getElementById("legalperson").value;
            var factorySize = document.getElementById("factorySize").value;
            var countyRegisterCity = document.getElementById("countyRegisterCity").value;
            var countyidRegister = document.getElementById("countyidRegister").value;//注册城市
            var countyRegisterCityDec = $("#countyRegisterCity").find("option:selected").text();//注册城市名称
            var countyidRegisterDec = $("#countyidRegister").find("option:selected").text();//注册区县名称
            var addressRegister = document.getElementById("addressRegister").value;//注册详细地址
            var countyCity = document.getElementById("countyCity").value;
            var cityName = $("#countyCity").find("option:selected").text();//城市名称
            var countyId = document.getElementById("countyId").value;
            var countyName = $("#countyId").find("option:selected").text();//区县名称

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


            $.post("{{ url('FactoryupdateFac') }}", {
                '_token': '{{csrf_token()}}',
                cityName: cityName,
                industryName: industryName,
                factoryName: factoryName,
                countyName: countyName,
                industryBigname: industryBigname,
                factoryUsedname: factoryUsedname,
                powerAmount: powerAmount,
                sourceType: sourceType,
                industryBigid: industryBigid,
                industryId: industryId,
                legalperson: legalperson,
                factorySize: factorySize,
                countyRegisterCity: countyRegisterCity,
                countyidRegister: countyidRegister,
                countyRegisterCityDec: countyRegisterCityDec,
                countyidRegisterDec: countyidRegisterDec,
                addressRegister: addressRegister,
                countyCity: countyCity,
                countyId: countyId,
                address: address,
                factoryLongitude: factoryLongitude,
                factoryLatitude: factoryLatitude,
                totalOutput: totalOutput,
                yearDays: yearDays,
                daysHours: daysHours,
                principalName: principalName,
                principalPhone: principalPhone,
                principalMobile: principalMobile,
                principalEmail: principalEmail,
                lon1: lon1,
                lat1: lat1,
                lon2: lon2,
                lat2: lat2,
                lon3: lon3,
                lat3: lat3,
                lon4: lon4,
                lat4: lat4,
                lon5: lon5,
                lat5: lat5,
                lon6: lon6,
                lat6: lat6,
                lon7: lon7,
                lat7: lat7
            }, function (state) {
                if (state < 0) {
                    alert("企业信息更新失败！");
                } else {
                    alert("企业信息更新成功！");
                }
            });
            location.reload();
        }


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
        function addFactory111() {


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
                        <a href="#">{{ session("factory")["factory_name"] }}</a>
                    </li>
                    <li>
                        <a href=>企业信息</a>
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
                            <!-- PAGE CONTENT BEGINS -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label no-padding-right"
                                           for="form-field-3">
                                        机构代码
                                    </label>

                                    <div class="col-md-8">
                                        <label id='factotyno'
                                               style="font-size: 15px; margin-top: 3px;">
                                            {{ session("factory")["factory_no1"] }}
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
                                            {{ session("factory")["factory_name"] }}
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
                                               style="height: 25px; width: 170px;"
                                               value="{{ session("factory")["factory_name"] }}"
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
                                            <option value="废气省控">废气省控</option>
                                            <option value="废气其它">废气其它</option>
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
                                               value="{{ session("factory")["legalperson"] }}"
                                               Onchange="ischanged('kilnuse')"/>

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
                                            <option value="{{ session("factory")["factory_name"] }}">
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
                                               value="{{ session("factory")["address_register"] }}"
                                               Onchange="ischanged('kilnuse')"/>
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
                                               value="{{ session("factory")["address"] }}"
                                               Onchange="ischanged('kilnuse')"/>
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
                                        <input value="{{ session("factory")["factory_longitude"] }}" type="text"
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
                                        <input value="{{ session("factory")["factory_latitude"] }}" type="text"
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
                                        <a style="color:red">2015</a>
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
                                        <input value="{{ session("factory")["total_output"] }}" type="text"
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
                                        <input value="{{ session("factory")["Year_days"] }}" type="text"
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
                                        <input value="{{ session("factory")["Days_hours"] }}" type="text"
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
                                        <input value="{{ session("factory")["power_amount"] }}" type="text"
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
                                               value="{{ session("factory")["principal_name"] }}"
                                               style="height: 25px; width: 170px;"/>
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
                                               style="height: 25px; width: 170px;"
                                               value="{{ session("factory")["principal_phone"] }}"
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
                                               style="height: 25px; width: 170px;"
                                               value="{{ session("factory")["principal_mobile"] }}"
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
                                               style="height: 25px; width: 170px;"
                                               value="{{ session("factory")["principal_email"] }}"
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
                                        <input type="text" id="lon1" value="{{ session("factory")["lon1"] }}"
                                               class="check1" alt="p3x3p6s"
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
                                        <input type="text" id="lat1" value="{{ session("factory")["lat1"] }}"
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
                                        <input type="text" id="lon2" value="{{ session("factory")["lon2"] }}"
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
                                        <input type="text" id="lat2" value="{{ session("factory")["lat2"] }}"
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
                                        <input type="text" id="lon3" value="{{ session("factory")["lon3"] }}"
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
                                        <input type="text" id="lat3" value="{{ session("factory")["lat3"] }}"
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
                                        <input type="text" id="lon4" value="{{ session("factory")["lon4"] }}"
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
                                        <input type="text" id="lat4" class="form-control"
                                               value="{{ session("factory")["lat4"] }}"
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
                                        <input type="text" id="lon5" value="{{ session("factory")["lon5"] }}"
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
                                        <input type="text" id="lat5" class="form-control"
                                               value="{{ session("factory")["lat5"] }}"
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
                                        <input type="text" id="lon6" value="{{ session("factory")["lon6"] }}"
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
                                               style="height: 25px; width: 170px;"
                                               value="{{ session("factory")["lat6"] }}"
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
                                        <input type="text" id="lon7" value="{{ session("factory")["lon7"] }}"
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
                                        <input type="text" id="lat7" class="form-control"
                                               value="{{ session("factory")["lat7"] }}"
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
                    <!-- /.page-footer -->
                </form>


            </div>
            <!-- /.page-content -->
        </div>
        <!-- /.main-content -->

    </div>
    <!-- /.main-container-inner -->
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
        jQuery(function ($) {
            $.mask.definitions['~'] = '[+-]';
            $('.input-mask-date').mask('9999/99/99');
            $('.input-mask-phone').mask('(999) 999-9999');//可以校验电话
            $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
            $(".input-mask-product").mask("a*-999-a999", {
                placeholder: " ",
                completed: function () {
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
        <script src='{{ asset("http://v7.cnzz.com/stat.php?id=155540&web_id=155540") }}'
                language='JavaScript' charset='gb2312'>
        </script>
    </div>
</div>
</body>
</html>
