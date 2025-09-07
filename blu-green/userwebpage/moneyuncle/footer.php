<footer>
    <div class="footer-area1">
        <div class="container">
            <div class="row footer-widget">
                <div class="col-md-3 col-xs-12 mob-footer">
                    <div class="col1">
                        <div class="footer-logo">
                            <a href="#"><span>COMPANY</span></a>
                        </div>
                        <div class="footer-nav">
                            <a target="_blank" href="privacy.php">Privacy Policy</a>
                            <a target="_blank" href="terms.php">Terms of Service</a>
                            <a target="_blank" href="risk-disclaimer.php">Risk Disclaimer</a>
                            <a target="_blank" href="careers.php">Careers</a>
                            <a target="_blank" href="https://help.moneyuncle.com">Help</a>
                            <a target="_blank" href="https://help.moneyuncle.com/support/tickets/new">Raise a ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 mob-footer">
                    <div class="col1">
                        <div class="footer-logo">
                            <a href="#"><span>FOR EXPERTS</span></a>
                        </div>
                        <div class="footer-nav">
                            <a href="https://experts.moneyuncle.com/"
                            >Join Partner Program</a
                            >
                            <a href="https://experts.moneyuncle.com/users/login"
                            >Sign In</a
                            >
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 footer-item">
                    <div class="col1">
                        <div class="footer-logo footer-connect">
                            <a href="#"><span>CONNECT</span></a>
                        </div>
                        <div class="footer-nav">
                            <div class="ft-item">
                                <img src="images/Message.svg" alt="" />
                                <a href="">support@moneyuncle.com</a>
                            </div>
                            <div class="ft-item">
                                <img src="images/Location.svg" alt="" />
                                <p>
                                    Registered Address : A/804, Siddhi Enclave, Nanda Patkar
                                    Road, Vile Parle East, Mumbai - 400057
                                </p>
                            </div>
                            <div class="ft-item">
                                <img src="images/Location.svg" alt="" />
                                <p>
                                    Vcats Co-Working Office, 203-206, B-Wing, Mittal
                                    Commericia, Andheri (East), Mumbai - 59
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 footer-item mob-footer">
                    <div class="col1 footer-social">
                        <div class="footer-logo">
                            <a href="#"><span>SOCIAL</span></a>
                        </div>
                        <div class="footer-nav">
                            <div class="ft-item ft-s-icon">
                                <img src="images/facebook.svg" alt="" />
                                <a href="https://www.facebook.com/askmoneyuncle"
                                >Facebook</a
                                >
                            </div>
                            <div class="ft-item ft-s-icon">
                                <img src="images/Twitter.svg" alt="" />
                                <a href="https://twitter.com/askmoneyuncle">Twitter</a>
                            </div>
                            <div class="ft-item ft-s-icon">
                                <img src="images/linkedin.svg" alt="" />
                                <a href="https://www.linkedin.com/company/askmoneyuncle"
                                >Linkedin</a
                                >
                            </div>
                            <div class="ft-item ft-s-icon">
                                <img src="images/telegram.svg" alt="" />
                                <a href="https://t.me/askmoneyuncle">Telegram</a>
                            </div>
                            <div class="ft-item ft-s-icon">
                                <img src="images/instagram.svg" alt="" />
                                <a href="https://www.instagram.com/askmoneyuncle/"
                                >Instagram</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area2">
        <div class="container">
            <div class="footer-widget">
                Disclaimer : MoneyUncle is a stock market idea sharing & learning
                platform. As a platform, we act as a marketplace and are not SEBI
                registered investment advisors (RIA). All experts managing idea
                channels on our platform are SEBI RIA/RA handpicked and curated for
                you. Stock market trading and investing is subject to market risks.
                Please read all related documents carefully. Trading in Futures &
                Options is highly risky. You can lose substantial capital if risk is
                not managed properly. Ideas shared by our SEBI RIA/RA Experts are on
                best effort basis with required due diligence and research
                integrity.These ideas can go wrong and incur losses considering
                market volatility. MoneyUncle or the experts are not liable for any
                losses incurred. You are fully responsible for both profits and
                losses incurred from these ideas if you choose to follow and execute
                them. We recommend you to do your own research and take informed
                decisions. Past performance is not the indicator of future
                performance.
            </div>
        </div>
    </div>
    <div class="footer-area3">
        <div class="container">
            <div class="footer-widget-ct">
                © 2021 ValueHacker Technologies Private Limited. All Rights Reserved
            </div>
        </div>
    </div>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/all.js"></script>
    <script src="js/main.js"></script>
    <script>
        function opensec02tab(sec02tabs) {
            $(".sec-2-tabs button").removeClass("active");

            var i;
            var x = document.getElementsByClassName("sec02tab");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
                x[i].classList.remove("active");
            }
            document.getElementById(sec02tabs).style.display = "block";
        }
    </script>
    <script>
        function About() {
            var elmnt = document.getElementById("Aboutcontent");
            elmnt.scrollIntoView();
        }

        function Howitworks() {
            var elmnt = document.getElementById("Howitworkscontent");
            elmnt.scrollIntoView();
        }

        function Downlad() {
            var elmnt = document.getElementById("Downloadappcontent");
            elmnt.scrollIntoView();
        }
        function ForExperts() {
            var elmnt = document.getElementById("ForExpertscontent");
            elmnt.scrollIntoView();
        }
        // function terms(){
        //     window.location='terms';
        // }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <script>
        $("#intermediate-tab").click(function(){
            $(".intermediate-text").show();
            $(".an-spell").show();
            $(".a-spell").hide();
            $(".beginner-text").hide();
            $(".pro-text").hide();
        });
        $("#pro-tab").click(function(){
            $(".pro-text").show();
            $(".a-spell").show();
            $(".an-spell").hide();
            $(".intermediate-text").hide();
            $(".beginner-text").hide();
        });
        $("#beginners-tab").click(function(){
            $(".beginner-text").show();
            $(".a-spell").show();
            $(".an-spell").hide();
            $(".intermediate-text").hide();
            $(".pro-text").hide();
        });
    </script>

    <script>

        $("#mobile").keydown(function(event) {
            k = event.which;
            if ((k >= 96 && k <= 105) || k == 8) {
                if ($(this).val().length == 10) {
                    if (k == 8) {
                        return true;
                    } else {
                        event.preventDefault();
                        return false;

                    }
                }
            } else {
                event.preventDefault();
                return false;
            }

        });


        function store_data() {

            document.getElementById('success_message').style.display = 'none';
            document.getElementById('error_message').style.display = 'none';
            if(document.getElementById("email").value.split(" ").join("") == "")
            {
                document.getElementById('error_message').innerHTML = 'The email field is required.';
                document.getElementById("email").focus();
                document.getElementById("email").style.borderColor ='#dd4b39';
                // document.getElementById("email_lb").style.color ='#dd4b39';
                document.getElementById('error_message').style.display = 'block';
                flag=1;
                return false;
            }
            else
            {
                // var email1 = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
                var email1 = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (!document.getElementById("email").value.match(email1)) {
                    document.getElementById('error_message').innerHTML = 'The email must be a valid email address.';
                    document.getElementById("email").style.borderColor ='#dd4b39';
                    //document.getElementById("email_lb").style.color ='#dd4b39';
                    document.getElementById('error_message').style.display = 'block';
                    flag=1;
                    return false;
                }
                else
                {
                    document.getElementById("email").style.borderColor ='#d2d6de';
                    //document.getElementById("email_lb").style.color ='#333';
                    document.getElementById('error_message').style.display = 'none';
                }
            }

            if(document.getElementById("phone").value.split(" ").join("") == "")
            {
                document.getElementById('error_message').innerHTML = 'The phone field is required.';
                document.getElementById("phone").focus();
                document.getElementById("phone").style.borderColor ='#dd4b39';
                //document.getElementById("phone_lb").style.color ='#dd4b39';
                document.getElementById('error_message').style.display = 'block';
                flag=1;
                return false;
            }
            else
            {
                var phone1=document.getElementById("phone").value;
                if(isNaN(phone1))
                {
                    document.getElementById('error_message').innerHTML = 'Please enter a valid mobile number.';
                    document.getElementById("phone").focus();
                    document.getElementById("phone").style.borderColor ='#dd4b39';
                    //document.getElementById("phone_lb").style.color ='#dd4b39';
                    document.getElementById('error_message').style.display = 'block';
                    flag=1;
                    return false;
                }
                else
                {
                    document.getElementById("phone").style.borderColor ='#d2d6de';
                    //document.getElementById("phone_lb").style.color ='#333';
                    document.getElementById('error_message').style.display = 'none';
                }
            }

            var em = document.getElementById("email").value;
            var ph = document.getElementById("phone").value;

            $.ajax({
                url: 'store_waitlist.php',
                data: { email: em, mobile:ph },
                type: "POST",
                success: function (data) {
                    {
                        if (data==1){
                            document.getElementById('success_message').style.display = 'block';
                            document.getElementById('email1').value = "";
                            document.getElementById('phone1').value = "";
                        }
                        if (data==0){
                            document.getElementById('error_message').style.display = 'block';
                            document.getElementById('error_message').innerText = 'You are already added to the Waitlist.';
                        }
                        if (data==500){
                            document.getElementById('error_message').style.display = 'block';
                            document.getElementById('error_message').innerText = 'Something went wrong!';
                        }
                        document.getElementById('email').value = "";
                        document.getElementById('phone').value = "";
                    }
                }
            });
        }

        function store_data1() {

            document.getElementById('success_message1').style.display = 'none';
            document.getElementById('error_message1').style.display = 'none';
            if(document.getElementById("email1").value.split(" ").join("") == "")
            {
                document.getElementById('error_message1').innerHTML = 'The email field is required.';
                document.getElementById("email1").focus();
                document.getElementById("email1").style.borderColor ='#dd4b39';
                // document.getElementById("email_lb").style.color ='#dd4b39';
                document.getElementById('error_message1').style.display = 'block';
                flag=1;
                return false;
            }
            else
            {
                // var email1 = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
                var email1 = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (!document.getElementById("email1").value.match(email1)) {
                    document.getElementById('error_message1').innerHTML = 'The email must be a valid email address.';
                    document.getElementById("email1").style.borderColor ='#dd4b39';
                    //document.getElementById("email_lb").style.color ='#dd4b39';
                    document.getElementById('error_message1').style.display = 'block';
                    flag=1;
                    return false;
                }
                else
                {
                    document.getElementById("email1").style.borderColor ='#d2d6de';
                    //document.getElementById("email_lb").style.color ='#333';
                    document.getElementById('error_message1').style.display = 'none';
                }
            }

            if(document.getElementById("phone1").value.split(" ").join("") == "")
            {
                document.getElementById('error_message1').innerHTML = 'The phone field is required.';
                document.getElementById("phone1").focus();
                document.getElementById("phone1").style.borderColor ='#dd4b39';
                //document.getElementById("phone_lb").style.color ='#dd4b39';
                document.getElementById('error_message1').style.display = 'block';
                flag=1;
                return false;
            }
            else
            {
                var phone1=document.getElementById("phone1").value;
                if(isNaN(phone1))
                {
                    document.getElementById('error_message1').innerHTML = 'Please enter a valid mobile number.';
                    document.getElementById("phone1").focus();
                    document.getElementById("phone1").style.borderColor ='#dd4b39';
                    //document.getElementById("phone_lb").style.color ='#dd4b39';
                    document.getElementById('error_message1').style.display = 'block';
                    flag=1;
                    return false;
                }
                else
                {
                    document.getElementById("phone1").style.borderColor ='#d2d6de';
                    //document.getElementById("phone_lb").style.color ='#333';
                    document.getElementById('error_message1').style.display = 'none';
                }
            }

            var em = document.getElementById("email1").value;
            var ph = document.getElementById("phone1").value;

            $.ajax({
                url: 'store_waitlist.php',
                data: { email: em, mobile:ph },
                type: "POST",
                success: function (data) {
                    {
                        if (data==1){
                            document.getElementById('success_message1').style.display = 'block';
                            document.getElementById('email1').value = "";
                            document.getElementById('phone1').value = "";
                        }
                        if (data==0){
                            document.getElementById('error_message1').style.display = 'block';
                            document.getElementById('error_message1').innerText = 'You are already added to the Waitlist.';
                        }
                        if (data==500){
                            document.getElementById('error_message1').style.display = 'block';
                            document.getElementById('error_message1').innerText = 'Something went wrong!';
                        }

                    }
                }
            });
        }
    </script>

    <script>
        $(".phone-no").keydown(function(event) {
            k = event.which;

            if ((k >= 96 && k <= 105) || k == 8 || ( k >= 48 && k <= 57)) {
                if ($(this).val().length == 10) {
                    if (k == 8) {
                        return true;
                    } else {
                        event.preventDefault();
                        return false;

                    }
                }
            } else {
                event.preventDefault();
                return false;
            }

        });

        $(".phone-nu").keydown(function(event) {
            k = event.which;
            if ((k >= 96 && k <= 105) || k == 8 || (k >= 48 && k <= 57)) {
                if ($(this).val().length == 10) {
                    if (k == 8) {
                        return true;
                    } else {
                        event.preventDefault();
                        return false;

                    }
                }
            } else {
                event.preventDefault();
                return false;
            }

        });
    </script>