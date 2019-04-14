<?php
$lang_id=2;
if (isset($scopeIn["Lang_id"])) {
    $lang_id=$scopeIn["Lang_id"];
}
$slide_id=7;
if (isset($scopeIn["Slide_id"])) {
    $lang_id=$scopeIn["Slide_id"];
}
$res=lnxmcp()->queryJsonR("listSlidebyId",array("slide_id"=>$slide_id,"lang_id"=>$lang_id),"OpenCart","UEC");
foreach ($res as $row) :
    $rowblk=str_replace("{link}",$row["link"],$scopeIn["blockIn"]);
    $rowblk=str_replace("{image}",$row["image"],$rowblk);
    echo  $rowblk;
endforeach;
