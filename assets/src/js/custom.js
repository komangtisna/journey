var slider = tns({
    container: ".carousel-slider",
    mouseDrag: true,
    lazyload: true,
    gutter: 15,
    navPosition: "bottom",
    responsive: {
        "558": {
            items: 1,
            controls: true,
            edgePadding: 0
        },
        "768": {
            items: 2,
            edgePadding: 50
        },
        "992": {
            items: 3,
            edgePadding: 100
        }
    },
});

var wow = new WOW(
    {
        boxClass:     'wow',      
        animateClass: 'animated'
    }
);
wow.init();

function scroll_to() {
    document.getElementById('scroll_to_me').scrollIntoView({
        behavior: 'smooth'
    });
}