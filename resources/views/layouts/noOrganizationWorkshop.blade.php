
<!DOCTYPE html>

<?php
$itemroaddusti = 0;
?>
<html lang="en">
<head>
    <title>道路扬尘源</title>

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
@include("layouts.leftnav")

<div class="main-content">
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


            <li class="active">
                企业车间信息
            </li>
        </ul>
        <!-- .breadcrumb -->


    </div>

    <form id="queryForm" name="queryForm"
          action="<c:url value="/pages/Loadingprocess/save.do"/>"
    method="get" style="display: inline;">
    <div class="page-content" style="height: 50%">
        <div class="page-header">
            <h1>
                <b>企业信息</b>
                <small> <i class="icon-double-angle-right"></i> 概要信息 </small>
            </h1>

        </div>
        <!-- /.page-header -->
        <%@ include file="/client/public_com.jsp"%>

        <div class="row">

            <div class="col-xs-12">


                <div class="dataTables_wrapper">
                    <div class="page-header">
                        <h1>
                            <b>无组织车间信息</b>

                        </h1>
                        <h3 style="color: red">若无车间，车间面积请填写露天装置的占地面积</h3>
                    </div>
                    <div class="table-header">
                        无组织车间信息
                    </div>

                    <table id="grid1" width="100%" border="0" cellspacing="0"
                           class="table table-striped table-bordered table-hover">
                        <thead>

                        <tr style="color:#32B16C;">

                            <th style="width: 1px; display:none">
                                <input type="checkbox"
                                       onclick="setAllCheckboxState('ischeck',this.checked)"
                                       name="check">
                            </th>
                            <th sortColumn="workshopid">
                                车间编号
                            </th>
                            <th sortColumn="longitude">
                                经度(73.6667~96.3000)
                            </th>
                            <!-- 排序时为th增加sortColumn即可,new SimpleTable('sortColumns')会为tableHeader自动增加排序功能; -->
                            <th sortColumn="latitude">
                                纬度(34.4167~48.1667)
                            </th>
                            <th sortColumn="production_use">
                                生产用途
                            </th>
                            <th sortColumn="workshop_area">
                                车间面积(m^2)
                            </th>
                            <th>
                                操作
                            </th>
                        </tr>

                        </thead>
                        <tbody>
                        <c:forEach items="${page.result}" var="item"
                                   varStatus="status">
                            <tr>
                                <td style=display:none>
                                    <input type="checkbox" name="ischeck" value="${item.wsid}">
                                </td>
                                <td name='${item.wsid}' >
                                    <c:out value='${item.workshopid}' />
                                </td>
                                <td name='${item.wsid}'>
                                    <c:out value='${item.longitude}' />
                                </td>
                                <td name='${item.wsid}'>
                                    <c:out value='${item.latitude}' />
                                </td>
                                <td name='${item.wsid}'>
                                    <c:out value='${item.productionUse}' />
                                </td>
                                <td name='${item.wsid}'>
                                    <c:out value='${item.workshopArea}' />
                                </td>
                                <td style="vertical-align: middle; width: 160px;">

                                    <!--<span id='edit${item.wsid}' class="ui-pg-div "
                                        onclick="modify(${item.wsid}) "><span
                                        class="ui-icon ui-icon-pencil red"></span>
                                    </span>
                                    -->

                                    <input  id='edit${item.wsid}'  style='width:60px' type='button' value='修改' onclick="modify(${item.wsid}) "/>

                                    <!--<span id='save${item.wsid}' style="display: none;"
                                        class="ui-pg-div" onclick="savepage(${item.wsid})"><span
                                        class="ui-icon icon-refresh green"></span>
                                    </span>
                                    -->
                                    <input  id='save${item.wsid}'  style='width:60px;display: none;' type='button' value='保存' onclick="savepage(${item.wsid})"/>


                                    <!--<span id='delete${item.wsid}' class="ui-pg-div"
                                        onclick="oneDelete(${item.wsid}) "><span
                                        class="ui-icon icon-trash bigger-120 red"></span>
                                    </span>
                            -->
                                    <input  id='delete${item.wsid}'  style='width:60px' type='button' value='删除' onclick="oneDelete(${item.wsid}) "/>


                            </tr>
                        </c:forEach>
                        </tbody>
                    </table>

                </div>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <div align="center">
                    <input type="button" class="btn btn-info" style="width: 90px"
                           value="新增车间" id="add" onclick="addRow()" />

                </div>

                <div class="row" style="height:60px;text-align:center;margin-top:20px;" >
                    <%@ include file="/client/public_end.jsp"%>
                </div>

                <!-- /.page-content -->
                </form>
            </div>
            <!-- /.main-content -->

        </div>
        <!-- /.main-container-inner -->

        <a href="#" id="btn-scroll-up"
           class="btn-scroll-up btn btn-sm btn-inverse"> <i
                    class="icon-double-angle-up icon-only bigger-110"></i> </a>
    </div>
    <!-- /.main-container -->




<script type="text/javascript">
    $("#set2").toggle();
    document.getElementById("workshop").setAttribute("class","active");
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
