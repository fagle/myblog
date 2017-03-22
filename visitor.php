<?php
/**
 * Created by PhpStorm.
 * User: fagle
 * Date: 2016/12/5
 * Time: 17:45
 */


function show_vistors() {
    echo "服务器系统类型". PHP_OS. "<br/>";
    $handle = fopen("/var/log/apache2/access.log", "r");
    if ($handle) {
        for ($i=0; $i<10;$i++){
            echo $i." ".fgets($handle)."<br/>";
        }
    } else {
        echo "文件打开失败！";
    }
    fclose($handle);
    echo "read end";
}
?>
<html>
<meta charset="UTF-8">
<style type="text/css">

    .main {
        width: 1000px;
        text-align: justify;
        margin: 20px auto;
    }

</style>
<body>
    <div class="main">
        <?php echo show_vistors(); ?>
    </div>
</body>


</html>

