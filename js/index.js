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

// ========cuộn xuống dưới cùng khi ấn về chúng tôi============4
document.getElementById("scroll-to-bottom").addEventListener("click", function (event) {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ <a>
    window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" });
});
// cuộn lên đầu trang
document.getElementById("scroll-to-top").addEventListener("click", function (event) {
    event.preventDefault(); // Ngăn chặn hành vi mặc định
    window.scrollTo({ top: 0, behavior: "smooth" });
});


// ========ẩn hiện popup đăng nhập=====================
document.addEventListener("DOMContentLoaded", function () {
    const popupOverlay = document.getElementById("popup-overlay_1");

    const loginPopup = document.querySelector(".body_1");  // Popup đăng nhập
    const signupPopup = document.querySelector(".body_2"); // Popup đăng ký

    const openLoginButton = document.getElementById("open-login");   // Nút mở đăng nhập
    const openSignupButton = document.getElementById("open-signup"); // Nút mở đăng ký

    const loginButtonOutside = document.getElementById("open-login"); // Nút đăng nhập ngoài trang chính (nếu có)

    // Mở popup đăng nhập khi bấm nút ngoài trang chính
    if (loginButtonOutside) {
        loginButtonOutside.addEventListener("click", function (event) {
            event.preventDefault();
            popupOverlay.classList.remove("hidden_1"); // Hiện overlay
            loginPopup.style.display = "flex";  // Hiện popup đăng nhập
            signupPopup.style.display = "none"; // Ẩn popup đăng ký
        });
    }

    // Chuyển từ đăng nhập sang đăng ký
    openSignupButton.addEventListener("click", function (event) {
        event.preventDefault();
        loginPopup.style.display = "none";   // Ẩn popup đăng nhập
        signupPopup.style.display = "flex"; // Hiện popup đăng ký
    });

    // Chuyển từ đăng ký sang đăng nhập
    document.querySelector(".body_2 #open-login").addEventListener("click", function (event) {
        event.preventDefault();
        signupPopup.style.display = "none";  // Ẩn popup đăng ký
        loginPopup.style.display = "flex";  // Hiện popup đăng nhập
    });

    // Đóng popup khi bấm ra ngoài overlay
    popupOverlay.addEventListener("click", function (event) {
        if (event.target === popupOverlay) {
            popupOverlay.classList.add("hidden_1"); // Ẩn overlay
            loginPopup.style.display = "none";   // Ẩn popup đăng nhập
            signupPopup.style.display = "none"; // Ẩn popup đăng ký
        }
    });
});


// ================thông báo cần đăng nhập=====================

// tạo avatar và màu avatar cho từng user
document.addEventListener("DOMContentLoaded", function () {
    let userName = document.getElementById("user-name").textContent.trim();
    let avatarText = userName.charAt(0).toUpperCase(); // Lấy chữ cái đầu
    let avatar = document.getElementById("avatar");

    // Hàm băm tên thành màu cố định
    function hashColor(str) {
        let hash = 0;
        for (let i = 0; i < str.length; i++) {
            hash = str.charCodeAt(i) + ((hash << 5) - hash); 
        }
        let color = "#";
        for (let i = 0; i < 3; i++) {
            color += ("00" + ((hash >> (i * 8)) & 0xFF).toString(16)).slice(-2);
        }
        return color;
    }

    // Gán màu cố định dựa trên tên user
    let userColor = hashColor(userName);
    avatar.textContent = avatarText;
    avatar.style.backgroundColor = userColor;
});




// nút bấm khi đăng xuất
document.getElementById("logout-icon").addEventListener("click", function () {
    alert("Bạn đã đăng xuất!");
    localStorage.removeItem("username"); // Xóa dữ liệu đăng nhập
    window.location.href = "index_login.php"; // Chuyển hướng về trang đăng nhập
});

