<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>日友環保科技股份有限公司</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/ihover2.css" rel="stylesheet">
    <link href="css/sunfriend2.css" rel="stylesheet">
    <!--思源黑體 -->
    <style type="text/css">
    @import url(http://fonts.googleapis.com/earlyaccess/notosanstc.css);
    * {
        font-family: 'Noto Sans TC', sans-serif;
    }
    </style>
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/owl.carousel.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>

      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body">
    <!--HEADER START-->
    
    <header>
        <div class="navbar-fixed-top wow fadeInDown">
            <nav class="navbar navbar-default ">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand"><img alt="Brand" class="img-responsive" src="assets/images/LOGO-01-01.svg"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right " data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                            <li class=" dropdown ">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown">{{Lang::get('default.a')}} <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="#">{{Lang::get('default.b')}}</a></li>
                                    <li><a href="#">{{Lang::get('default.c')}}</a></li>
                                    <li><a href="#">{{Lang::get('default.d')}}</a></li>
                                    <li><a href="#">{{Lang::get('default.e')}}</a></li>
                                    <li><a href="#">{{Lang::get('default.f')}}</a></li>
                                    <li><a href="#">{{Lang::get('default.g')}}</a></li>
                                    <li><a href="#">{{Lang::get('default.h')}}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('default.b')}} <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="/about">最新消息</a></li>
                                    <li><a href="/about/help">重大訊息</a></li>
                                    <li><a href="/about/press">環保連結</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('default.c')}} <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="#">公司治理</a></li>
                                    <li><a href="#">運作規章</a></li>
                                    <li><a href="#">內稽組織運作</a></li>
                                    <li><a href="#">董事會</a></li>
                                    <li><a href="#">董事成員多元化</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('default.d')}} <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="#">股東會相關資訊</a></li>
                                    <li><a href="#">盈收公告</a></li>
                                    <li><a href="#">財務資訊</a></li>
                                    <li><a href="#">重大訊息參考網站</a></li>
                                    <li><a href="#">股利資訊</a></li>
                                    <li><a href="#">投資人連絡窗口</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('default.e')}} <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="#">導言</a></li>
                                    <li><a href="#">企業社會責任政策</a></li>
                                    <li><a href="#">具體作為及計畫</a></li>
                                    <li><a href="#">企業社會責任報告書</a></li>
                                    <li><a href="#">土豆鳥文學誌</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('default.f')}}  <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">關係人鑑別議題與措施</a></li>
                                    <li class="dropdown-submenu pull-left">
                                        <a href="#">員工福利措施</a>
                                        <ul class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                                            <li><a href="#">退休制度及實施狀況</a></li>
                                            <li><a href="#">員工工作環境與人身<br />安全保護措施</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">供應商管理政策</a></li>
                                    <li><a href="#">申訴管道</a></li>
                                    <li><a href="#">不道德行為檢舉制度</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('default.g')}} <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">環保單位查核行程</a></li>
                                    <li><a href="#">環境監測</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                            @if((Config::get('app.locale'))=="tw")
                                <a href="{{ url('/lang/set/en') }}">英文<i class="fa fa-angle-down"></i></a> 
                            @else
                                <a href="{{ url('/lang/set/tw') }}" >中文<i class="fa fa-angle-down"></i></a> 
                            @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="Gradientline"></div>
        </div>
    </header>
    <!--幻燈片-->
    <div id="myCarousel" class="carousel slide wow fadeInDown" data-ride="carousel" >
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-caption">
                <h3>RUENTEX</h3>
                <h1>產業前進動能</h1>
                <h4>SUNNY FRIEND ENVIRONMENTAL TECHNOLOGY</h4>
            </div>
            <div class="item active">
                <img src="assets/images/slider/000.jpg" alt="First slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="assets/images/slider/002.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="assets/images/slider/004.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="assets/images/slider/005.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="assets/images/slider/006A.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="assets/images/slider/014.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="assets/images/slider/018.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="assets/images/slider/019.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
    </div>
    <script>
    $(function() {
        var $item = $('.carousel .item');
        var $wHeight = $(window).height();
        $item.height($wHeight);
        $item.addClass('full-screen');

        $('.carousel img').each(function() {
            var $src = $(this).attr('src');
            var $color = $(this).attr('data-color');
            $(this).parent().css({
                'background-image': 'url(' + $src + ')',
                'background-color': $color
            });
            $(this).remove();
        });

        //單則隱藏控制鈕
        if ($('.carousel .carousel-inner div.item').length < 2) {
            $('.carousel-indicators, .carousel-control').hide();
        }

        //縮放視窗調整視窗高度
        $(window).on('resize', function() {
            $wHeight = $(window).height();
            $item.height($wHeight);
        });

        //輪播秒數與滑入停止
        $('.carousel').carousel({
            interval: 5000,
            pause: "hover"


        });
    });


    </script>
    <!---三個地點-->
    <div id="location" class="section-padding wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-1">
                    <div class="service-icon"><img alt="Brand" class="img-responsive" src="assets/images/house-01.svg"></div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="service-box">
                        <div class="service-text">
                            <h3>雲林三廠</h3>
                            <p>為提升節能減碳效益，雲林三廠增加熱能回收設備，以減低燃料油之損耗，並藉由污染防制設備效能提升，減輕對環境負荷。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1">
                    <div class="service-icon"><img alt="Brand" class="img-responsive" src="assets/images/house-01.svg"></div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="service-box">
                        <div class="service-text">
                            <h3>彰濱二期</h3>
                            <p>有害廢棄物處理數量將因市場需求而日益增加，彰濱廠已投入第二套焚化爐之設置規劃，以因應未來的有害事業廢棄物處理市場。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1">
                    <div class="service-icon"><img alt="Brand" class="img-responsive" src="assets/images/house-01.svg"></div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="service-box">
                        <div class="service-text">
                            <h3>北京二期</h3>
                            <p>北京醫療廢棄物處理市場長期供不應求，北京二期焚化廠之規劃設置，可滿足北京市醫療廢棄物市場需求，並提高北京醫療廢棄物妥善處理率。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--關於日友-->
    <div class="back  wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-md-offset-1">
                    <div class="service-box1">
                        <img alt="Brand" class="img-responsive" src="assets/images/017.jpg">
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="service-box1">
                        <div class="about-text">
                            <h3>關於日友</h3>
                            <p>日友公司是臺灣第一家專業生物醫療廢棄物焚化處理廠，目前技術先進、水準領先，已成功將國外技術運用於國內外各類型的有害廢棄物處理領域，同時具備有害廢棄物清運、焚化、固化、物化及掩埋最終處理等項目，有效整合有害廢棄物上、中、下游一條龍式的專業服務。</p>
                        </div>
                    </div>
                    <div class="btn btn-default btnn ">繼續閱讀</div>
                </div>
            </div>
        </div>
    </div>
    <script>
    new wow().init();
    </script>
    <!--主要服務項目-->
    <div id="service" class="back1  wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <h1>主要服務項目</h1>
                <h2>以下為本公司之業務內容</h2>
                <div id="owl-one" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="ih-item square effect13">
                            <img class="img-responsive img" src="assets/images/Thumbnail/s01.jpg">
                        </div>
                        <div>
                            <p>事業廢棄物清除處理</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ih-item square effect13">
                            <img class="img-responsive img" src="assets/images/Thumbnail/s02.jpg">
                        </div>
                        <div>
                            <p>醫療廢棄物清除處理</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ih-item square effect13">
                            <img class="img-responsive img" src="assets/images/Thumbnail/s03.jpg">
                        </div>
                        <div>
                            <p>廢棄物檢驗分析與品管</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ih-item square effect13">
                            <img class="img-responsive img" src="assets/images/Thumbnail/s04.jpg">
                        </div>
                        <div>
                            <p>焚化爐設計、規劃及建造</p>
                        </div>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    var owl = $('#owl-one');
                    owl.owlCarousel({
                        margin: 30,
                        nav: true,
                        loop: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 3
                            },
                            1000: {
                                items: 4
                            }
                        }
                    })
                })
                </script>
            </div>
        </div>
    </div>
    <!--最新消息-->
    <div id="news" class="back2  wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <h1>最新消息</h1>
                <h2>日友最新資訊</h2>
                <div id="owl-two" class="owl-theme owl-carousel">
                    <div class="item">
                                    <img class=" icon_img" src="assets/images/owl_icon/newsLOGO-02.svg">

                        <div class="ih-item square effect13 bottom_to_top">
                            <div class="news-caption">
                                <h1>重要消息</h1>
                                <h4>公開資訊觀測站</h4>
                                <p>投資人可以透過『公開資訊觀測站』，查詢本公司之重大訊息。(查詢代號：8341)......</p>
                            </div>
                            <img class="img-responsive img" src="assets/images/news/new01.jpg">
                            <div class="info"></div>
                        </div>
                    </div>
                    <div class="item">
                                    <img class=" icon_img" src="assets/images/owl_icon/newsLOGO-03.svg">

                        <div class="ih-item square effect13 bottom_to_top">
                            <div class="news-btn">
                                <h1>簡介影片</h1>
                                <h4>公司介紹</h4>
                                <div class="btn btn-default newsbtn1 ">觀看中文版</div>
                                <div class="btn btn-default newsbtn1 ">觀看英文版</div>
                                <div class="btn btn-default newsbtn2 ">法人說明會相關資訊</div>
                            </div>
                            <img class="img-responsive img" src="assets/images/news/new02.jpg">
                            <div class="info"></div>
                        </div>
                    </div>
                    <div class="item">
                      <img class=" icon_img" src="assets/images/owl_icon/newsLOGO-04.svg">
                        <div class="ih-item square effect13 bottom_to_top">
                            <div class="news-caption">
                                <h1>環保連結</h1>
                                <h4>相關環保資訊</h4>
                                <p>日友彰濱廠(中區事業廢棄物綜合處理中心)青新環境工程(股)公司......</p>
                            </div>
                            <img class="img-responsive img" src="assets/images/news/new03.jpg">
                            <div class="info"></div>
                        </div>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    var owl = $('#owl-two');
                    owl.owlCarousel({
                        margin: 30,
                        top:90,
                        nav: true,
                        loop: true,
                        dots: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 3
                            },
                            1000: {
                                items: 3
                            }
                        }
                    })
                })
                </script>
            </div>
        </div>
    </div>
    <!--footer start from here-->
    <footer class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft">
                    <div class="logofooter">關於日友</div>
                    <p>本公司於2000年通過ISO14001(NSF) 環境管理系統標準驗證，並將環境政策徹底落實。本公司為提供客戶更完善服務，所經營業務廣泛，但以事業廢棄物之清除、處理、掩埋與政府焚化廠之承攬、興建、操作為主要業務。</p>
                    <div><img alt="Brand" class="img-responsive" src="assets/images/footerLOGO.svg"></div>
                </div>
                <div class="col-md-8 col-sm-6 paddingtop-bottom">
                    <div class="heading7">聯繫我們</div>
                    <ul class="footer-ul">
                        <li>
                            <h6> <i class="fa fa-home" aria-hidden="true"></i>總公司</h6></li>
                        <li>
                            <p>雲林縣元長鄉元東路1-20號 TEL：(05)7885788(代表號) FAX：(05)7887933</p>
                        </li>
                        <li>
                            <h6> <i class="fa fa-home" aria-hidden="true"></i>台北</h6></li>
                        <li>
                            <p>台北市八德路三段20號10F-3 TEL：(02)25795580(代表號) FAX：(02)25794015</p>
                        </li>
                        <li>
                            <h6><i class="fa fa-phone" aria-hidden="true"></i>陳情專線</h6></li>
                        <li><a href="#"> 05-7885788-111</a></li>
                        <li>
                            <h6><i class="fa fa-envelope" aria-hidden="true"></i>Email Address</h6></li>
                        <li><a href="#"> sf@sunnyfriend.com.tw</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer start from here-->
    <a href="#" id="goTop" class="goTop"></a>

    <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("goTop").style.display = "block";
    } else {
        document.getElementById("goTop").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document

</script>

    <div class="copyright footerbg">
        <div class="container">
            <div class="col-md-12">
                <p>© 2017 - All Rights with Sunny Friend</p>
            </div>
        </div>
    </div>
    <!--HEADER END-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/tutorial.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/scrollanimated.js"></script>

    <script>
    new WOW().init();
    </script>



</body>

</html>
