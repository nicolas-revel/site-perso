function openNav() {
	document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
	document.getElementById("myNav").style.height = "0%";
}

class Carousel {
	/**
	 *
	 * @param {HTMLElement} element
	 * @param {Object} options
	 * @param {Object} options.slidesToScroll Nombre d'éléments à faire défiler
	 * @param {Object} options.slidesVisible Nombre d'éléments visibles dans un slide
	 */
	constructor(element, options = {}) {
		this.element = element;
		this.options = Object.assign(
			{},
			{
				slidesToScroll: 1,
				slidesVisible: 1,
			},
			options
		);
		let children = [].slice.call(element.children);
		this.currentItem = 0;
		this.root = this.createDivwithClass("carousel");
		this.container = this.createDivwithClass("carousel__container");
		this.root.appendChild(this.container);
		this.element.appendChild(this.root);
		this.items = children.map((child) => {
			let item = this.createDivwithClass("carousel__item");
			item.appendChild(child);
			this.container.appendChild(item);
			return item;
		});
		this.setStyle();
		this.createNavigation();
	}

	setStyle() {
		let ratio = this.items.length / this.options.slidesVisible;
		this.container.style.width = ratio * 100 + "%";
		this.items.forEach(
			(item) =>
				(item.style.width = 100 / this.options.slidesVisible / ratio + "%")
		);
	}

	createNavigation() {
		let nextButton = this.createDivwithClass("carousel__next");
		let prevButton = this.createDivwithClass("carousel__prev");
		this.root.appendChild(nextButton);
		this.root.appendChild(prevButton);
		nextButton.addEventListener("click", this.next.bind(this));
		prevButton.addEventListener("click", this.prev.bind(this));
	}

	next() {
		this.gotoItem(this.currentItem + this.options.slidesToScroll);
	}

	prev() {
		this.gotoItem(this.currentItem - this.options.slidesToScroll);
	}

	/**
	 * Déplace le carousel vers l'élément ciblé
	 * @param {number} index
	 */
	gotoItem(index) {
		if (index < 0) {
			index = this.items.length - this.options.slidesVisible;
		} else if (index >= this.items.length) {
			index = 0;
		}
		let translatex = index * -(100 / this.items.length);
		this.container.style.transform = "translate3d(" + translatex + "%, 0, 0)";
		this.currentItem = index;
	}
	/**
	 *
	 * @param {string} className
	 * @returns {HTMLElement}
	 */
	createDivwithClass(className) {
		let div = document.createElement("div");
		div.setAttribute("class", className);
		return div;
	}
}

document.addEventListener("DOMContentLoaded", () => {
	new Carousel(document.getElementById("projects_screenshots"), {
		slidesVisible: 1,
	});
});
