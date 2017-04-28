<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css">
    <script type="text/javascript" language="JavaScript" src="{{ asset("/js/jquery-3.2.1.min.js") }}"></script>
    <script type="text/javascript" language="JavaScript" src="{{ asset("/js/bootstrap.min.js") }}"></script>
    <script type="text/javascript" language="JavaScript">
        $(document).ready(function () {
            var id = 122;
            $.post("{{ url("information") }}",{'_token':'{{ csrf_token() }}','id':id},function (data) {
                console.log(data);
                alert(123);
                $("#information").val(data[0].scc);
            });
        });
    </script>
</head>
<body>
aaa
<div class="control-group">
    <input name="information" id="information" />
</div>
</body>
</html>
