<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<img src="<?php echo base_url();?>images/bpco-trattamento.jpg" width="100%" alt="">

<section class="row page_intro">
    <div class="row m0 inner">
        <div class="container">
            <div class="row">
                
                <h1>About multiple sclerosis</h1>
            </div>
        </div>
    </div>
</section>

<section class="row breadcrumbRow">
    <div class="container">
        <div class="row m0 blog single_post">
            <blockquote>
                <p><?php echo $text->podnaslov; ?></p>
            </blockquote>
        </div>
    </div>
</section>
 

<section class="row service_details">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 serviceDetailsSection">    
            <?php    
                if(!empty($text)){
            ?>
                <h2 class="post_title"><span class="post_icon"><img src="<?php echo base_url();?>images/icons/service_block/1.png" alt=""></span><?php echo $text->naslov; ?></h2>
                <?php echo $text->tekst; ?>
            <?php
                }
            ?>
                        <div class='col-lg-12 text-center'>
                        <div class='share '>
                            
                                <ul class="ct-share">
                                <!--<li class="share-txt"><i class="fa fa-share-alt-square fa-lg" aria-hidden="true"></i>
                                Share<span class="mb-hide"></span></li>-->

                                    <li class='fb-like'>
                                        <div class="fb-like" data-href="<?php echo base_url();?>About/<?php echo $text->page_id; ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                                    </li>

                                    <li class="fb-share">
                                    <div class="fb-share-button" data-href="<?php echo base_url();?>About/<?php echo $text->page_id; ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url();?>About/<?php echo $text->page_id; ?>" class="fb-xfbml-parse-ignore">Share</a></div>
                                    </li>

                                    
                                    <li class="tw-share">
                                        <a href="http://twitter.com/intent/tweet?url=<?php echo base_url();?>About/<?php echo $text->page_id; ?>&amp;text=Swiss Medica&amp;hashtags=" id="TwitterShare" class="twitter"><span class="tw-icon"></span><i class="fab fa-twitter"></i> Twitter</a>
                                    </li>
                                    
                                    <li class="wa-share">
                                        <a href="whatsapp://send?text=<?php echo base_url();?>About/<?php echo $text->page_id; ?>" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                                    </li>
                                    <!--<li class="em-share">
                                        <a id="EmailShare" href="http://www.parkinsonstreatment-europe.com/contact-clinic.html"><span class="em-icon"></span><i class="fa fa-envelope" aria-hidden="true"></i>Email</a>
                                    </li>-->
                                </ul>
                            
                        </div>

                    </div>

                    
            </div>
        
            <div class="col-sm-4 sidebar">
                <div class="row m0 widget other_services">
                    <h5 class="widget_heading">About Multiple Sclerosis</h5>
                    <ul class="list-unstyled services_list">
                       <li><i class="fa fa-arrow-right"></i> <a href="cellule-staminali-sclerosi-multipla.html">SCLEROSI MULTIPLA</a></li>
                        <li class="active"><i class="fa fa-arrow-right"></i> <a href="bpco-terapia-con-cellule-staminali.html">BPCO</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/about_ms">About Multiple Sclerosis</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/difference_ms_stroke">Difference between MS and a Stroke</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/living_with_ms_psychological">Psychological point of view</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/living_with_ms_physiotherapy">Physiotherapy</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/living_with_ms_psychological2">MS Psychological work and support</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/ms_signs_and_sypmtoms">Multiple Sclerosis signs and symptoms</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/early_signs_of_ms">Early signs of Multiple Sclerosis</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/ms_types">Multiple Sclerosis types</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/ms_risk_factor">Multiple Sclerosis risk factor</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/ms_cure">Can Multiple Sclerosis be cured?</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/diagnosing_ms">Diagnosing Multiple Sclerosis</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/ms_effects">Multiple Sclerosis effects</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/ms_stem_cells">Stem Cells- New treatment for MS</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/ms_statistic">Multiple Sclerosis statistic</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/ms_seizures_tremors">Multiple Sclerosis seizures, tremors</a></li>
                        <li><i class="fa fa-arrow-right"></i> <a href="<?php echo base_url();?>about/ms_quick_facts">Multiple Sclerosis quick facts</a></li>

                    </ul>
                </div>
                <div class="row m0 quick_block branches">
                    <div class="row m0 inner">
                        <div class="row heading m0">
                            <p>NOTIZIE</p>
                            <h5>SU CELLULE STAMINALI</h5>
                        </div>
                        <p>Scoperta importante !</p>
                        <a href="notizie-e-nuove-scoperte.html">CONTINUA...</a>
                    </div>
                </div>
                <div class="row m0 quick_block emmergency">
                    <div class="row m0 inner">
                        <div class="row heading m0">
                            <p>COSA SONO LE</p>
                            <h5>CELLULE STAMINALI?</h5>
                        </div>
                        <p>Da quali tessuti si possono ottenere?</p>
                        <a href="cosa-sono-le-cellule-staminali.html">CONTINUA...</a>
                    </div>
                </div>
                <div class="row m0 quick_block bill_payments">
                    <div class="row m0 inner">
                        <div class="row heading m0">
                            <p>Cosa dicono di noi</p>
                            <h5>Testimonianze</h5>
                        </div>
                        <p>I nostri pazienti</p>
                        <a href="testimonianze.html">Continua...</a>
                    </div>
                </div>
                

                
            </div>
        </div>
    </div>
</section>

<section class="row quick_blocks_row quick_blocks_row2">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</section>


<section class="row book_banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <div class="row m0">
                <h5>Contact us and our doctors will recommend you an individual therapy and will offer you the best stem cell application.</h5>
                </div>
            </div>
            <div class="col-sm-4 col-md-3">
                <div class="row m0">
                    <a href="#" data-toggle="modal" data-target="#appointmefnt_form_pop" class="view_all">Request call from us</a>
                </div>
            </div>
        </div>
    </div>
</section>