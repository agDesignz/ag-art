import { __ } from "@wordpress/i18n";
import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";
import "./style.scss";
import { ReactComponent as LogoIcon } from "../../assets/icons/logo.svg";
import { ReactComponent as HamburgerIcon } from "../../assets/icons/house-hamburger.svg";
import { ReactComponent as CloseIcon } from "../../assets/icons/house-close.svg";
const TEMPLATE = [["core/navigation", { overlayMenu: "never" }]];

export default function Edit() {
	const blockProps = useBlockProps({ className: "site-header" });
	return (
		<header {...blockProps}>
			<div className="site-header__wrapper">
				<a
					className="site-header__icon site-header__icon--logo"
					href="/"
					aria-label="Home"
				>
					<LogoIcon />
				</a>

				{/* Navigation Menu */}
				<div className="site-header__overlay">
					<button className="site-header__icon site-header__icon--close site-header__icon--toggle">
						<CloseIcon />
					</button>
					<div className="site-header__nav-container">
						<InnerBlocks
							template={TEMPLATE}
							allowedBlocks={["core/navigation"]}
							templateLock="insert"
							className="site-header__nav-container"
						/>
					</div>
				</div>
				<button className="site-header__icon site-header__icon--open site-header__icon--toggle">
					<HamburgerIcon />
				</button>
			</div>
		</header>
	);
}
