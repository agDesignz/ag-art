import { RichText, useBlockProps } from "@wordpress/block-editor";

export default function save({ attributes }) {
	const blockProps = useBlockProps.save({ className: "site-footer" });
	return (
		<footer {...blockProps}>
			<RichText.Content value={attributes.content} tagName="small" />
		</footer>
	);
}
