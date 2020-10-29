<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <style>
            body {
                overflow-x: hidden;
                padding: 0 !important;
                margin: 0 !important;
            }
            .fade-enter-active
            {
    transition: transform 1s ease-in;
    transition-property: transform, background;
            },
.fade-leave-active {
    transition: transform 0.4s ease-in;
    transition-property: transform, background;
}

.fade-enter
{
    transform: translateY(100%);
    background: white !important;
},
.fade-leave-to {
    transform: translateY(0%);
}

        </style>
    </head>
    <body class="antialiased">
     <div id="app">
    <div> <navbar> </navbar> </div>
    
    <!-- <transition name="slide-up" mode="out-in">
            <router-view :key="$route.fullPath"></router-view> 
    </transition> -->
    <view-controller> </view-controller>
    </div>
        <script src="/js/app.js"> </script>
    </body>
    <style> 
    #mainView
    {
        position: relative; width: 100%; max-width: 100vw; height: 100%; flex-grow: 1;
    }
    @media (max-width: 767px)
    {
        #mainView
        {
             flex-grow: 1;
             display: flex;
             
        }

    }
    </style>
    
</html>

