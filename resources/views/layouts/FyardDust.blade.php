
<!DOCTYPE html>

<?php
$itemroaddusti = 0;
?>
<html lang="en">
<head>
    <title>道路扬尘源</title>

    <!-- basic styles -->
    <meta name="keywords"	content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
    <meta name="description"	content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="IE=Edge" />

    <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/font-awesome.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/font-awesome-ie7.min.css") }}" rel="stylesheet"/>
    <meta http-equiv="x-ua-compatible" content="IE=Edge" />
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

    <script src="{{ asset("/js/jquery.maskedinput.min.js") }}">
    </script>
    <script src="{{ asset("/js/jquery-1.7.2.min.js") }}" type="text/javascript">
    </script>
    <script src="{{ asset("/js/client.js") }}">
    </script>
    <script
            src="{{ asset("http://apps.bdimg.com/libs/fancybox/2.1.5/jquery.fancybox.pack.js") }}"
            type="text/javascript">
    </script>
    @include("layouts.header")
    <script type="text/javascript" src="{{ asset("/js/autoNumeric.js") }}">
    </script>
    <script src="{{ asset("/js/shihua.js") }}">
    </script>
    <script src="{{ asset("/js/checkhelp.js") }}">
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
    <link rel="stylesheet" href="{{ asset("http://fonts.googleapis.com/css?family=Open+Sans:400,300") }}" />
    {{--<script type="text/javascript" src="<c:url value="/widgets/simpletable/simpletable.js"/>"></script>--}}


    <script type="text/javascript">
        jQuery(function($) {
            $('.check1').focus(function() {
                $('.check1').autoNumeric();
            });
        });
    </script>

    <script type="text/javascript" language="JavaScript">
        $(document).ready(function () {


            /* $.post("{{ url("information") }}",{'_token':'{{ csrf_token() }}','id':id},function (data) {
             console.log(data);
             $("#information").val(data.information);
             });*/
            $.post("{{ url("listRoadlist") }}",{'_token':'{{ csrf_token() }}'},function(data){
                $froaddustsourcetemp = 1;
            });
        });
    </script>
    <script type="text/javascript">


        function addinfo() {


            var companyName = document.getElementById("companyName").innerHTML;

            var pathLength = document.getElementById("pathLength").value;
            var ispave = document.getElementById("ispave").value;
            var averWidth = document.getElementById("averWidth").value;

            var averWeight = document.getElementById("averWeight").value;
            var carFlow = document.getElementById("carFlow").value;
            var averSpeed = document.getElementById("averSpeed").value;
            var clearTimeInstall = document.getElementById("clearTimeInstall").value;
            var clearTimeUninstall = document.getElementById("clearTimeUninstall").value;
            var sweepSpring = document.getElementById("sweepSpring").value;

            var sweepSummer = document.getElementById("sweepSummer").value;
            var sweepFall = document.getElementById("sweepFall").value;
            var waterTimesSpring = document.getElementById("waterTimesSpring").value;

            var waterTimesSummer = document.getElementById("waterTimesSummer").value;
            var waterTimesFall = document.getElementById("waterTimesFall").value;
            var dustSuppression = document.getElementById("dustSuppression").value;


            if(ispave==1){
                scc="1602001003";
            }
            else{
                scc="1602002000";
            }


            //alert(1);


            if(pathLength==""||ispave==""||averWeight==""||
                averSpeed==""||averWidth==""||carFlow==""||clearTimeInstall==""||
                clearTimeUninstall==""||sweepSpring==""||sweepSummer==""||sweepFall==""||
                waterTimesSpring==""||waterTimesSummer==""||waterTimesFall==""||dustSuppression==""){
                alert("红色标识为必填字段！");
            }
            else{
                $.post("ajax/FroadDustSourceTemp/save.do", {
                        scccode:scc,
                        companyName: companyName,

                        pathLength : pathLength,
                        ispave : ispave,
                        averWidth : averWidth,
                        averWeight : averWeight ,
                        carFlow : carFlow,
                        averSpeed  : averSpeed,
                        clearTimeInstall : clearTimeInstall,
                        clearTimeUninstall : clearTimeUninstall,
                        sweepSpring : sweepSpring,
                        sweepSummer : sweepSummer,
                        sweepFall : sweepFall ,
                        waterTimesSpring : waterTimesSpring,
                        waterTimesSummer : waterTimesSummer,
                        waterTimesFall : waterTimesFall ,
                        dustSuppression : dustSuppression



                    },
                    function(data) {
                        var json = eval("(" + data + ")");
                        if (json.flag== 1) {
                            alert("道路扬尘源保存成功！");

                            window.location.reload();

                        } else {
                            alert("道路扬尘源保存失败！");
                        }

                    });


            }
        }


        function deleteRoad(rId){
            //alert(12345);
            $.post("ajax/FroadDustSourceTemp/deleteRoad.do",{roadDustid:rId},function(data){
                var jsonObj = eval("(" + data + ")");
                if(jsonObj.status=="1"){
                    alert("恭喜您，数据删除成功！")
                    window.location.reload();
                }
                else{
                    //没权限
                    alert("对不起，您没有权限进行该操作！");
                }
            });
        }

    </script>
    <script type="text/javascript">
        function updateInfo(cur){


            var factoryid = document.getElementById("roadfactoryid"+cur).value;
            var roadDustid = document.getElementById("roadDustid"+cur).value;
            var companyName = document.getElementById("companyName"+cur).innerHTML;
            //alert(companyName);
            var pathLength = document.getElementById("pathLength"+cur).value;
            var ispave = document.getElementById("ispave"+cur).value;

            var averWidth = document.getElementById("averWidth"+cur).value;
            var averWeight = document.getElementById("averWeight"+cur).value;
            var carFlow = document.getElementById("carFlow"+cur).value;
            var averSpeed = document.getElementById("averSpeed"+cur).value;
            var clearTimeInstall = document.getElementById("clearTimeInstall"+cur).value;

            var clearTimeUninstall = document.getElementById("clearTimeUninstall"+cur).value;
            var sweepSpring = document.getElementById("sweepSpring"+cur).value;
            var sweepSummer = document.getElementById("sweepSummer"+cur).value;
            var sweepFall = document.getElementById("sweepFall"+cur).value;
            var waterTimesSpring = document.getElementById("waterTimesSpring"+cur).value;

            var waterTimesSummer = document.getElementById("waterTimesSummer"+cur).value;
            var waterTimesFall = document.getElementById("waterTimesFall"+cur).value;
            var dustSuppression = document.getElementById("dustSuppression"+cur).value;



            if(ispave=="1"){
                //alert(4);

                scc="1602001003";
            }
            else{
                scc="1602002000";
            }

            if(pathLength==""||ispave==""||averWeight==""||
                averSpeed==""||averWidth==""||carFlow==""||clearTimeInstall==""||
                clearTimeUninstall==""||sweepSpring==""||sweepSummer==""||sweepFall==""||
                waterTimesSpring==""||waterTimesSummer==""||waterTimesFall==""||dustSuppression==""){
                alert("红色标识为必填字段！");
                return;
            }
            else{

                $.post("ajax/FroadDustSourceTemp/saveClientRoad.do", {
                    scccode:scc,
                    factoryid:factoryid,
                    roadDustid:roadDustid,
                    companyName: companyName,
                    pathLength : pathLength,
                    ispave : ispave,

                    averWidth : averWidth,
                    averWeight:averWeight,
                    carFlow:carFlow,
                    averSpeed:averSpeed,
                    clearTimeInstall : clearTimeInstall ,
                    clearTimeUninstall : clearTimeUninstall,
                    sweepSpring : sweepSpring,
                    sweepSummer : sweepSummer,
                    sweepFall : sweepFall,
                    waterTimesSpring : waterTimesSpring,

                    waterTimesSummer:waterTimesSummer,
                    waterTimesFall:waterTimesFall,
                    dustSuppression:dustSuppression

                },function(data){
                    //alert("nihao 123");
                    var json = eval("(" + data + ")");
                    if(json.status==1){
                        alert("保存成功！");

                    }else{
                        alert("保存失败！");
                    }

                });
            }

        }

        function addTable(){
            document.getElementById("grid1").style.display='block';
            document.getElementById("add").style.display='none';
            document.getElementById("headroad").style.display='none';
        }




    </script>


