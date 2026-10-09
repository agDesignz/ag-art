import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";

export default function save({ attributes }) {
	const blockProps = useBlockProps.save({ className: attributes.customClass });
	return (
		<section {...blockProps}>
			<InnerBlocks.Content />
		</section>
	);
}
