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

 alertngo("2007�⵵ Ȩ�������Դϴ�. \\n2007�⵵�� �´� ������ �ٽ� �Է����ֽñ� �ٶ��ϴ�. \\n��Ȯ�� �Է��ؾ� ���񽺸� ���������� �� �ֽ��ϴ�.", "$home_url/member.html?include=form&mode=modify");
 exit;
}
*/

}
?>
