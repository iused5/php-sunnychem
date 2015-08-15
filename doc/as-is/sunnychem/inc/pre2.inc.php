<?
session_start();
require_once "/home/webhard3/public_html/pasan82/inc/conf.inc.php"; //XXXXX

if($MemberID){
}else{

 if(!$temp_member_id){

 $var_year=date(y);
 $var_month=date(m);
 $var_date=date(d);

 $var_ip=$REMOTE_ADDR;
 $var_ip=explode(".",$var_ip);

 $random_num=rand(1000,9999);
 $temp_member_id=$var_year.$var_month.$var_date.$var_ip[2].$var_ip[3].$random_num;
 setcookie("temp_member_id",$temp_member_id,0,"/");
 }

 //$MemberID=$temp_member_id;
 $member_name="Guest";
 $member_jumin="Guest";

}

$basename=basename($PHP_SELF);
$basename=eregi_replace("sub_","",$basename);
$basename=eregi_replace(".html","",$basename);
$basename2=explode("_",$basename);
$basename2=$basename2[0];

if(!$PageNum) $PageNum=$basename2;//for fixing the specific menu.


$title_text="$home_url";

$XW="width=960";//total width
$XL="width=230";//left width for left.inc.php
$XL2="width=34";
$XL2="";
$XWC=" width=730";


$XLeft_bg="";
$XLeft_bg=" background=\"img/left_menu_bg.gif\" style=\"background-repeat:no-repeat\"";
$XLeft_menu_bg=" ";
$XLeft_menu_bg=" background=\"img/left_menu_bg.gif\" height=30"; 

$Xalign="";//content align
$Xalign="align=center";//content align
$XLmargin="width=0";


$Xtop_bg=" background=\"img/top_bg.gif\"";
$Xtop_bg_main=" background=\"img/top_bg_main.gif\"";
$Xtop_height="height=30";//menu height

$Xmenu_bg=" background=\"img/menu_bg.gif\"";
$Xmenu_height="height=58";//menu height

$Xv_main_bg="";
$Xv_main_bg=" background=\"img/v_main_bg_2nd.gif\" style=\"background-repeat:no-repeat; background-position:center top\"";
$Xbody_main_bg=" background=\"img/body_main_bg.gif\"";
$Xbody_main_bg="";

$Xv_main=" ";
$Xv_main=" background='img/v_main_2nd.jpg'";

$Xbody_main_height=" height=333";

$Xv_sub_bg="";
$Xv_sub_bg=" background=\"img/v_sub_bg.gif\" style=\"background-repeat:no-repeat; background-position:center top\"";
$Xbody_sub_bg="";
$Xbody_sub_bg=" background=\"img/body_sub_bg.gif\" ";
$Xbody_sub_height=" height=125";

$Xbody_sub_bg2="";

$Xcopy_height="height=90";
$Xcopy_bg=" bgcolor=\"#000000\"";
$Xcopy_bg=" background=\"img/copy_bg.gif\"";
$Xcopy_bg="";

$Ximg="img";
?>
