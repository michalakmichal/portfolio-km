

<template>
<div id="sidebar">
<!--
 <router-link :to="{ name: 'parties' }" class="active"> <span  class="link"> Parties </span> </router-link> 
   <router-link :to="{ name: 'people' }"> <span class="link"> People </span> </router-link> 
     <router-link :to="{ name: 'families' }"> Families </router-link> 
        <router-link :to="{ name: 'commercial' }"> Commercial </router-link>
-->
    <transition-group name="list-complete" tag="div">
    <div
      v-for="(item, index) in items"
      v-bind:key="item.id"
      :class="[!item.show ? 'hidden' : null, $route.name == item.name.toLowerCase() ? 'link-active' : null]"
      class="list-complete-item"
      @click="!animating ? shuffle(item, index) : null"
    >
      <span class="sidebarItem"> {{ item.name }} </span>
    </div>
    </transition-group>
      <span> 
        <i class="fas fa-angle-down" id="sidebar-arrow"></i>
      </span>
</div>
</template>
<script>
    export default
    {
        data() {
        return {
            items: [
              {
                name: 'Parties',
                id: 1,
                show: false
              },
              {
                name: 'People',
                id: 2,
                show: false
              },
              {
                name: 'Families',
                id: 3,
                show: false
              },
              {
                name: 'Commercial',
                id: 4,
                show: false
              }],
            toggled: false,
            animating: false
            }
        },
        mounted()
        {
            let item =this.items.find( (i) => i.name.toLowerCase() == this.$route.name);
            item.show = true;
            console.log(item.name);
            let temp = this.items[0];
            this.$set(this.items, this.items.indexOf(item), temp);
            this.$set(this.items, 0, item);
        },
        methods:
        {
            shuffle(item, index) 
            {
              this.animating = true;
              if(this.toggled)
              {
                                document.getElementById('sidebar-arrow').classList.remove('sidebar-arrow-bottom');
                document.getElementById('sidebar-arrow').classList.add('sidebar-arrow-top');
              let temp = this.items[0];
              this.$set(this.items, index, temp);
              this.$set(this.items, 0, item);
              let vm = this;

              setTimeout(function()
              {
                vm.items.filter( (el,id)=> {return id!=0}).map((el,id) =>{
                el.show = false;
                });
                vm.toggled = !vm.toggled;
                vm.animating = false;

                //document.getElementById('sidebar-arrow').style.animationDirection = "reverse";
              }, 1000);
              setTimeout(function()
              {
                vm.$router.push({name: item.name.toLowerCase()});
              }, 1000);
              }
              else
              {
                if(document.getElementById('sidebar-arrow'))
                {
                  document.getElementById('sidebar-arrow').classList.remove('sidebar-arrow-top');
                  document.getElementById('sidebar-arrow').classList.add('sidebar-arrow-bottom');
                  //document.getElementById('sidebar-arrow').style.animationDirection = "normal";
                  document.getElementById('sidebar-arrow').style.left = document.querySelectorAll('.link-active > .sidebar-item').offsetWidth;
                }
                this.items.filter( (el,id)=> {return id!=0}).map((el,id) =>{
                el.show = true;
                });
                this.toggled = !this.toggled;
                this.animating = false;
              }
                //{ alert("Hello"); }, 3000);
              //this.$set(this.items, 1, this.items[index]);
            }
        }
    }
</script>
<style scoped>
.list-complete-item {
  transition: all 1s;
  cursor: pointer;
}
span
{

}
.changeAlbum
{
  animation: changeAnimation 5s ease;
}
@keyframes changeAnimation {
  from {
    
    }
  to {
       transform: translate(200%,-180%);
    }
}

.router-link-active, .router-link-exact-active {
   color: #C9B57E !important;
 }
 .link-active{
  color: #C9B57E !important;
 }
 #sidebar{
   display: flex;
   flex-flow: column;
   font-size: 0.8em;
   font-family: Muli;
   font-style: normal;
   text-align: left;
   position: absolute;
   z-index: 1;
   left: 10vw;
   top: 8vw;
 }
 #sidebar a
{
    text-decoration: inherit !important;
    color: inherit;
    padding-bottom: 0.75vw;
}
.hidden
{
  opacity: 0;
}
.list-complete-item
{
    font-size: 1.3vw;
    padding-bottom: 1vw;
}
#sidebar-arrow
{
  position: absolute;
  top: 4%;
  right: 0;
  transition: 3s ease;
  display: inline-block;
  transform: translateX(150%) rotate(0);
}
.sidebar-arrow-bottom
{
  animation: arrowAnimation 0.6s linear forwards;
  top: 100%;
  bottom: 50%;
}
.sidebar-arrow-top
{
  animation: arrowReverseAnimation 0.6s linear;
  /*animation: null !important;*/
}
@keyframes arrowAnimation {

  100% {
      top: 100%;
      right: 50%;
      transform: translate(-50%,-50%) rotate(180deg);
    }
}
@keyframes arrowReverseAnimation {
 0%
 {
      top: 100%;
      right: 50%;
      transform: translate(-50%,-50%) rotate(180deg);
 }
  100% {
      top: 4%;
    }
}
@media (max-width:767px)
{
  .list-complete-item
  {
    font-size: 2vw !important;
    padding-bottom: 2vw;
  }
  #sidebar-arrow
  {
    font-size: 3vw;
    transform: translate(150%,-35%);
  }
  #sidebar{
  padding-bottom: 1vw;
}
}
</style>
