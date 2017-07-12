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
  }
]
export default routes;
