// ================= xem chi tiết hình ảnh món ăn khi bấm vào ===================
// Khi bấm vào ảnh, hiển thị ảnh phóng to
function openModal(imgElement) {
    var modal = document.getElementById("imageModal");
    var modalImg = document.getElementById("modalImg");

    modal.style.display = "flex"; // Hiện modal
    modalImg.src = imgElement.src; // Gán ảnh vào modal
}

// Đóng modal khi bấm vào bất cứ đâu ngoài ảnh
document.getElementById("imageModal").addEventListener("click", function(event) {
    // Kiểm tra nếu người dùng click vào vùng ngoài ảnh (modal, không phải ảnh)
    if (event.target.id === "imageModal") {
        this.style.display = "none"; // Ẩn modal
    }
});


// =================lọc món ăn====================
function filterMenu(category) {
    var items = document.querySelectorAll(".the"); // Lấy tất cả món ăn

    items.forEach(item => {
        if (category === "all") {
            item.style.display = "block"; // Hiện tất cả món nếu chọn "All"
        } else {
            if (item.classList.contains(category)) {
                item.style.display = "block"; // Hiện món thuộc danh mục
            } else {
                item.style.display = "none"; // Ẩn các món không thuộc danh mục
            }
        }
    });
}


// ==================== ẩn hiện submenu bên cate ================
function openSubmenu(event) {
    event.preventDefault(); // Ngăn chặn load trang

    // Xóa class "active2" khỏi tất cả các <li>
    document.querySelectorAll("li").forEach(li => li.classList.remove("active2"));
    
    var parentLi = event.target.closest(".has-child"); // Tìm thẻ cha gần nhất

    if (parentLi) {
        // Toggle class "open"
        parentLi.classList.toggle("open");

        // Toggle class "active2"
        parentLi.classList.toggle("active2");
    }
}

// ==================== Thêm active vào các mục ================
function addActive2(event) {
    // Xóa class "active2" khỏi tất cả các <li>
    document.querySelectorAll("li").forEach(li => li.classList.remove("active2"));
    // Xóa class "active3" khỏi tất cả các <li>
    document.querySelectorAll("li").forEach(li => li.classList.remove("active3"));

    // Thêm class "active2" vào chính <li> được click
    event.currentTarget.classList.add("active2");
}
function addActive3(event) {
    // Xóa class "active3" khỏi tất cả các <li>
    document.querySelectorAll("li").forEach(li => li.classList.remove("active3"));
    
    //tìm thẻ cha li
    var parentLi = event.target.closest("li")

    if (parentLi) {
        parentLi.classList.toggle("active3")
    }
}


// ============nút trở về đầu trang====================
// Hiển thị nút khi cuộn xuống
window.onscroll = function () {
    var button = document.getElementById("backToTop");
    if (document.documentElement.scrollTop > 300) { // Khi cuộn xuống 300px thì hiện nút
        button.style.display = "block";
    } else {
        button.style.display = "none";
    }
};

// Hàm cuộn lên đầu trang
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
}



// =====================tìm kiếm món ăn======================
document.querySelector(".search").addEventListener("input", function () {
    var searchValue = removeDiacritics(this.value.toLowerCase()).trim(); // Xóa dấu, chuyển thành chữ thường, bỏ khoảng trắng thừa
    var searchWords = searchValue.split(" "); // Tách từ khóa thành mảng

    var items = document.querySelectorAll(".the"); // Lấy tất cả món ăn

    items.forEach(function (item) {
        var itemName = removeDiacritics(item.querySelector(".left h1").textContent.toLowerCase()); // Xóa dấu, lấy tên món
        var itemWords = itemName.split(" "); // Tách tên món thành mảng

        // Kiểm tra xem tất cả từ khóa nhập vào có xuất hiện trong tên món không
        var match = searchWords.every(word => itemWords.some(itemWord => itemWord.includes(word)));

        // Nếu khớp thì hiển thị, không thì ẩn
        item.style.display = match ? "block" : "none";
    });
});

// Hàm xóa dấu tiếng Việt
function removeDiacritics(str) {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
}
