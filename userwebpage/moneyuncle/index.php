<?php
 $subDirectory = strpos($_SERVER['HTTP_HOST'], 'localhost') == false ? '' : 'UserWebpage';

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=0.67" />
      <link rel="icon" href="favicon.ico" sizes="16x16" type="image/ico" />
      <link rel="preconnect" href="https://fonts.gstatic.com" />
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"/>
      <!-- CSS Link -->
      <link rel="stylesheet" href="styles/vendor/bootstrap.min.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"/>
      <link rel="stylesheet" href="styles/vendor/slick.css" />
      <link rel="stylesheet" href="styles/vendor/slick-theme.css" />
      <link rel="stylesheet" href="styles/vendor/all.css" />
      <link rel="stylesheet" href="styles/css/style.css" />
      <link rel="script" href="js/vendor/jquery-1.12.4.min.js" />
      <title>MoneyUncle</title>
   </head>
   <body>
      <header class="money-uncle-header">
         <div class="container">
            <div class="row">
               <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="#">
                  <img src="images/logo.svg" alt="logo" />
                  </a>
                  <button
                     class="navbar-toggler"
                     type="button"
                     data-toggle="collapse"
                     data-target="#ad-navbar"
                     aria-controls="ad-navbar"
                     aria-expanded="false"
                     aria-label="Toggle navigation"
                     >
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="ad-navbar">
                     <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                           <a class="nav-link" onclick="About()">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" onclick="Howitworks()">How it works?</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" onclick="Downlad()">Download App</a>
                        </li>
                        <li class="nav-item-2">
                           <a class="nav-link" href="https://experts.moneyuncle.com/" target="_blank">For Experts</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </header>
	  <main class="money-uncle-home">
         <div class="container">
            <section class="section-home" id="Aboutcontent">
               <div class="home__wrapper">
                  <div class="sec-01-1">
                     <div class="sec-01-1-title hidden-xs">
			<p>Stock market idea akshay virkhare shruti/p>
                        <p>sharing &amp; learning platform</p>
                           connecting
                           <span style="position: relative">
                           traders &amp; investors
                           <span class="sec-01-line"></span>
                           </span>
                        <p>to top market experts</p>
                     </div>
                     <div class="sec-01-1-title show-xs">
                        Stock market idea sharing &amp; learning platform connecting
                           <span style="position: relative">
                           traders &amp; investors
                           <span class="sec-01-line"></span>
                           </span>
                        to top market experts
                     </div>
                     <div class="sec-01-1-desc">
                        Learn &amp; get actionable trading and investment ideas
                     </div>
                     <div class="sec-01-1-logo" id="all-apps-ions">
                        <div class="work__imgBox">
                           <img src="images/Frame 149.svg" alt="" />
                        </div>
                        <div class="work__imgBox">
                           <img src="images/Frame 150.svg" alt="" />
                        </div>
