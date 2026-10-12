import { RichText, useBlockProps } from "@wordpress/block-editor";

export default function save({ attributes }) {
	const blockProps = useBlockProps.save({ className: "site-footer" });
	const today = new Date();
	const thisYear = today.getFullYear();
	return (
		<footer {...blockProps}>
			<section className="site-footer__content">
				<small>&#169; {thisYear}. </small>
				<RichText.Content value={attributes.content} tagName="small" />
			</section>
		</footer>
	);
}
