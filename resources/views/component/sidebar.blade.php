<script src="{{asset('assets/js/core/jquery.min.js')}}"></script> 
<div class="sidebar" data-color="blue" data-background-color="black" data-image="{{asset('assets/img/sidebar-1.jpg')}}">
 <!-- tip 1: you can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"tip 2: you can also add an image using data-image tag --> 
 <div class="logo"> 
  <a href="" class="simple-text logo-mini"> J </a> 
  <a href="" class="simple-text logo-normal"> jurnal </a> 
</div> <div class="sidebar-wrapper ps-container ps-theme-default ps-active-y" data-ps-id="1d9eb305-f1eb-ddfb-9b45-c18f312e7051"> 
  <div class="user"> 
    <div class="photo">
     <img src="{{asset('assets/img/faces/avatar.jpg')}}"> </div> 
     <div class="user-info"> 
      <a data-toggle="collapse" href="#collapseexample" class="username"> 
        <span> {{session('name')}}
          <b class="caret"></b> 
        </span> 
      </a> 
      <div class="collapse @yield('show-profile')" id="collapseexample">
       <ul class="nav"> 
        <li class="nav-item @yield('active-profile')">  <a class="nav-link" href=""> <span class="sidebar-mini"> up </span> <span class="sidebar-normal"> user profile </span> </a> 
        </li> 
      </ul> 
    </div> 
  </div> 
</div> 
<ul class="nav">
 <li class="nav-item @yield('active-dashboard')"> 
  <a class="nav-link " href="{{route('dashboard')}}"> 
    <i class="material-icons">dashboard</i> 
    <p> Dashboard </p> 
  </a> 
</li>
<li class="nav-item @yield('active-master')">
  <a class="nav-link" data-toggle="collapse" href="#formsExamples">
    <i class="material-icons">content_paste</i>
    <p> Master Data
      <b class="caret"></b>
    </p>
  </a>
  <div class="collapse @yield('show-master')" id="formsExamples">
    <ul class="nav">
      <li class="nav-item @yield('active-user')">
        <a class="nav-link" href="{{route('show_table_user')}}">
          <span class="sidebar-mini"> MU </span>
          <span class="sidebar-normal"> Master User </span>
        </a>
      </li>
      <li class="nav-item @yield('active-kelas')">
        <a class="nav-link" href="{{route('show_table_kelas')}}">
          <span class="sidebar-mini"> MK </span>
          <span class="sidebar-normal"> Master Kelas </span>
        </a>
      </li>
      <li class="nav-item @yield('active-pembimbing')">
        <a class="nav-link" href="{{route('show_table_pembimbing')}}">
          <span class="sidebar-mini"> MPS </span>
          <span class="sidebar-normal"> Master Pembimbing Sekolah</span>
        </a>
      </li>
      <li class="nav-item @yield('active-pembimbing-magang')">
        <a class="nav-link" href="{{route('show_table_pembimbing_magang')}}">
          <span class="sidebar-mini"> MPM </span>
          <span class="sidebar-normal"> Master Pembimbing Magang </span>
        </a>
      </li>              
    </ul>
  </div>
</li>  
<li class="nav-item @yield('active-logout')"> 
  <a class="nav-link " href="{{route('logout')}}"> 
    <i class="material-icons">logout</i> 
    <p> Logout </p> 
  </a> 
</li> 
</ul> 
<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"> 
  <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"> 
  </div> 
</div>
<div class="ps-scrollbar-y-rail" style="top: 0px; height: 550px; right: 0px;"> 
  <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 493px;"> 
  </div>
</div>
</div>
<div class="sidebar-background" style="background-image: {{asset('assets/img/sidebar-1.jpg')}} "> 
</div> 
</div>