<!--						<div class="form-subscribe">-->
<!---->
<!--						   Message block start-->
<!---->
<!--							<div class="form-group row" style="margin-bottom: 0rem;">-->
<!--								<div class="col-md-12 col-lg-12">-->
<!--									<div class="alert alert-danger" id="error_message" role="alert" style="display: none">-->
<!---->
<!--									</div>-->
<!--                                    <div class="alert alert-success" id="success_message" role="success" style="display: none">-->
<!--                                        You have been added to the Waitlist.-->
<!--                                    </div>-->
<!--								</div>-->
<!--							</div>-->
<!---->
<!--						 Message block ends-->
<!--						  <div class="form-group row">-->
<!--							<label class="col-sm-2 col-form-label">Email</label>-->
<!--							<div class="col-sm-10">-->
<!--							  <input type="email" name="email" class="form-control" id="email" placeholder="Enter your valid email ID">-->
<!--							</div>-->
<!--						  </div>-->
<!--						  <div class="form-group row">-->
<!--							<label class="col-sm-2 col-form-label">Mobile</label>-->
<!--							<div class="col-sm-10">-->
<!--							  <input type="number" class="form-control phone-no" id="phone" name="phone" placeholder="Enter your mobile number">-->
<!--							</div>-->
<!--						  </div>-->
<!--						  <div class="form-group row" style="margin-bottom: unset;">-->
<!--							<label class="col-sm-2 col-form-label"></label>-->
<!--							<div class="col-sm-10">-->
<!--							  <button class="btn btn-primary" onclick="store_data()">JOIN WAITLIST TO GET EARLY-->
<!--                                  ACCESS</button>-->
<!--							</div>-->
<!--						  </div>-->
<!--                        </div>-->
                     </div>
                  </div>
                  <div class="sec-01-2 top-section-img">
                     <div class="sec-01-2-img">
                        <img src="images/Group 127.png" alt="">
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </main>
      <main class="section-2-bg">
         <div class="container">
            <section class="section-2" id="beginer-pro">
               <div class="section-2-title">
                  <p>
                      Problems faced by <span class="a-spell">a</span> <span class="an-spell" style="display:none;">an</span>
                     <span class="beginner-text" style="position: relative" id="scrollword">
                     Beginner
                     <span class="sec-01-line"></span>
                     </span>
                     <span class="intermediate-text" style="position: relative; display:none;" id="scrollword">
                     Intermediate
                     <span class="sec-01-line"></span>
                     </span>
                     <span class="pro-text" style="position: relative; display:none;" id="scrollword">
                     Pro
                     <span class="sec-01-line"></span>
                     </span>
                      participant while dealing in stock markets?
                  </p>
               </div>
               <div class="sec-2-tabs">
                  <button
                     class="active"
                     onclick="opensec02tab('Beginners');$(this).addClass('active');" id="beginners-tab"
                     >
                  Beginner
                  </button>
                  <button
                     class=""
                     onclick="opensec02tab('Intermediate');$(this).addClass('active');" id="intermediate-tab"
                     >
                  Intermediate
                  </button>
                  <button
                     class=""
                     onclick="opensec02tab('Pro');$(this).addClass('active');" id="pro-tab"
                     >
                  Pro
                  </button>
               </div>
               <div id="Beginners" class="sec02tab">
                  <div class="row justify-content-center">
                     <div class="col-md-6 col-lg-4">
                        <div class="sec-02-1">
                           <div class="text-center">
							 <img src="images/woman-thinking-of-investment 1.png" alt="" />
						   </div>
                           <div class="sec-02-title">
                              Lack of Conceptual Understanding
                           </div>
                           <div class="sec-02-desc">
                              Beginners start trading without understanding foundational concepts of stock market and basic technical know-how. Learning is an ongoing process akshay virkhare
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="sec-02-1">
							<div class="text-center">
							 <img
                              src="images/concept-about-business-failure 1.png"
                              alt=""
                              />
						    </div>
                           <div class="sec-02-title">Losses from Uninformed Trading</div>
                           <div class="sec-02-desc">
                               Most beginners do random buy & sell trades. They do not really know what is the right trade-set up and investment rationale behind these trades
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="sec-02-1">
                           <div class="text-center">
							   <img
								  src="images/girl-and-boy-doing-discussion 1.png"
								  alt=""
								  />
							</div>
                           <div class="sec-02-title">
                               Relying on Tips and Rumours
                           </div>
                           <div class="sec-02-desc">
                               They rely on tips from their friends, family, office colleagues, news sources, fraud tip providers etc. which lack any intelligent research and analysis and are not trustworthy
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="Intermediate" class="sec02tab" style="display: none">
                  <div class="row justify-content-center">
                     <div class="col-md-6 col-lg-4">
                        <div class="sec-02-1">
                           <div class="text-center">
						   <img
                              src="images/male-investor-gaining-profit-from-investment 1.png"
                              alt=""
                              />
							  </div>
                           <div class="sec-02-title sec-02-2s">Inconsistent P&L</div>
                           <div class="sec-02-desc">
                              They have an intermittent streak of profit and losses in their stock market dealings. Getting consistent profits and returns is one of their biggest problems
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="sec-02-1">
                           <div class="text-center">
						   <img
                              src="images/lady-employee-working-in-office 1.png"
                              alt=""
                              />
							  </div>
                           <div class="sec-02-title sec-02-2s">
                              Lack of Solid Strategies
                           </div>
                           <div class="sec-02-desc">
			      Many intermediate participants cannot generate their own ideas and strategies and end up trading and investing using unrefined and sub-optimal strategies............
