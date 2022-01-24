<?php wp_footer() ?>
<!--====== Footer ======-->

<?php

$footerAddress = get_field('footer_address');
$footerTitle = get_field('footer_title_logo');
$footerNumber = get_field('footer_number');
$footerEmail = get_field('footer_email');
$contactForm = get_field('contact_form');
?>

<footer>

    <!-- ======  Contact  ======  -->
    <div class="contact" class="row">
        <div class="container">

            <div class="row">

                <div class="col-12 col-sm-12 col-12 col-xl-6 row text-left">

                    <h2 class="pt-2 pb-2">Adresse du site</h2>
                    <p class="p-1"><?php echo $footerAddress ?></p>
                    <h2 class="pt-3 pb-3">Infos</h2>
                    <span class="p-1"><?php echo $footerTitle ?></span>
                    <span class="p-1"><?php echo $footerNumber ?></span>
                    <span class="p-1">Adresse de l'agence Immo</span>
                    <span class="p-1"><?php echo $footerEmail ?></span>
                    <div class=" pt-5 pb-5 contact-logo">
                        <div class="row">
                            <!-- ======logo immocube ======  -->
                            <span class="cube-logo">

                            <svg xmlns="http://www.w3.org/2000/svg" width="18.507" height="20"
                                 viewBox="0 0 18.507 20"><g
                                        id="Groupe_1180" data-name="Groupe 1180"
                                        transform="translate(1165.459 -379.933)"><path id="Tracé_10"
                                                                                       data-name="Tracé 10"
                                                                                       d="M-1146.212,380.043l-8.086,4.043a.33.33,0,0,0-.11.075.286.286,0,0,0,0,.439.334.334,0,0,0,.11.075c2.684,1.354,7.914,4,8.06,4.045a1.652,1.652,0,0,0,1.221-.01c.195-.069,7.969-3.956,8.054-4.027.179-.148.3-.356.05-.564a.465.465,0,0,0-.117-.074c-2.659-1.337-7.819-3.937-7.987-3.993a1.641,1.641,0,0,0-1.054-.059.468.468,0,0,0-.141.051Z"
                                                                                       transform="translate(-10.572)"
                                                                                       fill="#fff" fill-rule="evenodd"/><path
                                            id="Tracé_11" data-name="Tracé 11"
                                            d="M-882.165,546.119v8.969a.561.561,0,0,0,.011.137.369.369,0,0,0,.533.236.831.831,0,0,0,.127-.059c2.54-1.36,7.519-4.017,7.612-4.1a1.333,1.333,0,0,0,.469-.691.7.7,0,0,0,.011-.146l.021-8.962a.785.785,0,0,0-.01-.15c-.034-.24-.17-.357-.394-.328a.512.512,0,0,0-.121.029.923.923,0,0,0-.124.059l-7.546,4.05a.491.491,0,0,0-.123.085,1.2,1.2,0,0,0-.434.618.479.479,0,0,0-.027.114c0,.053,0,.066,0,.134Z"
                                            transform="translate(-273.571 -155.564)" fill="#fff" fill-rule="evenodd"/><path
                                            id="Tracé_12" data-name="Tracé 12"
                                            d="M-1164.913,551.321l7.759,4.134a.245.245,0,0,0,.114.041.338.338,0,0,0,.354-.246.431.431,0,0,0,.011-.126v-9.038a.382.382,0,0,0-.021-.147,1.092,1.092,0,0,0-.4-.661c-.092-.078-7.606-4.138-7.762-4.194a.457.457,0,0,0-.438,0c-.1.059-.135.128-.156.276a.8.8,0,0,0-.01.15c0,3.033.006,9,.031,9.1a1.233,1.233,0,0,0,.395.625.388.388,0,0,0,.12.088Z"
                                            transform="translate(0 -155.565)" fill="#fff"
                                            fill-rule="evenodd"/></g></svg>
                           </span>
                            <!-- ====== End logo immocube ======  -->
                            <span class="title-logo">immocube</span>
                            <span class="description-logo">VALORISE VOS METRES CUBES</span>
                        </div>


                    </div>
                </div>


                <div class="col-12 col-sm-12 col-xl-6">
                    <!-- contact form 7 -->
                    <form>
                        <?php echo $contactForm ?>
                        <!--
                             <div class="form-group col-md-5">
                                 <select id="inputState" class="form-control">
                                     <option selected>Raison d'achat</option>
                                     <option>...</option>
                                 </select>
                             </div>

                             <div class="form-price-r form-group col-md-5 mb-5 mt-5">
                                 <select id="inputState" class="form-control">
                                     <option selected>Gamme de Prix</option>
                                     <option>...</option>
                                 </select>
                             </div>

                             <div class="form-range form-group row mb-5 mt-5">
                                 <div class="col-6">
                                     <span>Quel est la gamme de prix que vous considérez ?</span>
                                 </div>
                                 <div class="range col">
                                     <div class="js-range-slider">
                                         <input id="flat_0" type="text" name="" value=""/>
                                     </div>
                                 </div>

                             </div>

                             <div class="form-row mt-3 row">
                                 <div class="col-md-5">
                                     <label for="inputLastname"></label>
                                     <input type="text" class="form-control" id="inputEmail4" placeholder="Nom">
                                 </div>
                                 <div class="col">
                                     <label for="inputFirstname"></label>
                                     <input type="text" class="form-control" id="inputEmail4" placeholder="Prénom">
                                 </div>
                             </div>


                             <div class="form-row mt-3 row">
                                 <div class="col-md-5 mr-5">
                                     <label for="inputEmail4"></label>
                                     <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail">
                                 </div>
                                 <div class="col">
                                     <label for="inputNumber"></label>
                                     <input type="text" class="form-control" id="inputEmail4"
                                            placeholder="Numéro de téléphone">
                                 </div>
                             </div>

                             <div class="form-group col-md-5 mt-5">
                                 <label for="inputCommentaire"></label>
                                 <input type="text" class="form-control" id="inputZip" placeholder="Commentaire">
                             </div>

                             <div class="form-group mb-5 mt-5">
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="gridCheck">
                                     <label class="form-check-label" for="gridCheck">
                                         J'ai pris connaissance des conditions générales et je les accepte
                                     </label>
                                 </div>
                             </div>
                             <button type="submit" class="button-contact ">ENVOYER</button> -->
                    </form>
                    <!-- end contact form 7 -->
                </div>
            </div>
        </div>
    </div>

    <!-- ====== End Contact  ======  -->

    <div class="p-5 ">
        <div class="row">
            <div class="col-6 title-footer pb-5">
                <h2 class="mt-1">LOGGIA</h2>
            </div>
            <div class="col-6 social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16.496" height="30.8" viewBox="0 0 16.496 30.8">
                    <path
                            id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f"
                            d="M17.025,17.325l.855-5.574H12.531V8.134c0-1.525.747-3.011,3.143-3.011h2.432V.377A29.652,29.652,0,0,0,13.789,0c-4.4,0-7.284,2.67-7.284,7.5v4.248h-4.9v5.574h4.9V30.8h6.026V17.325Z"
                            transform="translate(-1.609)" fill="#2e2e2e"/>
                </svg>
            </div>


            <div class="col pt-3 row">
                <p>&copy; Loggia Waremme 2021. All Right Reserved.</p>
                <p> Cookies - Mention légale</p>
            </div>

            <div class="text-center col pt-5">
                <span>Website by eteamsys.com</span>
            </div>
        </div>
    </div>
</footer>
<!--====== End Footer ======-->
</body>
</html>