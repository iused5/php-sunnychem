<?
 session_start();
 //echo "=$user =$home_url";exit;//thku
 include "inc/conf.inc.php";
// include "inc/common.inc.php";
// include "inc/connect.inc.php";
 $CodeIN="log";
 include "M/local_conf.inc.php"; //$member_table

///////////////////////////////////////////////////////////log_mode
 if($log_mode=="in"){

/*
  if($member_id != "admin"){
   echo "잠시 공사중입니다. 오후2시부터 이용해주시기 바랍니다. "; 
   exit;
  }
*/

  if(!$member_id || !$passwd) alert("아이디와 패스워드를 입력하세요"); 
    $q="
select id,member_level,name,email,jumin1,jumin2,tel1,tel2,tel3,cp1,cp2,cp3,homepage,sex,show_YN from $s_table
where member_id='$member_id' and passwd=password('$passwd')
    ";
  //echo "=$q";exit;//thku
  $result=@mysql_query($q);
  $ok=mysql_num_rows($result);
  if($ok){
    
  $show_YN=mysql_result($result,0,14); 
  if($show_YN=="N"){ echo "<script>window.alert('$exp_show_YN_N_IN_LOG');location.href='$home_url';</script>";exit; } 

  $q4update_ip="update $s_table set ip='$REMOTE_ADDR',update_date=now() where member_id='$member_id'";
  $r4update_ip=@mysql_query($q4update_ip);
  //echo "=$q4update_ip";exit;//thku
  if($r4update_ip){

    $ADPKMemberID=$member_id;
    $member_level=mysql_result($result,0,1); 
    $ADPKMemberLevel = $member_level;
    $name=mysql_result($result,0,2); 
    $ADPKMemberName=$name;
    $email=mysql_result($result,0,3); 
    $ADPKMemberEmail=$email;
    $jumin1=mysql_result($result,0,4); 
    $jumin2=mysql_result($result,0,5); 
    $ADPKMemberJumin="$jumin1-$jumin2";
    $tel1=mysql_result($result,0,6); 
    $tel2=mysql_result($result,0,7); 
    $tel3=mysql_result($result,0,8); 
    $ADPKMemberTel1="$tel1";
    $ADPKMemberTel2="$tel2";
    $ADPKMemberTel3="$tel3";
    $cp1=mysql_result($result,0,9); 
    $cp2=mysql_result($result,0,10); 
    $cp3=mysql_result($result,0,11); 
    $ADPKMemberCp1="$cp1";
    $ADPKMemberCp2="$cp2";
    $ADPKMemberCp3="$cp3";
    $homepage=mysql_result($result,0,12); 
    $ADPKMemberHomepage=$homepage;
    $sex=mysql_result($result,0,13); 
    $ADPKMemberSex=$sex;
    $id=mysql_result($result,0,0);
    $ADPKID=$id;
    $ADPKIP=$REMOTE_ADDR;

    session_register("ADPKMemberName");
    session_register("ADPKMemberEmail");
    session_register("ADPKMemberJumin");
    session_register("ADPKMemberLevel");
    session_register("ADPKMemberID");
    session_register("ADPKMemberTel1");
    session_register("ADPKMemberTel2");
    session_register("ADPKMemberTel3");
    session_register("ADPKMemberCp1");
    session_register("ADPKMemberCp2");
    session_register("ADPKMemberCp3");
    session_register("ADPKMemberHomepage");
    session_register("ADPKMemberSex");
    session_register("ADPKID");
    session_register("ADPKIP");

    }else{
	alert("system error : 100");
    }

  }else{ 
	alert("아이디와 패스워드를 확인해주세요"); }

/*
	 if($re_url){
	   $re_url=rawurldecode($re_url);
	   echo(" <meta http-equiv='Refresh' content='0; url=$re_url'> "); 
	   exit;
	 }else{
	   echo(" <meta http-equiv='Refresh' content='0; url=$home_url'> "); 
	   exit;
	 }
*/

if($QuickDeal_YN=="Y"){
   echo(" <meta http-equiv='Refresh' content=\"0; url='$home_url/QuickDeal/arrange.inc.php?gid=time&member_id=$member_id'\"> ");
   exit;
}else{
   echo(" <meta http-equiv='Refresh' content=\"0; url='$home_url/$url_index'\"> ");
   exit;
}

///////////////////////////////////////////////////////////log_mode
 }else if($log_mode=="out"){
   session_start(); //need
   session_unregister("ADPKMemberName");
   session_unregister("ADPKMemberEmail");
   session_unregister("ADPKMemberLevel");
   session_unregister("ADPKMemberJumin");
   session_unregister("ADPKMemberID");
   session_unregister("ADPKMemberTel1");
   session_unregister("ADPKMemberTel2");
   session_unregister("ADPKMemberTel3");
   session_unregister("ADPKMemberCp1");
   session_unregister("ADPKMemberCp2");
   session_unregister("ADPKMemberCp3");
   session_unregister("ADPKMemberHomepage");
   session_unregister("ADPKMemberSex");
   session_unregister("ADPKID");
   session_unregister("ADPKIP");

/*
 if($re_url){
   $re_url=rawurldecode($re_url);
   echo(" <meta http-equiv='Refresh' content==\"0; url='$re_url'\"> "); 
   exit;
 }else{
   echo(" <meta http-equiv='Refresh' content=\"0; url='$home_url'\"> "); 
   exit;
 }
*/

if($QuickDeal_YN=="Y"){
   echo(" <meta http-equiv='Refresh' content=\"0; url='$home_url/QuickDeal/arrange.inc.php?log_mode=out'\"> ");
   exit;
}else{
   echo(" <meta http-equiv='Refresh' content=\"0; url='$home_url/$url_index'\"> ");
   exit;
}


}
?>