</head>
@include("layouts.header")



<body onLoad="javascript:document.queryForm.reset()">
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
                 style="height:2px;margin-top:5px">
                <script type="text/javascript">
                    try {
                        ace.settings.check('breadcrumbs', 'fixed')
                    } catch (e) {
                    }
                </script>

                <ul class="breadcrumb">
                    <li><i class="icon-home home-icon"></i> <a href="#"></a></li>
                    <li>企业堆场信息</li>
                </ul>
                <!-- .breadcrumb -->
            </div>

            <div class="page-content">
                <form aid="queryForm" name="queryForm"
                      action="<c:url value="/pages/FwindErosionDustSource/listAll.do"/>"
                method="get" style="display: inline;">
                <div class="gridTable">
                    <c:forEach items="${page.result}" var="yardSourcePage"
                               varStatus="status">
                        <%
                        itemyarddusti++;
                        %>
                        <div class="col-md-12" style="margin-top: 30px; height: 40px">

                            <p style="font-size: 20px; text-align: left;color: #32B16C">
<%%>号堆场扬尘源信息
</p>
</div>
<div class="col-md-12" style="height: 40px;display:none;" >
<div class="col-md-4" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点经度1:
    </label>

    <div class="col-md-8">
        <input type="text" id="dlongitude1<%%>"
            class="check1" alt="p3x3p4s"
            onblur="checklonfour(this.id,0,4)" style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000"
            value='${yardSourcePage.longitude1}' />
    </div>
