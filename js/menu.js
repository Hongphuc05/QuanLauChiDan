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


/* =========================thêm bớt món ăn========================= */
function showToast(message) {
    let toast = document.getElementById("toast-message");
    toast.textContent = message;
    toast.classList.add("show");

    setTimeout(() => {
        toast.classList.remove("show");
    }, 3000); // 3 giây sau tự động ẩn
}
// ======================KHởi tạo giỏ hàng====================
// Khởi tạo giỏ hàng
// Khởi tạo giỏ hàng
let gioHang = [];

document.addEventListener("DOMContentLoaded", function () {
    let btnGioHang = document.getElementById("btn-gio-hang");
    let popupGioHang = document.getElementById("ovl"); // Sử dụng #ovl để mở giỏ hàng
    let btnDongPopup = document.getElementById("btn-dong-popup");
    let danhSachGioHang = document.getElementById("danh-sach-gio-hang");
    let tongTienEl = document.getElementById("tong-tien");
    let soLuongGioHang = document.getElementById("so-luong-gio-hang");

    // Xử lý thêm món vào giỏ hàng khi bấm "Xác nhận"
    document.querySelectorAll(".the").forEach(function (item) {
        let minusBtn = item.querySelector(".minus");
        let plusBtn = item.querySelector(".plus");
        let numberSpan = item.querySelector(".number");
        let confirmBtn = item.querySelector(".btn-cf");
        let tenMon = item.querySelector("h1").textContent;
        let giaMon = parseInt(item.querySelector("p").textContent.replace(/\D/g, ""));

        // Xử lý tăng số lượng
        plusBtn.addEventListener("click", function () {
            let currentValue = parseInt(numberSpan.textContent);
            numberSpan.textContent = currentValue + 1;
        });

        // Xử lý giảm số lượng
        minusBtn.addEventListener("click", function () {
            let currentValue = parseInt(numberSpan.textContent);
            if (currentValue > 0) {
                numberSpan.textContent = currentValue - 1;
            }
        });

        // Khi bấm "Xác nhận"
        confirmBtn.addEventListener("click", function () {
            let soLuong = parseInt(numberSpan.textContent);
            if (soLuong > 0) {
                let index = gioHang.findIndex(item => item.ten === tenMon);
                if (index !== -1) {
                    gioHang[index].soLuong += soLuong;
                } else {
                    gioHang.push({ ten: tenMon, gia: giaMon, soLuong: soLuong });
                }

                showToast(`Bạn đã đặt món "${tenMon}" với số lượng ${soLuong}.`);

                capNhatGioHang();
                numberSpan.textContent = 0; // Reset số lượng về 0
            } else {
                alert("Vui lòng chọn số lượng trước khi xác nhận!");
            }
        });
    });

    // Cập nhật hiển thị giỏ hàng
    function capNhatGioHang() {
        danhSachGioHang.innerHTML = "";
        let tongTien = 0;
        let tongSoLuong = 0;

        gioHang.forEach((item, index) => {
            let li = document.createElement("li");
            li.innerHTML = `
                <div class="gio-hang-item">
                    <span class="ten-mon">${item.ten} - ${item.gia.toLocaleString()} VND</span>
                    <div class="quantity-control">
                        <button class="btn-giam" data-index="${index}">−</button>
                        <span class="so-luong">${item.soLuong}</span>
                        <button class="btn-tang" data-index="${index}">+</button>
                        <button class="btn-xoa" data-index="${index}">🗑</button>
                    </div>
                </div>
            `;
            danhSachGioHang.appendChild(li);
            tongTien += item.gia * item.soLuong;
            tongSoLuong += item.soLuong;
        });
        

        tongTienEl.textContent = tongTien.toLocaleString() + " VND";
        soLuongGioHang.textContent = tongSoLuong;

        // Xử lý tăng/giảm số lượng và xóa món trong giỏ hàng
        document.querySelectorAll(".btn-tang").forEach(btn => {
            btn.addEventListener("click", function () {
                let index = this.dataset.index;
                gioHang[index].soLuong++;
                capNhatGioHang();
            });
        });

        document.querySelectorAll(".btn-giam").forEach(btn => {
            btn.addEventListener("click", function () {
                let index = this.dataset.index;
                if (gioHang[index].soLuong > 1) {
                    gioHang[index].soLuong--;
                } else {
                    gioHang.splice(index, 1); // Xóa món nếu số lượng về 0
                }
                capNhatGioHang();
            });
        });

        document.querySelectorAll(".btn-xoa").forEach(btn => {
            btn.addEventListener("click", function () {
                let index = this.dataset.index;
                gioHang.splice(index, 1); // Xóa hẳn món
                capNhatGioHang();
            });
        });
    }

    // Xử lý mở popup giỏ hàng
    btnGioHang.addEventListener("click", function () {
        popupGioHang.classList.remove("hidden");
    });

    // Xử lý đóng popup giỏ hàng
    btnDongPopup.addEventListener("click", function () {
        popupGioHang.classList.add("hidden");
    });
});

// ============= profile của user =====================
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
