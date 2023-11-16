window.addEventListener("load", function () {
    const addPizzaBtn = document.getElementById("add-pizza-btn");
    const addPizzaModal = document.getElementById("add-pizza-modal");
    const addPizzaModalClose = document.getElementById("add-pizza-modal-close");

    addPizzaBtn.addEventListener("click", function () {
        addPizzaModal.style.display = "block";
    });

    addPizzaModalClose.addEventListener("click", function () {
        addPizzaModal.style.display = "none";
    });


    getPizzas();
});


function getPizzas() {
    startLoading();
    fetch("api/pizzas")
        .then((response) => response.json())
        .then((data) => {
            data.forEach((element) => {
                createPizzaCard(element);
            });
            finishLoading();
        });
}

function createPizzaCard(pizza) {
    const pizzaCard = document.createElement("article");
    pizzaCard.classList.add("pizza");

    const h2 = document.createElement("h2");
    h2.innerHTML = pizza.name;
    pizzaCard.appendChild(h2);

    const ingredientsNames = pizza.ingredients
        .map((ingredient) => ingredient.name)
        .join(", ");
    const p = document.createElement("p");
    p.innerHTML = `Ingredients: ${ingredientsNames}`;
    pizzaCard.appendChild(p);

    document.getElementById("pizzas-section").appendChild(pizzaCard);
}

function startLoading() {
    document.getElementById('loader').style.display = 'block';
}

function finishLoading() {
    document.getElementById('loader').style.display = 'none';
}