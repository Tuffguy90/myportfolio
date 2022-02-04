<?php include ('config.php') ?>
<html>
  <title>JDB Projects | Portfolio Website</title>
  <meta charset="UTF-8">
   <meta name="description" content="JDBProjects is my own portfolio site showcasing array of projects on different segments, browse thought to know more">
  <meta name="keywords" content="projects, jdbprojects, portfolio, develop project, software development, website development">
  <meta name="author" content="Joydeep Bandyopadhyay">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="canonical" href="http://jdbprojects.tech">
  <link rel="stylesheet" href="styles.css?v=<?php echo time() ?>">
  <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<meta name="theme-color" content="#ffffff">
<style>
  .title{
    font-size:39px !important;
  }
</style>
  <head>
   
</head>
<body data-spy="scroll" data-target="#main-nav" data-offset="60">
  <!-- Fixed Navbar -->
  <nav id="main-nav" class="navbar navbar-default ">
    <div class="container-fluid">
      <div class="navbar-header">
        <!-- Menu Toggle -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="glyphicon glyphicon-menu-hamburger"></span>
        </button>
        <a class="navbar-brand scroll" href="#top"><img class="pull-left logo" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/imgs/td-logo.png?raw=true" alt="TD Logo"><span>Joydeep Bandyopadhyay</span></a>
      </div>
      <!-- Collapsible Menu -->
      <div class="collapse navbar-collapse" id="menu">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a class="scroll" href="#top">Home <span class="sr-only">(current)</span></a></li>
          <li><a class="scroll" href="#about">About Me</a></li>
          <li><a class="scroll" href="#portfolio" onclick="toastr.info('This page will be available soon')">Portfolio</a></li>
          <li><button class="btn td-btn small outline pink" data-toggle="modal" data-target="#contactModal">Contact</button></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- Jumbotron -->
  <header id="top" class="jumbotron">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
          <img class="img-responsive center-block logo rounded" style="border-radius:120px" src="images/image.jpg" alt="TD Logo">
        </div>
        <div class="col-xs-12">
          <h1 class="title">Hi there! <br> I am Joydeep Bandyopadhyay</h1>
          <p> <?php
                  $connect = new Helper;
                  // echo $connect->contacts();
              ?></p>
          <p>I develop user-friendly websites.</p>
          <p>Nice to meet you.</p>
          <a class="btn td-btn outline green scroll mt-30" href="#content" title="Learn more about me!"><span class="glyphicon glyphicon-triangle-bottom"></span> Learn more</a>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content Begins -->
  <div id="content" class="container-fluid text-center">
    <!-- About Me Section -->
    <section id="about" class="row bg-white bg-shadow">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="mb-30">About Me</h1>
        </div>
      </div>
      <div class="row mb-30">
        <div class="col-xs-12 col-md-3 col-md-offset-1 col-lg-2 col-lg-offset-2">
          <img class="img-responsive center-block profile mb-30" src="images/image.jpg" alt="JDB's Profile Photo" style="border-radius:80px">
        </div>
        <div class="col-sm-8 col-sm-offset-2 col-md-7 col-md-offset-0 col-lg-6 text-left">
          <h4>Hello there! I'm a backend developer working in Kolkata, West Bengal India.</h4>
          <p>Seasoned professional with 6+ years of total experience in PHP & MySQL. Expert in HTML, PHP, Javascript, MySQL, PHP MVC & recently working on PHP Laravel with 3+ years of experience.</p>
          <p>Currently, I am working with Shyam Steel Industries and providing them support in coding, maintaining and deploying CRM and i challenge to keep my skills sharp. When I'm not busy, you can find me obsessing over finding new challenging activities like trying to impplement new stuff in new coding languages like Angular, React Js, and many more. I tend to switch things up every few months, so if you want to know what I'm up to, just <a class="scroll" href="#follow-me">follow me!</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
        <hr class="dashed">
          <h2 class="mb-60">What I Do</h2>
        </div>
        <div class="col-sm-3 col-lg-2 col-lg-offset-2">
          <img class="img-responsive center-block icon" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/work/rwd-icon.png?raw=true" alt="Responsive Web Design Icon">
          <p>Responsive Web Design</p>
        </div>
        <div class="col-sm-3 col-lg-2">
          <img class="img-responsive center-block icon" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/work/ui-ux-icon.png?raw=true" alt="Backend Developer Icon">
          <p>Manage Team</p>
        </div>
        <div class="col-sm-3 col-lg-2">
          <img class="img-responsive center-block icon" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/work/dev-icon.png?raw=true" alt="Development Icon">
          <p>Development</p>
        </div>
        <div class="col-sm-3 col-lg-2 mb-30">
          <img class="img-responsive center-block icon" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/work/star-icon.png?raw=true" alt="Identity and Branding Icon">
          <p>Client Interactions</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button class="btn td-btn outline green mt-30" data-toggle="modal" data-target="#resumeModal">View my Resume</button>
        </div>
      </div>
    </section>
    <!-- Portfolio Section -->
    <section id="portfolio" class="row bg-star-y">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="mb-60">Portfolio</h1>
        </div>
      </div>
      <div class="row">
        <div id="projects" class="carousel slide col-xs-12" data-ride="carousel" data-interval="false">
          <div class="row">
            <!-- Carousel Prev Button -->
            <div class="col-xs-1">
              <a class="left carousel-control" href="#projects" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
            </div>
            <div class="col-xs-10">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="col-sm-7">
                    <img class="img-responsive center-block mb-30" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/portfolio/tribute/tribute-teaser.png?raw=true" alt="Twenty One Pilots Tribute Page">
                  </div>
                  <div class="col-sm-5">
                    <div class="carousel-caption card">
                      <h3>Twenty One Pilots Tribute</h3>
                      <h4>Responsive Web Design</h4>
                      <button class="btn td-btn small outline green" data-toggle="modal" data-target="#tributeModal">View Details</button>
                    </div>
                  </div>
                </div><!-- /.item -->
                <div class="item">
                  <div class="col-sm-7">
                    <img class="img-responsive center-block mb-30" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/portfolio/tms/tms-teaser.png?raw=true" alt="Too Much Sauce">
                  </div>
                  <div class="col-sm-5">
                    <div class="carousel-caption card">
                      <h3>Too Much Sauce</h3>
                      <h4>Responsive Web Design</h4>
                      <button class="btn td-btn small outline green" data-toggle="modal" data-target="#tmsModal">View Details</button>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-7">
                    <img class="img-responsive center-block mb-30" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/portfolio/rb/rb-teaser.png?raw=true" alt="Ryan Bechtel">
                  </div>
                  <div class="col-sm-5">
                    <div class="carousel-caption card">
                      <h3>Ryan Bechtel</h3>
                      <h4>Responsive Web Design</h4>
                      <button class="btn td-btn small outline green" data-toggle="modal" data-target="#rbModal">View Details</button>
                    </div>
                  </div>
                </div><!-- /.item -->
              </div><!-- /.carousel-inner -->
            </div>
            <div class="col-xs-1">
              <!-- Carousel Next Button -->
              <a class="right carousel-control" href="#projects" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div><!-- / Next Btn -->
            <div class="col-xs-12">
              <!-- Indicators -->
              <ol class="carousel-indicators mt-30">
                <li data-target="#projects" data-slide-to="0" class="active"></li>
                <li data-target="#projects" data-slide-to="1"></li>
                <li data-target="#projects" data-slide-to="2"></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /#projects -->
      </div><!-- /.row -->
    </section>
    <!-- Contact Me Section -->
    <section class="row bg-pink bg-shadow">
      <div class="col-xs-12">
        <h1 class="mb-30">Like what you see?</h1>
        <button class="btn btn-default td-btn outline white" data-toggle="modal" data-target="#contactModal">Send me a message!</button>
      </div>
    </section>
    <!-- Footer -->
    <footer class="row text-left bg-honeycomb">
      <div class="col-xs-12 col-sm-6">
        <h3>Latest Tweet</h3>
        <div class="card mb-30">
          <!-- <a class="twitter-timeline"  href="https://twitter.com/dusign/" data-widget-id="329035628920573952" data-chrome="noheader nofooter noborders transparent" data-tweet-limit="1" data-width="100%">Tweets by @dusign</a>   -->
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
      </div>
      <div id="follow-me" class="col-xs-12 col-sm-5 col-sm-offset-1 mb-30 d-none">
        <h3>Follow me!</h3>
        <a class="social" href="https://www.linkedin.com/in/tuffguyjoy90/" target="_blank" title="LinkedIn">
          <img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/LinkedIn-black.png?raw=true" alt="LinkedIn Icon">
        </a>
        <a class="social" href="https://twitter.com/tuffguyjoy90/" target="_blank" title="Twitter">
          <img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/Twitter-black.png?raw=true" alt="Twitter Icon">
        </a>
        <a class="social" href="https://www.instagram.com/joydeep17299/" target="_blank" title="Instagram">
          <img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/Instagram-black.png?raw=true" alt="Instagram Icon">
        </a>
        <a class="social" href="https://github.com/Tuffguy90/" target="_blank" title="Github">
          <img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/Github-black.png?raw=true" alt="Github Icon">
        </a>
      
      </div>
      <div class="col-xs-12 text-center">
        <hr class="dashed">
        <h2>&ndash; Thanks for visiting! &ndash;</h2>
        <small class="gray">Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> Joydeep B &mdash; All Rights Reserved &mdash; Made with <span class="glyphicon glyphicon-heart" aria-hidden="true"></span></small>
      </div>
    </footer>
  </div>

  <!-- Resume Modal -->
  <div class="modal fade" id="resumeModal" tabindex="-1" role="dialog" aria-labelledby="resumeTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center" id="resumeTitle">Resume</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
              <h2>Experience</h2>
            </div>
          </div>
          <div class="row mb-15">
            <div class="col-md-3 col-lg-2 col-lg-offset-1">
              <p class="year">2015 - 2020</p>
            </div>
            <div class="col-md-9 col-lg-8">
              <h4>ARDENT COMPUTECH PVT LTD - Web Developer</h4>
              <p class="mb-0"><strong>Train the team and Develop websites for clients </strong></p>
              <p class="mb-0"><strong>Manage Team</strong></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-lg-2 col-lg-offset-1">
              <p class="year">2020 - Till</p>
            </div>
            <div class="col-md-9 col-lg-8">
              <h4>Shyam Steel Industries - Sr. Web Developer</h4>
              <p><strong>Build & Support all sorts of internal and external deveelopments</strong></p>
              <ul>
                <li>Manage CRM and handle code, maintain and deploy</li>
                <li>Handle API and provide support to Mobile Application team</li>
                <li>Build and Manage Audit and Compliance Management system</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-5 col-lg-offset-1">
              <div class="row">
                <div class="col-xs-12">
                  <h2>Education</h2>
                </div>
              </div>
              <div class="row mb-15">
                <div class="col-sm-3 col-md-4">
                  <p class="year">2010 - 2013</p>
                </div>
                <div class="col-sm-9 col-md-8">
                  <p class="mb-0"><strong>BCA</strong></p>
                  <p>Symbiosis University</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-md-4">
                  <p class="year">2009 - 2010</p>
                </div>
                <div class="col-sm-9 col-md-8">
                  <p class="mb-0"><strong>Higher Secondary</p>
                  <p>St Kabir</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5">
              <div class="row">
                <div class="col-xs-12">
                  <h2>Skills</h2>
                </div>
              </div>
              <div class="row">
                <ul>
                  <li><strong>Web:</strong> HTML, CSS, JavaScript, jQuery, PHP, Laravel, API</li>
                  <li><strong>Tools:</strong> Vscode, Git, GitLab, Postman</li>
                  <li><strong>Other:</strong> Positive, adaptable, attentive, resourceful</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row text-center">
            <a class="btn td-btn outline green mb-30" href="documents/jdb.pdf" target="_blank" download><span class="glyphicon glyphicon-download-alt"></span> Download PDF</a>
            <a class="btn td-btn outline green iconBtn mb-30" href="https://www.linkedin.com/in/tuffguyjoy90/" target="_blank"><span class="glyphicon glyphicon-user"></span> View LinkedIn Profile</a>
          </div>
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Resume</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- Tribute Page Project Modal -->
  <div class="modal fade" id="tributeModal" tabindex="-1" role="dialog" aria-labelledby="tributeTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center" id="tributeTitle">Project Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/portfolio/tribute/tribute-hero.png?raw=true" alt="Tribute Page Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Twenty One Pilots Tribute</h2>
              <h4>Responsive Web Design</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p>This tribute page was created for a <a href="https://www.freecodecamp.com/" target="_blank" title="Link to FreeCodeCamp">FreeCodeCamp</a> project. The goal was very simple: make a one-page site with images, text, and external links. I took this chance to practice using the Bootstrap 3 framework to create a tribute to one of my favorite bands at the moment, Twenty One Pilots (TOP). Lucky for me, they have such strong branding that the page nearly designed itself!</p>
              <p class="mb-30">I kept the color palette simple with black, white, and the signature TOP shade of red for the accent color. To add some visual interest, I used a subtle twill texture for the red backgrounds and styled the headings with a black background to give it a label maker tape effect. I also wrote some code that replaces the letter "O" with the scandinavian letter "&Oslash;" in the headings and navigation links to match the TOP logo.</p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <p><strong>Technologies Used:</strong></p>
              <p class="mb-30">
                <span class="label tag">Bootstrap 3</span>
                <span class="label tag">Responsive Design</span>
                <span class="label tag">HTML5</span>
                <span class="label tag">CSS3</span>
                <span class="label tag">JavaScript</span>
                <span class="label tag">jQuery</span>
              </p>
              <a class="btn td-btn outline green mb-30" href="http://projects.tiffanydu.com/tribute/" target="_blank" title="Link to Tribute Page"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
              <a class="btn td-btn outline green mb-30 iconBtn" href="https://codepen.io/tiffanyadu/full/RKMavV/" target="_blank" title="Link to Tribute Page on CodePen"><img src="https://github.com/tiffanyadu/portfolio/blob/master/assets/icons/social/Codepen-green.png?raw=true" alt="Codepen Icon">View on CodePen</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- Too Much Sauce Project Modal -->
  <div class="modal fade" id="tmsModal" tabindex="-1" role="dialog" aria-labelledby="tmsTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center" id="tmsTitle">Project Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/portfolio/tms/tms-hero.png?raw=true" alt="Too Much Sauce Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Too Much Sauce</h2>
              <h4>Responsive Web Design</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p>Too Much Sauce (TMS) is a side project of motion graphic designer Ryan Bechtel, where he challenges himself to create brutalist designs. The purpose of the TMS website is to host his collection of animated GIFs, which were originally shared as Instagram stories.</p>
              <p class="mb-30">Ryan really liked the bold, high-contrast look of <a href="http://www.complex.com/" target="_blank" title="Complex.com">Complex.com</a>, a music and pop culture media/news website, so that's what inspired the design of this project. The color palette is mainly black and white with splashes of magenta and neon green from the TMS brand. It was built with the latest version of Bootstrap 4 and uses a small JavaScript library, <a href="https://github.com/krasimir/gifffer" target="_blank" title="Gifffer.js Github repo">Gifffer.js</a>, to prevent the animated GIFs from autoplaying when the page loads.</p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <p><strong>Technologies Used:</strong></p>
              <p class="mb-30">
                <span class="label tag">Bootstrap 4</span>
                <span class="label tag">Responsive Design</span>
                <span class="label tag">HTML5</span>
                <span class="label tag">CSS3</span>
                <span class="label tag">jQuery</span>
                <span class="label tag">Gifffer.js</span>
              </p>
              <a class="btn td-btn outline green mb-30" href="http://tms.ryanbechtel.com/" target="_blank" title="Link to Too Much Sauce"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- Ryan Bechtel Project Modal -->
  <div class="modal fade" id="rbModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
    <div class="modal-dialog wide" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center" id="rbTitle">Project Details</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12 bg-star-g">
              <img class="img-responsive center-block hero" src="https://github.com/tiffanyadu/portfolio/blob/master/assets/portfolio/rb/rb-hero.png?raw=true" alt="Ryan Bechtel Hero Image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Ryan Bechtel</h2>
              <h4>Responsive Web Design</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
              <p>This project was for Ryan Bechtel, a motion graphic designer in Chicago, IL. His main goal was to attract prospective clients for freelance jobs, so he wanted a website that showcases some of his best work.</p>
              <p class="mb-30">I kept the design of this website simple to help Ryan's work stand out. His reel (AKA a video portfolio) is the most important piece of content, probably the first thing his future clients would look for, so it is placed front and center on the landing page. To make the embedded videos responsive and looking good on all devices, I used a jQuery plugin called <a href="http://fitvidsjs.com/" target="_blank" title="Fitvids.js library">FitVids.js</a>, which gives the videos a fluid width. For the contact form, I used <a href="https://github.com/PHPMailer/PHPMailer" target="_blank" title="PHPMailer Plugin">PHPMailer</a>, an email sending library for PHP, to make it functional and also coded in a "honeypot" to help prevent spam. Other than the two plugins I just mentioned, the rest of this website was completely hand-coded.</p>
            </div>
            <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
              <p><strong>Technologies Used:</strong></p>
              <p class="mb-30">
                <span class="label tag">Responsive Design</span>
                <span class="label tag">HTML5</span>
                <span class="label tag">CSS3</span>
                <span class="label tag">PHP</span>
                <span class="label tag">PHPMailer</span>
                <span class="label tag">FitVids.js</span>
              </p>
              <a class="btn td-btn outline green mb-30" href="http://ryanbechtel.com/" target="_blank" title="Link to ryanbechtel.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
            </div>
          </div><!-- /.row -->
          <div class="modal-footer center">
            <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Project</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- Contact Modal -->
  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactTitle">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-red">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title" id="contactTitle">Contact Me</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <form class="mb-15" method="post" id="contact-frm">
            <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="subject">Subject</label>
              <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="message">Message</label>
              <textarea class="form-control" name="message" id="message" rows="6" placeholder="Your message here..." required></textarea>
            </div>
            <small>*All fields are required</small>
            <div class="checkbox">
              <label>
                <input type="checkbox"> I'm a robot!
              </label>
            </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-primary td-btn outline small" data-dismiss="modal">Cancel</button>
            <button type="submit" id="save-info" class="btn td-btn outline small">Send Message</button>
          </div><!-- /.modal-footer -->
          </form>
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
 
  $("#save-info").on('click', (e) => {
  
      e.preventDefault();

      var data = $("#contact-frm").serializeArray();
      $.ajax({
        url:"save-enq.php",
        data:data,
        type:"POST",
        error:(r) => {
          console.log(r); 
        },
        success:(r) => {
         r = JSON.parse(r)
          if(r.status == 200){
            toastr.success('Your message has been taken and I will revert back to you soon!');
            $("#contact-frm")[0].reset();
            setTimeout(()=> {
              $("#contactModal").modal('hide');
            }, 2500)

          } else if(r.status == 400){
            toastr.error('You must fill all the fields to continue.')
          } else {
            toastr.error('It seems somthing just went wrong, please try after sometime');
          }
        }
      })
  })

  $("#portfolio").css('display','none')
</script>
