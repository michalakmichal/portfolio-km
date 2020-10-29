<template>
<div id="logo">
<div id="menuMobile" style="text-align:left;">
   <router-link :to="{ name: 'menu' }"> <img id="menuIcon" src="/img/menu.svg"/> </router-link>
</div>
<div id="logoSmallWrapper">
<span id="top"> Portfolio </span>
<span id="bottom"> Kacper Michalak </span>
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
@media(min-width: 767px)
{
    #menuMobile
    {
        display:none;
    }
}
@media(max-width: 767px) {

#logo
{
     padding-top: 10vw;
    padding-left: 10vw !important;
     padding-right: 10vw !important;
     display: flex;
     width: 100%;
     height: 30%;
    flex-flow: row wrap;
    box-sizing: border-box;
    transition: all 2s ease;

}
#logoSmallWrapper
{
    flex: auto;
    
}
#logo #bottom, #logo #top
{
    

}
#top{
     font-weight: bold;
     padding-left: 1.8vw;
     
}
#menuIcon{
    width: 3vw;
}
}
</style>