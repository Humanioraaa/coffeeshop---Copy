@extends('layout.pages')
@section('content')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endpush

<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 title_present_inner breadcrumbs_present_inner breadcrumbs_1">
        <div class="content_wrap">
            <h1 class="page_title">Review</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="shop.html">Review</a>
                <span class="breadcrumbs_delimiter"></span>
            </div>
        </div>
    </div>
</div>

<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single post_item_product">
                <nav class="woocommerce-breadcrumb">
                    <a href="">Home</a>&nbsp;&#47;&nbsp;

                </nav>
                <div id="product-140" class="post-140 product has-post-thumbnail first sale">

                    <div class="images">
                        <a href="{{asset('assets/images/sadelphoto.png')}}" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
                            <img src="{{asset('assets/images/sadelphoto.png')}}" class="attachment-shop_single size-shop_single" alt="americano" title="americano" />
                        </a>
                        <div class="thumbnails columns-4">
                            <a href="{{asset('assets/images/sadelphoto.png')}}" class="zoom first" title="" data-rel="prettyPhoto[product-gallery]">
                                <img src="{{asset('assets/images/sadelphoto2.png')}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="croissant" title="croissant" /></a>
                            <a href="{{asset('assets/images/sadelphoto.png')}}" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                <img src="{{asset('assets/images/sadelphoto3.png')}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="panini" title="panini" />
                            </a>
                        </div>
                    </div>
                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title">Sadel Street Coffee</h1>
                        <div>
                            <p>Maecenas et nunc augue. Duis convallis nulla augue, vel pretium quam mattis nec. Pellentesque dapibus faucibus lacus quis feugiat.</p>
                        </div>
                    </div>
                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs">
                            <li class="description_tab">
                            </li>
                        </ul>
                        <div class="">
                            <h2>Review</h2>
                            @foreach ($review  as $r )
                            <div class="card mt-5 border-success">
                                <div class="card-body">
                                    <h5 class="card-title">{{$r->Order->username}}</h5>
                                    <p class="card-text">{{$r->comment}}</p>
                                    <p class="card-text"><strong>{{$r->rating}}</strong>/5</p>
                                </div>
                              </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection
