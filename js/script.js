
window.onload = function () {
  const parent = document.querySelector(".catalog-card");
  function createProducts() {

    console.log(parent);

    let count = 0;

    const createCard = (arr) => {
      arr.forEach((item) => {
        const card = `
      <div id="card_${count}" class="catalog-card__item">
					<img src="${item.img}" class="catalog-card__img">
					<div class="catalog-card__content">
						<p class="catalog-card__info">
							${item.name}${count}
						</p>
						<span class="catalog-card__price">${item.price} р</span>	
					</div>
					<button class="catalog-card__btn">Купить${count}</button>					
				</div> `;
        count++;
        parent.innerHTML += card;
      });
    };
    createCard(data.product);
  }


  const modal = document.querySelector(".modal");
  parent.addEventListener("click", (e) => {
    e.preventDefault();
    if (e.target.tagName == "BUTTON") {
      const elem = e.target.parentElement;

      modal.style.display = "block";
      let productName = elem.querySelector(".catalog-card__info");
      let product = document.querySelector(".product");
      product.setAttribute("value", productName);
      console.log(elem);
      console.log(name);
    }
  });
  document.querySelector(".modal__close").addEventListener("click", (e) => {
    e.preventDefault();
    modal.style.display = "none";
  });

  createProducts();
}
