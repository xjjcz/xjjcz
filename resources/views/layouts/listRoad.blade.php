<!DOCTYPE html>
<?php
$itemroaddusti = 0;
?>
<html lang="en">
<head>
    <title>道路扬尘源</title>

    <!-- basic styles -->
    <meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文"/>
    <meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>

    <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/font-awesome.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/font-awesome-ie7.min.css") }}" rel="stylesheet"/>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
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
    <script src="{{ asset("/js/client.js") }}"></script>
    <script src="{{ asset("/js/savehelp.js") }}"></script>
    <link rel="stylesheet" href="{{ asset("/js/ace-ie.min.css") }}"/>
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
    <link rel="stylesheet" href="{{ asset("http://fonts.googleapis.com/css?family=Open+Sans:400,300") }}"/>
    {{--<script type="text/javascript" src="<c:url value="/widgets/simpletable/simpletable.js"/>"></script>--}}


    <script type="text/javascript">
        jQuery(function ($) {
            $('.check1').focus(function () {
                $('.check1').autoNumeric();
            });
        });
    </script>

    <script type="text/javascript" language="JavaScript">
        $(document).ready(function () {
            var str = "<?php echo $froaddustsourcetemp?>";
            if(str=="[]")
            {
                document.getElementById("headroad").style.display = 'block';
                addTable();
            }else{

            };


        });
    </script>
    <script type="text/javascript">


        function addinfo() {
            var companyName = document.getElementById("companyName").innerHTML;
            var roadfactoryid = document.getElementById("roadfactoryid").value;
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
            if (ispave == 1) {
                var scc = "1602001003";
            }
            else {
                var scc = "1602002000";
            }
            $.post("{{ url("Roadlistinsert")}}",{
                    '_token': '{{ csrf_token() }}',
                    'scccode': scc,
                    'companyName': companyName,
                    'pathLength': pathLength,
                    'roadfactoryid': roadfactoryid,
                    'ispave': ispave,
                    'averWidth': averWidth,
                    'averWeight': averWeight,
                    'carFlow': carFlow,
                    'averSpeed': averSpeed,
                    'clearTimeInstall': clearTimeInstall,
                    'clearTimeUninstall': clearTimeUninstall,
                    'sweepSpring': sweepSpring,
                    'sweepSummer': sweepSummer,
                    'sweepFall': sweepFall,
                    'waterTimesSpring': waterTimesSpring,
                    'waterTimesSummer': waterTimesSummer,
                    'waterTimesFall': waterTimesFall,
                    'dustSuppression': dustSuppression
                },
                function (state) {
                    if (state == 1) {
                        alert("道路扬尘源保存成功！");
                        window.location.reload();
                    } else {
                        alert("道路扬尘源保存失败！");
                    }
                });
        }


    </script>
    <script type="text/javascript">
        function update(toidnumber) {
            var roadDustid = document.getElementById("roadDustid" + toidnumber).value;
            var factoryid = document.getElementById("roadfactoryid" + toidnumber).value;
            var companyName = document.getElementById("companyName" + toidnumber).innerHTML;
            var pathLength = document.getElementById("pathLength" + toidnumber).value;
            var ispave = document.getElementById("ispave" + toidnumber).value;

            var averWidth = document.getElementById("averWidth" + toidnumber).value;
            var averWeight = document.getElementById("averWeight" + toidnumber).value;
            var carFlow = document.getElementById("carFlow" + toidnumber).value;
            var averSpeed = document.getElementById("averSpeed" + toidnumber).value;
            var clearTimeInstall = document.getElementById("clearTimeInstall" + toidnumber).value;

            var clearTimeUninstall = document.getElementById("clearTimeUninstall" + toidnumber).value;
            var sweepSpring = document.getElementById("sweepSpring" + toidnumber).value;
            var sweepSummer = document.getElementById("sweepSummer" + toidnumber).value;
            var sweepFall = document.getElementById("sweepFall" + toidnumber).value;
            var waterTimesSpring = document.getElementById("waterTimesSpring" + toidnumber).value;

            var waterTimesSummer = document.getElementById("waterTimesSummer" + toidnumber).value;
            var waterTimesFall = document.getElementById("waterTimesFall" + toidnumber).value;
            var dustSuppression = document.getElementById("dustSuppression" + toidnumber).value;

            $.post("{{ url("Roadlistsave_update") }}", {
                '_token': '{{ csrf_token() }}',
                roadDustid: roadDustid,
                'companyName': companyName,
                'pathLength': pathLength,
                'ispave': ispave,
                'averWidth': averWidth,
                'averWeight': averWeight,
                'carFlow': carFlow,
                'averSpeed': averSpeed,
                'clearTimeInstall': clearTimeInstall,
                'clearTimeUninstall': clearTimeUninstall,
                'sweepSpring': sweepSpring,
                'sweepSummer': sweepSummer,
                'sweepFall': sweepFall,
                'waterTimesSpring': waterTimesSpring,
                'waterTimesSummer': waterTimesSummer,
                'waterTimesFall': waterTimesFall,
                'dustSuppression': dustSuppression
            }, function (state) {
                if (state == 0) {
                    alert("更新成功！")
                } else {
                    alert("更新失败！");
                }
            });


        }
        function deleteRoad(roaddustid) {
            if (confirm("你确认删除这条数据吗？")) {
                $.post("{{url("Roadlistdelete")}}", {
                    '_token': '{{csrf_token()}}',
                    'roaddustid': roaddustid
                }, function (state) {
                    if (state == 1) {
                        alert("删除成功");
                    }
                    else {
                        alert("删除失败");
                    }
                });
                location.reload();
            }


        }
        function addTable() {
            document.getElementById("grid1").style.display = 'block';
            document.getElementById("add").style.display = 'none';
            document.getElementById("headroad").style.display = 'none';
        }


    </script>


