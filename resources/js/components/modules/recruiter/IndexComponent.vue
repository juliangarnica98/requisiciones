<template>
    <div class="body">
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img :src="this.image" alt="" />
                    </span>
                    <div class="text header-text">
                        <span class="name">Requisiciones</span>
                        <span class="profesion">Entrevistas</span>
                    </div>
                </div>
                <i class="bx bx-chevron-right toggle"></i>
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <!-- <li class="search-box">
                        <i class="bx bx-search icon"></i>
                        <input type="text" placeholder="Search..." />
                    </li> -->
                    <ul class="menu-links pt-5">
                        <li class="nav-link">
                            <router-link
                                class="router-link"
                                to="/recruiter/dashboard"
                                aria-expanded="false"
                            >
                                <i class="bx bx-home icon"></i>
                                <span class="text nav-text">DASHBORAD</span>
                            </router-link>
                        </li>
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <router-link
                                class="router-link"
                                to="/recruiter/entrevistas"
                                aria-expanded="false"
                            >
                                <i class="bx bx-spreadsheet icon"></i>
                                <span class="text nav-text"
                                    >VER ENTREVSITAS</span
                                >
                            </router-link>
                        </li>
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <router-link
                                class="router-link"
                                to="/recruiter/requisiciones"
                                aria-expanded="false"
                            >
                                <i class="bx bxs-user-account icon"></i>
                                <span class="text nav-text"
                                    >VER REQUISICIONES</span
                                >
                            </router-link>
                        </li>
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <router-link class="router-link" to="/recruiter/requisicion" aria-expanded="false" >
                                <i class="bx bxs-user-plus icon"></i>
                                <span class="text nav-text"
                                    >CREAR REQUISICIONES</span
                                >
                            </router-link>

                        </li>
                    </ul>
                </div>
                <div class="bottom-content">
                    <li class="">
                        <a
                            class="dropdown-item"
                            href="/logout"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        >
                            <i class="bx bx-log-out icon"></i>
                            <span class="text nav-text"> Cerrar sesión </span>
                            <form
                                id="logout-form"
                                action="/logout"
                                method="POST"
                                class="d-none"
                            >
                                <input
                                    type="hidden"
                                    name="_token"
                                    :value="csrf"
                                />
                            </form>
                        </a>
                    </li>
                    <li class="mode">
                        <div class="moon-sun">
                            <i class="bx bx-moon icon moon"></i>
                            <i class="bx bx-sun icon sun"></i>
                        </div>
                        <span class="mode-text text">Dark Mode</span>
                        <div class="toggle-switch">
                            <span class="switch"> </span>
                        </div>
                    </li>
                </div>
            </div>
        </nav>

        <section class="home">
            <!-- <div class="text">Dashboard</div> -->
           
                <router-view></router-view>
            
        </section>
    </div>
