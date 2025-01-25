@extends('layout.pages')
@section('content')
@push('js')
<script>
    document.getElementById('saveProduct').addEventListener('click', function (e) {
        e.preventDefault();
        document.getElementById('productForm').submit();
    });
</script>
@endpush
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 title_present_inner breadcrumbs_present_inner breadcrumbs_1">
        <div class="content_wrap">
            <h1 class="page_title">Add Product</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Add Product</span>
            </div>
        </div>
    </div>
</div>
@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color: red;">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single post_featured_default post_format_standard page hentry">
                <section class="post_content">
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1455183321063">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="sc_section margin_right_null margin_left_null aligncenter">
                                        <div class="sc_section_inner">
                                            <div id="sc_form_132_wrap" class="sc_form_wrap">
                                                <div id="sc_form_132" class="sc_form sc_form_style_form_1 margin_top_small margin_bottom_medium">

                                                    <form id="productForm" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="sc_form_info">
                                                            <!-- Name Input -->
                                                            <div class="sc_form_item sc_form_field label_over">
                                                                <label class="required" for="name">Name</label>
                                                                <input id="name" type="text" name="name" placeholder="Enter product name" required>
                                                            </div>

                                                            <!-- Price Input -->
                                                            <div class="sc_form_item sc_form_field label_over">
                                                                <label class="required" for="price">Price</label>
                                                                <input id="price" type="number" name="price" placeholder="Enter product price" min="0" required>
                                                            </div>

                                                            <!-- Image Input -->
                                                            <div class="sc_form_item sc_form_field label_over">
                                                                <label class="required" for="image">Product Image</label>
                                                                <input id="image" type="file" name="image" accept="image/*" required>
                                                            </div>
                                                        </div>

                                                        <!-- Description Input -->
                                                        <div class="sc_form_item sc_form_message label_over">
                                                            <label class="required" for="description">Description</label>
                                                            <textarea id="description" name="description" placeholder="Enter product description"></textarea>
                                                        </div>
                                                    </form>

                                                    <!-- Save Button -->
                                                    <a href="#" id="saveProduct" class="btn btn-primary">Save</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="sc_section margin_bottom_huge">
                                        <div class="sc_section_inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <section class="related_wrap related_wrap_empty"></section>
        </div>
    </div>
</div>
@endsection
