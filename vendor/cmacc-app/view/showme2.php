<?php

$htmlHead = `perl $lib_path/parser-head.pl $path/$dir`;

if (strlen($htmlHead) > 5){ 

  echo $htmlHead;
}

 else {
   echo "<!DOCTYPE html><head><title>$dir</title><link  href='Doc/Z/CSS/Doc.css' rel='stylesheet' /></head><body>";
 }


include("$lib_path/view-tabs.php");
 
echo "<hr>";

$lib_path = LIB_PATH;

$document = `perl $lib_path/parser-showme2.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

$document=str_replace("{","<span class='missing'>{",$document);

$document=str_replace("}","}</span>",$document);

  echo $document;}
 else {
   echo "Nothing to Show";

}
?>