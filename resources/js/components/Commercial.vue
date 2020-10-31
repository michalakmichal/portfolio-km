<template>
<div style="
position: absolute;
top: 0;
background: black;
width: 100%;
height: 100%;
">
    <div class="view" id="commercialView" style="positon: relative">
    <back-to-top> </back-to-top>
    <top-menu> </top-menu>
     <div class="sectionWrapper" id="sectionWrapper_1">
            <div class="imageWrapper" id="imageWrapper_1"> 
                <img src="/img/43.png" id="img_1"/>
                <div id="display_1"> 
                     <div class="title">  Creating </div>
                </div>
            </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_2">
            <div class="imageWrapper" id="imageWrapper_2"> 
                <img src="/img/44.png" id="img_2"/>
                <div id="display_2"> 
                      <div class="title">  
                        <span> a </span>
                            <span style="color: white"> successfull </span>
                      </div>
                </div>
                <div id="display_3"> 
                      <div class="title">  
                        campaign
                      </div>
                </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_3">
            <div class="imageWrapper" id="imageWrapper_3"> 
                <img src="/img/45.png" id="img_3"/>
                <div id="display_4"> 
                      <div class="title">  
                            is a
                      </div>
                </div>
                <div id="labelProcess" class="mobile"> PROCESS </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_4">
            <div class="imageWrapper" id="imageWrapper_4"> 
                <img src="/img/46.png" id="img_4"/>
                <div id="display_5" class="desktop"> 
                      <div class="title">  
                        PROCESS
                      </div>
                </div>
                  <div id="display_6"> 
                      <div class="title">  
                        Let me
                      </div>
                </div>
            </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_5">
                    <div id="labelWrapper" class="mobile">
                        <div id="label_0">  make </div>
                        <div id="label_1">  your </div>
                        <div id="label_2">  idea </div>
                    </div>
            <div class="imageWrapper" id="imageWrapper_5"> 
                <img src="/img/47.png" id="img_5"/>
                <div id="display_7"> 
                     <div class="title desktop">  Make your idea
                      </div>
                </div>
                <div id="display_8"> 
                     <div class="title">  Look good!
                      </div>
                </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_1">
            <div class="imageWrapper" id="imageWrapper_6"> 
                <img src="/img/48.png" id="img_6"/>
            </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_7">
            <div class="imageWrapper" id="imageWrapper_7"> 
                <img src="/img/49.png" id="img_7"/>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_8">
                <div class="imageWrapper" id="imageWrapper_8"> 
                     <img src="/img/50.png" id="img_8"/>
                </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_2">
                <div class="imageWrapper" id="imageWrapper_9"> 
                     <img src="/img/51.png" id="img_9"/>
                </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_2">
                <div class="imageWrapper" id="imageWrapper_12"> 
                     <img src="/img/52.png" id="img_10"/>
                     <div id="display_9"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> Want to see more? </router-link> </div>
                    </div>
                    <div id="display_10"> 
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
#commercialView .mobile
{
    display: none;
}
#commercialView .desktop
{
    display: block;
}
.title a
{
     text-decoration: none !important;
     color: inherit !important;
}
#commercialView .sectionWrapper
{
    width: 75%;
    margin: auto;
}
#commercialView #sectionWrapper_1
{
    text-align: right;
    padding: 2.5vw 0;
}
#commercialView #sectionWrapper_2
{
    text-align: center;
    padding: 5vw;
}
#commercialView #sectionWrapper_3
{
    text-align: left;
}
#commercialView #sectionWrapper_4
{
    text-align: right;
    padding-top: 6vw;
}
#commercialView #sectionWrapper_5
{
    padding-top: 10vw;
}
#commercialView
{
    background: black;
}
.imageWrapper {
     display: inline-block;
     position: relative;
}
#commercialView #imageWrapper_1
{
    animation: none;
    margin: 0;
    position: relative;
    width: 39vw;
    right: 14%;
}
#commercialView #imageWrapper_2
{
    animation: none;
    margin: 0;
    position: relative;
    width: 38vw;
}
#commercialView #imageWrapper_3
{
    animation: none;
    margin: 0;
    position: relative;
    width: 38vw;
    left: 10%;
}
#commercialView  #imageWrapper_4
{
    animation: none;
    margin: 0;
    position: relative;
    width: 35vw;
    right: 14%;
}
#commercialView  #imageWrapper_5{
    animation: none;
    margin: 0;
    position: relative;
    width: 38vw;
    padding: 0;
}
#commercialView #img_1
{
    width: 100%;
}
#commercialView #display_1
{
    position: absolute;
    animation: none;
    top: 45%;
    left: 0;
    transform: translateX(-77%);
    z-index: 3;
    font-family: Muli;

}
#commercialView #display_1 .title
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

