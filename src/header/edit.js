import { __ } from "@wordpress/i18n";
import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";
import "./editor.scss";
import { ReactComponent as LogoIcon } from "../../assets/icons/logo.svg";
const TEMPLATE = [["core/navigation", { overlayMenu: "never" }]];

export default function Edit() {
	const blockProps = useBlockProps({ className: "site-header" });
	return (
		<header {...blockProps}>
			<a className="site-header__logo" href="/" aria-label="Home">
				<LogoIcon />
			</a>

			{/* Navigation Menu */}
			<div className="site-header__menu">
				<InnerBlocks
					template={TEMPLATE}
					allowedBlocks={["core/navigation"]}
					templateLock="insert"
				/>
			</div>
			<div className="site-header__toggle">H</div>
		</header>
	);
}
