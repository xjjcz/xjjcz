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

    <link href="{{ asset("/wuzuzhi/css/bootstrap.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/font-awesome.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/font-awesome-ie7.min.css") }}" rel="stylesheet"/>

    <link href="{{ asset("/wuzuzhi/css/bootstrap-datetimepicker.min.css") }}" rel="stylesheet" media="screen"/>

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


            /* $.post(" url("information") }}",{'_token':' csrf_token() }}','id':id},function (data) {
             console.log(data);
             $("#information").val(data.information);
             });*/

        });
    </script>

    <script type="text/javascript">
        //检查物料装卸量是否符合填写要求
        function checkwl(z) {
            var px = document.getElementById("ndloadingCapacity").value;//每日装卸量
            var py = document.getElementById("ndloadingCount").value//每日装卸次数
            var pz = document.getElementById(z).value
            if (px * py > pz || pz < 0) {
                alert("您输入的物料装卸量不符合实际规则，请重新输入！");
                document.getElementById(z).focus();
            }

        }
        //检查含水率是否符合要求
        function checkhs(x) {
            var px = document.getElementById(x).value;
            if (px > 100 || px < 0) {
                alert("您输入的数值超出填写范围1~100，请重新输入！");
                document.getElementById(z).focus();
            }

        }
        //检查地面风速是否符合要求
        function checksp(x) {
            var px = document.getElementById(x).value;
            if (px > 61.3 || px < 0) {
                alert("您输入的数值超出填写范围0~61.3，请重新输入！");
                document.getElementById(z).focus();
            }
        }
    </script>


    <script type="text/javascript">
        function addTable() {
            document.getElementById("grid1").style.display = 'block';
            document.getElementById("add").style.display = 'none';
        }

        function addYard() {

            //alert("addYard");
/*            var numm = document.getElementById("itemyarddusti").value;
            var longitude1 = document.getElementById("ndlongitude1").value;
            var longitude2 = document.getElementById("ndlongitude2").value;
            var longitude3 = document.getElementById("ndlongitude3").value;
            var longitude4 = document.getElementById("ndlongitude4").value;

            var latitude1 = document.getElementById("ndlatitude1").value;
            var latitude2 = document.getElementById("ndlatitude2").value;
            var latitude3 = document.getElementById("ndlatitude3").value;
            var latitude4 = document.getElementById("ndlatitude4").value;*/
            //var scccode = document.getElementById("nscccode").value;

            var materialType = document.getElementById("ndmaterialType").value;
            var moistureMateria = document.getElementById("ndmoistureMateria").value;
            var materialCapacity = document.getElementById("ndmaterialCapacity").value;
            var loadingCount = document.getElementById("ndloadingCount").value;
            var loadingCapacity = document.getElementById("ndloadingCapacity").value;
            var heapCovered = document.getElementById("ndheapCovered").value;
            var heapArea = document.getElementById("ndheapArea").value;
            var heapHeigh = document.getElementById("ndheapHeigh").value;





            /*var windSpeed = document.getElementById("ndwindSpeed").value;*/

            var loadingStart = document.getElementById("ndloadingStart").value;
            var loadingTime = document.getElementById("ndloadingTime").value;


            //var controlMeasures = document.getElementById("ndcontrolMeasures").value;


            var str = document.getElementsByName("winddust");
            var objarray = str.length;
            var controlMeasures = "";
            for (var i = 0; i < objarray; i++) {
                if (str[i].checked == true) {
                    controlMeasures += str[i].value + ",";
                }
            }
            if (controlMeasures == "") {
                controlMeasures = "";
            }
            //alert("风蚀控制措施"+controlMeasures);
            var materialType1 = document.getElementById("ndmaterialType1").value;



            //var controlMeasures1 = document.getElementById("ndcontrolMeasures1").value;
            var str = document.getElementsByName("yarddust");
            var objarray = str.length;
            var controlMeasures1 = "";
            for (var i = 0; i < objarray; i++) {
                if (str[i].checked == true) {
                    controlMeasures1 += str[i].value + ",";
                }
            }
            if (controlMeasures1 == "") {
                controlMeasures1 = "";
            }
            //alert("装卸控制措施"+controlMeasures1);
            //	else if(windSpeed==""){alert("地面风速未填写");}
            //检查必填字段是否正确
            if (materialType == "") {
                alert("物料种类未填写");
            }

            else if (materialCapacity == "") {
                alert("物料装卸量未填写");
            }
            else if (loadingCapacity == "") {
                alert("每次装卸量未填写");
            }
            else if (loadingCount == "") {
                alert("每日装卸次数未填写");
            }
            //else if(materialType1==""){alert("装卸物料种类未填写");}
            else if (moistureMateria == "") {
                alert("物料含水率未填写");
            }
            else if (heapCovered == "") {
                alert("堆料占地面积未填写");
            }
            else if (heapArea == "") {
                alert("堆料表面积未填写");
            }
            else if (heapHeigh == "") {
                alert("堆料高度未填写");
            }

            else if (controlMeasures1 == "") {
                alert("装卸控制措施未进行选择");
            }
            else if (controlMeasures == "") {
                alert("风蚀控制措施未进行选择");
            }
            else {
                if (loadingStart == "") {
                    loadingStart = "00:00";
                }
                if (loadingTime == "") {
                    loadingTime = "00:00";
                }
                //alert(loadingStart+"..."+loadingTime);
                //alert(1);companyName : companyName,scccode:scccode,
                $.post("{{url('addYardDust')}}", {
                    '_token': '{{csrf_token()}}',
                    materialType: materialType,
                    moistureMateria:moistureMateria,
                    materialCapacity: materialCapacity,
                    loadingCount: loadingCount,
                    loadingCapacity: loadingCapacity,
                    heapCovered: heapCovered,
                    heapArea: heapArea,
                    heapHeigh: heapHeigh,
                    loadingStart: loadingStart,
                    loadingTime: loadingTime,
                    controlMeasures1: controlMeasures1,
                    controlMeasures: controlMeasures
                }, function (state) {
                    if (state == 1) {
                        alert("堆场扬尘源保存成功！");
                        window.location.reload();
                    } else {
                        alert("堆场扬尘源保存失败！");
                    }
                });

            }
        }
        //删除数据
        function deleteYard(wId) {
            $.post("{{url("deleteYard")}}", {
                '_token': '{{csrf_token()}}',
                windDustid: wId
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



        //更新一条数据
        function updateYard(itemyard) {
            //alert("updateYard");
            var itemyarddusti = itemyard;

            /*var scccode = document.getElementById("dscccode" + itemyarddusti).value;
            var scccode1 = document.getElementById("dscccode1" + itemyarddusti).value;*/
            var windDustid = document.getElementById("yardDustid"+itemyarddusti).value;
            var materialType = document.getElementById("dmaterialType" + itemyarddusti).value;
            var moistureMateria = document.getElementById("dmoistureMateria" + itemyarddusti).value;
            var materialCapacity = document.getElementById("dmaterialCapacity" + itemyarddusti).value;
            var loadingCount = document.getElementById("dloadingCount" + itemyarddusti).value;
            var loadingCapacity = document.getElementById("dloadingCapacity" + itemyarddusti).value;
            var heapCovered = document.getElementById("dheapCovered" + itemyarddusti).value;
            var heapArea = document.getElementById("dheapArea" + itemyarddusti).value;
            var heapHeigh = document.getElementById("dheapHeigh" + itemyarddusti).value;
            var controlMeasures = document.getElementById("dcontrolMeasures"+itemyarddusti).value;
            var controlMeasures1 = document.getElementById("dcontrolMeasures1"+itemyarddusti).value;
            var loadingStart = document.getElementById("dloadingStart" + itemyarddusti).value;
            var loadingTime = document.getElementById("dloadingTime" + itemyarddusti).value;


            var str=document.getElementsByName("winddust"+itemyarddusti);
            var objarray = str.length;
            var controlMeasures = "";
            for (var i = 0; i < objarray; i++) {
                if (str[i].checked == true) {
                    controlMeasures += str[i].value + ",";
                }
            }
            if (controlMeasures == "") {
                controlMeasures = "";
            }

            var str = document.getElementsByName("yarddust" + itemyarddusti);
            var objarray = str.length;
            var controlMeasures1 = "";
            for (var i = 0; i < objarray; i++) {
                if (str[i].checked == true) {
                    controlMeasures1 += str[i].value + ",";
                }
            }
            if (controlMeasures1 == "") {
                controlMeasures1 = "";
            }
            //风蚀控制措施可以为空
            //装卸控制措施可以为空
            //else if(windSpeed==""){alert("地面风速未填写");}
            if (materialType == "") {
                alert("物料种类未填写");
            }
            else if (materialCapacity == "") {
                alert("物料装卸量未填写");
            }
            else if (loadingCapacity == "") {
                alert("每次装卸量未填写");
            }
            else if (loadingCount == "") {
                alert("每日装卸次数未填写");
            }
            //else if(materialType1==""){alert("装卸物料种类未填写");}
            else if (moistureMateria == "") {
                alert("物料含水率未填写");
            }
            else if (heapCovered == "") {
                alert("堆料占地面积未填写");
            }
            else if (heapArea == "") {
                alert("堆料表面积未填写");
            }
            else if (heapHeigh == "") {
                alert("堆料高度未填写");
            }

            /*else if(loadingStart==""){alert("日装卸开始时间未填写");}
             else if(loadingTime==""){alert("日装卸结束时间未填写");}*/
            else if (loadingCapacity * loadingCount > materialCapacity) {
                //判断物料装卸量是否符合条件
                alert("物料装卸量填写不符合实际条件，请重新填写！");


            }
            else if (controlMeasures1 == "") {
                alert("装卸控制措施未进行选择");
            }
            else if (controlMeasures == "") {
                alert("风蚀控制措施未进行选择");
            } else {
                if (loadingStart == "") {
                    loadingStart = "00:00";
                }
                if (loadingTime == "") {
                    loadingTime = "00:00";
                }
                $.post("{{url('updateYard')}}", {
                    '_token': '{{csrf_token()}}',
                    windDustid: windDustid,
                    materialType: materialType,
                    moistureMateria:moistureMateria,
                    materialCapacity: materialCapacity,
                    loadingCount: loadingCount,
                    loadingCapacity: loadingCapacity,
                    heapCovered: heapCovered,
                    heapArea: heapArea,
                    heapHeigh: heapHeigh,
                    loadingStart: loadingStart,
                    loadingTime: loadingTime,
                    controlMeasures1: controlMeasures1,
                    controlMeasures: controlMeasures
                }, function (state) {
                    if (state == 0) {

                        alert("堆场扬尘源更新成功！");
                    } else {
                        alert("号堆场扬尘源更新失败！");
                    }

                });


            }


        }
    </script>

    <style type="text/css">
        .table-condensed thead tr th{
            visibility: hidden;
        }
        .table-condensed thead tr th span{
            visibility: hidden;
        }
    </style>
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
                      action=""
                      method="get" style="display: inline;">
                    <div class="gridTable">
                        @foreach($fyarddust as $item)
                            <?php $itemroaddusti++; ?>
                            <div class="col-md-12" style="margin-top: 30px; height: 40px">

                                <p style="font-size: 20px; text-align: left;color: #32B16C">
                                    {{$itemroaddusti}}号堆场扬尘源信息
                                </p>
                            </div>
                                <input id="yardDustid{{ $itemroaddusti }}" class="form-control"
                                       style="height: 30px; width: 170px;"
                                       value='{{ $item['wind_dustid'] }}' type="hidden"/>
                            <div class="col-md-12" style="height: 40px;display:none;">
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 拐点经度1:
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dlongitude1{{ $itemroaddusti}}"
                                                   class="check1" alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,0,4)"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="73.6667~96.3000"
                                                   value='${yardSourcePage.longitude1}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 拐点纬度1:
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dlatitude1{{ $itemroaddusti}}"
                                                   onblur="checklatfour(this.id,0,4)" class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="34.4167~48.1667"
                                                   value='${yardSourcePage.latitude1}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 拐点经度2:
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dlongitude2{{ $itemroaddusti}}"
                                                   class="check1" alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,1,4)"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="73.6667~96.3000"
                                                   value='${yardSourcePage.longitude2}'/>
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
                                            <input type="text" id="dlatitude2{{ $itemroaddusti}}"
                                                   onblur="checklatfour(this.id,1,4)" class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="34.4167~48.1667"

                                                   value='${yardSourcePage.latitude2}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 拐点经度3:
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dlongitude3{{ $itemroaddusti}}" class="check1"
                                                   alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,2,4)"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="73.6667~96.3000"
                                                   value='${yardSourcePage.longitude3}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 拐点纬度3:
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dlatitude3{{ $itemroaddusti}}"
                                                   onblur="checklatfour(this.id,2,4)" class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="34.4167~48.1667"

                                                   value='${yardSourcePage.latitude3}'/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-4" style="height: 35px;display:none;">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 拐点经度4:
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dlongitude4{{ $itemroaddusti}}" class="check1"
                                                   alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,3,4)"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="73.6667~96.3000"
                                                   value='${yardSourcePage.longitude4}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px;display:none;">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 拐点纬度4:
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dlatitude4{{ $itemroaddusti}}"
                                                   onblur="checklatfour(this.id,3,4)" class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="34.4167~48.1667"
                                                   value='${yardSourcePage.latitude4}'/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 物料种类:<a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dmaterialType{{$itemroaddusti}}"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{$item['material_type']}}' readonly="readonly"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" style="height: 35px;display:none;">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 地面风速(m/s):<a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dwindSpeed{{$itemroaddusti}}"
                                                   onkeyup="checkNum(this);"
                                                   onblur="checksp(this.id)"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{$item['material_type1']}}' wind_speed/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 物料含水率(%):<a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dmoistureMateria{{$itemroaddusti}}"
                                                   onkeyup="checkNum(this);"
                                                   class="form-control" style="height: 30px; width: 170px; "
                                                   onblur="checkhs(this.id)"
                                                   value='{{$item['moisture_materia']}}'/>
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
                                            <input type="text" id="dmaterialType1{{$itemroaddusti}}"
                                                   class="form-control"
                                                   style="height: 30px; width: 170px;"
                                                   value='{{$item['material_type1']}}' readonly="readonly"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 年物料装卸量(t):<a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dmaterialCapacity{{$itemroaddusti}}"
                                                   onkeyup="checkNum(this);"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{$item['material_capacity']}}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 每日装卸次数:<a style="color: red">*</a></label>

                                        <div class="col-md-8">
                                            <input type="text" id="dloadingCount{{$itemroaddusti}}"
                                                   onkeyup="checkNum(this);"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{$item['loading_count']}}'/>
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
                                            <input type="text" id="dloadingCapacity{{$itemroaddusti}}"
                                                   onkeyup="checkNum(this);"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{$item['loading_capacity']}}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 料堆占地面积(m<sup>2</sup>):<a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dheapCovered{{$itemroaddusti}}"
                                                   onkeyup="checkNum(this);"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{$item['heap_covered']}}'/>
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
                                            <input type="text" id="dheapArea{{$itemroaddusti}}"
                                                   onkeyup="checkNum(this);"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{$item['heap_area']}}'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 料堆高度(m):<a style="color: red">*</a>
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="dheapHeigh{{$itemroaddusti}}"
                                                   onkeyup="checkNum(this);"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{$item['heap_heigh']}}'/>
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
                                            <input type="text" id="dscccode{{$itemroaddusti}}" onkeyup="checkNum(this);"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{$item['material_type1']}}' readonly="readonly"/>
                                            <input type="text" id="dscccode1{{$itemroaddusti}}"
                                                   onkeyup="checkNum(this);"
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
                                            <label><input name="yarddust{{$itemroaddusti}}" type="checkbox" value="A"/>封闭</label>
                                            <label><input name="yarddust{{$itemroaddusti}}" type="checkbox" value="B"/>密封</label>
                                            <label><input name="yarddust{{$itemroaddusti}}" type="checkbox" value="C"/>抑尘墙</label>
                                            <label><input name="yarddust{{$itemroaddusti}}" type="checkbox" value="D"/>抑尘网</label>
                                            <label><input name="yarddust{{$itemroaddusti}}" type="checkbox" value="E"/>防风网</label>
                                            <label><input name="yarddust{{$itemroaddusti}}" type="checkbox" value="F"/>洒水</label>
                                            <label><input name="yarddust{{$itemroaddusti}}" type="checkbox" value="G"/>喷淋</label>
                                            <label><input name="yarddust{{$itemroaddusti}}" type="checkbox" value="H"/>喷水</label>
                                            <label><input name="yarddust{{$itemroaddusti}}" type="checkbox" value="I"/>半封闭</label>
                                            <label><input name="yarddust{{$itemroaddusti}}" type="checkbox" value="J"/>无</label>
                                        </div>
                                        <input id="dcontrolMeasures1{{$itemroaddusti}}"
                                               value='{{$item['control_measures1']}}'
                                               style="display: none"/>
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
                                            <input id="dcontrolMeasures{{$itemroaddusti}}"
                                                   value='{{$item['control_measures']}}'
                                                   style="display: none"/>
                                            <label><input name="winddust{{$itemroaddusti}}" type="checkbox" value="A"/>封闭</label>
                                            <label><input name="winddust{{$itemroaddusti}}" type="checkbox" value="B"/>密闭</label>
                                            <label><input name="winddust{{$itemroaddusti}}" type="checkbox" value="C"/>洒水</label>
                                            <label><input name="winddust{{$itemroaddusti}}" type="checkbox" value="D"/>喷淋</label>
                                            <label><input name="winddust{{$itemroaddusti}}" type="checkbox" value="E"/>喷水</label>
                                            <label><input name="winddust{{$itemroaddusti}}" type="checkbox" value="F"/>化学覆盖剂</label>
                                            <label><input name="winddust{{$itemroaddusti}}" type="checkbox" value="G"/>编织布覆盖</label>
                                            <label><input name="winddust{{$itemroaddusti}}" type="checkbox" value="H"/>半封闭</label>
                                            <label><input name="winddust{{$itemroaddusti}}" type="checkbox" value="I"/>无</label>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-10" style="height: 35px">
                                    <div class="form-group" style="width:400px">
                                        <label class="col-md-3 control-label no-padding-right"
                                               for="form-field-3" style="width:130px"> 日装卸开始时间:</label>

                                        <div class="input-group date form_time " style="width: 200px" data-date=""
                                             data-date-format="hh:ii" data-link-field="dtp_input3"
                                             data-link-format="hh:ii">
                                            <input type="text" id="dloadingStart{{$itemroaddusti}}"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{$item['loading_start']}}' readonly="readonly"/>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-remove"></span></span>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-calendar"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-10" style="height: 35px">
                                    <div class="form-group" style="width:400px">
                                        <label class="col-md-3 control-label no-padding-right"
                                               for="form-field-3" style="width:130px"> 日装卸结束时间:</label>
                                        <div class="input-group date form_time " style="width: 200px" data-date=""
                                             data-date-format="hh:ii" data-link-field="dtp_input3"
                                             data-link-format="hh:ii">
                                            <input type="text" id="dloadingTime{{$itemroaddusti}}"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value='{{$item['loading_time']}}' readonly="readonly"/>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-remove"></span></span>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-calendar"></span></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div align="right" style="margin-right: 110px;">
                                <input type="button" class="btn btn-primary"
                                       style="width: 80px; line-height: 8px; margin-left: 15px;"
                                       value="更新数据" id="saveCon" onclick="updateYard('{{$itemroaddusti}}')"/>
                                <input type="button" class="btn btn-primary"
                                       style="width: 80px; line-height: 8px; margin-left: 15px;"
                                       value="删除" id="saveCon"
                                       onclick="deleteYard('{{ $item['wind_dustid'] }}')"/>
                            </div>
                        @endforeach
                        <div class="col-md-8" style="display: none">
                            <input type="text" id="itemyarddusti" class="form-control"
                                   style="height: 30px; width: 170px;" value=''/>
                        </div>

                        <div id="grid1" style="margin-top: 10px; display: none">
                            <div class="page-header" style="margin-top: 20px; height: 40px;">
                                <h1>
                                    <b>堆场扬尘源新增</b>
                                </h1>
                            </div>
                            <div class="col-md-12" id="yihao" style="margin-top: 20px; height: 40px;display:none;">
                                <p style="font-size: 20px; text-align: left; color: #32B16C">
                                    1号堆场扬尘源信息
                                </p>
                            </div>
                            <div class="col-md-12" style="height: 40px;display:none;">
                                <div class="col-md-4" style="height: 35px">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 拐点经度1:
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="ndlongitude1"
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
                                               for="form-field-3"> 拐点纬度1:
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="ndlatitude1"
                                                   onblur="checklatfour(this.id,0,4)" class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="34.4167~48.1667"
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
                                                   onblur="checklonfour(this.id,1,4)"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="73.6667~96.3000"/>
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
                                                   onblur="checklatfour(this.id,1,4)" class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="34.4167~48.1667"
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
                                               for="form-field-3"> 拐点纬度3:
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="ndlatitude3"
                                                   onblur="checklatfour(this.id,2,4)" class="check1" alt="p3x3p4s"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="34.4167~48.1667"

                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 40px">


                                <div class="col-md-4" style="height: 35px;display:none;">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 拐点经度4:
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="ndlongitude4"
                                                   class="check1" alt="p3x3p4s"
                                                   onblur="checklonfour(this.id,3,4)"
                                                   style="height: 25px; margin-top: 3px; width: 170px;"
                                                   onkeyup="if(isNaN(value))execCommand('undo')"
                                                   onafterpaste="if(isNaN(value))execCommand('undo')"
                                                   placeholder="73.6667~96.3000"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="height: 35px;display:none;">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label no-padding-right"
                                               for="form-field-3"> 拐点纬度4:
                                        </label>

                                        <div class="col-md-8">
                                            <input type="text" id="ndlatitude4"
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
                                               for="form-field-3"> 物料种类:<a style="color: red">*</a>
                                        </label>
                                        <div class="col-md-8">
                                            <select name="ndmaterialType" id="ndmaterialType" class="form-control"
                                                    style="width:170px;height:30px;">
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
                                                   style="height: 30px; width: 170px;"/>
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
                                            <select name="ndmaterialType1" id="ndmaterialType1" class="form-control"
                                                    style="width:170px;height:30px;">
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
                                            <input type="text" id="ndmaterialCapacity" onblur="checkwl(this.id)" ;
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
                                            <input type="text" id="ndloadingCapacity" class="check1"
                                                   style="height: 30px; width: 170px;"/>
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
                                                   style="height: 30px; width: 170px;"/>
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
                                            <select name="nscccode" id="nscccode" class="form-control"
                                                    style="width:170px;height:30px;">
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
                                            <label><input name="yarddust" type="checkbox" value="A"/>封闭</label>
                                            <label><input name="yarddust" type="checkbox" value="B"/>密封</label>
                                            <label><input name="yarddust" type="checkbox" value="C"/>抑尘墙</label>
                                            <label><input name="yarddust" type="checkbox" value="D"/>抑尘网</label>
                                            <label><input name="yarddust" type="checkbox" value="E"/>防风网</label>
                                            <label><input name="yarddust" type="checkbox" value="F"/>洒水</label>
                                            <label><input name="yarddust" type="checkbox" value="G"/>喷淋</label>
                                            <label><input name="yarddust" type="checkbox" value="H"/>喷水</label>
                                            <label><input name="yarddust" type="checkbox" value="I"/>半封闭</label>
                                            <label><input name="yarddust" type="checkbox" value="J"/>无</label>
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
                                            <label><input name="winddust" type="checkbox" value="A"/>封闭</label>
                                            <label><input name="winddust" type="checkbox" value="B"/>密闭</label>
                                            <label><input name="winddust" type="checkbox" value="C"/>洒水</label>
                                            <label><input name="winddust" type="checkbox" value="D"/>喷淋</label>
                                            <label><input name="winddust" type="checkbox" value="E"/>喷水</label>
                                            <label><input name="winddust" type="checkbox" value="F"/>化学覆盖剂</label>
                                            <label><input name="winddust" type="checkbox" value="G"/>编织布覆盖</label>
                                            <label><input name="winddust" type="checkbox" value="H"/>半封闭</label>
                                            <label><input name="winddust" type="checkbox" value="I"/>无</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group" style="width:400px">
                                        <label class="col-md-3 control-label no-padding-right"
                                               for="form-field-3" style="width:130px"> 日装卸开始时间:</label>
                                        <div class="input-group date form_time " style="width: 200px" data-date=""
                                             data-date-format="hh:ii" data-link-field="dtp_input3"
                                             data-link-format="hh:ii">
                                            <input type="text" id="ndloadingStart"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value="" readonly="readonly"/>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-remove"></span></span>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-calendar"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12" style="height: 40px">
                                <div class="col-md-6" style="height: 35px">
                                    <div class="form-group" style="width:400px">
                                        <label class="col-md-3 control-label no-padding-right"
                                               for="form-field-3" style="width:130px"> 日装卸结束时间:</label>
                                        <div style="width: 200px" class="input-group date form_time " data-date=""
                                             data-date-format="hh:ii" data-link-field="dtp_input3"
                                             data-link-format="hh:ii">
                                            <input type="text" id="ndloadingTime"
                                                   class="form-control" style="height: 30px; width: 170px;"
                                                   value="" readonly="readonly"/>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-remove"></span></span>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-calendar"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div align="left">
                                <input type="button" class="btn btn-primary"
                                       style="width: 80px; line-height: 8px; margin-left: 15px;"
                                       value="保存" onclick="addYard()"/>
                            </div>
                        </div>
                        <div align="left">
                            <input type="button" class="btn btn-primary"
                                   style="width:80px;line-height:8px;margin-left:15px;" value="新增"
                                   id="add" onclick="addTable()"/>
                        </div>
                        <div class="row" style="height:60px;text-align:center;">
                            @include('layouts.public_end')
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
    document.getElementById("yarddust").setAttribute("class", "active");
