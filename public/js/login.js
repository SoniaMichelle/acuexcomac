const container = document.querySelector(".contenedor"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFileds = document.querySelectorAll(".password");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        pwFileds.forEach(pwFiled => {
            if (pwFiled.type === "password") {
                pwFiled.type = "text";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("bx-low-vision", "bx-show");
                });
            } else {
                pwFiled.type = "password";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("bx-show", "bx-low-vision");
                })
            }
        })
    })
})