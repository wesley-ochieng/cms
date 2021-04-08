$(document).ready(function () {
    AOS.init(),
        (function () {
            if ("requestAnimationFrame" in window && !/Mobile|Android/.test(navigator.userAgent)) {
                var t = [];
                if (
                    ($("[data-bs-parallax-bg]").each(function () {
                        var e = $(this),
                            r = $("<div>");
                        r.css({ backgroundImage: e.css("background-image"), backgroundSize: "cover", backgroundPosition: "center", position: "absolute", height: "200%", width: "100%", top: 0, left: 0, zIndex: -100 }),
                            r.appendTo(e),
                            t.push(r[0]),
                            e.css({ position: "relative", background: "transparent", overflow: "hidden" });
                    }),
                    t.length)
                ) {
                    var e,
                        r = [];
                    $(window).on("scroll resize", i), i();
                }
            }
            function i() {
                r.length = 0;
                for (var i = 0; i < t.length; i++) {
                    var o = t[i].parentNode.getBoundingClientRect();
                    o.bottom > 0 && o.top < window.innerHeight && r.push({ rect: o, node: t[i] });
                }
                cancelAnimationFrame(e), r.length && (e = requestAnimationFrame(n));
            }
            function n() {
                for (var t = 0; t < r.length; t++) {
                    var e = r[t].rect,
                        i = r[t].node,
                        n = Math.max(e.bottom, 0) / (window.innerHeight + e.height);
                    i.style.transform = "translate3d(0, " + -50 * n + "%, 0)";
                }
            }
        })();
})