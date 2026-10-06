class StickyHeader {
	constructor() {
		this.navRoot = document.querySelector(".site-header");
		this.navBar = document.querySelector(".site-header__wrapper");
		this.options = {
			root: null,
			rootMargin: "120px",
			threshold: 1,
		};
		this.navObserver = new IntersectionObserver(
			this.stick.bind(this),
			this.options,
		);
		this.events();
	}

	events() {
		this.navObserver.observe(this.navRoot);
	}

	stick(entries) {
		const [entry] = entries;
		if (!entry.isIntersecting) {
			this.navBar.classList.add("site-header__wrapper--fixed");
		} else {
			this.navBar.classList.remove("site-header__wrapper--fixed");
		}
	}
}

export default StickyHeader;
