<template>
<div style="width:100%;">
<div class="view" id="homeViewMobile">
    <div id="imageWrapper"> 
    <div id="imageContainer">
        <img src="/img/59.png" />
        </div>
    </div>
    <div id="wrapper">
    <div id="labelThank"> Thank you for </div>
    <div id="labelChecking"> Checking in! </div>
    </div>
</div>
<div class="view" id="homeView">
<div id="label_1"> Complex Visual Identification </div>
<div id="wrapper">
<div id="imageWrapper"><img src="/img/home/1.png" id="img_1"/> </div>
<img src="/img/home/2.png" id="img_2"/>
<img src="/img/home/3.png" id="img_3"/>
</div>
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
.slide-right-leave-active,
.slide-right-enter-active
{
    transition: transform 0.6s ease-out;
}
.slide-right-enter
{
    transform: translateX(100%);
}
.slide-right-leave-to {
     transform: translateX(0%);
}
#homeViewMobile
{ 
        width: 100%;
    height: 100vw;
}
#homeViewMobile 
{
    height: 100%;
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
    padding: 5vw;
    box-sizing: border-box;
    background: #e6e6e6;
}
#homeViewMobile #wrapper
{
    text-align: center;
    padding-bottom: 10vw;
}
#homeViewMobile #imageWrapper{
    position: relative;
    flex: auto;
    width:100%;
}
#homeViewMobile #imageContainer
{
      position: absolute;
      height: 100%;
      width: 100%;
}
#homeViewMobile img
{

    max-width: 90%;
    max-height: 100%;
    position: absolute;
    bottom: 0;
    left: 50%;
    right: 0;
    transform: translate(-50%, 0%);
}
#homeViewMobile #labelChecking
{
    font-size:8vw;
    color: blue;
    font-weight: bold;
    color: #066877;
}
#homeViewMobile #labelThank
{
    font-size:4vw;
    color: blue;
    padding-top: 10vw;
    color: #707070;
}
#homeView
{
    background: #E6E6E6;
    box-sizing: border-box;
    position: absolute;
    width: 100%;
    top: 0;
   /* flex-grow: 1;
    height: 100%; */
    text-align: center;
}
#homeView #img_1{
    height: 30vw;
    position: relative;
    left: 0;
    z-index:2;
    padding: inherit;
}
#homeView #img_2{
    width: 30vw;
    position: relative;
    left: 0%;
    top: 0;
    transform: translate(-30%,-25%);
    z-index:1;
    padding: inherit;
}
#homeView #img_3{
    height: 30vw;
    position: relative;
    right: 0;
    padding: inherit;
}
#label_1
{
    text-align: center;
    height: 100%;
}
#homeView #wrapper
{
    width: 75%;
    margin: auto;
}
#homeView #imageWrapper
{
    display: inline-block;
    position: relative;
}
@media(max-width: 767px)
{
    #homeView
    {
        display: none;
    }
}
@media(min-width: 767px)
{
#homeViewMobile
  {
        display: none !important;
        visibility: hidden !important; 
  }

}
</style>