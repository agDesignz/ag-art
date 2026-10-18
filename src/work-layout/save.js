import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";

export default function save({ attributes }) {
	const { title, textContent } = attributes;
	const blockProps = useBlockProps.save({ className: "work-layout" });
	return (
		<section {...blockProps}>
			<div className="work-layout__content">
				<h1 className="work-layout__title heading-1">{title}</h1>
				<p className="work-layout__text">{textContent}</p>
			</div>
			<div className="work-layout__gallery-area">
				<InnerBlocks.Content />
			</div>
		</section>
	);
}
