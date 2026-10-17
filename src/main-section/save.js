import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";

export default function save({ attributes }) {
	const { padding } = attributes;
	const blockProps = useBlockProps.save({
		className: `main-section${padding ? " main-section--padding" : ""}`,
	});
	return (
		<main {...blockProps}>
			<InnerBlocks.Content />
		</main>
	);
}
