<header class="top_panel_wrap top_panel_style_3 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
        <div class="top_panel_middle">
            <div class="content_wrap">
                <div class="contact_logo">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/logo.png" class="logo_main" alt="" width="128" height="124">
                            <img src="images/alternative-logo.png" class="logo_fixed" alt="" width="161" height="47">
                        </a>
                    </div>
                </div>
                <div class="menu_main_wrap">
                    <a href="#" class="menu_main_responsive_button icon-menu"></a>
                    <nav class="menu_main_nav_area">
                        <ul id="menu_main" class="menu_main_nav">
                            <li class="menu-item current-menu-item"><a href="/">Home</a></li>
                            <li class="menu-item"><a href="{{route('order.index')}}">Track Order</a></li>
                            <li class="menu-item"><a href="{{route('product.index')}}">Product</a></li>
                            <li class="menu-item"><a href="{{route('review.index')}}">Review</a></li>

                            @role('admin')
                            <li class="menu-item"><a href="{{('admin.dashboard')}}">Manage Order</a></li>
                            <li class="menu-item">
                                <form style="margin-top: 12px" id="loginForm" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a  href="#" id="loginLink" style="color: red">Logout</a>
                                </form>
                                <script>
                                    document.getElementById('loginLink').addEventListener('click', function (e) {
                                        e.preventDefault();
                                        document.getElementById('loginForm').submit();
                                    });
                                </script>
                            </li>

                            @endrole

                        </ul>
                    </nav>
                    <div class="contact_cart">
                        <a href="{{ route('cart.view') }}" class="top_panel_cart_button">
                            <span class="contact_icon icon-shopping"></span>
                            <span class="contact_label contact_cart_label">Your cart:</span>
                            <span class="contact_cart_totals">
                                <span class="cart_items">{{ array_sum(array_column($cart, 'quantity')) }} Items</span>
                            </span>
                        </a>
                        <ul class="widget_area sidebar_cart sidebar">
                            <li>
                                <div class="widget woocommerce widget_shopping_cart">
                                    <div class="hide_cart_widget_if_empty">
                                        <div class="widget_shopping_cart_content">
                                            <ul class="cart_list product_list_widget">
                                                @if (empty($cart))
                                                    <li class="empty">No products in the cart.</li>
                                                @else
                                                    @php
                                                        $firstSixItems = collect($cart)->take(6);
                                                    @endphp

                                                    @foreach ($firstSixItems as $item)
                                                        <li>
                                                            <a href="#">
                                                                <img src="{{ asset('assets/images/2000x2000.png') }}" alt="{{ $item['name'] }}">
                                                                {{ $item['name'] }}
                                                            </a>
                                                            <span class="quantity">{{ $item['quantity'] }} ×
                                                                <span class="woocommerce-Price-amount amount">${{ $item['price'] }}</span>
                                                            </span>
                                                        </li>
                                                    @endforeach

                                                    @if (count($cart) > 6)
                                                        <li>...</li>
                                                    @endif

                                                    <button type="button" onclick="window.location='{{ route("cart.view") }}'">Checkout</button>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>


