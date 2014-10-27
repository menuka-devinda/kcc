$(document).ready(function() {
    $('head').prepend('<link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">');
    $('body').prepend('<div id="panel">\n\
                        <div class="navbar navbar-inverse navbar-fixed-top" id="advanced">\n\
                        <span class="trigger"><strong></strong><em></em></span>\n\
                        <div class="navbar-inner">\n\
                            <div class="container">\n\
                                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-top-collapse">\n\
                                <span class="icon-bar"></span><span class="icon-bar"></span>\n\
                                <span class="icon-bar"></span></button><a class="brand" href="index.html">Bootstrap</a>\n\
                                      <div class="nav-collapse collapse nav-top-collapse">\n\
                                            <ul class="nav"><li class="home"><a href="index.php"><img src="img/tm/tm_home.png"></a></li>\n\
                                             <li class="divider-vertical"></li>\n\
                                             <li class=""><a href="assets/scaffolding.html">Scaffolding</a></li>\n\
                                             <li class=""><a href="assets/base-css.html">Base CSS</a></li>\n\
                                             <li><a href="assets/components.html">Components</a></li>\n\
                                             <li class=""><a href="assets/javascript.html">Javascript</a></li>\n\
                                             <li class="divider-vertical"></li>\n\
                                             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">TM add-ons <b class="caret"></b></a>\n\
                                             <ul class="dropdown-menu"><li><a href="404.html">Pages</a><ul>\n\
                                                 <li><a href="assets/under_construction.html">Under Construction</a></li>\n\
                                                 <li><a href="assets/intro.html">Intro Page</a></li><li><a href="404.html">404 page</a></li></ul></li>\n\
                                                 <li><a href="assets/portfolio.html">Portfolio</a></li>\n\
                                                 <li><a href="assets/slider.html">Slider</a></li>\n\
                                                 <li><a href="assets/social_media.html">Social and Media<br> Sharing</a></li>\n\
                                                 <li><a href="assets/css3.html">CSS3 Tricks</a></li>\n\
                                             </ul>\n\\n\
                                             <ul><div class="container clearfix">\n\
                                                    <ul class="list-social pull-right">\n\
                                                    <li><a class="icon-1" href="#"></a></li>\n\
                                                    <li><a class="icon-2" href="#"></a></li>\n\
                                                    <li><a class="icon-3" href="#"></a></li>\n\
                                                    <li><a class="icon-4" href="#"></a></li>\n\
                                                  </ul>\n\\n\
                                             </li>\n\
                                            </ul>\n\
                                       </div>\n\
                            </div>\n\
                        </div>\n\
                        </div></div>');
});
$(window).scroll(function() {
    if ($(this).scrollTop() > 0) {
        $("#advanced").css({position: 'fixed'});
    } else {
        $("#advanced").css({position: 'relative'});
    }
});
$(function() {
    $.cookie("panel");
    $.cookie("panel2");
    var strCookies = $.cookie("panel");
    var strCookies2 = $.cookie("panel2");
    if (strCookies == 'boo')
    {
        if (strCookies2 == 'opened') {
            $("#advanced").css({marginTop: '0px'}).removeClass('closed')
        } else {
            $("#advanced").css({marginTop: '-40px'}).addClass('closed')
        }
        $("#advanced .trigger").toggle(function() {
            $(this).find('strong').animate({opacity: 0}).parent().parent('#advanced').removeClass('closed').animate({marginTop: '0px'}, "fast");
            strCookies2 = $.cookie("panel2", 'opened');
            strCookies = $.cookie("panel", null);
        },
                function() {
                    $(this).find('strong').animate({opacity: 1}).parent().parent('#advanced').addClass('closed').animate({marginTop: '-40px'}, "fast")
                    strCookies2 = $.cookie("panel2", null);
                    strCookies = $.cookie("panel", 'boo');
                });
    }
    else {
        $("#advanced").css({marginTop: '0px'}).removeClass('closed');
        $("#advanced .trigger").toggle(function() {
            $(this).find('strong').animate({opacity: 1}).parent().parent('#advanced').addClass('closed').animate({marginTop: '-40px'}, "fast");
            strCookies2 = $.cookie("panel2", null);
            strCookies = $.cookie("panel", 'boo');
        },
                function() {
                    $(this).find('strong').animate({opacity: 0}).parent().parent('#advanced').removeClass('closed').animate({marginTop: '0px'}, "fast")
                    strCookies2 = $.cookie("panel2", 'opened');
                    strCookies = $.cookie("panel", null);
                });
    }
});
