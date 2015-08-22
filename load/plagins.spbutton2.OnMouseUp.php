<?php global $delete;
$delete = 1;
file_delete(DOC_ROOT."pl/".c("listBox1")->items->selected);
dir_search("pl/", $x, ".kpp", false, false);
c("listBox1")->text = $x;
c("listBox1")->items->add("Export.kpp");
c("listBox1")->items->selected = "Export.kpp";
$i = c("listBox1")->itemIndex;
$data = c("listBox1")->items->count - 1;
if($i > 0){
 global $list;
 $arr = explode(_BR_, c("listBox1")->text);
 $v1 = $arr[$i];
 $v2 = $arr[$i-$data];
 $arr[$i-1] = $v1;
 $arr[$i] = $v2;
 c("listBox1")->text = implode(_BR_, $arr);
 c("listBox1")->itemIndex = $i-$data;

 $v1 = $list[$i];
 $v2 = $list[$i-$data];
 $list[$i-$data] = $v1;
 $list[$i] = $v2;
}
