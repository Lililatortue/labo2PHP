<?php

require "fromfile.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
 $reader=  new filereader("test.txt");
 $reader->Readfile();
}

?>