</template>
<script>
export default {
    props: ["token", "name"],
    data() {
        return {
            image: "/images/lili.png",
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        };
    },
    mounted() {
        const body = document.querySelector("body"),
            home = document.querySelector(".home"),
            sidebar = document.querySelector(".sidebar"),
            toggle = document.querySelector(".toggle"),
            searchBtn = document.querySelector(".search-box"),
            modeSwitch = document.querySelector(".toggle-switch"),
            modeText = document.querySelector(".mode-text");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            if (sidebar.classList.contains("close")) {
                home.style.width= "calc(100% - 88px)";
            }else{
                home.style.width= "calc(100% - 255px)";
            }
        });
        // searchBtn.addEventListener("click", () => {
        //     sidebar.classList.remove("close");
        // });

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerHTML = "Light Mode";
            } else {
                modeText.innerHTML = "Dark Mode";
            }
        });
    },
};
</script>
<style scoped>
* {
    font-family: "Poppins", sans-serif;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

:root {
    /* === Colors === */
    /*--body-color: #f7f8fa;*/
    --body-color: #D096Ad;
    --sidebar-color: #fff;
    --primary-color: #e6007e;
    --primary-color-light: #f6f5ff;
    --toggle-color: #ddd;
    --text-color: #707070;
    --text-dark-color:#18191a;
    /* === Transition === */
    --tran-03: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.4s ease;
    --tran-05: all 0.5s ease;
}
.body {
    height: auto;
    min-height: 100%;
    background: var(--body-color);
    transition: var(--tran-03);
}

.body.dark {
    --body-color: #18191a;
    --sidebar-color: #242526;
    --primary-color: #e6007e;
    --primary-color-light: #3a3b3c;
    --toggle-color: #fff;
    --text-color: #ccc;
    --text-dark-color:#fff;
}
/*Sidebar*/

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background: var(--sidebar-color);
    transition: var(--tran-05);
    z-index: 100;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.sidebar.close {
    width: 88px;
}

.sidebar li {
    height: 50px;
    margin-top: 10px;
    list-style: none;
    display: flex;
    align-items: center;
}

.sidebar li .icon,
.sidebar li .text {
    color: var(--text-color);
}

.sidebar li .icon {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 60px;
    font-size: 25px;
}

.sidebar header {
    position: relative;
}

.sidebar .image-text img {
    width: 40px;
    border-radius: 6px;
}

.sidebar header .image-text {
    display: flex;
    align-items: center;
}

header .image-text .header-text {
    display: flex;
    flex-direction: column;
}
.header-text .name {
    font-weight: 600;
    color: var(--text-color);
}
.header-text .profesion {
    font-weight: 600;
    margin-top: -2px;
    color: var(--text-color);
}

/*Resuable css*/
.sidebar .text {
    font-size: 13px;
    font-weight: 500;
    color: var(--text-color);
    transition: var(--tran-04);
    white-space: nowrap;
    opacity: 1;
}

.sidebar.close .text {
    opacity: 0;
}

.sidebar .image {
    min-width: 60px;
    display: flex;
    align-items: center;
}
.sidebar header .toggle {
    position: absolute;
    top: 20;
    right: -25px;
    transform: translateY(-50%) rotate(180deg);
    height: 25px;
    width: 25px;
    background: var(--primary-color);
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 25px;
    color: var(--sidebar-color);
    transform: var(--tran-03);
    cursor: pointer;
}

.sidebar.close header .toggle {
    transform: translateY(-50%) rotate(180deg);
}

.body.dark .sidebar header .toggle {
    background: var(--primary-color);
}

.sidebar .search-box {
    background: var(--primary-color-light);
    border-radius: 6px;
}
.search-box input {
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    border-radius: 6px;
    background: var(--primary-color-light);
}

.sidebar li a {
    text-decoration: none;
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    border-radius: 6px;
    transition: var(--tran-04);
}

.sidebar li a:hover {
    background: var(--primary-color);
}

.sidebar li a:hover .icon,
.sidebar li a:hover .text {
    color: var(--sidebar-color);
}

.body.dark .sidebar li a:hover .icon,
.body.dark .sidebar li a:hover .text {
    color: var(--text-color);
}

.sidebar li .router-link {
    text-decoration: none;
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    border-radius: 6px;
    transition: var(--tran-04);
}

.sidebar li .router-link:hover {
    background: var(--primary-color);
}

.sidebar li .router-link:hover .icon,
.sidebar li .router-link:hover .text {
    color: var(--sidebar-color);
}

.body.dark .sidebar li .router-link:hover .icon,
.body.dark .sidebar li .router-link:hover .text {
    color: var(--text-color);
}

.sidebar .menu-bar {
    /* background: red; */
    height: calc(100% - 50px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.menu-bar .mode {
    position: relative;
    border-radius: 6px;
    background: var(--primary-color-light);
}

.menu-bar .mode i {
    position: absolute;
    transform: var(--tran-03);
}

.menu-bar .mode .moon-sun {
    height: 50px;
    width: 60px;
    display: flex;
    align-items: center;
}
.menu-bar .mode i.sun {
    opacity: 0;
}

.body.dark .menu-bar .mode i.sun {
    opacity: 1;
}

.body.dark .menu-bar .mode i.moon {
    opacity: 0;
}

.menu-bar .mode .toggle-switch {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    min-width: 60px;
    cursor: pointer;
    right: 0;
    border-radius: 6px;
    background: var(--primary-color-light);
}

.toggle-switch .switch {
    position: relative;
    height: 22px;
    width: 44px;
    border-radius: 25px;
    background: var(--toggle-color);
}
.switch::before {
    content: "";
    position: absolute;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    background: var(--sidebar-color);
    transition: var(--tran-03);
}

.body.dark .switch::before {
    left: 24px;
}

.home {
    padding: 40px;
    position: relative;
    left: 250px;
    height: auto;
    min-height: 100%;
    width: calc(100% - 88px);
    background: var(--body-color);
    transition: var(--tran-05);

}


.sidebar.close ~ .home {
    left: 88px;
    width: calc(100% -88px);
}
.nav-link .active-link {
    background: var(--primary-color);
    
}
.nav-link .active-link .icon{
  color: var(--toggle-color);  
}
.nav-link .active-link span{
    color: var(--toggle-color); 
  }
</style>
