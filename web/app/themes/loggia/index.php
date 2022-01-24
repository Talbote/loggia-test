<?php get_header() ?>

        <?php

        $fields = get_fields();

        $sec1Title = get_field("sec1_title");
        $sec1Content = get_field("sec1_content");
        $sec1Content2 = get_field("sec1_content2");
        $sec1Permalink = get_field("sec1_permalink");

        $sec2Title = get_field("sec2_title");
        $sec2Content = get_field("sec2_content");
        $sec2Permalink = get_field("sec2_permalink");
        $sec2ResponsiveTitle = get_field("sec2_responsiv_title");

        $sec3Description = get_field("sec3_description");
        $sec3Content = get_field("sec3_content");
        $sec3Content2 = get_field("sec3_content2");
        $sec3Content3 = get_field("sec3_content3");

        $sec3ResponsiveTitle = get_field("sec3_responsive_title");
        $sec3ResponsiveTextArea = get_field("sec3_responsive_text_area");


        ?>



        <!-- ====== section 1 ======  -->
        <section class="section1">
            <div class="container">
                <div class="row">
                    <!--  block -->
                    <div class="sec1-b1 col p-5">
                        <h5 class="pb-2 sec1-b1-h2">  <?php echo $sec1Title ?></h5>
                        <p class="sec1-b1-text"><?php echo $sec1Content ?> </p>
                    </div>

                    <div class="sec1-b2 col p-5">
                        <p class="sec1-b2-text"><?php echo $sec1Content2 ?></p>

                        <div data-aos="fade-right" class="pt-5">
                            <!-- ======logo fleche ======  -->
                            <span >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24.115" height="10.627" viewBox="0 0 24.115 10.627"><g
                                id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right"
                                transform="translate(0.5 0.707)"><path id="Tracé_52" data-name="Tracé 52"
                                                                       d="M7.5,18H30.615"
                                                                       transform="translate(-7.5 -13.394)" fill="none"
                                                                       stroke="#d38367" stroke-linecap="round"
                                                                       stroke-linejoin="round" stroke-width="1"/><path
                                    id="Tracé_53" data-name="Tracé 53" d="M18,7.5l4.606,4.606L18,16.713"
                                    transform="translate(0.509 -7.5)" fill="none" stroke="#d38367"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg>
                    </span>
                            <span class="sec1-b2-h2 p-2"> <?php echo $sec1Permalink ?></span>
                        </div>
                    </div>
                </div>
        </section>
        <!-- ====== End section 1 ======  -->


        <!-- ====== section 2 ======  -->

        <section class="section2">
            <div class="position-relative">
                <div class="bg-img-sec2 position-relative">

                    <!--     <img class="position-absolute" src="https://picbak.be/app/themes/loggia/img/sec2/bg-img-sec2.png" alt="Girl in a jacket" width="600" height="600"> -->
                    <div data-aos="fade-zoom-in"
                         data-aos-easing="ease-in-back"
                         data-aos-delay="400"
                         data-aos-offset="0" class="marker-red position-absolute position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 327.2 335.2">
                            <defs>
                                <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#f89e88"/>
                                    <stop offset="1" stop-color="#9d4a2e"/>
                                </linearGradient>
                            </defs>
                            <path id="Tracé_54" data-name="Tracé 54"
                                  d="M492.6,1909.4v144h12.8v44.8l45.6,1v11l104,1v-13h36v5.6H807v-46.4H776.6v-45.8L763,1999.8H708.6v-20h20.8v4.8l71.4-1.8v-70.4h-33v-38.2H807l12.8-38.4L808,1793.4H771.8V1776h-77v17.4H650.2v8.8h-8.8l-2,80.4H492.6Z"
                                  transform="translate(-492.6 -1776)" opacity="0.72" fill="url(#linear-gradient)"/>
                        </svg>

                        <h2 class="position-absolute">A</h2>
                        <p class="position-absolute">14 APPARTMENTS</p>
                    </div>
                </div>


                <div data-aos="fade-up" class="p-3 sec2-content-loggia-right position-absolute">
                    <div class="m-5">
                        <h2 class="pb-3"> <?php echo $sec2Title ?></h2>
                        <p><?php echo $sec2Content ?></p>

                        <div class="p-3">
                        <span>
                    <!-- ======logo fleche ======  -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24.115" height="10.627" viewBox="0 0 24.115 10.627"><g
                                id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right"
                                transform="translate(0.5 0.707)"><path id="Tracé_52" data-name="Tracé 52"
                                                                       d="M7.5,18H30.615"
                                                                       transform="translate(-7.5 -13.394)" fill="none"
                                                                       stroke="#d38367" stroke-linecap="round"
                                                                       stroke-linejoin="round" stroke-width="1"/><path
                                    id="Tracé_53" data-name="Tracé 53" d="M18,7.5l4.606,4.606L18,16.713"
                                    transform="translate(0.509 -7.5)" fill="none" stroke="#d38367"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg>

                    </span>
                            <span class="p-2 line-grad-sec2"> <?php echo $sec2Permalink ?></span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ====== Responsiv sec2-content-loggia-right-r ======  -->
            <div class="p-2 sec2-content-loggia-right-r">
                <div class="m-1">
                    <div data-aos="fade-bottom" data-aos-delay="500"  class="pb-3">
                        <span>
                    <!-- ======logo fleche ======  -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24.115" height="10.627" viewBox="0 0 24.115 10.627"><g
                                id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right"
                                transform="translate(0.5 0.707)"><path id="Tracé_52" data-name="Tracé 52"
                                                                       d="M7.5,18H30.615"
                                                                       transform="translate(-7.5 -13.394)" fill="none"
                                                                       stroke="#d38367" stroke-linecap="round"
                                                                       stroke-linejoin="round" stroke-width="1"/><path
                                    id="Tracé_53" data-name="Tracé 53" d="M18,7.5l4.606,4.606L18,16.713"
                                    transform="translate(0.509 -7.5)" fill="none" stroke="#d38367"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg>

                    </span>
                        <span class="p-1 pb-2"> <?php echo $sec2Permalink ?></span>
                    </div>

                    <h2 class="pb-3"><?php echo $sec2Content ?></h2>
                    <p><?php echo $sec2ResponsiveTitle ?></p>

                </div>
            </div>
            <!-- ====== End Responsiv sec2-content-loggia-right-r ======  -->
        </section>

        <!-- ====== End section 2 ======  -->

        <!-- ====== section 3 ======  -->


        <section class="section3">
            <div class="container">
                <div class="row">
                    <div data-aos="fade-zoom-in"
                         data-aos-easing="ease-in-back"
                         data-aos-delay="300"
                         data-aos-offset="0" class="sec3-b1 col">
                        <!-- ====== Responsiv sec3 title  ======  -->
                        <h5 class="pb-2 sec3-b1-h2-r"> <?php echo $sec3ResponsiveTitle ?></h5>
                        <!-- ====== End Responsiv sec3 title  -->
                        <h2 class="pb-4"><?php echo $sec3Description ?></h2>
                        <p><?php echo $sec3Content ?></p>
                    </div>
                    <div data-aos="fade-zoom-in"
                         data-aos-easing="ease-in-back"
                         data-aos-delay="300"
                         data-aos-offset="0" class="sec3-b2 col">
                        <div class="text-desktop">
                            <p><?php echo $sec3Content2 ?></p>
                            <p><?php echo $sec3Content3 ?></p>
                        </div>
                        <!-- ====== Responsiv sec3 text-area  ======  -->
                        <div class="text-r">
                            <?php echo $sec3ResponsiveTextArea ?>
                        </div>
                        <!-- ====== End Responsiv sec3 text-area  ======  -->

                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End section 3 ======  -->



<?php get_footer() ?>
