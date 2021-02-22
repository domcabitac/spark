jQuery(document).ready(function($) {
    $('.post-type-offset-slider .slider').slick({
        dots: true,
        infinite: false,
        variableWidth: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        responsive: [{
                breakpoint: 1500,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    draggable: true,
                    variableWidth: true,
                    infinite: true
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    variableWidth: false,
                    infinite: true
                }
            }
        ]
    });
    $('.left').click(function() {
        $('.post-type-offset-slider .slider').slick('slickPrev');
    });

    // // $('.slide a').hover(function() {
    // //     $('.slide a, .slick-slide div div').css({
    // //         opacity: '0.7'
    // //     });
    // //     $('.post-type-slide div, .slick-slide div').css({
    // //         height: '510px'
    // //     });
    // //     $(this).css({
    // //         opacity: '1'
    // //     });
    // //     $(this).css({
    // //         height: '550px'
    // //     });
    // // }, function() {
    // //     $('.slide div, .slick-slide div div').css({
    // //         opacity: '1'
    // //     });
    // //     $('.slide div, .slick-slide div').css({
    // //         height: '550px'
    // //     });
    // // });
    $('.right').click(function() {
        $('.post-type-offset-slider .slider').slick('slickNext');
    });
    // $('.slider').on('afterChange', function(event, slick, currentSlide) {
    //     if (slick.currentSlide >= slick.slideCount - slick.options.slidesToShow) {
    //         console.log('last slide');
    //     }
    // });
    const initSlider = (selector, options = {}) => {
        const sliderContainers = document.querySelectorAll(selector)

        if (sliderContainers.length) {
            sliderContainers.forEach(container => {
                const slider = container.querySelector('.swiper-container')
                const paging = container.querySelector('.js-paging')
                let prev;
                let next;

                if (paging) {
                    prev = paging.querySelector('.js-paging-prev')
                    next = paging.querySelector('.js-paging-next')
                }

                const swiper = new Swiper(slider, {
                    loop: false,
                    speed: 1000,
                    slidesPerView: 1,
                    spaceBetween: 10,
                    grabCursor: true,
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 30,
                            freeMode: true
                        }
                    },
                    ...options
                })

                next.addEventListener('click', () => {
                    swiper.slideNext(1000);
                })
                prev.addEventListener('click', () => {
                    swiper.slidePrev(1000);
                })

                // Used for animations on slider dragging
                swiper.on('touchMove', ({ el }) => {
                    el.classList.add('dragged')
                })
                swiper.on('touchEnd', ({ el }) => {
                    el.classList.remove('dragged')
                })
            })
        }
    }

    initSlider('.js-slider')


    function getDistance() {
        var scrollTop = (window.pageYOffset !== undefined) ?
            window.pageYOffset :
            (document.documentElement || document.body.parentNode || document.body).scrollTop;

        var elementOffset = document.getElementById('parallax-1').offsetTop - 100;
        var distance = (elementOffset - scrollTop);

        return distance;
    }

    function parallaxScroll() {
        var offsetPercent = .2;
        // Make sure parallax starts offscreen
        var distance = window.innerHeight / offsetPercent;
        var parallax1 = document.getElementById('parallax-1');
        var scrollDistance = getDistance();
        var scroll = 0;

        // Check if in range above or below
        if (scrollDistance <= distance && scrollDistance >= '-' + distance) {
            scroll = scrollDistance;
        }

        parallax1.style.transform = 'translateY(' + (0 - (scroll * offsetPercent)) + 'px)';
    }

    if (document.getElementById('parallax-1')) {
        window.addEventListener("scroll", function() {
            parallaxScroll();
        });


    }

});