<template>
<div style="
position: absolute;
top: 0;
background: black;
width: 100%;
height: 100%;
">
    <div class="view" id="partiesView">
    <top-menu> </top-menu>
     <div class="sectionWrapper" id="sectionWrapper_1">
                <div class="imageWrapper" id="imageWrapper_1"> 
                    <img src="/img/7.png" id="img_1"/>
                </div>
            </div>
             <div class="sectionWrapper" id="sectionWrapper_2">
                <div class="imageWrapper" id="imageWrapper_2"> 
                     <img src="/img/8.png" id="img_2"/>
                     <div id="display_1"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> Meet </router-link> </div>
                    </div>
                    <div id="display_2"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> Kraków's </router-link> </div>
                    </div>
                </div>
             <div id="labelCity">   <router-link :to="{ name: 'parties' }"> Kraków's </router-link> </div>
            </div>
            <back-to-top> </back-to-top>

             <div class="sectionWrapper" id="sectionWrapper_3">
                <div class="imageWrapper" id="imageWrapper_3"> 
                     <img src="/img/9.png" id="img_3"/>
                     <div id="display_3"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> independent </router-link> </div>
                    </div>
                </div>
            </div>
              <div class="sectionWrapper" id="sectionWrapper_4">
                <div class="imageWrapper" id="imageWrapper_4"> 
                     <img src="/img/10.png" id="img_3"/>
                     <div id="display_4"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> ELECTRONIC MUSIC </router-link> </div>
                    </div>
                </div>
            </div>
             <div class="sectionWrapper" id="sectionWrapper_5">
                <div class="imageWrapper" id="imageWrapper_4"> 
                     <img src="/img/11.png" id="img_4"/>
                    <div id="display_5"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> underground </router-link> </div>
                    </div>
                </div>
                  <div id="display_4_mobile"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> ELECTRONIC MUSIC </router-link> </div>
                 </div>
            </div>
             <div class="sectionWrapper" id="sectionWrapper_6">
                <div class="imageWrapper" id="imageWrapper_5"> 
                     <img src="/img/12.png" id="img_5"/>
                     <div id="display_6"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> SCENE </router-link> </div>
                    </div>
                </div>
            </div>
             <div class="sectionWrapper" id="sectionWrapper_7">
                <div class="imageWrapper" id="imageWrapper_6"> 
                     <img src="/img/13.png" id="img_6"/>
                </div>
            </div>
            <div class="sectionWrapper" id="sectionWrapper_8">
                <div class="imageWrapper" id="imageWrapper_7"> 
                     <img src="/img/14.png" id="img_7"/>
                </div>
            </div>
            <div class="sectionWrapper" id="sectionWrapper_9">
                <div class="imageWrapper" id="imageWrapper_8"> 
                    <img src="/img/15.png" id="img_8"/>
                    <div id="labelUnder"> 
                        <router-link :to="{ name: 'parties' }"> under </router-link>
                    </div>
                    <div id="labelGround"> 
                        <router-link :to="{ name: 'parties' }"> ground</router-link>
                    </div>
                </div>
            </div>
            <div class="sectionWrapper" id="sectionWrapper_10">
                <div class="imageWrapper" id="imageWrapper_9"> 
                     <img src="/img/16.png" id="img_9"/>
                </div>
            </div>
            <div class="sectionWrapper" id="sectionWrapper_11">
                <div class="imageWrapper" id="imageWrapper_10"> 
                     <img src="/img/17.png" id="img_10"/>
                    <div id="labelScene"> 
                         <router-link :to="{ name: 'parties' }"> SCENE </router-link>
                    </div>
                </div>
            </div>
            <div class="sectionWrapper" id="sectionWrapper_12">
                <div class="imageWrapper" id="imageWrapper_11"> 
                     <img src="/img/18.png" id="img_11"/>
                     <div id="display_7"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> Want to see more? </router-link> </div>
                    </div>
                    <div id="display_8"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> Click to display extended gallery </router-link> </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</template>
<script>
    export default
    {
        mounted()
        {
            
        },
         data() {
        return {
            prevRoute: 0
            }
        },
        methods:
        {
            
            /*
            afterEnter(el) 
            {
                el.childNodes[0].querySelectorAll('.backToTop')[0].style.visibility = "visible";
                el.childNodes[0].querySelectorAll('.backToTop')[0].style.opacity = 1;
            },
            beforeEnter(el)
            {
                 el.childNodes[0].querySelectorAll('.backToTop')[0].style.visibility = "hidden";
            },
            beforeLeave(el) 
            {
                el.childNodes[0].querySelectorAll('.backToTop')[0].style.visibility= "hidden";
                el.childNodes[0].querySelectorAll('.backToTop')[0].style.opacity = 0;
            }
            */
            
            
        },
           beforeRouteEnter(to, from, next) {
            next(vm => {
                vm.prevRoute = from;
            })}
    }
</script>
<style scoped>

