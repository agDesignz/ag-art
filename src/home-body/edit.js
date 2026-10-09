import { __ } from "@wordpress/i18n";
import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";
const TEMPLATE = [
	["agart-blocks/home-title"],
	["agart-blocks/home-grid"],
	["agart-blocks/home-content"],
];

export default function Edit({ attributes }) {
	const blockProps = useBlockProps({ className: attributes.customClass });

	return (
		<section {...blockProps}>
			<InnerBlocks
				allowedBlocks={[
					"agart-blocks/home-title",
					"agart-blocks/home-grid",
					"agart-blocks/home-content",
				]}
				template={TEMPLATE}
				templateLock="insert"
			/>
		</section>
	);
}
