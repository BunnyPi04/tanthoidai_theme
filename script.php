<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="./assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="./assets/js/jquery.bxslider.min.js"></script>
<script src="./assets/js/camera.min.js"></script>
<script src="./assets/js/jquery.easing.1.3.js"></script>
<script>
    $("#banner-slider").camera({
        height: "40%",
        pagination: false,
        time: 2000
    })
</script>
<script>
    $("#right-slider").bxSlider({
        mode: 'vertical',
        slideMargin: 10,
        pager: false,
        controls: false,
        minSlides: 4,
        maxSlides: 4,
        auto: true
    });
    $("#sidebar-contact-form").on("submit", function () {
        $.post("/quick-contact", $(this).serialize(), function (data) {
            if (data === "True") {
                alert("GỬI THÔNG TIN THÀNH CÔNG.\n Chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất");
                $("#sidebar-contact-form").trigger("reset");
                $("body").removeClass("open-form");
            } else {
                alert("Hệ thống website đang bận. Vui lòng thử lại sau.");
            }
        });
        return false;
    })
</script>
<script type="text/javascript" src="./assets/js/addthis_widget.js" async="async"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 951784520;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
             src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/951784520/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
<script>
    "use strict";

    !function () {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
            if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
            t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
                t.factory = function (e) {
                    return function () {
                        var n = Array.prototype.slice.call(arguments);
                        return n.unshift(e), t.push(n), t;
                    };
                }, t.methods.forEach(function (e) {
                t[e] = t.factory(e);
            }), t.load = function (t) {
                var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(o, i);
            };
        }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('7ebs7d4yd5zn');
</script>
<!--    not done-->
<!--    --><?php //wp_footer(); ?>
