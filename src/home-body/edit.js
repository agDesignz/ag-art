import { __ } from "@wordpress/i18n";
import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";
const TEMPLATE = [["agart-blocks/main-title"], ["agart-blocks/home-grid"]];

export default function Edit({ attributes }) {
	const blockProps = useBlockProps();

	return (
		<section {...blockProps}>
			<InnerBlocks
				allowedBlocks={["agart-blocks/main-title", "agart-blocks/home-grid"]}
				template={TEMPLATE}
				templateLock="insert"
			/>
		</section>
	);
}
