<?php if(c("openDlg1")->execute()){
$data = c("openDlg1")->fileName;
$Len = strlen($data);
if($data[$Len-3].$data[$Len-2].$data[$Len-1] == "kpp"){
file_copy(c("openDlg1")->fileName,DOC_ROOT."pl/".basename(c("openDlg1")->fileName));
}
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
c("listBox1")->items->selected = basename(c("openDlg1")->fileName);
$data = file_get_contents(c("openDlg1")->fileName);
eval($data);
}
