<!DOCTYPE html>

<?php
$itemroaddusti = 0;
?>
<html lang="en">
<head>
    <title>道路施工源</title>

    <!-- basic styles -->
    <meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文"/>
    <meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
    <link href="{{ asset("/wuzuzhi/css/bootstrap.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/wuzuzhi/css/bootstrap-datetimepicker.min.css") }}" rel="stylesheet" media="screen"/>

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
    <script src="{{ asset("/wuzuzhi/js/bootstrap-datepicker.min.js") }}"></script>
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


            
            $.post("{{ url("listRoadlist") }}", {'_token': '{{ csrf_token() }}'}, function (data) {
                $froaddustsourcetemp = 1;
            });
        });
    </script>
    <script type="text/javascript">
        function addCon() {
            var numm=document.getElementById("itemcondusti").value;
            //alert(numm);
            //alert("890");
            //var companyName= document.getElementById("companyName").value;
           /* var confactoryid = document.getElementById("confactoryid").value;
            var longitude1 = document.getElementById("nlongitude1").value;
            var longitude2 = document.getElementById("nlongitude2").value;
            var longitude3 = document.getElementById("nlongitude3").value;
            var longitude4 = document.getElementById("nlongitude4").value;

            var latitude1 = document.getElementById("nlatitude1").value;
            var latitude2 = document.getElementById("nlatitude2").value;
            var latitude3 = document.getElementById("nlatitude3").value;
            var latitude4 = document.getElementById("nlatitude4").value;*/
            var constructionType = document.getElementById("nconstructionType").value;
            var constructState = document.getElementById("nconstructState").value;
            var constructArea = document.getElementById("nconstructArea").value;
            var finisharea = document.getElementById("nfinisharea").value;
            var nowkgarea = document.getElementById("nnowkgarea").value;
            var startdate = document.getElementById("nstartdate").value;
            var finishdate = document.getElementById("nfinishdate").value;
            var strMonth=document.getElementsByName("Month");
            var objarray=strMonth.length;
            var chestrMonth="";
            for (var i=0;i<objarray;i++)
            {
                if(strMonth[i].checked == true)
                {
                    chestrMonth+=strMonth[i].value+",";
                }
            }
            if(chestrMonth==""){
                chestrMonth="无";
            }

            var str=document.getElementsByName("control");
            var objarray=str.length;
            var controlMeasures="";
            for (var i=0;i<objarray;i++)
            {
                if(str[i].checked == true)
                {
                    controlMeasures+=str[i].value+",";
                }
            }
            if(controlMeasures==""){
                controlMeasures="";
            }
                    $.post("{{ url('addCon')}}", {
                            '_token': '{{csrf_token()}}',
                            constructionType : constructionType ,
                            constructState : constructState,
                            constructArea  : constructArea,
                            nowkgarea : nowkgarea,
                            startdate : startdate,
                            finishdate : finishdate,
                            constructMonths : chestrMonth ,
                            controlMeasures : controlMeasures
                        },
            function (state) {
                if (state == 1) {
                    alert("施工扬尘源保存成功！");
                    window.location.reload();
                } else {
                    alert("施工扬尘源保存失败！");
                }
            });




        }






    </script>


    <script type="text/javascript">
        function deleteCon(conId) {
            if (confirm("你确认删除这条数据吗？")) {
                $.post("{{url("Conlistdelete")}}", {
                    '_token': '{{csrf_token()}}',
                    'conid': conId
                }, function (state) {
                    if (state == 1) {
                        alert("删除成功");
                    }else {
                        alert("删除失败");
                    }
                });
                location.reload();
            }
        }
        function updateCon(dustitem) {
            var constructDustid = document.getElementById("conDustid"+dustitem).value;
            var constructionType = document.getElementById("constructionType"+dustitem).value;
            var constructState = document.getElementById("constructState"+dustitem).value;
            var constructArea = document.getElementById("constructArea"+dustitem).value;
            var nowkgarea = document.getElementById("nowkgarea"+dustitem).value;
            var startdate = document.getElementById("startdate"+dustitem).value;
            var finishdate = document.getElementById("finishdate"+dustitem).value;
            //月份复选框
            var strMonth=document.getElementsByName("Month"+dustitem);
            var objarray=strMonth.length;
            var chestrMonth="";
            for (var i=0;i<objarray;i++)
            {
                if(strMonth[i].checked == true)
                {
                    chestrMonth+=strMonth[i].value+",";
                }
            }
            if(chestrMonth==""){
                chestrMonth="无";
            }
            //控制措施
            var str=document.getElementsByName("control"+dustitem);
            var objarray=str.length;
            var controlMeasures="";
            for (var i=0;i<objarray;i++)
            {
                if(str[i].checked == true)
                {
                    controlMeasures+=str[i].value+",";
                }
            }
            if(controlMeasures==""){
                controlMeasures="";
            }



                    $.post("{{url('updateCon')}}", {
                            '_token': '{{csrf_token()}}',
                            constructDustid:constructDustid,
                            constructionType : constructionType ,
                            constructState : constructState,
                            constructArea  : constructArea,
                            nowkgarea : nowkgarea,
                            startdate : startdate,
                            finishdate : finishdate,
                            constructMonths : chestrMonth ,
                            controlMeasures : controlMeasures
                        },
                        function(state) {
                            if (state < 0) {
                                alert("施工扬尘源更新失败！");
                            } else {
                                alert("施工扬尘源更新成功！");
                            }
                        });



        }

        function addTable() {
            document.getElementById("grid1").style.display = 'block';
            document.getElementById("add").style.display = 'none';
            document.getElementById("headroad").style.display = 'none';
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
                        @foreach($fconstructionsourcetemp as $item)
                            <?php  $itemroaddusti++;?>
                            <div class="col-md-12" style="margin-top: 20px; height: 40px">
                                <p style="font-size: 20px; text-align: left; color: #32B16C">
                                    {{ $itemroaddusti }}号施工扬尘源信息
                                </p>
                            </div>
                                <input id="conDustid{{ $itemroaddusti }}" class="form-control"
                                       style="height: 30px; width: 170px;"
                                       value='{{ $item['construct_dustid'] }}' type="hidden"/>
                                <input id="confactoryid{{ $itemroaddusti }}" class="form-control"
                                       style="height: 30px; width: 170px;" value='{{ $item['factoryid'] }}'
                                       type="hidden"/>
                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            施工类型:<a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="constructionType{{ $itemroaddusti }}"
                                                   class="form-control" style="height: 30px; width: 250px;"
                                                   value='{{$item['construction_type']}}' readonly="readonly"/>
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
                                            <input type="text" id="constructState{{ $itemroaddusti }}"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{$item['construct_state']}}' readonly="readonly"/>
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
                                            <input type="text" id="constructArea{{ $itemroaddusti }}"
                                                   onkeyup="checkNum(this);" class="form-control"
                                                   style="height: 30px; width: 250px;"
                                                   value='{{$item['construct_area']}}'/>
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
                                            <input type="text" id="nowkgarea{{ $itemroaddusti }}"
                                                   onkeyup="checkNum(this);" class="form-control"
                                                   style="height: 30px; width: 170px;"
                                                   value='{{$item['nowkgarea']}}'/>
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
                                            <input type="text" id="constructMonths{{ $itemroaddusti }}"
                                                   onkeyup="checkNum(this);" class="form-control"
                                                   style="height: 30px; width: 170px; display: none"
                                                   value='{{$item['construct_months']}}'/>
                                            <label><input name="Month{{ $itemroaddusti }}" type="checkbox" value="1"/>1月</label>
                                            <label><input name="Month{{ $itemroaddusti }}" type="checkbox" value="2"/>2月</label>
                                            <label><input name="Month{{ $itemroaddusti }}" type="checkbox" value="3"/>3月</label>
                                            <label><input name="Month{{ $itemroaddusti }}" type="checkbox" value="4"/>4月</label>
                                            <label><input name="Month{{ $itemroaddusti }}" type="checkbox" value="5"/>5月</label>
                                            <label><input name="Month{{ $itemroaddusti }}" type="checkbox" value="6"/>6月</label>
                                            <label><input name="Month{{ $itemroaddusti }}" type="checkbox" value="7"/>7月</label>
                                            <label><input name="Month{{ $itemroaddusti }}" type="checkbox" value="8"/>8月</label>
                                            <label><input name="Month{{ $itemroaddusti }}" type="checkbox" value="9"/>9月</label>
                                            <label><input name="Month{{ $itemroaddusti }}" type="checkbox" value="10"/>10月</label>
                                            <label><input name="Month{{ $itemroaddusti }}" type="checkbox" value="11"/>11月</label>
                                            <label><input name="Month{{ $itemroaddusti }}" type="checkbox" value="12"/>12月</label>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 35px">
                                <div class="col-md-12" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label no-padding-right" for="form-field-3"
                                               style="width:130px">
                                            控制措施:<a style="color: red">*</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 35px">
                                <div class="col-md-12" style="height: 35px">
                                    <div class="form-group">
                                        <div class="col-md-12" style="width:700px;padding-left:20px;">
                                            <input type="text" id="controlMeasures{{ $itemroaddusti }}"
                                                   onkeyup="checkNum(this);" class="form-control"
                                                   style="height: 30px; width: 170px; display: none"
                                                   value='{{$item['construct_months']}}'/>
                                            <label><input name="control{{ $itemroaddusti }}" type="checkbox"
                                                          value="A1"/>1.8m硬质围挡</label>
                                            <label><input name="control{{ $itemroaddusti }}" type="checkbox"
                                                          value="A2"/>2.4m硬质围挡</label>
                                            <label><input name="control{{ $itemroaddusti }}" type="checkbox" value="B"/>化学抑尘剂</label>
                                            <label><input name="control{{ $itemroaddusti }}" type="checkbox" value="C"/>覆盖防尘布</label>
                                            <label><input name="control{{ $itemroaddusti }}" type="checkbox" value="E"/>路面铺装和洒水</label>
                                            <label><input name="control{{ $itemroaddusti }}" type="checkbox" value="F"/>封闭</label>
                                            <label><input name="control{{ $itemroaddusti }}" type="checkbox" value="无"/>无控制措施</label>
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
                                            <input id="startdate{{ $itemroaddusti }}" class="form-control"
                                                   style="height: 30px; width: 170px;" size="16" type="text"
                                                   value='{{$item['startdate']}}' readonly>
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
                                            <input id="finishdate{{ $itemroaddusti }}"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   size="16" type="text"
                                                   value='{{$item['finishdate']}}' readonly>
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
                                       onclick="updateCon('{{ $itemroaddusti }}')"/>
                                <input type="button" class="btn btn-primary"
                                       style="width: 80px; line-height: 8px; margin-left: 15px;"
                                       value="删除" id="ass"
                                       onclick="deleteCon('{{ $item['construct_dustid'] }}')"/>
                            </div>
                        @endforeach
                        <div class="col-md-8" style="display: none">
                            <input type="text" id="itemcondusti" class="form-control"
                                   style="height: 30px; width: 170px;" value='{{ $itemroaddusti }}'/>
                        </div>


                        <div id="grid1" style="margin-top: 10px; display: none">
                            <div class="page-header"
                                 style="margin-top: 20px; height: 40px;">
                                <h1>
                                    <b>施工扬尘源新增</b>
                                </h1>
                            </div>
                            <div class="col-md-12" id="yihao" style="margin-top: 20px; height: 40px;display:none;">
                                <p style="font-size: 20px; text-align: left; color: #32B16C">
                                    1号施工扬尘源信息
                                </p>
                            </div>
                            <input id="confactoryid" class="form-control"
                                   style="height: 30px; width: 170px;" value='{{ session("factory")["factory_id"] }}'
                                   type="hidden"/>
                            <div class="col-md-12" style="height: 40px;display:none">
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点经度1：

                                        </label>
                                        <div class="col-md-8">
                                            <input type="text" id="nlongitude1"
                                                   class="check1" alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,0,4)"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="73.6667~96.3000"/>
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
                                                   onblur="checklonfour(this.id,1,4)"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="73.6667~96.3000"/>
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
                                                   onblur="checklatfour(this.id,1,4)" class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="34.4167~48.1667"/>
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
                                                   onblur="checklonfour(this.id,2,4)"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="73.6667~96.3000"/>
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
                                                   onblur="checklatfour(this.id,2,4)" class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="34.4167~48.1667"/>
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
                                                   onblur="checklonfour(this.id,3,4)"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="73.6667~96.3000"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px;display:none">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            拐点纬度4：

                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="nlatitude4"
                                                   onblur="checklatfour(this.id,3,4)" class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="34.4167~48.1667"/>
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
                                            --><select name="constructType" id="nconstructionType"
                                                       class="form-control"
                                                       style="width:170px;height:30px;">
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
                                            <select name="constructStage" id="nconstructState"
                                                       class="form-control"
                                                       style="width:170px;height:30px;">
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
                                                   style="height: 30px; width: 170px;"/>
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
                                                   style="height: 30px; width: 170px;"/>
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
                                                   style="height: 30px; width: 170px;"/>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4" style="height: 35px;display:none;">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3">
                                            SCC编码：
                                            <a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <select name="nscccode" id="nscccode" class="form-control"
                                                    style="width:170px;height:30px;">
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
                                            <label><input name="Month" type="checkbox" value="1"/>1月</label>
                                            <label><input name="Month" type="checkbox" value="2"/>2月</label>
                                            <label><input name="Month" type="checkbox" value="3"/>3月</label>
                                            <label><input name="Month" type="checkbox" value="4"/>4月</label>
                                            <label><input name="Month" type="checkbox" value="5"/>5月</label>
                                            <label><input name="Month" type="checkbox" value="6"/>6月</label>
                                            <label><input name="Month" type="checkbox" value="7"/>7月</label>
                                            <label><input name="Month" type="checkbox" value="8"/>8月</label>
                                            <label><input name="Month" type="checkbox" value="9"/>9月</label>
                                            <label><input name="Month" type="checkbox" value="10"/>10月</label>
                                            <label><input name="Month" type="checkbox" value="11"/>11月</label>
                                            <label><input name="Month" type="checkbox" value="12"/>12月</label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12" style="height: 35px">
                                <div class="col-md-12" style="height: 35px;">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label no-padding-right" for="form-field-3"
                                               style="width:130px">
                                            控制措施:<a style="color: red">*</a>
                                        </label>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 35px">
                                <div class="col-md-12" style="height: 35px;">
                                    <div class="form-group">

                                        <div class="col-md-12" style="width:700px;padding-left:20px;">
                                            <label><input name="control" type="checkbox"
                                                          value="A1"/>1.8m硬质围挡</label>
                                            <label><input name="control" type="checkbox"
                                                          value="A2"/>2.4m硬质围挡</label>
                                            <label><input name="control" type="checkbox" value="B"/>化学抑尘剂</label>
                                            <label><input name="control" type="checkbox" value="C"/>覆盖防尘布</label>
                                            <label><input name="control" type="checkbox" value="E"/>路面铺装和洒水</label>
                                            <label><input name="control" type="checkbox" value="F"/>封闭</label>
                                            <label><input name="control" type="checkbox" value="无"/>无控制措施</label>
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
                                       value="保存" onclick="addCon()"/>
                            </div>
                        </div>


                        <div align="left">
                            <input type="button" class="btn btn-primary"
                                   style="width: 80px; line-height: 8px; margin-left: 15px;"
                                   value="新增" id="add" onclick="addTable()"/>
                        </div>
                    </div>

                    <!--/.gridTable -->
                    <div class="row" style="height:60px;text-align:center;">
                        <!--<% include file="/client/public_end.jsp"%>-->
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