........................................................................................................
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="sec-02-1">
                           <div class="text-center">
						   <img
                              src="images/marketing-employee-working-on-marketing-strategy 1.png"
                              alt=""
                              />
							  </div>
                           <div class="sec-02-title sec-02-2s">
                              Breadth of Knowledge
                           </div>
                           <div class="sec-02-desc">
                              Lack expertise across different instruments - Large/Mid/Small Cap Stocks, Futures, Options, ETFs, IPOs etc. and thus miss out on many profitable opportunities
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="Pro" class="sec02tab" style="display: none">
                  <div class="row justify-content-center">
                     <div class="col-md-8" style="margin:0 auto; float:none;">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="sec-02-1">
                                 <div class="text-center">
								 <img
                                    src="images/male-employee-performance-board 1.png"
                                    alt=""
                                    />
									</div>
                                 <div class="sec-02-title">Advanced Strategies</div>
                                 <div class="sec-02-desc">
                                     They seek advanced ideas and strategies, cutting edge research and analysis to generate high delta returns
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="sec-02-1">
                                 <div class="text-center">
								 <img src="images/super-boss 1.png" alt="" />
                                 </div>
								 <div class="sec-02-title">Access to Top Experts</div>
                                 <div class="sec-02-desc">
                                     Finding such best in-class experts can be tricky and challenging
                                 </div>
                              </div>
                           </div>
