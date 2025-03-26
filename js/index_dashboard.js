document.addEventListener("DOMContentLoaded", function () {
    // Lấy phần tử canvas
    var ctx = document.getElementById("revenueChart").getContext("2d");

    // Dữ liệu mặc định (trước khi có từ backend)
    var defaultData = [500, 700, 900, 600, 800, 1000, 750, 950, 1100, 850, 1200, 1050];
    var labels = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    // Tạo biểu đồ Chart.js ban đầu
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: "Doanh thu (triệu VND)",
                data: defaultData, // Dữ liệu ban đầu (giả)
                backgroundColor: "rgba(54, 162, 235, 0.6)",
                borderColor: "rgba(54, 162, 235, 1)",
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: true },
                title: { display: true, text: "Doanh thu theo tháng", font: { size: 18 } }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: "Doanh thu (triệu VND)" }
                }
            }
        }
    });

    // Hàm gọi API để lấy dữ liệu từ backend
    function fetchRevenueData(year) {
        fetch(`http://backend.com/api/revenue?year=${year}`)  // Thay URL API của backend
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    myChart.data.datasets[0].data = data.revenue;  // Cập nhật dữ liệu
                    myChart.update();  // Vẽ lại biểu đồ
                } else {
                    console.error("Dữ liệu từ backend không hợp lệ");
                }
            })
            .catch(error => console.error("Lỗi khi lấy dữ liệu từ backend:", error));
    }

    // Bắt sự kiện khi người dùng chọn năm
    document.getElementById("year-select").addEventListener("change", function () {
        var selectedYear = this.value;
        fetchRevenueData(selectedYear);  // Gọi API lấy dữ liệu năm mới
    });

    // Lấy dữ liệu cho năm mặc định (2025)
    fetchRevenueData(2025);
});
