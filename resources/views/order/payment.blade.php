@extends('layout.pages')
@section('content')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 title_present_inner breadcrumbs_present_inner breadcrumbs_1">
        <div class="content_wrap">
            <h1 class="page_title">Customization</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Customization</span>
            </div>
        </div>
    </div>
</div>
<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single post_featured_default post_format_standard post-878 page hentry">
                <section class="post_content">
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1449134047180">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <h2 class="sc_title sc_title_regular sc_align_center margin_top_huge margin_bottom_medium">Our Customization Services</h2>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <ul>
                                                <li>

                                                    <strong>Logo/company&#8217;s name replacement &#8211; $20</strong>
                                                    <br /> We will replace the template&#8217;s logo with yours on each of the template&#8217;s pages. Custome should provide logo in good quality in .PSD, .EPS, .AI or .CDR format
                                                </li>
                                                <li>
                                                    <strong>Advanced contact form for template &#8211; $120</strong>
                                                    <br /> Creating advanced contact form up to 10 fields with dropdowns / checkboxes / radio buttons (+extra fee for extra fields)
                                                </li>
                                                <li>
                                                    <strong>Installation &#8211; $30</strong>
                                                    <br /> Template will be installed to your server to look like in our on-line demo. Access to admin panel will be granted to you to manage your website
                                                </li>
                                                <li>
                                                    <strong>Contact form customization &#8211; $45</strong>
                                                    <br /> We&#8217;ll rename field&#8217;s names, add or remove no more than 2 text fields
                                                </li>
                                                <li>
                                                    <strong>Change fontello icon &#8211; $18</strong>
                                                </li>
                                                <li>
                                                    <strong>To change the look and feel of menus &#8211; $80</strong>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="vc_empty_space space4em">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width"></div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1458721970185">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <h2 class="sc_title sc_title_regular sc_align_center margin_top_large margin_bottom_medium">Payment</h2>
                                    <div class="sc_section maxHBoxPrice margin_top_null margin_bottom_null">
                                        <div class="sc_section_inner">
                                            <div class="sc_price_block sc_price_block_style_3 column-1_1">
                                                <div class="sc_price_block_title">
                                                    <span>{{ $order->username }}</span>
                                                </div>
                                                <div class="sc_price_block_money">
                                                    <div class="sc_price">
                                                        <span class="sc_price_currency">Rp. {{ number_format($order->total_price, 0, ',', '.') }}</span>
                                                    </div>
                                                </div>
                                                <div class="sc_price_block_link">
                                                    <form action="{{ route('order.update', ['order' => $order->id]) }}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="status" value="paid">
                                                        <button type="submit">Checkout</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space space4em">
                                        <span class="vc_empty_space_inner"></span>
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
