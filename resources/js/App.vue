<template>
     <div>
        <SideMenu></SideMenu>
    </div>

    <div id="main">
        <h1>
        How To Install Vue 3 in Laravel 10 : ZWebCourses :)
    </h1>
    
    </div>
   
    
</template>

<script>
    import SideMenu from './components/SideMenu.vue';

    export default {
        name: 'App',
        components: {
            SideMenu
        }
    }
</script>

<style scoped>
    #main {
        margin-left: 160px; /* Same as the width of the sidenav */
        padding: 0px 10px;
    }
</style>