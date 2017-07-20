const routes = [
  {
   path: '/',
   component: (resolve) => {
               require.ensure([], () => resolve(require('./components/Goods.vue')), 'index');
                 },
   name:'index',
        meta:{
                auth:false,
                title: '首页'
        }
  },
  {
   path: '/index',
   component: (resolve) => {
               require.ensure([], () => resolve(require('./components/Goods.vue')), 'index');
                 },
   name:'index',
  },
  {
   path: '/login',
   component: (resolve) => {
               require.ensure([], () => resolve(require('./components/Login.vue')), 'index');
                 },
   name:'login',
   meta: {
              hideMainmenu: true
   }
  },
  {
   path: '/register',
   component: (resolve) => {
               require.ensure([], () => resolve(require('./components/Register.vue')), 'index');
                 },
   name:'register',
   meta: {
              hideMainmenu: true
   }
  }
]
export default routes;
