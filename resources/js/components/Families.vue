<template>
<div style="
position: absolute;
top: 0;
background: black;
width: 100%;
height: 100%;
">
    <div class="view" id="familiesView" style="position: relative">
    <back-to-top> </back-to-top>
    <top-menu> </top-menu>
     <div class="sectionWrapper" id="sectionWrapper_1">
            <div class="imageWrapper" id="imageWrapper_1"> 
                <img src="/img/31.png" id="img_1"/>
                <div id="display_1"> 
                     <div class="title"> Let  <br class="mobile"/> me </div>
                </div>
            </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_2">
            <div class="imageWrapper" id="imageWrapper_2"> 
                <img src="/img/32.png" id="img_2"/>
                <div id="display_2"> 
                     <div class="title">  accompany <span class="desktop"> you </span> </div>
                      <div id="labelYou" class="mobile">  you </div>
                </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_3">
            <div class="imageWrapper" id="imageWrapper_3"> 
                <img src="/img/33.png" id="img_3"/>
                <div id="display_3"> 
                     <div class="title">
                     during
                      </div>
                </div>
                <div id="labelMost" class="mobile"> most </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_4">
            <div class="mobile"  id="labelIntimate"> INTIMATE </div>
            <div class="imageWrapper" id="imageWrapper_4"> 
                <img src="/img/34.png" id="img_4"/>
                <div id="display_4"> 
                      <div class="title desktop">  
                        <div class="desktop"> most </div>
                        <div style="color: #086C7B"> intimate </div>
                             <div> moments </div>
                      </div>
                </div>
                 <div class="mobile" id="labelMoments" > moments </div>
            </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_5">
            <div class="imageWrapper" id="imageWrapper_5"> 
                <img src="/img/35.png" id="img_5"/>
                <div id="display_5"> 
                     <div class="title">  of your
                      </div>
                </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_6">
            <div class="imageWrapper" id="imageWrapper_6"> 
                <img src="/img/36.png" id="img_6"/>
                <div id="display_6"> 
                     <div class="title">  LIFE
                      </div>
                </div>
            </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_7">
            <div class="imageWrapper" id="imageWrapper_7"> 
                <img src="/img/37.png" id="img_7"/>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_8">
                <div class="imageWrapper" id="imageWrapper_8"> 
                     <img src="/img/38.png" id="img_8"/>
                </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_9">
                <div class="imageWrapper" id="imageWrapper_9"> 
                     <img src="/img/39.png" id="img_9"/>
                </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_10">
                <div class="imageWrapper" id="imageWrapper_10"> 
                     <img src="/img/40.png" id="img_10"/>
                </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_11">
                <div class="imageWrapper" id="imageWrapper_11"> 
                     <img src="/img/41.png" id="img_11"/>
                </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_12">
                <div class="imageWrapper" id="imageWrapper_12"> 
                     <img src="/img/30.png" id="img_12"/>
                     <div id="display_8"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> Want to see more? </router-link> </div>
                    </div>
                    <div id="display_9"> 
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
            /*
            beforeEnter(el) 
            {
                var x = document.getElementsByClassName('backToTop');
                //.style.display = "none";
                var i;
                for (i = 0; i < x.length; i++) {
                x[i].style.opacity = "0";
                }
            },
            afterEnter(el)
            {
                 var x = document.getElementsByClassName('backToTop');
                //.style.display = "none";
                var i;
                for (i = 0; i < x.length; i++) {
                 x[i].style.opacity = "1";
                }
            }*/
           
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

#familiesView .mobile
  {
      display: none;
  }
  
#familiesView .desktop
  {
      display: inline;
  }
#familiesView .title a
{
     text-decoration: none !important;
     color: inherit !important;
}
#familiesView .sectionWrapper
{
    width: 75%;
    margin: auto;
}
#familiesView #sectionWrapper_1
{
    text-align: right;
}
#familiesView #sectionWrapper_2
{
    padding-top: 5%;
}
#familiesView #sectionWrapper_3
{
    padding-top: 5%;
    text-align: right;
}
#familiesView #sectionWrapper_4
{
    padding-top: 5vw;
}
#familiesView #sectionWrapper_5
{
    padding: 5% 0;
    left: 10%;
    text-align: right;
}
#familiesView #sectionWrapper_6
{
    padding: 5% 0;
    text-align: right;
}
#familiesView #sectionWrapper_7
{
    text-align: left;
    padding-bottom: 5vw;
}
#familiesView #sectionWrapper_8
{
    text-align: right;
    padding-bottom: 5vw;
}
#familiesView #sectionWrapper_9
{
    text-align: center;
    padding-bottom: 5vw;
}
#familiesView #sectionWrapper_10
{
    text-align: left;
    padding-bottom: 5vw;
}
#familiesView #sectionWrapper_11
{
    text-align: right;
    padding-bottom: 5vw;
}
#familiesView #sectionWrapper_12
{
    text-align: center;
}
#familiesView
{
    background: black;
}
.imageWrapper {
     display: inline-block;
     position: relative;
}
#familiesView #img_1
{
   width: 100%;
}
#familiesView #imageWrapper_1
{
     animation: none;
    margin: 0;
    position: relative;
    width: 60vw;
}
#familiesView #imageWrapper_2
{
    padding: 4.3vw 0;
    width: 80%;
}
#familiesView #imageWrapper_3{
    
    animation: none;
    margin: 0;
    position: relative;
    width: 38vw;
}
#familiesView #imageWrapper_4
{
    animation: none;
    margin: 0;
    position: relative;
    width: 40vw;
    padding-bottom: 4vw;
}

