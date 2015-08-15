<?
session_start();

//////////////////counter/////////////////
//counter/count.php3에서 옮겨옴...
//1시간후에 다시 들어오면 카운트..
$timer=3600;
if(!$Bit_Counter)
{
  if($timer==0)
  {
    SetCookie("Bit_Counter","Bit_Counter_Value",$timer);
  }

  if($timer>=1)
  {
    SetCookie("Bit_Counter","Bit_Counter_Value",time()+$timer);
  }
}
//////////////////counter/////////////////
if(!$POPUP){ 
$onload = "window.open(\"popup.html\",\"popup\",\"top=0,left=5,width=550,height=700,scrollbars=no\")";
}



if($page == "admin"){
 if($MemberLevel != "admin") {
	echo "<script>window.alert(\"Only Admin!\");history.go(-1);</script>";

 }
}
//include "http://harunet.com/~whitesnow/fuzenet/inc/conf.inc";
require_once "/home/ujb.biz/public_html/seejong/inc/conf.inc.php";

//필요한 함수들을 include 한다...

//include "$d_root/inc/func.inc";
//include "$d_root/inc/func2.inc";
include "$d_root/inc/common.inc.php";
include "$d_root/inc/connect.inc.php";

$default_onload ="top.window.focus();";

if($path1== "board"){

$headpart="

<script language=\"JavaScript\">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf(\"#\")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf(\"?\"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
";


}//board 페이지에서 필요한 headpart

