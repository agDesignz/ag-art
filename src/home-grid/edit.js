import { __, sprintf } from "@wordpress/i18n";
import {
	useBlockProps,
	MediaUpload,
	MediaUploadCheck,
} from "@wordpress/block-editor";
import { Button } from "@wordpress/components";
import { useSelect } from "@wordpress/data";
import { store as coreStore } from "@wordpress/core-data";
// import "./editor.scss";

const SLOT_COUNT = 4;

function ImageSlot({ index, id, onSelect, onRemove }) {
	// Resolve the attachment ID to a media object (cached & reactive)
	const media = useSelect(
		(select) => (id ? select(coreStore).getMedia(id) : null),
		[id],
	);

	const src =
		media?.media_details?.sizes?.large?.source_url ?? media?.source_url;

	return (
		<figure className={`home-grid__image home-grid__image--${index + 1}`}>
			<MediaUploadCheck>
				<MediaUpload
					onSelect={(m) => onSelect(index, m.id)}
					allowedTypes={["image"]}
					value={id}
					render={({ open }) =>
						src ? (
							<>
								<img src={src} alt={media?.alt_text || ""} />
								<div className="home-grid__controls">
									<Button variant="secondary" onClick={open}>
										{__("Replace", "my-theme")}
									</Button>
									<Button
										variant="tertiary"
										isDestructive
										onClick={() => onRemove(index)}
									>
										{__("Remove", "my-theme")}
									</Button>
								</div>
							</>
						) : (
							<Button variant="primary" onClick={open}>
								{sprintf(__("Select image %d", "my-theme"), index + 1)}
							</Button>
						)
					}
				/>
			</MediaUploadCheck>
		</figure>
	);
}

export default function Edit({ attributes, setAttributes }) {
	// Guard against a saved array that's shorter than expected
	const blockProps = useBlockProps({ className: "home-grid" });

	const images = Array.from(
		{ length: SLOT_COUNT },
		(_, i) => attributes.images?.[i] ?? { id: 0 },
	);

	const setSlot = (index, id) => {
		const next = [...images];
		next[index] = { id };
		setAttributes({ images: next });
	};

	return (
		<div {...blockProps}>
			{images.map((img, i) => (
				<ImageSlot
					key={i}
					index={i}
					id={img.id}
					onSelect={setSlot}
					onRemove={(idx) => setSlot(idx, 0)}
				/>
			))}
		</div>
	);
}