#familiesView #imageWrapper_5
{
    width: 90%;
}
#familiesView #display_1
{
    position: absolute;
    animation: none;
    top: 50%;
    left: -2%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;

}
#familiesView #display_1 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
    margin-right: -2vw;
   /* opacity: 0.749; */
    text-align: left;   
}

#familiesView #img_2
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
}
#familiesView #display_2
{
    position: absolute;
    animation: none;
    top: 0;
    right: 0;
    z-index: 3;
    font-family: Muli;

}
#familiesView #display_2 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
    margin-right: -2vw;
    text-align: left;   
}
#familiesView #img_3
{
    width: 100%;
}
#familiesView #display_3
{
    position: absolute;
    animation: none;
    top: 50%;
    left: -5%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;

}
#familiesView #display_3 .title
{
    font-style: normal;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 1vw;
    margin-right: -2vw;
    text-align: left;   
}
#familiesView #display_3 span
{
    letter-spacing: 3vw; 
}
#familiesView #img_4
{
    width: 100%;
}
#familiesView #display_4
{
    position: absolute;
    animation: none;
    top: 50%;
    right: -5%;
    transform: translate(100%,-50%);
    z-index: 3;
    font-family: Muli;
}
#familiesView #labelIntimate
{
    animation: none;
    z-index: 3;
    font-family: Muli;
    font-weight: bold;
    font-size: 10vw !important;
    color: #80A6B3;
    letter-spacing: 5vw;
    margin-right: -5vw;
    text-align: left;
    padding: 2vw 0; 
}
#familiesView #labelMoments
{
    position: absolute;
    animation: none;
    top: 0%;
    right: 10%;
    transform: translate(0%,5%);
    z-index: 3;
    font-family: Muli;
    font-weight: bold;
    font-size: 6vw !important;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
    margin-right: -2vw;
}
#familiesView #display_4 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
    margin-right: -2vw;
    text-align: left;   
}
#familiesView #img_5
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
    padding: 0;

}
#familiesView #display_5
{
    position: absolute;
    animation: none;
    left: 50%;
    top: 0;
    transform: translate(-50%, 20%);
    z-index: 3;
    font-family: Muli;
}
#familiesView #display_5 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
    text-align: left;   
}
#familiesView #imageWrapper_6
{
    animation: none;
    margin: 0;
    position: relative;
    width: 32vw;
    padding: 0;
    padding-bottom: 5vw;
}
#familiesView #imageWrapper_7
{
    animation: none;
    margin: 0;
    position: relative;
    width: 50vw;
    padding: 0;
}
#familiesView #imageWrapper_8
{
    animation: none;
    margin: 0;
    position: relative;
    width: 35vw;
    padding: 0;
}
#familiesView #imageWrapper_9
{
    animation: none;
    margin: 0;
    position: relative;
    width: 54.5vw;
    padding: 0;
}
#familiesView #imageWrapper_10
{
    animation: none;
    margin: 0;
    position: relative;
    width: 60%;;
    padding: 0;
}
#familiesView #imageWrapper_11
{
    animation: none;
    margin: 0;
    position: relative;
    width: 60vw;
    padding: 0;
}
#familiesView #img_6
{
    width: 100%;
}
#familiesView #display_6
{
    position: absolute;
    animation: none;
    top: 40%;
    left: -10%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;

}
#familiesView #display_6 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: #2F67A8;
    letter-spacing: 4.1vw;
    margin-right: -4.1vw;
    text-align: left;   
}
#familiesView #img_7
{
    width: 100%;
}
#familiesView #img_8
{
    width: 100%;
}
#familiesView #img_9
{
    width: 100%;
}

#familiesView #img_10
{
    width: 100%;
}
#familiesView #display_10
{
    position: absolute;
    animation: none;
    top: 40%;
    left: 0;
    transform: translate(-200%, -50%);
    z-index: 3;
    font-family: Muli;

}
#familiesView #display_10 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color:#AE6B51;
    letter-spacing: 1vw;
    margin-right: -2vw;
    text-align: left;   
}
#familiesView #img_11
{
    width: 100%;
}
#familiesView #display_11
{
    position: absolute;
    animation: none;
    top: 40%;
    left: 0;
    transform: translate(-200%, -50%);
    z-index: 3;
    font-family: Muli;

}
#familiesView #display_11 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color:#AE6B51;
    letter-spacing: 1vw;
    margin-right: -2vw;
    text-align: left;   
}
#familiesView #img_12
{
    animation: none;
    margin: 0;
    position: relative;
    width: 35vw;
    padding: 0;
    padding-bottom: 15vw;
}
#familiesView #display_12
{
    position: absolute;
    animation: none;
    top: 40%;
    left: 0;
    transform: translate(-200%, -50%);
    z-index: 3;
    font-family: Muli;

}
#familiesView #display_12 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color:#AE6B51;
    letter-spacing: 1vw;
    margin-right: -2vw;
    text-align: left;   
}
#familiesView #display_8
{
    position: absolute;
    animation: none;
    bottom: 7vw !important;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;
}
#familiesView #display_8 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 1.5vw;
    margin-right: -2vw;
    text-align: left;   
}
#familiesView #display_9
{
    position: absolute;
    animation: none;
    bottom: 4vw !important;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;
}
#familiesView #display_9 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 1.5vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 0.5vw;
    margin-right: -2vw;

    text-align: left;
    color: #707070;   
}

