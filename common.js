// 需先使用這段程式碼
$(window)
  .on("resize", function () {
    if ($(this).width() > 1024) {
      if (window.device == "mobile") {
        location.reload();
      }
      window.device = "desktop";
    } else {
      if (window.device == "desktop") {
        location.reload();
      }
      window.device = "mobile";
    }
  })
  .trigger("resize");

const lenis = new Lenis({
  duration: 1.2, // 滾動動畫持續時間
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // 滾動的緩動函數
  orientation: 'vertical', // 垂直滾動
  smoothWheel: true, // 啟用滑鼠滾輪平滑
  wheelMultiplier: 1, // 滾輪靈敏度
  smoothTouch: false, // 觸控裝置不使用平滑效果
  touchMultiplier: 2 // 觸控靈敏度
});

lenis.on('scroll', ScrollTrigger.update);
gsap.ticker.add((time) => {
  lenis.raf(time * 1000);
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);