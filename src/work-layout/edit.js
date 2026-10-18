import { useBlockProps, InnerBlocks, RichText } from "@wordpress/block-editor";
import "./style.scss";

export default function Edit({ attributes, setAttributes }) {
	const { title, textContent } = attributes;
	const blockProps = useBlockProps({ className: "work-layout" });
	return (
		<section {...blockProps}>
			<div className="work-layout__content">
				<RichText
					tagName="h1"
					className="work-layout__title heading-1"
					value={title}
					onChange={(title) => setAttributes({ title })}
					placeholder={"Enter Title"}
				/>
				<RichText
					tagName="p"
					className="work-layout__text"
					value={textContent}
					onChange={(textContent) => setAttributes({ textContent })}
					placeholder={"Enter paragraph content"}
				/>
			</div>
			<div className="work-layout__gallery-area">
				<InnerBlocks />
			</div>
		</section>
	);
}
