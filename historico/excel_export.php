<?php 
 
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = $_POST['fileName']; 
$excelData = $_POST['excel']; 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\"");
echo chr(255).chr(254).iconv("UTF-8", "UTF-16LE//IGNORE", $excelData); 
 
// Render excel data 
echo $excelData; 
 
exit;