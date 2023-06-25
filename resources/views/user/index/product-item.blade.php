<div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
    <div class="grid-view_image">
        <!-- start product image -->
        <a href="product-accordion.html" class="grid-view-item__link">
            <!-- image -->
            <img class="grid-view-item__image primary blur-up lazyload"
                data-src="{{ asset('assets/images/product-images/product-image1.jpg') }}"
                src="{{ asset('assets/images/product-images/product-image1.jpg') }}" alt="image" title="product" />
            <!-- End image -->
            <!-- Hover image -->
            <img class="grid-view-item__image hover blur-up lazyload"
                data-src="assets/images/product-images/product-image1-1.jpg"
                src="assets/images/product-images/product-image1-1.jpg" alt="image" title="product" />
            <!-- End hover image -->
            <!-- product label -->
            <div class="product-labels rectangular">
                <span class="lbl on-sale">-16%</span>
                <span class="lbl pr-label1">new</span>
            </div>
            <!-- End product label -->
        </a>
        <!-- end product image -->
        <!--start product details -->
        <div class="product-details hoverDetails text-center mobile">
            <!-- product name -->
            <div class="product-name">
                <a href="product-accordion.html">Edna Dress</a>
            </div>
            <!-- End product name -->
            <!-- product price -->
            <div class="product-price">
                <span class="old-price">$500.00</span>
                <span class="price">$600.00</span>
            </div>
            <!-- End product price -->

            <!-- product button -->
            <div class="button-set">
                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal"
                    data-target="#content_quickview">
                    <i class="icon anm anm-search-plus-r"></i>
                </a>
                <!-- Start product button -->
                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                    <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0">
                        <i class="icon anm anm-bag-l"></i>
                    </button>
                </form>
                <div class="wishlist-btn">
                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                        <i class="icon anm anm-heart-l"></i>
                    </a>
                </div>
                <div class="compare-btn">
                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                        <i class="icon anm anm-random-r"></i>
                    </a>
                </div>
            </div>
            <!-- end product button -->
        </div>
        <!-- Variant -->
        <ul class="swatches text-center">
            <li class="swatch medium rounded">
                <img src="{{ asset('assets/images/product-images/variant1.jpg') }}" alt="image" />
            </li>
            <li class="swatch medium rounded">
                <img src="{{ asset('assets/images/product-images/variant2.jpg') }}" alt="image" />
            </li>
            <li class="swatch medium rounded">
                <img src="{{ asset('assets/images/product-images/variant3.jpg') }}" alt="image" />
            </li>
            <li class="swatch medium rounded">
                <img src="{{ asset('assets/images/product-images/variant4.jpg') }}" alt="image" />
            </li>
            <li class="swatch medium rounded">
                <img src="{{ asset('assets/images/product-images/variant5.jpg') }}" alt="image" />
            </li>
            <li class="swatch medium rounded">
                <img src="{{ asset('assets/images/product-images/variant6.jpg') }}" alt="image" />
            </li>
        </ul>
        <!-- End Variant -->
        <!-- End product details -->
    </div>
</div>
