<?php
require_once 'core/init.php';
$id = $_GET['id'];
$gender = $_GET['gender'];

$sql = "SELECT b.brand_name, c.category, p.id, p.discount_percent, p.price, p.title, p.`image-2`, p.`image-1`, p.`image-3` FROM products p, category c, brand b WHERE c.id = '$id' AND c.id = p.category AND p.sex IN ('$gender', 'u') AND b.id=p.brand";

$result = $db->query($sql);
$categories = $db->query("SELECT * FROM category");
//$brands = $db->query("SELECT b.id, b.brand_name, FROM brand b, products p, category c WHERE b.id=p.brand AND c.id = '$id' AND c.id = p.category");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>UNTITLED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/product-list.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
    <div class="container">
        <a href="index.php" class="navbar-brand" id="brandbar">UNTITLED</a>
        <ul class="nav navbar-nav">
            <!--Drop Down Menu-->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">ЖЕНЩИНЫ<span class="caret"></span></a>

                <ul class="dropdown-menu" role="menu">
                    <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                        <li>
                            <a href="product-list.php?id=<?php echo $category['id']; ?>&gender=<?php echo urlencode('f') ?>"><?= $category['category'] ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>

            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">МУЖЧИНЫ<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <?php mysqli_data_seek($categories, 0);
                    while ($category = mysqli_fetch_assoc($categories)) : ?>
                        <li>
                            <a href="product-list.php?id=<?php echo $category['id']; ?>&gender=<?php echo urlencode('m') ?>"><?= $category['category'] ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </li>
        </ul>
        <!-- ##### Right Side Cart Area ##### -->

        <div class="right-side-cart-area">
            <!-- Cart Button -->
            <div class="cart-button">
                <a href="#" id="rightSideCart"><img src="images/elements/shopping-cart.png" alt=""> <span></span></a>
            </div>
        </div>
        <!-- ##### Right Side Cart End ##### -->
    </div>
</nav>


<!-- ##### Shop Grid Area Start ##### -->