</div>
</div>
<div class="col-md-4" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点纬度1:
    </label>

    <div class="col-md-8">
        <input type="text" id="dlatitude1<%%>"
            onblur="checklatfour(this.id,0,4)"   class="check1" alt="p3x3p4s"
            style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667"
            value='${yardSourcePage.latitude1}' />
    </div>
</div>
</div>
<div class="col-md-4" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点经度2:
    </label>

    <div class="col-md-8">
        <input type="text" id="dlongitude2<%%>"
            class="check1" alt="p3x3p4s"
            onblur="checklonfour(this.id,1,4)" style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000"
            value='${yardSourcePage.longitude2}' />
    </div>
</div>
</div>
</div>
<div class="col-md-12" style="height: 40px;display:none;">
<div class="col-md-4" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点纬度2:
    </label>

    <div class="col-md-8">
        <input type="text" id="dlatitude2<%%>"
        onblur="checklatfour(this.id,1,4)"   class="check1" alt="p3x3p4s"
            style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667"

            value='${yardSourcePage.latitude2}' />
    </div>
</div>
</div>
<div class="col-md-4" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点经度3:
    </label>

    <div class="col-md-8">
        <input type="text" id="dlongitude3<%%>" class="check1" alt="p3x3p4s"
            onblur="checklonfour(this.id,2,4)" style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000"
            value='${yardSourcePage.longitude3}' />
    </div>
</div>
</div>
<div class="col-md-4" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点纬度3:
    </label>

    <div class="col-md-8">
        <input type="text" id="dlatitude3<%%>"
        onblur="checklatfour(this.id,2,4)"   class="check1" alt="p3x3p4s"
            style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667"

            value='${yardSourcePage.latitude3}' />
    </div>
</div>
</div>
</div>
<div class="col-md-12" style="height: 40px">
<div class="col-md-4" style="height: 35px;display:none;" >
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点经度4:
    </label>

    <div class="col-md-8">
        <input type="text" id="dlongitude4<%%>"  class="check1" alt="p3x3p4s"
            onblur="checklonfour(this.id,3,4)" style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000"
            value='${yardSourcePage.longitude4}' />
    </div>
</div>
</div>
<div class="col-md-4" style="height: 35px;display:none;" >
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点纬度4:
    </label>

    <div class="col-md-8">
        <input type="text" id="dlatitude4<%%>"
        onblur="checklatfour(this.id,3,4)"   class="check1" alt="p3x3p4s"
            style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667"
            value='${yardSourcePage.latitude4}' />
    </div>
</div>
</div>
<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 物料种类:<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="dmaterialType<%%>"
            class="form-control" style="height: 30px; width: 170px;"
            value='${yardSourcePage.materialType}'  readonly="readonly"/>
    </div>
</div>
</div>

<div class="col-md-6" style="height: 35px;display:none;">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 地面风速(m/s):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="dwindSpeed<%%>" onkeyup="checkNum(this);"
            onblur="checksp(this.id)"
            class="form-control" style="height: 30px; width: 170px;"
            value='${yardSourcePage.windSpeed}' />
    </div>
