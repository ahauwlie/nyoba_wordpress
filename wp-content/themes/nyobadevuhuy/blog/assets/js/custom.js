(function ($) {
    "use strict";
    var themeparker = {
        initialize: function () {
            this.fixedFooter();
            this.toTop();
            this.stickySidebar();
            this.instagram();
            this.datePicker();
            this.featuredOwl();
            this.fullSkinSearch();
            this.imageSlide();
            this.popupGallery();
            this.textRotating();
            this.fbLikeBox();

        },
// -------------------------------------------------------------------------- //
// Sticky Sidebar
// -------------------------------------------------------------------------- //
        stickySidebar: function () {
            $('.leftSidebar, .content, .rightSidebar').theiaStickySidebar({
                additionalMarginTop: 30
            });
        },
// -------------------------------------------------------------------------- //
// Fixed Footer
// -------------------------------------------------------------------------- //
        fixedFooter: function () {
            $('.footer-fixed').css('height', 'auto');
            var footerHeight = $('.footer-fixed').outerHeight();
            $('body').css('padding-bottom', footerHeight);
            $('.footer-fixed').css('height', footerHeight);
        },
// -------------------------------------------------------------------------- //
// Back to top
// -------------------------------------------------------------------------- //  
        toTop: function () {
            $('body').append('<div id="toTop" class="btn btn-top"><span class="ti-arrow-up"></span></div>');
            $(window).on('scroll', function () {
                if ($(this).scrollTop() !== 0) {
                    $('#toTop').fadeIn();
                } else {
                    $('#toTop').fadeOut();
                }
            });
            $('#toTop').on('click', function () {
                $("html, body").animate({scrollTop: 0}, 600);
                return false;
            });
        },
// -------------------------------------------------------------------------- //
// Instagram
// -------------------------------------------------------------------------- //
        instagram: function () {
            $('.ri-grid').gridrotator({
                rows: 1,
                columns: 8,
                animType: 'fadeInOut',
                animSpeed: 2000,
                interval: 600,
                step: 1,
                w1024: {rows: 2, columns: 6},
                w768: {rows: 2, columns: 4},
                w480: {rows: 2, columns: 3}
            });
        },
// -------------------------------------------------------------------------- //
// Datepicker
// -------------------------------------------------------------------------- //
        datePicker: function () {
            $('#datepicker').datepicker({
                todayHighlight: true,
                templates: {
                    leftArrow: '<i class="ti-angle-left"></i>',
                    rightArrow: '<i class="ti-angle-right"></i>'
                }
            });
        },
// -------------------------------------------------------------------------- //
// Accordion
// -------------------------------------------------------------------------- //
        featuredOwl: function () {
            $("#featured-owl").owlCarousel({
                autoPlay: 5000, //Set AutoPlay to 5 seconds
                items: 4,
                itemsDesktop: [1199, 4],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [768, 2],
                itemsMobile: [479, 1],
                lazyLoad: true,
                pagination: false,
                navigation: true,
                navigationText: [
                    "<i class='ti-arrow-left'></i>",
                    "<i class='ti-arrow-right'></i>"
                ]
            });
        },
// -------------------------------------------------------------------------- //
// Image Slide
// -------------------------------------------------------------------------- //
        imageSlide: function () {
            $("#owl-image-slide").owlCarousel({
                items: 1,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                itemsMobile: [479, 1],
                lazyLoad: true,
                pagination: false,
                navigation: true,
                navigationText: [
                    "<i class='ti-arrow-left'></i>",
                    "<i class='ti-arrow-right'></i>"
                ]
            });
        },
// -------------------------------------------------------------------------- //
// Popup Gallery
// -------------------------------------------------------------------------- //
        popupGallery: function () {
            $('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                    titleSrc: function (item) {
                        return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                    }
                }
            });
        },
