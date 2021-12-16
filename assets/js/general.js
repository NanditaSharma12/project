const numbers = new Swiper(".numbers", { direction: "vertical", speed: 1000, navigation: { nextEl: ".slider-next", prevEl: ".slider-previous" } });
const texts = new Swiper(".details", { direction: "vertical", speed: 1000, navigation: { nextEl: ".slider-next", prevEl: ".slider-previous" }, coverflowEffect: { rotate: 30, slideShadows: !1 } });
const images = new Swiper(".slide-images", { direction: "vertical", speed: 1000, navigation: { nextEl: ".slider-next", prevEl: ".slider-previous" } });
var changed = !1;
var changed2 = !0;
$(".slider-next").on("click", function () {
    if (changed === !0) {
        changed = !1;
        changed2 = !0;
        numbers.slideTo(0);
        texts.slideTo(0);
        images.slideTo(0);
    }
    if (numbers.isEnd) {
        changed = !0;
    }
});
$(".slider-previous").on("click", function () {
    if (changed2 === !0) {
        changed2 = !1;
        changed = !0;
        numbers.slideTo(3);
        texts.slideTo(3);
        images.slideTo(3);
    }
    if (numbers.isBeginning) changed2 = !0;
});
