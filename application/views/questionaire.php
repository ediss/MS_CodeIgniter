<html class="" lang="en">
    <head>
        <script src="//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js"></script>
        <script src="//static.codepen.io/assets/editor/live/css_live_reload_init-890dc39bb89183d4642d58b1ae5376a0193342f9aed88ea04330dc14c8d52f55.js"></script>
        <meta charset="UTF-8"><meta name="robots" content="noindex">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
        <link rel="canonical" href="https://codepen.io/anon/pen/rvxaOK">
        <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/stylestepbystep.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        
        <script src='<?php echo base_url();?>js/stepbystep.js'></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js" integrity="sha384-lZmvU/TzxoIQIOD9yQDEpvxp6wEU32Fy0ckUgOH4EIlMOCdR823rg4+3gWRwnX1M" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8"><a href="<?php echo base_url();?>"><img src="http://www.startstemcells.com/img/3.png"></a></div> 
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-8">
                <p style="text-align:center;">Thanks for your inquiry to Swiss Medica XXI century clinic.</p> 
                <p style="text-align:center;">We have received your message and advisor will contact you as soon as possible. </p>
                <p style="text-align:center;">Click <a href="<?php echo base_url();?>Contact">HERE</a> to come back to previous page.</p>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h2>Learn the treatment programs and cost<br>based on your current state, <br>demands and expectations.</h2>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p>Advisor could provide you more information, precisely answer your questions and set an individual program. </p>
                <p>Please fill in the form below to do so.</p>
            </div>
            <div class="col-md-3"></div>
        </div>
        
        <div class="row"> 
            <div class="col-md-12">
            <h2><?php echo ($this->session->flashdata('success')) ? $this->session->flashdata('success') : ""; ?></h2>

            <!-- multistep form -->

                <form id="msform" action='<?php echo base_url();?>Handler' method='POST'>

                    <ul id="progressbar">
                        <li class="active">BASIC INFORMATION</li>
                        <li>YOUR DIAGNOSE</li>
                        <li>CO-EXISTING DISEASES</li>
                        <li>SPECIFIC ORGAN ILLNESSES</li>
                        <li>ADDITIONAL INFORMATION</li>
                    </ul>

                    <fieldset>
                        <h2 class="fs-title">QUESTIONAIRE</h2>
                        <h3 class="fs-subtitle">Enter basic information about yourself</h3>
                        <label class='myLabel'>Gender:</label><br/><br/>
                        <label class='myLabel'><input name="gender" type="radio" value="male" id="sex_0">Male</label>
                        <label class='myLabel'><input name="gender" type="radio" value="female" id="sex_1">Female</label>
                        <input class="validate[required] text-input" type="date" name="birth" id="birth"placeholde="Date of birth">
                        <input name="weight" type="text" class="validate[required] text-input" id="weight" size="100" placeholder="Your weight, height?">          
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>

                    <fieldset>
                        <h2 class="fs-title">QUESTIONAIRE</h2>
                        <h3 class="fs-subtitle">Enter basic information about your disease</h3>
                        <input name="diagnosis" type="text" class="validate[required] text-input" id="diagnosis" size="100" placeholder="What is your diagnosis (disease):">
                        <input name="howlong" type="text" class="validate[required] text-input" id="howlong" size="100" placeholder="How long do you suffer from the pointed disease?">
                        <input name="medications" type="text" class="validate[required] text-input" id="medications" size="100" placeholder="What kind of medications do you currently use?">
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>

                    <fieldset>
                        <h2 class="fs-title">QUESTIONAIRE</h2>
                        <h3 class="fs-subtitle">Please describe us more closely other difficulties you have</h3>
                        <input name="headinjury" type="text" class="validate[required] text-input" id="headinjury" size="100" placeholder="Do you have (or had in the past) other co-existing diseases?">
                        <textarea name="problemstxt" class="validate[required] text-input" cols="100" rows="3" id="problems" placeholder='Please describe if you have any problems with: breathing, movements, speech, sleep, etc..'></textarea>
                        <label class='myLabel'>Do you need assistance performing every day activities?</label><br/><br/>
                        
                        <div class='cleaner'></div>
                        
                        <label class='myLabel'><input class="validate[required] radio" type="radio" name="assistance" value="Yes" id="assistance_0">Yes</label>
                        
                        <div class='cleaner'></div>
                        
                        <label class='myLabel'><input class="validate[required] radio" type="radio" name="assistance" value="No" id="assistance_1">No</label><br/><br/>

                        <div class='cleaner'></div>

                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>

                    <!--4 step: Do you suffer from illness of any of the following organs -->

                    <fieldset>
                        <h2 class="fs-title">QUESTIONAIRE</h2>
                        <h3 class="fs-subtitle">Mark step by step all the organs you've had problems with</h3>
                        <label class='myLabel'>Do you suffer from illness of any of the following organs</label><br/><br/>
                        <label class='myLabel'>a)Heart</label><br/>

                        <div class='cleaner'></div>

                        <label class='myLabel'><input name="heart" type="radio" class="validate[required] radio" value="yes" id="heart_0">Yes</label> 
                        <label class='myLabel'><input name="heart" type="radio" class="validate[required] radio" value="no" id="heart_1">No</label><br/><br/><br/>
                        <label class='myLabel'>b)Lungs</label><br/>

                        <div class='cleaner'></div>

                        <label class='myLabel'><input class="validate[required] radio" type="radio" name="lungs" value="yes" id="lungs_0">Yes</label>
                        <label class='myLabel'><input class="validate[required] radio" type="radio" name="lungs" value="no" id="lungs_1">No</label><br/><br/><br/>
                        <label class='myLabel'>c)Liver</label><br/>

                        <div class='cleaner'></div>

                        <label class='myLabel'><input class="validate[required] radio" type="radio" name="liver" value="yes" id="liver_0">Yes</label>
                        <label class='myLabel'><input class="validate[required] radio" type="radio" name="liver" value="no" id="liver_1">No</label><br/><br/><br/>
                        <label class='myLabel'>d)Digestive system</label><br/>

                        <div class='cleaner'></div>
                        <label class='myLabel'><input class="validate[required] radio" type="radio" name="digestive" value="yes" id="digestive_0">Yes</label>
                        <label class='myLabel'><input class="validate[required] radio" type="radio" name="digestive" value="no" id="digestive_1">No</label><br/><br/><br/>
                        <label class='myLabel'>e)Muscular system</label><br/>
                        
                        <div class='cleaner'></div>

                        <label class='myLabel'><input class="validate[required] radio" type="radio" name="muscular" value="yes" id="muscular_0">Yes</label>
                        <label class='myLabel'><input class="validate[required] radio" type="radio" name="muscular" value="no" id="muscular_1">No</label><br/><br/><br/>
                        <label class='myLabel'>f)Other</label><br/>

                        <div class='cleaner'></div>

                        <textarea name="other" cols="100" rows="3" id="Other"placeholder='Other'></textarea><br/><br/>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>

                    <!--Are you allergic to anything, Have you been treated with Stem Cells before?-->

                    <fieldset>
                        <h2 class="fs-title">QUESTIONAIRE</h2>
                        <h3 class="fs-subtitle">Fill in these final sections and submit the form</h3>
                        <textarea name="allergytxt" class="validate[required] text-input" cols="100" rows="3" id="allergy" placeholder="Are you allergic to anything?"></textarea>
                        <textarea name="treatedtxt" class="validate[required] text-input" cols="100" rows="3" id="treated" placeholder="Have you been treated with Stem Cells before?"></textarea>
                        <input name="name" type="text" class="text-input" id="name" size="100" placeholder="First and Last name" />
                        <input name="phone" type="text" class="text-input" id="phone" placeholder="Phone number" required />
                        <input name="email" type="text" class="text-input" id="mail"  size="100"placeholder="E-mail address" required>
                        <input name="country" type="text" class="text-input" id="country" size="100" placeholder="Country"/>
                        <textarea name="message" type="text" id="message" placeholder="Message" ></textarea>
                        <input name="countryip" type="hidden" class="text-input" id="drzava_amo"  />
                        <input type='hidden' value='q3' name='hiddenTag' />
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="submit" name="btnSbyS" class="send action-button" value="Submit" />
                    </fieldset>
                </form>

            </div>  

        </div>



    </div>

    <footer>
        <script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src='<?php echo base_url();?>js/stepbystep.js'></script>
    </footer>
</body>

</html>