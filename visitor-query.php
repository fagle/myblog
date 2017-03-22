<?php
/**
 * Created by PhpStorm.
 * User: fagle
 * Date: 2016/12/5
 * Time: 17:45
 */


/**
 * Send a GET requst using cURL
 * @param string $url to request
 * @param array $get values to send
 * @param array $options for cURL
 * @return string
 */
function curl_get($url, array $get = array(), array $options = array())
{
    $defaults = array(
        CURLOPT_URL => $url. (strpos($url, '?') === FALSE ? '?' : ''). http_build_query($get),
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_USERAGENT => 'curl/7.35.0',
        CURLOPT_TIMEOUT => 4
    );

    $ch = curl_init();
    curl_setopt_array($ch, ($options + $defaults));
    if( ! $result = curl_exec($ch))
    {
        trigger_error(curl_error($ch));
    }
    curl_close($ch);
    return $result;
}

function get_src_by_ip($ip) {
    $query["ip"] = $ip;
    $c = curl_get('ip.cn', $query);
    if (preg_match('/<div id=\"result\">.*<\/div>/', $c, $matches) == 1):
        return implode(',',$matches);
    elseif (strlen($c) < 100):
        return $c;
    endif;
}

function show_vistors($line) {

    if ("Linux" == PHP_OS) {
        $handle = file("/var/log/apache2/access.log");
    }
    else {
        $handle = file("access.log");
    }

    if ($handle) {
        $n = 0;
        $size = sizeof($handle);
        for ($i=0; ; $i++){
            if ($i>= $size)
                continue;
            $record = $handle[$size - $i - 1];
            if ($i < $line)
                continue;
            if ($n>=10)
                break;
            $n++;
            //echo $i." ". $record ."<br/>";
            if($record) {
                $records = preg_split("/([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $record, -1, PREG_SPLIT_DELIM_CAPTURE);
                if (sizeof($records) < 2) {
                    continue;
                }
                $ip = $records[1];
                $left_str = $records[2];
                // parse other fields
                preg_match("/\[(.+)\]/", $left_str, $match);
                $access_time = $match[1];
                $access_unixtime = strtotime($access_time);
                $access_date = date('Y-m-d', $access_unixtime);
                echo "<tr>";
                echo "<td>". date("Y-m-d H:i:s", $access_unixtime). "</td>";
                $yesterday_unixtime = strtotime(date("Y-m-d", time())."-1 day");
                $yesterday_date = date('Y-m-d', $yesterday_unixtime);
                //定时任务只保留昨天的访问日志
                /*if ($yesterday_date != $access_date) {
                    continue;
                }*/
                $left_str = preg_replace("/^([- ]*)\[(.+)\]/", "", $left_str);
                $left_str = trim($left_str);
                preg_match("/^\"[A-Z]{3,7} (.[^\"]+)\"/i", $left_str, $match);
                $full_path = $match[0];
                $http = $match[1];
                $link = explode(" ", $http);
                $uaid = "";
                //统计某个指定访问路径下的下载
                if ($link && preg_match("/^\/course\/automation\/MP+/", $link[0])) {
                    preg_match("/uaid=([0-9]+)/", $link[0], $match);
                    $uaid = $match[1];
                    preg_match("/^\/course\/automation\/(MP[0-9]+\.zip)/", $link[0], $match);
                    $course = $match[1];
                }
                else {
                    //continue;
                }
                $left_str = str_replace($full_path, "", $left_str);
                $left_arr = explode(" ", trim($left_str));
                preg_match("/([0-9]{3})/", $left_arr[0], $match);
                $success_code = $match[1];
                preg_match("/([0-9]+\b)/", $left_arr[1], $match);
                $bytes = $match[1];
                $left_str = str_replace($success_code, "", $left_str);
                $left_str = str_replace($bytes, "", $left_str);
                $left_str = trim($left_str);
                /*preg_match("/^\"(.[^\"]+)\"/", $left_str, $match);
                $ref = $match[1];
                $left_str = str_replace($match[0], "", $left_str);
                preg_match("/\"(.[^\"]+)/", trim($left_str), $match);
                $browser = $match[1];*/
                /*print("
                IP: $ip <br/>
                Access Time: $access_time <br/>
                Page: $link[0] <br/>
                Type: $link[1] <br/>
                Success Code: $success_code <br/>
                Bytes Transferred: $bytes <br/>
                Referer: $ref <br/>
                Browser: $browser <br/>");*/
                $p = '/^(\d{1,3}.\d{1,3}.\d{1,3}.\d{1,3})\s-\s(.*)\s\[(.*)\]\s"(.*)\"\s(\d{3})\s(\d+)\s"(.*)"\s\"(.*)\"(.*)$/u';

                preg_match($p,$record,$a_match);
                //var_dump($a_match);
                $ip = $a_match[1];
                echo "<td>". get_src_by_ip($ip) . "</td>";
                echo "<td>". $a_match[8]. "</td>";
                echo "<td>" . $a_match[4]."</td>";
                echo "<td>". $a_match[5]."</td>";
                echo "</tr>";
            }
        }


        $s_line = '192.168.192.168 - - [31/Jul/2012:14:17:45 +0800] "GET /a/b/c/d.txt?device_id=BF771F68-6B0C-41D0-9F7E-3A24294B17DF HTTP/1.0" 200 1039 "-" "LifeStyleTiring-Room/1.0 CFNetwork/548.1.4 Darwin/11.4.0"';
        preg_match($p,$s_line,$a_match);
        //var_dump($a_match);
        echo "<tr/>";
    } else {
        echo "文件打开失败！";
    }
    //fclose($handle);
}

$line = $_GET["line"];
if ($line != null) {
    show_vistors($line);
}


