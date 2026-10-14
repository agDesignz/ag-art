import { useEntityRecords } from "@wordpress/core-data";
import { SelectControl } from "@wordpress/components";
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import ServerSideRender from "@wordpress/server-side-render";
import { Disabled, Placeholder } from "@wordpress/components";

const EmptyNav = () => (
	<Placeholder
		label="Navigation"
		instructions="Choose a menu in the block settings."
	/>
);

export default function Edit({ attributes, setAttributes }) {
	const { records } = useEntityRecords("postType", "wp_navigation", {
		per_page: -1,
	});
	return (
		<>
			<InspectorControls>
				<SelectControl
					label="Menu"
					value={attributes.menuRef}
					options={[
						{ label: "Select…", value: 0 },
						...(records ?? []).map((m) => ({
							label: m.title.rendered,
							value: m.id,
						})),
					]}
					onChange={(v) => setAttributes({ menuRef: Number(v) })}
				/>
			</InspectorControls>
			<div {...useBlockProps()}>
				<Disabled>
					<ServerSideRender
						block="agart-blocks/ag-nav"
						attributes={attributes}
						EmptyResponsePlaceholder={EmptyNav}
					/>
				</Disabled>
			</div>
		</>
	);
}
