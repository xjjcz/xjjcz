<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
    <title>烟囱/排气筒信息</title>

    <!-- basic styles -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
    <!-- basic styles -->


    <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/font-awesome.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/font-awesome-ie7.min.css") }}" rel="stylesheet"/>


    <!-- page specific plugin styles -->

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

    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>

    <!-- ace styles -->
    <script src="{{ asset("/js/jquery-1.7.2.min.js") }}" type="text/javascript">
    </script>
    <script type="text/javascript" src="{{ asset("/js/autoNumeric.js") }}">
    </script>
    <script src="{{ asset("/js/checkhelp.js") }}"></script>
    <script src="{{ asset("/js/schelp.js") }}"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $('.check1').focus(function () {
                $('.check1').autoNumeric();
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function (){

            //alert(document.getElementById(material_name1).innerHTML);
            document.getElementById("NUM").innerHTML = "<b>" + {{ $NUM }}
                + "号烟囱</b>";
            $.post("ajax/ExhaustTemp/loadpage.do", {}, function (data) {

                var json = eval("(" + data + ")");
                var mypage = parseInt(json.page);
                document.getElementById("NUM").innerHTML = "<b>" + mypage
                    + "号烟囱</b>";
                document.getElementById("page").value = json.page;
                //从后台得到是否更改的按钮信息，若更改显示提示信息，否则不显示
                if (json.alert == 1) {
                    $('#m_alert').show();
                } else {
                    $('#m_alert').hide();
                }
                // 如果当前页面是最后一页，下一步不显示
                if (parseInt(json.page) == parseInt('${totalexhaust}')) {
                    $('#nextpage').hide();
                    var newpage = parseInt('${newexhaust}');
                    if (newpage == 1) {
                        $('#detelepage').hide();
                    } else {
                        $('#detelepage').show();
                    }
                } else {
                    //nextpage.show();
                    $('#nextpage').show();
                    $('#detelepage').hide();
                }
                if (parseInt(json.page) == 1) {
                    $('#prepage').hide();
                } else {
                    //nextpage.show();
                    $('#prepage').show();
                }
                //alert("pages:"+json.page);
                //加载当前页面设备的信息到cursolventequ中去
            });
        });
    </script>
    <script type="text/javascript">
        function jumptopage(page) {
            $
                .post("ajax/ExhaustTemp/savepagejump.do",
                    {
                        page: page
                    },
                    function (data) {
                        var json = eval("(" + data + ")");
                        if (json.sys_code == "suc") {
                            //如果是0说明是工厂信息的页面否则是设备信息的页面
                            if (page == 0) {
                                window.location.href = "";

                            } else {
                                window.location.href = "";
                            }
                        }
                    });
        }
        function cancel() {
            // 表示当前页是新添加的页，若取消了本页将被删除，总页面数-1
            // alert(1);
            var newpage = parseInt('${newexhaust}');
            var m_pages = parseInt(document.getElementById("page").value);
            var total = parseInt('${totalexhaust}');
            if (newpage == 1 && m_pages == total) {
                var number = parseInt('${totalexhaust}') - 1;
                // alert(number);
                if (window.confirm('你确定要取消当前操作吗？若确定，当前页面填写数据将丢失，新增页面将删除。')) {
                    $.post("ajax/ExhaustTemp/decone.do", {
                        totalexhaust: number,
                        newexhaust: 0
                    }, function (data) {
                    });
                    /* if(m_pages<=1){
                     window.location.href="client/stationary/complanyinfo.jsp";
                     }*/
                    jumptopage(m_pages - 1);
                } else {
                    return;
                }
            } else {
                if (window.confirm('你确定要取消当前操作吗？若确定，当前页面填写数据将丢失。')) {
                    var m_pages = parseInt(document.getElementById("page").value);
                    jumptopage(m_pages - 1);
                } else {
                    return;
                }
            }
            //获取当前页

        }
        function testselected(myselect, inputval) {
            var val = document.getElementById(inputval).value;
            $("#" + myselect + " option[value='" + val + "']").attr("selected", true);
        }
        function next() {

            var number = parseInt('${totalexhaust}');
            var m_pages = parseInt(document.getElementById("page").value);
            addsaveinfo(m_pages + 1, 'exhaust');

        }
        function cjdetele() {
            var cjexfid = document.getElementById("EXF_ID").value;
            $.post("{{ url('ExhaustTempdetele') }}", {
                '_token': '{{csrf_token()}}',
                cjexfid: cjexfid
            }, function (state) {
                if (state == 1) {
                    alert("删除成功");
                    window.location.href = '{{ url("/exhaust") }}' + '/' + '{!! $NUM-2 !!}';
                }else {
                    alert("删除失败");
                }
            });

        }
        function pre() {
            var m_pages = parseInt(document.getElementById("page").value);
            if (m_pages - 1 == 100) {
                alert(m_pages - 1);
                addsaveinfo(0, 'exhaust');
            } else {
                addsaveinfo(m_pages - 1, 'exhaust');

            }
        }
        function ischanged(name) {
            document.getElementById("malert").value = 1;
            $('#m_alert').show();
        }
        //验证填写的值不为空，且是有效的数据
        //若是空值或者无效将对于填写框标红，且该填写框获得焦点并提示用户
        //人性化提示用户，您有数据没有提交到数据库，填写完成，请提交数据再关闭浏览器。
        //增加放弃填写按钮
        function funalert(name, content, witch) {
            var m_value = document.getElementById(name).value;
            if (m_value == '') {
                if (witch == 0) {
                    m_content = "带星号必填，请填写“" + content + "”，点击确定强制离开，“" + content
                        + "”将被自动填充默认值";
                    if (confirm(m_content)) {
                        document.getElementById(name).value = 0;
                        return 1;//自动填充
                    } else {
                        document.getElementById(name).focus();
                        document.getElementById(name).style.border = "2px red solid";
                        return 0;
                    }
                } else {
                    m_content = "带星号必填，请填写“" + content + "“";
                    alert(m_content);
                    document.getElementById(name).focus();
                    document.getElementById(name).style.border = "2px red solid";
                    return 0;
                }

            }
            return 2;//2表示数据验证有效，可以跳转
        }
        function checkvalue(witch) {
            //验证包括的填写的值是
            var ids = new Array("material", "exfheight", "smoke_outd", "smoke_outtem",
                "smoke_outv", "smokeOuta", "longitude", "latitude");
            var contents = new Array("烟囱材质", "烟囱高度", "烟气出口直径", "烟气出口温度", "烟气出口流速",
                "烟气流量", "烟囱经度", "烟囱纬度");
            for (var i = 0; i < ids.length; i++) {
                var result = funalert(ids[i], contents[i], witch);
                //判断是否数据是否有效，如果无效返回无效处理数字
                if (result != 2) {
                    return result;
                    break;
                }
            }
            return 2;
        }
    </script>
    <script type="text/javascript">

        function updatedata() {
            if (checkvalue(1) != 2) {
                return;
            }
            var malert = document.getElementById("malert").value;
            if (malert == 0) {
                alert("提交数据库成功!");
                return;
            }
            // alert(checkvalue());
            var fabriexfno = document.getElementById("fabriexfno").value;
            var material = document.getElementById("material").value;
            var exfheight = document.getElementById("exfheight").value;
            var smoke_outtem = document.getElementById("smoke_outtem").value;
            var smoke_outd = document.getElementById("smoke_outd").value;
            var smoke_outv = document.getElementById("smoke_outv").value;
            var longitude = document.getElementById("longitude").value;
            var latitude = document.getElementById("latitude").value;
            var m_pages = parseInt(document.getElementById("page").value);
            var smokeOuta = parseInt(document.getElementById("smokeOuta").value);
            var gnnub = m_pages;//表示保存设备m_pages
            $.post("ajax/ExhaustTemp/updatedb.do", {
                exfNo: fabriexfno,
                isnew: 0,
                exfMaterial: material,
                exfHeight: exfheight,
                smokeOutd: smoke_outd,
                smokeOutteM: smoke_outtem,
                smokeOutv: smoke_outv,
                exfLongitude: longitude,
                exfLatitude: latitude,
                smokeOuta: smokeOuta,
                cjnub: gnnub
            }, function (data) {
                var json = eval("(" + data + ")");
                //alert(json.sys_code);
                if (json.sys_code == "suc") {
                    alert("提交数据库成功");
                    document.getElementById("malert").value = 0;
                    $('#m_alert').hide();
                    window.location.reload();
                } else if (json.sys_code == "unsuc") {
                    alert("提交数据库失败");
                    window.location.reload();
                } else if (json.sys_code == "illegal") {
                    alert("因网络原因导致您本地操作失败，请退出系统后重新填报");
                    window.location.href = "index.jsp";
                }
            });
        }

        /* 自动提交数据库
         changed by CJ
         2015-8-4
         */
        function addsaveinfo(page, source) {

            var result = checkvalue(0);
            if (result == 0) {
                return;
            }
            /* var malert=document.getElementById("malert").value;
             if(malert==0){
             alert("提交数据库成功!");
             return;
             }     */
            // alert(checkvalue());
            var fabriexfno = document.getElementById("fabriexfno").value;
            var material = document.getElementById("material").value;
            var exfheight = document.getElementById("exfheight").value;
            var smoke_outtem = document.getElementById("smoke_outtem").value;
            var smoke_outd = document.getElementById("smoke_outd").value;
            var smoke_outv = document.getElementById("smoke_outv").value;
            var longitude = document.getElementById("longitude").value;
            var latitude = document.getElementById("latitude").value;
            var m_pages = parseInt(document.getElementById("page").value);
            var gnnub = m_pages;//表示保存设备m_pages
            var smokeOuta = document.getElementById("smokeOuta").value;

            $.post("ajax/ExhaustTemp/updatedb.do", {
                exfNo: fabriexfno,
                exfMaterial: material,
                smokeOuta: smokeOuta,
                isnew: 1,
                exfHeight: exfheight,
                smokeOutd: smoke_outd,
                smokeOutteM: smoke_outtem,
                smokeOutv: smoke_outv,
                exfLongitude: longitude,
                exfLatitude: latitude,
                cjnub: gnnub,
                page: page
            }, function (data) {
                var json = eval("(" + data + ")");

                if (json.sys_code == "suc") {
                    alert("提交数据库成功");
                    var m_alert = null;
                    if (source == "stationary") {
                        m_alert = '${totalboilerexsit}';
                    } else if (source == "product") {
                        m_alert = '${totaldeviceexsit}';
                    } else if (source == "procedure") {
                        m_alert = '${totalkilnexsit}';
                    }
                    //alert('${totalkilnexsit}');
                    saveinfo(page, source, 'exhaust', m_alert);

                }
            });
        }
        /**响应菜单的函数
         * page 表示跳转到第几页，0表示工厂信息页，1表示设备一，2表示设备二
         * CAIJUN
         * 2015/5/24
         * */

        function ExhaustTempsaveevery() {
            var fabriexfno = {!! $NUM !!};
            var material = document.getElementById("material").value;
            var exfheight = document.getElementById("exfheight").value;
            var smoke_outd = document.getElementById("smoke_outd").value;
            var smoke_outtem = document.getElementById("smoke_outtem").value;

            var smoke_outv = document.getElementById("smoke_outv").value;
            var smokeOuta = document.getElementById("smokeOuta").value;
            var longitude = document.getElementById("longitude").value;
            var latitude = document.getElementById("latitude").value;
            //var m_pages = parseInt(document.getElementById("page").value);
            //var gnnub = m_pages;//表示保存设备m_pages
            var malert = parseInt(document.getElementById("malert").value); //0表示未改变，1表示改变

            $.post("{{ url('ExhaustTempsaveevery') }}", {
                    '_token': '{{csrf_token()}}',
                    fabriexfno:fabriexfno,
                    exfMaterial: material,
                    exfHeight: exfheight,
                    smokeOutd: smoke_outd,
                    smokeOutteM: smoke_outtem,
                    smokeOutv: smoke_outv,
                    smokeOuta: smokeOuta,
                    exfLongitude: longitude,
                    exfLatitude: latitude
                },   function (state) {
                    if (state == 1) {
                        alert("施工扬尘源保存成功！");
                        window.location.href = '{{ url("/exhaust") }}' + '/' + '{!! $NUM-1 !!}';
                    } else {
                        alert("施工扬尘源保存失败！");
                    }
                });

        }
        function Exhaustupdate() {
            var fabriexfno = {!! $NUM !!};
            var EXF_ID = $("#EXF_ID").val();
            var material = document.getElementById("material").value;
            var exfheight = document.getElementById("exfheight").value;
            var smoke_outd = document.getElementById("smoke_outd").value;
            var smoke_outtem = document.getElementById("smoke_outtem").value;

            var smoke_outv = document.getElementById("smoke_outv").value;
            var smokeOuta = document.getElementById("smokeOuta").value;
            var longitude = document.getElementById("longitude").value;
            var latitude = document.getElementById("latitude").value;
            //var m_pages = parseInt(document.getElementById("page").value);
            //var gnnub = m_pages;//表示保存设备m_pages
            var malert = parseInt(document.getElementById("malert").value); //0表示未改变，1表示改变

            $.post("{{ url('Exhaustupdate') }}", {
                '_token': '{{csrf_token()}}',
                EXF_ID:EXF_ID,
                fabriexfno:fabriexfno,
                exfMaterial: material,
                exfHeight: exfheight,
                smokeOutd: smoke_outd,
                smokeOutteM: smoke_outtem,
                smokeOutv: smoke_outv,
                smokeOuta: smokeOuta,
                exfLongitude: longitude,
                exfLatitude: latitude
            },   function (state) {
                if (state < 0) {
                    alert("施工扬尘源更新失败！");
                } else {
                    alert("施工扬尘源更新成功！");
                    window.location.href = '{{ url("/exhaust") }}' + '/' + '{!! $NUM-1 !!}';
                }
            });

        }

        function jumpsave(source) {
            var m_alert = parseInt(document.getElementById("malert").value);
            if (m_alert == 0) {
                m_alert = '${alert}';
            }

            return jumpandsave(source, 'exhaust', m_alert);
            /*tagger='stationary';
             if(source!=tagger){

             if(m_alert==1){
             alert("请保存提交当前源，再填写其它源");
             return false;
             }else{
             alert("不用保存");
             return true;
             }

             }
             return true;*/
        }
    </script>
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
        <a class="menu-toggler" id="menu-toggler" href="#"> <span
                    class="menu-text"></span> </a>
        @include("layouts.leftnav")
        <div class="main-content">
            <div id="m_alert">
                <ul class="breadcrumb">
                    <li>
                        <a style="color: red" type="hidden">
                            您有数据没有提交到数据库，填写完成，请提交数据再关闭浏览器。</a>
                    </li>

                </ul>
                <!-- .breadcrumb -->
            </div>
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

                    <li>
                        烟囱信息
                    </li>

                </ul>
                <!-- .breadcrumb -->


            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        <b>企业信息</b>
                        <small><i class="icon-double-angle-right"></i> 概要信息</small>
                    </h1>

                </div>
                <!-- /.page-header -->

                <div class="row" style="height: 40px;">
                    <div class="col-md-12">
                        <!-- PAGE CONTENT BEGINS -->


                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    企业名称：
                                </label>
                                <div class="col-md-8">
                                    <label id='factoryName'
                                           style="font-size: 16px; font-family: '楷体'; font-weight: bold; margin-top: 2px;">
                                        {{ session('factory')['factory_name'] }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-3">
                                    机构代码：
                                </label>

                                <div class="col-md-8">
                                    <label id='factotyno'
                                           style="font-size: 16px; font-family: '楷体';; font-weight: bold; margin-top: 2px;">
                                        {{ session('factory')['factory_no1'] }}
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
                                       for="form-field-2">
                                    企业地址：
                                </label>
                                <div class="col-md-8">
                                    <label id='factotyAddress'
                                           style="font-size: 16px; font-family: '楷体';; font-weight: bold; margin-top: 2px;">
                                        {{ session('factory')['address'] }}
                                    </label>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="page-header" style="margin-top: 15px;">
                    <h1>
                        <b id="NUM"></b>

                        <small><i class="icon-double-angle-right"></i> 基础信息</small>
                    </h1>
                    <h3 style="color: red">
                        本页面未填报完成，不能保存和填报下一个页面
                    </h3>
                </div>
                <!-- /.page-header -->

                <div class="row" style="height: 40px;">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label no-padding-right"
                                       for="form-field-2">
                                    烟囱编号(无需填写)
                                </label>

                                <div class="col-md-7">
                                    <input type="text" id="fabriexfno"
                                           value="" disabled="disabled"
                                           Onchange="ischanged('fabriexfno')"
                                           onkeyup="checkRate(this.id);" maxlength="10"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label no-padding-right"
                                       for="material">
                                    烟囱材质
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-7">
                                    <input type="text" id="material" name="material"
                                           value="{{ $exhaust_temps["EXF_MATERIAL"] or ''}}"
                                           Onchange="ischanged('material')"
                                           onblur="TestLen(this.id,10)"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row" style="height: 40px;">
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label no-padding-right"
                                       for="exfheight">
                                    烟囱高度(单位：m)
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-7">
                                    <input type="text" id="exfheight"
                                           value="{{ $exhaust_temps["EXF_HEIGHT"] or ''}}"
                                           Onchange="ischanged('exfheight')" alt="p4x3p3s"
                                           class="check1" onkeyup="checkNum(this);"/>
                                </div>
                            </div>

                        </div>


                        <!-- PAGE CONTENT BEGINS -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label no-padding-right"
                                       for="smoke_outd">
                                    烟气出口直径(单位：m)
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-7">
                                    <input type="text" id="smoke_outd"
                                           value="{{ $exhaust_temps["SMOKE_OUTD"] or ''}}" alt="p2x3p3s"
                                           class="check1" Onchange="ischanged('smoke_outd')"
                                           onkeyup="checkNum(this);"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="height: 40px;">
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label no-padding-right"
                                       for="smoke_outtem">
                                    烟气出口温度(单位："C)
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-7">
                                    <input type="text" id="smoke_outtem"
                                           value="{{ $exhaust_temps["SMOKE_O_UTTE_M"] or ''}}" alt="p7x3p3s"
                                           class="check1" Onchange="ischanged('smoke_outtem')"
                                           onkeyup="checkNum(this);"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label no-padding-right"
                                       for="smoke_outv">
                                    烟气出口流速(单位：m/s)
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-7">
                                    <input type="text" id="smoke_outv"
                                           value="{{ $exhaust_temps["SMOKE_OUTV"] or ''}}" alt="p3x3p2s"
                                           class="check1" Onchange="ischanged('smoke_outv')"
                                           onkeyup="checkNum(this);"/>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="row" style="height: 40px;">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label no-padding-right"
                                       for="smokeOuta">
                                    烟气流量(单位：Nm3/h)
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-7">
                                    <input type="text" id="smokeOuta"
                                           value="{{ $exhaust_temps["SMOKE_OUTA"] or ''}}" alt="p8x3p3s"
                                           class="check1" Onchange="ischanged('smoke_outv')"
                                           onkeyup="checkNum(this);"/>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label no-padding-right"
                                       for="longitude">
                                    烟囱经度
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-7">
                                    <input type="text" id="longitude"
                                           value="{{ $exhaust_temps["EXF_LONGITUDE"] or ''}}" alt="p3x3p6s"
                                           class="check1" onkeyup="if(isNaN(value))execCommand('undo')"
                                           onblur="checklon(this.id);"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           placeholder="73.6667~96.3000"
                                           Onchange="ischanged('longitude')"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row" style="height: 40px;">
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label no-padding-right"
                                       for="latitude">
                                    烟囱纬度
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-7">
                                    <input type="text" id="latitude"
                                           value="{{ $exhaust_temps["EXF_LATITUDE"] or ''}}" alt="p3x3p6s"
                                           class="check1" onkeyup="if(isNaN(value))execCommand('undo')"
                                           onblur="checklat(this.id);"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           placeholder="34.4167~48.1667"
                                           Onchange="ischanged('latitude')"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="page-header"></div>
                <!-- /.page-header -->
                <div class="row"
                     style="text-align: center; margin-top: 50px; font-weight: bold;">
                    <div class="col-xs-12">
                        <!--  img  border="0" src="img/btn1.png" style="margin-left:60px;" /-->

                        <!--  img  border="0" src="img/btn2.png" style="margin-left:100px;" /-->
                        <ul class="pager">
                            <li class="col-md-3">
                                <a href="javascript:void(0);" id="prepage" onclick="pre();">&larr;
                                    填报上一个</a>
                            </li>


                            <div class="col-md-3">
                                <li>
                                    <a href="javascript:void(0);" onclick="Exhaustupdate();">更新</a>
                                </li>
                            </div>

                                <div class="col-md-3">
                                    <li>
                                        <a href="javascript:void(0);" onclick="ExhaustTempsaveevery();">&nbsp;&nbsp;&nbsp;&nbsp;保&nbsp;&nbsp;存&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                    </li>
                                </div>


                            <li class="col-md-3">
                                <a href="javascript:void(0);" id="nextpage" onclick="next();">填报下一个
                                    &rarr;</a>
                            </li>
                            <li class="col-md-3">
                                <a href="javascript:void(0);" id="detelepage"
                                   onclick="cjdetele();">删除 </a>
                            </li>
                            <input type="hidden" name="page" id="page" value='0'>
                            <input type="hidden" name="malert" id="malert" value='0'>
                            <input type="hidden" name="EXF_ID" id="EXF_ID" value='{{ $exhaust_temps["EXF_ID"] or ''}}'>
                            <input type="hidden" name="mId" id="mId"
                                   value='${cur_exhuast.exfId}'>
                        </ul>


                    </div>

                </div>


            </div>
            <!-- /.page-content -->
        </div>
        <!-- /.main-content -->


    </div>
    <!-- /.main-container-inner -->
</div>
<!-- /.main-container -->

</div>
<!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->


<!-- <![endif]-->

<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery
    || document.write("<script src='{{ asset("/js/jquery-2.0.3.min.js") }}'>" + "<"
        + "/script>");
</script>

<!-- <![endif]-->



<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='{{ asset("/js/jquery.mobile.custom.min.js") }}'>" + "<"
            + "/script>");
</script>
<script src="{{ asset("/js/bootstrap.min.js") }}">
</script>
<script src="{{ asset("/js/typeahead-bs2.min.js") }}"></script>

<!-- page specific plugin scripts -->



<script src="{{ asset("/js/jquery-ui-1.10.3.custom.min.js") }}"></script>

<script src="{{ asset("/js/jquery.ui.touch-punch.min.js") }}"></script>

<script src="{{ asset("/js/chosen.jquery.min.js") }}"></script>

<script src="{{ asset("/js/fuelux/fuelux.spinner.min.js") }}"></script>

<script src="{{ asset("/js/date-time/bootstrap-datepicker.min.js") }}"></script>

<script src="{{ asset("/js/date-time/bootstrap-timepicker.min.js") }}"></script>

<script src="{{ asset("/js/date-time/moment.min.js") }}"></script>

<script src="{{ asset("/js/date-time/daterangepicker.min.js") }}"></script>

<script src="{{ asset("/js/bootstrap-colorpicker.min.js") }}"></script>

<script src="{{ asset("/js/jquery.knob.min.js") }}"></script>

<script src="{{ asset("/js/jquery.autosize.min.js") }}"></script>

<script src="{{ asset("/js/jquery.inputlimiter.1.3.1.min.js") }}"></script>

<script src="{{ asset("/js/jquery.maskedinput.min.js") }}"></script>

<script src="{{ asset("/js/bootstrap-tag.min.js") }}"></script>

<!-- ace scripts -->


<script src="{{ asset("/js/ace-elements.min.js") }}"></script>

<script src="{{ asset("/js/ace.min.js") }}"></script>

<!-- inline scripts related to this page -->

<script type="text/javascript">
    jQuery(function ($) {
        $('#id-disable-check').on('click', function () {
            var inp = $('#form-input-readonly').get(0);
            if (inp.hasAttribute('disabled')) {
                inp.setAttribute('readonly', 'true');
                inp.removeAttribute('disabled');
                inp.value = "This text field is readonly!";
            }
            else {
                inp.setAttribute('disabled', 'disabled');
                inp.removeAttribute('readonly');
                inp.value = "This text field is disabled!";
            }
        });


        $(".chosen-select").chosen();
        $('#chosen-multiple-style').on('click', function (e) {
            var target = $(e.target).find('input[type=radio]');
            var which = parseInt(target.val());
            if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
            else $('#form-field-select-4').removeClass('tag-input-style');
        });


        $('[data-rel=tooltip]').tooltip({container: 'body'});
        $('[data-rel=popover]').popover({container: 'body'});

        $('textarea[class*=autosize]').autosize({append: "\n"});
        $('textarea.limited').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });

        $.mask.definitions['~'] = '[+-]';
        $('.input-mask-date').mask('99/99/9999');
        $('.input-mask-phone').mask('(999) 999-9999');
        $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        $(".input-mask-product").mask("a*-999-a999", {
            placeholder: " ", completed: function () {
                alert("You typed the following: " + this.val());
            }
        });


        $("#input-size-slider").css('width', '200px').slider({
            value: 1,
            range: "min",
            min: 1,
            max: 8,
            step: 1,
            slide: function (event, ui) {
                var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                var val = parseInt(ui.value);
                $('#form-field-4').attr('class', sizing[val]).val('.' + sizing[val]);
            }
        });

        $("#input-span-slider").slider({
            value: 1,
            range: "min",
            min: 1,
            max: 12,
            step: 1,
            slide: function (event, ui) {
                var val = parseInt(ui.value);
                $('#form-field-5').attr('class', 'col-xs-' + val).val('.col-xs-' + val);
            }
        });


        $("#slider-range").css('height', '200px').slider({
            orientation: "vertical",
            range: true,
            min: 0,
            max: 100,
            values: [17, 67],
            slide: function (event, ui) {
                var val = ui.values[$(ui.handle).index() - 1] + "";

                if (!ui.handle.firstChild) {
                    $(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
                }
                $(ui.handle.firstChild).show().children().eq(1).text(val);
            }
        }).find('a').on('blur', function () {
            $(this.firstChild).hide();
        });

        $("#slider-range-max").slider({
            range: "max",
            min: 1,
            max: 10,
            value: 2
        });

        $("#eq > span").css({width: '90%', 'float': 'left', margin: '15px'}).each(function () {
            // read initial values from markup and remove that
            var value = parseInt($(this).text(), 10);
            $(this).empty().slider({
                value: value,
                range: "min",
                animate: true

            });
        });


        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file: 'No File ...',
            btn_choose: 'Choose',
            btn_change: 'Change',
            droppable: false,
            onchange: null,
            thumbnail: false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });

        $('#id-input-file-3').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'icon-cloud-upload',
            droppable: true,
            thumbnail: 'small'//large | fit
            //,icon_remove:null//set null, to hide remove/reset button
            /**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
            /**,before_remove : function() {
						return true;
					}*/
            ,
            preview_error: function (filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }

        }).on('change', function () {
            //console.log($(this).data('ace_input_files'));
            //console.log($(this).data('ace_input_method'));
        });


        //dynamically change allowed formats by changing before_change callback function
        $('#id-file-format').removeAttr('checked').on('change', function () {
            var before_change
            var btn_choose
            var no_icon
            if (this.checked) {
                btn_choose = "Drop images here or click to choose";
                no_icon = "icon-picture";
                before_change = function (files, dropped) {
                    var allowed_files = [];
                    for (var i = 0; i < files.length; i++) {
                        var file = files[i];
                        if (typeof file === "string") {
                            //IE8 and browsers that don't support File Object
                            if (!(/\.(jpe?g|png|gif|bmp)$/i).test(file)) return false;
                        }
                        else {
                            var type = $.trim(file.type);
                            if (( type.length > 0 && !(/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
                                || ( type.length == 0 && !(/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
                            ) continue;//not an image so don't keep this file
                        }

                        allowed_files.push(file);
                    }
                    if (allowed_files.length == 0) return false;

                    return allowed_files;
                }
            }
            else {
                btn_choose = "Drop files here or click to choose";
                no_icon = "icon-cloud-upload";
                before_change = function (files, dropped) {
                    return files;
                }
            }
            var file_input = $('#id-input-file-3');
            file_input.ace_file_input('update_settings', {
                'before_change': before_change,
                'btn_choose': btn_choose,
                'no_icon': no_icon
            })
            file_input.ace_file_input('reset_input');
        });


        $('#spinner1').ace_spinner({
            value: 0,
            min: 0,
            max: 200,
            step: 10,
            btn_up_class: 'btn-info',
            btn_down_class: 'btn-info'
        })
            .on('change', function () {
                //alert(this.value)
            });
        $('#spinner2').ace_spinner({
            value: 0,
            min: 0,
            max: 10000,
            step: 100,
            touch_spinner: true,
            icon_up: 'icon-caret-up',
            icon_down: 'icon-caret-down'
        });
        $('#spinner3').ace_spinner({
            value: 0,
            min: -100,
            max: 100,
            step: 10,
            on_sides: true,
            icon_up: 'icon-plus smaller-75',
            icon_down: 'icon-minus smaller-75',
            btn_up_class: 'btn-success',
            btn_down_class: 'btn-danger'
        });


        $('.date-picker').datepicker({autoclose: true}).next().on(ace.click_event, function () {
            $(this).prev().focus();
        });
        $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function () {
            $(this).next().focus();
        });

        $('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false
        }).next().on(ace.click_event, function () {
            $(this).prev().focus();
        });

        $('#colorpicker1').colorpicker();
        $('#simple-colorpicker-1').ace_colorpicker();


        $(".knob").knob();


        //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
        var tag_input = $('#form-field-tags');
        if (!( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()))) {
            tag_input.tag(
                {
                    placeholder: tag_input.attr('placeholder'),
                    //enable typeahead by specifying the source array
                    source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
                }
            );
        }
        else {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
            //$('#form-field-tags').autosize({append: "\n"});
        }


        /////////
        $('#modal-form input[type=file]').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'icon-cloud-upload',
            droppable: true,
            thumbnail: 'large'
        })

        //chosen plugin inside a modal will have a zero width because the select element is originally hidden
        //and its width cannot be determined.
        //so we set the width after modal is show
        $('#modal-form').on('shown.bs.modal', function () {
            $(this).find('.chosen-container').each(function () {
                $(this).find('a:first-child').css('width', '210px');
                $(this).find('.chosen-drop').css('width', '210px');
                $(this).find('.chosen-search input').css('width', '200px');
            });
        })
        /**
         //or you can activate the chosen plugin after modal is shown
         //this way select element becomes visible with dimensions and chosen works as expected
         $('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
         */

    });
</script>

<script type="text/javascript">
    $("#exhaustul").toggle();

    //document.getElementById("exhaustli1").setAttribute("class","active");

</script>
<div style="display: none">
    <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540'
            language='JavaScript' charset='gb2312'>
    </script>
</div>
</body>
</html>
