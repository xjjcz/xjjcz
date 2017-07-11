<script type="text/javascript">
    try {
        ace.settings.check('sidebar', 'fixed')
    } catch (e) {
    }
</script>

<script type="text/javascript">
    var alertadd = "对不起！您有新增页面没有保存或当前页面必填项未填写完,请保存或填写完再添加！";
    $(document)
        .ready(function () {
            //exhuast
            var totalexhuast = {!! session("totalexhaust") !!};
            var exhaust_temps = {!! json_encode(session("exhaust_temps"))  !!};

            var realtotalexhuast = exhaust_temps.length;

            var i = 1;
            for (; i <= realtotalexhuast; i++) {
                document
                    .getElementById("exhaustul").innerHTML += "<li id='exhaustli"
                    + i
                    + "'><a onclick='getexhaust(" + (i - 1) + ")'><i class='icon-double-angle-right'></i>"
                    + i + "号烟囱/排气筒 </a></li>";
            }
            if (totalexhuast > realtotalexhuast) {
                document
                    .getElementById("exhaustul").innerHTML += "<li id='exhaustli"
                    + i
                    + "'><a onclick='getnewexhaust()'><i class='icon-double-angle-right'></i>"
                    + i + "号烟囱/排气筒 </a></li>";
            }
            //device
            var device_num = {!! session("device_num") !!};
            var total_productraw_temp = {!! json_encode(session("total_productraw_temp"))  !!};
            var real_device_num = total_productraw_temp[0].device_num;
            var i = 1;
            for (; i <= real_device_num; i++) {

                document.getElementById("deviceul").innerHTML += "<li id='deviceli"
                    + i
                    + "'><a href='javascript:void(0)' onclick='getdevice("+(i-1)+")'><i class='icon-double-angle-right'></i>"
                    + i + "号设备</a></li>";
            }
            if(device_num>real_device_num){
                document.getElementById("deviceul").innerHTML += "<li id='deviceli"
                    + i
                    + "'><a href='javascript:void(0)' onclick='getnewdevice()'><i class='icon-double-angle-right'></i>"
                    + i + "号设备</a></li>";
            }
            //raw

            var raw_num = {!! session("raw_num") !!};
            var real_raw_num = total_productraw_temp[0].raw_num;
            var i = 1;

            for (; i <= real_raw_num; i++) {

                document.getElementById("rawul").innerHTML += "<li id='rawli"
                    + i
                    + "'><a href='javascript:void(0)' onclick='getraw("+(i-1)+")'><i class='icon-double-angle-right'></i>"
                    + i + "号原料</a></li>";
            }
            if(raw_num>real_raw_num){
                document.getElementById("rawul").innerHTML += "<li id='rawli"
                    + i
                    + "'><a href='javascript:void(0)' onclick='getnewraw()'><i class='icon-double-angle-right'></i>"
                    + i + "号原料</a></li>";
            }
            //product
            var product_num = {!! session("product_num") !!};
            var real_product_num = total_productraw_temp[0].product_num;
            var i = 1;
            for (; i <= real_product_num; i++) {

                document.getElementById("productul").innerHTML += "<li id='productli"
                    + i
                    + "'><a href='javascript:void(0)' onclick='getproduct("+(i-1)+")'><i class='icon-double-angle-right'></i>"
                    + i + "号产品</a></li>";

            }

            if(product_num>real_product_num){
                document.getElementById("productul").innerHTML += "<li id='productli"
                    + i
                    + "'><a href='javascript:void(0)' onclick='getnewproduct()'><i class='icon-double-angle-right'></i>"
                    + i + "号产品</a></li>";
            }

            //boilder
            var boiler_num ={!! session('boiler_num') !!};
            var real_boiler_num = {!! session('boiler_realnum') !!};
            var i = 1;
            for (; i <= real_boiler_num; i++) {
                document.getElementById("sguoluul").innerHTML += "<li id='boilerli"
                    + i
                    + "'><a href='javascript:void(0)' onclick='getboiler(" + (i - 1) + ")'><i class='icon-double-angle-right'></i>"
                    + i + "号锅炉</a></li>";
            }
            if (boiler_num > real_boiler_num) {
                document.getElementById("sguoluul").innerHTML += "<li id='boilerli"
                    + i
                    + "'><a href='javascript:void(0)' onclick='getnewboiler()'><i class='icon-double-angle-right'></i>"
                    + i + "号锅炉</a></li>";
            }
            //feiqi
            var feiqi_num = {!! session('feiqi_num') !!};
            var feiqi_realnum = {!! session('feiqi_realnum') !!};
            var i = 1;
            for (;i<=feiqi_realnum;i++){
                document.getElementById("feiqiul").innerHTML += "<li id='feiqili" + i + "'><a href='javascript:void(0)' onclick='getfeiqi(" + (i - 1) + ")'><i class='icon-double-angle-right'></i>" + i + "号设备</a></li>";
            }
            if(feiqi_num>feiqi_realnum){
                document.getElementById("feiqiul").innerHTML += "<li id='feiqili"
                    + i
                    + "'><a href='javascript:void(0)' onclick='getnewfeiqi()'><i class='icon-double-angle-right'></i>"
                    + i + "号锅炉</a></li>";
            }

        });
    function getexhaust(i) {
        window.location.href = '{{ url("/exhaust") }}' + '/' + i;
    }
    function getnewexhaust(i) {
        window.location.href = '{{ url("/exhaust") }}' + '/new';
    }
    function getdevice(i){
        window.location.href = '{{ url("/device") }}'+'/'+i;
    }
    function getnewdevice(i){
        window.location.href = '{{ url("/device") }}'+'/new';
    }
    function getraw(i){
        window.location.href = '{{ url("/raw") }}'+'/'+i;
    }
    function getnewraw(i){
        window.location.href = '{{ url("/raw") }}'+'/new';
    }
    function getproduct(i){
        window.location.href = '{{ url("/product") }}'+'/'+i;
    }
    function getnewproduct(i){
        window.location.href = '{{ url("/product") }}'+'/new';
    }
    function getboiler(i) {
        window.location.href = '{{ url("/boiler") }}' + '/' + i;
    }
    function getnewboiler(i) {
        window.location.href = '{{ url("/boiler") }}' + '/new';
    }
    function getfeiqi(i) {
        window.location.href = '{{ url("/feiqi") }}'  +'/'+i;
    }
    function getnewfeiqi(i) {
        windwo.location.href = '{{url("/feiqi")}}' +'/new';
    }

    function addyaolukiln() {
        if (!checkvalue(1)) {
            alert(alertadd);
            return;
        }
        if ('${totalexhaust}' == null || '${totalexhaust}' == "" || '${totalexhaust}' == 0) {
            alert("企业填报次序是\"烟囱/排气筒\"->\"窑炉\"");
            var is = confirm("点击\"确定\"系统将为您跳转到烟囱/排气筒信息填报界面，否则窑炉页面无法保存！");
            if (is == true) {
                addchimney();
                return;
            }
        }
        var number = 0;
        if ('${totalpageskiln}' != null) {
            if ('${totalpageskiln}' == "") {

            } else {
                number = parseInt('${totalpageskiln}') + 1;
            }
        } else {
            number++;
        }
        document.getElementById("yaoluulkiln").innerHTML += "<li id='kilnyaoluli"
            + number + "'><a href='javascript:void(0)' onclick='addsaveinfo("
            + number
            + ",\"procedure\")'><i class='icon-double-angle-right'></i>"
            + number + "号窑炉</a></li>";


    }
    //var m_number=number+1;
    //document.getElementById("solventul").innerHTML+="<li id='m_addpage'><a onclick='addpage("+m_number+")'><i class='icon-double-angle-right'></i>+</a></li>";

    function addsguolu() {
        if (!checkvalue(1)) {
            alert(alertadd);
            return;
        }
        if ('${totalexhaust}' == null || '${totalexhaust}' == "" || '${totalexhaust}' == 0) {

            alert("企业填报次序是\"烟囱/排气筒\"->\"锅炉\"");
            var is = confirm("点击\"确定\"系统将为您跳转到烟囱/排气筒信息填报界面，否则锅炉页面无法保存！");
            if (is == true) {
                addchimney();
                return;
            }
        }
        var number = 0;
        if ('${totalpagesboiler}' != null) {
            if ('${totalpagesboiler}' == "") {

            } else {
                number = parseInt('${totalpagesboiler}') + 1;
            }
        } else {
            number++;
        }

        var m_newpageboiler = 1;
        document.getElementById("sguoluul").innerHTML += "<li id='sguoluli" + number + "'>" + "<a href='javascript:void(0)' onclick='addsaveinfo(" + number + ",\"stationary\")'><i class='icon-double-angle-right'></i>" + number + "号锅炉</a></li>";


    }
    function addchimney() {
        if (!checkvalue(1)) {
            alert(alertadd);
            return;
        }
        if (checkvalue()) {
            var i = 0;
            if ('{{ session("totalexhaust") }}' != null) {
                if ('{{ session("totalexhaust") }}' == "") {
                    i = 1;
                } else {
                    i = parseInt('{{ session("totalexhaust") }}') + 1;
                }
            } else {
                i++;
            }
            document.getElementById("exhaustul").innerHTML += "<li id='exhaustli" + i + "'><a href='javascript:void(0)' onclick='addsaveinfo(" + i + ",\"exhaust\")'><i class='icon-double-angle-right'></i>" + i + "号烟囱/排气筒</a></li>";
            //document.getElementById("exhaustul").innerHTML+="<li id='exhaustli"+i+"'><a onclick='addsaveinfo("+i+",\"exhaust\")'><i class='icon-double-angle-right'></i>"+i+"号烟囱/排气筒 </a></li>";
            //修改中的个数

            //alert(ii);
            //跳转到新增页面
            window.location.href = '{{ url("/addexhaust") }}';


        }
        else {
            alert(alertadd);
        }
        //var m_number=number+1;
        //document.getElementById("solventul").innerHTML+="<li id='m_addpage'><a onclick='addpage("+m_number+")'><i class='icon-double-angle-right'></i>+</a></li>";
    }
    function addfeiqi() {
        /*if(!jumpsave('exhaust')){
         return ;
         }	*/
        if (!checkvalue(1)) {
            alert(alertadd);
            return;
        }
        if (true) {
            var i = 0;
            if ('${totalfeiqi}' != null) {
                if ('${totalfeiqi}' == "") {
                    i = 1;
                } else {
                    i = parseInt('${totalfeiqi}') + 1;
                }
            } else {
                i++;
            }
            document.getElementById("feiqiul").innerHTML += "<li id='feiqili" + i + "'><a href='javascript:void(0)' onclick='addsaveinfo(" + i + ",\"feiqi\")'><i class='icon-double-angle-right'></i>" + i + "号设备</a></li>";
            //document.getElementById("exhaustul").innerHTML+="<li id='exhaustli"+i+"'><a onclick='addsaveinfo("+i+",\"exhaust\")'><i class='icon-double-angle-right'></i>"+i+"号烟囱/排气筒 </a></li>";
            //修改中的个数

            //alert(ii);
            //跳转到新增页面


        }
        else {
            alert("您已有新增的设备，请先填写");
        }
        //var m_number=number+1;
        //document.getElementById("solventul").innerHTML+="<li id='m_addpage'><a onclick='addpage("+m_number+")'><i class='icon-double-angle-right'></i>+</a></li>";
    }


    function adddevice() {
        var device_num = {!! session("device_num") !!};
        if (!checkvalue(1)) {
            alert(alertadd);
            return;
        }

        if (!checkvalue())//!checkvalue()
        {
            alert(alertadd);
        } else {

            var number = 0;
            if (device_num != null) {
                if (device_num == "") {
                    number = 1;
                } else {
                    number = parseInt(device_num) + 1;
                }
            } else {
                number++;
            }
            var m_newdevice = 1;
            document.getElementById("deviceul").innerHTML += "<li id='deviceli" + number + "'><a href='javascript:void(0)' onclick='addsaveinfo(" + number + ",\"product\")'><i class='icon-double-angle-right'></i>" + number + "号设备</a></li>";
            window.location.href = '{{ url("/adddevice") }}';
        }

    }
    function addsguolu() {
        var boiler_num = {!! session('boiler_num') !!};
        if (!checkvalue(1)) {
            alert(alertadd);
            return;
        }
        if (!checkvalue()) {
            alert(alertadd);
        } else {
            var number = 0;
            if (boiler_num != null) {
                if (boiler_num == "") {
                    number = 1;
                } else {
                    number = parseInt(boiler_num) + 1;
                }
            }else
            {
                number++;
            }
            window.location.href = '{{ url("/addboiler") }}';

        }
    }


    function addproduct() {
        var product_num = {!! session("product_num") !!};
        var device_num = {!! session("device_num") !!};

        if (device_num == null || device_num == "" || device_num == 0) {
            alert("企业填报次序是\"设备\"->\"产品\"");
            var is = confirm("点击\"确定\"系统将为您跳转到设备信息填报界面，否则产品页面无法保存！");

            if (is == true) {
                adddevice();
                return;
            }
        }
        if (!checkvalue(1)) {
            alert(alertadd);
            return;
        } else {

            var number = 0;
            if (product_num != null) {
                if (product_num == "") {
                    number = 1;
                } else {
                    number = parseInt(product_num) + 1;
                }
            } else {
                number++;
            }
            var page = number + 200;
            document.getElementById("productul").innerHTML += "<li id='productli" + number + "'><a href='javascript:void(0)' onclick='saveinfo(" + page + ",\"product\")'><i class='icon-double-angle-right'></i>" + number + "号产品</a></li>";
            //alert("wan");
            window.location.href = '{{ url("/addproduct") }}';

        }
    }
    function addraw() {
        var raw_num = {!! session("raw_num") !!};
        var device_num = {!! session("device_num") !!};
        if (device_num == null || device_num == "" || device_num == 0) {
            alert("企业填报次序是\"设备\"->\"原料\"");
            var is = confirm("点击\"确定\"系统将为您跳转到设备信息填报界面，否则原料页面无法保存！");

            if (is == true) {
                adddevice();
                return;
            }
        }
        if (!checkvalue(1)) {
            alert(alertadd);
            return;
        }
        if (!checkvalue())//!checkvalue()
        {
            alert(alertadd);
        } else {

            var number = 0;
            if (raw_num != null) {
                if (raw_num == "") {
                    number = 1;
                } else {
                    number = parseInt(raw_num) + 1;
                }
            } else {
                number++;
            }
            var page = number + 100;
            document.getElementById("rawul").innerHTML += "<li id='rawli" + number + "'><a href='javascript:void(0)' onclick='saveinfo(" + page + ",\"product\")'><i class='icon-double-angle-right'></i>" + number + "号原料</a></li>";
            window.location.href = '{{ url("/addraw") }}';

        }
    }
    function addrongjiproduct() {

        if (!checkvalue(1)) {
            alert(alertadd);
            return;
        } else {
            var number = 0;
            if ('${totalrongji.productNum}' != null) {
                if ('${totalrongji.productNum}' == "") {
                    number = 1;
                } else {
                    number = parseInt('${totalrongji.productNum}') + 1;
                }
            } else {
                number++;
            }
            var page = number + 100;
            document.getElementById("rongjiproductul").innerHTML += "<li id='rongjiproductli" + number + "'><a href='javascript:void(0)' onclick='saveinfo(" + page + ",\"rongji\")'><i class='icon-double-angle-right'></i>" + number + "号产品</a></li>";


        }
    }
    function addrongjiraw() {
        if (!checkvalue(1)) {
            alert(alertadd);
            return;
        }
        if (!checkvalue())//!checkvalue()
        {
            alert(alertadd);
        } else {
            var number = 0;
            if ('${totalrongji.rawNum}' != null) {
                if ('${totalrongji.rawNum}' == "") {
                    number = 1;
                } else {
                    number = parseInt('${totalrongji.rawNum}') + 1;
                }
            } else {
                number++;
            }
            var page = number;
            document.getElementById("rongjirawul").innerHTML += "<li id='rongjirawli" + number + "'><a href='javascript:void(0)' onclick='saveinfo(" + page + ",\"rongji\")'><i class='icon-double-angle-right'></i>" + number + "号原料</a></li>";


        }
    }
    function addpaiqi() {
        if (!jumpsave('procedureproduce')) {
            return;
        }
        if (!checkvalue()) {
            alert(alertadd);
        }
        else {

            var i = parseInt('${totalpaiqifabr}') + 1;
            var ii = parseInt(i) + 100;

            // var s= document.getElementById(m_addpage);
            //s.removeChild(s.childNodes[number]);
            // document.getElementById("solventul").innerHTML-="<li id='m_addpage'><a onclick='addpage("+i+")'><i class='icon-double-angle-right'></i>+</a></li>";
            document.getElementById("paiqiul").innerHTML += "<li id='paiqili" + i + "'><a href='javascript:void(0)' onclick='addsaveinfo(" + ii + ",\"procedureproduce\")'><i class='icon-double-angle-right'></i>" + i + "号烟囱/排气筒</a></li>";


        }

        //var m_number=number+1;
        //document.getElementById("solventul").innerHTML+="<li id='m_addpage'><a onclick='addpage("+m_number+")'><i class='icon-double-angle-right'></i>+</a></li>";
    }


