<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>
<?php
/**
 * 我们有时通过php的一些方法只能获取的本机的IP为127.0.0.1，为解决此问题我们可以通过系统
 * 查看IP地址相关信息命令来获取数据分析出IP地址。此方法，适用于win200/xp、win7、Vista、linux系统。
 * 其它操作系统需要分析ip信息，并对此方法进行完善方可使用。
 * @return string ip地址
 */
function getLocalIP()
{
 $preg="/\A((([0-9]?[0-9])|(1[0-9]{2})|(2[0-4][0-9])|(25[0-5]))\.){3}(([0-9]?[0-9])|(1[0-9]{2})|(2[0-4][0-9])|(25[0-5]))\Z/";
 //获取操作系统为win2000/xp、win7的本机IP真实地址
 /*exec("ipconfig",$out,$stats);
 if(!empty($out))
 {
  foreach($out AS $row)
  {
   if(strstr($row,"IP") && strstr($row,":") && !strstr($row,"IPv6"))
   {
    $tmpIp = explode(":", $row);
    if(preg_match($preg,trim($tmpIp[1])))
    {
     return trim($tmpIp[1]);
    }
   }
  }
 }*/
 //获取操作系统为linux类型的本机IP真实地址
 exec("ifconfig",$out,$stats);
 if(!empty($out))
 {
  if(isset($out[1]) && strstr($out[1],'addr:'))
  {
   $tmpArray = explode(":", $out[1]);
   $tmpIp = explode(" ", $tmpArray[1]);
   if(preg_match($preg,trim($tmpIp[0])))
   {
    return trim($tmpIp[0]);
   }
  }
 }
 return '127.0.0.1';
}
?>
<body>
</body>
</html>