.animated
{
    animation: anim 4s ease;
}
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
#partiesView
{
    background: black;
    display: flex;
    flex-flow: column;
    
}
#partiesView #labelUnder, #partiesView #labeGround
{
    display: none;
}
.sectionWrapper
{
    text-align: left;
    width: 75%;
    margin: auto;
}
#sectionWrapper_2
{
    text-align: center;
}
#sectionWrapper_10{
    margin: 0 !important;
}
.imageWrapper {
     display: inline-block;
     position: relative;
}
#partiesView #imageWrapper_2
{
    left: 20%;
    margin-top: -10vw;
}
#partiesView #imageWrapper_3
{
    padding-top: 2vw;
}
#partiesView #img_1
{
    animation: none;
    margin: 0;
    position: relative;
    width: 42vw;
}
#partiesView #img_2
{
    animation: none;
    margin: 0;
    position: relative;
    width: 30vw;
    z-index: 2;
}
#partiesView #img_3
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
    z-index: 2;
}
#partiesView #img_4
{
    animation: none;
    margin: 0;
    margin-top: -11vw;
    position: relative;
    width: 80%;
    z-index: 2;
    left: 50%;
    transform: translateX(-50%);
}
#partiesView #img_5
{
    animation: none;
    margin: 0;
    margin-top: 5vw;
    position: relative;
    width: 80%;
    z-index: 2;
    left: 60%;
    transform: translateX(-50%);
}
#partiesView #img_6
{
    animation: none;
    margin: 0;
    margin-top: 5vw;
    position: relative;
    width: 100%;
    z-index: 2;
    left: 60%;
    transform: translateX(-50%);
}
#partiesView #img_7
{
    animation: none;
    margin: 0;
    margin-top: 5vw;
    position: relative;
    width: 100%;
    z-index: 2;
    left: 50%;
    transform: translateX(-50%);
}
#partiesView #img_8
{
    animation: none;
    margin: 0;
    margin-top: 5vw;
    position: relative;
    width: 40vw;
    z-index: 2;
    left: 50%;
    transform: translateX(-50%);
}
#partiesView #img_9
{
    animation: none;
    margin: 0;
    margin-top: 5vw;
    position: relative;
    width: 100%;
    z-index: 2;
    left: 60%;
    transform: translateX(-50%);
}
#partiesView #img_10
{
    animation: none;
    margin: 0;
    margin-top: -10vw;
    position: relative;
    width: 40vw;
    z-index: 2;
    left: 0;
    
}
#partiesView #img_11
{
    animation: none;
    margin: 0;
    margin-top: 5vw;
    position: relative;
    width: 90%;
    z-index: 2;
    left: 50%;
    padding-bottom: 15vw;
    transform: translateX(-50%);
}
#partiesView #display_1
{
    position: absolute;
    animation: none;
    top: -4%;
    z-index: 3;
    font-family: Muli;

}
#partiesView #display_1 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;
    
}
#partiesView #display_2
{
    position: absolute;
    animation: none;
    top: 50%;
    left: 0;
    z-index: 3;
    font-family: Muli;
}
#partiesView #display_2 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;
    transform: translateX(-100%);
    
}
#partiesView #display_3
{
    position: absolute;
    animation: none;
    top: -3%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;
}
#partiesView #display_3 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;
    
}
#partiesView #display_4
{
    position: absolute;
    animation: none;
    top: 3vw;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;
}
#partiesView #display_4 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;
    
}
#partiesView #display_6
{
    position: absolute;
    animation: none;
    top: -2vw !important;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;
}
#partiesView #display_6 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;
    
}
#partiesView #display_7
{
    position: absolute;
    animation: none;
    bottom: 7vw !important;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;
}
#partiesView #display_7 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 1.5vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;   
}
#partiesView #display_8
{
    position: absolute;
    animation: none;
    bottom: 4vw !important;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;
}
#partiesView #display_8 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 1.5vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 0.5vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;
    color: #707070;
    
}
#partiesView #display_5
{
    position: absolute;
    animation: none;
    top: -10vw;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;
}
#partiesView #display_5 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;
    
}
a
{
     text-decoration: none !important;
     color: inherit !important;
}
#partiesView #display_1 .footnote
{
    text-align: right;
    font-weight: lighter;
    font-size: 0.8em;
    color: rgba(112,112,112,1);
    letter-spacing: 0.8px;
}/*
.sidebar{
    padding-bottom: 2vw !important;
    padding: 5vw;
}*/
#labelCity{
    display: none;
    text-align: center;
}
  #partiesView #display_4_mobile
  {
      display: none;
  }
  #partiesView #display_4_mobile
  {
        margin-top: -10vw;
        position: relative;
        z-index: 3;
  }
  #labelScene
  {
      display: none;
  }
  #partiesView #sectionWrapper_1
  {
      padding-top: 12vw;
  }
