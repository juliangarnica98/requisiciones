<template>
  <div>
    <aside class="left-sidebar bg-liliyoi">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-center">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../../../../../../public/imgs/logo.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav" >
          
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">REQUISICIONES</span>
            </li>
            <li class="sidebar-item">
              <router-link class="sidebar-link" to="/boss/requisiciones" aria-expanded="false">
                <span>
                  <i class="ti ti-eye"></i>
                </span>
                <span class="hide-menu">Mis requisiciones</span>
              </router-link>
            </li>
            <li class="sidebar-item">
              <router-link class="sidebar-link" to="/boss/crear-requisicion" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Crear requisición</span>
              </router-link>
            </li>

            
            
          </ul>
         
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
  </div>
</template>
<style scoped>
  #sidebarnav{
    padding: 0;
  }
  .nav-small-cap{
    text-align: center;
  }
  a:link, a:visited { text-decoration: none; }
  .bg-liliyoi{
    background-color: black;
  }
  .sidebar-item .active-link{
    background-color: rgba(232,81,153,1) ;
    color: #fff;
  }
</style>