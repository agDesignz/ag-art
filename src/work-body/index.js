import { registerBlockType } from "@wordpress/blocks";

import "./style.scss";
import metadata from "./block.json";
import save from "./save";
import Edit from "./edit";

registerBlockType(metadata.name, {
	edit: Edit,
	save,
});
