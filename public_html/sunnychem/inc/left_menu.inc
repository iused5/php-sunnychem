<?
echo "<table width=$left_menu_width height=100% cellpadding=0 cellspacing=0>";

echo "<tr><td valign=top>";

if(
(!$path1 && !$path2) ||
$content == "product" ||
$content == "productmore" 
){

echo "<img src='$home_url/img/tit_productlist.gif'>";
echo "<br>";
require_once "$d_root/category.inc.php";

}

/*
if($MemberID){
echo "
&nbsp;<img src='$home_url/login_face.gif'>
";
	if($Level == "admin"){

echo "
 <a href='$home_url/admin/admin.html?path1=board&path2=admin_free'>
<font class=message>$MemberID</font>
 </a>
";
	}else{
echo "
<font class=message>$MemberID</font>
";
	}

echo "
<font class=basic_text>
<a href='$home_url/log.php?log_mode=out'><font class=logoff>[off]</font></a>
<br>
<a href='$home_url/member/join_form.php?mode=modify'><font class=logoff>[edit]</font></a>
</font>
";


}else{

echo "
&nbsp;<img src='$home_url/logoff_face.gif'>
<a href='$home_url/index.php?path1=member'>
<font class=logoff>Log in</font>
</a>
";
}
*/



echo "</td></tr>";
echo "<tr><td align=center valign=top height=300>";

if($path1 == "aboutus"){
 
  $herecolor=white; //로컬 메뉴텍스트 컬러
  $herecolor2=$out_t_bgcolor; //로컬 메뉴배경색
  
  echo "
  	<table width=100% cellpadding=0 cellspacing=0>
	<tr><td height=35><img src='$home_url/blank.gif'></td></tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?dir=company4h&path1=aboutus&path2=company\"><span class=menu>회사개요</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?dir=spirit4h&path1=aboutus&path2=spirit\"><span class=menu>경영이념</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?dir=org4h&path1=aboutus&path2=org\"><span class=menu>조직도</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?dir=map4h&path1=aboutus&path2=map\"><span class=menu>약도</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr><td height=35><img src='$home_url/blank.gif'></td></tr>
	</table>
  ";
}
  
if($path1 == "market"){
 
  $herecolor=white; //로컬 메뉴텍스트 컬러
  $herecolor2=$out_t_bgcolor; //로컬 메뉴배경색
  
  echo "
  	<table width=100% cellpadding=0 cellspacing=0>
	<tr><td height=35><img src='$home_url/blank.gif'></td></tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?path1=market&path2=givetake\"><span class=menu>직거래장터</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?path1=market&path2=give\"><span class=menu>팝니다</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?path1=market&path2=take\"><span class=menu>삽니다</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?path1=market&dir=m_link&content=list\"><span class=menu>관련링크</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr><td height=35><img src='$home_url/blank.gif'></td></tr>
	</table>
  ";
}


if($path1 == "board"){
 
  $herecolor=white; //로컬 메뉴텍스트 컬러
  $herecolor2=$out_t_bgcolor; //로컬 메뉴배경색
  
  echo "
  	<table width=100% cellpadding=0 cellspacing=0>
	<tr><td height=35><img src='$home_url/blank.gif'></td></tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?path1=board&path2=free\"><span class=menu>Q & A</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?path1=board&path2=rest\"><span class=menu>쉬어가기</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?path1=board&path2=download\"><span class=menu>자료실</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?path1=board&path2=news\"><span class=menu>NEWS</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr>
	<td bgcolor=$over_bgcolor valign=center align=right
     class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 	 onmouseover=\"this.style.background='$out_t_bgcolor'\" 
 	 onmouseout=\"this.style.background='$over_bgcolor'\">
	 <nobr>
	 <a href=\"$home_url/index.php?path1=board&path2=gongji\"><span class=menu>공지사항</span></a>&nbsp;
	 </nobr>
	</td>
	</tr>
	<tr><td height=1 bgcolor=$herecolor2><img src='$home_url/blank.gif'></td></tr>
	<tr><td height=35><img src='$home_url/blank.gif'></td></tr>
	</table>
  ";
}


echo "</td></tr>";
echo "<tr><td height=100% valign=bottom align=center>";
echo "$banner";
echo "</td></tr>";
echo "<tr><td height=100% valign=bottom align=right>";
/*
echo "
<table width=95% align=center cellpadding=0 cellspacing=0 >
<tr><td><img src='$home_url/nate.gif' border=0></td></tr>
<tr><td><img src='$home_url/magicn.gif' border=0></td></tr>
<tr><td><img src='$home_url/ezi.gif' border=0></td></tr>
</table>
";
*/

echo "<br><br>";
include "$d_root/counter/count.php3";
echo "&nbsp;";

echo "</td></tr></table>";
echo "<br>";

?>
