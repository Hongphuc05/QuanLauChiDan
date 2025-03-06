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
