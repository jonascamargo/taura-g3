<?php
$page = 'produtos';

include_once("_header.php");
?>

        <!-- page-title -->
        <div class="page-title" style="background-image: url(images/section/page-title-01.png);">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center">Produtos</h3>

                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" href="index.html">Página inicial</a>
                            </li>

                            <li>
                                <i class="icon-arrRight"></i>
                            </li>

                            <li>
                                Produtos
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- Categories -->
        <section class="flat-spacing">
            <div class="container">
                <div dir="ltr" class="swiper tf-sw-categories" data-preview="5" data-tablet="4" data-mobile-sm="3" data-mobile="2" data-space-lg="20" data-space-md="20" data-space="15" data-pagination="2" data-pagination-md="2" data-pagination-lg="1">
                    <div class="swiper-wrapper">

                        <?php
                        $categorias = ['Escritório', 'Papelaria', 'Suprimentos', 'Material Escolar', 'Brinquedos', 'Móveis'];
                        $cont = 1;

                        foreach ($categorias as $categoria):
                        ?>

                        <!-- item <?= $cont; ?> -->
                        <div class="swiper-slide">
                            <div class="collection-position-2 hover-img">
                                <a href="./produtos#categoria-<?= $cont; ?>" class="img-style">
                                    <img class="lazyload" data-src="./uploads/produtos/categoria-<?= $cont; ?>.png" src="./uploads/produtos/categoria-<?= $cont; ?>.png" alt="banner-cls">
                                </a>

                                <div class="content">
                                    <a href="./produtos#categoria-<?= $cont; ?>" class="cls-btn"><h6 class="text"><?= $categoria; ?></h6><i class="icon icon-arrowUpRight"></i></a>
                                </div>
                            </div>
                        </div>

                        <?php
                        $cont++;
                        endforeach;
                        ?>

                    </div>
                    <div class="sw-pagination-categories sw-dots type-circle justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Categories -->

        <!-- Section product -->
        <section class="flat-spacing pt-0">
            <div class="container">
                <div class="tf-shop-control">
                    <div class="tf-control-filter">
                        <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="filterShop" class="tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filtro</span></a>
                        
                        <div class="d-none d-lg-flex shop-sale-text">
                            <i class="icon icon-checkCircle"></i>
                            <p class="text-caption-1">Somente produtos em estoque</p>
                        </div>
                    </div>

                    <ul class="tf-control-layout">
                        <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                            <div class="item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818"/>
                                    <rect x="7.5" y="3.5" width="12" height="5" rx="2.5" stroke="#181818"/>
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818"/>
                                    <rect x="7.5" y="11.5" width="12" height="5" rx="2.5" stroke="#181818"/>
                                </svg>     
                            </div>
                        </li>

                        <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                            <div class="item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="14" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="6" cy="14" r="2.5" stroke="#181818"/>
                                    <circle cx="14" cy="14" r="2.5" stroke="#181818"/>
                                </svg>   
                            </div>
                        </li>

                        <li class="tf-view-layout-switch sw-layout-3" data-value-layout="tf-col-3">
                            <div class="item">
                                <svg class="icon" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818"/>
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818"/>
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818"/>
                                </svg>                                    
                            </div>
                        </li>

                        <li class="tf-view-layout-switch sw-layout-4 active" data-value-layout="tf-col-4">
                            <div class="item">
                                <svg class="icon" width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="27" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818"/>
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818"/>
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818"/>
                                    <circle cx="27" cy="14" r="2.5" stroke="#181818"/>
                                </svg>
                            </div>
                        </li>

                        <li class="tf-view-layout-switch sw-layout-5" data-value-layout="tf-col-5">
                            <div class="item">
                                <svg class="icon" width="38" height="20" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="27" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="35" cy="6" r="2.5" stroke="#181818"/>
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818"/>
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818"/>
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818"/>
                                    <circle cx="27" cy="14" r="2.5" stroke="#181818"/>
                                    <circle cx="35" cy="14" r="2.5" stroke="#181818"/>
                                </svg>                                    
                            </div>
                        </li>
                    </ul>

                    <div class="tf-control-sorting">
                        <p class="d-none d-lg-block text-caption-1">Ordenar por:</p>
                        
                        <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                            <div class="btn-select">
                                <span class="text-sort-value">Mais vendido</span>
                                <span class="icon icon-arrow-down"></span>
                            </div>
                            
                            <div class="dropdown-menu">
                                <div class="select-item" data-sort-value="best-selling">
                                    <span class="text-value-item">Mais vendido</span>
                                </div>

                                <div class="select-item" data-sort-value="a-z">
                                    <span class="text-value-item">Alfabeticamente, A-Z</span>
                                </div>

                                <div class="select-item" data-sort-value="z-a">
                                    <span class="text-value-item">Alfabeticamente, Z-A</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper-control-shop">
                    <div class="meta-filter-shop">
                        <div id="product-count-grid" class="count-text"></div>
                        <div id="product-count-list" class="count-text"></div>
                        <div id="applied-filters"></div>
                        <button id="remove-all" class="remove-all-filters text-btn-uppercase" style="display: none;">REMOVER TODOS<i class="icon icon-close"></i></button>
                    </div>

                    <div class="tf-list-layout wrapper-shop" id="listLayout">
                        <!-- card product list 1 -->
                        <div class="card-product style-list" data-availability="Out of stock" data-brand="adidas">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-19.jpg" src="images/products/womens/women-19.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-20.jpg" src="images/products/womens/women-20.jpg" alt="image-product">
                                </a>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Double-button trench coat</a>
                                <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$219.99</span></div>
                                <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                <div class="variant-wrap-list">
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="d-none text-capitalize color-filter">Green</span>
                                            <span class="swatch-value bg-light-green"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-19.jpg" src="images/products/womens/women-19.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Grey</span>
                                            <span class="swatch-value bg-grey-2"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-1.jpg" src="images/products/womens/women-1.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch line">
                                            <span class="d-none text-capitalize color-filter">White</span>
                                            <span class="swatch-value bg-white"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-8.jpg" src="images/products/womens/women-8.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                    <div class="size-box list-product-btn">
                                        <span class="size-item box-icon">S</span>
                                        <span class="size-item box-icon">M</span>
                                        <span class="size-item box-icon active">L</span>
                                        <span class="size-item box-icon">XL</span>
                                        <span class="size-item box-icon disable">XXL</span>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                </div>
        
                                
                            </div>
                        </div>
                        <!-- card product list 2 -->
                        <div class="card-product style-list" data-availability="Out of stock" data-brand="LV">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-29.jpg" src="images/products/womens/women-29.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-31.jpg" src="images/products/womens/women-31.jpg" alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Polarized sunglasses</a>
                                <span class="price current-price">$59.99</span>
                                <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                <div class="variant-wrap-list">
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="d-none text-capitalize color-filter">Orange</span>
                                            <span class="swatch-value bg-light-orange"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-29.jpg" src="images/products/womens/women-29.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Orange</span>
                                            <span class="swatch-value bg-orange"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-43.jpg" src="images/products/womens/women-43.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Pink</span>
                                            <span class="swatch-value bg-dark-pink"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-47.jpg" src="images/products/womens/women-47.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                    <div class="size-box list-product-btn">
                                        <span class="size-item box-icon">S</span>
                                        <span class="size-item box-icon">M</span>
                                        <span class="size-item box-icon">L</span>
                                        <span class="size-item box-icon">XL</span>
                                        <span class="size-item box-icon disable">XXL</span>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                </div>
        
                                
                            </div>
                        </div>
                        <!-- card product list 3 -->
                        <div class="card-product style-list" data-availability="In stock" data-brand="nike">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-63.jpg" src="images/products/womens/women-63.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-64.jpg" src="images/products/womens/women-64.jpg" alt="image-product">
                                </a>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                <div class="price"><span class="old-price">$98.00</span><span class="current-price">$219.95</span></div>
                                <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                <div class="variant-wrap-list">
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="d-none text-capitalize color-filter">White</span>
                                            <span class="swatch-value bg-white"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-63.jpg" src="images/products/womens/women-63.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Grey</span>
                                            <span class="swatch-value bg-grey-2"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-69.jpg" src="images/products/womens/women-69.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Black</span>
                                            <span class="swatch-value bg-main"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-70.jpg" src="images/products/womens/women-70.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                    <div class="size-box list-product-btn">
                                        <span class="size-item box-icon">S</span>
                                        <span class="size-item box-icon">M</span>
                                        <span class="size-item box-icon">L</span>
                                        <span class="size-item box-icon">XL</span>
                                        <span class="size-item box-icon disable">XXL</span>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                </div>
        
                                
                            </div>
                        </div>
                        <!-- card product list 4 -->
                        <div class="card-product style-list" data-availability="In stock" data-brand="gucci">   
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-37.jpg" src="images/products/womens/women-37.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-38.jpg" src="images/products/womens/women-38.jpg" alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">V-neck cotton T-shirt</a>
                                <span class="price current-price">$59.99</span>
                                <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                <div class="variant-wrap-list">
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="d-none text-capitalize color-filter">Light Blue</span>
                                            <span class="swatch-value bg-light-blue"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-37.jpg" src="images/products/womens/women-37.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch line">
                                            <span class="d-none text-capitalize color-filter">White</span>
                                            <span class="swatch-value bg-white"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-41.jpg" src="images/products/womens/women-41.jpg" alt="image-product">
                                        </li>
                                        
                                    </ul>
                                    <div class="size-box list-product-btn">
                                        <span class="size-item box-icon">S</span>
                                        <span class="size-item box-icon">M</span>
                                        <span class="size-item box-icon">L</span>
                                        <span class="size-item box-icon">XL</span>
                                        <span class="size-item box-icon disable">XXL</span>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                </div>
        
                                
                            </div>
                        </div>
                        <!-- card product list 5 -->
                        <div class="card-product style-list" data-availability="In stock" data-brand="hermes">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-133.jpg" src="images/products/womens/women-133.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-131.jpg" src="images/products/womens/women-131.jpg" alt="image-product">
                                </a>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">V-neck cotton T-shirt</a>
                                <span class="price current-price">$59.99</span>
                                <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                <div class="variant-wrap-list">
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="d-none text-capitalize color-filter">Green</span>
                                            <span class="swatch-value bg-light-green"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-133.jpg" src="images/products/womens/women-133.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Black</span>
                                            <span class="swatch-value bg-main"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-124.jpg" src="images/products/womens/women-124.jpg" alt="image-product">
                                        </li>
                                        
                                    </ul>
                                    <div class="size-box list-product-btn">
                                        <span class="size-item box-icon">S</span>
                                        <span class="size-item box-icon">M</span>
                                        <span class="size-item box-icon">L</span>
                                        <span class="size-item box-icon">XL</span>
                                        <span class="size-item box-icon disable">XXL</span>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card product list 6 -->
                        <div class="card-product style-list" data-availability="In stock" data-brand="nike">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-167.jpg" src="images/products/womens/women-167.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-168.jpg" src="images/products/womens/women-168.jpg" alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Cotton shopper bag</a>
                                <span class="price current-price">$199.25</span>
                                <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                <div class="variant-wrap-list">
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="d-none text-capitalize color-filter">White</span>
                                            <span class="swatch-value bg-white"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-167.jpg" src="images/products/womens/women-167.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Beige</span>
                                            <span class="swatch-value bg-beige"></span>
                                            <img class="lazyload" data-src="images/products/womens/women-162.jpg" src="images/products/womens/women-162.jpg" alt="image-product">
                                        </li>
                                        
                                    </ul>
                            
                                    <div class="list-product-btn">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                            <span class="icon icon-gitDiff"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- pagination -->
                        <ul class="wg-pagination">
                            <li><a href="#" class="pagination-item text-button">1</a></li>
                            <li class="active"><div class="pagination-item text-button">2</div></li>
                            <li><a href="#" class="pagination-item text-button">3</a></li>
                            <li><a href="#" class="pagination-item text-button"><i class="icon-arrRight"></i></a></li>
                        </ul>
                    </div>

                    <div class="tf-grid-layout wrapper-shop tf-col-4" id="gridLayout">
                        <?php
                        // $produtos = ['Giz de cera', 'Canetinhas', 'Cadeira de metal', 'Cadeira de madeira', 'Caderno branco'];
                        $produtos = [
                            ['Giz de cera', 'Faber Castell', ]
                        ];
                        $cont2 = 1;

                        foreach ($produtos as $produto):
                        ?>
                        <!-- card product 1 -->
                        <div class="card-product grid" data-availability="Out of stock" data-brand="adidas">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="uploads/produtos/produto-<?= $cont2; ?>.png" src="uploads/produtos/produto-<?= $cont2; ?>.png" alt="image-product">
                                    <img class="lazyload img-hover" data-src="uploads/produtos/produto-<?= $cont2; ?>.png" src="uploads/produtos/produto-<?= $cont2; ?>.png" alt="image-product">
                                </a>

                                <div class="list-product-btn">
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Mais detalhes</span>
                                    </a>
                                </div>

                                <div class="list-btn-main">
                                    <a href="mailto:pedido@g3suprimentos.com.br" data-bs-toggle="modal" class="btn-main-product">Fazer o pedido</a>
                                    <a href="mailto:pedido@g3suprimentos.com.br" data-bs-toggle="modal" class="btn-main-product">Fazer o pedido</a>
                                </div> 
                            </div>

                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link"><?= $produto; ?></a>
                            </div>
                        </div>
                        <?php
                        $cont2++;
                        endforeach;
                        ?>

                        <!-- card product 2 -->
                        <div class="card-product grid" data-availability="In stock" data-brand="nike">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-176.jpg" src="images/products/womens/women-176.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-179.jpg" src="images/products/womens/women-179.jpg" alt="image-product">
                                </a>

                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>

                                <div class="marquee-product bg-main">
                                    <div class="marquee-wrapper">
                                        <div class="initial-child-container">
                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>

                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>

                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>

                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>

                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>

                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>

                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>

                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>

                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>

                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="marquee-wrapper">
                                        <div class="initial-child-container">
                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>

                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>

                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>

                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>

                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>

                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>

                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>

                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>

                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>

                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>

                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>

                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>

                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                </div> 
                            </div>

                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Polarized sunglasses</a>
                                <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$79.99</span></div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active line">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-176.jpg" src="images/products/womens/women-176.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-177.jpg" src="images/products/womens/women-177.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 3 -->
                        <div class="card-product grid card-product-size" data-availability="In stock" data-brand="LV">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-29.jpg" src="images/products/womens/women-29.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-30.jpg" src="images/products/womens/women-30.jpg" alt="image-product">
                                </a>
                                <div class="variant-wrap size-list">
                                    <ul class="variant-box">
                                        <li class="size-item">S</li>
                                        <li class="size-item">M</li>
                                        <li class="size-item">L</li>
                                        <li class="size-item">XL</li>
                                    </ul>
                                </div>
                                <div class="variant-wrap countdown-wrap">
                                    <div class="variant-box">
                                        <div class="js-countdown" data-timer="1007500" data-labels="D :,H :,M :,S"></div>
                                    </div>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Ramie shirt with pockets </a>
                                <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$89.99</span></div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active line">
                                        <span class="d-none text-capitalize color-filter">Orange</span>
                                        <span class="swatch-value bg-light-orange"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-29.jpg" src="images/products/womens/women-29.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Grey</span>
                                        <span class="swatch-value bg-light-grey"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-33.jpg" src="images/products/womens/women-33.jpg" alt="image-product">
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- card product 4 -->
                        <div class="card-product grid" data-availability="Out of stock" data-brand="gucci">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-1.jpg" src="images/products/womens/women-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-2.jpg" src="images/products/womens/women-2.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                <span class="price current-price">$69.99</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active line">
                                        <span class="d-none text-capitalize color-filter">Grey</span>
                                        <span class="swatch-value bg-dark-grey"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-1.jpg" src="images/products/womens/women-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Pink</span>
                                        <span class="swatch-value bg-light-pink"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-2.jpg" src="images/products/womens/women-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Grey</span>
                                        <span class="swatch-value bg-dark-grey-2"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-3.jpg" src="images/products/womens/women-3.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 5 -->
                        <div class="card-product grid card-product-size" data-availability="Out of stock" data-brand="hermes">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-8.jpg" src="images/products/womens/women-8.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-9.jpg" src="images/products/womens/women-9.jpg" alt="image-product">
                                </a>
                                <div class="variant-wrap size-list">
                                    <ul class="variant-box">
                                        <li class="size-item">S</li>
                                        <li class="size-item">M</li>
                                        <li class="size-item">L</li>
                                        <li class="size-item">XL</li>
                                    </ul>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                <span class="price current-price">$39.99</span>
                            </div>
                        </div>
                        <!-- card product 6 -->
                        <div class="card-product grid" data-availability="In stock" data-brand="zalando">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-171.jpg" src="images/products/womens/women-171.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-172.jpg" src="images/products/womens/women-172.jpg" alt="image-product">
                                </a>
                                
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Faux-leather trousers</a>
                                <span class="price current-price">$79.99</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Orange</span>
                                        <span class="swatch-value bg-orange"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-171.jpg" src="images/products/womens/women-171.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Pink</span>
                                        <span class="swatch-value bg-dark-pink"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-172.jpg" src="images/products/womens/women-172.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 7 -->
                        <div class="card-product grid card-product-size" data-availability="In stock" data-brand="nike">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-83.jpg" src="images/products/womens/women-83.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-84.jpg" src="images/products/womens/women-84.jpg" alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                <div class="variant-wrap size-list">
                                    <ul class="variant-box">
                                        <li class="size-item">S</li>
                                        <li class="size-item">M</li>
                                        <li class="size-item">L</li>
                                        <li class="size-item">XL</li>
                                    </ul>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Belt wrap dress</a>
                                <div class="price"><span class="old-price">$98.00</span><span class="current-price">$129.99</span></div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Green</span>
                                        <span class="swatch-value bg-light-green"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-83.jpg" src="images/products/womens/women-83.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Grey</span>
                                        <span class="swatch-value bg-grey"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-94.jpg" src="images/products/womens/women-94.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch line">
                                        <span class="d-none text-capitalize color-filter">White</span>
                                        <span class="swatch-value bg-white"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-87.jpg" src="images/products/womens/women-87.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 8 -->
                        <div class="card-product grid card-product-size" data-availability="In stock" data-brand="LV">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-102.jpg" src="images/products/womens/women-102.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-103.jpg" src="images/products/womens/women-103.jpg" alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                <div class="variant-wrap size-list">
                                    <ul class="variant-box">
                                        <li class="size-item">S</li>
                                        <li class="size-item">M</li>
                                        <li class="size-item">L</li>
                                        <li class="size-item">XL</li>
                                    </ul>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Double-button trench coat</a>
                                <div class="price"><span class="old-price">$98.00</span><span class="current-price">$219.99</span></div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Grey</span>
                                        <span class="swatch-value bg-grey-2"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-102.jpg" src="images/products/womens/women-102.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Orange</span>
                                        <span class="swatch-value bg-light-orange"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-111.jpg" src="images/products/womens/women-111.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch line">
                                        <span class="d-none text-capitalize color-filter">White</span>
                                        <span class="swatch-value bg-white"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-104.jpg" src="images/products/womens/women-104.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 9 -->
                        <div class="card-product grid" data-availability="In stock" data-brand="hermes">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/mens/men-11.jpg" src="images/products/mens/men-11.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/mens/men-12.jpg" src="images/products/mens/men-12.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">V-neck cotton T-shirt</a>
                                <span class="price current-price">$59.99</span>
                            </div>
                        </div>
                        <!-- card product 10 -->
                        <div class="card-product grid"  data-availability="In stock" data-brand="gucci">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/mens/men-13.jpg" src="images/products/mens/men-13.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/mens/men-14.jpg" src="images/products/mens/men-14.jpg" alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                <div class="marquee-product bg-main">
                                    <div class="marquee-wrapper">
                                        <div class="initial-child-container">
                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="marquee-wrapper">
                                        <div class="initial-child-container">
                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon icon-lightning text-critical"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Polarized sunglasses</a>
                                <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$79.99</span></div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Beige</span>
                                        <span class="swatch-value bg-beige"></span>
                                        <img class="lazyload" data-src="images/products/mens/men-13.jpg" src="images/products/mens/men-13.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload" data-src="images/products/mens/men-12.jpg" src="images/products/mens/men-12.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 11 -->
                        <div class="card-product grid card-product-size" data-availability="In stock" data-brand="zalando">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/mens/men-7.jpg" src="images/products/mens/men-7.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/mens/men-8.jpg" src="images/products/mens/men-8.jpg" alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                <div class="variant-wrap size-list">
                                    <ul class="variant-box">
                                        <li class="size-item">S</li>
                                        <li class="size-item">M</li>
                                        <li class="size-item">L</li>
                                        <li class="size-item">XL</li>
                                    </ul>
                                </div>
                                <div class="variant-wrap countdown-wrap">
                                    <div class="variant-box">
                                        <div class="js-countdown" data-timer="1007500" data-labels="D :,H :,M :,S"></div>
                                    </div>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Ramie shirt with pockets </a>
                                <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$89.99</span></div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active line">
                                        <span class="d-none text-capitalize color-filter">Green</span>
                                        <span class="swatch-value bg-light-green"></span>
                                        <img class="lazyload" data-src="images/products/mens/men-7.jpg" src="images/products/mens/men-7.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Grey</span>
                                        <span class="swatch-value bg-light-grey"></span>
                                        <img class="lazyload" data-src="images/products/mens/men-11.jpg" src="images/products/mens/men-11.jpg" alt="image-product">
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- card product 12 -->
                        <div class="card-product grid" data-availability="In stock" data-brand="adidas">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/mens/men-1.jpg" src="images/products/mens/men-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/mens/men-3.jpg" src="images/products/mens/men-3.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                <span class="price current-price">$69.99</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active line">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload" data-src="images/products/mens/men-1.jpg" src="images/products/mens/men-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Pink</span>
                                        <span class="swatch-value bg-light-pink"></span>
                                        <img class="lazyload" data-src="images/products/mens/men-13.jpg" src="images/products/mens/men-13.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Grey</span>
                                        <span class="swatch-value bg-dark-grey-2"></span>
                                        <img class="lazyload" data-src="images/products/mens/men-9.jpg" src="images/products/mens/men-9.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 13 -->
                        <div class="card-product grid card-product-size" data-availability="In stock" data-brand="nike">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-37.jpg" src="images/products/womens/women-37.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-38.jpg" src="images/products/womens/women-38.jpg" alt="image-product">
                                </a>
                                <div class="variant-wrap size-list">
                                    <ul class="variant-box">
                                        <li class="size-item">XS</li>
                                        <li class="size-item">L</li>
                                        <li class="size-item">XL</li>
                                        <li class="size-item">2XL</li>
                                        <li class="size-item">3XL</li>
                                    </ul>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Buttoned cotton shirt</a>
                                <span class="price current-price">$89.99</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-37.jpg" src="images/products/womens/women-37.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch line">
                                        <span class="d-none text-capitalize color-filter">White</span>
                                        <span class="swatch-value bg-white"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-41.jpg" src="images/products/womens/women-41.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 14 -->
                        <div class="card-product grid card-product-size" data-availability="In stock" data-brand="LV">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/mens/men-15.jpg" src="images/products/mens/men-15.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/mens/men-16.jpg" src="images/products/mens/men-16.jpg" alt="image-product">
                                </a>
                                <div class="variant-wrap size-list">
                                    <ul class="variant-box">
                                        <li class="size-item">XS</li>
                                        <li class="size-item">M</li>
                                        <li class="size-item">L</li>
                                        <li class="size-item">XL</li>
                                        <li class="size-item">2XL</li>
                                        <li class="size-item">3XL</li>
                                    </ul>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Chest pocket cotton over shirt</a>
                                <span class="price current-price">$99.25</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Beige</span>
                                        <span class="swatch-value bg-beige"></span>
                                        <img class="lazyload" data-src="images/products/mens/men-15.jpg" src="images/products/mens/men-15.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Black</span>
                                        <span class="swatch-value bg-main"></span>
                                        <img class="lazyload" data-src="images/products/mens/men-18.jpg" src="images/products/mens/men-18.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Dark Blue</span>
                                        <span class="swatch-value bg-dark-blue"></span>
                                        <img class="lazyload" data-src="images/products/mens/men-17.jpg" src="images/products/mens/men-17.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 15 -->
                        <div class="card-product grid" data-availability="In stock" data-brand="gucci">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/womens/women-167.jpg" src="images/products/womens/women-167.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/womens/women-168.jpg" src="images/products/womens/women-168.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Cotton shopper bag</a>
                                <span class="price current-price">$199.25</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active line">
                                        <span class="d-none text-capitalize color-filter">White</span>
                                        <span class="swatch-value bg-white"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-167.jpg" src="images/products/womens/women-167.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Beige</span>
                                        <span class="swatch-value bg-beige"></span>
                                        <img class="lazyload" data-src="images/products/womens/women-162.jpg" src="images/products/womens/women-162.jpg" alt="image-product">
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <!-- card product 16 -->
                        <div class="card-product grid card-product-size" data-availability="In stock" data-brand="adidas">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/mens/men-19.jpg" src="images/products/mens/men-19.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/mens/men-20.jpg" src="images/products/mens/men-20.jpg" alt="image-product">
                                </a>
                                <div class="variant-wrap size-list">
                                    <ul class="variant-box">
                                        <li class="size-item">XS</li>
                                        <li class="size-item">M</li>
                                        <li class="size-item">L</li>
                                        <li class="size-item">XL</li>
                                        <li class="size-item">2XL</li>
                                        <li class="size-item">3XL</li>
                                    </ul>
                                </div>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Wishlist</span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip">Compare</span>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="list-btn-main">
                                    <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                </div> 
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Chest pocket cotton over shirt</a>
                                <span class="price current-price">$250.00</span>
                                
                            </div>
                        </div>

                        <!-- pagination -->
                        <ul class="wg-pagination justify-content-center">
                            <li><a href="#" class="pagination-item text-button">1</a></li>
                            <li class="active"><div class="pagination-item text-button">2</div></li>
                            <li><a href="#" class="pagination-item text-button">3</a></li>
                            <li><a href="#" class="pagination-item text-button"><i class="icon-arrRight"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section product -->
       
        <?php include_once('_footer.php'); ?>
        
    </div>
    
    <!-- quickView -->
    <div class="modal fullRight fade modal-quick-view" id="quickView">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="tf-quick-view-image">
                    <div class="wrap-quick-view wrapper-scroll-quickview">
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="beige">
                            <img class="lazyload" data-src="images/products/womens/women-1.jpg" src="images/products/womens/women-1.jpg" alt="">
                        </div>

                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="beige">
                            <img class="lazyload" data-src="images/products/womens/women-2.jpg" src="images/products/womens/women-2.jpg" alt="">
                        </div>

                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="gray">
                            <img class="lazyload" data-src="images/products/womens/women-3.jpg" src="images/products/womens/women-3.jpg" alt="">
                        </div>

                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="gray">
                            <img class="lazyload" data-src="images/products/womens/women-4.jpg" src="images/products/womens/women-4.jpg" alt="">
                        </div>

                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="grey">
                            <img class="lazyload" data-src="images/products/womens/women-19.jpg" src="images/products/womens/women-19.jpg" alt="">
                        </div>

                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="grey">
                            <img class="lazyload" data-src="images/products/womens/women-20.jpg" src="images/products/womens/women-20.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="wrap">
                    <div class="header">
                        <h5 class="title">Quick View</h5>
                        <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                    </div>

                    <div class="tf-product-info-list">
                        <div class="tf-product-info-heading">
                            <div class="tf-product-info-name">
                                <div class="text text-btn-uppercase">Clothing</div>
                                <h3 class="name">Stretch Strap Top</h3>

                                <div class="sub">
                                    <div class="tf-product-info-rate">
                                        <div class="list-star">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>

                                        <div class="text text-caption-1">(134 reviews)</div>
                                    </div>


                                    <div class="tf-product-info-sold">
                                        <i class="icon icon-lightning"></i>
                                        <div class="text text-caption-1">18 sold in last 32 hours</div>
                                    </div>
                                </div>
                            </div>

                            <div class="tf-product-info-desc">

                                <div class="tf-product-info-price">
                                    <h5 class="price-on-sale font-2">$79.99</h5>
                                    <div class="compare-at-price font-2">$98.99</div>
                                    <div class="badges-on-sale text-btn-uppercase">-25%</div>
                                </div>

                                <p>The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                
                                <div class="tf-product-info-liveview">
                                    <i class="icon icon-eye"></i>
                                    <p class="text-caption-1"><span class="liveview-count">28</span> people are viewing this right now</p>
                                </div>

                            </div>
                        </div>

                        <div class="tf-product-info-choose-option">
                            <div class="variant-picker-item">
                                <div class="variant-picker-label mb_12">
                                    Colors:<span class="text-title variant-picker-label-value">Beige</span>
                                </div>

                                <div class="variant-picker-values">
                                    <input id="values-beige1" type="radio" name="color2" checked>
                                    <label class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview active" data-slide="0" data-price="79.99" for="values-beige1" data-value="Beige" data-scroll-quickview="beige">
                                        <span class="btn-checkbox bg-color-beige1"></span>
                                        <span class="tooltip">Beige</span>
                                    </label>

                                    <input id="values-gray1" type="radio" name="color2">
                                    <label class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview" data-slide="1" data-price="79.99" for="values-gray1" data-value="Gray" data-scroll-quickview="gray">
                                        <span class="btn-checkbox bg-color-gray"></span>
                                        <span class="tooltip">Gray</span>
                                    </label>

                                    <input id="values-grey1" type="radio" name="color2">
                                    <label class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview" data-slide="2" data-price="89.99" for="values-grey1" data-value="Grey" data-scroll-quickview="grey">
                                        <span class="btn-checkbox bg-color-grey"></span>
                                        <span class="tooltip">Grey</span>
                                    </label>
                                </div>
                            </div>

                            <div class="variant-picker-item">
                                <div class="d-flex justify-content-between mb_12">
                                    <div class="variant-picker-label">
                                        Size:<span class="text-title variant-picker-label-value">L</span>
                                    </div>

                                    <a class="size-guide text-title link show-size-guide">Size Guide</a>
                                </div>

                                <div class="variant-picker-values gap12">
                                    <input type="radio" name="size2" id="values-s1">
                                    <label class="style-text size-btn" for="values-s1" data-value="S">
                                        <span class="text-title">S</span>
                                    </label>

                                    <input type="radio" name="size2" id="values-m1">
                                    <label class="style-text size-btn" for="values-m1" data-value="M">
                                        <span class="text-title">M</span>
                                    </label>

                                    <input type="radio" name="size2" id="values-l1" checked>
                                    <label class="style-text size-btn" for="values-l1" data-value="L" data-price="89.99">
                                        <span class="text-title">L</span>
                                    </label>

                                    <input type="radio" name="size2" id="values-xl1">
                                    <label class="style-text size-btn" for="values-xl1" data-value="XL" data-price="89.99">
                                        <span class="text-title">XL</span>
                                    </label>
                                </div>
                            </div>

                            <div class="tf-product-info-quantity">
                                <div class="title mb_12">Quantity:</div>

                                <div class="wg-quantity">
                                    <span class="btn-quantity btn-decrease">-</span>
                                    <input class="quantity-product" type="text" name="number" value="1">
                                    <span class="btn-quantity btn-increase">+</span>
                                </div>
                            </div>

                            <div>
                                <div class="tf-product-info-by-btn mb_10">
                                    <a class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 show-shopping-cart"><span>Add to cart -&nbsp;</span><span class="tf-qty-price total-price">$79.99</span></a>
                                    
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon hover-tooltip compare btn-icon-action show-compare">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip text-caption-2">Compare</span>
                                    </a>

                                    <a href="javascript:void(0);" class="box-icon hover-tooltip text-caption-2 wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip text-caption-2">Wishlist</span>
                                    </a>
                                </div>
                                
                                <a href="#" class="btn-style-3 text-btn-uppercase">Buy it now</a>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /quickView -->
    
    <!-- Filter -->
    <div class="offcanvas offcanvas-start canvas-filter" id="filterShop">
        <div class="canvas-wrapper">
            <div class="canvas-header">
                <h5>Filtros</h5>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </div>

            <div class="canvas-body">
                <div class="widget-facet facet-categories">
                    <h6 class="facet-title">Categorias</h6>

                    <ul class="facet-content">
                        <li><a href="#" class="categories-item">Escritorio <span class="count-cate">(112)</span></a></li>
                        <li><a href="#" class="categories-item">Papelaria <span class="count-cate">(32)</span> </a></li>
                        <li><a href="#" class="categories-item">Suprimentos <span class="count-cate">(42)</span></a></li>
                        <li><a href="#" class="categories-item active">Material Escolar <span class="count-cate">(65)</span></a></li>
                        <li><a href="#" class="categories-item">Brinquedos <span class="count-cate">(13)</span></a></li>
                        <li><a href="#" class="categories-item">Moveis <span class="count-cate">(14)</span></a></li>
                    </ul>
                </div>

                <div class="widget-facet facet-price">
                    <h6 class="facet-title">Preço</h6>

                    <div class="price-val-range" id="price-value-range" data-min="0" data-max="500"></div>

                    <div class="box-price-product">
                        <div class="box-price-item">
                            <span class="title-price">Preço min</span>
                            <div class="price-val" id="price-min-value" data-currency="$"></div>
                        </div>

                        <div class="box-price-item">
                            <span class="title-price">Preço max</span>
                            <div class="price-val" id="price-max-value" data-currency="$"></div>
                        </div>
                    </div>
                </div>

                <div class="widget-facet facet-color">
                    <h6 class="facet-title">Material</h6>

                    <div class="facet-color-box">
                        <div class="color-item color-check"><span class="color bg-color-dark-brown"></span>Madeira</div>
                        <div class="color-item color-check"><span class="color bg-color-gray"></span> Aço</div>          
                    </div>
                </div>

                <div class="widget-facet facet-fieldset">
                    <h6 class="facet-title">Marcas</h6>

                    <div class="box-fieldset-item">
                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="nike">
                            <label for="nike">Faber Castell <span class="count-brand">(112)</span></label>
                        </fieldset>

                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="LV">
                            <label for="LV">Mattel <span class="count-brand">(2)</span></label>
                        </fieldset>

                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="hermes">
                            <label for="hermes">Adelbras <span class="count-brand">(42)</span></label>
                        </fieldset>

                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="gucci">
                            <label for="gucci">ColacrilH <span class="count-brand">(13)</span></label>
                        </fieldset>

                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="zalando">
                            <label for="zalando">HP <span class="count-brand">(54)</span></label>
                        </fieldset>

                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="adidas">
                            <label for="adidas">Epson <span class="count-brand">(93)</span></label>
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="canvas-bottom">
                <button id="reset-filter" class="tf-btn btn-reset">Limpar filtro</button>
            </div>
        </div>
    </div>
    <!-- /Filter -->
    

    <?php include_once('_menuMobile.php'); ?>


    <?php include_once('_scripts.php'); ?>