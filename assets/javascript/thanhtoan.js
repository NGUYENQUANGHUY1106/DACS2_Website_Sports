    // Lấy các phần tử
    const bankTransferOption = document.getElementById('bankTransferOption');
    const qrCode = document.getElementById('qrCode');
    const uploadSection = document.getElementById('uploadSection');
    const proofImageInput = document.getElementById('proofImage');
    const previewImage = document.getElementById('previewImage');

    // Lắng nghe sự kiện thay đổi của các tùy chọn thanh toán
    document.querySelectorAll('input[name="payment"]').forEach(paymentOption => {
        paymentOption.addEventListener('change', function () {
            if (bankTransferOption.checked) {
                // Hiển thị mã QR và phần tải lên với hiệu ứng
                qrCode.classList.add('show');
                uploadSection.classList.add('show');
            } else {
                // Ẩn mã QR và phần tải lên với hiệu ứng
                qrCode.classList.remove('show');
                uploadSection.classList.remove('show');
                previewImage.classList.remove('show');
                proofImageInput.value = ""; // Reset input file
                previewImage.src = ""; // Xóa ảnh
            }
        });
    });

    // Xử lý sự kiện khi upload ảnh
    proofImageInput.addEventListener('change', function () {
        const file = proofImageInput.files[0]; // Lấy file được upload
        if (file) {
            const reader = new FileReader(); // Đọc file
            reader.onload = function (e) {
                previewImage.src = e.target.result; // Hiển thị ảnh trên trang
                previewImage.classList.add('show');
            };
            reader.readAsDataURL(file); // Đọc file dưới dạng URL
        }
    });
// kiểm tra 
function validateForm() {
    // Lấy giá trị từ các input
    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var district = document.getElementById("district").value;
    var ward = document.getElementById("ward").value;

    // Kiểm tra xem các trường bắt buộc đã được điền chưa
    if (name == "" || phone == "" || city == "" || district == "" || ward == "") {
        alert("Vui lòng điền đầy đủ thông tin bắt buộc!");
        return false; // Ngừng hành động tiếp theo nếu thiếu thông tin
    }

    // Kiểm tra định dạng email (nếu có)
    if (email && !validateEmail(email)) {
        alert("Vui lòng nhập email hợp lệ!");
        return false;
    }

    // Kiểm tra định dạng số điện thoại (nếu cần)
    if (phone && !validatePhone(phone)) {
        alert("Vui lòng nhập số điện thoại hợp lệ!");
        return false;
    }

    // Nếu tất cả các trường hợp đã hợp lệ, cho phép tiếp tục
    return true;
}

// Hàm kiểm tra định dạng email
function validateEmail(email) {
    var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return re.test(email);
}

// Hàm kiểm tra định dạng số điện thoại
function validatePhone(phone) {
    var re = /^[0-9]{10,11}$/;
    return re.test(phone);
}