</div>
</div>

<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 物料含水率(%):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="dmoistureMateria<%%>" onkeyup="checkNum(this);"
            class="form-control" style="height: 30px; width: 170px; " onblur="checkhs(this.id)"
            value='${yardSourcePage.moistureMateria}' />
    </div>
</div>
</div>


</div>

<div class="col-md-12" style="height: 40px">
<div class="col-md-6" style="height: 35px;display:none;">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 装卸物料种类:<a style="color: red">*</a></label>
    <div class="col-md-8">
        <input type="text" id="dmaterialType1<%%>" class="form-control"
            style="height: 30px; width: 170px;"
            value='${yardSourcePage.materialType1}' readonly="readonly"/>
    </div>
</div>
</div>
<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 年物料装卸量(t):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="dmaterialCapacity<%%>" onkeyup="checkNum(this);"
            class="form-control" style="height: 30px; width: 170px;"
            value='${yardSourcePage.materialCapacity}' />
    </div>
</div>
</div>
<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 每日装卸次数:<a style="color: red">*</a></label>

    <div class="col-md-8">
        <input type="text" id="dloadingCount<%%>" onkeyup="checkNum(this);"
            class="form-control" style="height: 30px; width: 170px;"
            value='${yardSourcePage.loadingCount}' />
    </div>
</div>
</div>


</div>
<div class="col-md-12" style="height: 40px">


<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 每次装卸量(t):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="dloadingCapacity<%%>" onkeyup="checkNum(this);"
            class="form-control" style="height: 30px; width: 170px;"
            value='${yardSourcePage.loadingCapacity}' />
    </div>
</div>
</div>
<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 料堆占地面积(m<sup>2</sup>):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="dheapCovered<%%>" onkeyup="checkNum(this);"
            class="form-control" style="height: 30px; width: 170px;"
            value='${yardSourcePage.heapCovered}' />
    </div>
</div>
</div>
</div>


<div class="col-md-12" style="height: 40px">


<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 料堆表面积(m<sup>2</sup>):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="dheapArea<%%>" onkeyup="checkNum(this);"
            class="form-control" style="height: 30px; width: 170px;"
            value='${yardSourcePage.heapArea}' />
    </div>
</div>
</div>
<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 料堆高度(m):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="dheapHeigh<%%>" onkeyup="checkNum(this);"
            class="form-control" style="height: 30px; width: 170px;"
            value='${yardSourcePage.heapHeigh}' />
    </div>
</div>
</div>
</div>

<div class="col-md-12" style="height: 40px;display:none;">
<div class="col-md-6" style="height: 35px;display:none">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> SCC编码: </label>

    <div class="col-md-8">
        <input type="text" id="dscccode<%%>" onkeyup="checkNum(this);"
            class="form-control" style="height: 30px; width: 170px;"
            value='${yardSourcePage.scccode}' readonly="readonly"/>
        <input type="text" id="dscccode1<%%>" onkeyup="checkNum(this);"
            class="form-control" style="height: 30px; width: 170px;"
            value='${yardSourcePage.scccode1}' readonly="readonly"/>
    </div>
</div>
</div>
</div>

<div class="col-md-12" style="height: 50px">
<div class="col-md-12" style="height: 35px;">
<div class="form-group" style="margin-top:10px">
    <label class="col-md-2 control-label no-padding-right"
        for="form-field-3" style="width:125px;">
        装卸控制措施:<a style="color: red">*</a>
    </label>
</div>
</div>
</div>

<div class="col-md-12" style="height: 50px">
<div class="col-md-12" style="height: 35px;">
<div class="form-group" style="margin-top:10px">
    <div class="col-md-12" style="width:600px;padding-left:20px">
        <label><input name="yarddust<%%>" type="checkbox" value="A" />封闭</label>
        <label><input name="yarddust<%%>" type="checkbox"value="B" />密封</label>
        <label><input name="yarddust<%%>" type="checkbox"value="C" />抑尘墙</label>
        <label><input name="yarddust<%%>" type="checkbox"value="D" />抑尘网</label>
        <label><input name="yarddust<%%>" type="checkbox"value="E" />防风网</label>
        <label><input name="yarddust<%%>" type="checkbox"value="F" />洒水</label>
        <label><input name="yarddust<%%>" type="checkbox"value="G" />喷淋</label>
        <label><input name="yarddust<%%>" type="checkbox"value="H" />喷水</label>
        <label><input name="yarddust<%%>" type="checkbox"value="I" />半封闭</label>
        <label><input name="yarddust<%%>" type="checkbox"value="J" />无</label>
    </div>
    <input id="dcontrolMeasures1<%%>"
            value='${yardSourcePage.controlMeasures1}'
            style="display: none" />
