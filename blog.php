<?php
$page = 'blog';

include_once("_header.php");
?>

        <!-- page-title -->
        <div class="page-title" style="background-image: url(images/section/page-title-02.png);">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center">Blog</h3>

                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li><a class="link" href="index.html">Págia inicial</a></li>
                            <li><i class="icon-arrRight"></i></li>
                            <li><a class="link" href="#">Blog</a></li>
                            <li><i class="icon-arrRight"></i></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- blog-default -->
        <div class="main-content-page">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 mb-lg-30">

                        <div class="wg-blog hover-image mb_40">
                            <div class="image">
                                <img class="lazyload" data-src="images/blog/blog-default-1.jpg" src="images/blog/blog-default-1.jpg" alt="">
                            </div>

                            <div class="content">
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-10">
                                    <div class="meta">
                                        <div class="meta-item gap-8">
                                            <div class="icon">
                                                <i class="icon-calendar"></i>
                                            </div>

                                            <p>28 Fevereiro 2024</p>
                                        </div>

                                        <div class="meta-item gap-8">
                                            <div class="icon">
                                                <i class="icon-user"></i>
                                            </div>

                                            <p>por: <a class="link" href="#">Themesflat</a></p>
                                        </div>
                                    </div>

                                    <div class="meta">
                                        <div class="meta-item gap-4">
                                            <div class="icon">
                                                <i class="icon-comment"></i>
                                            </div>

                                            <p>12</p>
                                        </div>

                                        <div class="meta-item gap-4">
                                            <div class="icon">
                                                <i class="icon-eye"></i>
                                            </div>

                                            <p>260.2K</p>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="title fw-5">
                                    <a class="link" href="./blog-post">The Ultimate Guide to the Top 5 Fashion Trends for Summer 2024</a>
                                </h4>

                                <div class="body-text-1">Discover the top fashion trends for Summer 2024, from vibrant colors to bohemian styles. We'll help you update your wardrobe with the hottest items of the season.</div>
                            </div>
                        </div>

                        <div class="line-bt mb_40"></div>

                        <ul class="wg-pagination">
                            <li>
                                <a href="#" class="pagination-item text-button">1</a>
                            </li>

                            <li class="active">
                                <div class="pagination-item text-button">2</div>
                            </li>

                            <li>
                                <a href="#" class="pagination-item text-button">3</a>
                            </li>

                            <li>
                                <a href="#" class="pagination-item text-button"><i class="icon-arrRight"></i></a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar maxw-360">

                            <div class="sidebar-item sidebar-relatest-post">
                                <h5 class="sidebar-heading">Ultimas postagens</h5>

                                <div>
                                    <div class="relatest-post-item hover-image">
                                        <div class="image">
                                            <img class="lazyload" data-src="images/blog/sidebar-1.jpg" src="images/blog/sidebar-1.jpg" alt="">
                                        </div>

                                        <div class="content">
                                            <div class="meta">
                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-calendar"></i>
                                                    </div>

                                                    <p class="text-caption-1">28 Fevereiro 2024</p>
                                                </div>

                                                <div class="meta-item gap-8">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>

                                                    <p class="text-caption-1">por: <a class="link" href="#">Themesflat</a></p>
                                                </div>
                                            </div>

                                            <h6 class="title fw-5">
                                                <a class="link" href="./blog-post">The Ultimate Guide: Dressing Stylishly with Minimal Effort</a>
                                            </h6>
                                        </div>
                                    </div>

                                    <div class="relatest-post-item style-row hover-image">
                                        <div class="image">
                                            <img class="lazyload" data-src="images/blog/sidebar-2.jpg" src="images/blog/sidebar-2.jpg" alt="">
                                        </div>

                                        <div class="content">
                                            <div class="meta">
                                                <div class="meta-item gap-8">
                                                    <p class="text-caption-1">28 Fevereiro 2024</p>
                                                </div>

                                                <div class="meta-item gap-8">
                                                    <p class="text-caption-1">por: <a class="link" href="#">Themesflat</a></p>
                                                </div>
                                            </div>

                                            <div class="title text-title">
                                                <a class="link" href="./blog-post">10 Must-Have Wardrobe Staples for Every Season</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-item sidebar-categories">
                                <h5 class="sidebar-heading">Categorias</h5>

                                <ul>
                                    <li><a class="text-button link" href="#">Trending</a></li>
                                    <li><a class="text-button link" href="#">Fashion</a></li>
                                    <li><a class="text-button link" href="#">Outfit</a></li>
                                    <li><a class="text-button link" href="#">Accessories</a></li>
                                    <li><a class="text-button link" href="#">Beauty</a></li>
                                </ul>
                            </div>

                            <div class="sidebar-item sidebar-tag">
                                <h5 class="sidebar-heading">Tags</h5>

                                <ul class="list-tags">
                                    <li><a href="#" class="text-caption-1 link">Fashion Trends</a></li>
                                    <li><a href="#" class="text-caption-1 link">Sustainable Fashion</a></li>
                                    <li><a href="#" class="text-caption-1 link">Street Style</a></li>
                                    <li><a href="#" class="text-caption-1 link">Beauty Tips</a></li>
                                    <li><a href="#" class="text-caption-1 link">Street Style</a></li>
                                    <li><a href="#" class="text-caption-1 link">Vintage Fashion</a></li>
                                    <li><a href="#" class="text-caption-1 link">Eco Friendly</a></li>
                                    <li><a href="#" class="text-caption-1 link">Tips</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /blog-default -->

        <?php include_once('_footer.php'); ?>
        
    </div>
    <!-- /wrapper -->
    

    <?php include_once('_menuMobile.php'); ?>


    <?php include_once('_scripts.php'); ?>