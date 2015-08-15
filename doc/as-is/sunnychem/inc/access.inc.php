<? 
if($block_ip_YN=="Y"){

$a="select ta1 from $table_ip";
//echo "=$a";
$b=mysql_query($a);
$c=mysql_fetch_array($b);

if (eregi($REMOTE_ADDR, $c[ta1])) {
 echo "<script>window.alert('ACESS ERROR #456');location.href='../index.html';</script>";
}else{
}

}

if($MemberID && $path1 == "home"){

/*
$a="select r1,s1 from seg_member where member_id='$MemberID'";
$b=mysql_query($a);
$c=mysql_fetch_array($b);

if($c[r1]){

}else{

 alertngo("2007년도 홈페이지입니다. \\n2007년도에 맞는 정보를 다시 입력해주시기 바랍니다. \\n정확히 입력해야 서비스를 제공받으실 수 있습니다.", "$home_url/member.html?include=form&mode=modify");
 exit;
}
*/

}
?>