</script>


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
    $(document).ready(function () {

        //装卸控制措施
        var num = "<?php echo "{$itemroaddusti}" ?>";
        //alert(num);
        for (var cur = 1; cur <= num; cur++) {
            //alert("controlMeasures" + cur);
            var conn1 = document.getElementById("dcontrolMeasures1" + cur).value;

            //alert(conn1);
            if (conn1.charAt(conn1.length - 1) == "、"
                || conn1.charAt(conn1.length - 1) == ",") {
                conn1 = conn1.substring(0, conn1.length - 1);
            }
            //alert(conn1);
            var finalname = "";
            var strs = new Array(); //定义一数组
            strs = conn1.split(",");
            //alert(strs.length);
            var i = 0;
            for (i = 0; i < strs.length; i++) {
                if (strs != "") {
                    if (strs[i] == "A") {
                        $("input[name='yarddust" + cur + "'][value='A']").attr('checked', true);
                        //$("[control=A1]").attr('checked',true);
                    }
                    if (strs[i] == "B") {
                        $("input[name='yarddust" + cur + "'][value='B']").attr('checked', true);
                    }
                    if (strs[i] == "C") {
                        $("input[name='yarddust" + cur + "'][value='C']").attr('checked', true);
                    }
                    if (strs[i] == "D") {
                        $("input[name='yarddust" + cur + "'][value='D']").attr('checked', true);
                    }
                    if (strs[i] == "E") {
                        $("input[name='yarddust" + cur + "'][value='E']").attr('checked', true);
                    }
                    if (strs[i] == "F") {
                        $("input[name='yarddust" + cur + "'][value='F']").attr('checked', true);
                    }
                    if (strs[i] == "G") {
                        $("input[name='yarddust" + cur + "'][value='G']").attr('checked', true);
                    }
                    if (strs[i] == "H") {
                        $("input[name='yarddust" + cur + "'][value='H']").attr('checked', true);
                    }
                    if (strs[i] == "I") {
                        $("input[name='yarddust" + cur + "'][value='I']").attr('checked', true);
                    }
                    if (strs[i] == "J") {
                        $("input[name='yarddust" + cur + "'][value='J']").attr('checked', true);
                    }

                }
                else {
                }
            }

        }



        for (var cur = 1; cur <= num; cur++) {
            //alert("controlMeasures" + cur);
            var conn = document.getElementById("dcontrolMeasures" + cur).value;

            //alert(conn);
            if (conn.charAt(conn.length - 1) == "、"
                || conn.charAt(conn.length - 1) == ",") {
                conn = conn.substring(0, conn.length - 1);
            }
            //alert(conn);
            var finalname = "";
            var strs = new Array(); //定义一数组
            strs = conn.split(",");
            //alert(strs.length);
            var i = 0;
            for (i = 0; i < strs.length; i++) {
                if (strs != "") {
                    if (strs[i] == "A") {
                        $("input[name='winddust" + cur + "'][value='A']").attr(
                            'checked', true);
                        //$("[control=A1]").attr('checked',true);
                    }
                    if (strs[i] == "B") {
                        $("input[name='winddust" + cur + "'][value='B']").attr(
                            'checked', true);
                    }
                    if (strs[i] == "C") {
                        $("input[name='winddust" + cur + "'][value='C']").attr(
                            'checked', true);
                    }
                    if (strs[i] == "D") {
                        $("input[name='winddust" + cur + "'][value='D']").attr(
                            'checked', true);
                    }
                    if (strs[i] == "E") {
                        $("input[name='winddust" + cur + "'][value='E']").attr(
                            'checked', true);
                    }
                    if (strs[i] == "F") {
                        $("input[name='winddust" + cur + "'][value='F']").attr(
                            'checked', true);
                    }
                    if (strs[i] == "G") {
                        $("input[name='winddust" + cur + "'][value='G']").attr(
                            'checked', true);
                    }
                    if (strs[i] == "H") {
                        $("input[name='winddust" + cur + "'][value='H']").attr(
                            'checked', true);
                    }
                    if (strs[i] == "I") {
                        $("input[name='winddust" + cur + "'][value='I']").attr(
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
