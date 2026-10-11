import { __ } from "@wordpress/i18n";
import { RichText, useBlockProps } from "@wordpress/block-editor";

export default function Edit({ attributes, setAttributes }) {
	const { content } = attributes;
	const blockProps = useBlockProps({ className: "site-footer" });
	return (
		<footer {...blockProps}>
			{/* <small className="site-footer__small-text">
				Site designed by the artist. Alex Geer Dev
			</small> */}
			<RichText
				tagName="small"
				value={content}
				onChange={(content) => setAttributes({ content })}
				placeholder={__("Enter footer content", "alexgeerart")}
			/>
		</footer>
	);
}
