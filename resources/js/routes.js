import AdminHome from './components/admin/AdminHome.vue'
import userComp from './components/userComponent.vue'
/// ====== for category component =====///////
import categoryList from './components/admin/category/list.vue'
import addCategory from './components/admin/category/new.vue'
import editCategory from './components/admin/category/edit.vue'
/// ======= end category component ====== ////////

/// ===== start post component ======= //////
import postList from './components/admin/post/list.vue'
import addPost from './components/admin/post/create.vue'
import editPost from './components/admin/post/edit.vue'
/// ===== end post component ======= //////

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
    {
      // category id ta bind korlam category wise edit korar jonno 
     path:'/edit-category/:categoryid',
     component:editCategory
   },

   //// ======= route for post ====== //////
   {
    path:'/post-list',
    component:postList
  },
   {
    path:'/add-post',
    component:addPost
  },
   {
    path:'/post-edit/:postid',
    component:editPost
  },
  ///// ======= end post route =========//////

   
  ]
  