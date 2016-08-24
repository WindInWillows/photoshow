 <form action="admin/update.php" method="post" enctype="multipart/form-data" >
    <input type="file" name="index_head">
    <input type="submit" value="替换" />
    <?php 
        $url =  "http://".$_SERVER ['HTTP_HOST'].$_SERVER['PHP_SELF'];
//         echo $url;
        echo '<input type="hidden" name="url" value="'.$url.'" />';
    ?>
    </form>
    
<!-- <form action="admin/update.php" method="post" enctype="multipart/form-data" > -->
<!--     <input type="file" name="index_head"> -->
<!--     <input type="submit" value="替换" /> -->

<!--     </form> -->