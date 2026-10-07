import { __ } from "@wordpress/i18n";
import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";
import "./editor.scss";
import { ReactComponent as LogoIcon } from "../../assets/icons/logo.svg";
const TEMPLATE = [["core/navigation", { overlayMenu: "never" }]];

export default function Edit() {
	const blockProps = useBlockProps({ className: "site-header" });
	return (
		<header {...blockProps}>
			<div className="site-header__wrapper">
				<a className="site-header__logo" href="/" aria-label="Home">
					<LogoIcon />
				</a>

				{/* Navigation Menu */}
				<div className="site-header__overlay">
					<div className="site-header__toggle site-header__toggle--close">
						C
					</div>
					<div className="site-header__nav-container">
						<InnerBlocks
							template={TEMPLATE}
							allowedBlocks={["core/navigation"]}
							templateLock="insert"
							className="site-header__nav-container"
						/>
					</div>
				</div>
				<div className="site-header__toggle site-header__toggle--open">H</div>
			</div>
		</header>
	);
}
