@extends('layout.master')
@section('content')
@push('css')
<link rel='stylesheet' href='{{ asset("assets/js/vendor/revslider/settings.css") }}' type='text/css' media='all' />
<link rel='stylesheet' href='{{ asset("assets/js/vendor/comp/comp.min.css") }}' type='text/css' media='all' />
@endpush
@push('js')
<script type='text/javascript' src='{{ asset("assets/js/vendor/esg/jquery.themepunch.tools.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/revslider/jquery.themepunch.revolution.min.js") }}'></script>
<script type="text/javascript" src="{{ asset("assets/js/vendor/revslider/extensions/revolution.extension.slideanims.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/vendor/revslider/extensions/revolution.extension.layeranimation.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/vendor/revslider/extensions/revolution.extension.navigation.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/vendor/revslider/extensions/revolution.extension.parallax.min.js") }}"></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/comp/comp_front.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/isotope.pkgd.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/vendor/jquery.hoverdir.js") }}'></script>
@endpush
<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_main">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" data-version="5.1">
            <ul>
                <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                    <img src="{{asset('assets/images/transparent.png')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption Hotcoffee-style-1 tp-resizeme rs-parallaxlevel-1" id="slide-3-layer-1" data-x="30" data-y="114" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">Fresh and Tasty</div>
                    <div class="tp-caption Hotcoffee-style-2 tp-resizeme rs-parallaxlevel-1" id="slide-3-layer-2" data-x="41" data-y="335" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">in the morning</div>
                    <div class="tp-caption Hotcoffee-style-3 tp-resizeme rs-parallaxlevel-1" id="slide-3-layer-3" data-x="30" data-y="196" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">coffee</div>
                    <div class="tp-caption Hotcoffee-style-4 tp-resizeme rs-parallaxlevel-1" id="slide-3-layer-4" data-x="547" data-y="618" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">Where to buy?</div>
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-3-layer-5" data-x="742" data-y="62" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                        <img src="{{asset('assets/images/punyang-Photoroom1-removebg-preview.png')}}" alt="" width="458" height="540" data-ww="458px" data-hh="540px" data-no-retina>
                    </div>

                    <div class="tp-caption tp-resizeme" id="slide-3-layer-7" data-x="-76" data-y="518" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                      <img src="{{asset('assets/images/main_slider_el_5.png')}}" alt="" width="391" height="216" data-ww="391px" data-hh="216px" data-no-retina>
                    </div>
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="slide-3-layer-9" data-x="999" data-y="651" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                        <img src="{{asset('assets/images/slider_1_el_4.png')}}" alt="" width="70" height="134" data-ww="70px" data-hh="134px" data-no-retina>
                    </div>
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="slide-3-layer-10" data-x="545" data-y="244" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                        <img src="{{asset('assets/images/main_slider_el_2.png')}}" alt="" width="143" height="86" data-ww="143px" data-hh="86px" data-no-retina>
                    </div>
                    <div class="tp-caption tp-resizeme" id="slide-3-layer-11" data-x="1092" data-y="561" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                        <img src="{{asset('assets/images/main_slider_el_3.png')}}" alt="" width="169" height="131" data-ww="169px" data-hh="131px" data-no-retina>
                    </div>
                </li>
                <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                    <img src="{{asset('assets/images/transparent.png')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption Hotcoffee-style-1 tp-resizeme rs-parallaxlevel-2" id="slide-2-layer-1" data-x="center" data-hoffset="" data-y="70" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">We made great coffee</div>
                    <div class="tp-caption Hotcoffee-style-5 tp-resizeme rs-parallaxlevel-2" id="slide-2-layer-3" data-x="center" data-hoffset="" data-y="162" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">for our guests</div>
                    <div class="tp-caption tp-resizeme" id="slide-2-layer-7" data-x="853" data-y="512" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                        <img src="{{asset('assets/images/main_slider_el_5.png')}}" alt="" width="391" height="216" data-ww="391px" data-hh="216px" data-no-retina>
                    </div>
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="slide-2-layer-14" data-x="443" data-y="244" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                        <img src="{{ asset('assets/images/punyang-Photoroom1-removebg-preview.png') }}" alt="" width="560" height="525" data-ww="516px" data-hh="485px" data-no-retina>
                    </div>
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="slide-2-layer-12" data-x="891" data-y="275" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                        <img src="{{ asset('assets/images/main_slider_el_6.png') }}" alt="" width="72" height="140" data-ww="72px" data-hh="140px" data-no-retina>
                    </div>
                    <div class="tp-caption tp-resizeme" id="slide-2-layer-15" data-x="49" data-y="20" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                        <img src="{{ asset('assets/images/main_slider_el_3.png') }}" alt="" width="169" height="131" data-ww="152px" data-hh="118px" data-no-retina>
                    </div>
                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                        <img src="{{ asset('assets/images/transparent.png') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption tp-resizeme" id="slide-1-layer-7" data-x="884" data-y="45" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                            <img src="{{ asset('assets/images/main_slider_el_5.png') }}" alt="" width="391" height="216" data-ww="391px" data-hh="216px" data-no-retina>
                        </div>
                        <div class="tp-caption tp-resizeme" id="slide-1-layer-11" data-x="-46" data-y="477" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                            <img src="{{ asset('assets/images/main_slider_el_3.png') }}" alt="" width="169" height="131" data-ww="169px" data-hh="131px" data-no-retina>
                        </div>
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="slide-1-layer-12" data-x="441" data-y="442" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;rZ:104;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
                            <img src="{{ asset('assets/images/main_slider_el_6.png') }}" alt="" width="72" height="140" data-ww="72px" data-hh="140px" data-no-retina>
                        </div>
                    </li>
            </ul>
            <div class="tp-static-layers">
            </div>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
