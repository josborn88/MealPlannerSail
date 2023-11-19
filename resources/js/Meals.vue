<template>
    <div>
        <h1>MEALS ARE HERES</h1>
    </div>
</template>

<script>
import { defineComponent } from 'vue';

export default defineComponent({
    data() {
        return {
            title: 'Meals',
            meals: [
                { id: 1, name: 'Breakfast' },
                { id: 2, name: 'Lunch' },
                { id: 3, name: 'Dinner' },
            ],
        };
    },
});
</script>

<style>
/* Your component's styles go here */
</style>
