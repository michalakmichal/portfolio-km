<template>
<div style="
position: absolute;
top: 0;
background: black;
width: 100%;
height: 100%;
">
    <div class="view" id="peopleView">
    <back-to-top> </back-to-top>
    <top-menu> </top-menu>
     <div class="sectionWrapper" id="sectionWrapper_1">
            <div class="imageWrapper" id="imageWrapper_1"> 
                <img src="/img/19.png" id="img_1"/>
                <div id="display_1"> 
                     <div class="title">  Every </div>
                </div>
            </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_2">
            <div class="imageWrapper" id="imageWrapper_2"> 
                <img src="/img/20.png" id="img_2"/>
                <div id="display_2"> 
                     <div class="title">  photoshoot </div>
                </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_1">
            <div class="imageWrapper" id="imageWrapper_3"> 
                <img src="/img/21.png" id="img_3"/>
                <div id="display_3"> 
                     <div class="title">  is a
                      </br> <span> STORY  </span>
                      </div>
                </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_4">
            <div class="imageWrapper" id="imageWrapper_4"> 
                <img src="/img/22.png" id="img_4"/>
                <div id="display_4"> 
                     <div class="title">  to be told
                      </div>
                </div>
            </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_1">
            <div class="imageWrapper" id="imageWrapper_5"> 
                <img src="/img/23.png" id="img_5"/>
                <div id="display_5"> 
                     <div class="title">  without
                      </div>
                </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_6">
            <div class="imageWrapper" id="imageWrapper_6"> 
                <img src="/img/24.png" id="img_6"/>
                <div id="display_6"> 
                     <div class="title">  WORDS
                      </div>
                </div>
            </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_1">
            <div class="imageWrapper" id="imageWrapper_7"> 
                <img src="/img/25.png" id="img_7"/>
                <div id="display_7"> 
                     <div class="title">  
                    <div> What's </div>
                     <div style="color: #086C7B"> your </div>
                     <div> story? </div>
                      </div>
                </div>
            </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_8">
                <div class="imageWrapper" id="imageWrapper_8"> 
                     <img src="/img/26.png" id="img_8"/>
                </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_9">
                <div class="imageWrapper" id="imageWrapper_9"> 
                     <img src="/img/27.png" id="img_9"/>
                </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_1">
                <div class="imageWrapper" id="imageWrapper_10"> 
                     <img src="/img/28.png" id="img_10"/>
                </div>
     </div>
     <div class="sectionWrapper" id="sectionWrapper_11">
                <div class="imageWrapper" id="imageWrapper_11"> 
                     <img src="/img/29.png" id="img_11"/>
                </div>
     </div>
      <div class="sectionWrapper" id="sectionWrapper_8">
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
        },
              beforeRouteEnter(to, from, next) {
        next(vm => {
            vm.prevRoute = from;
        })}
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


.title a
{
     text-decoration: none !important;
     color: inherit !important;
}
.sectionWrapper
{
    width: 75%;
    margin: auto;
}
#sectionWrapper_1
{
    text-align: right;
}
#sectionWrapper_8
{
    text-align: center;
}
#peopleView
{
    background: black;
}
.imageWrapper {
     display: inline-block;
     position: relative;
}
#peopleView #img_1
{
    animation: none;
    margin: 0;
    position: relative;
    width: 38vw;
}
#peopleView #display_1
{
    position: absolute;
    animation: none;
    top: 50%;
    left: -7%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;

}
#peopleView #display_1 .title
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

