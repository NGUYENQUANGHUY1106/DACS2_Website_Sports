function updateQuantity(action, productId) {
    // Lấy các phần tử DOM
    var quantityInput = document.getElementById(`quantity-${productId}`);
    var subtotalElement = document.getElementById(`subtotal-${productId}`);
    var totalElement = document.getElementById("cart-total");

    if (!quantityInput || !subtotalElement || !totalElement) {
        console.error("Không tìm thấy các phần tử cần thiết!");
        return;
    }

    // Lấy số lượng và giá trị hiện tại
    var currentQuantity = parseInt(quantityInput.value);
    var unitPrice = parseInt(subtotalElement.innerText.replace(/\D/g, '')) / currentQuantity;

    // Thay đổi số lượng
    if (action === "plus") {
        currentQuantity++;
    } else if (action === "minus" && currentQuantity > 1) {
        currentQuantity--;
    }

    // Cập nhật DOM
    quantityInput.value = currentQuantity;
    var newSubtotal = currentQuantity * unitPrice;
    subtotalElement.innerText = newSubtotal.toLocaleString('vi-VN') + " đ";

    // Gửi yêu cầu AJAX đến server
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "capnhatgiohang.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            try {
                var response = JSON.parse(xhr.responseText);
                if (response.status === "success") {
                    totalElement.innerText = parseInt(response.total).toLocaleString('vi-VN') + " đ";
                } else {
                    alert("Lỗi: " + response.message);
                }
            } catch (e) {
                console.error("Phản hồi JSON không hợp lệ:", xhr.responseText);
            }
        }
    };
    xhr.send(`productid=${productId}&quantity=${currentQuantity}`);
}