<!--						   <div class="col-md-12">-->
<!--                              <div class="sec-02-1">-->
<!--							     <div class="sec-02-desc">-->
<!--                                    They seek advanced ideas and strategies, cutting edge-->
<!--                                    research and analysis from top experts to generate high-->
<!--                                    delta on their returns which is not easy to discover & get-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </main>
      <main class="section-3">
         <div class="container">
            <section>
               <div class="row sec-03-1">
                  <div class="col-12 col-md-12 col-lg-6">

					<div class="sec-03-1-img modiy">
                     <img src="images/Group 97.png" alt="" />
                    </div>

				  </div>
				  <div class="col-12 col-md-12 col-lg-6">
					<div class="sec-03-2 mt-7" id="dont-worry">
                     <div class="sec-03-2-title">Don't Worry!!!</div>
                     <div class="sec-03-p">
                        MoneyUncle has
                        <span style="position: relative">
                        got your back
                        <span class="sec-01-line"></span>
                        </span>
                     </div>
                     <div class="sec-03-desc">
                         MoneyUncle and our Top Experts are here to guide you. Our mission is to help
                         100 million+ investors start their stock market journey and make better trading and investing decisions.
                     </div>
                  </div>
				  </div>
               </div>
            </section>
         </div>
      </main>
      <main id="Howitworkscontent">
         <div class="container">
            <section class="section-4 creating-wealth">
               <div class="sec-04-title">
                  <span style="position: relative">
                  Creating wealth
                  <span class="sec-01-line"></span>
                  </span>
                  is in your hands now... literally
               </div>
               <p>MoneyUncle App - How does it work ?</p>

               <div class="sec-4-item">
                  <img class="hidden-xs howitwork-banner" src="images/Group 121.png" alt="" />
                  <div class="sec-4-item-des">
                     <div class="sec-4-item-des-title">Trading & Investment Ideas</div>
                     <div class="sec-4-item-des-text">
                        <div class="sec-4-item-des-text-item">
                           <img src="images/Ellipse 7.png" alt="" />
                           <div class="sec-4-item-des-text-item-pt">
                               Ideas on Nifty and BankNifty using index futures & options
                           </div>
                        </div>
                     </div>
                     <div class="sec-4-item-des-text">
                        <div class="sec-4-item-des-text-item">
                           <img src="images/Ellipse 7.png" alt="" />
                           <div class="sec-4-item-des-text-item-pt">
                               Cash market and F&O ideas on large cap, mid-cap and small
                               cap stocks
                           </div>
                        </div>
                     </div>
                  </div>
                  <img class="mob-xs" id="notification-img" src="images/Group 121.png"  alt="" />
               </div>

                <div class="sec-4-item">
                    <div class="sec-4-item-des">
                        <div class="sec-4-item-des-title">Top Experts</div>
                        <div class="sec-4-item-des-text">
                            <div class="sec-4-item-des-text-item">
                                <img src="images/Ellipse 7.png" alt="" />
                                <div class="sec-4-item-des-text-item-pt">
                                    Handpicked & Curated experts share best actionable ideas
                                </div>
                            </div>
                        </div>
                        <div class="sec-4-item-des-text">
                            <div class="sec-4-item-des-text-item">
                                <img src="images/Ellipse 7.png" alt="" />
                                <div class="sec-4-item-des-text-item-pt">
                                    Follow Experts to get regular updates on their activity
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="all-menu" id="all-menu-img howitwork-banner" src="images/Group 103.png" alt="" />
                </div>

                <div class="sec-4-item">
                    <img class="howitwork-banner" id="idea-post" src="images/Slice 4 3.png" alt="" />
                    <div class="sec-4-item-des">
                        <div class="sec-4-item-des-title">Idea Post</div>
                        <div class="sec-4-item-des-text">
                            <div class="sec-4-item-des-text-item">
                                <img src="images/Ellipse 7.png" alt="" />
                                <div class="sec-4-item-des-text-item-pt">
                                    Actionable analysis with Entry, Target & Stoploss
                                </div>
                            </div>
                        </div>
                        <div class="sec-4-item-des-text">
                            <div class="sec-4-item-des-text-item">
                                <img src="images/Ellipse 7.png" alt="" />
                                <div class="sec-4-item-des-text-item-pt">
                                    Get regular follow-up updates
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sec-4-item">
                    <div class="sec-4-item-des">
                        <div class="sec-4-item-des-title">Signals</div>
                        <div class="sec-4-item-des-text">
                            <div class="sec-4-item-des-text-item">
                                <img src="images/Ellipse 7.png" alt="" />
                                <div class="sec-4-item-des-text-item-pt">
                                    Actionable signals tell you when to buy, hold and sell your stock/position
                                </div>
                            </div>
                        </div>
                        <div class="sec-4-item-des-text">
                            <div class="sec-4-item-des-text-item">
                                <img src="images/Ellipse 7.png" alt="" />
                                <div class="sec-4-item-des-text-item-pt">
                                    10 different signals to cover all market situations
                                </div>
                            </div>
                        </div>
                    </div>
                    <img id="trad-profile howitwork-banner" src="images/signal.png" alt="" />
                </div>

               <div class="sec-4-item">
                  <img class="hidden-xs howitwork-banner" src="images/Slice 2 6.png" alt="" />
                  <div class="sec-4-item-des">
                     <div class="sec-4-item-des-title">Idea Channels</div>
                     <div class="sec-4-item-des-text">
                        <div class="sec-4-item-des-text-item">
                           <img src="images/Ellipse 7.png" alt="" />
                           <div class="sec-4-item-des-text-item-pt">
                              Handpicked & Curated experts share best actionable ideas
                           </div>
                        </div>
                     </div>
                     <div class="sec-4-item-des-text">
                        <div class="sec-4-item-des-text-item">
                           <img src="images/Ellipse 7.png" alt="" />
                           <div class="sec-4-item-des-text-item-pt">
                              Follow Experts to get regular updates on their activity
                           </div>
                        </div>
                     </div>
                  </div>
                  <img class="mob-xs" id="idea-channel" src="images/Slice 2 6.png" alt="" />
               </div>
               <div class="sec-4-item">
                  <div class="sec-4-item-des">
                     <div class="sec-4-item-des-title">Buy Super Access</div>
                     <div class="sec-4-item-des-text">
                        <div class="sec-4-item-des-text-item">
                           <img src="images/Ellipse 7.png" alt="" />
                           <div class="sec-4-item-des-text-item-pt">
                               Affordable Monthly & One-time fee plans
                           </div>
                        </div>
                     </div>
                     <div class="sec-4-item-des-text">
                        <div class="sec-4-item-des-text-item">
                           <img src="images/Ellipse 7.png" alt="" />
                           <div class="sec-4-item-des-text-item-pt">
                               Cancel Anytime
                           </div>
                        </div>
                     </div>
                  </div>
                  <img class="howitwork-banner" id="idea-post" src="images/Super access popup 1.png" alt="" />
               </div>
               <div class="sec-4-item">
                  <img class="hidden-xs howitwork-banner" src="images/real-time-notifications.png" alt="">
                  <div class="sec-4-item-des">
                     <div class="sec-4-item-des-title">Real-Time Notifications</div>
                     <div class="sec-4-item-des-text">
                        <div class="sec-4-item-des-text-item">
                           <img src="images/Ellipse 7.png" alt="" />
                           <div class="sec-4-item-des-text-item-pt">
                               Get Buy, Sell & Follow up updates
                           </div>
                        </div>
                     </div>
                     <div class="sec-4-item-des-text">
                        <div class="sec-4-item-des-text-item">
                           <img src="images/Ellipse 7.png" alt="" />
                           <div class="sec-4-item-des-text-item-pt">Email, SMS/Whatsapp and In-App Notifications</div>
                        </div>
                     </div>
                  </div>
                  <img class="mob-xs" src="images/real-time-notifications.png" alt="" />
               </div>
               <div class="sec-4-item">
                  <div class="sec-4-item-des">
                     <div class="sec-4-item-des-title">Classroom</div>
                     <div class="sec-4-item-des-text">
                        <div class="sec-4-item-des-text-item">
                           <img src="images/Ellipse 7.png" alt="" />
                           <div class="sec-4-item-des-text-item-pt">
                               Educational and Informative content from Top Experts
                           </div>
                        </div>
                     </div>
                     <div class="sec-4-item-des-text">
                        <div class="sec-4-item-des-text-item">
                           <img src="images/Ellipse 7.png" alt="" />
                           <div class="sec-4-item-des-text-item-pt">
                               Learn trading, investing & how stock market works
                           </div>
                        </div>
                     </div>
                  </div>
                  <img class="notification howitwork-banner" src="images/Rectangle 76.png" alt="" />
               </div>
            </section>
         </div>
      </main>
      <main id="Downloadappcontent">
          <section class="section-5">
              <div class="download-subFooter">
                  <h4 class="download__title">Download MoneyUncle App</h4>
                  <div class="download__box">
                      <img src="images/Frame 149.png" alt="" />
                      <img src="images/Frame 150.png" alt="" />
                  </div>
              </div>
          </section>