#peopleView #img_2
{
    animation: none;
    margin: 0;
    position: relative;
    width: 45vw;
    left: -15%;
    padding: 5vw 0;

}
#peopleView #display_2
{
    position: absolute;
    animation: none;
    top: 50%;
    left: 120%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;

}
#peopleView #display_2 .title
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
#peopleView #img_3
{
    animation: none;
    margin: 0;
    position: relative;
    width: 38vw;

}
#peopleView #display_3
{
    position: absolute;
    animation: none;
    top: 50%;
    left: -5%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;

}
#peopleView #display_3 .title
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
#peopleView #display_3 span
{
    letter-spacing: 3vw; 
}
#peopleView #img_4
{
    animation: none;
    margin: 0;
    position: relative;
    width: 40vw;
    padding: 5vw 0;
    padding-bottom: 4vw;

}
#peopleView #display_4
{
    position: absolute;
    animation: none;
    top: 50%;
    right: -5%;
    transform: translateX(100%);
    z-index: 3;
    font-family: Muli;

}
#peopleView #display_4 .title
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
#peopleView #img_5
{
    animation: none;
    margin: 0;
    position: relative;
    width: 38vw;
    padding: 0;
    padding-bottom: 5vw;
    right: 25%;

}
#peopleView #display_5
{
    position: absolute;
    animation: none;
    top: 50%;
    left: 0%;
    transform: translateX(-124%);
    z-index: 3;
    font-family: Muli;

}
#peopleView #display_5 .title
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
#peopleView #img_6
{
    animation: none;
    margin: 0;
    position: relative;
    width: 32vw;
    padding: 0;
    padding-bottom: 5vw;
    left: 30%;
}
#peopleView #display_6
{
    position: absolute;
    animation: none;
    top: 40%;
    left: 82%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;

}
#peopleView #display_6 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw !important;
    font-size: 45px;
    color: rgba(201,181,126,1);
    letter-spacing: 4.1vw;
    margin-right: -2vw;
    opacity: 0.749;
    text-align: left;   
}
#peopleView #img_7
{
    animation: none;
    margin: 0;
    position: relative;
    width: 43vw;
    padding: 0;
    padding-bottom: 5vw;
}
#peopleView #display_7
{
    position: absolute;
    animation: none;
    top: 40%;
    left: 0;
    transform: translate(-200%, -50%);
    z-index: 3;
    font-family: Muli;

}
#peopleView #display_7 .title
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
#peopleView #display_7 .title div
{
    padding: 2.5vw 0;
}
#peopleView #img_8
{
    animation: none;
    margin: 0;
    position: relative;
    width: 35vw;
    padding: 0;
    padding-bottom: 5vw;
}

#peopleView #img_9
{
    animation: none;
    margin: 0;
    position: relative;
    width: 54.5vw;
    padding: 0;
    padding-bottom: 5vw;
}

#peopleView #img_10
{
    animation: none;
    margin: 0;
    position: relative;
    width: 60%;;
    padding: 0;
    padding-bottom: 5vw;
}
#peopleView #display_10
{
    position: absolute;
    animation: none;
    top: 40%;
    left: 0;
    transform: translate(-200%, -50%);
    z-index: 3;
    font-family: Muli;

}
#peopleView #display_10 .title
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
#peopleView #img_11
{
    animation: none;
    margin: 0;
    position: relative;
    width: 35vw;
    padding: 0;
    padding-bottom: 5vw;
}
#peopleView #display_11
{
    position: absolute;
    animation: none;
    top: 40%;
    left: 0;
    transform: translate(-200%, -50%);
    z-index: 3;
    font-family: Muli;

}
#peopleView #display_11 .title
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
#peopleView #img_12
{
    animation: none;
    margin: 0;
    position: relative;
    width: 35vw;
    padding: 0;
    padding-bottom: 15vw;
}
#peopleView #display_12
{
    position: absolute;
    animation: none;
    top: 40%;
    left: 0;
    transform: translate(-200%, -50%);
    z-index: 3;
    font-family: Muli;

}
#peopleView #display_12 .title
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
#peopleView #display_8
{
    position: absolute;
    animation: none;
    bottom: 7vw !important;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;
}
#peopleView #display_8 .title
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
#peopleView #display_9
{
    position: absolute;
    animation: none;
    bottom: 4vw !important;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    font-family: Muli;
}
#peopleView #display_9 .title
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


</style>