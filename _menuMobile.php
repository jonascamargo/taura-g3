    
    <!-- mobile menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>

        <div class="mb-canvas-content">
            <div class="mb-body">

                <div class="mb-content-top">
                    <form class="form-search">

                        <fieldset class="text">
                            <input type="text" placeholder="O que você está procurando?" class="" name="text" tabindex="0" value="" aria-required="true" required="">
                        </fieldset>

                        <button class="" type="submit">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20.9984 20.9999L16.6484 16.6499" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>

                    </form>

                    <ul class="nav-ul-mb" id="wrapper-menu-navigation">

                        <!-- <li class="nav-mb-item active"> -->
                        <li class="nav-mb-item">
                            <a href="./index" class="mb-menu-link" aria-expanded="true">
                                <span>Página inicial</span>
                            </a>
                        </li>

                        <li class="nav-mb-item">
                            <a href="./sobre" class="mb-menu-link" aria-expanded="true">
                                <span>Conheça a G3</span>
                            </a>
                        </li>

                        <li class="nav-mb-item">
                            <a href="#dropdown-menu-produtos" class="collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-produtos">
                                <span>Produtos</span>
                                <span class="btn-open-sub"></span>
                            </a>

                            <div id="dropdown-menu-produtos" class="collapse">
                                <ul class="sub-nav-menu">

                                    <li>
                                        <a href="#sub-product-one" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-one">
                                            <span>Escritório</span>
                                            <span class="btn-open-sub"></span>
                                        </a>

                                        <div id="sub-product-one" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="./produtos" class="sub-nav-link">Canetas</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Marcados Texto</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Borrachas</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Lapiseiras</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Lápis</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#sub-product-two" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-two">
                                            <span>Papelaria</span>
                                            <span class="btn-open-sub"></span>
                                        </a>

                                        <div id="sub-product-two" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="./produtos" class="sub-nav-link">Cartolinas</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">EVA</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Bloco Adesivo</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Pacote de Papel</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Papel para desenho</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#sub-product-three" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-three">
                                            <span>Móveis</span>
                                            <span class="btn-open-sub"></span>
                                        </a>

                                        <div id="sub-product-three" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="./produtos" class="sub-nav-link">Móveis em Madeira</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Móveis em Aço</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Cadeiras</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#sub-product-four" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-four">
                                            <span>Suprimentos</span>
                                            <span class="btn-open-sub"></span>
                                        </a>

                                        <div id="sub-product-four" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="./produtos" class="sub-nav-link">HP</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Epson</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Toners</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#sub-product-five" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-five">
                                            <span>Máterial escolar</span>
                                            <span class="btn-open-sub"></span>
                                        </a>

                                        <div id="sub-product-five" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="./produtos" class="sub-nav-link">Tintas</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Colas</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Lápis de color</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#sub-product-six" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-six">
                                            <span>Brinquedos</span>
                                            <span class="btn-open-sub"></span>
                                        </a>

                                        <div id="sub-product-six" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="./produtos" class="sub-nav-link">Hot Wheels</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Barbie</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Jogos de Tabuleiro</a></li>
                                                <li><a href="./produtos" class="sub-nav-link">Jogos de Cartas</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-mb-item">
                            <a href="./blog" class="mb-menu-link" aria-expanded="true">
                                <span>Blog</span>
                            </a>
                        </li>

                        <li class="nav-mb-item">
                            <a href="./contato" class="mb-menu-link" aria-expanded="true">
                                <span>Contato</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mb-other-content">

                    <div class="mb-contact">
                        <p class="text-caption-1">Rua Três de Outubro383, Farroupilha - RS</p>
                        <a href="contato" class="tf-btn-default text-btn-uppercase">ONDE ESTAMOS<i class="icon-arrowUpRight"></i></a>
                    </div>

                    <ul class="mb-info">
                        <li>
                            <i class="icon icon-mail"></i>
                            <a href="mailto:contato@g3suprimentos.com.br">contato@g3suprimentos.com.br</a>
                        </li>

                        <li>
                            <i class="icon icon-phone"></i>
                            <a href="tel:555430352128">54 3035.2128</a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
    <!-- /mobile menu -->