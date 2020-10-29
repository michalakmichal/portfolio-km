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
                     <div class="title"> Let me </div>
                </div>
            </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_2">
            <div class="imageWrapper" id="imageWrapper_2"> 
                <img src="/img/32.png" id="img_2"/>
                <div id="display_2"> 
                     <div class="title">  accompany you </div>
                </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_1">
            <div class="imageWrapper" id="imageWrapper_3"> 
                <img src="/img/33.png" id="img_3"/>
                <div id="display_3"> 
                     <div class="title">
                     during
                      </div>
                </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_4">
            <div class="imageWrapper" id="imageWrapper_4"> 
                <img src="/img/34.png" id="img_4"/>
                <div id="display_4"> 
                      <div class="title">  
                    <div> most </div>
                     <div style="color: #086C7B"> intimate </div>
                     <div> moments </div>
                      </div>
                </div>
            </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_1">
            <div class="imageWrapper" id="imageWrapper_5"> 
                <img src="/img/35.png" id="img_5"/>
                <div id="display_5"> 
                     <div class="title">  of your
                      </div>
                </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_1">
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
#familiesView #sectionWrapper_7
{
    text-align: left;
}
#familiesView #sectionWrapper_8
{
    text-align: right;
}
#familiesView #sectionWrapper_9
{
    text-align: center;
}
#familiesView #sectionWrapper_10
{
    text-align: left;
}
#familiesView #sectionWrapper_11
{
    text-align: right;
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
#familiesView #imageWrapper_5
{
    padding: 4.3vw 0;
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
    opacity: 0.749;
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
    opacity: 0.749;
    text-align: left;   
}
#familiesView #img_3
{
    animation: none;
    margin: 0;
    position: relative;
    width: 38vw;

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
    opacity: 0.749;
    text-align: left;   
}
#familiesView #display_3 span
{
    letter-spacing: 3vw; 
}
#familiesView #img_4
{
    animation: none;
    margin: 0;
    position: relative;
    width: 40vw;
    padding: 5vw 0;
    padding-bottom: 4vw;

}
#familiesView #display_4
{
    position: absolute;
    animation: none;
    top: 50%;
    right: -5%;
    transform: translateX(100%);
    z-index: 3;
    font-family: Muli;

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
    opacity: 0.749;
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
    transform: translate(-50%, 100%);
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
    opacity: 0.749;
    text-align: left;   
}
#familiesView #img_6
{
    animation: none;
    margin: 0;
    position: relative;
    width: 32vw;
    padding: 0;
    padding-bottom: 5vw;
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
    opacity: 0.749;
    text-align: left;   
}
#familiesView #img_7
{
    animation: none;
    margin: 0;
    position: relative;
    width: 50vw;
    padding: 0;
    padding-bottom: 5vw;
}
#familiesView #img_8
{
    animation: none;
    margin: 0;
    position: relative;
    width: 35vw;
    padding: 0;
    padding-bottom: 5vw;
}

#familiesView #img_9
{
    animation: none;
    margin: 0;
    position: relative;
    width: 54.5vw;
    padding: 0;
    padding-bottom: 5vw;
}

#familiesView #img_10
{
    animation: none;
    margin: 0;
    position: relative;
    width: 60%;;
    padding: 0;
    padding-bottom: 5vw;
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
    opacity: 0.749;
    text-align: left;   
}
#familiesView #img_11
{
    animation: none;
    margin: 0;
    position: relative;
    width: 60vw;
    padding: 0;
    padding-bottom: 5vw;
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
    opacity: 0.749;
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
    opacity: 0.749;
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
    opacity: 0.749;
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
    opacity: 0.749;
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
    #familiesView #display_4 .title
    {
       padding-left: 5vw;
    }
    #familiesView #display_4 .title > div
    {
        padding: 2vw;
         text-align: center;
    }
}

</style>