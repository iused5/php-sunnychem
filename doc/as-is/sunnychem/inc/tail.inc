<?
mysql_close($connect);

echo("
<center>

<table width=100% border=0 cellspacing=0 cellpadding=0 align=center>
<tr bgcolor=$out_t_bgcolor>
<td height=20 align=center>
<font color=white size=2 class=menu>
Copyright 2002. 
</font>
&nbsp;



<font class=basic_text>
<script language=\"JavaScript1.2\">
//아래의 message의 문자열을 수정하면된다.
var message=\"$site_name\"
var neonbasecolor=\"white\" // 원래 문자색
var neontextcolor=\"orange\" // 바뀌고난후 문자색
var flashspeed=100  

var n=0
if (document.all){
document.write('<font color=\"'+neonbasecolor+'\">')
for (m=0;m<message.length;m++)
document.write('<span id=\"neonlight\">'+message.charAt(m)+'</span>')
document.write('</font>')

var tempref=document.all.neonlight
}
else
document.write(message)

function neon(){

if (n==0){
for (m=0;m<message.length;m++)
tempref[m].style.color=neonbasecolor
}

tempref[n].style.color=neontextcolor

if (n<tempref.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout(\"beginneon()\",1500)
return
}
}

function beginneon(){
if (document.all)
flashing=setInterval(\"neon()\",flashspeed)
}
beginneon()
</script>
</font>



&nbsp;
<font class=menu size=2>
All Rights Reserved.
&nbsp;
<a href=\"mailto:$admin_email2\"><font color=white size=2 class=menu>$admin_email1</size></a>
</font>
");
echo("
</td></tr>
</table>

</center>

</td></tr></table>
</body>
</html>
");
?>

