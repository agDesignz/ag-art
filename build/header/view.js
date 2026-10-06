/******/ (() => { // webpackBootstrap
/*!****************************!*\
  !*** ./src/header/view.js ***!
  \****************************/
// const toggleButtons = document.querySelectorAll(".site-header__toggle");
// const nav = document.querySelector(".site-header__overlay");
// toggleButtons.forEach((toggleButton) => {
// 	toggleButton.addEventListener("click", () => {
// 		nav.classList.toggle("site-header__overlay--show");
// 	});
// });

class StickyHeader {
  constructor() {
    this.root = document.querySelector(".site-header");
    this.wrapper = document.querySelector(".site-header__wrapper");
    this.overlay = document.querySelector(".site-header__overlay");
    this.options = {
      root: null,
      rootMargin: "120px",
      threshold: 1
    };
    this.headerObserver = new IntersectionObserver(this.stick.bind(this), this.options);
    this.events();
  }
  events() {
    this.headerObserver.observe(this.root);
    this.wrapper.addEventListener("click", e => {
      console.log("clicked");
      e.target.classList.contains("site-header__toggle") && this.overlay.classList.toggle("site-header__overlay--show");
    });
  }
  stick(entries) {
    const [entry] = entries;
    if (!entry.isIntersecting) {
      this.wrapper.classList.add("site-header__wrapper--fixed");
    } else {
      this.wrapper.classList.remove("site-header__wrapper--fixed");
    }
  }
}
new StickyHeader();
/******/ })()
;
//# sourceMappingURL=view.js.map