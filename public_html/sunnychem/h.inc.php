<? include "inc/pre.inc.php"; ?>
<html>
<head>
<title><?=$title_text;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$charset;?>">
<link rel="stylesheet" type="text/css" href="<?=$home_url;?>/inc/styleX.css">
<?
echo "
<script language=\"javascript\" src=\"$home_url/inc/js/flashWrite.js\"></script>
<script language=\"javascript\" src=\"$home_url/inc/js/javascript.js\"></script>
<script language=\"javascript\" src=\"$home_url/inc/js/common.js\"></script>
";
?>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
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
<?
if($path1=="home") $pop_YN="Y";
//include "$d_root/QuickPop/js_pop.inc.php";
?>
</head>
<? if($path1=="home"){ ?>
<body topmargin="0" leftmargin="0" <?=$X_main_body_bg;?> <?=$X_main_body_color;?>>
<table width=100% cellpadding=0 cellspacing=0><tr><td <?=$X_main_bg;?> <?=$X_main_color;?>>
<? }else{ ?>
<body topmargin="0" leftmargin="0" <?=$X_sub_body_bg;?> <?=$X_sub_body_color;?>>
<table width=100% cellpadding=0 cellspacing=0><tr><td <?=$X_sub_bg;?> <?=$X_sub_color;?>>
<? } ?>
<? if($path1=="homeXXX" && $asd !="x"){ ?>
<!-- layer pop //-->
<div id="layer_pop_1" style="position:absolute; left:expression((document.body.clientWidth)/2-60); top:90px; z-index:1;display:" >
<table width=532 cellpadding=0 cellspacing=0>
<tr><td><img src="img/pop2_top.gif"></td></tr>
<tr><td background="img/pop2_bg.gif" height=527>
<?
 $s_dir_=$s_dir;
 include "QuickConsult/local_conf.inc.php";
 include "QuickConsult/form_pop.inc.php";
 $s_dir=$s_dir;
?>
</td></tr>
<tr><td><img src="img/pop2_down.gif" border=0 style="cursor:hand" onclick="layer_pop_1.style.display='none'"></td></tr>
</table>
</div>
<!-- layer pop //-->
<? } ?>
<? if($path1=="homeXX"){ ?>
<div id="layer_pop_1" style="position:absolute; left:expression((document.body.clientWidth)/2+70); top:120px; z-index:1;display:" >
<table cellspacing=0 cellpadding=0>
<tr><Td><img src="img/pop.gif" border=0></td></tr>
<tr><Td>
<div align=right><a href="#" onclick="layer_pop_1.style.display='none'">
<div style="font-size:12px;color:white;background-color:black;">&nbsp;<b>´Ý±â <u>x</u></b>&nbsp;</div></a></div>
</div>
</td></tr></table></div>
<? } ?>
<!-- head -->
<table width="100%" border="0" bordercolor=red cellspacing="0" cellpadding="0">
  <tr>
    <td <?=$XLmargin;?> <?=$X_main_top_bg;?>></td>
    <td <?=$X_main_top_bg;?>><table <?=$XW;?> border="0" bordercolor=blue <?=$Xalign;?> cellpadding="0" cellspacing="0">
<tr>
<td><a href="index.html"><img src="img/logo.gif" border="0"></a></td>
<td <?=$Xmenu_bg;?>><script>flashWrite("img/menu.swf","695","86","flash","","PageNum=<?=$PageNum;?>","transparent")</script></td>
</tr>

<!--
<tr><td height=39 colspan=2>
<div align=right>
<? //include "M/m/log_box_r/m.inc.php";?>
</div>
</td></tr>
//-->

<!--        
<tr>
<td rowspan=2><a href="index.html"><img src="img/logo.gif" border="0"></a></td>
<tr><td><img src="img/top.gif" border=0 usemap="#map_top"></td></tr>
<tr><td <?=$Xmenu_bg;?>><div style="position:absolute; top:0px; z-index:1"><script>flashWrite("img/menu.swf","720","85","flash","","PageNum=<?=$PageNum;?>","transparent")</script></div>
</td></tr>
</tr>
//-->
</table>
<map name="map_top">
  <area shape="rect" coords="951,45,992,65" href="mailto:">
  <area shape="rect" coords="901,45,942,65" href="sub_01_05.html">
  <area shape="rect" coords="846,45,887,65" href="sub_09_01.html">
  <area shape="rect" coords="437,8,564,70" href="index.html">
  <area shape="rect" coords="793,43,834,63" href="index.html">
