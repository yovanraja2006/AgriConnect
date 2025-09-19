const cropRecommendations = {
    'January': ['1. Spinach', '2. Kale', '3. Broccoli', '4. Carrots'],
    'February': ['1. Onions', '2. Garlic', '3. Leeks', '4. Radishes'],
    'March': ['1. Carrots', '2. Radishes', '3. Lettuce', '4. Beets'],
    'April': ['1. Tomatoes', '2. Cucumbers', '3. Peppers', '4. Squash'],
    'May': ['1. Corn', '2. Beans', '3. Squash', '4. Cucumbers'],
    'June': ['1. Pumpkins', '2. Melons', '3. Okra', '4. Sweet Corn'],
    'July': ['1. Sweet Potatoes', '2. Eggplants', '3. Peas', '4. Tomatoes'],
    'August': ['1. Beets', '2. Turnips', '3. Chard', '4. Melons'],
    'September': ['1. Cabbage', '2. Brussels Sprouts', '3. Cauliflower', '4. Carrots'],
    'October': ['1. Garlic', '2. Shallots', '3. Rutabaga', '4. Spinach'],
    'November': ['1. Kale', '2. Collards', '3. Carrots', '4. Beets'],
    'December': ['1. Brussels Sprouts', '2. Winter Lettuce', '3. Parsnips', '4. Garlic']
};

document.getElementById('month-select').addEventListener('change', function() {
    const month = this.value;
    const cropList = document.getElementById('crop-list');
    
    if (month) {
        const crops = cropRecommendations[month];
        cropList.innerHTML = `<h3>Recommended Crops for ${month}:</h3><ul>${crops.map(crop => `<li>${crop}</li>`).join('')}</ul>`;
    } else {
        cropList.innerHTML = '';
    }
});