<?
 session_start();
 include "./inc/conf.inc.php";
 require_once "./inc/common.inc.php";
 require_once "./inc/connect.inc.php";
///////////////////////////////////////////////////////////log_mode
 if($log_mode=="in"){
  if(!$member_id || !$passwd) alert("아이디와 패스워드를 입력하세요");
  if($member_id=="$admin_id" && $passwd == "$admin_pw"){
    $ADPKMemberID=$member_id;
    $ADPKMemberLevel="ADPKFIRST";
    session_register("ADPKMemberLevel");
    session_register("ADPKMemberID");
  }else{
        alert("아이디와 패스워드를 확인해주세요"); }

         if($re_url){
           $re_url=rawurldecode($re_url);
           echo(" <meta http-equiv='Refresh' content='0; url=$re_url'> ");
           exit;
         }else{
           echo(" <meta http-equiv='Refresh' content='0; url=index.html'> ");
           exit;
         }
///////////////////////////////////////////////////////////log_mode
 }else if($log_mode=="out"){
   session_start(); //need
   session_unregister("ADPKMemberLevel");
   session_unregister("ADPKMemberID");
 if($re_url){
   $re_url=rawurldecode($re_url);
   echo(" <meta http-equiv='Refresh' content==\"0; url='$re_url'\"> ");
   exit;
 }else{
   echo(" <meta http-equiv='Refresh' content=\"0; url=index.html\"> ");
   exit;
 }

}
?>