// -------------------------------------------------------------------------- //
// Popup Gallery
// -------------------------------------------------------------------------- //
        textRotating: function () {
            $("#js-rotating").Morphext({
                // The [in] animation type. Refer to Animate.css for a list of available animations.
                animation: "bounceIn",
                // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
                separator: ",",
                // The delay between the changing of each phrase in milliseconds.
                speed: 2000,
                complete: function () {
                    // Called after the entrance animation is executed.
                }
            });
        },
// -------------------------------------------------------------------------- //
// Facebook Likebox
// -------------------------------------------------------------------------- //
        fbLikeBox: function () {
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        },
// -------------------------------------------------------------------------- //
// Full Skin Search
// -------------------------------------------------------------------------- //
        fullSkinSearch: function () {
            //Program created by Ryan Tarson Updated 6.15.16, under this code is my pure JS Version
            var wHeight = window.innerHeight;
            //search bar middle alignment
            $("#fullscreen-searchform").css("top", wHeight / 2);
            //reform search bar
            jQuery(window).resize(function () {
                wHeight = window.innerHeight;
                $("#fullscreen-searchform").css("top", wHeight / 2);
            });
            // Search
            $("#search-button").on('click', function () {
                console.log("Open Search, Search Centered");
                $("div.fullscreen-search-overlay").addClass(
                        "fullscreen-search-overlay-show"
                        );
            });
            $("a.fullscreen-close").on('click', function () {
                console.log("Closed Search");
                $("div.fullscreen-search-overlay").removeClass(
                        "fullscreen-search-overlay-show"
                        );
            });
        }
    };

// -------------------------------------------------------------------------- //
// Filter portfolio
// -------------------------------------------------------------------------- // 
    var shuffleme = (function ($) {
        'use strict';
        var $grid = $('#grid'), //locate what we want to sort 
                $filterOptions = $('.portfolio-sorting li'), //locate the filter categories
                $sizer = $grid.find('.shuffle_sizer'), //sizer stores the size of the items

                init = function () {

                    // None of these need to be executed synchronously
                    setTimeout(function () {
                        listen();
                        setupFilters();
                    }, 100);

                    // instantiate the plugin
                    $grid.shuffle({
                        itemSelector: '[class*="col-"]',
                        sizer: $sizer
                    });
                },
                // Set up button clicks
                setupFilters = function () {
                    var $btns = $filterOptions.children();
                    $btns.on('click', function (e) {
                        e.preventDefault();
                        var $this = $(this),
                                isActive = $this.hasClass('active'),
                                group = isActive ? 'all' : $this.data('group');

                        // Hide current label, show current label in title
                        if (!isActive) {
                            $('.portfolio-sorting li a').removeClass('active');
                        }

                        $this.toggleClass('active');

                        // Filter elements
                        $grid.shuffle('shuffle', group);
                    });

                    $btns = null;
                },
                // Re layout shuffle when images load. This is only needed
                // below 768 pixels because the .picture-item height is auto and therefore
                // the height of the picture-item is dependent on the image
                // I recommend using imagesloaded to determine when an image is loaded
                // but that doesn't support IE7
                listen = function () {
                    var debouncedLayout = $.throttle(300, function () {
                        $grid.shuffle('update');
                    });

                    // Get all images inside shuffle
                    $grid.find('img').each(function () {
                        var proxyImage;

                        // Image already loaded
                        if (this.complete && this.naturalWidth !== undefined) {
                            return;
                        }

                        // If none of the checks above matched, simulate loading on detached element.
                        proxyImage = new Image();
                        $(proxyImage).on('load', function () {
                            $(this).off('load');
                            debouncedLayout();
                        });

                        proxyImage.src = this.src;
                    });

                    // Because this method doesn't seem to be perfect.
                    setTimeout(function () {
                        debouncedLayout();
                    }, 500);
                };

        return {
            init: init
        };

    }(jQuery));

    // Initialize
    $(document).ready(function () {
        themeparker.initialize();
        shuffleme.init(); //Filter Portfolio
        $(".se-pre-con").fadeOut("slow"); //Page loader
        $("#gallery").unitegallery(); //Gallery
    });

    // Reset on resize
    $(window).on("resize", function () {
        themeparker.fixedFooter();
    });

}(jQuery));