<?
function xt($a){
 echo "<table cellpadding=0 cellspacing=0><tr><td height=$a></td></tr></table>";
}


function test(){
global $TEST_ADDR,$REMOTE_ADDR;
if($REMOTE_ADDR == $TEST_ADDR){
 //echo "<script>window.alert('=$REMOTE_ADDR =$TEST_ADDR')</script>";
 return 1;
}else{
 return 0;
}
}

function protect_email($a){

 global $home_url;
 //$b=eregi_replace("@","<img src='$home_url/img/at.gif' border=0>",$a);
 $b=eregi_replace("@","@",$a);
 return "$b";
}
function protect_email_notice(){
 global $home_url;
echo "<img src='$home_url/img/at.gif'> 이메일을 추출프로그램으로부터 보호합니다.";
}
//==================================================================

if($charset == "utf-8"){

function str_cut($str, $len, $checkmb=false, $tail='...') { 
  preg_match_all('/[\xEA-\xED][\x80-\xFF]{2}|./', $str, $match); 
  $m    = $match[0]; 
  $slen = strlen($str);  // length of source string 
  $tlen = strlen($tail); // length of tail string 
  $mlen = count($m);    // length of matched characters 

  if ($slen <= $len) return $str; 
  if (!$checkmb && $mlen <= $len) return $str; 
  
  $ret  = array(); 
  $count = 0; 
  
  for ($i=0; $i < $len; $i++) { 
    $count += ($checkmb && strlen($m[$i]) > 1)?2:1; 
    if ($count + $tlen > $len) break; 
    $ret[] = $m[$i]; 
  } 
  return join('', $ret).$tail; 
} 

}else{

//한글도 안깨지게 문자열 자르는 함수 2001.9.3
function str_cut($val, $cut_len){ 
  
  $tot_len = strlen($val); 
  $cut_str = substr($val,0,$cut_len); 
  $len = strlen($cut_str); 
  
  for($i=0;$i < $len;$i++){ 
  
  if(ord($val[$i]) > 127){ $hanlen++; } 
  else{ $englen++; } 
  
  } 
  
  $cut_gap = $hanlen %2; 
  
  if($cut_gap == 1){ $hanlen--; } 
  $length=$hanlen + $englen; 
  
  if($tot_len > $length){ return substr($val,0,$length).".."; } 
  else{ return substr($val,0,$length); } 
} 

}

function str_cut2($val, $cut_len){

  $tot_len = strlen($val);
  $cut_str = substr($val,0,$cut_len);
  $len = strlen($cut_str);

  for($i=0;$i < $len;$i++){

  if(ord($val[$i]) > 127){ $hanlen++; }
  else{ $englen++; }

  }

  $cut_gap = $hanlen %2;

  if($cut_gap == 1){ $hanlen--; }
  $length=$hanlen + $englen;

  if($tot_len > $length){ return substr($val,0,$length)."O"; }
  else{ return substr($val,0,$length); }
}




//한글은 말도 못하게 깨지는 문자열 자르는 함수
function string_cut($string,$cut_size)
{
 $len=strlen($string);

  for($i=0;$i<$len;$i++){

  $string_cut=substr($string,$i,1);
  $string_array[$i]=$string_cut;

  }
  for($i=0;$i<$cut_size;$i++)
  {
   $exp_string .= "$string_array[$i]";
  }

  if($len > $cut_size) {
         return "$exp_string"." ...";
  }else{
         return "$exp_string";
  }
}

function make_bold($bold){
        echo("<b>$bold</b>");
        return 1;
}

function is_num($num){
        if(ereg("^\-?[0-9]+$",$num)){
                        return 1;
                }
        else
                return 0;
}

function only_alert($message){
echo "
<script>
window.alert('$message');
</script>
";
}

function alert($message,$history_go='history.go(-1)',$is_exit=''){
 echo "
   <script>
    window.alert('$message');
    $history_go
   </script>
 ";
 if(!$is_exit){
   exit;
 }
}

function alertngo($message,$go_url=''){
 global $home_url;
 if($go_url=="go_1" || !$go_url){
 echo "
   <script>
    window.alert('$message');
    history.go(-1);
   </script>
 ";
 exit;

 }else{

 echo "
   <script>
    window.alert('$message');
    location.href='$go_url';
   </script>
 ";
 exit;

 }

}

function justgo($go_url){
 global $home_url;
 if($go_url=="go_1"){
 echo "
   <script>
    window.alert('$message');
    history.go(-1);
   </script>
 ";
 exit;

 }else{

 echo "
   <script>
    location.href='$go_url';
   </script>
 ";
 exit;
 }
}