echo("
<html>
<head>
<title>$homepage_title</title>

$headpart

<SCRIPT LANGUAGE=\"JavaScript\">
<!-- Begin
function movepage()
{
var direction =event.keyCode
switch(direction){
case 39:
window.moveTo(0, 0);
window.resizeBy(10, 0);
window.resizeBy(0, 0);
break
case 37:
window.moveTo(0, 0);
window.resizeBy(-10, 0);
window.resizeBy(0, 0);
break
case 38:
window.moveTo(0, 0);
window.resizeBy(0, 0);
window.resizeBy(0, -10);
break
case 40:
window.moveTo(0, 0);
window.moveBy(0, 0);
window.resizeBy(0, 10);
break
default:
break
}
}
//  End -->
</script>

<script language='javascript'>
function link_open(doc) {
 var l_win=window.open(doc,'link_win','width=800, height=600, menubar=yes,toolbar=yes,scrollbars=yes,location=yes,status=yes');
}
function m_open(doc) {
 var m_win=window.open(doc,'m_win','top=100,left=100,width=550,height=550,scrollbars=yes');
}
function s_open(doc) {
 var s_win=window.open(doc,'s_win','top=10,left=10,width=800,height=550,scrollbars=yes,toolbar=yes,location=yes,status=yes');
}
function s1_open(doc) {
 var s1_win=window.open(doc,'s_win','top=10,left=10,width=800,height=550,scrollbars=yes,toolbar=yes,location=yes,status=yes');
}
</script>
<link rel='stylesheet' type='text/css' href='$home_url/css/style.css'>
<style>
BODY
{
font-family: 굴림; color:#525252; font-size: 9pt; text-decoration: none;
scrollbar-face-color: whitesmoke;
scrollbar-shadow-color: #ffffff;
scrollbar-highlight-color: #ffffff;
scrollbar-3dlight-color: #999999;
scrollbar-darkshadow-color: #666666;
scrollbar-arrow-color: #000000; }
</style>
</head>

");


//바탕색을 결정한다.
echo("
<body bgcolor=$bgcolor leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 background='$home_url/background.gif' 
 onLoad='$default_onload $onload' onkeydown='movepage()'
>
");



//바탕테이블의 폭과 배경색을 결정한다.
echo ("
<table width=$out_t_width border=0 cellspacing=1 cellpadding=1 align=$homepage_align_type>
<tr bgcolor=$outer_t_bgcolor ><td>
");



//맨상단 바.
/*
 echo("
 <table width=$in_t_width border=0 cellspacing=0 cellpadding=0 align=center>
 <tr bgcolor=$out_t_bgcolor ><td>
 &nbsp;
 </td></tr></table>
 ");
*/

//페이지의 틀을 결정한다. 페이지의 폭과 페이지 바탕색을 결정한다.
echo("
<table width=$in_t_width border=0 cellspacing=0 cellpadding=0 align=center>
<tr bgcolor=$in_t_bgcolor><td align=center>
");

//로그인 로그아웃 회원가입 및 날짜 표시 

$today=date("Y/m/d");

echo "
<table width=100% border=0>
<tr><td align=left valign=middle>

<table>
<tr><td height=50 valign=middle>
<a href='$home_url_by_logo'>
<img src='$logo' border=0>
</td></tr>
<tr><td>
<font class=blue>$today</font>
</tr></tr>
</table>

</a>

	</td>
	<td valign=top>

&nbsp;

	</td>
	<td align=right valign=bottom>

<!-- top_banner //-->
$top_banner <br>

<!--
	<a href=\"$home_url/kor/home.html?table=news\">Korean</a> ::
	<a href=\"$home_url/index.php?table=j_news\">Japanese</a>
//-->
";


/* 향후 회원관리를 위한 모듈.
echo "<form action='$home_url/login.php3'>";

if($iam) { 
 echo "<img src='$home_url/icon/blue.gif'>"; }
else{ 
 echo "<img src='$home_url/icon/red.gif'>"; }

echo("
<font class=message>login</font>
<input name=login class=boxout onBlur=this.className='boxout' onFocus=this.className='boxin' size=10>
<input type=password name=passwd class=boxout onBlur=this.className='boxout' onFocus=this.className='boxin' size=10 >
<input type=hidden name=mode value='login'>
<input type=submit value='go'>
<a href='$home_url/login.php3?mode=logout'><font class=message>logout</font></a>
 | 
<a href='#'><font class=message>NEW</font></a>
</form>
");
*/

////////////////////////////log box/////////////////////////////////////////
if($MemberID){
echo "
&nbsp;<img src='$home_url/login_face.gif'>
";

echo "
<font class=message>$MemberID</font>
";

echo "
<font class=basic_text>|</font>
";

if($Level == "admin"){
echo "<a href='$home_url/admin/admin.html?path1=board&path2=admin_free'>
<font class=logoff>admin</font>
 </a>
<font class=basic_text>|</font>
";
}
echo "
<font class=basic_text>
<a href='$home_url/member/join_form.php?mode=modify'><font class=logoff>edit</font></a>
|
<a href='$home_url/log.php?log_mode=out'><font class=logoff>off</font></a>
</font>
<font class=basic_text>|</font>
";


}else{

echo "
&nbsp;<img src='$home_url/logoff_face.gif'>
<a href='$home_url/index.php?path1=member'>
<font class=logoff>Log in</font>
</a>
<font class=basic_text>|</font>
<a href='$home_url/member/join_form.php?path1=member&path2=join_form'>
<font class=logoff>Join</font>
</a>
";
}
////////////////////////////log box/////////////////////////////////////////




echo ("</td></tr></table>");


$time=time();
$date=date("Y-m-d",$time);

//페이지 타이틀 이미지
/*
echo("
<table width='100%' border='0' cellpadding='0' cellspacing='0' align=center>
<tr><td align=center>
$title_img
</td></tr></table>
<br>
");
*/

/*
echo "
<!--
<div align=center>
  <embed src=\"intro.swf\" width=700 play=\"true\" loop=\"true\" quality=\"autohigh\" pluginspage=\"http://www.macromedia.com/shockwave/download/\" type=\"application/x-shockwave-flash\"> 
  </embed> 
</div>
//-->
<div align=center>
  <embed src=\"언덕건너뛰기.swf\"  border=1 width=700 height=300 play=\"true\" loop=\"true\" quality=\"autohigh\" pluginspage=\"http://www.macromedia.com/shockwave/download/\" type=\"application/x-shockwave-flash\"> 
  </embed> 
</div>
";
*/

include "$d_root/inc/menu.inc";
echo("
<table width='100%' border='0' cellpadding='0' cellspacing='0' align=center>
<tr><td align=center bgcolor='$over_bgcolor' height=5>
</td></tr></table>
");


?>
