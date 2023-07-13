<template>
  <div>
    <aside class="left-sidebar">
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
            <li class="nav-small-cap" >
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">PRINCIPAL</span>
            </li>
            <li class="sidebar-item" >

              <router-link class="sidebar-link" to="/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </router-link>

            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">USUARIOS</span>
            </li>
        
            <li class="sidebar-item">
              <!-- <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Todos los usuarios</span>
              </a> -->
              <router-link class="sidebar-link" to="/usuarios" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Todos los usuarios</span>
              </router-link>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">RETIROS</span>
            </li>
            <li class="sidebar-item">
              <router-link class="sidebar-link" to="/entrevistas" aria-expanded="false">
                <span>
                  <i class="ti ti-clipboard"></i>
                </span>
                <span class="hide-menu">Ver entrevistas</span>
              </router-link>
            </li>
            
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">REQUISICIONES</span>
            </li>
            <li class="sidebar-item">
              <router-link class="sidebar-link" to="/requisiciones" aria-expanded="false">
                <span>
                  <i class="ti ti-eye"></i>
                </span>
                <span class="hide-menu">Ver requisiciones</span>
              </router-link>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Crear requisición</span>
              </a>
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
</style>