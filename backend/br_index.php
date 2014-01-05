<section>
    <div class="container">
        <div class="row">
            <div class="sixteen columns">
                <div id="brGetOnline">
                    <h1>India's #1 destination for Websites</h1>
                    <h4>Over 6 million customers trust our platform for Domain Registration, Web Hosting, Website Design and more</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="eight columns">
                <div class="brBanner">
                    <h2>Get a <span class="orange">Website</span></h2>
                    <h5>Get connected with Top Designers across India</h5>
                    <hr></hr>
                    <image src="frontend/images/index_1.png"></image>
                    <hr></hr>
                    <ul>
                        <li>Find designers within your budget</li>
                        <li>Find designers across India</li>
                        <li>Get a professionally designed website today!</li>
                    </ul>
                    <hr></hr>
                    <h4>It is free!</h4>
                    <hr></hr>
                    <a href="" class="button">Begin Search</a>
                </div>
            </div>
            <div class="eight columns">
                <div class="brBanner">
                    <h2>Buy <span class="orange">Hosting</span></h2>
                    <h5>Affordable. Reliable. Secure.</h5>
                    <hr></hr>
                    <image src="frontend/images/index_2.jpg"></image>
                    <hr></hr>
                    <ul>
                        <li>Unlimited Domains, Email &amp; Space</li>
                        <li>99.9% Uptime and 24x7 Support</li>
                        <li>30 Day Money Back Guarantee</li>
                        <li>Easy to use Control Panels</li>
                    </ul>
                    <hr></hr>
                    <h4>From Rs. 59 / month</h4>
                    <hr></hr>
                    <a href="hosting.php" class="button">View Plans</a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="eight columns offset-by-four">
                <div class="brBanner">
                    <h2>What's <span class="orange">Hot</span></h2>
                    <hr></hr>
                    <div id="slides">
                        <a href=""><img src="frontend/images/index_slide_1.jpg"></img></a>
                        <a href=""><img src="frontend/images/index_slide_2.jpg"></img></a>
                        <a href=""><img src="frontend/images/index_slide_3.jpg"></img></a>
                        <a href=""><img src="frontend/images/index_slide_4.jpg"></img></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

$(document).ready(function(){
    $('#slides').slidesjs({
        width: 339,
        height: 216,
        navigation: false,
        pagination: {
          active: true,
          effect: "slide"
        },
        play: {
                active: false,
                auto: true,
                interval: 6000,
                pauseOnHover: false
        }
    });
});

</script>

