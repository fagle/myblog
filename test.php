<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>
<?php
/**
 * ������ʱͨ��php��һЩ����ֻ�ܻ�ȡ�ı�����IPΪ127.0.0.1��Ϊ������������ǿ���ͨ��ϵͳ
 * �鿴IP��ַ�����Ϣ��������ȡ���ݷ�����IP��ַ���˷�����������win200/xp��win7��Vista��linuxϵͳ��
 * ��������ϵͳ��Ҫ����ip��Ϣ�����Դ˷����������Ʒ���ʹ�á�
 * @return string ip��ַ
 */
function getLocalIP()
{
 $preg="/\A((([0-9]?[0-9])|(1[0-9]{2})|(2[0-4][0-9])|(25[0-5]))\.){3}(([0-9]?[0-9])|(1[0-9]{2})|(2[0-4][0-9])|(25[0-5]))\Z/";
 //��ȡ����ϵͳΪwin2000/xp��win7�ı���IP��ʵ��ַ
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
 //��ȡ����ϵͳΪlinux���͵ı���IP��ʵ��ַ
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