<div class="container">
    <div class="row">
        <!--     Left side       -->
        <div class="col-12 col-md-3 col-lg-2">
            <div class="shop_sidebar_area">

                <!-- ##### Single Widget ##### -->
                <div class="widget catagory mb-50">
                    <!-- Widget Title -->
                    <h3>Categories</h3>

                    <!--  Categories  -->
                    <div class="categories-menu">
                        <!-- Single Item -->
                        <!--                                    <ul class="sub-menu collapse show" id="clothing">-->
                        <!--                                        <li><a href="#">All</a></li>-->
                        <!--                                        <li><a href="#">Bodysuits</a></li>-->
                        <!--                                        <li><a href="#">Dresses</a></li>-->
                        <!--                                        <li><a href="#">Hoodies &amp; Sweats</a></li>-->
                        <!--                                        <li><a href="#">Jackets &amp; Coats</a></li>-->
                        <!--                                        <li><a href="#">Jeans</a></li>-->
                        <!--                                        <li><a href="#">Pants &amp; Leggings</a></li>-->
                        <!--                                        <li><a href="#">Rompers &amp; Jumpsuits</a></li>-->
                        <!--                                        <li><a href="#">Shirts &amp; Blouses</a></li>-->
                        <!--                                        <li><a href="#">Shirts</a></li>-->
                        <!--                                        <li><a href="#">Sweaters &amp; Knits</a></li>-->
                        <!--                                    </ul>-->
                    </div>
                </div>

                <!-- ##### Single Widget ##### -->
                <div class="widget price mb-50">
                    <!-- Widget Title -->
                    <h3>Filter by</h3>
                    <!-- Widget Title 2 -->
                    <p class="widget-title2 mb-30">Price</p>

                    <div class="widget-desc">
                        <div class="slider-range">
                            <div data-min="49" data-max="360" data-unit="$"
                                 class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                 data-value-min="49" data-value-max="360" data-label-result="Range:">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                            </div>
                            <div class="range-price">Range: $49.00 - $360.00</div>
                        </div>
                    </div>
                </div>

                <!-- ##### Single Widget ##### -->
                <div class="widget color mb-50">
                    <!-- Widget Title 2 -->
                    <p class="widget-title2 mb-30">Color</p>
                    <div class="widget-desc">
                        <ul class="d-flex">
                            <li><a href="#" class="color1"></a></li>
                            <li><a href="#" class="color2"></a></li>
                            <li><a href="#" class="color3"></a></li>
                            <li><a href="#" class="color4"></a></li>
                            <li><a href="#" class="color5"></a></li>
                            <li><a href="#" class="color6"></a></li>
                            <li><a href="#" class="color7"></a></li>
                            <li><a href="#" class="color8"></a></li>
                            <li><a href="#" class="color9"></a></li>
                            <li><a href="#" class="color10"></a></li>
                        </ul>
                    </div>
                </div>

                <!-- ##### Single Widget ##### -->
                <div class="widget brands mb-50">
                    <!-- Widget Title 2 -->
                    <p class="widget-title2 mb-30">Brands</p>
                    <div class="widget-desc">
                        <?php while ($brand = mysqli_fetch_assoc($result)) : ?>
                            <li><a href="#"><?= $brand['brand_name'] ?></a></li>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-9 col-lg-10">
            <div class="shop_grid_product_area">
                <!--                    <div class="row">-->
                <!--                        <div class="col-12">-->
                <!--                            <div class="product-topbar d-flex align-items-center justify-content-between">-->
                <!--                                <!-- Total Products -->
                <!--                                <div class="total-products">-->
                <!--                                    <p><span>186</span> products found</p>-->
                <!--                                </div>-->
                <!--                                <!-- Sorting -->
                <!--                                <div class="product-sorting d-flex">-->
                <!--                                    <p>Sort by:</p>-->
                <!--                                    <form action="#" method="get">-->
                <!--                                        <select name="select" id="sortByselect">-->
                <!--                                            <option value="value">Highest Rated</option>-->
                <!--                                            <option value="value">Newest</option>-->
                <!--                                            <option value="value">Price: $$ - $</option>-->
                <!--                                            <option value="value">Price: $ - $$</option>-->
                <!--                                        </select>-->
                <!--                                        <input type="submit" class="d-none" value="">-->
                <!--                                    </form>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->

                <div class="row">
                    <!-- Single Product -->
                    <!--                        <div class="col-12 col-sm-6 col-lg-4" style="background-color: aquamarine">-->

                    <?php mysqli_data_seek($result, 0);
                    while ($product = mysqli_fetch_assoc($result)) : ?>
                        <div class="col-md-4">
                            <div class="mcadf">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="images/<?= $product['image-1']; ?>"
                                         onmouseover="this.src='images/<?= $product['image-2']; ?>'"
                                         onmouseout="this.src='images/<?= $product['image-1']; ?>'"
                                         alt="<?= $product['title']; ?>">
                                </div>

                                <!-- Product Description -->
                                <div class="product-description">
                                    <span class="brand"><?= $product['brand_name']; ?></span>
                                    <p class="title"><a href="details.php?id=<?php echo $product['id']; ?>">
                                            <?= $product['title']; ?>
                                        </a></p>
                                    <?php if ($product['discount_percent'] != 0) : ?>
                                        <p class="price"><span
                                                class="discount-price text-danger"><s>$<?= $product['price']; ?></s></span> $<?= round($product['price'] - ($product['price'] * $product['discount_percent']) / 100, 2); ?>
                                    <?php else : ?>
                                        <p class="price">$<?= $product['price']; ?></p>
                                    <?php endif; ?>

                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        <!-- Add to Cart -->
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!--                        </div>-->

                </div>
            </div>
            <!-- Pagination -->
            <nav aria-label="navigation">
                <ul class="pagination mt-50 mb-70">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">21</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- ##### Shop Grid Area End ##### -->


</body>