</script>

<div class="sidebar" id="sidebar"
     style="background-image: url({{ asset("/img/zuo_bg.png") }})">

    <ul class="nav nav-list">
        <li style="height: 40px">
            <img src="{{ asset("/img/daohang.gif") }}" style="width: 100%; height: 100%"/>
        </li>

        <li id='info'>
            <a href="{{ url("/home") }}"> <i
                        class=""><img src="{{ asset("/img/qiye.png") }}"
                                      style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px; background-image: url({{ asset("/img/zuo_bg.png") }})">
                </i> <span class="menu-text">企业信息</span> </a>
        </li>
        <li id='exhaust'>
            <a href="#" class="dropdown-toggle"> <i class=""><img
                            src="{{ asset("/img/yantong.png") }}"
                            style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                </i> <span class="menu-text">烟囱/排气筒</span> <b class="arrow icon-angle-down"></b>
            </a>
            <ul class="submenu" id="exhaustul">
                <li>
                    <a href='javascript:void(0)' onclick='addchimney()'> <i
                                class='icon-double-angle-right'></i> 增加烟囱/排气筒+ </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle"> <i class=""><img
                            src="{{ asset("/img/yaolu.png") }}"
                            style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                </i> <span class="menu-text">锅炉</span> <b class="arrow icon-angle-down"></b>
            </a>
            <ul class="submenu" id="station">
                <li id="stationinfo">
                    <a onclick="addsaveinfo(0,'stationary')"> <i class=""><img
                                    src="{{ asset("/img/qiye.png") }}"
                                    style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text"> 总信息 </span> </a>
                </li>


                <li>
                    <a href="#" class="dropdown-toggle"> <i class=""><img
                                    src="{{ asset("/img/yaolu.png") }}"
                                    style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">锅炉列表</span> <b
                                class="arrow icon-angle-down"></b> </a>
                    <ul class="submenu" id=sguoluul>
                        <li>
                            <a href="javascript:void(0)" onclick='addsguolu()'> <i
                                        class='icon-double-angle-right'></i> 增加锅炉+ </a>
                        </li>
                    </ul>


                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle"> <i class=""><img
                            src="{{ asset("/img/yaolu.png") }}"
                            style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                </i> <span class="menu-text">窑炉</span> <b class="arrow icon-angle-down"></b>
            </a>
            <ul class="submenu" id="kiln">
                <li id="kilninfo">
                    <a onclick="addsaveinfo(0,'procedure')"> <i class=""><img
                                    src="{{ asset("/img/qiye.png") }}"
                                    style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text"> 总信息 </span> </a>
                </li>

            <!--li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class=""><img src="{{ asset("/img/yantong.png") }}" style="width:20px;height:20px;margin-top:-5px;margin-left:8px;margin-right:5px;"></i>
                                        <span class="menu-text">烟囱/排气筒管理</span>
                                        <b class="arrow icon-angle-down"></b>
                                    </a>
                                    <ul class="submenu" id="spaiqiul">
                                        <li >
                                            <a href='javascript:void(0)' onclick='addspaiqi()'>
                                                <i class='icon-double-angle-right'></i>
                                                增加烟囱/排气筒+
                                                </a>
                                        </li>
                                    </ul>
                                </li>-->
                <li>
                    <a href="#" class="dropdown-toggle"> <i class=""><img
                                    src="{{ asset("/img/yaolu.png") }}"
                                    style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">窑炉列表</span> <b
                                class="arrow icon-angle-down"></b> </a>
                    <ul class="submenu" id="yaoluulkiln">
                        <li>
                            <a href="javascript:void(0)" onclick='addyaolukiln()'> <i
                                        class='icon-double-angle-right'></i> 增加窑炉+ </a>
                        </li>
                    </ul>


                </li>
            </ul>
        </li>

        <li>
            <a href="/" class="dropdown-toggle"> <i class=""><img
                            src="{{ asset("/img/yaolu.png") }}"
                            style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                </i> <span class="menu-text">设备生产原料及产品</span> <b
                        class="arrow icon-angle-down"></b> </a>
            <ul class="submenu" id="device">
                <li id="deviceinfo">
                    <a onclick="addsaveinfo(0,'product')"> <i class=""><img
                                    src="{{ asset("/img/qiye.png") }}"
                                    style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">总信息 </span> </a>
                </li>

            <!-- <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class=""><img src="{{ asset("/img/yantong.png") }}" style="width:20px;height:20px;margin-top:-5px;margin-left:8px;margin-right:5px;"></i>
                                        <span class="menu-text">烟囱/排气筒管理</span>
                                        <b class="arrow icon-angle-down"></b>
                                    </a>
                                    <ul class="submenu" id="paiqiul">
                                        <li >
                                            <a href='javascript:void(0)' onclick='addpaiqi()'>
                                                <i class='icon-double-angle-right'></i>
                                                增加烟囱/排气筒+
                                                </a>
                                        </li>
                                    </ul>
                                </li>-->
                <li>
                    <a href="#" class="dropdown-toggle"> <i class=""><img
                                    src="{{ asset("/img/yaolu.png") }}"
                                    style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">生产工艺装置</span> <b
                                class="arrow icon-angle-down"></b> </a>
                    <ul class="submenu" id="deviceul">
                        <li>
                            <a href="javascript:void(0)" onclick='adddevice()'> <i
                                        class='icon-double-angle-right'></i> 增加装置+ </a>
                        </li>
                    </ul>


                </li>
                <li>
                    <a href="#" class="dropdown-toggle"> <i class=""><img
                                    src="{{ asset("/img/yaolu.png") }}"
                                    style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">原料信息</span> <b
                                class="arrow icon-angle-down"></b> </a>
                    <ul class="submenu" id="rawul">
                        <li>
                            <a href="javascript:void(0)" onclick='addraw()'> <i
                                        class='icon-double-angle-right'></i> 增加原料+ </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle"> <i class=""><img
                                    src="{{ asset("/img/yaolu.png") }}"
                                    style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">产品信息</span> <b
                                class="arrow icon-angle-down"></b> </a>
                    <ul class="submenu" id="productul">
                        <li>
                            <a href="javascript:void(0)" onclick='addproduct()'> <i
                                        class='icon-double-angle-right'></i> 增加产品+ </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="/" class="dropdown-toggle"> <i class=""><img
                            src="{{ asset("/img/yaolu.png") }}"
                            style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                </i> <span class="menu-text">溶剂使用原料及产品</span> <b
                        class="arrow icon-angle-down"></b> </a>
            <ul class="submenu" id="rongji">
                <li id="rongjiinfo">
                    <a onclick="addsaveinfo(0,'rongji')"> <i class=""><img
                                    src="{{ asset("/img/qiye.png") }}"
                                    style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">总信息 </span> </a>
                </li>


                <li>
                    <a href="#" class="dropdown-toggle"> <i class=""><img
                                    src="{{ asset("/img/yaolu.png") }}"
                                    style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">原料信息</span> <b
                                class="arrow icon-angle-down"></b> </a>
                    <ul class="submenu" id="rongjirawul">
                        <li>
                            <a href="javascript:void(0)" onclick='addrongjiraw()'> <i
                                        class='icon-double-angle-right'></i> 增加原料+ </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle"> <i class=""><img
                                    src="{{ asset("/img/yaolu.png") }}"
                                    style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">产品信息</span> <b
                                class="arrow icon-angle-down"></b> </a>
                    <ul class="submenu" id="rongjiproductul">
                        <li>
                            <a href="javascript:void(0)" onclick='addrongjiproduct()'> <i
                                        class='icon-double-angle-right'></i> 增加产品+ </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li id='feiqi'>
            <a href="#" class="dropdown-toggle"> <i class=""><img
                            src="{{ asset("/img/yantong.png") }}"
                            style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                </i> <span class="menu-text">废弃物处理设备</span> <b
                        class="arrow icon-angle-down"></b> </a>
            <ul class="submenu" id="feiqiul">
                <li>
                    <a href='javascript:void(0)' onclick='addfeiqi()'> <i
                                class='icon-double-angle-right'></i> 增加设备+ </a>
                </li>
            </ul>
        </li>

        <!--gaolihong -->
        <li>
            <a href="#" class="dropdown-toggle"> <i class=""><img
                            src="{{ asset("/img/yaolu.png") }}"
                            style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                </i> <span class="menu-text">生产辅助设施</span> <b class="arrow icon-angle-down"></b>
            </a>
            <ul class="submenu" id="set2">
                <li id="roaddust">
                    <a
                            href="{{ url("tolistRoad") }}">
                        <i class=""><img src="{{ asset("/img/qiye.png") }}"
                                         style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">工厂道路信息</span> </a>
                </li>

                <li id="condust">
                    <a
                            href="{{ url("toconstruction") }}">
                        <i class=""><img src="{{ asset("/img/qiye.png") }}"
                                         style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">工厂施工信息</span> </a>
                </li>
                <li id="yarddust">
                    <a href={{ url("toyarddust") }}> <i
                                class=""><img src="{{ asset("/img/qiye.png") }}"
                                              style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">工厂堆场信息</span> </a>
                </li>
                <li id="baredust">
                    <a href={{ url("tobaresoil") }}>
                        <i class=""><img src="{{ asset("/img/qiye.png") }}"
                                         style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text">工厂裸土面积</span> </a>
                </li>
                <li id="workshop">
                    <a
                            href={{ url("tonoOrganizationWorkshop") }}>
                        <i class=""><img src="{{ asset("/img/qiye.png") }}"
                                         style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text"> 工厂车间情况</span> </a>
                </li>

            </ul>
        </li>

        <li id='user'>
            <a href="#" class="dropdown-toggle"> <i class=""><img
                            src="{{ asset("/img/yantong.png") }}"
                            style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                </i> <span class="menu-text">用户信息管理</span> <b
                        class="arrow icon-angle-down"></b> </a>
            <ul class="submenu" id="pasd">
                <li id="lipsd">
                    <a
                            href="{{ url("/changepsd") }}">
                        <i class=""><img src="{{ asset("/img/qiye.png") }}"
                                         style="width: 20px; height: 20px; margin-top: -5px; margin-left: 8px; margin-right: 5px;">
                        </i> <span class="menu-text"> 密码修改</span> </a>

                </li>
            </ul>
        </li>

    </ul>
    </li>
    </ul>
    <!-- /.nav-list -->
    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left"
           data-icon2="icon-double-angle-right"></i>
    </div>

    <script type="text/javascript">
        try {
            ace.settings.check('sidebar', 'collapsed')
        } catch (e) {
        }
    </script>

</div>