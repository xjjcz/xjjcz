
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
                 style="height: 2px; margin-top: 5px">
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
                        企业施工信息
                    </li>
                </ul>
                <!-- .breadcrumb -->
            </div>

            <div class="page-content">
                <form id="queryForm" name="queryForm"
                      action=""
                      method="get" style="display: inline;">
                    <div class="gridTable">
                        <c:forEach items="${page.result}" var="condustSourcePage"
                                   varStatus="status">

                            <div class="col-md-12" style="margin-top: 20px; height: 40px">
                                <p style="font-size: 20px; text-align: left; color: #32B16C">
                                    <%%>号施工扬尘源信息
                                </p>
                            </div>
                            <div class="col-md-12" style="height: 40px;display:none;">
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点经度1：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="longitude1<%%>"
                                                   class="check1"
                                                   onblur="checklonfour(this.id,0,4)"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="73.6667~96.3000"
                                                   style="height: 30px; width: 170px;"
                                                   alt="p3x3p4s"
                                                   value='${condustSourcePage.longitude1}' />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点纬度1：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="latitude1<%%>"
                                                   class="check1"
                                                   onblur="checklatfour(this.id,0,4)"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="34.4167~48.1667"
                                                   alt="p3x3p4s"
                                                   style="height: 30px; width: 170px;"
                                                   value='${condustSourcePage.latitude1}' />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点经度2：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="longitude2<%%>"
                                                   class="check1"
                                                   alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,1,4)" onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000"
                                                   style="height: 30px; width: 170px;"
                                                   value='${condustSourcePage.longitude2}' />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px;display:none">
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点纬度2：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="latitude2<%%>"
                                                   class="check1"
                                                   alt="p3x3p4s"
                                                   onblur="checklatfour(this.id,1,4)" onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="34.4167~48.1667"
                                                   style="height: 30px; width: 170px;"
                                                   value='${condustSourcePage.latitude2}' />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点经度3：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="longitude3<%%>"
                                                   class="check1"
                                                   alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,2,4)" onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000"
                                                   style="height: 30px; width: 170px;"
                                                   value='${condustSourcePage.longitude3}' />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点纬度3：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="latitude3<%%>"
                                                   class="check1"
                                                   alt="p3x3p4s"
                                                   onblur="checklatfour(this.id,2,4)" onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="34.4167~48.1667"
                                                   style="height: 30px; width: 170px;"
                                                   value='${condustSourcePage.latitude3}' />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px;display:none" >
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点经度4：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="longitude4<%%>"
                                                   class="check1"
                                                   alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,3,4)"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="73.6667~96.3000"
                                                   style="height: 30px; width: 170px;"
                                                   value='${condustSourcePage.longitude4}' />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px;display:none" >
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点纬度4：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="latitude4<%%>"
                                                   class="check1"
                                                   alt="p3x3p4s"
                                                   onblur="checklatfour(this.id,3,4)"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="34.4167~48.1667"
                                                   style="height: 30px; width: 170px;"
                                                   value='${condustSourcePage.latitude4}' />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            施工类型:<a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="constructionType<%%>"
                                                   class="form-control" style="height: 30px; width: 250px;"
                                                   value='${condustSourcePage.constructionType}' readonly="readonly"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            建筑施工阶段:<a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="constructState<%%>"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='${condustSourcePage.constructState}' readonly="readonly" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            施工规划面积(m<sup>2</sup>):
                                            <a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="constructArea<%%>"
                                                   onkeyup="checkNum(this);" class="form-control"
                                                   style="height: 30px; width: 250px;"
                                                   value='${condustSourcePage.constructArea}' />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            施工开工面积(m<sup>2</sup>):

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="nowkgarea<%%>"
                                                   onkeyup="checkNum(this);" class="form-control"
                                                   style="height: 30px; width: 170px;"
                                                   value='${condustSourcePage.nowkgarea}' />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px;display:none;">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            施工竣工面积(m<sup>2</sup>):

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="finisharea<%%>"
                                                   onkeyup="checkNum(this);" class="form-control"
                                                   style="height: 30px; width: 170px;"
                                                   value='${condustSourcePage.finisharea}' />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px;display:none;">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            SCC编码：
                                            <a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="scccode<%%>"
                                                   class="form-control"
                                                   style="height: 30px; width: 170px;"
                                                   value='${condustSourcePage.scccode}' readonly="readonly" />
                                            <input type="text" id="constructDustid<%%>"
                                                   class="form-control"
                                                   style="height: 30px; width: 170px; display: none"
                                                   value='${condustSourcePage.constructDustid}' />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-12" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label no-padding-right"
                                               for="form-field-3" style="width:130px">
                                            年活动月份:

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-12" style="height: 35px">
                                    <div class="form-group">
                                        <div class="col-md-12" style="width:600px;padding-left:20px;">
                                            <input type="text" id="constructMonths<%%>"
                                                   onkeyup="checkNum(this);" class="form-control"
                                                   style="height: 30px; width: 170px; display: none"
                                                   value='${condustSourcePage.constructMonths}' />
                                            <label><input name="Month<%%>" type="checkbox" value="1" />1月</label>
                                            <label><input name="Month<%%>" type="checkbox"value="2" />2月</label>
                                            <label><input name="Month<%%>" type="checkbox"value="3" />3月</label>
                                            <label><input name="Month<%%>" type="checkbox"value="4" />4月</label>
                                            <label><input name="Month<%%>" type="checkbox"value="5" />5月</label>
                                            <label><input name="Month<%%>" type="checkbox" value="6" />6月</label>
                                            <label><input name="Month<%%>" type="checkbox"value="7" />7月</label>
                                            <label><input name="Month<%%>" type="checkbox"value="8" />8月</label>
                                            <label><input name="Month<%%>" type="checkbox"value="9" />9月</label>
                                            <label><input name="Month<%%>" type="checkbox"value="10" />10月</label>
                                            <label><input name="Month<%%>" type="checkbox"value="11" />11月</label>
                                            <label><input name="Month<%%>" type="checkbox"value="12" />12月</label>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 35px">
                                <div class="col-md-12" style="height: 35px">
                                    <div class="form-group" >
                                        <label class="col-md-2 control-label no-padding-right"for="form-field-3" style="width:130px">
                                            控制措施:<a style="color: red">*</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 35px">
                                <div class="col-md-12" style="height: 35px">
                                    <div class="form-group" >
                                        <div class="col-md-12" style="width:700px;padding-left:20px;">
                                            <input type="text" id="controlMeasures<%%>"
                                                   onkeyup="checkNum(this);" class="form-control"
                                                   style="height: 30px; width: 170px; display: none"
                                                   value='${condustSourcePage.controlMeasures}' />
                                            <label><input name="control<%%>" type="checkbox" value="A1" />1.8m硬质围挡</label>
                                            <label><input name="control<%%>" type="checkbox" value="A2" />2.4m硬质围挡</label>
                                            <label><input name="control<%%>" type="checkbox" value="B" />化学抑尘剂</label>
                                            <label><input name="control<%%>" type="checkbox" value="C" />覆盖防尘布</label>
                                            <label><input name="control<%%>" type="checkbox" value="E" />路面铺装和洒水</label>
                                            <label><input name="control<%%>" type="checkbox" value="F" />封闭</label>
                                            <label><input name="control<%%>" type="checkbox" value="无" />无控制措施</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-10" style="height: 35px">
                                    <div class="form-group" style="width:400px">
                                        <label class="col-md-3 control-label no-padding-right"
                                               for="form-field-3" style="width:130px">
                                            施工开始日期：

                                        </label>
                                        <div class="input-group date form_date "
                                             style="width: 200px" data-date="" data-date-format=""
                                             data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                            <input id="startdate<%%>" class="form-control"
                                                   style="height: 30px; width: 170px;" size="16" type="text"
                                                   value='${condustSourcePage.startdate}' readonly>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-remove"></span> </span>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-calendar"></span> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-10" style="height: 35px">
                                    <div class="form-group" style="width:400px">
                                        <label class="col-md-3 control-label no-padding-right"
                                               for="form-field-3" style="width:130px">
                                            施工结束日期：

                                        </label>
                                        <div class="input-group date form_date "
                                             style="width: 200px" data-date="" data-date-format=""
                                             data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                            <input id="finishdate<%%>"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   size="16" type="text"
                                                   value='${condustSourcePage.finishdate}' readonly>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-remove"></span> </span>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-calendar"></span> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div align="right" style="margin-right: 110px;">
                                <input type="button" class="btn btn-primary"
                                       style="width: 80px; line-height: 8px; margin-left: 15px;"
                                       value="更新数据" id="saveCon"
                                       onclick="" />
                                <input type="button" class="btn btn-primary"
                                       style="width: 80px; line-height: 8px; margin-left: 15px;"
                                       value="删除" id="saveCon"
                                       onclick="deleteCon('${condustSourcePage.constructDustid}')" />
                            </div>
                        </c:forEach>
                        <div class="col-md-8" style="display: none">
                            <input type="text" id="itemcondusti" class="form-control"
                                   style="height: 30px; width: 170px;" value='<%%>' />
                        </div>


                        <div id="grid1" style="margin-top: 10px; display: none">
                            <div class="page-header"
                                 style="margin-top: 20px; height: 40px；">
                                <h1>
                                    <b>施工扬尘源新增</b>
                                </h1>
                            </div>
                            <div class="col-md-12" id="yihao" style="margin-top: 20px; height: 40px;display:none;">
                                <p style="font-size: 20px; text-align: left; color: #32B16C">
                                    1号施工扬尘源信息
                                </p>
                            </div>
                            <div class="col-md-12" style="height: 40px;display:none" >
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点经度1：

                                        </label>
                                        <div class="col-md-8">
                                            <input type="text" id="nlongitude1"
                                                   class="check1" alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,0,4)" style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点纬度1：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="nlatitude1"
                                                   onblur="checklatfour(this.id,0,4)"
                                                   class="check1"
                                                   alt="p3x3p4s"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="34.4167~48.1667"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点经度2：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="nlongitude2"
                                                   class="check1" alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,1,4)" style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px;display:none">
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点纬度2：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="nlatitude2"
                                                   onblur="checklatfour(this.id,1,4)"   class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点经度3：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="nlongitude3"
                                                   class="check1" alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,2,4)" style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点纬度3：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="nlatitude3"
                                                   onblur="checklatfour(this.id,2,4)"   class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-4" style="height: 35px;display:none">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点经度4：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="nlongitude4"
                                                   class="check1" alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,3,4)" style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"  placeholder="73.6667~96.3000" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px;display:none" >
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点纬度4：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="nlatitude4"
                                                   onblur="checklatfour(this.id,3,4)"   class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')" placeholder="34.4167~48.1667" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            施工类型:<a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <!--<input type="text" id="nconstructionType"
                                                class="form-control" style="height: 30px; width: 170px;" />
                                            --><select name="constructType" id="nconstructionType" class="form-control"  style="width:170px;height:30px;">
                                                <option value=""></option>
                                                <option value="城市市政基础设施建设">城市市政基础设施建设</option>
                                                <option value="建筑物建造与拆迁建筑物建造与拆迁">建筑物建造与拆迁</option>
                                                <option value="设备安装工程">设备安装工程</option>
                                                <option value="装饰修缮工程">装饰修缮工程</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            建筑施工阶段:<a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <!--<input type="text" id="nconstructState"
                                                class="form-control" style="height: 30px; width: 170px;" />
                                            --><select name="constructStage" id="nconstructState" class="form-control"   style="width:170px;height:30px;">
                                                <option value=""></option>
                                                <option value="未分类">未分类</option>
                                                <option value="土方开挖">土方开挖</option>
                                                <option value="地基建设">地基建设</option>
                                                <option value="土方回填">土方回填</option>
                                                <option value="主体建设">主体建设</option>
                                                <option value="装饰装修">装饰装修</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            施工规划面积(m<sup>2</sup>):
                                            <a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="nconstructArea"
                                                   onkeyup="checkNum(this);" class="form-control"
                                                   style="height: 30px; width: 170px;" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            施工开工面积(m<sup>2</sup>):

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="nnowkgarea"
                                                   onkeyup="checkNum(this);" class="form-control"
                                                   style="height: 30px; width: 170px;" />
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="col-md-12" style="height:40px;display:none;">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            施工竣工面积(m<sup>2</sup>)：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="nfinisharea"
                                                   onkeyup="checkNum(this);" class="form-control"
                                                   style="height: 30px; width: 170px;" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4" style="height: 35px;display:none;" >
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            SCC编码：
                                            <a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <select name="nscccode" id="nscccode" class="form-control"   style="width:170px;height:30px;">
                                                <option value="1603001000">1603001000</option>
                                                <option value="1603001002">1603001002</option>
                                                <option value="1603001003">1603001003</option>
                                                <option value="1603001004">1603001004</option>
                                                <option value="1603001005">1603001005</option>
                                                <option value="1603002000">1603002000</option>
                                                <option value="1603002001">1603002001</option>
                                                <option value="1603002002">1603002002</option>
                                                <option value="1603002003">1603002003</option>
                                                <option value="1603002004">1603002004</option>
                                                <option value="1603002005">1603002005</option>
                                                <option value="1603003000">1603003000</option>
                                                <option value="1603003001">1603003001</option>
                                                <option value="1603003002">1603003002</option>
                                                <option value="1603003003">1603003003</option>
                                                <option value="1603003004">1603003004</option>
                                                <option value="1603003005">1603003005</option>
                                                <option value="1603004000">1603004000</option>
                                                <option value="1603004001">1603004001</option>
                                                <option value="1603004002">1603004002</option>
                                                <option value="1603004003">1603004003</option>
                                                <option value="1603004004">1603004004</option>
                                                <option value="1603004005">1603004005</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-12" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label no-padding-right"
                                               for="form-field-3" style="width:130px">
                                            年活动月份:
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-12" style="height: 35px">
                                    <div class="form-group">
                                        <div class="col-md-12" style="width:600px;padding-left:20px;">
                                            <label><input name="Month" type="checkbox" value="1" />1月</label>
                                            <label><input name="Month" type="checkbox"value="2" />2月</label>
                                            <label><input name="Month" type="checkbox"value="3" />3月</label>
                                            <label><input name="Month" type="checkbox"value="4" />4月</label>
                                            <label><input name="Month" type="checkbox"value="5" />5月</label>
                                            <label><input name="Month" type="checkbox" value="6" />6月</label>
                                            <label><input name="Month" type="checkbox"value="7" />7月</label>
                                            <label><input name="Month" type="checkbox"value="8" />8月</label>
                                            <label><input name="Month" type="checkbox"value="9" />9月</label>
                                            <label><input name="Month" type="checkbox"value="10" />10月</label>
                                            <label><input name="Month" type="checkbox"value="11" />11月</label>
                                            <label><input name="Month" type="checkbox"value="12" />12月</label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12" style="height: 35px">
                                <div class="col-md-12" style="height: 35px;">
                                    <div class="form-group" >
                                        <label class="col-md-2 control-label no-padding-right"for="form-field-3" style="width:130px">
                                            控制措施:<a style="color: red">*</a>
                                        </label>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 35px">
                                <div class="col-md-12" style="height: 35px;">
                                    <div class="form-group" >

                                        <div class="col-md-12" style="width:700px;padding-left:20px;">
                                            <label><input name="control" type="checkbox" value="A1" />1.8m硬质围挡</label>
                                            <label><input name="control" type="checkbox" value="A2" />2.4m硬质围挡</label>
                                            <label><input name="control" type="checkbox" value="B" />化学抑尘剂</label>
                                            <label><input name="control" type="checkbox" value="C" />覆盖防尘布</label>
                                            <label><input name="control" type="checkbox" value="E" />路面铺装和洒水</label>
                                            <label><input name="control" type="checkbox" value="F" />封闭</label>
                                            <label><input name="control" type="checkbox" value="无" />无控制措施</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-10" style="height: 35px">
                                    <div class="form-group" style="width:400px">
                                        <label class="col-md-3 control-label no-padding-right"
                                               for="form-field-3" style="width:130px">
                                            施工开始日期：

                                        </label>
                                        <div class="input-group date form_date "
                                             style="width: 200px" data-date="" data-date-format=""
                                             data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                            <input id="nstartdate" class="form-control"
                                                   style="height: 30px; width: 170px;" size="16" type="text"
                                                   value="" readonly>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-remove"></span> </span>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-calendar"></span> </span>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-10" style="height: 35px">
                                    <div class="form-group" style="width:400px">
                                        <label class="col-md-3 control-label no-padding-right"
                                               for="form-field-3" style="width:130px">
                                            施工结束日期：

                                        </label>


                                        <div class="input-group date form_date "
                                             style="width: 200px" data-date="" data-date-format=""
                                             data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                            <input id="nfinishdate" class="form-control"
                                                   style="height: 30px; width: 170px;" size="16" type="text"
                                                   value="" readonly>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-remove"></span> </span>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-calendar"></span> </span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div align="left">
                                <input type="button" class="btn btn-primary"
                                       style="width: 80px; line-height: 8px; margin-left: 15px;"
                                       value="保存" onclick="addCon()" />
                            </div>
                        </div>

                        <div style="text-align: center; width: 100%;display: none">
                            <simpletable:pageToolbar page="${page}"></simpletable:pageToolbar>
                        </div>
                        <div align="left">
                            <input type="button" class="btn btn-primary"
                                   style="width: 80px; line-height: 8px; margin-left: 15px;"
                                   value="新增" id="add" onclick="addTable()"/>
                        </div>
                    </div>
                    <!--/.gridTable -->
                    <div class="row" style="height:60px;text-align:center;" >
                    <!--<%@ include file="/client/public_end.jsp"%>-->
                    </div>

                </form>
            </div>
            <!-- /.page-content -->
        </div>
        <!-- /.main-content -->
    </div>
    <!-- /.main-container-inner -->

</div>
<!-- /.main-container -->




<script type="text/javascript">
    $("#set2").toggle();
    document.getElementById("condust").setAttribute("class","active");
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
