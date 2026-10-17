import { __ } from "@wordpress/i18n";
import {
	InnerBlocks,
	useBlockProps,
	InspectorControls,
} from "@wordpress/block-editor";
import { Panel, PanelBody, ToggleControl } from "@wordpress/components";
import "./style.scss";

export default function Edit({ attributes, setAttributes }) {
	const { padding } = attributes;
	const blockProps = useBlockProps({
		className: `main-section${padding ? " main-section--padding" : ""}`,
	});

	return (
		<>
			<InspectorControls>
				<Panel title="Full-Width">
					<ToggleControl
						label="Side Padding"
						checked={padding}
						onChange={() => setAttributes({ padding: !padding })}
					></ToggleControl>
				</Panel>
			</InspectorControls>
			<main {...blockProps}>
				<InnerBlocks />
			</main>
		</>
	);
}
