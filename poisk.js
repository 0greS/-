window.addEventListener("DOMContentLoaded", () => {
    document.body.classList.remove("load");

    const postItems = document.querySelectorAll(".all .tov");

    document.querySelector("#post").oninput = function() {
        const searchText = this.value.trim().toLowerCase();
        // console.log(searchText)
        if (searchText) {
            postItems.forEach(item => {
                // console.log(item.querySelector(".infoup").querySelector("p").textContent);
                if (item.querySelector(".tov22").querySelector("p").textContent.toLowerCase().indexOf(searchText) != -1) {
                    item.classList.remove("hide");
                } else {
                    item.classList.add("hide");
                };
            });
        } else {
            postItems.forEach(item => {
                item.classList.remove("hide");
            });
        };
    };
});
