import { useBlockProps } from "@wordpress/block-editor";
import { useSelect } from "@wordpress/data";
import { store as coreStore } from "@wordpress/core-data";
import { Spinner } from "@wordpress/components";

export default function Edit() {
	const { drawings, isLoading } = useSelect((select) => {
		const query = { per_page: -1, status: "publish", _embed: true };
		return {
			drawings: select(coreStore).getEntityRecords(
				"postType",
				"drawing",
				query,
			),
			isLoading: select(coreStore).isResolving("getEntityRecords", [
				"postType",
				"drawing",
				query,
			]),
		};
	}, []);

	const blockProps = useBlockProps({ className: "drawing-gallery" });

	if (isLoading || !drawings) {
		return (
			<div {...blockProps}>
				<Spinner />
			</div>
		);
	}

	return (
		<div {...blockProps}>
			{drawings.map((p) => {
				const media = p._embedded?.["wp:featuredmedia"]?.[0];
				if (!media) return null;
				return (
					<div key={p.id} className="drawing-gallery__item">
						<img
							className="drawing-gallery__img"
							src={
								media.media_details?.sizes?.medium_large?.source_url ??
								media.source_url
							}
							alt={media.alt_text}
						/>
					</div>
				);
			})}
		</div>
	);
}
