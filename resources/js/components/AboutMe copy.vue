<template>
<transition name="slide-up">
    <div id="aboutMeView">
    <div id="exampleWrapper">
        <div class="leftSide">
            <div id="labelHello"> Hello! </div>
            <div id="labelThank"> Thank you for checking my website! </div>
            <span> My name is <b> Kacper Michalak </b> and I am an visual artsit living in <b>Kraków</b>, Poland. 
            My main areas of interest are: </span>
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
            <img id="profileImg" src="/img/30.png">
        </div>
          <div class="leftSide">
            <span> Over 10 years of experience in visual design field helped me to develop my specific style
            which is firmly embedded in a strong understanding of colour theory, composition rules, and strong ethical
            attitude throughout whole designing processs. I feel pretty confident in every field of photography and
            Web/mobile/poster design. Check my other website dedicated for UI/UX design and web development. </span>
        </div>
        </div>
        <div id="labelBottom"> Feel more than welcomed to <span id="labelReachMe"> reach me </span> </div>
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
#aboutMeView
{
    position: absolute;
    box-sizing: border-box;
    background:  #E6E6E6;
    height:100%;
    width: 100%;
    padding: 0 10vw;
    display: flex; 
    align-items: stretch; 
    flex-flow: column;
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
.leftSide span
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
}
#profileImg{
    width: 20vw;
    position: absolute;
    right: 0;
    transform: translate(-10vw, -50%);
}
</style>