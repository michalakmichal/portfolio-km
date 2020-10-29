<template>
    <div id="mainView"> 
    <sidebar v-if="this.$route.matched[0].regex.toString().includes('/^\\/photography\\/')"> </sidebar>
        <transition :name="$route.meta.transition" 
        v-on:before-enter="beforeEnter"
        v-on:after-enter="afterEnter">
            <router-view></router-view> 
        </transition>
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
            // document.body.style.overflow = "hidden";  //scrollbar
           /* el.childNodes[0].querySelectorAll('.backToTop')[0].style.visibility = "hidden";
            el.childNodes[0].querySelectorAll('.backToTop')[0].style.opacity = 0; */
            //alert(this.prevRoute.name);
        },
        afterEnter(el)
        {
            /*el.childNodes[0].querySelectorAll('.backToTop')[0].style.visibility = "visible";
            el.childNodes[0].querySelectorAll('.backToTop')[0].style.opacity = 1; */
        },
        beforeLeave(el) 
        {
            el.childNodes[0].querySelectorAll('.backToTop')[0].style.visibility= "hidden";
            el.childNodes[0].querySelectorAll('.backToTop')[0].style.opacity = 0;
        }
    }
}
</script>