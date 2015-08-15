<?
//echo "admin menu =$MemberLevel =$FirstAdminLevel =$EngMemberLevel ";//thku

if($MemberLevel == $FirstAdminLevel){
echo "
<table width=100% cellspacing=0 cellpadding=0 border=0 bgcolor=336699>
<tr>
<td height=50>
&nbsp;
<a href='$home_url/$url_index' class=admin_menu>
$home_url
</a>
</td>
<td>
<div align=right>
<nobr>
<a href='$home_url/B/admin.html?gid=news'  class=admin_menu>
¢Á
News
</a>
&nbsp;
<a href='$home_url/B/admin.html?gid=qna'  class=admin_menu>
¢Á
Q&A
</a>
&nbsp;
<a href='$home_url/B/admin.html?gid=aa'  class=admin_menu>
¢Á
ÇÑº¹°¶·¯¸®
</a>
&nbsp;
";

if($url_log=="simple_log"){
echo "
<a href=\"$home_url/simple_log.php?log_mode=out\"  class=admin_menu>
¢Á
·Î±×¾Æ¿ô
</a>
&nbsp;
";
}else{
echo "
<a href=\"$home_url/log.php?log_mode=out\"  class=admin_menu>
¢Á
·Î±×¾Æ¿ô
</a>
&nbsp;
";
}

echo "
</nobr>
</div>
</td>
</tr>
</table>
";
}else{

//echo "=ddd";exit; //thku

/*
 echo "
<script>
window.alert('Only Admin ~');
location.href='$home_url';
</script>
";
*/
if($url_log=="simple_log"){
 echo "
<script>
location.href='$home_url/quickds_admin/intro.html';
</script>
";
}else{
 echo "
<script>
location.href='$home_url';
</script>
";
}


}
?>
