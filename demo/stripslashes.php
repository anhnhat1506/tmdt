<?php
 //hàm stripslashes sẽ loại bỏ backslashes(\) trong chuỗi . (\ 'sẽ trở thành ', \\ sẽ trở thành \)
// Hàm trả về chuỗi kí tự backslashes đã bị loại bỏ
$str= 'Xin chao minh ten \n  \"Nhat\"';
echo $str."<br/>";
echo stripslashes($str);

?>