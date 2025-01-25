<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
    <title>Sadel Coffeeshop &#8211; </title>

    <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Grand+Hotel|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i|Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=latin-ext" type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset("assets/js/vendor/revslider/settings.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/js/vendor/woo/woocommerce-layout.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/js/vendor/woo/woocommerce-smallscreen.css") }}' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' href='{{ asset("assets/js/vendor/woo/woocommerce.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/css/fontello/css/fontello.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/css/style.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/css/core.animation.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/css/shortcodes.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/js/vendor/woo/plugin.woocommerce.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/css/skin.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/css/doc-style.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/css/responsive.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/css/skin.responsive.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/js/vendor/comp/comp.min.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/css/custom.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/css/core.messages.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets/css/core.portfolio.css") }}' type='text/css' media='all' />
</head>

<body class="home page body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide preloader vc_responsive">
<div id="page_preloader"></div>
<a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>

<div class="body_wrap">
    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>
        @include('layout.header')

        @yield('content')

        @include('layout.footer')
    </div>
</div>


<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
<div class="custom_html_section"></div>

<script type='text/javascript' src='{{ asset("assets/js/vendor/jquery/jquery.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/jquery/jquery-migrate.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/custom/custom.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/esg/jquery.themepunch.tools.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/revslider/jquery.themepunch.revolution.min.js") }}'></script>
<script type="text/javascript" src="{{ asset("assets/js/vendor/revslider/extensions/revolution.extension.slideanims.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/vendor/revslider/extensions/revolution.extension.layeranimation.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/vendor/revslider/extensions/revolution.extension.navigation.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/vendor/revslider/extensions/revolution.extension.parallax.min.js") }}"></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/modernizr.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/ui/core.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/superfish.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/custom/jquery.slidemenu.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/custom/core.utils.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/custom/core.init.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/custom/init.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/custom/embed.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/custom/shortcodes.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/custom/core.messages.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/comp/comp_front.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/isotope.pkgd.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/jquery.hoverdir.js") }}'></script>

</body>

</html>

