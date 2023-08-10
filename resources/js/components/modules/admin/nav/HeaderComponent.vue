<template>
    <div>
        <header class="app-header" style="background-color: transparent;" >
          
            <nav class="navbar navbar-expand-lg navbar-light ">
              
              <ul class="navbar-nav" >
              </ul>
              <div class="navbar-collapse px-0" id="navbarNav">
                
                <ul class="navbar-nav flex-row ms-auto justify-content-center aling-items-center" >
                  <h5 class=" text-center" style="color:#e85199">Bienvenido {{ this.name }}</h5>
                </ul>
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                 
                  <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <img src="../../../../../../public/vendor/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                        <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
                          <form id="logout-form" action="/logout" method="POST" class="d-none">
                              <input type="hidden" name="_token" :value="csrf" />
                          </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
    </div>
</template>
<script>
export default {
    props: ["token",'name'],
    data: () => ({
        csrf: document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content"),
    }),
};
</script>
