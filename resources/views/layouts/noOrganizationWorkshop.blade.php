<!DOCTYPE html>

<?php
$itemroaddusti = 0;
?>
<html lang="en">
<head>
    <title>道路扬尘源</title>

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


            /* $.post(" url("information") }}",{'_token': csrf_token() }}','id':id},function (data) {
             console.log(data);
             $("#information").val(data.information);
             });*/
            $.post("{{ url("listRoadlist") }}", {'_token': '{{ csrf_token() }}'}, function (data) {
                $froaddustsourcetemp = 1;
            });
        });
    </script>
    <script type="text/javascript">
        function addRow() {

            var tabObj = document.getElementById("grid1");//获取添加数据的表格
            var rowsNum = tabObj.rows.length; //获取当前行数
            var colsNum = tabObj.rows[rowsNum - 1].cells.length;//获取行的列数

            var td = new Array(colsNum);
            var myNewRow = tabObj.insertRow(rowsNum);//插入新行

            for (var i = 0; i < 6; i++) {
                td[i] = myNewRow.insertCell(i);
//		if (i == 0)
//			td[i].innerHTML = "<input type='checkbox' name='ischeck' id='chkArr'  />";
//		else
                if (i == 5) {
                    td[i].innerHTML = "<input  name='123' id='1'  style='width:60px' type='button' value='保存' onclick='savepageadd(-1)'/>";
                    //td[i].innerHTML = "<span style='width:100px' id='tt'  class='ui-pg-div' onclick='savepage(-1)' ><span class='ui-icon icon-refresh green'></span></span>";
                } else {

                    td[i].innerHTML = "<input  name='chkArr' id='newadd'  style='width:60px' />";

                }

            }

        }
        //删除所选中的行，且直接删除数据库中的数据
        function deletejspresult(wsid) {

            var chkObj = document.getElementsByName("ischeck");//???
            var tabObj = document.getElementById("grid1");

            for (var k = 0; k <= tabObj.rows.length; k++) {

                if (chkObj[k].value == wsid) {

                    tabObj.deleteRow(k + 1);
                    return;

                }
            }
            return;
        }
        function batchDelete(action, checkboxName, form) {

            if (!hasOneChecked(checkboxName)) {
                alert('请选择要操作的对象!');
                return;
            }
            if (confirm('确定执行[删除]操作?')) {

                form.action = action;
                form.submit();

            }
        }
        //单个删除
        function oneDelete(wsid) {

            if (confirm('确定执行[删除]操作?')) {
                //deletejspresult(wsid);

                $.post("{{url('noOrganizationdelete')}}", {
                    '_token': '{{csrf_token()}}',
                    wsid: wsid
                }, function (state) {
                    if (state == 1) {
                        alert("删除成功");
                    } else {
                        alert("删除失败");
                    }
                });
                location.reload();


            }
        }

        function hasOneChecked(name) {
            var items = document.getElementsByName(name);
            if (items.length > 0) {
                for (var i = 0; i < items.length; i++) {
                    if (items[i].checked == true) {
                        return true;
                    }
                }
            } else {
                if (items.checked == true) {
                    return true;
                }
            }
            return false;
        }

        function modify(wsid) {
            $('#edit' + wsid).hide();
            $('#save' + wsid).show();
            var tds = document.getElementsByName(wsid);
            for (i = 0; i < 5; i++) {

                tds[i].innerHTML = "<input style='width:60px'  name='modify" + wsid + "' value=" + tds[i].innerHTML + ">";

            }
            //点击编辑后，编辑按钮消失，出现保存按钮


        }

        //判断一个数是不是小数
        function isNum(s) {
            var regu = "^([0-9]*[.0-9])$"; // 小数测试
            var re = new RegExp(regu);
            if (s.search(re) != -1)
                return true;
            else
                return false;
        }
        //验证纬度范围
        function checklat(x) {
            //alert("验证纬度");
            var pphone = x;
            if (pphone != '') {
                if (isNaN(pphone)) {
                    alert("纬度必须是数字，请重新输入！");
                    return false;
                } else {
                    if (isNum(pphone) || pphone.toString().split(".")[1].length < 4) {
                        alert("纬度必须是数字且准确到小数点后四位，请重新输入！");
                        return false;
                        // document.getElementById(x).focus();
                    } else {
                        if (pphone > 34.4167 && pphone < 48.1667) {
                            return true;
                        }
                        else {
                            alert("您输入的纬度超出填写范围34.4167~48.1667，请重新输入！");
                            return false;
                            //document.getElementById(x).focus();
                        }
                    }
                    return false;

                }


                //34.37~49.55

            }
            return false;
        }

        //验证经度度范围93.68~96.30"
        function checklon(x) {
            var pphone = x;
            if (pphone != '') {
                if (isNaN(pphone)) {
                    alert("经度必须是数字，请重新输入！");
                    return false;
                } else {
                    if (isNum(pphone) || pphone.toString().split(".")[1].length < 4) {
                        alert("经度必须是数字且准确到小数点后四位，请重新输入！");
                        return false;
                        //document.getElementById(x).focus();
                    } else {
                        if (pphone > 73.6667 && pphone < 96.3000) {
                            return true;
                        }
                        else {
                            alert("您输入的经度超出填写范围73.6667~96.3000，请重新输入！");
                            return false;

                        }
                    }
                    return false;

                }


                //34.37~49.55
            }
            return false;
        }


        //保存完成后，新增按钮点亮，一次只允许添加一行
        function savepageadd(aa) {
            var elms = document.getElementsByName("chkArr");
            var array = new Array(elms.length);
            for (var i = 0; i < 5; i++) {
                array[i] = elms[i].value;

            }
            if (isNaN(array[0])) {
                alert("车间编号必须输入数字！");
                return;
            } else if (isNaN(array[4])) {
                alert("车间面积必须输入数字！");
                return;
            } else if (array[4].length == 0) {
                alert("车间面积不能为空！");
                return;
            } else if (array[0].length == 0) {
                alert("车间编号不能为空！");
                return;
            }
            else {
                if (array[1].length != 0) {
                    if (checklon(array[1]));//检查
                    else return;
                }
                if (array[2].length != 0) {
                    // alert("纬度检查");
                    //如果检查不通过，直接return;
                    if (checklat(array[2]));
                    else return;
                }
                $.post("{{url('savenoOrganpageadd')}}", {
                    '_token': '{{csrf_token()}}',
                    workshopid: array[0],
                    longitude: array[1],
                    latitude: array[2],
                    productionUse: array[3],
                    workshopArea: array[4]

                }, function (state) {
                    if (state < 0) {
                        alert("保存失败");
                    } else {
                        alert("保存成功");
                    }
                });
                location.reload();


            }
            function savepage(wsid) {
                //用js提取页面中值
                if (wsid == -1) {
                    var elms = document.getElementsByName("chkArr");
                    var array = new Array(elms.length);
                    for (var i = 0; i < 5; i++) {
                        array[i] = elms[i].value;

                    }


                }

                else {
                    var elms = document.getElementsByName("modify" + wsid);

                    var array = new Array(elms.length);
                    for (var i = 0; i < elms.length; i++) {
                        array[i] = elms[i].value;
                    }


                }

                if (isNaN(array[0])) {
                    alert("车间编号必须输入数字！");
                    return;
                } else if (isNaN(array[4])) {
                    alert("车间面积必须输入数字！");
                    return;
                } else if (array[4].length == 0) {
                    alert("车间面积不能为空！");
                    return;
                } else if (array[0].length == 0) {
                    alert("车间编号不能为空！");
                    return;
                }
                else {
                    if (array[1].length != 0) {
                        if (checklon(array[1]));//检查
                        else return;
                    }
                    if (array[2].length != 0) {
                        // alert("纬度检查");
                        //如果检查不通过，直接return;
                        if (checklat(array[2]));
                        else return;
                    }
                    $.post("{{url('FnoOrganizationWorkshopDischargeTempupdate')}}", {
                        '_token': '{{csrf_token()}}',
                        wsid: wsid,
                        workshopid: array[0],
                        longitude: array[1],
                        latitude: array[2],
                        productionUse: array[3],
                        workshopArea: array[4]

                    }, function (state) {
                        if (state < 0) {
                            alert("更新失败");
                        } else {
                            alert("更新成功");
                        }
                    });
                    location.reload();


                }


                document.getElementById("add").disabled = false;
                $('#edit' + wsid).show();
                $('#save' + wsid).hide();
            }//end

            function setAllCheckboxState(name, state) {
                var elms = document.getElementsByName("ischeck");

                for (var i = 0; i < elms.length; i++) {
                    elms[i].checked = state;
                }
            }
        }


    </script>
    <script type="text/javascript">
        function updateInfo(cur) {


            var factoryid = document.getElementById("roadfactoryid" + cur).value;
            var roadDustid = document.getElementById("roadDustid" + cur).value;
            var companyName = document.getElementById("companyName" + cur).innerHTML;
            //alert(companyName);
            var pathLength = document.getElementById("pathLength" + cur).value;
            var ispave = document.getElementById("ispave" + cur).value;

            var averWidth = document.getElementById("averWidth" + cur).value;
            var averWeight = document.getElementById("averWeight" + cur).value;
            var carFlow = document.getElementById("carFlow" + cur).value;
            var averSpeed = document.getElementById("averSpeed" + cur).value;
            var clearTimeInstall = document.getElementById("clearTimeInstall" + cur).value;

            var clearTimeUninstall = document.getElementById("clearTimeUninstall" + cur).value;
            var sweepSpring = document.getElementById("sweepSpring" + cur).value;
            var sweepSummer = document.getElementById("sweepSummer" + cur).value;
            var sweepFall = document.getElementById("sweepFall" + cur).value;
            var waterTimesSpring = document.getElementById("waterTimesSpring" + cur).value;

            var waterTimesSummer = document.getElementById("waterTimesSummer" + cur).value;
            var waterTimesFall = document.getElementById("waterTimesFall" + cur).value;
            var dustSuppression = document.getElementById("dustSuppression" + cur).value;


            if (ispave == "1") {
                //alert(4);

                scc = "1602001003";
            }
            else {
                scc = "1602002000";
            }

            if (pathLength == "" || ispave == "" || averWeight == "" ||
                averSpeed == "" || averWidth == "" || carFlow == "" || clearTimeInstall == "" ||
                clearTimeUninstall == "" || sweepSpring == "" || sweepSummer == "" || sweepFall == "" ||
                waterTimesSpring == "" || waterTimesSummer == "" || waterTimesFall == "" || dustSuppression == "") {
                alert("红色标识为必填字段！");
                return;
            }
            else {

                $.post("ajax/FroadDustSourceTemp/saveClientRoad.do", {
                    scccode: scc,
                    factoryid: factoryid,
                    roadDustid: roadDustid,
                    companyName: companyName,
                    pathLength: pathLength,
                    ispave: ispave,

                    averWidth: averWidth,
                    averWeight: averWeight,
                    carFlow: carFlow,
                    averSpeed: averSpeed,
                    clearTimeInstall: clearTimeInstall,
                    clearTimeUninstall: clearTimeUninstall,
                    sweepSpring: sweepSpring,
                    sweepSummer: sweepSummer,
                    sweepFall: sweepFall,
                    waterTimesSpring: waterTimesSpring,

                    waterTimesSummer: waterTimesSummer,
                    waterTimesFall: waterTimesFall,
                    dustSuppression: dustSuppression

                }, function (data) {
                    //alert("nihao 123");
                    var json = eval("(" + data + ")");
                    if (json.status == 1) {
                        alert("保存成功！");

                    } else {
                        alert("保存失败！");
                    }

                });
            }

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
                <a href="#"></a>
            </li>


            <li class="active">
                企业车间信息
            </li>
        </ul>
    </div>

    <form id="queryForm" name="queryForm"
          action=""
          method="get" style="display: inline;">
        <div class="page-content" style="height: 50%">
            <div class="page-header">
                <h1>
                    <b>企业信息</b>
                    <small><i class="icon-double-angle-right"></i> 概要信息</small>
                </h1>

            </div>
            <!-- /.page-header -->

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
                            @foreach($fnoOrganizationWorkshop as $item)
                                <tr>
                                    <td style=display:none>
                                        <input type="checkbox" name="ischeck" value="${item.wsid}">
                                    </td>
                                    <td name='{{ $item['wsid'] }}'>
                                        {{--<c:out value='${item.workshopid}' />--}}{{ $item['workshopid'] }}
                                    </td>
                                    <td name='{{ $item['wsid'] }}'>
                                        {{ $item['longitude'] }}
                                    </td>
                                    <td name='{{ $item['wsid'] }}'>
                                        {{ $item['latitude'] }}
                                    </td>
                                    <td name='{{ $item['wsid'] }}'>
                                        {{ $item['production_use'] }}
                                    </td>
                                    <td name='{{ $item['wsid'] }}'>
                                        {{ $item['workshop_area'] }}
                                    </td>
                                    <td style="vertical-align: middle; width: 160px;">


                                        <input id='edit{{ $item['wsid'] }}' style='width:60px' type='button' value='修改'
                                               onclick="modify('{{ $item['wsid'] }}') "/>


                                        <input id='save{{ $item['wsid'] }}' style='width:60px;display: none;'
                                               type='button'
                                               value='保存' onclick="savepage('{{ $item['wsid'] }}')"/>


                                        <input id='delete{{ $item['wsid'] }}' style='width:60px' type='button'
                                               value='删除'
                                               onclick="oneDelete({{ $item['wsid'] }}) "/>


                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <div align="center">
                        <input type="button" class="btn btn-info" style="width: 90px"
                               value="新增车间" id="add" onclick="addRow()"/>

                    </div>

                    <div class="row" style="height:60px;text-align:center;margin-top:20px;">
                        @include('layouts.public_end')
                    </div>
                </div>
            </div>
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
    document.getElementById("workshop").setAttribute("class", "active");
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
