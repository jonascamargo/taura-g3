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
                    <?php
                        $contador1 = 0;
                        $produtos1 = [
                            [
                                'nome' => 'Giz de cera',
                                'marca' => 'Faber Castell',
                                'marca-tag' => 'faber-castell',
                                'imagem' => 'uploads/produtos/produto-1.png',
                                'imagem_hover' => 'uploads/produtos/produto-1.png'
                            ],
                            [
                                'nome' => 'Canetinhas',
                                'marca' => 'Faber Castell',
                                'marca-tag' => 'faber-castell',
                                'imagem' => 'uploads/produtos/produto-2.png',
                                'imagem_hover' => 'uploads/produtos/produto-2.png'
                            ],
                            [
                                'nome' => 'Cadeira de metal',
                                'marca' => 'Fabrica X',
                                'marca-tag' => 'fabrica-x',
                                'imagem' => 'uploads/produtos/produto-3.png',
                                'imagem_hover' => 'uploads/produtos/produto-3.png'
                            ],
                            [
                                'nome' => 'Cadeira de escritório',
                                'marca' => 'Fabrica Y',
                                'marca-tag' => 'fabrica-y',
                                'imagem' => 'uploads/produtos/produto-4.png',
                                'imagem_hover' => 'uploads/produtos/produto-4.png'
                            ]
                        ];

                        foreach ($produtos1 as $produto):
                            $contador1++;
                        ?>
                        <!-- card product list 1 -->
                        <div class="card-product style-list" data-availability="Out of stock" data-brand="<?= $produto['marca-tag'] ?>">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="<?= $produto['imagem'] ?>" src="<?= $produto['imagem'] ?>" alt="<?= $produto['nome'] ?>">
                                    <img class="lazyload img-hover" data-src="<?= $produto['imagem_hover'] ?>" src="<?= $produto['imagem_hover'] ?>" alt="<?= $produto['nome'] ?>">
                                </a>

                                <?php if( $contador1 === 3 ): ?>
                                <div class="on-sale-wrap"><span class="on-sale-item">Em promoção</span></div>
                                <?php endif; ?>
                            </div>

                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link"><?= $produto['nome'] ?></a>

                                <div class="price"><span class="old-price">R$ 200,00</span> <span class="current-price">R$ 50,00</span></div>

                                <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                
                                <div class="variant-wrap-list">
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active line">
                                            <span class="d-none text-capitalize color-filter">Normal</span>
                                            <span class="swatch-value bg-light-white"></span>
                                            <img class="lazyload" data-src="uploads/produtos/produto-1.png" src="uploads/produtos/produto-1.png" alt="image-product">
                                        </li>
                                        
                                        <li class="list-color-item color-swatch active line">
                                            <span class="d-none text-capitalize color-filter">Amarelo</span>
                                            <span class="swatch-value bg-light-orange"></span>
                                            <img class="lazyload" data-src="uploads/produtos/produto-1-amarelo.jpg" src="uploads/produtos/produto-1-amarelo.jpg" alt="image-product">
                                        </li>

                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Azul</span>
                                            <span class="swatch-value bg-blue"></span>
                                            <img class="lazyload" data-src="uploads/produtos/produto-1-azul.jpg" src="uploads/produtos/produto-1-azul.jpg" alt="image-product">
                                        </li>
                                    </ul>

                                    <div class="list-product-btn">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Faça seu pedido</a>

                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                            <span class="icon icon-eye"></span>
                                            <span class="tooltip">Mais detalhes</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        
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
                        $contador = 0;
                        $produtos = [
                            [
                                'nome' => 'Giz de cera',
                                'marca' => 'Faber Castell',
                                'marca-tag' => 'faber-castell',
                                'imagem' => 'uploads/produtos/produto-1.png',
                                'imagem_hover' => 'uploads/produtos/produto-1.png'
                            ],
                            [
                                'nome' => 'Canetinhas',
                                'marca' => 'Faber Castell',
                                'marca-tag' => 'faber-castell',
                                'imagem' => 'uploads/produtos/produto-2.png',
                                'imagem_hover' => 'uploads/produtos/produto-2.png'
                            ],
                            [
                                'nome' => 'Cadeira de metal',
                                'marca' => 'Fabrica X',
                                'marca-tag' => 'fabrica-x',
                                'imagem' => 'uploads/produtos/produto-3.png',
                                'imagem_hover' => 'uploads/produtos/produto-3.png'
                            ],
                            [
                                'nome' => 'Cadeira de escritório',
                                'marca' => 'Fabrica Y',
                                'marca-tag' => 'fabrica-y',
                                'imagem' => 'uploads/produtos/produto-4.png',
                                'imagem_hover' => 'uploads/produtos/produto-4.png'
                            ]
                        ];

                        foreach ($produtos as $produto):
                            $contador++;
                        ?>
                        <!-- card product 1 -->
                        <div class="card-product grid" data-availability="Out of stock" data-brand="<?= $produto['marca-tag'] ?>">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="<?= $produto['imagem'] ?>" src="<?= $produto['imagem'] ?>" alt="<?= $produto['nome'] ?>">
                                    <img class="lazyload img-hover" data-src="<?= $produto['imagem_hover'] ?>" src="<?= $produto['imagem_hover'] ?>" alt="<?= $produto['nome'] ?>">
                                </a>

                                <?php if( $contador === 3 ): ?>
                                <div class="on-sale-wrap"><span class="on-sale-item">Em promoção</span></div>
                                <?php endif; ?>

                                <div class="list-product-btn">
                                    <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                        <span class="icon icon-eye"></span>
                                        <span class="tooltip">Mais detalhes</span>
                                    </a>
                                </div>

                                <div class="list-btn-main">
                                    <a href="mailto:pedido@g3suprimentos.com.br" class="btn-main-product">Fazer o pedido</a>
                                </div> 
                            </div>

                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link"><?= $produto['nome'] ?></a>
                                <span class="text-secondary"><?= $produto['marca'] ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>

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
                            <input type="checkbox" name="brand" class="tf-check" id="faber-castell">
                            <label for="faber-castell">Faber Castell <span class="count-brand">(112)</span></label>
                        </fieldset>

                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="mattel">
                            <label for="mattel">Mattel <span class="count-brand">(2)</span></label>
                        </fieldset>

                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="adelbras">
                            <label for="adelbras">Adelbras <span class="count-brand">(42)</span></label>
                        </fieldset>

                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="colacrill">
                            <label for="colacrill">Colacril <span class="count-brand">(13)</span></label>
                        </fieldset>

                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="fabrica-y">
                            <label for="fabrica-y">Fabrica Y <span class="count-brand">(54)</span></label>
                        </fieldset>

                        <fieldset class="fieldset-item">
                            <input type="checkbox" name="brand" class="tf-check" id="fabrica-x">
                            <label for="fabrica-x">Fabrica X <span class="count-brand">(93)</span></label>
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
     

    <?php include_once('_produtoPreview.php'); ?>


    <?php include_once('_menuMobile.php'); ?>


    <?php include_once('_scripts.php'); ?>