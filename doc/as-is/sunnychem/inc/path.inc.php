<?
if($content_file == "cnr.inc.php"){ //3단 자리이면...
 //$w4h = $center_width;
 $w4h = "98%";
}else{
 //$w4h = $content_width;
 $w4h = "98%";
}
$icon_in_path="::";

echo "
<table width='$w4h' border=0 cellpadding=0 cellspacing=0>
<tr>
<td align=left width=20> 
$icon_in_path
</td><td align=left>
<a href='$home_url'>
<font class=basic>Home</font>
</a>
&nbsp;&gt;&nbsp;
";

if($path0 == "admin"){
}else{//if path0 is

 if($path1=="member"){
  echo "
	<font class=basic>Member</font>
	&nbsp;&gt;&nbsp;
  ";
 }else if($path1=="board"){
  echo "
	<font class=basic>Board</font>
	&nbsp;&gt;&nbsp;
  ";
   if($path2=="free"){
  	echo "
	 <font class=basic>자유게시판</font>
	 &nbsp;&gt;&nbsp;
	";
   }else if($path2=="gongji"){
  	echo "
	 <font class=basic>공지사항</font>
	 &nbsp;&gt;&nbsp;
	";
   }else if($path2=="news"){
  	echo "
	 <font class=basic>뉴스</font>
	 &nbsp;&gt;&nbsp;
	";
   }
   

 }

}//if path0 is 

echo "</td></tr></table>";
?>

