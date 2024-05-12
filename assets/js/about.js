window.addEventListener("load", function () {

    gsap.registerPlugin(ScrollTrigger);

});

const wrapper = document.querySelector('#wrapper');
if (wrapper) {
    gsap.registerPlugin(ScrollTrigger); // npm/yarnの際に必要
    const panels = gsap.utils.toArray('.panel');
    const wrapperWidth = wrapper.offsetWidth;
    /**
     * 横スクロール開始
     */
    gsap.to(panels, {
        xPercent: -100 * (panels.length - 1), // transformX
        ease: "none", // easingの設定
        scrollTrigger: { // scrollTrigger
            trigger: wrapper, // アニメーションの対象となる要素
            pin: true, // 要素を固定する
            scrub: 1, // スクロールとアニメーションを同期させる。数値で秒数の設定に
            snap: { // スナップスクロールにする
                snapTo: 1 / (panels.length - 1), // スナップで移動させる位置
                duration: {min: .4, max: .6}, // スナップで移動する際の遅延時間
                ease: "none" // easing
            },
            end: () => "+=" + wrapperWidth // アニメーションの終了タイミング
        }
    })
}
//  $(document).ready(function(){
//      $('#wrapper').slick({
//          infinite: true,
//          slidesToShow: 3,
//         slidesToScroll: 1,
//         autoplay: true
//      });
//   });


const listWrapperEl = document.querySelector('.side-scroll-list-wrapper');
const listEl = document.querySelector('.side-scroll-list');

if(listEl) {
    gsap.to(listEl, {
        x: () => -(listEl.clientWidth - listWrapperEl.clientWidth),
        ease: 'none',
        scrollTrigger: {
            trigger: '.side-scroll',
            start: 'top top', // 要素の上端（top）が、ビューポートの上端（top）にきた時
            end: () => `+=${listEl.clientWidth - listWrapperEl.clientWidth}`,
            scrub: true,
            pin: true,
            anticipatePin: 1,
            invalidateOnRefresh: true,
        },
    });
}

  