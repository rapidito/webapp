<?php if ( ! defined('WOODMART_THEME_DIR')) exit('No direct script access allowed');

/**
 * ------------------------------------------------------------------------------------------------
 * Prepare CSS selectors for theme settions (colors, borders, typography etc.)
 * ------------------------------------------------------------------------------------------------
 */

return apply_filters( 'woodmart_get_selectors', array(

	'primary-color' => array(
		'color' => woodmart_text2line( 'a:hover, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, blockquote footer:before, blockquote cite, blockquote cite a, .color-scheme-dark a:hover, .color-primary, .woodmart-dark .color-primary, .btn-style-bordered.btn-color-primary, .mega-menu-list > li > a:hover, .mega-menu-list > li > a:focus, .mega-menu-list .sub-sub-menu li a:hover, .mega-menu-list .sub-sub-menu li a:focus, .menu-style-default .navigation-wrap.navigation-color-scheme-dark .main-nav .item-level-0:hover > a, .menu-style-default .navigation-wrap.navigation-color-scheme-dark .main-nav .item-level-0:focus > a, .menu-style-default .navigation-wrap.navigation-color-scheme-dark .main-nav .item-level-0.current-menu-item > a, .site-mobile-menu li.current-menu-item > a, .site-mobile-menu .sub-menu li.current-menu-item > a, .woodmart-dark .site-mobile-menu li.current-menu-item > a, .dropdowns-color-light .site-mobile-menu li.current-menu-item > a, .woodmart-dark .site-mobile-menu .sub-menu li.current-menu-item > a, .dropdowns-color-light .site-mobile-menu .sub-menu li.current-menu-item > a, .read-more-section a, .read-more-section a:hover, .single-post-navigation .blog-posts-nav-btn a:hover, .comments-area .reply a, .comments-area .reply a:hover, .comments-area .logged-in-as > a:hover, .error404 .page-title, .not-found .entry-header:before, .woodmart-title-color-primary .title-subtitle, .subtitle-color-primary.subtitle-style-default, .instagram-widget .clear a:hover, .woodmart-info-box .with-text, .woodmart-info-box .subtitle-color-primary, .woodmart-price-table.price-style-alt .woodmart-price-currency, .woodmart-price-table.price-style-alt .woodmart-price-value, .woodmart-menu-price.cursor-pointer:hover .menu-price-title, .woodmart-menu-price.cursor-pointer:focus .menu-price-title, .hotspot-icon-alt .hotspot-btn:after, .woodmart-products-tabs.tabs-design-simple .products-tabs-title li.active-tab-title, .brands-list .brand-item a:hover, .wishlist_table tr td.product-stock-status span.wishlist-in-stock:before, .woodmart-sticky-btn .in-stock:before, .product-image-summary .in-stock:before, .variations_form .in-stock:before, .woodmart-cart-design-3 .woodmart-cart-subtotal .amount, .menu-item-register .create-account-link, .menu-item-register .create-account-link:hover, .menu-item-register .create-account-link:focus, td.woocommerce-orders-table__cell-order-number a:hover, .woocommerce-order-pay td.product-total .amount, .woodmart-buttons > div a:focus, .woodmart-buttons > div a:hover, .woodmart-buttons .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a, .woodmart-hover-base .product-compare-button a:hover, .woodmart-hover-base .product-compare-button a:focus, .woodmart-sticky-btn .woodmart-sticky-btn-wishlist.exists, .woodmart-sticky-btn .woodmart-sticky-btn-wishlist:hover, .woocommerce-Address-title .edit:hover, a.login-to-prices-msg, a.login-to-prices-msg:hover, .amount, .price, .price ins, .compare-btn-wrapper a:hover, .summary-inner > .yith-wcwl-add-to-wishlist a:hover, .sizeguide-btn-wrapp a:hover, .woodmart-dark .compare-btn-wrapper a:hover, .woodmart-dark .summary-inner > .yith-wcwl-add-to-wishlist a:hover, .woodmart-dark .sizeguide-btn-wrapp a:hover, .compare-btn-wrapper a.added:before, .summary-inner > .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:before, .summary-inner > .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:before, .woodmart-accordion-title:hover, .woodmart-accordion-title.active, .woodmart-dark .woodmart-accordion-title:hover, .woodmart-dark .woodmart-accordion-title.active, .woocommerce-form-coupon-toggle > .woocommerce-info .showcoupon, .woocommerce-form-coupon-toggle > .woocommerce-info .showlogin, .woocommerce-form-login-toggle > .woocommerce-info .showcoupon, .woocommerce-form-login-toggle > .woocommerce-info .showlogin, .cart-totals-inner .shipping-calculator-button, .woodmart-dark .cart-totals-inner .shipping-calculator-button, .login-form-footer .lost_password, .login-form-footer .lost_password:hover, .login-form-footer .lost_password:focus, .woodmart-my-account-links a:hover:before, .woodmart-my-account-links a:focus:before, .menu-style-default .main-nav .item-level-0:hover > a, .menu-style-default .woodmart-header-links .item-level-0:hover > a, .whb-color-dark .navigation-style-default .item-level-0:hover > a, .menu-style-default .main-nav .item-level-0:focus > a, .menu-style-default .woodmart-header-links .item-level-0:focus > a, .whb-color-dark .navigation-style-default .item-level-0:focus > a, .menu-style-default .main-nav .item-level-0.current-menu-item > a, .menu-style-default .woodmart-header-links .item-level-0.current-menu-item > a, .whb-color-dark .navigation-style-default .item-level-0.current-menu-item > a, .whb-enabled .vertical-navigation .menu-mega-dropdown .sub-menu > li > a:hover, .menu-style-default .menu-mega-dropdown .color-scheme-dark .sub-menu > li > a:hover, .navigation-style-default .menu-mega-dropdown .color-scheme-dark .sub-menu > li > a:hover, .navigation-style-separated .menu-mega-dropdown .color-scheme-dark .sub-menu > li > a:hover, .navigation-style-bordered .menu-mega-dropdown .color-scheme-dark .sub-menu > li > a:hover, .whb-enabled .vertical-navigation .menu-mega-dropdown .sub-menu > li > a:focus, .menu-style-default .menu-mega-dropdown .color-scheme-dark .sub-menu > li > a:focus, .navigation-style-default .menu-mega-dropdown .color-scheme-dark .sub-menu > li > a:focus, .navigation-style-separated .menu-mega-dropdown .color-scheme-dark .sub-menu > li > a:focus, .navigation-style-bordered .menu-mega-dropdown .color-scheme-dark .sub-menu > li > a:focus, .whb-enabled .vertical-navigation .menu-mega-dropdown .sub-sub-menu li a:hover, .menu-style-default .menu-mega-dropdown .color-scheme-dark .sub-sub-menu li a:hover, .navigation-style-default .menu-mega-dropdown .color-scheme-dark .sub-sub-menu li a:hover, .navigation-style-separated .menu-mega-dropdown .color-scheme-dark .sub-sub-menu li a:hover, .navigation-style-bordered .menu-mega-dropdown .color-scheme-dark .sub-sub-menu li a:hover, .whb-enabled .vertical-navigation .menu-mega-dropdown .sub-sub-menu li a:focus, .menu-style-default .menu-mega-dropdown .color-scheme-dark .sub-sub-menu li a:focus, .navigation-style-default .menu-mega-dropdown .color-scheme-dark .sub-sub-menu li a:focus, .navigation-style-separated .menu-mega-dropdown .color-scheme-dark .sub-sub-menu li a:focus, .navigation-style-bordered .menu-mega-dropdown .color-scheme-dark .sub-sub-menu li a:focus, .navigation-wrap.navigation-color-scheme-dark .menu-text-widget > a:hover, .navigation-wrap.navigation-color-scheme-dark .menu-text-widget > ul li a:hover, .navigation-wrap.navigation-color-scheme-dark .menu-text-widget > ul li a:focus, .navigation-wrap.navigation-color-scheme-dark .menu-text-widget > ol li a:hover, .navigation-wrap.navigation-color-scheme-dark .menu-text-widget > ol li a:focus, .xtemos-category-list .tab-preview-count' ),

		'background-color' => woodmart_text2line( '.btn.btn-color-primary, .btn-style-bordered.btn-color-primary:hover, .menu-label-primary, .main-nav .item-level-0.callto-btn > a, .menu-style-bordered .navigation-wrap.navigation-color-scheme-dark .main-nav .item-level-0 > a > span:not(.menu-label):after, .mobile-nav-tabs .mobile-tab-title:after, .icon-sub-menu.up-icon, .quantity input[type="button"]:hover, .comment-form .submit, .woodmart-dark .woodmart-entry-meta .meta-reply .comments-count, .color-scheme-light .woodmart-entry-meta .meta-reply .comments-count, .blog-design-mask .woodmart-entry-meta .meta-reply .comments-count, .meta-post-categories, .woodmart-single-footer .tags-list a:hover:after, .woodmart-single-footer .tags-list a:focus:after, .woodmart-pagination > span:not(.page-links-title), .page-links > span:not(.page-links-title), .widget_tag_cloud .tagcloud a:hover, .widget_tag_cloud .tagcloud a:focus, .widget_product_tag_cloud .tagcloud a:hover, .widget_product_tag_cloud .tagcloud a:focus, .widget_calendar #wp-calendar #today, .slider-title:before, div.open-table-widget .otw-button-wrap .otw-submit, div.open-table-widget .otw-button-wrap .otw-submit-btn, .mc4wp-form input[type="submit"], .woocommerce table.wishlist_table td.product-add-to-cart a, #yith-wpv-abuse, .dokan-dashboard a.dokan-btn, .dokan-dashboard button.dokan-btn, .dokan-dashboard input[type="submit"].dokan-btn, .dokan-dashboard a.dokan-btn:hover, .dokan-dashboard a.dokan-btn:focus, .dokan-dashboard button.dokan-btn:hover, .dokan-dashboard button.dokan-btn:focus, .dokan-dashboard input[type="submit"].dokan-btn:hover, .dokan-dashboard input[type="submit"].dokan-btn:focus, .dokan-dashboard-wrap .dokan-dash-sidebar ul.dokan-dashboard-menu li.active, .dokan-dashboard-wrap .dokan-dash-sidebar ul.dokan-dashboard-menu li.dokan-common-links a:hover, .dokan-dashboard-wrap .dokan-dash-sidebar ul.dokan-dashboard-menu li:hover, #dokan-seller-listing-wrap .dokan-btn, .woocommerce-MyAccount-content .dokan-btn, div.wcmp_regi_main .button, .yith-ywraq-add-to-quote .yith-ywraq-add-button .button.add-request-quote-button, .select2-container--default .select2-results__option[aria-selected=true], .woodmart-title-color-primary .title-subtitle.style-background, .woodmart-title-style-simple.woodmart-title-color-primary .liner-continer:after, .icons-design-simple .woodmart-social-icon:hover, .subtitle-color-primary.subtitle-style-background, .woodmart-info-box .subtitle-color-primary.subtitle-style-background, .timer-style-active .woodmart-timer > span, .woodmart-price-table .woodmart-plan-footer > a, .woodmart-price-table.price-style-default .woodmart-plan-price, .hotspot-icon-default .hotspot-btn, .hotspot-icon-alt .woodmart-image-hotspot.hotspot-opened .hotspot-btn, .hotspot-icon-alt .woodmart-image-hotspot:hover .hotspot-btn, .hotspot-content .add_to_cart_button, .woodmart-pf-btn button, .widget_product_categories .product-categories li a:hover + .count, .widget_product_categories .product-categories li a:focus + .count, .widget_product_categories .product-categories li.current-cat > .count, .woodmart-woocommerce-layered-nav .layered-nav-link:hover + .count, .woodmart-woocommerce-layered-nav .layered-nav-link:focus + .count, .woodmart-woocommerce-layered-nav .chosen .count, .woodmart-wishlist-info-widget .wishlist-count, .woodmart-cart-design-2 .woodmart-cart-number, .woodmart-cart-design-5 .woodmart-cart-number, .woodmart-cart-design-4 .woodmart-cart-number, td.woocommerce-orders-table__cell-order-actions a, .account-payment-methods-table .button, .product-label.onsale, .woodmart-hover-alt .btn-add-swap > a span:not(.woodmart-tooltip-label):before, .woodmart-hover-base:not(.product-in-carousel):not(.hover-width-small):not(.add-small-button) .woodmart-add-btn > a, .woodmart-hover-quick .woodmart-add-btn > a, .product-list-item .woodmart-add-btn > a, .woodmart-hover-standard .btn-add > a, .cat-design-replace-title .category-title, .popup-quick-view .woodmart-scroll-content > a, .popup-quick-view .view-details-btn, .widget_shopping_cart .buttons .checkout, .widget_price_filter .ui-slider .ui-slider-range, .widget_price_filter .ui-slider .ui-slider-handle:after, .widget_layered_nav ul .chosen a:before, .woocommerce input[name="save_account_details"], .woocommerce input[name="save_address"], .woocommerce input[name="track"], .woocommerce-pagination .page-numbers .current, .woocommerce-store-notice, .single_add_to_cart_button, .tabs-layout-tabs .tabs li a:after, .checkout_coupon .button, #place_order, .return-to-shop .button, .cart-totals-inner .checkout-button, .cart-actions .button[name="apply_coupon"], .register .button, .login .button, .lost_reset_password .button, .woocommerce-MyAccount-content > p:not(.woocommerce-Message):first-child mark, .woocommerce-MyAccount-content > .button, .order-info mark, .order-again .button, .woocommerce-Button--next, .woocommerce-Button--previous, .woocommerce-MyAccount-downloads-file, .menu-style-bordered .main-nav .item-level-0 > a > span:not(.menu-label):after, .menu-style-bordered .woodmart-header-links .item-level-0 > a > span:not(.menu-label):after, .whb-color-dark .navigation-style-underline .item-level-0 > a > span:not(.menu-label):after, .menu-style-bordered .full-screen-nav .item-level-0 > a > span:not(.menu-label):after, .menu-style-bordered .sub-menu-dropdown .sub-menu li a > span:not(.menu-label):after, .menu-style-bordered .sub-menu-dropdown .sub-sub-menu li a > span:not(.menu-label):after, .navigation-style-underline .item-level-0 > a > span:not(.menu-label):after, .navigation-style-underline .sub-menu-dropdown .sub-menu li a > span:not(.menu-label):after, .navigation-style-underline .sub-menu-dropdown .sub-sub-menu li a > span:not(.menu-label):after, .masonry-filter li a:after, .wpb-js-composer .vc_tta.vc_general.vc_tta-style-classic.vc_tta-tabs .vc_tta-tab .vc_tta-title-text:after, .woodmart-products-tabs.tabs-design-default .products-tabs-title .tab-label:after, .woodmart-products-tabs.tabs-design-alt .products-tabs-title .tab-label:after, .category-nav-link .category-name:after, .woodmart-checkout-steps ul li span:after, .xtemos-category-list .tab-preview-name:after' ),

		'border-color' => woodmart_text2line( 'blockquote, .border-color-primary, .btn-style-bordered.btn-color-primary, .btn-style-link.btn-color-primary, .btn-style-link.btn-color-primary:hover, .menu-label-primary:before, .quantity input[type="button"]:hover, .woodmart-single-footer .tags-list a:hover, .woodmart-single-footer .tags-list a:focus, .widget_tag_cloud .tagcloud a:hover, .widget_tag_cloud .tagcloud a:focus, .widget_product_tag_cloud .tagcloud a:hover, .widget_product_tag_cloud .tagcloud a:focus, .dokan-dashboard a.dokan-btn, .dokan-dashboard button.dokan-btn, .dokan-dashboard input[type="submit"].dokan-btn, .dokan-dashboard a.dokan-btn:hover, .dokan-dashboard a.dokan-btn:focus, .dokan-dashboard button.dokan-btn:hover, .dokan-dashboard button.dokan-btn:focus, .dokan-dashboard input[type="submit"].dokan-btn:hover, .dokan-dashboard input[type="submit"].dokan-btn:focus, .dokan-dashboard-wrap .dokan-dash-sidebar ul.dokan-dashboard-menu li.active, .dokan-dashboard-wrap .dokan-dash-sidebar ul.dokan-dashboard-menu li.dokan-common-links a:hover, .dokan-dashboard-wrap .dokan-dash-sidebar ul.dokan-dashboard-menu li:hover, .woodmart-title-style-underlined.woodmart-title-color-primary .title, .woodmart-title-style-underlined-2.woodmart-title-color-primary .title, .woodmart-price-table.price-highlighted .woodmart-plan-inner, .woodmart-products-tabs.tabs-design-simple .tabs-name, .widget_product_categories .product-categories li a:hover + .count, .widget_product_categories .product-categories li a:focus + .count, .widget_product_categories .product-categories li.current-cat > .count, .woodmart-woocommerce-layered-nav .layered-nav-link:hover + .count, .woodmart-woocommerce-layered-nav .layered-nav-link:focus + .count, .woodmart-woocommerce-layered-nav .chosen .count, .widget_layered_nav ul li a:hover:before, .widget_layered_nav ul .chosen a:before, .woodmart-highlighted-products .elements-grid, .woodmart-highlighted-products.vc_carousel_container, .woocommerce-ordering select:focus' ),

		'stroke' => woodmart_text2line( '.with-animation .info-svg-wrapper path' ),
	),

	'secondary-color' => array(
		'color' => woodmart_text2line( '.color-alt, .woodmart-dark .color-alt, .btn-style-bordered.btn-color-alt, .woodmart-title-color-alt .title-subtitle, .subtitle-color-alt.subtitle-style-default, .woodmart-info-box .subtitle-color-alt' ),

		'background-color' => woodmart_text2line( '.btn.btn-color-alt, .btn-style-bordered.btn-color-alt:hover, .menu-label-secondary, .woodmart-title-color-alt .title-subtitle.style-background, .woodmart-title-style-simple.woodmart-title-color-alt .liner-continer:after, .subtitle-color-alt.subtitle-style-background, .woodmart-info-box .subtitle-color-alt.subtitle-style-background' ),

		'border-color' => woodmart_text2line( '.border-color-alternative, .btn-style-bordered.btn-color-alt, .btn-style-link.btn-color-alt, .btn-style-link.btn-color-alt:hover, .menu-label-secondary:before, .woodmart-title-style-underlined.woodmart-title-color-alt .title, .woodmart-title-style-underlined-2.woodmart-title-color-alt .title' ),
	),
		
	'text-font' => array( 'body, .font-text, .menu-label, .wpb-js-composer .vc_tta.vc_general.vc_tta-style-classic.vc_tta-accordion .vc_tta-panel-title, .widgetarea-mobile .widget_currency_sel_widget .widget-title, .widgetarea-mobile .widget_icl_lang_sel_widget .widget-title, .menu-item-register .create-account-link, .woodmart-hover-base .hover-content table th, .product-image-summary .shop_attributes th, .woocommerce-product-details__short-description table th' ),

	'primary-font' => array( '.font-primary, .page-title .entry-title, table th, .woodmart-products-tabs .tabs-name, .woodmart-products-tabs .products-tabs-title, .woodmart-price-table .woodmart-plan-title, .masonry-filter li, .woocommerce-column__title, header.title > h3, .woodmart-sizeguide-table tr:first-child td, .tabs-layout-tabs .tabs li, .woodmart-accordion-title, .woodmart-checkout-steps ul, .woocommerce-billing-fields > h3, .woocommerce-shipping-fields > h3, .woocommerce-additional-fields > h3, #ship-to-different-address label, #order_review_heading, .cart-empty, .cart-totals-inner h2, .social-login-title, .register-or, .woocommerce-MyAccount-title, .wpb-js-composer .vc_tta.vc_general.vc_tta-style-classic.vc_tta-tabs .vc_tta-tab > a, .wishlist-title h2, body > h1, table.compare-list tr.no-products td, #order_payment_heading, .widget_rss ul li > a, h1, h2, h3, h4, h5, h6, .title, legend, .woocommerce-Reviews .comment-reply-title, .menu-mega-dropdown .sub-menu > li > a, .mega-menu-list > li > a, .color-scheme-light .mega-menu-list > li > a' ),

	'secondary-font' => array( '.font-alt' ),

	'titles-font' => array( '.blog-post-loop .entry-title, .post-single-page .entry-title, .single-post-navigation .post-title, td.product-name a, .category-grid-item .category-title, .product-image-summary .entry-title, .autocomplete-suggestion .suggestion-title, .widget_recent_entries ul li a, .widget_recent_comments ul li > a, .woodmart-recent-posts .entry-title a, .widget_recent_reviews li a, .woodmart-menu-price .menu-price-title, .group_table td.label a, .product-grid-item .product-title, .yith-woocompare-widget .products-list li a.title, .product-title, table.compare-list tr.title td' ),

	'widget-titles-font' => array( '.widgettitle, .widgettitle a, .widget-title, .widget-title a' ),

	'navigation-font' => array( '.main-nav-style, .menu-opener, .categories-menu-dropdown .item-level-0 > a, .woodmart-burger-icon .woodmart-burger-label, .main-nav .item-level-0 > a, .whb-secondary-menu .item-level-0 > a, .topbar-menu .item-level-0 > a, .full-screen-nav .item-level-0 > a, .woodmart-wishlist-info-widget .wishlist-label, .woodmart-wishlist-info-widget .wishlist-count, .woodmart-shopping-cart .woodmart-cart-totals, .woodmart-header-links .item-level-0 > a' ),

	'btns-default' => array( '.cart-actions .button[name="update_cart"], .woodmart-switch-to-register, .widget_shopping_cart .buttons .btn-cart, .widget_price_filter .price_slider_amount .button, .yith-woocompare-widget > a.compare, .cart-totals-inner .shipping-calculator-form .button, #dokan-form-contact-seller.seller-form input.dokan-btn-theme, .simplePopup .submit-report-abuse, .vendor_sort input[type="submit"], .wcmp-quick-info-wrapper input[type="submit"]' ),

	'btns-accent' => array( '.cart-actions .button[name="apply_coupon"], td.woocommerce-orders-table__cell-order-actions a, .woocommerce-Button--next, .woocommerce-Button--previous, .comment-form .submit, .mc4wp-form input[type="submit"], .woocommerce input[name="save_account_details"], .woocommerce input[name="save_address"], .woocommerce input[name="track"], .main-nav .item-level-0.callto-btn > a, .checkout_coupon .button, .cookies-buttons .cookies-accept-btn, .post-password-form input[type="submit"], #yith-wpv-abuse, div.open-table-widget .otw-button-wrap .otw-submit, div.open-table-widget .otw-button-wrap .otw-submit-btn, .woocommerce-MyAccount-content > .button, .account-payment-methods-table .button, #dokan-seller-listing-wrap .dokan-btn, .woocommerce-MyAccount-downloads-file, .order-again .button, div.wcmp_regi_main .button' ),

	'btns-shop' => array( '.single_add_to_cart_button, .widget_shopping_cart .buttons .checkout, .cart-totals-inner .checkout-button, .woodmart-hover-quick .woodmart-add-btn > a, .woodmart-hover-standard .btn-add > a, #place_order, .return-to-shop .button, .woodmart-hover-base:not(.product-in-carousel):not(.hover-width-small):not(.add-small-button) .woodmart-add-btn > a, .register .button, .login .button, .lost_reset_password .button, .woodmart-price-table .woodmart-plan-footer > a, table.compare-list tr.add-to-cart td a, .popup-added_to_cart .view-cart, .woocommerce table.wishlist_table td.product-add-to-cart .add_to_cart, .popup-quick-view .woodmart-scroll-content > a, .product-list-item .woodmart-add-btn a, .yith-woocompare-premium .compare-list .product_info .button, .yith-woocompare-premium .compare-list .add-to-cart .button, .yith-woocompare-premium .compare-list .added_to_cart, #yith-woocompare-related .related-products .woocommerce > a, .woodmart-sticky-btn .woodmart-sticky-add-to-cart, .woodmart-pf-btn button, .hotspot-content .add_to_cart_button' ),

	'link-color' => array( 'a' ),

) );