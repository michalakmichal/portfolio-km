<template>
    <a href="#" class="backToTop"> 
        <img src="/img/arrow-bar-up.svg"/>
        <div> Back to the top </div>
    </a>
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
.backToTop
{
    position: fixed;
    right: 0;
    bottom: 0;
    text-align: center;
    padding: 2vw 2vw;
    font-weight: bold;
    z-index:3;
    font-size: 0.8em;
    text-decoration: none;
    color: inherit;
    transition: opacity 1s ease-in-out;
}
#backToTop img
{
    width: 1vw;
}
</style>