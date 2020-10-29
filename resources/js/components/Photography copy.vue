<template>
<transition name="slide-up" mode="out-in">
<div style="
position: absolute;
width: 100%;
height: 100%;
top: 0;
background:  #E6E6E6;
">
    <div class="view" id="photographyView">
            <div class="sectionWrapper" id="sectionWrapper_1">
                <div class="imageWrapper" id="imageWrapper_1"> 
                    <img src="/img/4.png" id="img_1"/>
                    <div id="display_1"> 
                        <div class="title">   <router-link :to="{ name: 'parties' }"> Parties </router-link> </div>
                        <div class="footnote"> Sneak into Kraków's club scene </div> 
                    </div>
                </div>
            </div>
            <div class="sectionWrapper" id="sectionWrapper_2">
                <div class="imageWrapper" id="imageWrapper_2"> 
                    <img src="/img/5.png" id="img_2"/>
                    <div id="display_2"> 
                        <div class="title"> <router-link :to="{ name: 'people' }"> People </router-link>  </div>
                        <div class="footnote"> Meet my friends and business partners </div> 
                    </div>
                </div>
            </div>
             <div class="sectionWrapper" id="sectionWrapper_3">
                <div class="imageWrapper" id="imageWrapper_3"> 
                    <img src="/img/6.png" id="img_3"/>
                    <div id="display_3"> 
                        <div class="title"> <router-link :to="{ name: 'families' }"> Families </router-link>  </div>
                        <div class="footnote"> Intimate life chapters </div> 
                    </div>
                </div>
            </div>
             <div class="sectionWrapper" id="sectionWrapper_4">
                <div class="imageWrapper" id="imageWrapper_4"> 
                    <img src="/img/42.png" id="img_4"/>
                    <div id="display_4"> 
                        <div class="title"> <router-link :to="{ name: 'commercial' }"> Commercial </router-link>  </div>
                        <div class="footnote"> Modern brands promo </div> 
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
.view
{
    /*position: absolute; ?? */
    position: relative;
    top: 0;
    min-height: 100vh;
    width: 100%;
}
.collection{
    /*position: absolute;*/
    position: relative;
    width: 100%;
}
.sectionWrapper{
    height:100%;/* IMPROTANT FOR RESPONSIVE 100% HEIGHT */ 
    background: #E6E6E6;
    padding:0 5vw;
}
#photographyView
{
     background: #E6E6E6;
     box-sizing: border-box;
     height:100%;
     padding: 5vw 0;
}
#photographyView .imageWrapper{
    display: inline-block;
    position: relative;
    left: 0;
}
#photographyView #img_1
{
    animation: none;
    margin: 0;
    position: relative;
    width: 30vw;
}
#photographyView #img_2
{
    animation: none;
    margin: 0;
    position: relative;
    width: 30vw;
}
#photographyView #img_3
{
    animation: none;
    margin: 0;
    position: relative;
    width: 50vw;
}
#photographyView #img_4
{
    animation: none;
    margin: 0;
    position: relative;
    width: 32vw;
    left: 30%;
}
#photographyView #display_1
{
    position: absolute;
    animation: none;
    top: 50%;
    right: 0;
    transform: translate(calc(77%), -50%);
    z-index: 3;
    font-family: Muli;

}
#photographyView #display_1 .title
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
#photographyView #display_1 .footnote
{
    text-align: right;
    font-weight: lighter;
    font-size: 0.8em;
    color: rgba(112,112,112,1);
    letter-spacing: 0.8px;
}
#photographyView #display_2
{
    position: absolute;
    animation: none;
    top: 50%;
    left: 0;
    transform: translate(calc(-56%), -50%);
    z-index: 3;
    font-family: Muli;

}
#photographyView #display_2 .title
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
#photographyView #display_2 .footnote
{
    text-align: left;
    font-weight: lighter;
    font-size: 0.8em;
    color: rgba(112,112,112,1);
    letter-spacing: 0.8px;
}
#photographyView #display_3
{
    position: absolute;
    animation: none;
    top: 50%;
    left: 0;
    transform: translate(calc(-65%), -50%);
    z-index: 3;
    font-family: Muli;

}
#photographyView #display_3 .title
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
#photographyView #display_3 .footnote
{
    text-align: left;
    font-weight: lighter;
    font-size: 0.8em;
    color: rgba(112,112,112,1);
    letter-spacing: 0.8px;
}
#photographyView #display_4
{
    position: absolute;
    animation: none;
    top: 50%;
    left: 0;
    transform: translate(calc(-40%), -50%);
    z-index: 3;
    font-family: Muli;

}
#photographyView #display_4 .title
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
#photographyView #display_4 .footnote
{
    text-align: left;
    font-weight: lighter;
    font-size: 0.8em;
    color: rgba(112,112,112,1);
    letter-spacing: 0.8px;
}
#sectionWrapper_1{
    text-align: center;
}
#imageWrapper_1
{
    transform: translateX(-50%);
}
#sectionWrapper_2{
    text-align: right;
    padding-bottom: 5vw;
    padding-right: 18vw;
}
#sectionWrapper_3{
    text-align: right;
    padding-bottom: 5vw;
    padding-top: 10vw;
    padding-right: 15vw;
}
#sectionWrapper_4{
    text-align: center;
    padding: 5vw;
    padding-top: 0;
}
</style>