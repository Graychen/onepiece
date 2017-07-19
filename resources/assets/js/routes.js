const routes = [
  {
   path: '/',
   component: (resolve) => {
               require.ensure([], () => resolve(require('./components/Goods.vue')), 'index');
                 },
   name:'index'
  },
  {
   path: '/index',
   component: (resolve) => {
               require.ensure([], () => resolve(require('./components/Goods.vue')), 'index');
                 },
   name:'index'
  },
  {
   path: '/login',
   component: (resolve) => {
               require.ensure([], () => resolve(require('./components/Login.vue')), 'index');
                 },
   name:'index'
  },
  {
   path: '/register',
   component: (resolve) => {
               require.ensure([], () => resolve(require('./components/Register.vue')), 'register');
                 },
   name:'register'
  }
]
export default routes;
