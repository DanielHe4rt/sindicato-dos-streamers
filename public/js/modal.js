let faqDiv = document.querySelectorAll(".faqQuestion");

Array.from(faqDiv).map((div) =>
    div.addEventListener("click", () => {
        div.children[1].classList.toggle("active");
    })
);

let userImg = document.querySelector(".imgUser");
let divInfo = document.querySelector(".userInfo");
let userContent = document.querySelector(".userContent");
let username = document.querySelector(".username");
let langChange = document.querySelector(".navLang");
let langContent = document.querySelector(".langContent");
let footerButton = document.querySelector(".footerButton");
let streamerSearch = document.querySelector(".streamerSearch");

if (userContent) {
    userContent.addEventListener("click", () => {
        divInfo.classList.toggle("userActive");
        userContent.classList.toggle("openMenu");
        username.classList.toggle("menuUserOpen");
    });
}

langChange.addEventListener("click", () => {
    langContent.classList.toggle("activeLang");
});

if (footerButton) {
    footerButton.addEventListener("click", () => {
        streamerSearch.classList.add("activeSearch");
    });
}
