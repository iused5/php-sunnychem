<!-- left -->
<div align=center>
<table <?=$XWLC; ?> border="0" cellspacing="0" cellpadding="0">
<? if(file_exists("img/left_$basename2.swf")){ ?>
<!-- left_01.swf //-->
<?
 if($basename2=="01"){$swf_left_height="60"; }
 if($basename2=="03"){$swf_left_height="90"; }
 if($basename2=="board"){$swf_left_height="60"; }
?>
<tr><td background="img/left_menu_bg.gif"><script>flashWrite("img/left_<?=$basename2;?>.swf","210","<?=$swf_left_height;?>","flash","","","transparent")</script></td></tr>

<? }else{ ?>
<!-- left_01.inc.php //-->
<? 
/*
if($basename2=="board"){
 include "left_board.inc.php";
}else if($basename2=="online"){
 include "left_board.inc.php";
}else if($basename2=="about"){
 include "left_about.inc.php";
}else{
if($file_left && file_exists("$d_root/$file_left")) include "$file_left"; 
}
*/

//$file_left="left_01.inc.php";
//if(!$file_left) { $file_left="left_".$basename2.".inc.php";}
if($file_left && file_exists("$d_root/$file_left")) include "$file_left"; 

?>
<? } ?>
<!--
<tr><td>
<img src="img/left.gif" border=0 usemap="#map_left">
<map name="map_left">
  <area shape="rect" coords="145,197,200,253" href="sub_01_01.html?basename=01_05">
  <area shape="rect" coords="78,198,133,254" href="sub_05_01.html"><area shape="rect" coords="7,197,62,253" href="sub_05_02.html">
</map>
</td></tr>
//-->
</table>
</div>
<!-- left -->