</section>

<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single post_featured_default post_format_standard page hentry">
                <section class="post_content">
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <h2 class="sc_title sc_title_regular sc_align_center margin_top_tiny margin_bottom_small" data-animation="animated fadeInUp normal">Welcome to our coffee house</h2>
                                    <div class="sc_section margin_bottom_huge aligncenter w80" data-animation="animated fadeInUp normal">
                                        <div class="sc_section_inner">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p>
                                                        From a cultural standpoint, coffeehouses largely serve as centers of social interaction:
                                                        the coffeehouse provides patrons with a place to congregate,
                                                        talk, read, write, entertain one another, or pass the time,<br />
                                                        whether individually or in small groups.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width"></div>

                    <div class="vc_row-full-width"></div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1455545189644">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_empty_space space10p">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div id="sc_services_258_wrap" class="sc_services_wrap">
                                        <div id="sc_services_258" class="sc_services sc_services_style_services-3 sc_services_type_icons sc_slider_nopagination sc_slider_nocontrols margin_top_huge margin_bottom_huge" data-interval="5914" data-slides-per-view="3" data-slides-min-width="250" data-animation="animated fadeInUp normal">
                                            <div class="sc_columns columns_wrap">
                                                @foreach ($data as $index => $product)
                                                    @if ($index < 9)
                                                        <div class="column-1_3 column_padding_bottom">
                                                            <div id="sc_services_258_{{ $index + 1 }}" class="sc_services_item">
                                                                <div class="sc_services_item_featured post_featured">
                                                                    <div class="post_thumb" data-image="{{ $product->image_path ? asset('storage/' . $product->image_path) : asset('assets/images/services_3.png') }}" data-title="{{ $product->name }}">
                                                                        <a class="hover_icon hover_icon_link" href="{{ route('product.index') }}">
                                                                            <img alt="{{ $product->name }}" src="{{ $product->image_path ? asset('storage/' . $product->image_path) : asset('assets/images/services_3-300x281.png') }}">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h4 class="sc_services_item_title">
                                                                    <a href="{{ route('product.index') }}">{{ $product->name }}</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="vc_empty_space space10p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div class="sc_section margin_top_huge">
                                            <div class="sc_section_inner"></div>
                                        </div>
                                        <div class="vc_empty_space space10p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div class="sc_section margin_top_huge">
                                            <div class="sc_section_inner"></div>
                                        </div>
                                        <div class="vc_empty_space space10p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space space10p">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="sc_section margin_top_huge">
                                        <div class="sc_section_inner"></div>
                                    </div>
                                    <div class="vc_empty_space space10p">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="sc_section margin_top_huge">
                                        <div class="sc_section_inner"></div>
                                    </div>
                                    <div class="vc_empty_space space10p">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width"></div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_revslider_element wpb_content_element">
                                        <div id="rev_slider_2_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                                            <div id="rev_slider_2_2" class="rev_slider fullwidthabanner" data-version="5.1">
                                                <ul>
                                                    @foreach ($products as $index => $orderDetail)
                                                        <li data-index="rs-{{ $index + 4 }}" data-transition="fade" data-slotamount="default"
                                                            data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb=""
                                                            data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">

                                                            <img src="{{ asset('images/transparent.png') }}" alt="" data-bgposition="center center"
                                                                 data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                                                            <div class="tp-caption Hotcoffee-style-7 tp-resizeme" id="slide-{{ $index + 4 }}-layer-1"
                                                                 data-x="643" data-y="238" data-width="['auto']" data-height="['auto']"
                                                                 data-transform_idle="o:1;" data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                                                 data-transform_out="opacity:0;s:500;s:500;" data-start="500"
                                                                 data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                                {{ $orderDetail->product->name }}
                                                            </div>

                                                            <div class="tp-caption Hotcoffee-style-8 tp-resizeme" id="slide-{{ $index + 4 }}-layer-2"
                                                                 data-x="645" data-y="359" data-width="['auto']" data-height="['auto']"
                                                                 data-transform_idle="o:1;" data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                                                 data-transform_out="opacity:0;s:500;s:500;" data-start="500"
                                                                 data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                                {{ $orderDetail->product->description ?? 'No description available' }}
                                                            </div>

                                                            <div class="tp-caption Hotcoffee-style-9 tp-resizeme" id="slide-{{ $index + 4 }}-layer-3"
                                                                 data-x="645" data-y="454" data-width="['auto']" data-height="['auto']"
                                                                 data-visibility="['on','on','on','off']" data-transform_idle="o:1;"
                                                                 data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                                                 data-transform_out="opacity:0;s:500;s:500;" data-start="500"
                                                                 data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                                Purchased {{ $orderDetail->total_qty }} times.
                                                            </div>

                                                            <div class="tp-caption no-style" id="slide-{{ $index + 4 }}-layer-4" data-x="654" data-y="565"
                                                                 data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                                                                 data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                                                 data-transform_out="opacity:0;s:500;s:500;" data-start="500"
                                                                 data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off">
                                                                <a href="{{ route('product.index') }}"
                                                                   class="sc_button sc_button_square sc_button_style_border_2 sc_button_size_medium">
                                                                    View Menu
                                                                </a>
                                                            </div>
                                                            <div class="tp-caption tp-resizeme" id="slide-{{ $index + 4 }}-layer-5" data-x="70" data-y="205"
                                                                 data-width="['none','none','none','none']" data-height="['none','none','none','none']"
                                                                 data-transform_idle="o:1;" data-transform_in="x:-50px;opacity:0;s:500;e:Power2.easeInOut;"
                                                                 data-transform_out="x:-50px;opacity:0;s:500;s:500;" data-start="500"
                                                                 data-responsive_offset="on">
                                                                <img src="{{ $orderDetail->product->image_path ? asset('storage/' . $orderDetail->product->path) : asset('assets/images/punyang-Photoroom1') }}"
                                                                     alt="{{ $orderDetail->product->name }}" width="524" height="523" data-ww="524px" data-hh="523px" data-no-retina>
                                                            </div>
                                                            <div class="tp-caption tp-resizeme" id="slide-{{ $index + 4 }}-layer-6" data-x="649" data-y="118"
                                                                 data-width="['none','none','none','none']" data-height="['none','none','none','none']"
                                                                 data-transform_idle="o:1;" data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                                                 data-transform_out="opacity:0;s:500;s:500;" data-start="500"
                                                                 data-responsive_offset="on">
                                                                <img src="{{ asset('assets/images/second_slider_el_2.png') }}" alt="" width="202" height="104"
                                                                     data-ww="202px" data-hh="104px" data-no-retina>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <div class="tp-bannertimer tp-bottom"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width"></div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="sc_parallax" data-parallax-speed="0.3" data-parallax-x-pos="50%" data-parallax-y-pos="50%">
                                        <div class="sc_parallax_content bg2">
                                            <div class="sc_section margin_top_large">
                                                <div class="sc_section_inner"></div>
                                            </div>
                                            <div class="vc_empty_space space10p">
                                                <span class="vc_empty_space_inner"></span>
                                            </div>
                                            <div class="sc_section margin_top_huge margin_bottom_huge aligncenter" data-animation="animated fadeInUp normal">
                                                <div class="sc_section_inner">
                                                    <figure class="sc_image  sc_image_shape_square margin_top_huge margin_bottom_huge">
                                                        <img src="images/coffee-pot.png" alt="" />
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="vc_empty_space space10p">
                                                <span class="vc_empty_space_inner"></span>
                                            </div>
                                            <div class="sc_section margin_top_large">
                                                <div class="sc_section_inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width"></div>
                </section>
            </article>
            <section class="related_wrap related_wrap_empty"></section>
        </div>
    </div>
</div>
@endsection
