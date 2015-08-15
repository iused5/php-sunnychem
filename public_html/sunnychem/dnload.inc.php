<?
/*
$file_name=$fn;
$file_name2=$fn2;
$file_path="./files/$file_name";
//$file_name2="바벨탑.doc";
if(!$file_name2) $file_name2=$file_name;
header("Content-Type: application/octet-stream");
Header("Content-Disposition: attachment;; filename=$file_name2");
header("Content-Transfer-Encoding: binary");
Header("Content-Length: ".(string)(filesize($file_path)));
Header("Cache-Control: cache, must-revalidate"); //<--파일열기를 위한 캐시컨트롤!!!(지송빠트렸었네요!!!)
header("Pragma: no-cache");
header("Expires: 0");
$fp = fopen($file_path,'r+b') ;
if (!fpassthru($fp)) {
fclose($fp);
}
*/


if($xid){//when to avoid to open file name

 $db_host="localhost";
 $db_name="noriart";
 $db_id="noriart";
 $db_pw="";

 $connect=mysql_connect("$db_host","$db_id","$db_pw");
 if(!$connect) { echo "connect failure"; exit; }
 if(!mysql_select_db("$db_name",$connect)) {echo "select failure"; exit;}
 
  mysql_query("set names euckr");

 $a="select f1,h1 from noriart_board where id=$xid";
 $b=mysql_query($a);
 $c=mysql_fetch_array($b);
 $fn=$c[f1];
 $fn2=$c[h1];

 //ECHO "=$a =$fn =$fn2";exit;//thku

}

$file_name=$fn;

$fn2=rawurldecode($fn2);
$fn2=stripslashes($fn2);

//echo "=$fn2";
$file_name2=$fn2;

$File="./$file_name";
$FileName=$file_name2;

if(is_file($File)){
if (eregi("(MSIE 5.5|MSIE 6.0)", $HTTP_USER_AGENT)){
header("Content-type: application/octet-stream");
header("Content-Length: ".filesize("$File"));
header("Content-Disposition: attachment; filename=$FileName");
header("Content-Transfer-Encoding: binary");
header("Pragma: no-cache");
header("Expires: 0");
}else{
header("Content-type: file/unknown");
header("Content-Length: ".filesize("$File"));
header("Content-Disposition: attachment; filename=$FileName");
header("Content-Description: PHP4 Generated Data");
header("Pragma: no-cache");
header("Expires: 0");
}
$fp = fopen($File, "rb");
if(!fpassthru($fp)) fclose($fp);
}else{
//MoveBack("파일이 존재하지 않습니다..");
}

?>