#commercialView #img_2
{
    width: 100%;
}
#commercialView #display_2
{
    position: absolute;
    animation: none;
    top: 0%;
    left: -15%;
    z-index: 3;
    font-family: Muli;

}
#commercialView #display_2 .title
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
#commercialView #img_3
{
    width: 100%;
}
#commercialView #display_3
{
    position: absolute;
    animation: none;
    top: 42%;
    left: -16%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;

}
#commercialView #display_3 .title
{
    font-style: normal;
    font-size: 3.3vw !important;
    font-size: 45px;
    font-weight: bold;
    color: rgba(201,181,126,1);
    letter-spacing: 1vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;   
}
#commercialView #display_3 span
{
    letter-spacing: 3vw; 
}
#commercialView #img_4
{
   width: 100%;
}
#commercialView #display_4
{
    position: absolute;
    animation: none;
    top: 50%;
    right: 0;
    transform: translate(68%,-50%);
    z-index: 3;
    font-family: Muli;
}
#commercialView #display_4 .title
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
#commercialView #img_5
{
    width: 100%;
}
#commercialView #display_5
{
    position: absolute;
    animation: none;
    top: 0;
    transform: translate(-30%, -120%);
    z-index: 3;
    font-family: Muli;
}
#commercialView #display_5 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: #729A51;
    letter-spacing: 4vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;   
}
#commercialView #img_6
{
    animation: none;
    margin: 0;
    position: relative;
    width: 32vw;
    padding: 0;
    padding-bottom: 5vw;
}
#commercialView #display_6
{
    position: absolute;
    animation: none;
    top: 40%;
    left: 0%;
    transform: translateX(-74%);
    z-index: 3;
    font-family: Muli;
}
#commercialView #display_6 .title
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
#commercialView #img_7
{
    animation: none;
    margin: 0;
    position: relative;
    width: 60vw;
    padding: 0;
    padding-bottom: 5vw;
}
#commercialView #display_7
{
    position: absolute;
    animation: none;
    top: 0;
    transform: translate(50%, -130%);
    z-index: 3;
    font-family: Muli;
}
#commercialView #display_7 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 1vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;   
}
#commercialView #display_7 .title div
{
    padding: 2.5vw 0;
}
#commercialView #img_8
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
    padding: 0;
    padding-bottom: 5vw;
}

#commercialView #img_9
{
    animation: none;
    margin: 0;
    position: relative;
    width: 30vw;
    padding: 0;
    padding-bottom: 5vw;
}

#commercialView #img_10
{
    animation: none;
    margin: 0;
    position: relative;
    width: 30vw;
    padding: 0;
    padding-bottom: 15vw;
}

#commercialView #display_8
{
    position: absolute;
    animation: none;
    top: 50%;
    transform: translateX(100%);
    z-index: 3;
    font-family: Muli;
}
#commercialView #display_8 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3vw !important;
    font-size: 45px;
    color: #788FC2;
    letter-spacing: 1.5vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;   
}

#commercialView #display_9
{
    position: absolute;
    animation: none;
    bottom: 7vw !important;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;
}
#commercialView #display_9 .title
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
#commercialView #display_10
{
    position: absolute;
    animation: none;
    bottom: 4vw !important;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;
}
#commercialView #display_10 .title
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
#commercialView #labelProcess
{
    font-size: 8vw;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translate(-100%,-50%);
    writing-mode: vertical-rl;
    text-orientation: upright;
    color: #A09C23;
}
@media(max-width: 767px)
{
    #commercialView .desktop
    {
        display: none;
    }
    #commercialView .mobile
    {
        display: block;
    }
    #commercialView .sectionWrapper
    {
        width: 90%;
        font-family: Muli;
    }
    #commercialView #sectionWrapper_1
    {
        text-align: right;
        padding-top: 30vw;
    }
    #commercialView #imageWrapper_1
    {
        width: 60vw;
        right: 0;
    }
    #commercialView #display_1
    {
        top: 0;
        left: auto;
        right: 0;
        transform: translate(0, -120%);
    }
    #commercialView #display_1 .title
    {
        font-size: 8vw !important;
        letter-spacing: 3vw;
        margin-right: -3vw;
    }
    #commercialView #sectionWrapper_2
    {
        text-align: left;
        padding-top: 13vw;
    }
    #commercialView #imageWrapper_2
    {
        width: 72vw;
        right: 0;
    }
    #commercialView #display_2
    {
        left: 0;
        transform: translate(0, -120%);
    }
    #commercialView #display_2 .title
    {
        font-size: 8vw !important;
    }
    #commercialView #display_3
    {
        right: 0;
        left: auto;
        top: 0;
        transform: translate(100%, 0);
    }
    #commercialView #display_3 .title
    {
        font-size: 8vw !important;
        writing-mode: vertical-rl;
        text-orientation: upright;
        transform: translateX(50%);
        margin-top: 2vw;
    }
    #commercialView #sectionWrapper_3
    {
        text-align: right;
        padding-top: 8vw;
    }
    #commercialView #imageWrapper_3
    {
        width: 72vw;
        left: auto;
    }
    #commercialView #sectionWrapper_4
    {
        text-align: left;
        padding-top: 12vw;
    }
    #commercialView #sectionWrapper_5
    {
        padding-top: 0;
    }
    #commercialView #imageWrapper_4
    {
        width: 72vw;
        left: 0;
        right: auto;
    }
    #commercialView #display_4
    {
        right: auto;
        left: 0;
        top: 0;
        transform: translate(0, -100%);
    }
    #commercialView #display_4 .title
    {
        font-size: 8vw !important;
        transform: translate(0);
    }
    #commercialView #display_6
    {
        right: 0;
        left: auto;
        top: 0;
        transform: translate(0, -100%);
    }
    #commercialView #display_6 .title
    {
        font-size: 8vw !important;
        transform: translate(0);
    }
    #commercialView #labelWrapper 
    {
        font-size: 8vw !important;
        text-align: center;
        padding: 10vw 0;
        color: #C9B57E;
        letter-spacing: 3vw;
        margin-right: -3vw;
        font-weight: bold;
    }
    #commercialView #label_1
    {
       color: #EAEDF6;
       letter-spacing: 6vw;
       margin-right: -3vw;
       padding: 2vw 0;
    }
}
</style>