import { __ } from "@wordpress/i18n";
import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";

export default function Edit({ attributes }) {
	const blockProps = useBlockProps({ className: attributes.customClass });

	return (
		<main {...blockProps}>
			<InnerBlocks />
		</main>
	);
}
