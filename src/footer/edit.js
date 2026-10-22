import { __ } from "@wordpress/i18n";
import { RichText, useBlockProps } from "@wordpress/block-editor";

export default function Edit({ attributes, setAttributes }) {
	const { content } = attributes;
	const blockProps = useBlockProps({ className: "site-footer" });
	const today = new Date();
	const thisYear = today.getFullYear();
	return (
		<footer {...blockProps}>
			<section className="site-footer__content">
				<small>
					&#169; {thisYear}. Designed by the Artist.{" "}
					<a href="https://alexgeer.dev">agDesignz</a>
				</small>
			</section>
		</footer>
	);
}
