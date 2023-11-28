document.addEventListener('DOMContentLoaded', function () {
    const recipeContent = `
        <h1>Welcome to our delightful world of recipes!</h1>
        <p>Our website is a culinary haven where food enthusiasts, amateur chefs, and anyone passionate about cooking can embark on a culinary adventure</p>
        <p>Explore our carefully crafted recipes, meticulously detailed with step-by-step instructions, vibrant images, and essential cooking tips. Whether you're a novice looking to master the basics or a seasoned cook seeking culinary inspiration, our website is your go-to destination.</p>
        <p>Discover the art of creating delectable dishes, from classic comfort foods to exotic gourmet delights. We celebrate the diversity of flavors, techniques, and ingredients, empowering you to experiment and innovate in your own kitchen. From quick weekday meals to elaborate weekend feasts, our recipes cater to various occasions, making every dining experience unforgettable.</p>
        <p>...Happy cooking!</p>
        
    `;

    const recipeContainer = document.getElementById('recipe-content');
    recipeContainer.innerHTML = recipeContent;
});

document.addEventListener('DOMContentLoaded', function () {
    const ingredients1Content = `
        <p>Ingredients:

            1. Ground beef (80/20 or 85/15 lean-to-fat ratio)
            Burger buns (brioche, sesame seed, whole wheat, etc.)
            Cheese slices (cheddar, Swiss, American, etc.)
            Lettuce leaves
            Tomato slices
            Onion slices (raw or caramelized)
            Pickles
            Condiments (ketchup, mustard, mayonnaise, barbecue sauce, etc.)
            Salt and pepper for seasoning
            Optional: bacon strips, fried eggs, mushrooms, avocado, etc.
            </p>

    `;

    const ingredients1Container = document.getElementById('ingredients1');
    ingredients1Container.innerHTML = ingredients1Content;
});
document.addEventListener('DOMContentLoaded', function () {
    const ingredients2Content = `
       <p>Apples
            Bananas
            Oranges
            Berries (blueberries, strawberries, raspberries, blackberries)
            Grapes (red or green)
            Mangoes
            Pineapples
            Kiwis
            Peaches
            Plums
            Pears
            Cherries
            Watermelon
            Cantaloupe
            Honeydew Melon
            </p>
    `;

    const ingredients2Container = document.getElementById('ingredients2');
    ingredients2Container.innerHTML = ingredients2Content;
});
document.addEventListener('DOMContentLoaded', function () {
    const ingredients3Content = `
        <p>Salmon Fillets: Fresh salmon fillets, preferably skin-on, for grilling.
Olive Oil: For marinating the salmon and roasting vegetables.
Garlic: Minced garlic adds flavor to the salmon and vegetables.
Lemon: Sliced lemons for garnish and squeezing over the grilled salmon.
Salt and Pepper: For seasoning the salmon and vegetables.
Assorted Vegetables: Such as bell peppers, zucchini, and cherry tomatoes for roasting.
Herbs: Fresh herbs like thyme, rosemary, or dill for seasoning.
Optional: Red Chili Flakes: For a bit of spice, if desired.
Optional: Balsamic Glaze: Drizzle over the roasted vegetables for extra flavor.
Optional: Quinoa or Brown Rice: As a healthy side dish, if you prefer a complete meal.
Optional: Steamed Asparagus: For a nutritious vegetable side.
            </p>

    `;

    const ingredients3Container = document.getElementById('ingredients3');
    ingredients3Container.innerHTML = ingredients3Content;
});
function addRecipe() {
    const recipeTitle = document.getElementById('recipeTitle').value;
    const recipeIngredients = document.getElementById('recipeIngredients').value;
    const recipeImage = document.getElementById('recipeImage').files[0]; // Get the uploaded file

    // Check if all fields are filled
    if (!recipeTitle || !recipeIngredients || !recipeImage) {
        alert("Please fill out all fields.");
        return;
    }

    // Create a new card with the recipe information and image
    const newCard = `
        <div class="card mb-3" style="height: 80%">
            <img src="${URL.createObjectURL(recipeImage)}" class="card-img-top" alt="Recipe Image">
            <div class="card-body">
                <h5 class="card-title">${recipeTitle}</h5>
                <div>${recipeIngredients}</div>
            </div>
        </div>
    `;

    // Append the new card to the container
    const container = document.querySelector('.container-fluid');
    container.insertAdjacentHTML('beforeend', newCard);

    // Clear the form fields after adding the recipe
    document.getElementById('recipeTitle').value = '';
    document.getElementById('recipeIngredients').value = '';
    document.getElementById('recipeImage').value = ''; // Clear the file input
}
