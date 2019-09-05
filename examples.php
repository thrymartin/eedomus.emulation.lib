<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require("eedomus.lib.php");
/*
$jsonExemple = '{"menu": {
  "id": "file",
  "value": "File",
  "popup": {
    "menuitem": [
      {"value": "New", "onclick": "CreateNewDoc()"},
      {"value": "Open", "onclick": "OpenDoc()"},
      {"value": "Close", "onclick": "CloseDoc()"}
    ]
  }
}}';
echo jsonToXML($jsonExemple);

$string = <<<XML
<a>
 <b>
  <c>stuff</c>
 </b>
 <d>
  <c>code</c>
 </d>
</a>
XML;

echo xpath($string,'/a/b/c');*/

echo sdk_get_input();


?>
