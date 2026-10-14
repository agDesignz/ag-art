// utils.js
// import apiFetch from "@wordpress/api-fetch";
// import { useState, useEffect } from "@wordpress/element";

// export const useMenuItems = (menuSlug) => {
// 	const [menuItems, setMenuItems] = useState([]);

// 	useEffect(() => {
// 		const fetchMenuItems = async () => {
// 			try {
// 				console.log("Fetching navigation menus...");
// 				const navigations = await apiFetch({
// 					path: "/wp/v2/navigation?per_page=-1&_locale=user",
// 					credentials: "include",
// 				});
// 				console.log("Navigation menus:", navigations);

// 				if (!navigations || navigations.length === 0) {
// 					console.error("No navigation menus found.");
// 					return;
// 				}

// 				// Find the menu with the matching slug
// 				const menu = navigations.find((nav) => nav.slug === menuSlug);
// 				console.log("Selected menu:", menu);

// 				if (menu) {
// 					// Fetch the menu items for the selected menu
// 					const menuItems = await apiFetch({
// 						path: `/wp/v2/navigation/${menu.id}??_fields=items`,
// 						credentials: "include",
// 					});
// 					console.log("Menu items:", menuItems);
// 					setMenuItems(menuItems.items || []);
// 				}
// 			} catch (error) {
// 				console.error("Error fetching menu:", error);
// 			}
// 		};

// 		fetchMenuItems();
// 	}, [menuSlug]);

// 	return menuItems;
// };

// http://localhost:8080/wp-json/wp/v2/pages