function confirm($msg){
         echo("
        <script language=javascript>
        window.confirm('$msg');
        </script>
        ");
}
function refresh($url,$time=0){
        echo("
        <meta http-equiv='Refresh' content='$time; url=$url'>
        ");
        exit;
}


//==================================================================
//시간/날짜 관련

$True = 1;
$False = 0;
$True = 1;
$False = 0;

//윤년체크
function Leap_Year($year) {
        Global $True, $False;

        //년도를 4자리로 바꾼다
        $year += 1900;

        //4로 나누어서 나머지가 0 이면 윤년
        //이중에서 100으로 나누어서 나머지가 0이면 윤년 아니고
        //이중에서 400으로 나누어서 나머지가 0이면 윤년
        if($year % 4 == 0) {
                if($year % 100 == 0) {
                        if($year % 400 == 0) {
                                return $True;
                        }
                        else {
                                return $False;
                        }
                }
                else {
                        return $True;
                }
        }
        else {
                return $False;
        }
}
function Check_Day($year,$month,$day) {

        Global $True,$False;
        $ERROR_DAY="주민등록번호의 날짜 입력이 정확하지 않습니다.";

        //월 입력이 정확한지 검사
        if($month < 1 || $month > 12) {
                return "주민등록번호의 월이 정확하지 않습니다";
        }

        switch($month) {
        case 1 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 2 :
                if(Leap_Year($year) == $True) {
                        if($day > 29)
                                return $ERROR_DAY;
                        else return $True;
                }
                else {
                        if($day > 28)
                                return $ERROR_DAY;
                        else
                                return $True;
                }
                break;
        case 3 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
 	case 4 :
                if($day > 30)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 5 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 6 :
                if($day > 30)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 7 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 8 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 9 :
                if($day > 30)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 10 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 11 :
                if($day > 30)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 12 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        }
}
function ctznnum_check($citizen_num)
{
        Global $True,$False;

        //전체 자릿수 검사
        if(strlen($citizen_num) != 14) {
                return "주민등록번호 자릿수가 올바르지 않습니다";
        }

        //정확한 위치에 "-"가 있는지 검사
        if( substr($citizen_num,6,1) != "-") {
                return "주민등록번호에 '-'를 넣어주세요";
        }

        //생년, 월, 일 추출
        //

        $Bi_Year = intval( substr( $citizen_num, 0, 2));
        $Bi_Month = intval( substr( $citizen_num, 2, 2));
        $Bi_Date = intval( substr( $citizen_num, 4, 2));

        //성별코드가 정확한지 검사
        if(substr($citizen_num,7,1) != "1" && substr($citizen_num,7,1) != "2")
                return "주민등록번호 성별 코드가 정확하지 않습니다.";

        for( $i=0; $i<14;$i++)
        {
                //주민등록번호가 숫자로 정확하게 입력이 되었는지 검사
                if( $i!=6 && ( substr($citizen_num,$i,1) < "0" || substr($citizen_num,$i,1) > "9")) {
                        return "주민등록번호에 정확한 숫자를 적어주세요";
                }

                //주민등록 끝자리 코드 검사
                if( $i < 6)
                        $Sum += intval(substr($citizen_num,$i,1))*($i+2);
                if( $i > 6 && $i < 9 )
                        $Sum += intval(substr($citizen_num,$i,1))*($i+1);
                if( $i > 8 && $i < 13)
                        $Sum += intval(substr($citizen_num,$i,1))*($i-7);
        }

        //년, 월, 일 입력이 정확한지 검사해서 리턴
        $return=Check_Day($Bi_Year,$Bi_Month,$Bi_Date);

        if ( $return != $True )
                return $return;

	//끝자리 코드 계산
        $Mod=11-($Sum%11);
        if((11-($Sum%11))>=10)
                $Mod-=10;

        //계산 한것과 끝자리 코드가 일치하지 않으면 에러
        if( $Mod != intval(substr($citizen_num,13))) {
                return "주민등록번호 코드가 정확하지 않습니다";
        }
        else {
                return "ok";
        }
}
//if(date("d") > 27) exit;



//바당- 채용관리부분에서 사용하는 함수들 모음 시작
function find_companyname($findpeople_id)
{
        $search_query="select company_name from findpeople_member where member_id='$findpeople_id'";
//echo "$search_query";
        $result=mysql_query($search_query) or die(mysql_error());
        $result2=mysql_fetch_row($result);
        return ($result2[0]);
}

function find_companyname1($findpeople_id)
{
        $search_query="select company_name from findpeople_member where findpeople_id='$findpeople_id'";
//echo "$search_query";
        $result=mysql_query($search_query) or die(mysql_error());
        $result2=mysql_fetch_row($result);
        return ($result2[0]);
}

function find_personname($findjob_id)
{
        $search_query="select name from findjob_member where member_id='$findjob_id'";
//      echo "qqq=$search_query";
        $result=mysql_query($search_query) or die(mysql_error());
        $result2=mysql_fetch_row($result);
        return ($result2[0]);
}

function find_personname1($findjob_id)
{
        $search_query="select name from findjob_member where findjob_id='$findjob_id'";
//      echo "qqq=$search_query";
        $result=mysql_query($search_query) or die(mysql_error());
        $result2=mysql_fetch_row($result);
        return ($result2[0]);
}

function errormsg($string){
      echo ("
            <script language=\"javascript\">
            <!--
               alert(\"$string\");
               history.go(-1);
                                //-->
            </script>
            ");
        exit;
}

?>