<script type="text/javascript" src="{{ asset("/wuzuzhi/js/bootstrap-datetimepicker.js") }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset("/wuzuzhi/js/bootstrap-datetimepicker.zh-CN.js") }}" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>
<script type="text/javascript">
    $("#set2").toggle();
    document.getElementById("condust").setAttribute("class", "active");
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
<script type="text/javascript">
    //glh 加载option中的内容
    $(document).ready(function() {
        //判断如果page的result为空。直接调用add方法
        //alert(1);
        var str ={!! $fconstructionsourcetemp !!};
        /*for(i=0;i<str.length;i++){
            alert(str[i]['scccode']);
        }   */
        console.log(str.length);
        if(str.length==0)
        {
            document.getElementById("yihao").style.display = 'block';
            addTable();
        }else{
        }
        var num = "<?php echo "{$itemroaddusti}" ?>";
        for ( var cur = 1; cur <= num; cur++) {
            var conn = document.getElementById("controlMeasures" + cur).value;
            if (conn.charAt(conn.length - 1) == "、"
                || conn.charAt(conn.length - 1) == ",") {
                conn = conn.substring(0, conn.length - 1);
            }
            //alert(conn);
            var strs = new Array(); //定义一数组
            strs = conn.split(",");
            //alert(strs.length);
            var i = 0;
            for (i = 0; i < strs.length; i++) {
                if(strs!=""){
                    if (strs[i] == "A1") {
                        $("input[name='control" + cur + "'][value='A1']").attr(
                            'checked', true);
                        //$("[control=A1]").attr('checked',true);
                    }  if (strs[i] == "A2") {
                        $("input[name='control" + cur + "'][value='A2']").attr(
                            'checked', true);
                    } if (strs[i] == "B") {
                        $("input[name='control" + cur + "'][value='B']").attr(
                            'checked', true);
                    } if (strs[i] == "C") {
                        $("input[name='control" + cur + "'][value='C']").attr(
                            'checked', true);
                    } if (strs[i] == "D") {
                        $("input[name='control" + cur + "'][value='D']").attr(
                            'checked', true);
                    }  if (strs[i] == "E") {
                        $("input[name='control" + cur + "'][value='E']").attr(
                            'checked', true);
                    }  if (strs[i] == "F") {
                        $("input[name='control" + cur + "'][value='F']").attr(
                            'checked', true);
                    }
                    if (strs[i] == "无") {
                        $("input[name='control" + cur + "'][value='无']").attr(
                            'checked', true);
                    }

                }
                else {

                }
            }

        }

        //加载月份复选框情况信息
        for ( var cur = 1; cur <= num; cur++) {
            var conn = document.getElementById("constructMonths" + cur).value;
            var strs = new Array(); //定义一数组
            strs = conn.split(",");
            var i = 0;
            for (i = 0; i < strs.length; i++) {
                if(strs!=""){
                    if (strs[i] == "1") {
                        $("input[name='Month" + cur + "'][value='1']").attr(
                            'checked', true);
                    }  if (strs[i] == "2") {
                        $("input[name='Month" + cur + "'][value='2']").attr(
                            'checked', true);
                    } if (strs[i] == "3") {
                        $("input[name='Month" + cur + "'][value='3']").attr(
                            'checked', true);
                    } if (strs[i] == "4") {
                        $("input[name='Month" + cur + "'][value='4']").attr(
                            'checked', true);
                    } if (strs[i] == "5") {
                        $("input[name='Month" + cur + "'][value='5']").attr(
                            'checked', true);
                    }  if (strs[i] == "6") {
                        $("input[name='Month" + cur + "'][value='6']").attr(
                            'checked', true);
                    }  if (strs[i] == "7") {
                        $("input[name='Month" + cur + "'][value='7']").attr(
                            'checked', true);
                    }if (strs[i] == "8") {
                        $("input[name='Month" + cur + "'][value='8']").attr(
                            'checked', true);
                    }if (strs[i] == "9") {
                        $("input[name='Month" + cur + "'][value='9']").attr(
                            'checked', true);
                    }if (strs[i] == "10") {
                        $("input[name='Month" + cur + "'][value='10']").attr(
                            'checked', true);
                    }if (strs[i] == "11") {
                        $("input[name='Month" + cur + "'][value='11']").attr(
                            'checked', true);
                    }if (strs[i] == "12") {
                        $("input[name='Month" + cur + "'][value='12']").attr(
                            'checked', true);
                    }

                }
                else {
                }
            }

        }

    });
</script>
</body>
</html>