</div>
</div>
</div>

<div class="col-md-12" style="height: 50px">
<div class="col-md-12" style="height: 35px">
<div class="form-group">
    <label class="col-md-2 control-label no-padding-right"
        for="form-field-3" style="width:125px">
        风蚀控制措施:
        <a style="color: red">*</a>
    </label>
</div>
</div>
</div>

<div class="col-md-12" style="height: 50px">
<div class="col-md-12" style="height: 35px">
<div class="form-group">
    <div class="col-md-12" style="width:600px;padding-left:20px">
        <input id="dcontrolMeasures<%%>"
            value='${yardSourcePage.controlMeasures}'
            style="display: none" />
        <label><input name="winddust<%%>" type="checkbox" value="A" />封闭</label>
        <label><input name="winddust<%%>" type="checkbox" value="B" />密闭</label>
        <label><input name="winddust<%%>" type="checkbox" value="C" />洒水</label>
        <label><input name="winddust<%%>" type="checkbox" value="D" />喷淋</label>
        <label><input name="winddust<%%>" type="checkbox" value="E" />喷水</label>
        <label><input name="winddust<%%>" type="checkbox" value="F" />化学覆盖剂</label>
        <label><input name="winddust<%%>" type="checkbox" value="G" />编织布覆盖</label>
        <label><input name="winddust<%%>" type="checkbox" value="H" />半封闭</label>
        <label><input name="winddust<%%>" type="checkbox"value="I" />无</label>

    </div>
    </div>
</div>
</div>

<div class="col-md-12" style="height: 40px">
<div class="col-md-10" style="height: 35px">
<div class="form-group" style="width:400px">
    <label class="col-md-3 control-label no-padding-right"
            for="form-field-3" style="width:130px"> 日装卸开始时间:</label>

    <div  class="input-group date form_time "  style="width: 200px" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
        <input type="text" id="dloadingStart<%%>"
            class="form-control" style="height: 30px; width: 170px;"
            value='${yardSourcePage.loadingStart}' readonly="readonly"/>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
</div>
</div>
</div>

<div class="col-md-12" style="height: 40px">
<div class="col-md-10" style="height: 35px">
<div class="form-group" style="width:400px">
    <label class="col-md-3 control-label no-padding-right"
        for="form-field-3" style="width:130px"> 日装卸结束时间:</label>
    <div  class="input-group date form_time " style="width: 200px" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
        <input type="text" id="dloadingTime<%%>"
            class="form-control" style="height: 30px; width: 170px;"
            value='${yardSourcePage.loadingTime}' readonly="readonly"/>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
</div>
</div>
<div class="col-md-4" style="height: 35px; display: none">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> </label>

    <div class="col-md-8">
        <input type="text" id="dwindDustid<%%>" class="form-control"
            style="height: 30px; width: 170px;"
            value='${yardSourcePage.windDustid}' />
    </div>
</div>
</div>
</div>
<div align="right" style="margin-right: 110px;">
<input type="button" class="btn btn-primary"
style="width: 80px; line-height: 8px; margin-left: 15px;"
value="更新数据" id="saveCon" onclick="updateYard(<%%>)" /> <input
type="button" class="btn btn-primary"
style="width: 80px; line-height: 8px; margin-left: 15px;"
value="删除" id="saveCon"
onclick="deleteYard('${yardSourcePage.windDustid}')" />
</div>
</c:forEach>
<div class="col-md-8" style="display: none">
<input type="text" id="itemyarddusti" class="form-control"
style="height: 30px; width: 170px;" value='<%%>' />
</div>

<div id="grid1" style="margin-top: 10px; display: none">
<div class="page-header" style="margin-top: 20px; height: 40px；">
<h1>
<b>堆场扬尘源新增</b>
</h1>
</div>
<div class="col-md-12" id="yihao" style="margin-top: 20px; height: 40px;display:none;">
<p style="font-size: 20px; text-align: left; color: #32B16C">
    1号堆场扬尘源信息