<!--         <section class="section-5">-->
<!--            <div class="download-subFooter">-->
<!--			   <div class="form-subscribe" id="subscribe-section">-->
<!--					-->
					<!-- Message block start-->
<!--					-->
<!--					<div class="form-group row" style="margin-bottom: 0rem;">-->
<!--						<div class="col-md-12 col-lg-12">-->
<!--							<div class="alert alert-danger" id="error_message1" role="error" style="display: none">-->
<!--								-->
<!--							</div>-->
<!--                            <div class="alert alert-success" id="success_message1" role="success" style="display: none">-->
<!--                                You have been added to the Waitlist.-->
<!--                            </div>-->
<!--						</div>-->
<!--					</div>-->
<!--					-->
					<!-- Message block ends-->
<!--					-->
<!--					<div class="form-group row">-->
<!--						<label class="col-md-2 col-lg-2 col-form-label">Email</label>-->
<!--						<div class="col-md-10 col-lg-10">-->
<!--							<input type="email" class="form-control" name="email1" id="email1" placeholder="Enter your valid email ID">-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="form-group row">-->
<!--						<label class="col-md-2 col-lg-2 col-form-label">Mobile</label>-->
<!--						<div class="col-12 col-md-10 col-lg-10">-->
<!--							<input type="number" class="form-control phone-nu" id="phone1" name="phone1" placeholder="Enter your mobile number">-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="form-group row" style="margin-bottom: unset;">-->
<!--						<label class="col-md-2 col-lg-2 col-form-label"></label>-->
<!--						<div class="col-md-10 col-lg-10">-->
<!--							<button onclick="store_data1()" class="btn btn-primary">JOIN WAITLIST TO GET EARLY ACCESS</button>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--            </div>-->
<!--         </section>-->
      </main>
      <main id="ForExpertscontent">
         <div class="container">
            <section class="section-6">
               <div class="sec-6-content">
                  <h2 class="heading-primary--main">
                     Are you a SEBI Registered Investment Advisor (RIA), Research
                     Analyst (RA), Stock Market Trainer/Mentor ?
                  </h2>
                  <h3 class="sec-6-h3">Let’s talk then!</h3>
                  <div class="sec-6-item">
                     <img src="images/Ellipse 8.png" alt="" />
                     <div class="sec-6-item-pt">
                        Share trading and investment ideas
                     </div>
                  </div>
                  <div class="sec-6-item">
                     <img src="images/Ellipse 8.png" alt="" />
                     <div class="sec-6-item-pt">
                        Create educational content to help users learn
                     </div>
                  </div>
                  <div class="sec-6-item">
                     <img src="images/Ellipse 8.png" alt="" />
                     <div class="sec-6-item-pt">
                        Discover new audience and grow your followers
                     </div>
                  </div>
                  <div class="sec-6-item">
                     <img src="images/Ellipse 8.png" alt="" />
                     <div class="sec-6-item-pt">Get paying users and earn revenue</div>
                  </div>

                  <button onclick="window.open('https://experts.moneyuncle.com','_blank');" style="cursor: pointer">Let's get started</button>
               </div>
               <img class="expert-img" src="images/Group 93.png" alt="" />
            </section>
         </div>
      </main>
      <footer>
         <div class="footer-area1">
            <div class="container">
               <div class="row footer-widget">
                  <div class="col-md-12 col-xs-12 col-lg-3 mob-footer">
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
                  <div class="col-md-12 col-xs-12 col-lg-3 mob-footer">
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
                  <div class="col-md-12 col-xs-12 col-lg-3 footer-item">
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
                  <div class="col-md-12 col-xs-12 col-lg-3 footer-item mob-footer">
                     <div class="col1 footer-social">
                        <div class="footer-logo">
                           <a href="#"><span>SOCIAL</span></a>
                        </div>
                        <div class="footer-nav">
                           <div class="ft-item ft-s-icon">
                              <img src="images/facebook.svg" alt="" />
                              <a href="https://www.facebook.com/askmoneyuncle" target="_blank"
                                 >Facebook</a
                                 >
                           </div>
                           <div class="ft-item ft-s-icon">
                              <img src="images/Twitter.svg" alt="" />
                              <a href="https://twitter.com/askmoneyuncle" target="_blank">Twitter</a>
                           </div>
                           <div class="ft-item ft-s-icon">
                              <img src="images/linkedin.svg" alt="" />
                              <a href="https://www.linkedin.com/company/askmoneyuncle" target="_blank"
                                 >Linkedin</a
                                 >
                           </div>
                           <div class="ft-item ft-s-icon">
                              <img src="images/telegram.svg" alt="" />
                              <a href="https://t.me/askmoneyuncle" target="_blank">Telegram</a>
                           </div>
                           <div class="ft-item ft-s-icon">
                              <img src="images/instagram.svg" alt="" />
                              <a href="https://www.instagram.com/askmoneyuncle/" target="_blank"
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
      </footer>
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

   </body>
</html>
