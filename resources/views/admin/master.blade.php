<!DOCTYPE html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta property="og:type" content="website">
  <!-- bellow two line for site logo and site name . logo show in before title and name show in title -->
      <!-- <link rel="icon" type="image/x-icon" href="{{ asset('/img/logo/')}}" > -->
      <!-- <title> @yield('title')</title>     -->
      <title> @yield('title') | Blog with Vue</title> 

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      @include('admin.inc.header')
      @yield('custom_css')
   </head>
    <body>
     <!-- Navbar-->
     <header class="app-header">
         @include('admin.inc.top-header')
      </header>

      
      <!-- Sidebar menu-->
      <!-- @include('admin.inc.sidebar') -->
      <!-- End Sidebar menu -->
        <!-- <div class="flex-center position-ref full-height"> -->
        <div id="app">
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <aside class="app-sidebar">
         <div class="app-sidebar__user">
            <img class="app-sidebar__user-avatar" src="{{asset('admin/assets')}}/s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
            <div>
               <p class="app-sidebar__user-name text-capitalize"></p>
               <p class="app-sidebar__user-designation">Technology Ltd</p>
            </div>
         </div>
         <ul class="app-menu">
      
      


            <li class="treeview ">
               <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
               <li>
                  <router-link to="/admin-dashboard" class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Home</router-link>
               </li>
               <li>
                  <router-link to="/admin-post" class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Post</router-link>
               </li>
               </ul>
            </li>

            <li class="treeview ">
               <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Post</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
               <li>
                  <router-link to="/post-list" class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Post List</router-link>
               </li>
               <li>
                  <router-link to="/admin-post" class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Add New Post</router-link>
               </li>
               <li>
                  <router-link to="/blog" class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>New blog</router-link>
               </li>
               </ul>
            </li>

            <li class="treeview ">
               <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Category</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
               <li>
                  <router-link to="/category-list" class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>List</router-link>
               </li>
               <li>
                  <router-link to="/admin-post" class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Add new</router-link>
               </li>
               </ul>
            </li>

            <li class="treeview ">
               <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-object-group"></i><span class="app-menu__label">Social Media</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li>
                  <a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Social List</a>
                  </li>
               </ul>
            </li>
            </li>
            <li class="treeview ">
               <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Admin</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li>
                  <a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>User List</a>
                  </li>
               </ul>
            </li>
         {{--   <li class="treeview">
               <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user-times"></i><span class="app-menu__label">Role Manage</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li>
                  <a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Role List</a>
                  </li>
               </ul>
            </li>  --}}
            <li class="treeview ">
               <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-male"></i><span class="app-menu__label">My Profile</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li>
                  <a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>My Profile</a>
                  </li>
               </ul>
            </li>
         </ul>
      </aside>

            <div class="app-content">
               
      <admin-master></admin-master>
              
            </div>
            </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{asset('admin/assets/')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('admin/assets/')}}/js/main.js"></script>
        <script src="{{asset('admin/assets/')}}/js/plugins/pace.min.js"></script>
        <script src="{{asset('admin/assets/')}}/js/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        
    </body>
</html>
