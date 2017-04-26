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


            /* $.post url("information") }}",{'_token': csrf_token() }}','id':id},function (data) {
             console.log(data);
             $("#information").val(data.information);
             });*/
            $.post("{{ url("listRoadlist") }}", {'_token': '{{ csrf_token() }}'}, function (data) {
                $froaddustsourcetemp = 1;
            });
        });
    </script>

    <script type="text/javascript">
        function modify(loadingid) {
            $('#edit' + loadingid).hide();
            $('#save' + loadingid).show();
            $('#delete' + loadingid).hide();
            var tds = document.getElementsByName(loadingid);

            tds[0].innerHTML = "<input style='width:120px'  name='modify" + loadingid + "' onkeyup='checkNum(this);' maxlength='20' value=" + tds[0].innerHTML + "/>";
            document.getElementById("addbare").disabled = true;
            //点击编辑后，编辑按钮消失，出现保存按钮


        }

        function oneDelete(loadingid) {

            if (confirm('确定执行[删除]操作?')) {


                $.post("{{url('deleteSoil')}}",
                    {'_token': '{{csrf_token()}}', baresoilid: loadingid}, function (state) {
                        if (state == 0) {
                            alert("删除成功");
                        } else {
                            alert("删除失败");
                        }
                    });
                location.reload();

            }
        }


        //2015年6月19日  刘晓晨
        //保存完成后，新增按钮点亮，一次只允许添加一行
        function savepagesoil(loadingid) {
            //用js提取页面中值

            if (loadingid == -1) {
                var elms = document.getElementsByName("chkArr");
                var array = new Array(elms.length)
                for (var i = 1; i < 2; i++) {
                    array[i] = elms[i - 1].value;
                }
                var barearea = array[1];
            }
            else {
                var elms = document.getElementsByName("modify" + loadingid);
                var array = new Array(elms.length);

                for (var i = 0; i < elms.length; i++) {
                    array[i] = elms[i].value;

                }
                var barearea = array[0];
            }

            if (isNaN(barearea)) {
                alert("裸土面积不为数字");
                return;
            }

            if (barearea == "") {
                alert("裸土面积不能为空！");
            }
            else {
                $.post("{{url('updatebareinfo')}}", {
                    '_token': '{{csrf_token()}}',
                    bareSoilid: loadingid,
                    bareSoilArea: barearea
                }, function (state) {
                    if (state == 0) {
                        alert("更新成功");
                    } else {
                        alert("更新失败");
                    }
                });
                location.reload();


            }


        document.getElementById("addbare").disabled = false;
        $('#edit' + loadingid).show();
        $('#save' + loadingid).hide();
        $('#delete' + loadingid).show();

        }
    </script>


</head>
@include("layouts.header")


<body onLoad="javascript:document.queryForm.reset()">
<div class="main-container-inner">
    <a class="menu-toggler" id="menu-toggler" href="#">
        <span class="menu-text"></span>
    </a>
    @include("layouts.leftnav")


    <div>
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'collapsed')
            } catch (e) {
            }
        </script>
    </div>

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


                <li class="active">企业裸土信息</li>
            </ul><!-- .breadcrumb -->


        </div>


        <form id="queryForm" name="queryForm" action="" method="get" style="display: inline;">
            <div class="page-content" style="height: 50%">
                <div class="page-header">
                    <h1>
                        <b>企业信息</b>
                        <small><i class="icon-double-angle-right"></i> 概要信息</small>
                    </h1>
                </div>
                <!-- /.page-header -->
                <div class="row" style="height:40px;">
                    <div class="col-md-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-md-5 control-label no-padding-right" for="form-field-3"> 机构代码：</label>

                                <div class="col-md-7">
                                    <label id='factotyno'
                                           style="font-size:15px; margin-top:3px;">{{ session("factory")["factory_no1"] }}</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right" for="form-field-1">
                                    企业名称： </label>
                                <div class="col-md-8">
                                    <label id='factoryName' style="font-size:15px; margin-top:3px;">
                                        {{session("factory")['factory_name']}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-5 control-label no-padding-right" for="form-field-3">
                                    污染源类型：</label>

                                <div class="col-md-7">
                                    <label id='sourceType' style="font-size:15px; margin-top:3px;">
                                        {{ session("factory")['source_type'] }} </label>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-12">


                        <div class="dataTables_wrapper">
                            <div class="page-header">
                                <h1>
                                    <b>裸土扬尘源信息</b>

                                </h1>
                            </div>
                            <div class="table-header">
                                裸土扬尘源信息
                            </div>

                            <table id="grid1" width="100%" border="0" cellspacing="0"
                                   class="table table-striped table-bordered table-hover">
                                <thead>

                                <tr style="color:#32B16C;">

                                    <th style="width:1px; display: none"><input type="checkbox"
                                                                                onclick="setAllCheckboxState('ischeck',this.checked)"
                                                                                name="check" style="display: none"></th>

                                    <th sortColumn="factor">裸土面积(平方米)</th>

                                    <th>操作</th>
                                </tr>

                                </thead>
                                <tbody>
                                @foreach($fbaresoil as $item)
                                    <tr>
                                        <td style="display: none"><input type="checkbox" name="ischeck"
                                                                         value="{{$item['bare_soilid']}}"></td>

                                        <td name='{{$item['bare_soilid']}}'>
                                            {{--<c:out value='${item.bareSoilArea}'/>--}}{{ $item['bare_soil_area'] }}
                                        </td>


                                        <td style="vertical-align:middle;width:160px;">

                                            <input type="button" id='edit{{$item['bare_soilid']}}' value="编辑"
                                                   style='width:60px' class="ui-pg-div "
                                                   onclick="modify('{{$item['bare_soilid']}}') "/>
                                            <input type="button" id='save{{$item['bare_soilid']}}' value="保存"
                                                   style="display:none; width:60px" class="ui-pg-div"
                                                   onclick="savepagesoil('{{$item['bare_soilid']}}')"/>
                                            <input type="button" id='delete{{$item['bare_soilid']}}' value="删除"
                                                   style='width:60px' class="ui-pg-div"
                                                   onclick="oneDelete('{{$item['bare_soilid']}}') "/>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <br/><br/><br/><br/>
                        <div align="center">
                            <input type="button" class="btn btn-info" style="width:150px" value="新增裸土面积" id="addbare"
                                   onclick="addnewRow()"/>

                        </div>

                        <div class="row" style="height:80px;text-align:center;margin-top:20px;">
                            @include('layouts.public_end')
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div><!-- /.main-content -->
</div><!-- /.main-container-inner -->


<script type="text/javascript">
    $("#set2").toggle();
    document.getElementById("baredust").setAttribute("class", "active");
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
