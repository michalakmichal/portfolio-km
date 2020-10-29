<template>
    <div class="view" id="photographyView">
        <div v-if="albums" v-for="album in albums" class="sectionWrapper" :id="'sectionWrapper_'+album.id" :key="album.id">
            <div class="imageWrapper" :id="'imageWrapper_'+album.id">
                <router-link :to="{ name: album.route }">
                    <img :id="'img_'+album.id" :src="'/img/photography/'+album.id+'.png'"/>  
                    <div :id="'display_'+album.id" class="display"> 
                        <div class="title"> {{ album.title }} </div>
                        <div class="footnote"> {{ album.description }} </div> 
                    </div>
                </router-link>
            </div>
        </div>
    </div>
</template>
<script>
    export default
    {
        data(){
            return {
                albums : null
            }
        },
        mounted()
        {
            this.fetchAlbums();
        },
        methods:
        {
            async fetchAlbums()
            {
                try
                {
                    let result = await axios.get('/api/album/');
                    this.albums = result.data;
                    this.albums = JSON.parse(this.albums);
                }
                catch(error)
                {
                    console.log(error);
                }
                finally
                {
                
                }
            }
        }
    }
</script>
<style scoped>



.sectionWrapper{
    /*height:100%;  IMPROTANT FOR RESPONSIVE 100% HEIGHT */
    background: #E6E6E6;
    width: 55%;
    margin: auto;
    padding: 5vw 0;
    /*padding:0 5vw;*/
}
#photographyView
{
    background: #E6E6E6;
    box-sizing: border-box;
    position: absolute;
    width: 100%;
    /*height: 100%;*/
    /*min-height: 100vh; it causes jumping */
    top: 0;
    
}
#photographyView .imageWrapper
{
    display: inline-block;
    position: relative;
}
#photographyView #imageWrapper_2
{
    right: 10%;
}
#photographyView #imageWrapper_3
{
}
#photographyView #imageWrapper_4
{
    width: 55%;
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
    width: 100%;
}
#photographyView #img_4
{
    animation: none;
    margin: 0;
    position: relative;
    width: 100%;
}
#photographyView #display_1
{
    position: absolute;
    animation: none;
    top: 50%;
    right: 0;
    transform: translate(calc(78%), -50%);
    z-index: 3;
    font-family: Muli;

}
#photographyView #display_1 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
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
    margin-right: 2vw;
}
#photographyView #display_2
{
    position: absolute;
    animation: none;
    top: 50%;
    left: 0;
    transform: translate(calc(-78%), -50%);
    z-index: 3;
    font-family: Muli;

}
#photographyView #display_2 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw;
    color: rgba(201,181,126,1);
    letter-spacing: 2vw;
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
    font-size: 3.3vw;
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
    left: -0%;
    transform: translate(calc(-64%), -50%);
    z-index: 3;
    font-family: Muli;

}
#photographyView #display_4 .title
{
    font-style: normal;
    font-weight: bold;
    font-size: 3.3vw;
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
}
#imageWrapper_1
{
}
#sectionWrapper_2{
    text-align: right;
}
#sectionWrapper_3{
    text-align: right;
}
#sectionWrapper_4{
    text-align: center;
}
#photographyViewMobile
{ 
    width: 100%;
    height: 100vw;
}
@media(min-width: 767px)
{
    #photographyView .backgroundImg
    {
		display: none;
    }
#photographyViewMobile
  {
        display: none;
        visibility: hidden !important; 
  }
  @navbar
  {
      font-size: 2em;
  }
  #photographyView #imageWrapper_2
    {
        right: 10%;
    }
    
}

@media(max-width: 767px) {
/*  #photographyView{
    display: none;
     visibility: hidden !important;
  } */
  #photographyView .sectionWrapper
  {
        width: 100%;

  }
  #photographyView
  {
      height: auto;
      
  }
  #photographyView img
  {
      border-radius: 2vw;
  }
  #photographyView .display .title
  {
    color: #11A89E !important;
    font-size: 5vw !important;

  }
  #photographyView .display .footnote
  {
      display: none;
  }
   #photographyView #display_3
  {
      right: 0;
      left: auto;
      transform: translateX(50%);
  }
   #photographyView #sectionWrapper_1
    {
        text-align: left; 
        margin: 0;
    }
    #photographyView #sectionWrapper_2
    {
        text-align: right; 
        padding: 0;
        margin: 0;
    }
    #photographyView #sectionWrapper_3
    {
        text-align: left; 
        padding: 8vw 5vw;
    }
      #photographyView #sectionWrapper_4
    {
        text-align: right;
    }
    #photographyView .backgroundImg
    {
			position: absolute;
			top: 2px;
			left: 0;
			transform: scale(1.02);
			filter: blur(1vw);
            width: 100%;
            height: 100%;
    }
			
    #photographyView #imageWrapper_1
    {
        transform: none;
        left: 4vw;
    }
      #photographyView #imageWrapper_2
    {
       transform: none;
       right: 4vw;
    }
    #photographyView #imageWrapper_3
    {
        left: 0;
    }
     #photographyView #imageWrapper_4
    {
        right: 4vw;
    }


   #photographyView #img_1
    {
        animation: none;
        margin: 0;
        position: relative;
        width: 60vw;
        left: 0;
    }
    #photographyView #img_2
    {
        animation: none;
        margin: 0;
        position: relative;
        width: 60vw;
    }
    #photographyView #img_3
    {
        width: 60vw;
    }
    #photographyView #img_4
    {
        animation: none;
        margin: 0;
        position: relative;
        width: 100%;
        left: 0;
    }
}
#photographyViewMobile 
{
    height: 100%;
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
}

</style>