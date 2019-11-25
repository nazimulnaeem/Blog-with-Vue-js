import AdminHome from './components/admin/AdminHome.vue'
import userComp from './components/userComponent.vue'
/// ====== for category =====///////
import categoryList from './components/admin/category/list.vue'
import addCategory from './components/admin/category/new.vue'

export const routes = [
   {
     path:'/admin-dashboard',
     component:AdminHome
   },
    {
     path:'/admin-post',
     component:userComp
   },
   ///=== route for category ====///////
    {
     path:'/category-list',
     component:categoryList
   },
    {
     path:'/add-category',
     component:addCategory
   },
   
  ]
  