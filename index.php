<?php
include "./mysql/config.php";

//seo title
$GB_PAGE_TITLE = 'THƯƠNG MẠI ĐIỆN TỬ';


//filter
var_dump($_REQUEST);
$category_id = -1;

if(isset($_REQUEST['category_id'])){
    $category_id = $_REQUEST['category_id'];
}

$brand_id = -1;
if(isset($_REQUEST['brand_id'])){
    $brand_id = $_REQUEST['brand_id'];
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include "./layout/header.php"?>
    <link href="./css/index.css" rel="stylesheet">
  </head>
<!--Chan v2xxl zzzzzzzzzzzz-->
  <body>
  <!--vuong coi-->
    <!--hom nay toi buon-->
    <!-- Navigation -->
   <?php include "./layout/nav.php";?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
        <?php
            //select * from brand
            $all_brand=$db->fetch_all('brand');
            //select * from category
            $all_category=$db->fetch_all('category');
            //select * from category
            if($category_id!=-1){
                //san pham theo category
                $all_product=$db->fetch_multi_row('product',array('product_id','name','price','main_photo','category_id','brand_id','introduce'),array('category_id'=>$category_id));
            }elseif($brand_id!=-1){
                //san pham theo brand
                $all_product= $db->fetch_multi_row('product',array('product_id','name','price','main_photo','category_id','brand_id','introduce'),array('brand_id'=>$brand_id));
            }else{
                //tat ca san pham
                $all_product=$db->fetch_all('product');
            }
        ?>
        <h1 class="my-4">Brand</h1>
        <div class="list-group brand-list" id="brand-list">
            <a href="index.php" class="list-group-item">- ALL -</a>
            <?php
                foreach ($all_brand as $item) {
                    echo '<a href="index.php?brand_id='.$item->brand_id.'" class="list-group-item"><img src="'.$item->sm_logo.'"/>'.$item->name.'</a>';
                }
            ?>
        </div>
        <h1 class="my-4">Category</h1>
        <div class="list-group category-list" id="category-list">
            <a href="index.php" class="list-group-item">- ALL -</a>
            <?php
            foreach ($all_category as $item){
                ?>
                    <a href="index.php?category_id=<?=$item->category_id?>" class="list-group-item"><?=$item->name?></a>
                <?php
            }
            ?>
        </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="row">
              <?php
                foreach ($all_product as $item){
                   ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <a href="#"><img class="card-img-top" src="<?=$item->main_photo?>" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detail.php?product_id=<?=$item->product_id?>"><?=$item->name?></a>
                                </h4>
                                <h5><?=number_format($item->price,0,"",".")?></h5>
                            </div>
                        </div>
                    </div>
                    <?php
                }
              ?>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <?php
        include "./layout/footer.php";
    ?>
  </body>

</html>