</p>
</div>
<div class="col-md-12" style="height: 40px;display:none;" >
<div class="col-md-4" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点经度1:
    </label>

    <div class="col-md-8">
        <input type="text" id="ndlongitude1"
            class="check1" alt="p3x3p4s"
            onblur="checklonfour(this.id,0,4)" style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000"/>
    </div>
</div>
</div>
<div class="col-md-4" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点纬度1:
    </label>

    <div class="col-md-8">
        <input type="text" id="ndlatitude1"
        onblur="checklatfour(this.id,0,4)"   class="check1" alt="p3x3p4s"
            style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667"
                                                        />
    </div>
</div>
</div>
<div class="col-md-4" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点经度2:
    </label>

    <div class="col-md-8">
        <input type="text" id="ndlongitude2"
        class="check1" alt="p3x3p4s"
            onblur="checklonfour(this.id,1,4)" style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000" />
    </div>
</div>
</div>
</div>
<div class="col-md-12" style="height: 40px;display:none;">
<div class="col-md-4" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点纬度2:
    </label>

    <div class="col-md-8">
        <input type="text" id="ndlatitude2"
        onblur="checklatfour(this.id,1,4)"   class="check1" alt="p3x3p4s"
            style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667"
             />
    </div>
</div>
</div>
<div class="col-md-4" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点经度3:
    </label>

    <div class="col-md-8">
        <input type="text" id="ndlongitude3"
        class="check1" alt="p3x3p4s"
            onblur="checklonfour(this.id,2,4)" style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000"/>
    </div>
</div>
</div>
<div class="col-md-4" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点纬度3:
    </label>

    <div class="col-md-8">
        <input type="text" id="ndlatitude3"
        onblur="checklatfour(this.id,2,4)"   class="check1" alt="p3x3p4s"
            style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667"

             />
    </div>
</div>
</div>
</div>
<div class="col-md-12" style="height: 40px">


<div class="col-md-4" style="height: 35px;display:none;" >
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点经度4:
    </label>

    <div class="col-md-8">
        <input type="text" id="ndlongitude4"
        class="check1" alt="p3x3p4s"
            onblur="checklonfour(this.id,3,4)" style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000"
            />
    </div>
</div>
</div>
<div class="col-md-4" style="height: 35px;display:none;" >
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 拐点纬度4:
    </label>

    <div class="col-md-8">
        <input type="text" id="ndlatitude4"
            onblur="checklatfour(this.id,3,4)"   class="check1" alt="p3x3p4s"
            style="height: 25px; margin-top: 3px; width: 170px;"
            onkeyup="if(isNaN(value))execCommand('undo')"
            onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667"/>
    </div>
</div>
</div>
<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 物料种类:<a style="color: red">*</a>
    </label>
    <div class="col-md-8">
        <select name="ndmaterialType" id="ndmaterialType" class="form-control"  style="width:170px;height:30px;">
            <option value=""></option>
            <option value="焦炭">焦炭</option>
            <option value="块矿">块矿</option>
            <option value="矿渣">矿渣</option>
            <option value="炉渣">炉渣</option>
            <option value="煤灰">煤灰</option>
            <option value="灰渣">灰渣</option>
            <option value="煤炭">煤炭</option>
            <option value="球团矿">球团矿</option>
            <option value="沙石">沙石</option>
            <option value="砂石">砂石</option>
            <option value="石灰石">石灰石</option>
            <option value="水泥熟料">水泥熟料</option>
            <option value="粘土">粘土</option>
        </select>
    </div>
</div>
</div>

<div class="col-md-6" style="height: 35px;display:none;">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 地面风速(m/s):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="ndwindSpeed"
            onkeyup="checkNum(this);" onblur="checksp(this.id)"
            class="form-control" style="height: 30px; width: 170px;"/>
    </div>
</div>
</div>

<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 物料含水率(%):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="ndmoistureMateria" onblur="checkhs(this.id)"
        onkeyup="checkNum(this);" class="form-control"
        style="height: 30px; width: 170px;" />
    </div>
</div>
</div>
</div>

