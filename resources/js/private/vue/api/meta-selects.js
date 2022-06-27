export default {
	getArtThemes () {
		return axios.get(`/api/meta/art-themes`);
	},
	getBrands () {
		return axios.get(`/api/meta/brands`);
	},
	getCategories () {
		return axios.get(`/api/meta/categories`);
	},
	getCharacters () {
		return axios.get(`/api/meta/characters`);
	},
	getConditions () {
		return axios.get(`/api/meta/conditions`);
	},
	getCultures () {
		return axios.get(`/api/meta/cultures`);
	},
	getDecorStyles () {
		return axios.get(`/api/meta/decor-styles`);
	},
	getEras () {
		return axios.get(`/api/meta/eras`);
	},
	getFranchises () {
		return axios.get(`/api/meta/franchises`);
	},
	getMaterials() {
		return axios.get(`/api/meta/materials`);
	},
	getOccasions () {
		return axios.get(`/api/meta/occasions`);
	},
	getShapes () {
		return axios.get(`/api/meta/shapes`);
	},
	getManufacturerIdTypes () {
		return axios.get(`/api/meta/manufacturer-id-types`);
	}
}