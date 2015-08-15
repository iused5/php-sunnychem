<?

echo "

<table width=\"100%\" border=0 cellspacing=0 cellpadding=0>
<tr>
<td width=100% align=left  bgcolor=$out_t_bgcolor>
";

include "$d_root/inc/path.inc";

/*
if($MemberID){
echo "
&nbsp;
<font class=message>$MemberID</font>
<font class=basic_text> 님 
[<a href='log.php?log_mode=out'>EXIT</a>
";

 if($MemberLevel == "admin"){
  echo "
	::
	<a href='$home_url/admin/admin.html'>ADMIN</a>
      ";
 }

echo "
]</font>
"; 
}
*/


//include "$d_root/inc/path.inc";

echo "
</td>
<td bgcolor=$out_t_bgcolor valign=center 
 class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 onmouseover=\"this.style.background='$over_bgcolor'\" 
 onmouseout=\"this.style.background='$out_t_bgcolor'\">
<nobr>
&nbsp;<a href=\"$home_url/index.php?path1=aboutus&path2=company&dir=company4h\"><span class=menu>본사소개</span></a>&nbsp;
</nobr>
</td>
<td bgcolor=$out_t_bgcolor valign=center 
 class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 onmouseover=\"this.style.background='$over_bgcolor'\" 
 onmouseout=\"this.style.background='$out_t_bgcolor'\">
<nobr>
&nbsp;<a href=\"$home_url/index.php?content=shop\"><span class=menu>상점소개</span></a>&nbsp;
</nobr>
</td>
<td bgcolor=$out_t_bgcolor valign=center 
 class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 onmouseover=\"this.style.background='$over_bgcolor'\" 
 onmouseout=\"this.style.background='$out_t_bgcolor'\">
<nobr>
&nbsp;<a href=\"$home_url/index.php?content=product&cid=1\"><span class=menu>상품소개</span></a>&nbsp;
</nobr>
</td>
<td bgcolor=$out_t_bgcolor valign=center 
 class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 onmouseover=\"this.style.background='$over_bgcolor'\" 
 onmouseout=\"this.style.background='$out_t_bgcolor'\">
<nobr>
&nbsp;<a href=\"$home_url/index.php?path1=board&path2=free\"><span class=menu>게시판</span></a>&nbsp;
</nobr>
</td>
<!--
<td bgcolor=$out_t_bgcolor valign=center 
 class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 onmouseover=\"this.style.background='$over_bgcolor'\" 
 onmouseout=\"this.style.background='$out_t_bgcolor'\">
<nobr>
&nbsp;<a href=\"$home_url/index.php?path1=board&path2=download\"><span class=menu>자료실</span></a>&nbsp;
</nobr>
</td>
//-->

<!--
<td bgcolor=$out_t_bgcolor valign=center 
 class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 onmouseover=\"this.style.background='$over_bgcolor'\" 
 onmouseout=\"this.style.background='$out_t_bgcolor'\">
<nobr>
&nbsp;<a href=\"$home_url/index.php?path1=partner\"><span class=menu>Partner</span></a>&nbsp;
</nobr>
</td>
//-->
<td bgcolor=$out_t_bgcolor valign=center 
 class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 onmouseover=\"this.style.background='$over_bgcolor'\" 
 onmouseout=\"this.style.background='$out_t_bgcolor'\">
<nobr>
&nbsp;<a href=\"$home_url/index.php?path1=market&path2=givetake\"><span class=menu>알뜰장터</span></a>&nbsp;
</nobr>
</td>
<td bgcolor=$out_t_bgcolor valign=center 
 class=menu style=\"padding-left:5;padding-right:5;padding-top:4;padding-bottom:3\" 
 onmouseover=\"this.style.background='$over_bgcolor'\" 
 onmouseout=\"this.style.background='$out_t_bgcolor'\">
<nobr>
&nbsp;<a href=\"$home_url/index.php?path1=member\"><span class=menu>회원전용</span></a>&nbsp;
</nobr>
</td>
</tr>
<tr><td colspan=8 height=1 bgcolor=$out_t_bgcolor><img src=\"$home_url/blank.gif\"></td></tr>
</table>
";

?>
