<html>
<meta charset="UTF-8">
<style type="text/css">

    .main {
        width: auto;
        text-align: justify;
        margin: 20px auto;
        font-size: 12px;
    }

    button {

    }

    /*#show table, td {
        border: solid 1px gray;
    }*/


    td{
        border:solid #add9c0; border-width:0px 1px 1px 0px; padding: 0 10px; height: 15px;
    }

    table{
        border:solid #add9c0; border-width:1px 0px 0px 1px;
        font-size:12px;
        border-spacing: 0;
    }

</style>
<script type="application/javascript" src="ajax.js">

</script>
<?php $l = 0; ?>
<body>
<div class="main">
    <?php echo "服务器系统类型". PHP_OS. "<br/><hr/>"; ?>

    <button onclick="showmore(page=page + 10)">显示更多记录</button>
    <div>
        <table id="show">
            <thead>
                <td>时间</td>
                <td>IP</td>
                <td>客户端</td>
                <td>URI</td>
                <td>CODE</td>
            </thead>
        </table>
    </div>
</div>
</body>
</html>
<script type="application/javascript">
    var page = 0;

    var showmore = function (page) {
        //alert("page="+page);
        showHint(page);
    }

    window.onload=function () {
        //alert("load:"+page);
        showHint(page);
    }
</script>