</head>


<body onLoad="javascript:document.queryForm.reset()">
@include('layouts.header')
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>
    <div class="main-container-inner">

        @include('layouts.leftnav')



            {{--@include("layouts.leftnav")--}}
            {{--<%@ include file="/client/leftnav.jsp"%>--}}
            <div class="main-content">
                <div class="breadcrumbs" id="breadcrumbs"
                     style="background-color: #32B16C;height:2px;margin-top:5px">
                    <script type="text/javascript">
                        try {
                            ace.settings.check('breadcrumbs', 'fixed')
                        } catch (e) {
                        }
                    </script>

                    <ul class="breadcrumb">
                        <li><i class="icon-home home-icon"></i> <a href="#"></a>
                        </li>
                        <li><a>企业道路信息</a></li>
                    </ul>
                    <!-- .breadcrumb -->
                </div>

                <div class="page-content">
                    <form aid="queryForm" name="queryForm" action="">
                        <input id="roadnull" type="hidden" value="${roadnull}"/>

                        @foreach($froaddustsourcetemp as $item)
                            <?php $itemroaddusti++;
                            ?>
                            <div class="col-md-12" style="margin-top: 30px;  height: 40px">
                                <p style="font-size: 20px; text-align: left; color: #32B16C">
                                    {{ $itemroaddusti }}号道路扬尘源信息
                                </p>
                            </div>

                            <input id="roadDustid{{ $itemroaddusti }}" class="form-control"
                                   style="height: 30px; width: 170px;"
                                   value='{{ $item['road_dustid'] }}' type="hidden"/>
                            <input id="roadfactoryid{{ $itemroaddusti }}" class="form-control"
                                   style="height: 30px; width: 170px;" value='{{ $item['factoryid'] }}'
                                   type="hidden"/>
                            <div class="col-md-12" style="height: 50px">

                                <div class="col-md-6" style="height: 50px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            单位名称
                                        </label>
                                        <div class="col-md-7">
                                            <label id="companyName{{ $itemroaddusti }}"
                                                   style="font-size: 15px; margin-top: 3px;">{{ session("factory")["factory_name"] }}</label>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            是否喷洒抑尘剂{{ $item['dust_suppression'] }}<span
                                                    style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <select name="dustSuppression{{ $itemroaddusti }}"
                                                    id="dustSuppression{{ $itemroaddusti }}"
                                                    class="form-control" style="width:170px;height:30px;">
                                                <option value="1"
                                                        @if( $item['dust_suppression']  == 1) selected="selected"@endif >
                                                    是
                                                </option>
                                                <option value="0"
                                                        @if( $item['dust_suppression']  == 0) selected="selected" @endif >
                                                    否
                                                </option>

                                            </select>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12" style="height: 40px">

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            道路长度(km)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="pathLength{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['path_length'] }}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            道路平均宽度(m)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="averWidth{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['aver_width'] }}'/>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12" style="height: 40px">


                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            平均车重(吨) <span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="averWeight{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['aver_weight'] }}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            日均车流量(辆/日)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="carFlow{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['car_flow'] }}'/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            平均车速(km/h)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="averSpeed{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['aver_speed'] }}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            吸尘清扫次数(安装真空装置)次数/天<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="clearTimeInstall{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['clear_time_install'] }}'/>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            吸尘清扫次数(未安装真空装置)次数/天<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="clearTimeUninstall{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['clear_time_uninstall'] }}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            春季湿扫 (次数/天)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="sweepSpring{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['sweep_spring'] }}'/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px">

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            夏季湿扫(次数/天)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="sweepSummer{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['sweep_summer'] }}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            秋季湿扫(次数/天)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="sweepFall{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['sweep_fall'] }}'/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px">

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            春季每日洒水次数<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="waterTimesSpring{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['water_times_spring'] }}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            夏季每日洒水次数<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="waterTimesSummer{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['water_times_summer'] }}'/>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            秋季每日洒水次数<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="waterTimesFall{{ $itemroaddusti }}"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{ $item['water_times_fall'] }}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            是否铺装{{ $item['dust_suppression'] }}<span
                                                    style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <select name="ispave<%%>" id="ispave{{ $itemroaddusti }}"
                                                    class="form-control" style="width:170px;height:30px;">
                                                <option value="1" @if( $item['ispave']  == 1) selected="selected"
                                                        @endif}> 是
                                                </option>
                                                <option value="0" @if( $item['ispave']  == 0) selected="selected"
                                                        @endif}>否
                                                </option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div align="right" style="margin-right: 110px;">

                                <input type="button" class="btn btn-primary"
                                       style="width: 80px; line-height: 8px; margin-left: 15px;"
                                       value="更新数据" id="saveCon" onclick="update('{{$itemroaddusti}}')"/>
                                <input type="button" class="btn btn-primary"
                                       style="width: 80px; line-height: 8px; margin-left: 15px;"
                                       value="删除" id="saveCon"
                                       onclick="deleteRoad('{{$item['road_dustid']}}')"/>


                            </div>
                            {{--</c:forEach>--}}
                        @endforeach


                        <input type="button" class="btn btn-primary"
                               style="width:80px;line-height:8px;margin-left:15px;" value="新增" id="add"
                               onclick="addTable()"/>

                        <div id="grid1" style="margin-top: 10px; display: none">
                            <div class="page-header" style="margin-top: 20px; height: 40px;">
                                <h1>
                                    <b>道路扬尘源新增</b>
                                </h1>
                            </div>
                            <div id="headroad" class="col-md-12" style="margin-top: 30px;  height: 40px">
                                <p style="font-size: 20px; text-align: left; color: #32B16C">
                                    1号道路扬尘源信息
                                </p>
                            </div>
                            <input id="roadfactoryid" class="form-control"
                                   style="height: 30px; width: 170px;" value='{{ session("factory")["factory_id"] }}'
                                   type="hidden"/>
                            <div class="col-md-12" style="height: 50px">
                                <div class="col-md-6" style="height: 50px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            单位名称
                                        </label>

                                        <div class="col-md-7">
                                            <label id="companyName"
                                                   style="font-size: 15px; margin-top: 3px;">{{ session("factory")["factory_name"] }}</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            是否喷洒抑尘剂<span style="font-size: 18px;color:red; ">*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <select name="dustSuppression" id="dustSuppression" class="form-control"
                                                    style="width:170px;height:30px;">
                                                <option value="1">是</option>
                                                <option value="0">否</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            道路长度(km)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="pathLength"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            道路平均宽度(m)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="averWidth"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            平均车重(吨)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="averWeight"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            日均车流量(辆/日)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="carFlow"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            平均车速(km/h)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="averSpeed"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            吸尘清扫次数(安装真空装置)次数/天<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="clearTimeInstall"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px">

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            吸尘清扫次数(未安装真空装置)次数/天<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="clearTimeUninstall"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            春季湿扫 (次数/天)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="sweepSpring"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px">


                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            夏季湿扫(次数/天)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="sweepSummer"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            秋季湿扫(次数/天)<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="sweepFall"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            春季每日洒水次数<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="waterTimesSpring"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            夏季每日洒水次数<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="waterTimesSummer"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12" style="height: 40px">

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            秋季每日洒水次数<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <input type="text" id="waterTimesFall"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                            />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label no-padding-right"
                                               for="form-field-3">
                                            是否铺装<span style="font-size: 18px;color:red; ">*</span>
                                        </label>

                                        <div class="col-md-7">
                                            <select name="ispave" id="ispave" class="form-control"
                                                    style="width:170px;height:30px;"
                                                    onchange="innitmeasureadd(this.value)">
                                                <option value="1">是</option>
                                                <option value="0">否</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div align="left">
                                <input type="button" class="btn btn-primary"
                                       style="width:80px;line-height:8px;margin-left:15px;" value="保存"
                                       id="saveRoad" onclick="addinfo()"/>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="row" style="height:100px;text-align:center;">
                    {{-- <%@ include file="/client/public_end.jsp"%>--}}
                    @include('layouts.public_end')
                </div>

                <!--/.gridTable -->
                </form >

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
    document.getElementById("roaddust").setAttribute("class", "active");
</script>
<script type="text/javascript">
    window.jQuery
    || document
        .write("<script src='assets/js/jquery-2.0.3.min.js'>"
            + "<" + "/script>");
</script>


<script type="text/javascript">
    if ("ontouchend" in document)
        document
            .write("<script src='assets/js/jquery.mobile.custom.min.js'>"
                + "<" + "/script>");
</script>


<!-- inline scripts related to this page -->
<div style="display:none">
    <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540'
            language='JavaScript' charset='gb2312'></script>
</div>
</body>
</html>
