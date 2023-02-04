$(document).ready(function() {

    // document.addEventListener( 'wpcf7invalid', function( event ) {
    //   $('.wpcf7-response-output').addClass('errormessge');
    // }, false );


    $('#dropDown').click(function() {
        $('.drop-down').toggleClass('drop-down--active');
    });

    $("#dropdownmenu").on('click', 'li', function() {
        $("#dropdownmenu li.active").removeClass("active");
        $(this).addClass("active");
    });

    $(".drop-down__item").click(function() {
        document.getElementById("page_no_hidden").value = '1';
    });

    $('#Sendquery').click(function() {
        $(".contact_label span").css("color", "red");
    });

    // $(".inner_three_block .page-numbers").click(function () {
    //   document.getElementById("page_no_hidden").value = '1';
    // });

    var current = location.pathname;
    $('.main-nav li a').each(function() {
        var $this = $(this);
        // if the current path is like this link, make it active
        if ($this.attr('href').indexOf(current) !== -1) {
            $this.addClass('active');
        }
    })

    // flowtype js
    $('body').flowtype({
        minimum: 500,
        maximum: 1200,
        minFont: 0.75,
        maxFont: 16,
        fontRatio: 64
    });

    // slick slider
    $('.slick-carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
    });

    $('.slick-carouseles').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
        cssEase: 'linear',
        responsive: [{
                breakpoint: 1700,
                settings: {
                    slidesToShow: 5,

                }
            },
            {
                breakpoint: 1500,
                settings: {
                    slidesToShow: 4,

                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,

                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,

                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,

                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,

                }
            },

        ]
    });

    $('.slick-carouseles-blog').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: false,
        // centerMode: true,
        // centerPadding: '60px',
        autoplaySpeed: 2000,
        responsive: [

            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,

                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,

                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,

                }
            },

        ]
    });

    //   header sticky
    $(window).scroll(function() {
        if ($(this).scrollTop() > 650) {
            $('header').addClass("sticky");

        } else {
            $('header').removeClass("sticky");
        }
    });

    // $('.blog-slider').slick({
    //   infinite: true,
    //   slidesToShow: 3,
    //   slidesToScroll: 1, 
    //   arrows: false, 
    //   dots: false,
    //   autoplay: true,
    //   autoplaySpeed:3000,
    //   speed: 500,
    //   vertical: true,
    //   cssEase: 'linear',
    //   verticalSwiping: true,
    //   "accessibility": false,
    // });



    $('.life-comapny').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 1000,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });


    $('.slider-nav').slick({
        pauseOnHover: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: false,
        autoplaySpeed: 8000,
        focusOnSelect: true,
        dots: true,
        appendDots: $('.slider-dots-box'),
        dotsClass: 'slider-dots',
    });

    // On before slide change
    $('.slider-nav').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        $('.slider-dots-box button').html('');
    }).trigger('beforeChange');

    // On before slide change
    $('.slider-nav').on('afterChange', function(event, slick, currentSlide) {
        $('.slider-dots-box button').html('');
        $('.slider-dots-box .slick-active button')
            .html(`<svg class="progress-svg" width="40" height="40">
      <g transform="translate(20,20)">
      <circle class="circle-go" r="19" cx="0" cy="0"></circle>
      <text class="circle-tx" x="0" y="4" alignment-baseline="middle" stroke-width="0" text-anchor="middle">${(currentSlide || 0) + 1}</text>
      </g>
      </svg>`);
    }).trigger('afterChange');

    $('.slick-testimonial').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,

    });

    $("body").delegate(".page-numbers", "click", function(e) {
        e.preventDefault();

        var pagination_link = $(this).attr("href");
        var page = "/page/";
        var paged = "?paged=";
        var page_no = 1;
        if (pagination_link.indexOf(page) != -1) {
            var split_link = pagination_link.split("/page/");
            var current_page = split_link[1].split("/");
            page_no = current_page[0];
        }
        if (pagination_link.indexOf(paged) != -1) {
            var split_link = pagination_link.split("?paged=");
            page_no = split_link[1];
        }
        document.getElementById("page_no_hidden").value = page_no;
        var curr_url = window.location.href;
        var url = window.location.origin;
        if (url + '/blog/' == curr_url) {
            pagination_blog(page_no);
        }
        if (url + '/our-work/' == curr_url) {
            filtercategory(page_no);
        }
        $(window).scrollTop(0);
    });


});

// tabing home page
// function openCity(evt, cityName) {
//   var i, tabcontent, tablinks;
//   tabcontent = document.getElementsByClassName("tabcontent");
//   for (i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//   }
//   tablinks = document.getElementsByClassName("tablinks");
//   for (i = 0; i < tablinks.length; i++) {
//     tablinks[i].className = tablinks[i].className.replace(" active", "");
//   }
//   document.getElementById(cityName).style.display = "block";
//   evt.currentTarget.className += " active";
// }

function viewcategory(e) {
    var post_id = e.getAttribute('data-id');
    var url = window.location.origin + '/wp-admin/admin-ajax.php';
    // alert(baseurl);
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            action: "post_by_category",
            post_id: post_id,
        },
        // dataType: "json",
        success: function(data) {
            $("#viewPopup").html(data);
            jQuery("#staticBackdrop").modal('show');
        }
    });
}

function filtercategory() {
    setTimeout(
        function() {
            //$('.drop-down').removeClass('drop-down--active');
            var page_no = document.getElementById("page_no_hidden").value;
            var category_slug = $('#dropdownmenu').find('.active').attr('data-id');
            console.log(category_slug);
            var url = window.location.origin + '/wp-admin/admin-ajax.php';
            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    action: "post_by_filter",
                    cat_name: category_slug,
                    page_no: page_no,
                },
                beforeSend: function() {
                    $('#wait').show();
                },
                success: function(data) {
                    $("#our_work_content").html(data);
                    $('#wait').hide();
                }

                // success: function (data) {
                //   $("#our_work_content").html(data);
                // }
            });

        }, 100);

}

function pagination_blog() {
    var page_no = document.getElementById("page_no_hidden").value;
    var url = window.location.origin + '/wp-admin/admin-ajax.php';
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            action: "pagination_blog",
            page_no: page_no,
        },
        beforeSend: function() {
            $('#wait').show();
        },
        success: function(data) {
            $("#our_blog_content").html(data);
            $('#wait').hide();
        }

    });

}

function blogpostdisplay(e) {

    var post_id = e.getAttribute('data-id');
    var url = window.location.origin + '/wp-admin/admin-ajax.php';
    // alert(baseurl);
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            action: "blog_detail",
            post_id: post_id,
        },
        success: function(data) {
            $("#blogdetail").html(data);
        }
    });
}