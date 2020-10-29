<template>
    <div id="aboutMeView">
    <div id="exampleWrapper">
        <div class="leftSide">
            <div id="labelHello"> Hello! </div>
            <div id="profileImgWrapper"> 
            <img src="/img/circle.svg" id="circle"/>
                <img  @click="animate()" id="profileImgMobile" src="/img/60.png" />
                </div>
            <div id="labelThank"> Thank you for checking my website! </div>
            <div style="width: 100%">
            <div class="text"> My name is <b> Kacper Michalak </b> and I am an visual artsit living in <b>Kraków</b>, Poland. </div> 
            </div>
            <span class="desktop"> My main areas of interest are: </span>
            <div id="labelStrengths" class="mobile"> My strengths </div>
        </div>
        <div id="interestBox"> 
            <div class="label"> 
                <img class="icon" src="/img/photography.svg"/> 
                <span> Photography </span>
            </div>
            <div class="label">  
                <img class="icon" src="/img/adobephotoshop.svg"/> 
                <span> Graphic design </span>
            </div>
            <div class="label">  
                <img class="icon" src="/img/adobexd.svg"/> 
                <span> UI/UX design </span>
            </div>
            <img id="profileImg" src="/img/30.png" />
        </div>
          <div class="leftSide">
                Over 10 years of experience in visual design field helped me to develop my specific style
                which is firmly embedded in a strong understanding of colour theory, composition rules, and strong ethical
                attitude throughout whole designing processs. 
                <span class="desktop">I feel pretty confident in every field of photography and
                Web/mobile/poster design. Check my other website dedicated for UI/UX design and web development.
                </span>
                <div class="mobile" id="labelAreasOfInterest"> Areas of </br> interest   </div>
                <div id="mobileInterests" class="mobile">
                <div> Retouch </div>
                <div> Art projects </div>
                <div> Fashion photography</div>
                <div> Portrait photography </div>
                <div> Events - artistic reportage </div>
                <div> Branding, commercials, products </div>
                </div>
                    <div id="labelByTheWay" class="mobile"> By the way </div>
                    <div id="labelByTheWayFootnote" class="mobile"> I desgined this website </div>
                    <div class="align-right mobile"> </br>
                        I am also a qualified psychologist passionate about UI/UX design. </br> </br>
                        Check my other website </br>
                        dedicated for web design. </br> </br>
                        We can create  </br>
                        something amazing  </br>
                        together! </br>
                    </div>
        </div>
        </div>
        <div id="labelBottom"> Feel more than welcomed to <br class="mobile"/> <a href="/contact" id="labelReachMe"> reach me </a> </div>
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
            animate(event)
            {
                if(!document.getElementById('circle').classList.contains('animateProfileCircleIn'))
                {
                    document.getElementById('circle').classList.remove('animateProfileCircleOut');
                    document.getElementById('circle').classList.add('animateProfileCircleIn');
                    document.getElementById('labelHello').style.opacity = "1";
                }
                else
                {
                    document.getElementById('circle').classList.remove('animateProfileCircleIn');
                    document.getElementById('circle').classList.add('animateProfileCircleOut');
                    document.getElementById('labelHello').style.opacity = "0";
                }
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
.align-right
{
    text-align: right;
}
@keyframes mymove {
  from 
  {
      
  }
  to{
      top: 200px;
    }
}
.animateProfileCircleIn
{
    animation: 1s profileCircleAnimationIn ease-in forwards;
}
.animateProfileCircleOut
{
    animation: 1s profileCircleAnimationOut ease-in forwards;
}
@keyframes profileCircleAnimationIn {
  from 
  {
    transform: translate(-4.5%, -6%) rotate(90deg);
  }
  to{
      transform: translate(-4.5%, -6%) rotate(0deg);
    }
}
@keyframes profileCircleAnimationOut {
  from 
  {
    transform: translate(-4.5%, -6%) rotate(0deg);
  }
  to{
      transform: translate(-4.5%, -6%) rotate(90deg);
    }
}
#aboutMeView
{
    position: absolute;
    left: 0;
    top: 0;
    box-sizing: border-box;
    background:  #E6E6E6;
    width: 100%;
    padding: 0 10vw;
    display: flex; 
    align-items: stretch; 
    flex-flow: column;
    height: 100%;
    /*min-height: 100vh;*/
}
#aboutMeView .leftSide
{
    width: 50%;
    word-break: break-word;
    white-space: normal;
    font-size: 1.2vw;
    text-align: left;
    font-weight: lighter;
}
#aboutMeView #labelHello
{
    color: #066877;
    font-size: 3.5vw;
    font-weight: bold;
    font-family: Muli;
    letter-spacing: 1vw;
}
#aboutMeView #labelThank
{
    color: rgba(196,194,194,1);
    font-weight: bold;
    font-size: 2vw;
    padding: 0.5vw 0 1vw 0;
}
#interestBox
{
    background: #1B262C;
    width: 100vw;
    margin: 1vw 0 1vw -10vw;
    padding: 1vw 5vw;
    display: flex;
    box-sizing: border-box;
}
#interestBox .label
{
    color: #0698AF;
    font-size: 1.4vw;
    display: flex;
    align-items: center;
    padding-left: 5vw;
}
#interestBox .icon
{
    width: 2.5vw;
}
#interestBox .label span
{
    padding-left: 1vw;
}
.leftSide
{
    line-height: 2vw;
    word-spacing: 0.75vw;
}
#exampleWrapper
{
    flex-grow: 1;
}
#aboutMeView #labelBottom
{
    text-align: center;
    width: 100%;
    padding: 1vw;
    font-size: 2vw;
    font-family: Muli;
    font-weight: bold;
    color: rgba(196,194,194,1);
}
#aboutMeView #labelReachMe
{
    color: rgba(201,181,126,1);
    text-decoration: none;
}
#aboutMeView #profileImg{
    width: 20vw;
    position: absolute;
    right: 0;
    transform: translate(-10vw, -50%);
}
#aboutMeView #profileImgWrapper
{
    display: none;
    position: relative;
}
.mobile
{
    display: none;
}
@media (max-width:767px)
{
     #aboutMeView #labelBottom
    {
        padding-top: 7vw;
        padding-bottom: 4vw;
        font-size: 5vw;
        word-break: break-word;
        white-space: initial;
    }
    #aboutMeView #labelReachMe
    {
        color: rgba(6,104,119,1);
    }
    #aboutMeView 
    {
        font-family: Muli;
        display: block;
    }
    #aboutMeView .leftSide
    {
        width: 100%;
        word-break: break-word;
        white-space: normal;
        text-align: left;
        font-weight: lighter;
    }
    
    #aboutMeView #labelHello
    {
        text-align: center;
        font-size: 6vw;
        padding: 2vw 0;
        letter-spacing: 2vw;
        margin-right: -2vw;
        opacity: 0;
        transition: all 2s;
    }
    #aboutMeView #labelThank
    {
        display: none;
    }
    #aboutMeView #profileImg
    {
        display: none;
    }
    #aboutMeView #profileImgWrapper
    {
        text-align: center;
        display: block;
    }
    #aboutMeView #profileImgMobile
    {
        width: 50%;
        border-radius: 50%;
        position: relative;
        z-index: 2;
        cursor: pointer;
          -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -o-user-select: none;
    }
    .desktop
    {
        display: none;
    }
    #aboutMeView .leftSide
    {
        font-size: 4vw;
        line-height: 6vw;
        word-spacing: 0.75vw;
    }
    .mobile
    {
        display: inherit;
    }
    #aboutMeView #labelStrengths
    {
        width: 100%;
        text-align: center;
        padding: 3vw 0;
        font-size: 3.6vw;
        color: rgba(6,104,119,1);
        font-weight: bold;
        letter-spacing: 1vw;
        margin-right: -1vw;
    }
    #aboutMeView #interestBox
    {
        width: 70%;
        margin: auto;
        display: flex;
        flex-flow: column;
        border-radius: 15vw;
        padding: 4vw 3vw;
        margin-bottom: 4vw;
    }
    #interestBox .label
    {
        font-size: 4vw;
        display: flex;
        align-items: center;
        padding: 4vw 0;
        padding-left: 5vw;
    }
    #interestBox .icon
    {
        width: 5vw;
    }
    #interestBox .label span
    {
        padding-left: 2vw;
    }
    #aboutMeView #labelAreasOfInterest
    {
        color: rgba(6,104,119,1);
        font-size: 7vw;
        font-weight: 500;
        padding: 4vw 0;
        padding-bottom: 0;
        letter-spacing: 1.5vw;
        line-height: 8vw;
    }
    #aboutMeView #mobileInterests
    {
        font-style: italic;
        font-weight: 800;
        font-family: 'Roboto';
        padding: 2vw 0;
    }
    #aboutMeView #labelByTheWay, #labelByTheWayFootnote
    {
        text-align: right;
    }
    #aboutMeView #labelByTheWay
    {
        color: rgba(6,104,119,1);
        font-weight: bold;
        font-size: 6vw;
        padding-top: 4vw;
    }
    #aboutMeView #labelByTheWayFootnote
    {
        color: rgba(196,194,194,1);
        font-size: 3.5vw;
        font-weight: bold;
    }
}
#aboutMeView #circle
{
    width: 55%;
    height: 105%;
    position: absolute;
    transform: translate(-4.5%, -6%) rotate(90deg);
    z-index: 1;
}
</style>