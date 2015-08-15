<?
 if($path1 == "member"){
 }else if($path1 == "board"){
    require_once "$d_root/quick_board/local_conf.inc.php";
    $dir="quick_board";
    if($path2 == "news"){
	$table=$news_table;
    }
    $content_file="intro.php";
 }else{//if $path1 is not
   if($content){
       $content_file=$content.".inc.php";
   }else{//if $content 
       $dir="quickds_admin";
       $content_file="home.inc.php";
   }//if $content
 }//if $path1 is


if($dir){
 include "$d_root/$dir/$content_file";
}else{
  include "$d_root/$content_file";
}

?>
