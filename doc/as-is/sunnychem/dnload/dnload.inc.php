<?
$file_name=$fn;
$file_name2=$fn2;
$file_path="$file_name";
//$file_name2="바벨탑.doc";
if(!$file_name2) $file_name2=$file_name;
header("Content-Type: application/octet-stream");
Header("Content-Disposition: attachment;; filename=$file_name2");
header("Content-Transfer-Encoding: binary");
Header("Content-Length: ".(string)(filesize($file_path)));
Header("Cache-Control: cache, must-revalidate"); //<--파일열기를 위한 캐시컨트롤!!!(지송빠트렸었네요!!!)
header("Pragma: no-cache");
header("Expires: 0");
$fp = fopen($file_path,'r+b') ;
if (!fpassthru($fp)) {
fclose($fp);
}
?>
