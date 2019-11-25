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
  
  
{{-- 
      <li class="treeview ">
         <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-birthday-cake"></i><span class="app-menu__label">Cake Studio</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">
          <li>
             <a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Filling List</a>
          </li>
          <li>
             <a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Color List</a>
          </li>
          <li>
            <a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Sponge List</a>
          </li>
          <li>
            <a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Cream List</a>
          </li>
          <li>
            <a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Studio Sample List</a>
          </li>
          <li>
            <a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Studio Basic Config</a>
          </li>
         </ul>
      </li>
 --}}

      <li class="treeview ">
         <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">
           <li>
              <router-link to="" class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Home</router-link>
           </li>
           <li>
              <a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Page List</router-link>
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
