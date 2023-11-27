<template>
    <div>
        <SideMenu></SideMenu>
    </div>
    
    <div id="main">
        <p>Explore meal options</p>
        <ul>
            <li v-for="meal in meals" :key="meal.id">
                {{ meal.name }}
            </li>
        </ul>
        <div>
        <MealSelector></MealSelector>
    </div>
    </div>
    

</template>

<script>
import { defineComponent } from 'vue';
import axios from 'axios';
import MealSelector from './components/MealSelector.vue';
import SideMenu from './components/SideMenu.vue';
export default {
    data() {
        return {
            meals: [],
            mealSearch: '',
        };
    },
    methods: {
        async getMeals() {
        const meals = await axios.get('/api/meals')
            .then(response => {
                this.meals = response.data;
            })
            .catch(error => {
                console.log(error);
            });
        },
        async getRandomMeal() {
            const meal = await axios.get('/api/meals/random')
                .then(response => {
                    this.meals = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        searchMeals() {
            console.log('searching for meals');
            console.log(this.mealSearch);
        },
    },
    created() {
        this.getMeals();
    },
};


</script>

<script setup>
console.log('Meals component loaded ya punk nerds');
</script>


<style scoped>
    #main {
        margin-left: 160px; /* Same as the width of the sidenav */
        padding: 0px 10px;
    }
</style>
