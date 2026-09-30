import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";
import { useEffect } from "react";

export default function save(props) {
	// useEffect(() => {
	// 	console.log("props:", props);
	// }, []);
	const showProps = () => console.log("props", props);
	const blockProps = useBlockProps.save({
		className: props.attributes.className,
	});
	return (
		<header {...blockProps}>
			<div className="site-header__brand">
				<a className="site-header__logo u-logo-height" href="index.html">
					<h3>{props}</h3>
				</a>
			</div>
			<nav className="nav">
				<input type="checkbox" className="nav__input" id="nav-toggle" />
				<label for="nav-toggle" className="nav__icon">
					<span>&nbsp;</span>
				</label>
				<div className="nav__display">
					<ul className="nav__menu">
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
					<div className="nav__social-links">
						<div className="socials">
							<a
								href="#"
								className="socials__link socials__link--facebook"
								aria-label="External link to the artist's Facebook page"
							></a>
							<a
								href="#"
								className="socials__link socials__link--insta"
								aria-label="External link to the artist's Instagram page"
							></a>
						</div>
					</div>
				</div>
			</nav>
		</header>
	);
}