{{-- Mobile --}}
<div class="header_mobile">
    <div class="content_wrap">
        <div class="menu_button icon-menu"></div>
        <div class="logo">
            <a href="index.html">
                <img src="images/logo.png" class="logo_main" alt="" width="128" height="124">
            </a>
        </div>
        <div class="menu_main_cart top_panel_icon">
            <a href="#" class="top_panel_cart_button" data-items="0" data-summa="&#036;0.00">
                <span class="contact_icon icon-shopping"></span>
                <span class="contact_label contact_cart_label">Your cart:</span>
                <span class="contact_cart_totals">
                <span class="cart_items">0 Items</span> -
                    <span class="cart_summa">&#36;0.00</span>
                </span>
            </a>
            <ul class="widget_area sidebar_cart sidebar">
                <li>
                    <div class="widget woocommerce widget_shopping_cart">
                        <div class="hide_cart_widget_if_empty">
                            <div class="widget_shopping_cart_content">
                                <ul class="cart_list product_list_widget">
                                    @if (empty($cart))
                                        <li class="empty">No products in the cart.</li>
                                    @else
                                        @foreach ($cart as $item)
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/2000x2000.png') }}" alt="{{ $item['name'] }}">
                                                    {{ $item['name'] }}
                                                </a>
                                                <span class="quantity">{{ $item['quantity'] }} ×
                                                    <span class="woocommerce-Price-amount amount">${{ $item['price'] }}</span>
                                                </span>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="side_wrap">
        <div class="close">Close</div>
        <div class="panel_top">
            <nav class="menu_main_nav_area">
                <ul id="menu_main_mobile" class="menu_main_nav">
                    <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                    <li class="menu-item menu-item-has-children"><a href="#">Reservations</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="calendar.html">Calendar</a></li>
                            <li class="menu-item"><a href="tables.html">Tables Scheme</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="menu.html">Menu</a></li>
                    <li class="menu-item menu-item-has-children"><a href="#">Blog</a>

                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#">Features</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children"><a href="#">Tools</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="support.html">Support</a></li>
                                    <li class="menu-item"><a href="customization.html">Customization</a></li>
                                    <li class="menu-item"><a href="video.html">Video Tutorials</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="about.html">About Us</a></li>
                            <li class="menu-item"><a href="team.html">Our Team</a></li>
                            <li class="menu-item"><a href="single-team.html">Team member</a></li>
                            <li class="menu-item"><a href="clients.html">Our Clients</a></li>
                            <li class="menu-item"><a href="testimonials.html">Testimonials</a></li>
                            <li class="menu-item"><a href="typography.html">Typography</a></li>
                            <li class="menu-item"><a href="shortcodes.html">Shortcodes</a></li>
                            <li class="menu-item menu-item-has-children"><a href="#">Gallery</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="cobbles.html">Cobbles</a></li>
                                    <li class="menu-item"><a href="grid.html">Grid</a></li>
                                    <li class="menu-item"><a href="masonry.html">Masonry</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="shop.html">Shop</a></li>
                    <li class="menu-item"><a href="contacts.html">Contacts</a></li>
                </ul>
            </nav>
            <div class="search_wrap search_style_regular search_state_fixed search_ajax">
                <div class="search_form_wrap">
                    <form role="search" method="get" class="search_form" action="#">
                        <button type="submit" class="search_submit icon-search-light" title="Start search"></button>
                        <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                    </form>
                </div>
                <div class="search_results widget_area scheme_original">
                    <a class="search_results_close icon-cancel"></a>
                    <div class="search_results_content"></div>
                </div>
            </div>
            <div class="login">
                <a href="#popup_login" class="popup_link popup_login_link icon-user">Login</a>
            </div>
            <div class="login">
                <a href="#popup_registration" class="popup_link popup_register_link icon-pencil">Register</a>
            </div>
        </div>
        <div class="panel_bottom">
            <div class="contact_socials">
                <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_twitter">
                            <span class="icon-twitter"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_facebook">
                            <span class="icon-facebook"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_gplus">
                            <span class="icon-gplus"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_linkedin">
                            <span class="icon-linkedin"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_skype">
                            <span class="icon-skype"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div><ul class="sub-menu">
                            <li class="menu-item"><a href="blog-sidebar.html">Blog With Sidebar</a></li>
                            <li class="menu-item"><a href="blog.html">Blog Without Sidebar</a></li>
                            <li class="menu-item menu-item-has-children"><a href="#">Blog Masonry</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="masonry-2-columns.html">Masonry 2 Columns</a></li>
                                    <li class="menu-item"><a href="masonry-3-columns.html">Masonry 3 Columns</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="post-formats.html">Post Formats</a></li>
                        </ul>
    </div>
    <div class="mask"></div>
</div>
