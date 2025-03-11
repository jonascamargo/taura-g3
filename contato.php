<?php
$page = 'contato';

include_once("_header.php");
?>

        <!-- map -->
        <div class="wrap-map">
            <div id="map-contact" class="map-contact h520"  data-map-zoom="16" data-map-scroll="true"></div>
        </div>
        <!-- /map -->

        <!-- contact-us -->
        <section class="flat-spacing">
            <div class="container">
                <div class="contact-us-content">

                    <div class="left">
                        <h4>Entre em contato</h4>
                        <p class="text-secondary-2">Use o formulário abaixo para entrar em contato com a nossa equipe</p>

                        <form id="contactform" action="./contact/contact-process.php" method="post" class="form-leave-comment">
                            <div class="wrap">
                                <div class="cols">
                                    <fieldset class="">
                                        <input class="" type="text" placeholder="Seu Nome*" name="name" id="name" tabindex="2" value="" aria-required="true" required="">
                                    </fieldset>

                                    <fieldset class="">
                                        <input class="" type="email" placeholder="Seu Email*" name="email" id="email" tabindex="2" value="" aria-required="true" required="">
                                    </fieldset>
                                </div>

                                <fieldset class="">
                                    <textarea name="message" id="message" rows="4" placeholder="Sua Mensagem*" tabindex="2" aria-required="true" required=""></textarea>
                                </fieldset>
                            </div>

                            <div class="button-submit send-wrap">
                                <button class="tf-btn btn-fill" type="submit">
                                    <span class="text text-button">Enviar Mensagem</span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="right">
                        <h4>Informações</h4>

                        <div class="mb_20">
                            <div class="text-title mb_8">Telefone:</div>
                            <a href="tel:555430352128" class="text-secondary">(54) 3035-2128</a>
                        </div>

                        <div class="mb_20">
                            <div class="text-title mb_8">E-mail:</div>
                            <a href="mailto:contato@g3suprimentos.com.br" class="text-secondary">contato@g3suprimentos.com.br</a>
                        </div>

                        <div class="mb_20">
                            <div class="text-title mb_8">Endereço:</div>
                            <a href="https://www.google.com/maps" class="text-secondary">Rua Três de Outubro383, Farroupilha - RS</a>
                        </div>

                        <div>
                            <div class="text-title mb_8">Horários:</div>

                            <p class="mb_4 open-time">
                                <span class="text-secondary">Seg - Sex:</span> 7:30am - 8:00pm PST
                            </p>

                            <p class="open-time">
                                <span class="text-secondary">Sab:</span> 9:00am - 5:00pm PST
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /contact-us -->

        <?php include_once('_footer.php'); ?>

    </div>
    <!-- /wrapper -->
    

    <?php include_once('_menuMobile.php'); ?>
    

    <?php include_once('_scripts.php'); ?>