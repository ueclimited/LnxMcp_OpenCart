<?php 
$lang_id=2;
if (isset($scopeIn["Lang_id"])) {
    $lang_id=$scopeIn["Lang_id"];
} 
$res=lnxmcp()->queryJsonR("listCategoryDefLang",array("lang_id"=>$lang_id),"OpenCart","UEC");
//lnxmcp()->Rem($scopeIn);
//lnxmcp()->Rem($res); 
foreach ($res as $row) :
    $cat_id = $row["parent_id"]."_".$row["category_id"];
    $rowblk=str_replace("{cat_id}",$cat_id,$scopeIn["blockIn"]);
    $rowblk=str_replace("{label}",$row["name"],$rowblk);
    echo  $rowblk;
endforeach; 
