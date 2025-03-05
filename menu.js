document.addEventListener("DOMContentLoaded", function () {
    let menuItem = document.querySelector(".has-child");
    let subMenu = document.querySelector(".sub-menu");

    menuItem.addEventListener("click", function (event) {
        event.stopPropagation(); // Ngăn sự kiện lan ra ngoài
        this.classList.toggle("active"); // Toggle trạng thái menu
    });

    // Đóng menu khi bấm ra ngoài phần menu
    document.addEventListener("click", function (event) {
        if (!menuItem.contains(event.target) && !subMenu.contains(event.target)) {
            menuItem.classList.remove("active");
        }
    });
});
