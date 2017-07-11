<!DOCTYPE html>
<html lang="en">
<head>
    <title>锅炉信息</title>

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
    <script src="{{ asset("/js/jquery.maskedinput.min.js") }}"></script>
    <script src="{{ asset("/js/jquery-1.7.2.min.js") }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset("/js/client.js") }}"></script>
    <script src="{{ asset("http://apps.bdimg.com/libs/fancybox/2.1.5/jquery.fancybox.pack.js") }}"
            type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset("/js/autoNumeric.js") }}"></script>
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

    <script type="text/javascript">
        $(document).ready(function () {
            // 3 wipe out dust way at the bottom of the page
            var dust_value = {!! $boiler_temp['dustremove_id'] or "''" !!};
            var nitre_value = {!! $boiler_temp['nitreremove_id'] or "''"  !!};
            var sulphur_value = {!! $boiler_temp['sulphurremove_id'] or "''"  !!};
            //public/js/client
            var jsonObj = {!! $dustremove !!};
            var $option = $("<option></option>");
            $option.attr("value", "");
            $option.text('请选择');
            $('#dustremoveId').append($option);
            for (var i = 0; i < jsonObj.length; i++) {
                var $option = $("<option></option>");
                $option.attr("value", jsonObj[i].id);
                $option.text(jsonObj[i].dust_remove_name);
                $("#dustremoveId").append($option);
            }
            $("#dustremoveId option[value ='" + dust_value + "']").attr("selected", true);

            var $option = $("<option></option>");
            $option.attr("value", "");
            $option.text('请选择');
            $('#nitreremoveId').append($option);
            var object1 = {!! $nitreremove !!};
            for (var i = 0; i < object1.length; i++) {
                var $option = $("<option></option>");
                $option.attr("value", object1[i].id);
                $option.text(object1[i].nitre_method);
                $("#nitreremoveId").append($option);
            }
            $("#nitreremoveId option[value='" + nitre_value + "']").attr("selected", true);

            var $option = $("<option></option>");
            $option.attr("value", "");
            $option.text('请选择');
            $('#sulphurremoveId').append($option);
            var object2 = {!! $sulphuremove !!};
            for (var i = 0; i < object2.length; i++) {
                var $option = $("<option></option>");
                $option.attr("value", object2[i].id);
                $option.text(object2[i].sulphur_method);
                $("#sulphurremoveId").append($option);
            }
            $("#sulphurremoveId option[value='" + sulphur_value + "']").attr("selected", true);

            // scc1=10,scc2,scc3,scc4，可移植

            changescc2();
            changescc3();
            changescc4();
            //init exhaust
            var exhaust_temps = {!! json_encode(session("exhaust_temps"))  !!};

            var exf_no = exhaust_temps.length;
            var $option1 = $("<option></option>");
            $option1.attr("value", "");
            $option1.text("请选择");
            $("#mchimney").append($option1);
            //	var json = eval("(" + data + ")");
            for (var i = 1; i <= exf_no; i++) {
                var $option = $("<option></option>");
                $option.attr("value", i);
                $option.text("烟囱" + i + "号");
                $("#mchimney").append($option);
            }

            var nkNo = '{{ $boiler_temp["NK_NO"] or 0 }}';
            if (nkNo != 0) {
                $("#mchimney option[value='" + nkNo + "']").attr("selected", true);
            }
            //select元素的内容加载

            var combustionsystem_value = '{!! $boiler_temp['COMBUSTIONSYSTEM']  or 0 !!}';
            $("#combustionsystem option[value='" + combustionsystem_value + "']").attr("selected", true);
            var fuelAusageunit_value = '{!! $boiler_temp['FUEL_AUSAGEUNIT'] or 0 !!}';
            $("#fuelAusageunit option[value='" + fuelAusageunit_value + "']").attr("selected", true);
            /*
             $.post("ajax/BoilerTemp/loadpage.do", {}, function (data) {
             var $option1 = $("<option></option>");

             $option1.attr("value", "");
             $option1.text("请选择");
             $("#mchimney").append($option1);

             var json = eval("(" + data + ")");
             for (var i = 1; i <= json.paiqinum; i++) {
             var $option = $("<option></option>");
             $option.attr("value", i);
             $option.text("烟囱" + i + "号");
             $("#mchimney").append($option);
             }

             var nkNo = '${cur_boiler.exfNo}';

             $("#mchimney option[value='" + nkNo + "']").attr("selected", true);
             exhaustModel();
             document.getElementById("NO").innerHTML = "<b>" + json.page
             + "号锅炉</b>";
             //alert(json.page);
             document.getElementById("page").value = json.page;
             clientchangeScc2("10", "functio", "fueltype", "model", 1);
             //单位初始化
             var fuel_value = '${cur_boiler.fuelAusageunit}';
             $("#fuelAusageunit").val(fuel_value);

             $("#fuelAusageunit option[value='" + fuel_value + "']").attr(
             "selected", true);
             //select元素的内容加载

             testselected("mchimney", "mchimney_input");
             var combustionsystem_value = document
             .getElementById("combustionsystem_input").value;
             $("#combustionsystem").val(combustionsystem_input);

             $(
             "#combustionsystem option[value='"
             + combustionsystem_value + "']").attr(
             "selected", true);

             //testselected("activity_meas","activity_meas_input");
             //从后台得到是否更改的按钮信息，若更改提示信息，否则不显示

             if (json.alert == 1) {
             $('#m_alert').show();
             } else {
             $('#m_alert').hide();
             }
             // 如果当前页面是最后一页，下一步不显示
             if (parseInt(json.page) == parseInt('${totalpagesboiler}')) {
             $('#nextpage').hide();
             $('#detelepage').show();
             var newpage = parseInt('${newpageboiler}');
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
             */
        });
        //scc 一套

    </script>

    <script type="text/javascript">

        //这个其他页面没有，只有本页面有

        //这个其他的页面没有只有本页面有

        //跳转到
        function changescc2() {
            var $option1 = $("<option></option>");
            $option1.attr("value", "");
            $option1.text('请选择');
            $('#functio').append($option1);

            var scc2 = {!! $scc2  !!};
            for (var i = 0; i < scc2.length; i++) {
                var $option = $("<option></option>");
                $option.attr("value", scc2[i].scc_2);
                $option.text(scc2[i].description);
                $("#functio").append($option);
            }
            var scc2_selected = '{!! $boiler_temp['FUNCTIO'] or "" !!}';
            $("#functio option[value='" + scc2_selected + "']").attr("selected", true);
        }
        function changescc3() {
            $("#fueltype").empty();
            var $option2 = $("<option></option>");
            $option2.attr("value", "");
            $option2.text('请选择');
            $('#fueltype').append($option2);
            if ($("#functio").val() == "") {
                var scc2topost = '{!! $boiler_temp['FUNCTIO'] or "" !!}';
            } else {
                var scc2topost = $("#functio").val();
            }
            if (scc2topost != '' && scc2topost != null) {
                $.post("{{url('SCC3')}}", {'_token': '{{csrf_token()}}', scc2: scc2topost}, function (scc3) {
                    for (var i = 0; i < scc3.length; i++) {
                        var $option = $("<option></option>");
                        $option.attr("value", scc3[i].scc_3);
                        $option.text(scc3[i].description);
                        $("#fueltype").append($option);
                    }
                    var scc3_selected = '{!! $boiler_temp['FUELTYPE'] or "" !!}';
                    $("#fueltype option[value='" + scc3_selected + "']").attr("selected", true);
                });
            }
        }
        function changescc4() {
            $("#model").empty();
            var $option3 = $("<option></option>");
            $option3.attr("value", "");
            $option3.text('请选择');
            $('#model').append($option3);
            if ($("#fueltype").val() != '') {
                var scc2topost = $("#functio").val();
                var scc3topost = $("#fueltype").val();
            } else {
                var scc2topost = '{!! $boiler_temp['FUNCTIO'] or "" !!}';
                var scc3topost = '{!! $boiler_temp['FUELTYPE'] or "" !!}';
            }

            if (scc3topost != '' && scc2topost != null) {
                $.post("{{url('SCC4')}}", {
                    '_token': '{{csrf_token()}}',
                    scc2: scc2topost,
                    scc3: scc3topost
                }, function (scc4) {
                    for (var i = 0; i < scc4.length; i++) {
                        var $option = $("<option></option>");
                        $option.attr("value", scc4[i].scc_4);
                        $option.text(scc4[i].description);
                        $("#model").append($option);
                    }
                    var scc4_selected = '{!! $boiler_temp['MODEL'] or "" !!}';
                    $("#model option[value='" + scc4_selected + "']").attr("selected", true);
                });
            }
        }

        function exhaustModel() {

            var exhaustNum = document.getElementById("mchimney").value;
            if (exhaustNum != '') {
                $.post("ajax/ExhaustTemp/exhaustModel.do", {exhaustNum: exhaustNum}, function (data) {

                    var json = eval("(" + data + ")");
                    document.getElementById("exaust_info").innerHTML = "<b style='color:purple'>烟囱"
                        + exhaustNum
                        + "的详细信息：</br>"
                        + json.value
                        + "</b>";
                });
            } else {
                document.getElementById("exaust_info").innerHTML = "<b style='color:purple'></b>";
            }
        }
        function changevalue() {
            var myselect = document.getElementById("fueltype").value;
            if (myselect == "310") {
                document.getElementById("fuelAusageunit").value = "万立方米";
            } else {
                document.getElementById("fuelAusageunit").value = "吨";
            }
        }

        function jumptopage(page) {
            $
                .post(
                    "ajax/BoilerTemp/savepagejump.do",
                    {
                        page: page
                    },
                    function (data) {
                        var json = eval("(" + data + ")");
                        //alert(page);
                        if (json.sys_code == "suc") {
                            //如果是0说明是工厂信息的页面否则是设备信息的页面
                            if (page == 0 || page == 100) {
                                window.location.href = "";
                            } else {
                                window.location.href = "";
                            }
                        }

                    });
        }
        function cancel() {
            // 表示当前页是新添加的页，若取消了本页将被删除，总页面数-1
            var total = parseInt('${totalpagesboiler}');
            var m_pages = parseInt(document.getElementById("page").value);
            var newpage = parseInt('${newpageboiler}');
            if (newpage == 1 && m_pages == total) {
                var number = parseInt('${totalpagesboiler}') - 1;
                $.post("ajax/TotalBoilerTemp/savetotalpage.do", {
                    totalnumboiler: number,
                    newpageboiler: 0
                }, function (data) {
                });
                if (window.confirm(alertnew)) {
                    jumptopage(m_pages - 1);
                } else {

                    return;
                }
            } else {
                if (window.confirm(alertold)) {
                    var m_pages = parseInt(document.getElementById("page").value);
                    jumptopage(m_pages - 1);
                } else {
                    return;
                }
            }
            //获取当前页

        }
        function testselected(myselect, inputval) {
            //alert(1);
            var val = document.getElementById(inputval).value;

            $("#" + myselect + " option[value='" + val + "']").attr("selected", true);
        }
        function next() {
            var m_pages = parseInt(document.getElementById("page").value);
            //alert(m_pages);
            addsaveinfo(m_pages + 1, 'stationary');
        }
        function pre() {

            var m_pages = parseInt(document.getElementById("page").value);
            if (m_pages == 1) {
                addsaveinfo(101, 'stationary');
            } else {
                addsaveinfo(m_pages - 1, 'stationary');
            }
        }
        function jumpsave(source) {
            var m_alert = parseInt(document.getElementById("malert").value);
            if (m_alert == 0) {
                m_alert = '${alert}';
            }
            return jumpandsave(source, 'stationary', m_alert);
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
            var ids = new Array("functio", "fueltype", "model", "no", "version",
                "tons", "coalsulfur", "combustionsystem", "fuelAusage",
                "fuelAusageunit", "mchimney", "feiqiti", "so2out", "noxout",
                "pmout", "janUseamount",
                "febUseamount", "marUseamount",
                "aprUseamount", "mayUseamount", "juneUseamount",
                "julyUseamount", "augUseamount", "septUseamount", "octUseAmount", "novUseamount", "decUseamount");
            var contents = new Array("锅炉用途", "锅炉所用燃料类型", "锅炉类型", "锅炉编号", "锅炉设备型号",
                "锅炉吨位", "燃煤硫分", "燃烧方式", "燃料年使用量", "燃料年用量单位", "对应排气筒编号", "废气排放量",
                "二氧化硫排放量", "氮氧化物排放量", "烟粉尘排放量", "燃料1月份使用量", "燃料2月份使用量", "燃料3月份使用量", "燃料4月份使用量", "燃料5月份使用量", "燃料6月份使用量", "燃料7月份使用量", "燃料8月份使用量", "燃料9月份使用量", "燃料10月份使用量", "燃料11月份使用量", "燃料12月份使用量");
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

            if (!checkvalue(1)) {
                return;
            }
            var malert = document.getElementById("malert").value;
            if (malert == 0) {
                alert("提交数据库成功!");
                return;
            }
            var functio = document.getElementById("functio").value;
            var functiondec = $("#functio").find("option:selected").text();
            var version = document.getElementById("version").value;
            var model = document.getElementById("model").value;

            var tons = document.getElementById("tons").value;

            var pmout = document.getElementById("pmout").value;
            var so2out = document.getElementById("so2out").value;
            var feiqiti = document.getElementById("feiqiti").value;
            var noxout = document.getElementById("noxout").value;

            var fueltype = document.getElementById("fueltype").value;
            var coalash = document.getElementById("coalash").value;
            var coalsulfur = document.getElementById("coalsulfur").value;
            var combustionsystem = document.getElementById("combustionsystem").value;
            var fuelAusage = document.getElementById("fuelAusage").value;
            var fuelAusageunit = document.getElementById("fuelAusageunit").value;
            var dustremoveId = document.getElementById("dustremoveId").value;
            var sulfurId = document.getElementById("sulphurremoveId").value;
            var nitreId = document.getElementById("nitreremoveId").value;
            var dustremoveDec = $("#dustremoveId").find("option:selected").text();
            var sulphurremoveDec = $("#sulphurremoveId").find("option:selected").text();
            var nitreremoveDec = $("#nitreremoveId").find("option:selected").text();
            var modelDec = $("#model").find("option:selected").text();
            var fueltypeDec = $("#fueltype").find("option:selected").text();
            var coalVolatilisation = document.getElementById("coalVolatilisation").value;
            var machineNo = document.getElementById("machineNo").value;
            var installedCapacity = document.getElementById("installedCapacity").value;
            var no = document.getElementById("no").value;
            var m_pages = parseInt(document.getElementById("page").value);
            var chimney = parseInt(document.getElementById("mchimney").value);
            var janUseamount = document.getElementById("janUseamount").value;
            var febUseamount = document.getElementById("febUseamount").value;
            var marUseamount = document.getElementById("marUseamount").value;
            var aprUseamount = document.getElementById("aprUseamount").value;
            var mayUseamount = document.getElementById("mayUseamount").value;
            var juneUseamount = document.getElementById("juneUseamount").value;
            var julyUseamount = document.getElementById("julyUseamount").value;
            var augUseamount = document.getElementById("augUseamount").value;
            var septUseamount = document.getElementById("septUseamount").value;
            var octUseAmount = document.getElementById("octUseAmount").value;
            var novUseamount = document.getElementById("novUseamount").value;
            var decUseamount = document.getElementById("decUseamount").value;
            $.post("{{url('BoilerTempupdatedb')}}", {
                '_token': '{{csrf_token()}}',
                functio: functio,
                functiondec: functiondec,
                model: model,
                tons: tons,
                installedCapacity: installedCapacity,
                coalVolatilisation: coalVolatilisation,
                machineNo: machineNo,
                fueltype: fueltype,
                coalash: coalash,
                coalsulfur: coalsulfur,
                noxout: noxout,
                pmout: pmout,
                feiqiti: feiqiti,
                so2out: so2out,
                sulphurremoveDec: sulphurremoveDec,
                dustremoveDec: dustremoveDec,
                modeldec: modelDec,
                fueltypedec: fueltypeDec,
                nitreremoveDec: nitreremoveDec,
                combustionsystem: combustionsystem,
                fuelAusage: fuelAusage,
                fuelAusageunit: fuelAusageunit,
                version: version,
                dustremoveId: dustremoveId,
                sulphurremoveId: sulfurId,
                nitreremoveId: nitreId,
                no: no,
                janUseamount: janUseamount,
                febUseamount: febUseamount,
                marUseamount: marUseamount,
                aprUseamount: aprUseamount,
                mayUseamount: mayUseamount,
                juneUseamount: juneUseamount,
                julyUseamount: julyUseamount,
                augUseamount: augUseamount,
                septUseamount: septUseamount,
                octUseAmount: octUseAmount,
                novUseamount: novUseamount,
                decUseamount: decUseamount,
                exfNo: chimney
            }, function (state) {
                if (state == 1) {
                    alert("施工扬尘源保存成功！");
                } else {
                    alert("施工扬尘源保存失败！");
                }
            });
        }
        function cjdetele() {
            var cjexfid = '{!! $boiler_temp['ID'] or '' !!}';
            $.post("{{url('BoilerTempcjdetele')}}", {
                    '_token': '{{csrf_token()}}',
                    cjexfid: cjexfid
                }, function (state) {
                    if (state == 1) {
                        alert("删除成功");
                        window.location.href = '{{ url("/boiler") }}' + '/' + '{!! $NUM-2 !!}';
                    } else {
                        alert("删除失败");
                    }
                }
            );


        }

    </script>


