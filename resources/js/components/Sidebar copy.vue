

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
      <span v-if="index==0"> 
        <i class="fas fa-angle-down" id="sidebar-arrow"></i>
      </span>
    </div>
    </transition-group>
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
                show: true
              },
              {
                name: 'People',
                id: 2,
                show: true
              },
              {
                name: 'Families',
                id: 3,
                show: true
              },
              {
                name: 'Commercial',
                id: 4,
                show: true
              }],
            toggled: true,
            animating: false
            }
        },
        mounted()
        {
          
        },
        methods:
        {
            shuffle(item, index) 
            {
              this.animating = true;
              if(this.toggled)
              {
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
                  document.getElementById('sidebar-arrow').classList.add('sidebar-arrow-bottom');
                  document.getElementById('sidebar-arrow').style.color = "red";
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
    font-size: 1.6vw;
    padding-bottom: 1vw;
}
#sidebar-arrow
{
  position: absolute;
  top: 0;
  right: 0;
  transition: 3s ease;
  display: inline-block;
  transform: translateX(150%) rotate(0);
}
.sidebar-arrow-bottom
{
  animation: arrowBottomAnimation 0.5s linear forwards;
}
@keyframes arrowBottomAnimation {
 25%
 {
   right: 0;
 }
  100% {
      top: 100%;
      right: 50%;
      transform: translate(-50%,-50%) rotate(180deg);
    }
}
@media (max-width:767px)
{
  .list-complete-item
  {
    font-size: 3vw !important;
    padding-bottom: 3vw;
  }
}
</style>