@media (max-width: 776px)
{
    
    #partiesView #display_6
    {
        display: none;
    }
    #partiesView #display_2
    {
        display: none;
    }

    #partiesView  #display_3
    {
        top: 7vw !important;
        left: -10vw !important;
        writing-mode: vertical-rl;
        text-orientation: upright;
    }
    #partiesView #display_4
    {
        display: none;
    }
    #partiesView  #labelCity,  #partiesView #display_4_mobile
    {
        padding-top: 5vw;
        display: block;
        text-align: center;
        font-family: Muli;
    }
    #partiesView #display_4_mobile a
    {
        font-size: 8vw;
        color: #960404 !important;
    }
    #partiesView #display_5
    {
        display: none;
    }
    #labelCity a
    {
        font-family: Muli;
        font-weight: bold;
        color: rgba(201,181,126,1) !important;
        letter-spacing: 2vw;
        opacity: 0.749;
        text-decoration: none !important;
    }
    #partiesView .sectionWrapper
    {
        margin: 0 !important;
        width: 100%;
    }  
    #partiesView .sectionWrapper
    {
        box-sizing: border-box;
    }
    #partiesView #sectionWrapper_1
    {
        text-align: center;
    }
    #partiesView #sectionWrapper_2
    {
        margin: auto;
        margin-top: 0;
        padding: 5vw 10vw;
        text-align: right;
    }
    #partiesView #imageWrapper_2 
    {
        width: 70%;
        margin: 0;
        left: auto;
        text-align: right;
    }  
    #partiesView #imageWrapper_3
    {
        width: 85%;
        padding: 10vw 0;

    }  
    #partiesView #imageWrapper_4
    {
        width: 70%;
        margin: 0;
        left: auto;
        text-align: right;
    }  
    #partiesView #imageWrapper_8
    {
        width: 70%;
        padding-left: 5vw;

    }  
    #partiesView #img_8
    {
        width: 100%;
        margin: 0;
    }
      #partiesView #imageWrapper_10
    {
        width: 100%;

    }  
    #partiesView #img_10
    {
        width: 100%;
        margin: 0;
    }
    #partiesView #labelScene
    {
        color: #960404;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%,-50%);
        z-index: 3;
        font-weight: bold;
        font-family: Muli;
        letter-spacing: 5vw;
        display: block;
    }
    #partiesView #labelUnder, #partiesView #labelGround
    {
        display: block !important;
        position: absolute;
        letter-spacing: 6.5vw;
        top: 0;
        right: 0;
        font-weight: bold;
        font-family: Muli;
        z-index: 3;
    }

    #partiesView #labelUnder
    {
        transform: translateY(-100%);
        color: rgba(201,181,126,1);
        margin-right: -6.5vw;
       
    }
    #partiesView #labelGround
    {
        writing-mode: vertical-rl;
        text-orientation: mixed;
        transform: translateX(100%);
        color: #A478FE;
        margin-top: 2vw;
    }
    #partiesView #img_2
    {
        width: 100%;
    }
    #partiesView #sectionWrapper_5
    {
        text-align: right;
    }
    #partiesView #imageWrapper_4
    {
        padding-top: 5vw;
        width: 80%;
    }
    #partiesView #img_4
    {
        animation: none;
        margin: 0;
        position: relative;
        width: 100%;
        z-index: 2;
        right: 0;
     }   
    #partiesView #labelCity, #partiesView #display_1 .title, #partiesView #display_3 .title, #display_4_mobile,
    #partiesView #labelUnder, #partiesView #labelGround, #partiesView #labelScene
    {
        font-size: 10vw !important;
        opacity: 1 !important;
    }
    #display_1
    {
        right: 0;
        transform: translate(10%,-30%);
    }

    #partiesView #img_6
    {
        left: 0;
        transform: none;
        margin-top: 0;
    }   
     #partiesView #img_9
    {
        left: 0;
        transform: none;
    }   

    #partiesView #img_1
    {
        width: 100%;
    }

    #partiesWrapper{
        display: flex;
        flex-flow: column;
    }

 
     #partiesView #sectionWrapper_1
    {
        order: 3;
    }
     #partiesView #sectionWrapper_2
    {
        order: 2;
    
    }
     #partiesView #sectionWrapper_3
    {
        order: 4;
        text-align: right;
    }
     #partiesView #sectionWrapper_4
    {
        order: 5;
    }
     #partiesView #sectionWrapper_5
    {
        order: 6;
    }
     #partiesView #sectionWrapper_6
    {
        order: 12;
    }
     #partiesView #sectionWrapper_7
    {
        order: 7;
    }
     #partiesView #sectionWrapper_8
    {
        order: 9;
    }
     #partiesView #sectionWrapper_9
    {
        order: 8;
    }
     #partiesView #sectionWrapper_10
    {
        order: 11;
    }
     #partiesView #sectionWrapper_11
    {
        order: 10;
    }
    #partiesView #sectionWrapper_12
    {
        order: 13;
    }

}
/*
#partiesView .sidebar{
    width: 75%;
    margin: auto;
    padding: 0;
}*/
</style>