</head>
@include("layouts.header")
<body>
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
        @include('layouts.leftnav')

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
                        <a href="#">{{ session('factory')['factory_name'] }}</a>
                    </li>

                    <li>
                        固定燃烧源
                    </li>
                    <li>

                        单个锅炉信息
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
                @include('layouts.public_com')
                <div class="page-header" style="margin-top: 20px;">
                    <h1>
                        <b id="NO"></b>
                        <b>{!! $NUM !!}号锅炉</b>

                        <small><i class="icon-double-angle-right"></i><b>基础信息</b>
                        </small>
                    </h1>
                    <h3 style="color: red">本页面未填报完成，不能保存和填报下一个页面</h3>
                </div>
                <!-- /.page-header -->
                <div class="row" style="height: 40px;">
                    <div class="col-xs-12">

                        <a style="color: red;font-size:20px;">如果企业没有相应项，请填写0</a>

                    </div>
                </div>
                <div class="row" style="height: 55px;">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="tboilerFunction">
                                    锅炉用途
                                    <a style="color: red;">****</a>
                                </label>
                                <input type="hidden" name="functio_input" id="functio_input"
                                       value='${cur_boiler.functio}'/>
                                <div class="col-md-8">
                                    <select class="col-xs-12" id="functio" style="width: 170px;"
                                            Onchange="changescc3()"/>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="fueltype">
                                    锅炉所用燃料类型
                                    <a style="color: red;">***</a>
                                </label>


                                <input type="hidden" name="fueltype_input" id="fueltype_input"
                                       value="${cur_boiler.fueltype}">
                                <div class="col-md-8">
                                    <select id="fueltype" style="width: 170px;"
                                            onchange="changescc4()"/>

                                    </select>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="model">
                                    锅炉类型
                                    <a style="color: red;">**</a>
                                </label>
                                <input type="hidden" name="model_input" id="model_input"
                                       value="${cur_boiler.model}">
                                <div class="col-md-8">
                                    <select class="col-xs-12" id="model" style="width: 170px;"
                                            Onchange="ischanged('model')"/>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="no">
                                    机组编号<a style="color: red;">*</a>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="machineNo"
                                           value="{!! $boiler_temp['machine_no'] or '' !!}" class="col-md-10"
                                           Onchange="ischanged('no')" style="width: 170px;"
                                           maxlength="15"/>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="model">
                                    装机容量(单位:兆瓦)<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input type="text" id="installedCapacity"
                                           value="{!! $boiler_temp['installed_capacity'] or '' !!}"
                                           onblur="IsChangeNew(this.id,0,2500,'装机容量')" alt="p4x3p2s"
                                           class="check1" style="width: 170px;" placeholder="0-2500MW"
                                           Onchange="ischanged('model')"/>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="no">
                                    锅炉编号(只填数字#)
                                    <a style="color: red;">*</a>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="no" value="{!! $boiler_temp['NO'] or '' !!}"
                                           alt="p3x3p0s"
                                           class="check1" Onchange="ischanged('no')" style="width: 170px;"
                                           onkeyup="checkRate(this.id);" maxlength="20"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="model">
                                    锅炉设备型号
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input type="text" id="version" value="{!! $boiler_temp['version'] or '' !!}"
                                           class="col-md-10" Onchange="ischanged('no')" maxlength="25"
                                           style="width: 170px;" onblur="TestLen(this.id,20)"/>
                                </div>

                            </div>
                        </div>


                    </div>


                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="tons">
                                    锅炉吨位(吨)
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input type="text" id="tons" value="{!! $boiler_temp['TONS'] or '' !!}"
                                           alt="p4x3p2s" class="check1"
                                           onblur="IsChangeNew(this.id,0,5000,'锅炉吨位')"
                                           style="width: 170px;"
                                           placeholder="0-5000" Onchange="ischanged('no')"/>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="mchimney">
                                    对应烟囱
                                    <a style="color: red;">*</a>
                                </label>
                                <input type="hidden" name="mchimney_input" id="mchimney_input"
                                       value="">
                                <div class="col-md-8">

                                    <select id="mchimney"
                                            Onchange="exhaustModel();ischanged('no')" style="width: 170px;">
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-12" style="height: 40px">
                            <div class="form-group">
                                <p align="center" id="exaust_info"></p>

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="coalash">

                                    燃料灰分(单位:%)<a style="color: red;">*</a>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="coalash"
                                           value="{!! $boiler_temp['COALASH'] or ''    !!}"
                                           onblur="IsChangeNew(this.id,0,45,'燃煤灰分')" alt="p2x3p2s"
                                           class="check1" style="width: 170px;" placeholder="0~45"
                                           Onchange="ischanged('model')"/>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="coalsulfur">

                                    燃料硫分(单位:%)<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input type="text" id="coalsulfur"
                                           value="{!! $boiler_temp['COALSULFUR'] or '' !!}" alt="p2x3p2s"
                                           class="check1" Onchange="ischanged('no')"
                                           onblur="IsChangeNew(this.id,0,3,'燃煤硫分')"
                                           style="width: 170px;" placeholder="0~3"
                                    />
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="coalsulfur">
                                    燃料挥发分(单位:%)<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input type="text" id="coalVolatilisation" Onchange="ischanged('model')"
                                           value="{!! $boiler_temp['coal_volatilisation'] or '' !!}" alt="p2x3p2s"
                                           class="check1"
                                           placeholder="0~50"
                                           onblur="IsChangeNew(this.id,0,50,'煤炭挥发分')" style="width: 170px;"
                                           onkeyup="checkNum(this);"/>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="combustionsystem">
                                    燃烧方式
                                    <a style="color: red;">*</a>
                                </label>
                                <input type="hidden" name="combustionsystem_input"
                                       id="combustionsystem_input" style="width: 170px;"
                                       onblur="TestLen(this.id,10)"/>
                                <div class="col-md-8">
                                    <select class="col-xs-12" id="combustionsystem"
                                            Onchange="ischanged('model')" style="width: 170px;"/>
                                    <option value="">
                                        无
                                    </option>
                                    <option value="层燃">
                                        层燃
                                    </option>
                                    <option value="室燃">
                                        室燃
                                    </option>
                                    <option value="循环流化床">
                                        循环流化床
                                    </option>

                                    </select>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4"
                                       for="fuelAusage">
                                    燃料年使用量
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input type="text" id="fuelAusage" style="width: 170px;"
                                           value="{!! $boiler_temp['FUEL_AUSAGE'] or '' !!}" class="check1"
                                           alt="p7x3p4s" onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','fuelAusage')"
                                    />

                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="fuelAusageunit">
                                    燃料年用量单位
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input type="hidden" name="fuelAusageunit_input"
                                           id="fuelAusageunit_input"
                                           value="" style="width: 170px;"/>
                                    <select id="fuelAusageunit"
                                            data-placeholder="Choose a Country..."
                                            Onchange="ischanged('model')" style="width: 170px;">
                                        <option value="">
                                            请选择
                                        </option>
                                        <option value="吨">
                                            吨
                                        </option>
                                        <option value="万立方米">
                                            万立方米
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="coalash">
                                    废气排放量(万立方米)
                                    <a style="color: red;">*</a>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="feiqiti" value="{!! $boiler_temp['feiqiti'] or '' !!}"
                                           alt="p9x3p5s" class="check1" style="width: 170px;"
                                           Onchange="ischanged('feiqiti')"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="coalsulfur">
                                    二氧化硫排放量(吨)
                                    <a style="color: red;">*</a>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="so2out" value="{!! $boiler_temp['so2out'] or '' !!}"
                                           alt="p9x3p5s" class="check1" Onchange="ischanged('kilnuse')"
                                           style="width: 170px;"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="coalash">
                                    氮氧化物排放量(吨)
                                    <a style="color: red;">*</a>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="noxout" value="{!! $boiler_temp['noxout'] or '' !!}"
                                           alt="p9x3p5s" class="check1" style="width: 170px;"
                                           Onchange="ischanged('feiqiti')"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="coalsulfur">
                                    烟粉尘排放量(吨)
                                    <a style="color: red;">*</a>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="pmout" value="{!! $boiler_temp['pmout'] or '' !!}"
                                           alt="p9x3p5s" class="check1" Onchange="ischanged('kilnuse')"
                                           style="width: 170px;"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">

                        <div class="form-group">
                            <a style="color: red;">燃料月份使用量的单位和燃料总使用量单位一致</a>
                        </div>

                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    燃料一月份使用量
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="{!! $boiler_temp['Jan_useamount'] or '' !!}" type="text"
                                           id="janUseamount" class="check1" alt="p0x3p4s"
                                           Onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','janUseamount')"/>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    燃料二月份使用量
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="{!! $boiler_temp['Feb_useamount'] or '' !!}" type="text"
                                           id="febUseamount" class="check1" alt="p0x3p4s"
                                           Onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','febUseamount')"/>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    燃料三月份使用量
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="{!! $boiler_temp['Mar_useamount'] or '' !!}" type="text"
                                           id="marUseamount" class="check1" alt="p0x3p4s"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','marUseamount')"/>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    燃料四月份使用量<a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="{!! $boiler_temp['Apr_useamount'] or '' !!}" type="text"
                                           id="aprUseamount" class="check1" alt="p0x3p4s"

                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','aprUseamount')"/>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    燃料五月份使用量
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="{!! $boiler_temp['May_useamount'] or '' !!}" type="text"
                                           id="mayUseamount" class="check1" alt="p0x3p4s"

                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','mayUseamount')"/>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    燃料六月份使用量
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="{!! $boiler_temp['June_useamount'] or '' !!}" type="text"
                                           id="juneUseamount" class="check1" alt="p0x3p4s"

                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','juneUseamount')"/>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    燃料七月份使用量
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="{!! $boiler_temp['July_useamount'] or '' !!}" type="text"
                                           id="julyUseamount" class="check1" alt="p0x3p4s"

                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','julyUseamount')"/>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    燃料八月份使用量
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="{!! $boiler_temp['aug_useamount'] or '' !!}" type="text"
                                           id="augUseamount" class="check1" alt="p0x3p4s"

                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','augUseamount')"/>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    燃料九月份使用量
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="{!! $boiler_temp['sept_useamount'] or '' !!}" type="text"
                                           id="septUseamount" class="check1" alt="p0x3p4s"

                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','septUseamount')"/>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    燃料十月份使用量
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="{!! $boiler_temp['oct_use_amount'] or '' !!}" type="text"
                                           id="octUseAmount" class="check1" alt="p0x3p4s"

                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','octUseAmount')"/>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    燃料十一月份使用量
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="{!! $boiler_temp['nov_useamount'] or '' !!}" type="text"
                                           id="novUseamount" class="check1" alt="p0x3p4s"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','novUseamount')"/>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label no-padding-right"
                                       for="form-field-1">
                                    燃料十二月份使用量
                                    <a style="color: red;">*</a>
                                </label>

                                <div class="col-md-8">
                                    <input value="{!! $boiler_temp['dec_useamount'] or '' !!}" type="text"
                                           id="decUseamount" class="check1" alt="p0x3p4s"
                                           onkeyup="if(isNaN(value))execCommand('undo')"
                                           onafterpaste="if(isNaN(value))execCommand('undo')"
                                           Onchange="ischanged('kilnuse')"
                                           onblur="sumall('fuelAusage','janUseamount','febUseamount','marUseamount','aprUseamount','mayUseamount','juneUseamount','julyUseamount','augUseamount','septUseamount','octUseAmount','novUseamount','decUseamount','使用量','decUseamount')"/>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="page-header" style="margin-top: 100px;">
                    <h1>

                        <small><i class="icon-double-angle-right"></i> <b>废气处理信息</b>
                        </small>
                    </h1>
                </div>
                <!-- /.page-header -->
                <div class="col-xs-12">
                    <div class="col-md-4">
                        <div class="form-group" id="dust_div">
                            <label class="col-md-4 control-label no-padding-right"
                                   for="dustremoveId">
                                除尘方式
                            </label>
                            <div class="col-md-8">
                                <select class="col-md-8" id="dustremoveId" name="dustremoveId"
                                        style="width: 70%;" Onchange="ischanged('dustremoveId')"/>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label no-padding-right"
                                   for="sulphurremoveId">
                                脱硫方式
                            </label>

                            <div class="col-md-8">
                                <select class="col-md-8" id="sulphurremoveId"
                                        style="width: 70%;" Onchange="ischanged('sulphurremoveId')"/>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label no-padding-right"
                                   for="nitreremoveId">
                                脱硝方式
                            </label>

                            <div class="col-md-8">
                                <select class="col-md-8" id="nitreremoveId"
                                        style="width: 70%;" Onchange="ischanged('nitreremoveId')"/>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row" style="margin: 0 auto; text-align: center;">
                    <div class="col-xs-12">
                        <!--  img  border="0" src="img/btn1.png" style="margin-left:60px;" /-->

                        <!--  img  border="0" src="img/btn2.png" style="margin-left:100px;" /-->
                        <ul class="pager">
                            <li class="col-md-3">
                                <a href="javascript:void(0);" style="font-weight: bold;"
                                   onclick="pre();" id="prepage">&larr; 填报上一个</a>
                            </li>
                            <div class="col-md-3">
                                <li>
                                    <a href="javascript:void(0);" style="font-weight: bold;"
                                       onclick="updatedata();">保存</a>
                                </li>
                            </div>
                            <div class="col-md-3">
                                <li>
                                    <a href="javascript:void(0);" style="font-weight: bold;"
                                       onclick="cancel();">放弃当前页面</a>
                                </li>
                            </div>
                            <div class="col-md-3">
                                <li>
                                    <a href="javascript:void(0);" style="font-weight: bold;"
                                       onclick="cjdetele();">删除</a>
                                </li>
                            </div>
                            <li class="col-md-3">
                                <a href="javascript:void(0);" id="nextpage"
                                   style="font-weight: bold;" onclick="next();">填报下一个 &rarr;</a>
                            </li>
                            <input type="hidden" name="page" id="page" value='0'>
                            <input type="hidden" name="malert" id="malert" value='0'>
                            <input type="hidden" name="mId" id="mId" value='${cur_boiler.id}'>
                        </ul>

                    </div>
                    @include('layouts.public_end')
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
    || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<"
        + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>" + "<" + "/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<"
            + "/script>");
</script>

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
    $("#station").toggle();
    $("#sguoluul").toggle();

    //document.getElementById("yaoluli").setAttribute("class","active");

</script>
<div style="display: none">
    <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540'
            language='JavaScript' charset='gb2312'>
    </script>
</div>
</body>
</html>
