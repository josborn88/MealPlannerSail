<template>
  <div>
    <h1>Meal Selector component</h1>
    <select v-model="selectedCategory">
      <option value="">All Categories</option>
      <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
    </select>
    <input type="text" v-model="searchQuery" placeholder="Search...">
    <ul>
      <li v-for="meal in filteredMeals" :key="meal.id">{{ meal.name }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'MealSelector',
  data() {
    return {
      selectedCategory: '',
      searchQuery: '',
      meals: [
        { id: 1, name: 'Meal 1', category: 'Category 1' },
        { id: 2, name: 'Meal 2', category: 'Category 2' },
        { id: 3, name: 'Meal 3', category: 'Category 1' },
        { id: 4, name: 'Meal 4', category: 'Category 3' },
      ],
      categories: [
        { id: 1, name: 'Category 1' },
        { id: 2, name: 'Category 2' },
        { id: 3, name: 'Category 3' },
      ],
    };
  },
  computed: {
    filteredMeals() {
      return this.meals.filter((meal) => {
        const categoryMatch = this.selectedCategory ? meal.category === this.selectedCategory : true;
        const searchMatch = meal.name.toLowerCase().includes(this.searchQuery.toLowerCase());
        return categoryMatch && searchMatch;
      });
    },
  },
};
</script>
