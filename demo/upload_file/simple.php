<?php
//kiểm tra nếu tồn tại file upload lên $_FILES
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name']; //lấy file name
    $file_size =$_FILES['image']['size']; //lấy kích thước file
    $file_tmp =$_FILES['image']['tmp_name']; // địa chỉ file máy pc người dùng
    $file_type=$_FILES['image']['type']; // lấy đuôi file
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    //mảng quy định những đuôi cho phép upload
    $expensions= array("jpeg","jpg","png");

    //in_array kiểm tra phần tử có nằm trong mảng hay không
    if(in_array($file_ext,$expensions)=== false){
        $errors[]="Định dạng file không chính xác, vui lòng chọn JPEG hoặc PNG.";
    }

    //kiểm tra kích thước file tối đa 2mb
    if($file_size > 2097152){
        $errors[]='Tối đa 2 MB';
    }

    if(empty($errors)==true){
        //đưa file đã upload vào thư muc image
        move_uploaded_file($file_tmp,"images/".$file_name);
        echo "Success";
    }else{
        print_r($errors);
    }
}
?>
<html>
<body>
<!-- form cho phép upload lên, file xử lý ở SERVER là chính nó simple.php (code phía trên) -->
<form action="simple.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit"/>
    <hr/>
    <?php if(isset($_FILES['image'])){ ?>
        <ul>
            <li>Sent file: <?=$_FILES['image']['name']?>
            <li>File size: <?=$_FILES['image']['size']?>
            <li>File type: <?=$_FILES['image']['type']?>
        </ul>
    <?php } ?>
</form>

</body>
</html>
