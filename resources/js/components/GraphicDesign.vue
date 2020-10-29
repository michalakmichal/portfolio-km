<template>
<div class="view" id="graphicDesignView">
    <div class="sectionWrapper" id="sectionWrapper_1">
        <div id="topLabel">Here you can see examples of my work related to branding design. </br>
            <span id="checkOtherWebsLabel"> Check my other website </span> for UI/UX design projects created </br>collaboratively with a Web developer. </br>
            <div class="mobileBreak"> </div>I am also a retoucher.  <a href="#retouchSectionTopLabel"  id="retouchLabel"> Click here  </a> to check my  retouch examples. 
        </div>
            <div class="imageWrapper" id="imageWrapper_1"> 
                <img src="/img/graphic_design/1.png" id="img_1"/>
            </div>
    </div>
    <div class="sectionWrapper" id="sectionWrapper_2">
            <div class="imageWrapper" id="imageWrapper_2"> 
                     <img src="/img/graphic_design/2.png" id="img_2"/>
            </div>
    </div>
    <div class="sectionWrapper" id="sectionWrapper_3">
        <div class="imageWrapper" id="imageWrapper_3"> 
             <img src="/img/graphic_design/3.png" id="img_3"/>
        </div>
    </div>
    <div class="sectionWrapper" id="sectionWrapper_4">
        <div class="imageWrapper" id="imageWrapper_4"> 
             <img src="/img/graphic_design/4.png" id="img_4"/>
        </div>
    </div>
    <div class="sectionWrapper" id="sectionWrapper_5">
        <div class="imageWrapper" id="imageWrapper_5"> 
             <img src="/img/graphic_design/5.png" id="img_5"/>
        </div>
    </div>
    <div class="sectionWrapper" id="sectionWrapper_6">
        <div class="imageWrapper" id="imageWrapper_6"> 
             <img src="/img/graphic_design/6.png" id="img_6"/>
        </div>
    </div>
    <div class="sectionWrapper" id="sectionWrapper_7">
        <div class="imageWrapper" id="imageWrapper_7"> 
             <img src="/img/graphic_design/7.png" id="img_7"/>
        </div>
    </div>
    <div id="retouchSection">
        <div id="retouchSectionTopLabel"> Retouch </div>
        <div id="retouchSectionBottomLabel"> Click on the photo to see before version</div>
    </div>
    <div class="sectionWrapper" id="sectionWrapper_8">
        <div class="imageWrapper" id="imageWrapper_8"> 
             <img  @click="toggleRetouch($event)" src="/img/retouch/1/before.png" class="img_8"/>
             <img  @click="toggleRetouch($event)" src="/img/retouch/1/after.png" class="img_8 img_after"/>
        </div>
    </div>
    <div class="sectionWrapper" id="sectionWrapper_9">
        <div class="imageWrapper" id="imageWrapper_9"> 
             <img  @click="toggleRetouch($event)" src="/img/retouch/2/before.png" class="img_9"/>
             <img  @click="toggleRetouch($event)" src="/img/retouch/2/after.png" class="img_9 img_after"/>
        </div>
    </div>
    <div class="sectionWrapper" id="sectionWrapper_10">
        <div class="imageWrapper" id="imageWrapper_10"> 
             <img  @click="toggleRetouch($event)" src="/img/retouch/3/before.png" class="img_10"/>
             <img  @click="toggleRetouch($event)" src="/img/retouch/3/after.png" class="img_10 img_after"/>
        </div>
    </div>
    <div class="sectionWrapper" id="sectionWrapper_11">
        <div class="imageWrapper" id="imageWrapper_11"> 
             <img  @click="toggleRetouch($event)" src="/img/retouch/4/before.png" class="img_11"/>
             <img  @click="toggleRetouch($event)" src="/img/retouch/4/after.png" class="img_11 img_after"/>
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
        methods:{
             toggleRetouch(event, id)
             {
                 event.target.classList.toggle('transparent');
               /* if(event.target.getAttribute('src').includes('before'))
                {
                    
                }
                else event.target.setAttribute('src','/img/retouch/'+id+'/'+retouch+'.png');*/
             },
             /*
            beforeEnter(el) 
            {
                alert("DONE GRAPHIC DESIGN");
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

.transparent{
    opacity: 0;
}

.sectionWrapper
{
    width: 75%;
    margin: auto;
}
#graphicDesignView
{
    background: black;
    padding-top: 5vw;
    position: absolute;
    width: 100%;
    min-height: 100vh;
    top: 0;
}
.imageWrapper {
     display: inline-block;
     position: relative;
}
#graphicDesignView #imageWrapper_1, #graphicDesignView #imageWrapper_2, #graphicDesignView #imageWrapper_3, #imageWrapper_5
, #graphicDesignView #imageWrapper_5 , #graphicDesignView #imageWrapper_6
{
    width: 33vw;
}
#graphicDesignView #imageWrapper_8, #graphicDesignView #imageWrapper_9, #graphicDesignView #imageWrapper_10,
#graphicDesignView #imageWrapper_11
{
    position: relative;
    width: 34vw;
}
#graphicDesignView #imageWrapper_4
{
    width:24vw;
}
#graphicDesignView #imageWrapper_7
{
    width:50vw;
}
#graphicDesignView #img_1
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
}
#graphicDesignView #sectionWrapper_1
{
    text-align: right;
    padding-bottom: 5vw;

}
#graphicDesignView #img_2
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
}
#graphicDesignView #sectionWrapper_2
{
    text-align: left;
    padding-bottom: 5vw;
}
#graphicDesignView #img_3
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
}
#graphicDesignView #sectionWrapper_3
{
    text-align: center;
    padding-bottom: 5vw;
}
#graphicDesignView #img_4
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
}
#graphicDesignView #sectionWrapper_4
{
    text-align: right;
    padding-bottom: 5vw;
}
#graphicDesignView #img_5
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
}
#graphicDesignView #sectionWrapper_5
{
    text-align: left;
    padding-bottom: 5vw;
}
#graphicDesignView #img_6
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
}
#graphicDesignView #sectionWrapper_6
{
    text-align: right;
    padding-bottom: 5vw;
}
#graphicDesignView #img_7
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
}
#graphicDesignView #sectionWrapper_7
{
    text-align: center;
    padding-bottom: 5vw;
}
#graphicDesignView .img_8, #graphicDesignView .img_9, #graphicDesignView .img_10, #graphicDesignView .img_11
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
}
#graphicDesignView #sectionWrapper_8, #graphicDesignView #sectionWrapper_9, #graphicDesignView #sectionWrapper_10,
#graphicDesignView #sectionWrapper_11
{
    text-align: center;
    padding-bottom: 5vw;
    cursor: pointer;
}
#graphicDesignView #imageWrapper_8
{
    position: relative;
}
#graphicDesignView .img_after
{
    position: absolute;
    left: 0;
    transition: opacity 0.2s ease-in-out;
}
#graphicDesignView #topLabel
{
    word-break: break-word;
    white-space: normal;
    text-align: left;
    font-weight: lighter;
    font-size: 1.2vw;
    color: rgba(175,173,173,1);
    line-height: 1.6vw;
    padding-bottom: 1vw;
}
#checkOtherWebsLabel, #retouchLabel
{
    color: rgba(201,181,126,1);
    text-decoration: none;
}

#retouchSection{
    text-align: center;
    padding-bottom: 5vw;
}
#retouchSectionTopLabel
{
    color: rgba(255,255,255,1);
    opacity: 0.667;
    font-size: 2.8vw;
    font-weight: bold;
    letter-spacing: 0.9vw;
}
#retouchSectionBottomLabel
{
    color: rgba(175,173,173,1);
    padding-top: 1vw;
    font-size: 1.5vw;
}
@media (max-width: 767px)
{
    .mobileBreak
    {
        height: 5vw;
    }
    #graphicDesignView #topLabel
    {
        font-size: 3.4vw !important;
        line-height: initial;
        padding: 5vw 0;
        color: white;
        font-weight: bold;
        letter-spacing: 0.5vw;
        word-spacing: 1vw;
        line-height: 5vw;
    }
    #graphicDesignView .imageWrapper
    {
        width: 100% !important;
    }
     #graphicDesignView img
    {
        width: 100%;
    }
    #retouchSectionTopLabel
    {
        font-size: 5vw;
    }
    #retouchSectionBottomLabel
    {
        font-size: 4vw;
    }
}
</style>