@media (max-width: 767px)
{
    /*
    .sidebar{
    position: static !important;
    padding-bottom: 5vw;
    }
    */
    #familiesView .desktop
  {
      display: none;
  }
    #familiesView .mobile
    {
        display: block;
    }
    #familiesView .sectionWrapper
    {
        width: 90%;
    }
    #familiesView #sectionWrapper_3
    {
        text-align: left;
        padding-top: 15vw;
    }
    #familiesView #display_2
    {
        right: auto;
        left: -14%;
    }
    #familiesView #labelYou
    {
        position: absolute;
        left: -5%;
        font-size: 10vw;
        writing-mode: vertical-rl;
        text-orientation: upright;
        transform: translate(0%,-25%);
        color: #80A6B3;
        font-weight: bold;
    }
    #familiesView #labelMost
    {
        position: absolute;
        right: 0;
        top: 0;
        font-size: 10vw;
        writing-mode: vertical-rl;
        text-orientation: upright;
        transform: translate(110%,0%);
        color: rgba(201,181,126,1);
        font-weight: bold;
        font-family: Muli;
    }
    #familiesView #display_2 .title
    {
        font-size: 10vw !important;
        letter-spacing: 3.2vw;
        transform: translate(0, -100%);
    }
    #familiesView #display_4 .title
    {
       padding-left: 5vw;
    }
    #familiesView #display_4 .title > div
    {
        padding: 2vw;
         text-align: center;
    }
    #familiesView #sectionWrapper_1
    {
        padding-top: 35vw;
    }
    #familiesView #imageWrapper_1
    {
        width: 100%;
    }
    #familiesView #imageWrapper_3
    {
        animation: none;
        margin: 0;
        position: relative;
        width: 70vw;
    }
    
    #familiesView #sectionWrapper_2
    {
        text-align: right;
        padding-top: 15vw;
    }
    #familiesView #sectionWrapper_4
    {
        text-align: right;
        padding: 0;
    }
    #familiesView #sectionWrapper_5
    {
        text-align: left;
        padding-top: 9vw;
    }
    #familiesView #sectionWrapper_6, #familiesView #sectionWrapper_7, #familiesView #sectionWrapper_8, #familiesView #sectionWrapper_10,
    #familiesView #sectionWrapper_11
    {
        text-align: center;
    }
    #familiesView #sectionWrapper_6
    {
        padding: 0;
        padding-top: 10vw;
    }
    #familiesView #display_4
    {
        left: 0;
        right: auto;
        transform: none;
    }
    #familiesView #imageWrapper_4
    {
        width: 60vw;
    }
    #familiesView #imageWrapper_6
    {
        width: 90%;
    }
    #familiesView #imageWrapper_7
    {
        width: 90%;
    }
    #familiesView #imageWrapper_8, #familiesView #imageWrapper_9, #familiesView #imageWrapper_10, #familiesView #imageWrapper_11
    {
        width: 90%;
    }
    #familiesView #img_12
    {
        display: none;
    }
    #familiesView #display_1
    {
        right: 0;
        top: 0;
        left: auto;
        transform: translate(0, -100%);
        padding-bottom: 6vw;
    }
    #familiesView #display_3
    {
        top: 0;
        left: 50%;
        transform: translate(-50%, -120%);
    }
    #familiesView #display_3 .title
    {
        font-size: 10vw !important;
        font-weight: bold;
    }
    #familiesView #display_5
    {
        top: 0;
        left: 0%;
        transform: translate(0%, -120%);
    }
    #familiesView #display_5 .title
    {
        font-size: 7vw !important;
    }
    #familiesView #display_6
    {
        top: 0;
        right: 0;
        left: auto;
        transform: translate(0%, -100%);
    }
    #familiesView #display_6 .title
    {
        font-size: 10vw !important;
    }
    #familiesView #display_1 .title
    {
        font-size: 10vw !important;
        letter-spacing: 5vw;
        text-align: right;
    }
    #familiesView #img_11
    {
        padding-bottom: 17vw;
    }
    #familiesView #display_8 .title
    {
        font-size: 5vw !important;
    }
    #familiesView #display_9
    {
        bottom: 2.5vw !important;
    }
     #familiesView #display_9 .title
    {
        font-size: 3vw !important;
    }
}

</style>