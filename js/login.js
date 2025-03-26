<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Chọn tất cả các thẻ <a> trong sub-menu
        document.querySelectorAll(".sub-menu a").forEach(item => {
            item.addEventListener("click", function (event) {
                event.preventDefault(); // Ngăn chặn mở link
                alert("Bạn cần đăng nhập để thực hiện thao tác này!"); // Hiện thông báo
            });
        });
    });
</script>