</map>
<!-- head -->
<? if($path1=="home"){ ?>
<? /* ?>
<!-- body -->
<!-- visual -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td <?=$XLmargin;?> <?=$Xbody_main_bg;?>></td>
<td <?=$Xbody_main_bg;?>><div <?=$Xalign;?>>
<table <?=$XW;?> border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td background="img/v_main.jpg" <?=$Xbody_main_height;?>><script>flashWrite("img/main.swf","9r300","311","flash","","", "transparent")</script></td>
      </tr>
</table>
</td></tr></table>
</td></tr></table>
<!-- visual -->
<!-- contents -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td <?=$XLmargin;?> <?=$Xbody_main_bg2;?>></td>
<td <?=$Xbody_main_bg2;?>><div <?=$Xalign;?>>
move to index.html
<? */ ?>
<? }else{ ?>

<!-- body -->
<!-- visual -->
<table width="100%" border="0" bordercolor=purple cellspacing="0" cellpadding="0"  <?=$X_sub_v_bg;?>>
<tr>
<td <?=$XLmargin;?>></td>
<td><div <?=$Xalign;?>><table <?=$XW;?> border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td <?=$X_sub_v;?>><? if(file_exists("./img/sub_flash.swf")){ ?><script>flashWrite("img/sub_flash.swf","930","164","flash","","", "transparent")</script><? } ?></td>
      </tr>
</table>
</div></td></tr></table>
<!-- visual -->


<!-- contents -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" <?=$X_sub_c_bg; ?>>
<tr>
<td <?=$XLmargin;?> <?=$Xbody_sub_bg2;?>></td>
<td <?=$Xbody_sub_bg2;?>><div <?=$Xalign;?> >
<table <?=$XW;?> border="0" cellpadding="0" cellspacing="0">
<tr>
<td <?=$XWL;?> valign="top">
<!-- left -->
<? /* ?>
<div align=center>
<? include "M/m/log_box/m.inc.php";?>
</div>
<? */ ?>
<?
$file_left="left_".$basename2.".inc.php";
include "left.inc.php";
//include "scroll.inc.php"; 
?>

<!-- left -->
       </td>
<!-- thku //-->
<?=$XWL2; ?>
<!-- thku //-->
       <td valign="top">
<!-- sub_v //-->
<!--
<? xt(25); ?>
<? $X_sub_v=" background=\"img/v_01.jpg\""; ?>
<table width="100%" border="0" bordercolor=purple cellspacing="0" cellpadding="0"  <?=$X_sub_v_bg;?>>
<tr>
<td <?=$X_sub_v;?>><? if(file_exists("./img/sub.swf")){ ?><script>flashWrite("img/sub.swf","757","203","flash","","", "transparent")</script><? } ?></td>
</tr>
</table>
//-->
<!-- sub_v //-->
<!-- content -->
<div align=center>
<!--
<script>flashWrite("f_img_01/main.swf","705","249","flash","","PageNum=<?=$PageNum;?>","transparent")</script>
//-->
<!-- content content -->
<?
if($basename=="board"){
 $bar_img="bar_$gid.gif";
}else if($basename=="XXX05_01"){
 if(!$gid) $gid="notice";
 $bar_img="bar_$gid.gif";
}else{
 $bar_img="bar_$basename.gif";
}
//$bar_img="bar_$basename.gif";

if($bar_img && file_exists("$d_root/$Ximg/$bar_img")) echo "<img src='$Ximg/$bar_img'><br>";

$file_content="c_$basename.inc.php";
if($file_content && file_exists("$d_root/$file_content")) {

  include "$file_content";

}else{

  $file_img="c_$basename.gif";
  if($file_img && file_exists("$d_root/$Ximg/$file_img")) {
	echo "<img src='$Ximg/$file_img' $usemap_file_img>";
  }else{
  	$file_img="c_$basename.jpg";
  	if($file_img && file_exists("$d_root/$Ximg/$file_img")) {
		echo "<img src='$Ximg/$file_img' $usemap_file_img>";
	}
  }

}
?>
<!-- content content-->

<? } ?>
