const body = document.querySelector(".body"),
      sidebar = document.querySelector(".sidebar"),
      toggle = document.querySelector(".toggle"),
      searchBtn = document.querySelector(".search-box"),
      modeSwitch = document.querySelector(".toggle-switch"),
      modeText = document.querySelector(".mode-text");

    if(toggle){
        toggle.addEventListener("click",()=>{
            sidebar.classList.toggle("close");
        });
    }
    if (searchBtn) {
        searchBtn.addEventListener("click",()=>{
            sidebar.classList.remove("close");
        });
    }
    if(modeSwitch){
        modeSwitch.addEventListener("click",()=>{
            body.classList.toggle("dark");
    
            if (body.classList.contains("dark")) {
                modeText.innerHTML = "Light Mode"
            } else {
                modeText.innerHTML = "Dark Mode"
            }
        });
    }

