<template>
<!-- <div class="box"> </div> -->
<div class="view" id="menuMobileView">
<div>
<router-link :to="{ name: 'home' }" :class=" this.prevRoute.name=='home' ? 'active' : null"> Home Page </router-link> 
 <router-link :to="{ name: 'photography' }" :class=" this.prevRoute.name=='photography' ? 'active' : null"> Photography </router-link> 
   <router-link :to="{ name: 'graphicdesign' }" :class=" this.prevRoute.name=='graphicdesign' ? 'active' : null"> Graphic design </router-link> 
     <router-link :to="{ name: 'aboutme' }" :class=" this.prevRoute.name=='aboutme' ? 'active' : null"> About me </router-link> 
        <router-link :to="{ name: 'contact' }" :class=" this.prevRoute.name=='contact' ? 'active' : null"> Contact </router-link>
</div>
    <div id="animationWrapper"> 
        <div class="circle" id="circle_0"> </div>
        <div class="circle" id="circle_1"> </div>
        <div class="circle" id="circle_2"> </div>
    </div>
</div>
</template>
<script>
    export default
    {
       data() {
        return {
            prevRoute: 0
            }
        },
        mounted()
        {
            //document.getElementById('logo').style.display = 'none';
        },
        methods:
        {
            beforeEnter(el)
            {
            },
            beforeLeave(el) 
            {
                document.getElementById('logo').style.display = 'flex';
            }
        }
        ,
        beforeRouteEnter(to, from, next) {
        next(vm => {
            vm.prevRoute = from;
        })
        }
    }
</script>
<style scoped>
.slide-up-leave-active,
.slide-up-enter-active
{
    transition: transform 0.6s ease-out;
}
.slide-up-enter
{
    transform: translateY(100%);
}
.slide-up-leave-to {
     transform: translateY(0%);
}
#menuMobileView
{ 
    background: #E6E6E6;
    box-sizing: border-box;
    padding: 5vw;
    position: absolute;
    width: 100vw;
    height: 100%;
    top: 0;
    flex-grow: 1;
    display: flex;
    flex-flow: column;
}
#menuMobileView #animationWrapper
{
    width: 100%;
    height: 100%;
    position: relative;
}
#menuMobileView .circle
{
    width: 15vw;
    height: 15vw;
    border-radius: 50%;
    background-color: #DEDEDE;
    filter: blur(0.5vw);
    position: absolute;
}
#menuMobileView #circle_0
{
    right: 0;
    top: 0;
    transform: translate(0, 0);
    animation: animation_0 2s infinite;
}
#menuMobileView #circle_1
{
    left: 0;
    top: 20%;
    animation: animation_1 2s infinite;
}
#menuMobileView #circle_2
{
    right: 0;
    bottom: 20%;
    transform: translate(0, 0);
}
@keyframes animation_0
{
    0%{
        right: 0;
        top: 0;
    }
    25%
    {
        top: 20%;
        right: 100%;
        transform: translate(100%,0);
    }
    50%
    {
       top: 80%;
       right: 0%;
       transform: translate(0,-100%);
    }
    100%
    {
        right: 0;
        top: 0;
    }
}
@keyframes animation_1
{
    0%{
        top: 20%;
        left: 0;
    }
    100%
    {
        left: 100%;
        top: 0;
        transform: translate(-100%,0);

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

@media(max-width: 767px) {
 
  #menuMobileView a
  {
      font-size: 8vw;
      display: block;
      text-decoration: none;
      color: inherit;
      padding-top: 4vw;
      font-weight: bold;
  }
  #menuMobileView .active
  {
      color: #C9B57E;
  }
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
    position: absolute;
    background: #E6E6E6;
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
#animCircle_1
{
    position: absolute;
    top: 10%;
    left: 0;
    animation: circle_1 infinite ease 5s;
}
#animCircle_2
{
    position: absolute;
     left: 90%;
      top: 90%;
      transform: scale(0.5) translate(-90%,-100%);
    animation: circle_2 infinite ease 5s;
}
@keyframes circle_1 {
  0% {
    transform: scale(1);
    
      }
  50% {
      left: 90%;
      top: 90%;
      transform: scale(0.5) translate(-100%,-100%);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes circle_2 {
  0% {
    transform: scale(1);
     transform: scale(0.5) translate(-90%,-100%);
      }
  50% {
      left: 10%;
      top: 10%;
      transform: scale(1); /*translate(-40%,0%);*/
  }
  100% {
    transform: scale(1);
    transform: scale(0.5) translate(-90%,-100%);
  }
}
</style>