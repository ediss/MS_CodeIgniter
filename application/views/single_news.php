<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<section class="row page_intro">
        <div class="row m0 inner">
            <div class="container">
                <div class="row">
                    <h1><?php echo (!empty($news) ?  $news->vest_naslov :  "something went wrong!" ); ?></h1>
                    
                </div>
            </div>
        </div>
    </section>
    
 <section class="row breadcrumbRow">
        <div class="container">
        </div>
    </section>
    
    <section class="row service_details">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 serviceDetailsSection">
                    <?php 
                        if(!empty($news)){
                    ?>
                    <h2 class="post_title"><span class="post_icon"><img src="images/icons/service_block/1.png" alt=""></span><?php echo $news->naslov ?></h2>
                    <?php
                        echo $news->vest;
 
                       if(!empty($deptlist)){
                    ?>
                        <div class='news_gallery'>
                    <?php
                        //foreach($slike as $slika){
                            for($i=0;$i<count($deptlist);$i++){
                    ?>
                       
                        <a class="fancybox" href="<?php echo base_url().$deptlist[$i]->putanja; ?>" data-fancybox-group="gallery" title=" "><div class="col-sm-6 gallery-locations" style="margin:10px 0 10px 0;"><img src="<?php echo base_url().$deptlist[$i]->putanja;?>" alt="" class="img-responsive"></div></a>
                    <?php
                        }
                        echo "</div>";
                       }
                    
                    }
                    ?>
                
    
                    <div class="col-md-12 text-center">
                        <?php echo $pagination; ?>
                    </div>

                    <div class='col-lg-12 text-center'>
                        <div class='share '>
                            
                                <ul class="ct-share">
                                <!--<li class="share-txt"><i class="fa fa-share-alt-square fa-lg" aria-hidden="true"></i>
                                Share<span class="mb-hide"></span></li>-->
                                    
                                    <li class='fb-like'>
                                        <div class="fb-like" data-href="<?php echo base_url();?>News/single_news/<?php echo $news->id_page; ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                                    </li>

                                    <li class="fb-share">
                                        <div class="fb-share-button" data-href="<?php echo base_url();?>News/single_news/<?php echo $news->id_page; ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url();?>News/single_news/<?php echo $news->id_page; ?>" class="fb-xfbml-parse-ignore">Share</a></div>
                                    </li>

                                    
                                    <li class="tw-share">
                                        <a href="http://twitter.com/intent/tweet?url=<?php echo base_url();?>News/single_news/<?php echo $news->id_page; ?>&amp;text=Swiss Medica&amp;hashtags=" id="TwitterShare" class="twitter"><span class="tw-icon"></span><i class="fab fa-twitter"></i> Twitter</a>
                                    </li>
                                    
                                    <li class="wa-share">
                                        <a href="whatsapp://send?text=<?php echo base_url();?>News/single_news/<?php echo $news->id_page; ?>" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                                    </li>
                                    
                                    <!--<li class="em-share">
                                        <a id="EmailShare" href="http://www.parkinsonstreatment-europe.com/contact-clinic.html"><span class="em-icon"></span><i class="fa fa-envelope" aria-hidden="true"></i>Email</a>
                                    </li>-->
                                </ul>
                                
                        </div>

                    </div>
                    <div class='cleaner'></div>
                </div>
                
               <div class="col-sm-4 sidebar">

                    <div class="row m0 widget other_services">
                        <h5 class="widget_heading">News</h5>
                        <ul class="list-unstyled services_list">
                           <!--<li class="active"><i class="fa fa-arrow-right"></i><a href="nova-medica-cooperazione-dns-health-corporation.html">Cooperazione in abu dhabi</a></li>
                            <li><i class="fa fa-arrow-right"></i><a href="nova-medica-conferenza-riabilitazione-neuro-abu-dhabi.html">Conferenza riabilitazione neuro</a></li>
                            <li><i class="fa fa-arrow-right"></i><a href="nova-medica-conferenza-americana-anti-aging.html">Conferenza anti età</a></li>   
                               <li>
                            <li>
                            <li>-->
                        
                            <?php
                                if(!empty($all)){
                                    foreach($all as $row){
                                    //$id=$row->id_news;
                                    $id=$row->id_page;
                                    $naslov = $row->id_page;
                            ?>
                            
                            <li <?php echo($mojid==$naslov) ? $active : ""; ?>><i class="fa fa-arrow-right"></i><a href="<?php echo base_url();?>News/single_news/<?php echo $id;?>"><?php echo $row->naslov;?></a></li>   
                            
                            <?php
                                }
                            }
                            ?>
                        </ul>
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