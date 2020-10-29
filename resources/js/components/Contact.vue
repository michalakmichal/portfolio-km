<template>
<div id="contactView">
    <div id="contentWrapper">
        <div class="leftSide">
                <div id="labelTop"> Thank you for your interest </div>
            <div id="labelTopFootnote">
                I believe we can create something  </br>
                <u>outstanding</u> together
            </div>
                <div id="labelPricing" class="mobile"> Pricing </div>
                <div id="pricingContent" class="mobile"> 
                <div class="labelContent"> I strongly believe in individualistic approach to business. </div>
                <div class="labelContent"> Every project and people behind it is an individual story. </div>
                <div class="labelContent"> I’m open for negotiations so just reach me via preferred way and tell me more about your idea /project. </div>
                </div>
                <div id="labelFeelFree"> Feel free to contact me via preferred way: </div>
                <div id="contactBox"> 
                    <img class="icon" src="/img/icons/mail.svg"/> 
                    <span> contact@kacpermichalak.com </span>
                    <div class="break"> </div>
                    <img class="icon" src="/img/icons/instagram-logo.svg"/> 
                    <span> <a href="https://www.instagram.com/kacperprivet/"> @kacperprivet </a> </span> 
                    <div class="break"> </div>
                    <img class="icon" src="/img/icons/facebook-logo.svg"/> 
                    <span> <a href="https://www.facebook.com/MichalakKacper"> facebook.com/kmportfolio </a> </span>
                    <div class="break"> </div>
                    <img class="icon" src="/img/icons/visit-card.svg"/> 
                    <span style="position: relative;" id="directMessage"> <span @click="animate()" > direct message </span>
                        <img class="desktop" id="line" src="/img/line_1.svg" /> 
                    </span>
                </div>
        </div>
        <div class="rightSide"> 
        <div id="labelReachMe"> Reach me </div>
            <form>
                <label for="name">Name & surname</label>
                    <input type="text" id="name" name="user_name">
                <label for="name">E-mail address</label>
                    <input type="text" id="name" name="user_name">
                <label for="name">Your message</label>
                    <input type="text" id="name" name="user_name">
            </form>
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
            afterEnter(el)
            {
                var elm = document.getElementById('line');
                var newone = elm.cloneNode(true);
                elm.parentNode.replaceChild(newone, elm);
                
            },
            animate(event)
            {
                document.getElementById('line').src = "/img/line_1.svg?t=" + new Date().getTime();
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
#contactView #directMessage
{
     cursor: pointer;
}
#contactView
{
    position: absolute;
    box-sizing: border-box;
    background:  #E6E6E6;
    width: 100%;
    padding: 0 10vw;
    display: flex; 
    align-items: stretch; 
    flex-flow: column;
    min-height: 100vh;

}
#contactView #contentWrapper
{
    display: flex;
}
#contactView .leftSide
{
    width: 55%;
    word-break: break-word;
    white-space: normal;
    font-size: 1.2vw;
    text-align: left;
    font-weight: lighter;
}
#contactView .rightSide
{
    width: 45%;
    font-size: 1.2vw;
    box-sizing:  border-box;
    padding-top: 3vw;
    padding-left: 17vw;
}
#contactView #labelTop
{
    color: #066877;
    font-size: 2.8vw;
    font-weight: bold;
    font-family: Muli;
    letter-spacing: 0.2vw;
}
#contactView #labelTopFootnote
{
    color: rgba(196,194,194,1);
    font-size: 1.8vw;
    padding: 1vw 0;
    padding-bottom: 2vw;
    font-weight: bold;
    font-family: Muli;
}
#contactView #contactBox
{
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding-top: 2vw;
}
#contactView #contactBox .icon, #contactView #contactBox span
{
    flex-basis: 50%;
    color: black;
}
#contactView #contactBox a
{
    text-decoration: none;
    color: inherit;
}
#contactView #contactBox .icon
{
    width: 2vw;
    height: 2vw;
}
#contactView #contactBox .break
{
    flex-basis: 100%;
    height: 2vw;
}
#contactView #contactBox
{
    display: flex;
    flex-flow: row wrap;
    width: 100%;
}
#contactView #line
{
    position: absolute;
    bottom: 0.5vw;
    width: 30vw;
}
.cls-1
{
    animation: dash 2s linear;
}
#contactView #labelReachMe
{
    color: rgba(201,181,126,1);
    font-size: 2vw;
    font-weight: bold;
    font-family: Muli;
}
@keyframes dash {
  to {
    stroke-dashoffset: 1000;
  }
}
#contactView label
{
    display: block;
    font-size: 0.8vw;
    padding-top: 1vw;
    padding-bottom: 0.2vw;
}
#contactView input[type=text]
{
    border: none;
    width: 100%;
    background: rgba(125,125,125,1);
    opacity: 0.137;
    height: 2vw;
}
@media (min-width: 767px)
{
    .mobile
    {
        display: none;
    }
}
@media (max-width: 767px)
{
    .labelContent
    {
        padding-bottom: 4vw;
        color: black;
        font-weight: bold;
        font-size: 4vw;
    }
    #contactView
    {
    }
    #contactView .leftSide
    {
        width: 100% !important;
    }
    #contactView .rightSide
    {
        width: 100% !important;
        margin-bottom: 5vw;
    }
    #contactView #pricingContent
    {
        font-size: 4vw;
        color: black;
    }
    #contactView #contentWrapper
    {
        display: flex;
        flex-flow: column;
    }
    #contactView #labelTop
    {
        padding-top: 7vw;
        color: #066877;
        font-size: 6.7vw;
        font-weight: bold;
        font-family: Muli;
        letter-spacing: 1.2vw;
        text-align: center;
    }
    #contactView #labelTopFootnote
    {
        color: rgba(196,194,194,1);
        font-size: 4vw;
        padding: 1vw 0;
        padding-bottom: 2vw;
        font-weight: bold;
        font-family: Muli;
        text-align: center;
    }
    #contactView #contactBox .icon, #contactView #contactBox span
    {
        flex-basis: auto !important;
        padding: 2vw;
        font-size: 3vw;
    }
     #contactView #contactBox .icon
     {
         width: 5vw;
         height: 5vw;
     }
    #contactView #contactBox
    {
        justify-content: flex-start;
    }
    #contactView #labelFeelFree
    {
        padding-top: 5vw;
        font-size: 5vw;
        font-weight: bold;
        letter-spacing: 1vw;
    }
    .desktop
    {
        display: none;
    }
    #labelPricing
    {
        font-size: 5vw;
        font-weight: bold;
        letter-spacing: 0.5vw;
        padding-top: 5vw;
        padding-bottom: 2vw;
    }
    #contactView .rightSide
    {
        padding: 0;
    }
    #contactView #labelReachMe
    {
        font-size: 5vw;
    }
    #contactView label{
        font-size: 4vw;
    }
    #contactView input[type=text]
    {
        height: 5vw;
    }

}
</style>