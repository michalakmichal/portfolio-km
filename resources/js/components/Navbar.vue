<template>
<div>
<logo> </logo>
<div class="navbar">
 <router-link :to="{ name: 'photography' }" class="active"> Photography </router-link> 
   <router-link :to="{ name: 'graphicdesign' }"> Graphic design </router-link> 
     <router-link :to="{ name: 'aboutme' }"> About me </router-link> 
        <router-link :to="{ name: 'contact' }"> Contact </router-link>
</div>
</div>
</template>
<script>
    export default
    {
        mounted()
        {
        }
    }
</script>
<style scoped>
.router-link-active, .router-link-exact-active {
   color: #C9B57E !important;
 }
</style>
