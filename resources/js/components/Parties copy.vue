<template>
<div style="
position: absolute;
top: 0;
background: black;
width: 100%;
height: 100%;
">
    <div class="view" id="partiesView">
     <sidebar> </sidebar>
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
             <div class="sectionWrapper" id="sectionWrapper4">
                <div class="imageWrapper" id="imageWrapper_4"> 
                     <img src="/img/11.png" id="img_4"/>

                </div>
            </div>
             <div class="sectionWrapper" id="sectionWrapper2">
                <div class="imageWrapper" id="imageWrapper_5"> 
                     <img src="/img/12.png" id="img_5"/>
                     <div id="display_6"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> SCENE </router-link> </div>
                    </div>
                </div>
            </div>
             <div class="sectionWrapper" id="sectionWrapper2">
                <div class="imageWrapper" id="imageWrapper_6"> 
                     <img src="/img/13.png" id="img_6"/>
                </div>
            </div>
            <div class="sectionWrapper" id="sectionWrapper2">
                <div class="imageWrapper" id="imageWrapper_7"> 
                     <img src="/img/14.png" id="img_7"/>
                </div>
            </div>
            <div class="sectionWrapper" id="sectionWrapper2">
                <div class="imageWrapper" id="imageWrapper_8"> 
                     <img src="/img/15.png" id="img_8"/>
                </div>
            </div>
            <div class="sectionWrapper" id="sectionWrapper2">
                <div class="imageWrapper" id="imageWrapper_9"> 
                     <img src="/img/16.png" id="img_9"/>
                </div>
            </div>
            <div class="sectionWrapper" id="sectionWrapper_10">
                <div class="imageWrapper" id="imageWrapper_10"> 
                     <img src="/img/17.png" id="img_10"/>
                </div>
            </div>
            <div class="sectionWrapper" id="sectionWrapper2">
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
</transition>
</template>
<script>
    export default
    {
        mounted()
        {
        },
        methods:
        {
            beforeEnter(el)
            {
                 el.childNodes[0].querySelectorAll('.backToTop')[0].style.visibility = "hidden";
                 el.childNodes[0].querySelectorAll('.backToTop')[0].style.opacity = 0;
            },
            afterEnter(el) 
            {
                el.childNodes[0].querySelectorAll('.backToTop')[0].style.visibility = "visible";
                el.childNodes[0].querySelectorAll('.backToTop')[0].style.opacity = 1;
            },
            beforeLeave(el) 
            {
                el.childNodes[0].querySelectorAll('.backToTop')[0].style.visibility= "hidden";
                el.childNodes[0].querySelectorAll('.backToTop')[0].style.opacity = 0;
            }
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
#partiesView
{
    background: black;
    display: flex;
    flex-flow: column;
    
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
    margin-top: 2vw;
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
.title a
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
}
.sidebar{
    padding-bottom: 2vw !important;
    padding: 5vw;
}
@media (max-width: 776px)
{
    #partiesView #sectionWrapper_1
    {
        text-align: center;
        transform: translateY(100%);

    }
    #partiesView #sectionWrapper_2
    {
        transform: translateY(-100%);
        margin: auto;
        margin-top: 0;
    }
    #partiesView #imageWrapper_2 
    {
        margin: 0;
    }  
    #partiesView #img_2
    {
        width: 20vw;
    }
    
    #topMenu
    {
        display: none !important;
    }
}
@media (max-width: 776pt)
{
    #partiesWrapper{
        display: flex;
        flex-flow: column;
    }
   #topMenu
    {
        order: 2;
    }
    .sidebar{
        order: 1;
        padding-top: 2vw;
        padding-bottom: 2vw;
    }
     #partiesView #sectionWrapper_1
    {
        order: 4;
    }
     #partiesView #sectionWrapper_2
    {
        order: 3;
    }
     #partiesView #sectionWrapper_3
    {
        order: 5;
    }
     #partiesView #sectionWrapper_4
    {
        order: 6;
    }
     #partiesView #sectionWrapper_5
    {
        order: 7;
    }
     #partiesView #sectionWrapper_6
    {
        order: 8;
    }
     #partiesView #sectionWrapper_7
    {
        order: 9;
    }
     #partiesView #sectionWrapper_8
    {
        order: 10;
    }
     #partiesView #sectionWrapper_9
    {
        order: 11;
    }
     #partiesView #sectionWrapper_10
    {
        order: 12;
    }
     #partiesView #sectionWrapper_11
    {
        order: 13;
    }
}
</style>