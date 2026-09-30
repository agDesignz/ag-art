/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";
/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from "@wordpress/block-editor";
/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit() {
	const blockProps = useBlockProps({ className: "site-header" });
	return (
		<header {...blockProps}>
			<div class="site-header__brand">
				<a class="site-header__logo u-logo-height" href="index.html">
					{" "}
					Logo Here{" "}
				</a>
			</div>
			<nav class="nav">
				<input type="checkbox" class="nav__input" id="nav-toggle" />
				<label for="nav-toggle" class="nav__icon">
					<span>&nbsp;</span>
				</label>
				<div class="nav__display">
					<ul class="nav__menu">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						<li>
							<a href="work.html">Work</a>
						</li>
						<li>
							<a href="contact.html">Contact</a>
						</li>
					</ul>
					<div class="nav__social-links">
						<div class="socials">
							<a
								href="#"
								class="socials__link socials__link--facebook"
								aria-label="External link to the artist's Facebook page"
							></a>
							<a
								href="#"
								class="socials__link socials__link--insta"
								aria-label="External link to the artist's Instagram page"
							></a>
						</div>
					</div>
				</div>
			</nav>
		</header>
	);
}