<div class="col-md-12" style="height: 40px">
<div class="col-md-6" style="height: 35px;display:none;">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 装卸物料种类:<a style="color: red">*</a></label>
    <div class="col-md-8">
        <select name="ndmaterialType1" id="ndmaterialType1" class="form-control"  style="width:170px;height:30px;">
            <option value=""></option>
            <option value="焦炭">焦炭</option>
            <option value="块矿">块矿</option>
            <option value="矿渣">矿渣</option>
            <option value="炉渣">炉渣</option>
            <option value="煤灰">煤灰</option>
            <option value="灰渣">灰渣</option>
            <option value="煤炭">煤炭</option>
            <option value="球团矿">球团矿</option>
            <option value="沙石">沙石</option>
            <option value="砂石">砂石</option>
            <option value="石灰石">石灰石</option>
            <option value="水泥熟料">水泥熟料</option>
            <option value="粘土">粘土</option>
        </select>
    </div>
</div>
</div>
<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 年物料装卸量(t):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="ndmaterialCapacity" onblur="checkwl(this.id)";
        onkeyup="checkNum(this);" class="form-control"
        style="height: 30px; width: 170px;"/>
    </div>
</div>
</div>
<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 每日装卸次数:<a style="color: red">*</a></label>

    <div class="col-md-8">
        <input type="text" id="ndloadingCount"
        onkeyup="checkNum(this);" class="form-control"
        style="height: 30px; width: 170px;"/>
    </div>
</div>
</div>
</div>
<div class="col-md-12" style="height: 40px">


<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 每次装卸量(t):<a style="color: red">*</a>
    </label>
    <div class="col-md-8">
    <input type="text" id="ndloadingCapacity" class="check1"style="height: 30px; width: 170px;"/>
    </div>
</div>
</div>
<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 料堆占地面积(m<sup>2</sup>):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="ndheapCovered" onkeyup="checkNum(this);"
            class="form-control" style="height: 30px; width: 170px;"
             />
    </div>
</div>
</div>
</div>

<div class="col-md-12" style="height: 40px">

<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 料堆表面积(m<sup>2</sup>):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="ndheapArea"
        onkeyup="checkNum(this);" class="form-control"
        style="height: 30px; width: 170px;" />
    </div>
</div>
</div>
<div class="col-md-6" style="height: 35px">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> 料堆高度(m):<a style="color: red">*</a>
    </label>

    <div class="col-md-8">
        <input type="text" id="ndheapHeigh" onkeyup="checkNum(this);"
            class="form-control" style="height: 30px; width: 170px;"/>
    </div>
</div>
</div>
</div>
<div class="col-md-12" style="height: 40px;display:none;">

<div class="col-md-6" style="height: 35px;display:none;">
<div class="form-group">
    <label class="col-md-4 control-label no-padding-right"
        for="form-field-3"> SCC编码:<a style="color: red">*</a>
    </label>
    <div class="col-md-8">
        <select name="nscccode" id="nscccode" class="form-control"  style="width:170px;height:30px;">
            <option value="1604001001">1604001001</option>
            <option value="1604001001">1604001002</option>
            <option value="1604002001">1604002001</option>
            <option value="1604002002">1604002002</option>
            <option value="1604003001">1604003001</option>
            <option value="1604003002">1604003002</option>
            <option value="1604004001">1604004001</option>
            <option value="1604004002">1604004002</option>
            <option value="1604005001">1604005001</option>
            <option value="1604005002">1604005002</option>
        </select>
    </div>
</div>
</div>

</div>


<div class="col-md-12" style="height: 50px">
<div class="col-md-12" style="height: 35px">
<div class="form-group" style="margin-top:10px">
    <label class="col-md-2 control-label no-padding-right"
        for="form-field-3" style="width:130px">
        装卸控制措施:<a style="color: red">*</a>
    </label>
    </div>
</div>
</div>

