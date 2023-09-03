import './bootstrap';

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'

// импорт основных компонентов
import App from './App.vue'
import Context from './views/Context.vue'
import Seo from './views/Seo.vue'
import Smm from './views/Smm.vue'
import Target from './views/Target.vue'
import Add from './views/Add.vue'
import Manual from './views/Manual.vue'
import Changeproject from './views/Changeproject.vue'



const router = createRouter({
  routes: [
    {
     path: '/auth',
     name: 'context',
     component: Context,
   },
    {
      path: '/seo',
      name: 'seo',
      component: Seo,
    },
    {
      path: '/smm',
      name: 'smm',
      component: Smm,
    },
    {
      path: '/target',
      name: 'target',
      component: Target,
    },
    {
      path: '/add',
      name: 'add',
      component:Add,
    },
    {
      path: '/manual',
      name: 'manual',
      component:Manual,
    },
    {
      path: '/changeproject',
      name: 'changeproject',
      component:Changeproject,
    },
  
 
  ],
  history: createWebHistory()
})

const app = createApp(App)
app.use(router)
app.mount('#app')