{{-- <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form> --}}

@extends('layout.pages')
@section('content')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 title_present_inner breadcrumbs_present_inner breadcrumbs_1">
        <div class="content_wrap">
            <h1 class="page_title">Order Status</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Order Status</span>
            </div>
        </div>
    </div>
</div>
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <div class="list_products shop_mode_list">
                <nav class="woocommerce-breadcrumb">
                    <a href="#">Home</a>&nbsp;&#47;&nbsp;Order Status
                </nav>

                <ul class="products">
                    @foreach ($order as $p)
                    <li class="product has-post-thumbnail column-1_2 last">
                        <a href="single-product.html" class="woocommerce-LoopProduct-link"></a>
                        <div class="post_item_wrap">
                            <div class="post_featured">
                                <div class="post_thumb">
                                    @if (auth()->check() && auth()->user()->hasRole('admin'))
                                    <a class="hover_icon hover_icon_link" href="#">
                                        <img src="{{ asset('assets/images/services_3-300x281.png') }}" class="attachment-shop_catalog size-shop_catalog" alt="panini" title="panini" />
                                    </a>
                                @elseif (!auth()->check())
                                    <a href="{{ route('order.show', $p->id) }}">
                                        <img src="{{ asset('assets/images/services_3-300x281.png') }}" class="attachment-shop_catalog size-shop_catalog" alt="panini" title="panini" />
                                    </a>
                                @endif
                                </div>
                            </div>
                            <div class="post_content">
                                <h3>
                                    <a href="single-product.html"> {{$p->username}} </a>
                                </h3>
                                <div class="description">
                                 @foreach ($p->orderDetails as $detail)
                                    <p>
                                        Product Name: {{ $detail->Product->name }} |
                                        Qty: {{ $detail->quantity }} |
                                    </p>
                                @endforeach
                                </div>
                                <span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">Rp.</span>{{$p->total_price}}
                                    </span>
                                </span>
                                @role('admin')
                                @if ($p->status == 'paid')
                                <form action="{{ route('order.update', $p->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="proceed">
                                    <button class="button product_type_simple add_to_cart_button" type="submit">Mark as Proceed</button>
                                </form>
                                @elseif ($p->status == 'proceed')
                                    <form action="{{ route('order.update', $p->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="completed">
                                        <button class="button product_type_simple add_to_cart_button" type="submit">Mark as Complete</button>
                                    </form>

                                @elseif ($p->status == 'Unpaid')
                                Unpaid
                                @else
                                Done
                                @endif
                                @endrole
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <nav id="pagination" class="pagination_wrap pagination_pages">
                    @if ($order->hasPages())
                        <!-- Tombol 'Previous' -->
                        @if ($order->onFirstPage())
                            <span class="pager_prev disabled">Previous</span>
                        @else
                            <a href="{{ $order->previousPageUrl() }}" class="pager_prev">Previous</a>
                        @endif

                        <!-- Tampilkan halaman pertama jika tidak berada di halaman pertama -->
                        @if ($order->currentPage() > 2)
                            <a href="{{ $order->url(1) }}" class="pager_number">1</a>
                            @if ($order->currentPage() > 3)
                                <span class="pager_dots">...</span>
                            @endif
                        @endif

                        <!-- Tampilkan 2 halaman di sekitar halaman aktif -->
                        @foreach (range(max(1, $order->currentPage() - 1), min($order->lastPage(), $order->currentPage() + 1)) as $page)
                            @if ($page == $order->currentPage())
                                <span class="pager_current active">{{ $page }}</span>
                            @else
                                <a href="{{ $order->url($page) }}" class="pager_number">{{ $page }}</a>
                            @endif
                        @endforeach

                        <!-- Tampilkan halaman terakhir jika tidak berada di halaman terakhir -->
                        @if ($order->currentPage() < $order->lastPage() - 1)
                            @if ($order->currentPage() < $order->lastPage() - 2)
                                <span class="pager_dots">...</span>
                            @endif
                            <a href="{{ $order->url($order->lastPage()) }}" class="pager_number">{{ $order->lastPage() }}</a>
                        @endif

                        <!-- Tombol 'Next' -->
                        @if ($order->hasMorePages())
                            <a href="{{ $order->nextPageUrl() }}" class="pager_next">Next</a>
                        @else
                            <span class="pager_next disabled">Next</span>
                        @endif
                    @endif
                </nav>
            </div>
        </div>

    </div>
</div>
@endsection
