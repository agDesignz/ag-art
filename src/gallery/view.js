document.querySelectorAll(".drawing-gallery").forEach((gallery) => {
	const dialog = gallery.querySelector("dialog");
	const img = dialog.querySelector(".drawing-gallery__full");
	const caption = dialog.querySelector(".drawing-gallery__caption");
	let opener = null;

	gallery.addEventListener("click", (e) => {
		const item = e.target.closest(".drawing-gallery__item");
		if (item) {
			opener = item;
			img.src = item.dataset.full;
			img.alt = item.dataset.alt;
			caption.textContent = item.dataset.description;
			caption.hidden = !item.dataset.description;
			dialog.showModal(); // focus trap, Esc, inert background: native
			return;
		}
		// Close on the close button, or on a click on the backdrop
		// (clicks on the backdrop target the <dialog> itself)
		if (e.target.closest(".drawing-gallery__close") || e.target === dialog) {
			dialog.close();
		}
	});

	// Fires for Esc, the close button, and dialog.close(): restore focus
	dialog.addEventListener("close", () => opener?.focus());
});
console.log("JS loaded");
