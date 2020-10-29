import Home from './components/Home.vue';
import Admin from './components/Admin.vue';
import People from './components/People.vue';
import Photography from './components/Photography.vue';
import GraphicDesign from './components/GraphicDesign.vue';
import Contact from './components/Contact.vue';
import AboutMe from './components/AboutMe.vue';
import Parties from './components/Parties.vue';
import Families from './components/Families.vue';
import Commercial from './components/Commercial.vue';
import MenuMobile from './components/MenuMobile.vue';

export const routes = [
    {
        path: '/admin',
        name: 'admin',
        component:  Admin
    },
    {
        path: '/',
        name: 'home',
        component: Home,
        meta: { transition: 'slide-right' }
    },
    {
        path: '/photography/people',
        name: 'people',
        component: People,
        meta: { transition: 'slide-right' }
    },
    {
        path: '/contact',
        name: 'contact',
        component: Contact,
        meta: { transition: 'slide-right' }
    },
    {
        path: '/about-me',
        name: 'aboutme',
        component: AboutMe,
        meta: { transition: 'slide-right' }
    },
    {
        path: '/graphic-design',
        name: 'graphicdesign',
        component: GraphicDesign,
        meta: { transition: 'slide-right' }
    },
    {
        path: '/photography',
        name: 'photography',
        component: Photography,
        meta: { transition: 'slide-up' }

    },
    {
        path: '/photography/parties',
        name: 'parties',
        component: Parties,
        meta: { transition: 'slide-right' }
    },
    {
        path: '/photography/families',
        name: 'families',
        component: Families,
        meta: { transition: 'slide-right' }
    },
    {
        path: '/photography/commercial',
        name: 'commercial',
        component: Commercial,
        meta: { transition: 'slide-right' }
    },
    {
        path: '/menu',
        name: 'menu',
        component: MenuMobile,
        meta: { transition: 'slide-up' }
    }
    
];