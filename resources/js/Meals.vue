<template>

    <div>
        <h1>MEALS ARE HERES</h1>
    </div>
    
    <div>
        <!-- Display the meals -->

    </div>

</template>

<script>
import { defineComponent } from 'vue';
import axios from 'axios';

export default {
    methods: {
        getMeals() {

        console.log('DOING THE THING');

        axios.get('/api/meals')
            .then(response => {
                this.meals = response.data;
            })
            .catch(error => {
                console.log(error);
            });
        }
    },
    created() {
        this.getMeals();
    },
};


</script>

<script setup>
console.log('Meals component loaded ya punk nerds');
</script>

<style>
/* Your component's styles go here */
</style>
