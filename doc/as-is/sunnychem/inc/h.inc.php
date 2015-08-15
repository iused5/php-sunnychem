<?
//session_cache_limiter('no-cache, must-revalidate'); // 검색 후 뒤로가기 해도 빈페이지 나오지 않음. 
session_start();
require_once "/home/anyhomepage/public_html/sunnychem/inc/conf.inc.php"; //XXXXX

if($MemberID){
}else{

 if(!$temp_member_id){

 $var_year=date(y);
 $var_month=date(m);
 $var_date=date(d);

 $var_ip=$REMOTE_ADDR;
 $var_ip=explode(".",$var_ip);

 $random_num=rand(1000,9999);
 $temp_member_id=$var_year.$var_month.$var_date.$var_ip[2].$var_ip[3].$random_num;
 setcookie("temp_member_id",$temp_member_id,0,"/");
 }

 //$MemberID=$temp_member_id;
 $member_name="Guest";
 $member_jumin="Guest";

}


if(!$w) $w="100%";
if(!$td_align){ $td_align="align=center";}
if(!$local_title) $local_title="$title_text";

echo "<html>
<head>
<title>
$title_text
</title>
<link rel=\"stylesheet\" type='text/css' href=\"$home_url/inc/quickd_font.css\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=$charset\">
";

echo "
<!--
<style type=\"text/css\">
td {  font-family: \"돋움\", \"굴림\", \"Arial\"; font-size: 9pt;}
a:link  { font-size : 9pt;text-decoration:none; }
a:visited  { font-size : 9pt; text-decoration:none; }
a:hover  { font-size : 9pt; color:FF9700; text-decoration: none}
a.blue:link  { font-size : 9pt;text-decoration:none; }
a.blue:visited  { font-size : 9pt; text-decoration:none; }
a.blue:hover  { font-size : 9pt; color:4EB0FF; text-decoration: none}
</style>
//-->
$headpart
$local_headpart
";

//need to arrange following three js files.
echo "
<script language=\"javascript\" src=\"$home_url/inc/js/flashWrite.js\"></script>
<script language=\"javascript\" src=\"$home_url/inc/js/javascript.js\"></script>
<script language=\"javascript\" src=\"$home_url/inc/js/common.js\"></script>
";
  
if($date_picker_YN=="Y"){
echo "      
<link rel=\"stylesheet\" type='text/css' href=\"$home_url/date_picker.css\">
<script language=\"javascript\" src=\"$home_url/date_picker.js\"></script>
<script language=\"javascript\">DP_InitPicker();</script>
";
}

//include "$d_root/QuickPop/js_pop_layer.inc.php";
//include "$d_root/QuickPop/js_pop.inc.php";

echo "
</head>
<body bgcolor=white leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" $ONBLUR>
<table width=$w align=center border=0 cellpadding=0 cellspacing=0>
<tr><td $td_align valign='top'>
";
?>
<? //include "$d_root/QuickPop/pop_layer.inc.php"; ?>
