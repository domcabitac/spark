jQuery(document).ready(function($) {

    var allPanels = $('.accordion > dd').hide();

    $('textarea').on('input', function() {
        $(this).outerHeight(50).outerHeight(this.scrollHeight);
    });

    $('.accordion > dt > a').click(function() {
        allPanels.slideUp();
        $(this).parent().next().slideDown();
        // $('dt').css('border-radius', '10px 10px 0 0');
        return false;
    });
    $(".hamburger").click(function() {
        $(this).toggleClass("is-active");
        $("#mobile_menu, #mobile").toggleClass("open");
    });
    $("#mobile_menu a").click(function() {
        $("#mobile_menu, #mobile").removeClass("open");
        $(".hamburger").removeClass("is-active");
    });
    // $('.accordion').on("click", function(event) {
    //     $('.feature-arrow').toggleClass('rotate');
    //     $('.feature-arrow').toggleClass('rotate2');
    // });
    var vid = $('video');
    var vid_w_orig = 1280;
    var vid_h_orig = 720;

    // re-scale image when viewport resizes
    $(window).resize(function() {

        // get the parent element size
        var container_w = vid.parent().width();
        var container_h = vid.parent().height();

        // use largest scale factor of horizontal/vertical
        var scale_w = container_w / vid_w_orig;
        var scale_h = container_h / vid_h_orig;
        var scale = scale_w > scale_h ? scale_w : scale_h;

        // scale the video
        vid.width(scale * vid_w_orig);
        vid.height(scale * vid_h_orig);

    });

    var popup = document.getElementById('popup-wrapper');
    var btn = document.getElementById("popup-btn");
    var span = document.getElementById("close");

    if (btn) {
        btn.onclick = function() {
            popup.classList.add('show'); 
        }
        span.onclick = function() {
            popup.classList.remove('show');
        }

        window.onclick = function(event) {
            if (event.target == popup) {
                popup.classList.remove('show');
            }
        }
    }

    var $temp = $("<input>");
    var $url = $(location).attr('href');

    $('.share').on('click', function() {
        $("body").append($temp);
        $temp.val($url).select();
        document.execCommand("copy");
        $temp.remove();
    })

    // // trigger re-scale on pageload
    // $(window).trigger('resize');
    // SmoothScroll({ stepSize: 75 });
    // let clientX = -100;
    // let clientY = -100;
    // let lastX = -100;
    // let lastY = -100;
    // const cursor = document.querySelector('.cursor')
    // const section = document.querySelector('.slider')

    // // Show/hide the cursor when it is over the section
    // if (section) {
    //     section.addEventListener('mouseenter', () => {
    //         cursor.classList.add('visible')
    //     })

    //     section.addEventListener('mouseleave', () => {
    //         cursor.classList.remove('visible')
    //     })
    // }

    // // function for linear interpolation of values
    // const lerp = (a, b, n) => {
    //     return (1 - n) * a + n * b;
    // };

    // const initCursor = () => {
    //     if (!cursor) return

    //     // add listener to track the current mouse position
    //     document.addEventListener('mousemove', e => {
    //         clientX = e.clientX;
    //         clientY = e.clientY;
    //     });

    //     // transform the cursor to the current mouse position
    //     // use requestAnimationFrame() for smooth performance
    //     const render = () => {
    //         // lesser delta, greater the delay that the custom cursor follows the real cursor
    //         const delta = 0.1;
    //         lastX = lerp(lastX, clientX, delta);
    //         lastY = lerp(lastY, clientY, delta);

    //         cursor.style.transform = `translate(${lastX}px, ${lastY}px)`;

    //         requestAnimationFrame(render);
    //     };

    //     requestAnimationFrame(render);
    // };

    // initCursor();
    var cursor = {
        delay: 8,
        _x: 0,
        _y: 0,
        endX: (window.innerWidth / 2),
        endY: (window.innerHeight / 2),
        cursorVisible: true,
        cursorEnlarged: false,
        $dot: document.querySelector('.cursor-dot'),
        $outline: document.querySelector('.cursor-dot-outline'),

        init: function() {
            // Set up element sizes
            this.dotSize = this.$dot.offsetWidth;
            this.outlineSize = this.$outline.offsetWidth;

            this.setupEventListeners();
            this.animateDotOutline();
        },

        //     updateCursor: function(e) {
        //         var self = this;

        //         console.log(e)

        //         // Show the cursor
        //         self.cursorVisible = true;
        //         self.toggleCursorVisibility();

        //         // Position the dot
        //         self.endX = e.pageX;
        //         self.endY = e.pageY;
        //         self.$dot.style.top = self.endY + 'px';
        //         self.$dot.style.left = self.endX + 'px';
        //     },

        setupEventListeners: function() {
            var self = this;

            // Anchor hovering
            document.querySelectorAll('a').forEach(function(el) {
                el.addEventListener('mouseover', function() {
                    self.cursorEnlarged = true;
                    self.toggleCursorSize();
                });
                el.addEventListener('mouseout', function() {
                    self.cursorEnlarged = false;
                    self.toggleCursorSize();
                });
            });

            // Click events
            document.addEventListener('mousedown', function() {
                self.cursorEnlarged = true;
                self.toggleCursorSize();
            });
            document.addEventListener('mouseup', function() {
                self.cursorEnlarged = false;
                self.toggleCursorSize();
            });


            document.addEventListener('mousemove', function(e) {
                // Show the cursor
                self.cursorVisible = true;
                self.toggleCursorVisibility();

                // Position the dot
                self.endX = e.pageX;
                self.endY = e.pageY;
                self.$dot.style.top = self.endY + 'px';
                self.$dot.style.left = self.endX + 'px';
            });

            // Hide/show cursor
            document.addEventListener('mouseenter', function(e) {
                self.cursorVisible = true;
                self.toggleCursorVisibility();
                self.$dot.style.opacity = 1;
                self.$outline.style.opacity = 1;
            });

            document.addEventListener('mouseleave', function(e) {
                self.cursorVisible = true;
                self.toggleCursorVisibility();
                self.$dot.style.opacity = 0;
                self.$outline.style.opacity = 0;
            });
        },

        animateDotOutline: function() {
            var self = this;

            self._x += (self.endX - self._x) / self.delay;
            self._y += (self.endY - self._y) / self.delay;
            self.$outline.style.top = self._y + 'px';
            self.$outline.style.left = self._x + 'px';

            requestAnimationFrame(this.animateDotOutline.bind(self));
        },

        toggleCursorSize: function() {
            var self = this;

            if (self.cursorEnlarged) {
                self.$dot.style.transform = 'translate(-50%, -50%) scale(0.75)';
                self.$outline.style.transform = 'translate(-50%, -50%) scale(1.5)';
            } else {
                self.$dot.style.transform = 'translate(-50%, -50%) scale(1)';
                self.$outline.style.transform = 'translate(-50%, -50%) scale(1)';
            }
        },

        toggleCursorVisibility: function() {
            var self = this;

            if (self.cursorVisible) {
                self.$dot.style.opacity = 1;
                self.$outline.style.opacity = 1;
            } else {
                self.$dot.style.opacity = 0;
                self.$outline.style.opacity = 0;
            }
        }
    }

    // cursor.init();

    // $('body').mouseenter(function() {
    //     cursor.init();
    // });
    $(document).on('mousemove', function(e) {
        $('.cursor-dot').css({
            left: e.clientX,
            top: e.clientY,
            opacity: '1',
        });
        $('.cursor-dot-outline').css({
            left: e.clientX,
            top: e.clientY,
            opacity: '1',
        });
    });
    document.querySelectorAll('a').forEach(function(el) {
        el.addEventListener('mouseover', function() {
            $('.cursor-dot-outline').css({
                width: '60px',
                height: '60px'
            });
        });
        el.addEventListener('mouseout', function() {
            $('.cursor-dot-outline').css({
                width: '40px',
                height: '40px'
            });
        });
    });

    // Click events

    document.addEventListener('mousedown', function() {
        $('.cursor-dot-outline').css({
            width: '60px',
            height: '60px'
        });
    });
    document.addEventListener('mouseup', function() {
        $('.cursor-dot-outline').css({
            width: '40px',
            height: '40px'
        });
    });

    $(window).on('scroll', function(e) {

    });

})(jQuery);