<div class="col-md-12" style="height: 50px">
<div class="col-md-12" style="height: 35px">
<div class="form-group" style="margin-top:10px">

    <div class="col-md-12" style="width:600px;padding-left:20px">
        <label><input name="yarddust" type="checkbox" value="A" />封闭</label>
        <label><input name="yarddust" type="checkbox"value="B" />密封</label>
        <label><input name="yarddust" type="checkbox"value="C" />抑尘墙</label>
        <label><input name="yarddust" type="checkbox"value="D" />抑尘网</label>
        <label><input name="yarddust" type="checkbox"value="E" />防风网</label>
        <label><input name="yarddust" type="checkbox"value="F" />洒水</label>
        <label><input name="yarddust" type="checkbox"value="G" />喷淋</label>
        <label><input name="yarddust" type="checkbox"value="H" />喷水</label>
        <label><input name="yarddust" type="checkbox"value="I" />半封闭</label>
        <label><input name="yarddust" type="checkbox"value="J" />无</label>
    </div>
    </div>
</div>
</div>

<div class="col-md-12" style="height: 50px">
<div class="col-md-12" style="height: 35px">
    <div class="form-group">
        <label class="col-md-2 control-label no-padding-right"
            for="form-field-3" style="width:130px">
            风蚀控制措施:
            <a style="color: red">*</a>
        </label>
    </div>
</div>
</div>

<div class="col-md-12" style="height: 50px">
<div class="col-md-12" style="height: 35px">
    <div class="form-group">

        <div class="col-md-12" style="width:600px;padding-left:20px">
            <label><input name="winddust" type="checkbox" value="A" />封闭</label>
            <label><input name="winddust" type="checkbox" value="B" />密闭</label>
            <label><input name="winddust" type="checkbox" value="C" />洒水</label>
            <label><input name="winddust" type="checkbox" value="D" />喷淋</label>
            <label><input name="winddust" type="checkbox" value="E" />喷水</label>
            <label><input name="winddust" type="checkbox" value="F" />化学覆盖剂</label>
            <label><input name="winddust" type="checkbox" value="G" />编织布覆盖</label>
            <label><input name="winddust" type="checkbox" value="H" />半封闭</label>
            <label><input name="winddust" type="checkbox" value="I" />无</label>
        </div>
    </div>
</div>
</div>

<div class="col-md-12" style="height: 40px">
<div class="col-md-6" style="height: 35px">
<div class="form-group" style="width:400px">
    <label class="col-md-3 control-label no-padding-right"
            for="form-field-3" style="width:130px"> 日装卸开始时间:</label>
    <div  class="input-group date form_time "  style="width: 200px" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
        <input type="text" id="ndloadingStart"
            class="form-control" style="height: 30px; width: 170px;"
            value="" readonly="readonly"/>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
</div>
</div>
</div>

<div class="col-md-12" style="height: 40px">
<div class="col-md-6" style="height: 35px">
<div class="form-group" style="width:400px">
    <label class="col-md-3 control-label no-padding-right"
        for="form-field-3" style="width:130px"> 日装卸结束时间:</label>
    <div   style="width: 200px" class="input-group date form_time " data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
        <input type="text" id="ndloadingTime"
            class="form-control" style="height: 30px; width: 170px;"
            value="" readonly="readonly"/>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
</div>
</div>
</div>

<div align="left">
<input type="button" class="btn btn-primary"
    style="width: 80px; line-height: 8px; margin-left: 15px;"
    value="保存"   onclick="addYard()" />
</div>
</div>
<div style="text-align:center;width: 100%;display:none ">
<simpletable:pageToolbar page="${page}"></simpletable:pageToolbar>
</div>
<div align="left">
<input type="button" class="btn btn-primary"
style="width:80px;line-height:8px;margin-left:15px;" value="新增"
id="add" onclick="addTable()" />
</div>
<div class="row" style="height:60px;text-align:center;" >
<%@ include file="/client/public_end.jsp"%>
</div>


</div>
<!--/.gridTable -->
</form>
</div>
<!-- /.page-content -->
</div>
<!-- /.main-content -->
</div>
<!-- /.main-container-inner -->

</div>



<script type="text/javascript">
$("#set2").toggle();
document.getElementById("yarddust").setAttribute("class","active");
</script>
<script type="text/javascript">
window.jQuery
|| document
.write("<script src='assets/js/jquery-2.0.3.min.js'>"
+ "<"+"/script>");
</script>



<script type="text/javascript">
if ("ontouchend" in document)
document
.write("<script src='assets/js/jquery.mobile.custom.min.js'>"
+ "<"+"/script>");
</script>




<!-- inline scripts related to this page -->
<div style="display:none">
<script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540'
language='JavaScript' charset='gb2312'></script>
</div>
</body>
</html>
