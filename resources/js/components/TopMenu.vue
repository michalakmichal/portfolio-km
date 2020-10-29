<template>
 <div id="topMenu">
    <!-- <div id="homeLabel"> Home page </div> -->
         <div id="topLabel"> Click to display standard extended gallery </div> 
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
@media (max-width:767px)
{
    #topMenu
    {
       visibility: hidden;
    }
}
#topMenu
{
    display: flex;
    flex-flow: row;
    align-items: center;
    justify-content: center;
    width: 85%;
    margin: auto;
    padding: 3vw 5vw;
    box-sizing: border-box;
}
#topLabel
{
    font-size: 1.6vw;
    text-align: center;
    font-family: Muli;
    font-style: normal;
    font-weight: bold;
    letter-spacing: 1.2px;
    color: #1F1F1F;
    flex: auto;
}
#homeLabel
{
    font-size: 0.9vw !important;
    font-family: Muli;
    font-style: normal;
    font-weight: lighter;
    font-size: 1vw;
    color: rgba(20,190,9,1);
    letter-spacing: 0.2px;
    height: 100%;
}
</style>