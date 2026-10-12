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
				<small>&#169; {thisYear}. </small>
				<RichText
					tagName="small"
					value={content}
					onChange={(content) => setAttributes({ content })}
					placeholder={__("Enter footer content", "alexgeerart")}
				/>
			</section>
		</footer>
	);
}
