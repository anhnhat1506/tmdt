<html>
    <head>Đọc File Trong PHP</head>
    <body>
        <?php

            $filename = "git.txt";
            $file= fopen($filename, "r");
            //nếu file ko mở đc hiển thị xảy ra lỗi
            if($file==false){
                echo("Xảy ra lỗi khi mở file!!!");
                exit();
            }
            $filesize = filesize($filename);
            $filetext = fread($file, $filesize);
            fclose($file);
            echo ( "Kích cỡ của file là: $filesize byte <br>" );
            echo ( "Dưới đây là nội dung của file: <br>" );
            echo ( "<pre>$filetext</pre>" );
        ?>
    </body>
</html>