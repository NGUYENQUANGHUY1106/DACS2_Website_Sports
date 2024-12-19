function updateQuantity(action, productId) {
    // Lấy các phần tử DOM
    const quantityInput = document.getElementById(`quantity-${productId}`);
    const unitPriceElement = document.getElementById(`unit-price-${productId}`);
    const subtotalElement = document.getElementById(`subtotal-${productId}`);
    const cartTotalElement = document.getElementById("cart-total");

    if (!quantityInput || !unitPriceElement || !subtotalElement || !cartTotalElement) {
        console.error("Không tìm thấy các phần tử cần thiết.");
        return;
    }

    // Lấy giá trị hiện tại và đơn giá
    let currentQuantity = parseInt(quantityInput.value);
    const unitPrice = parseFloat(unitPriceElement.getAttribute("data-price"));

    if (isNaN(currentQuantity) || currentQuantity < 1) currentQuantity = 1;
    if (isNaN(unitPrice) || unitPrice <= 0) {
        console.error("Đơn giá không hợp lệ.");
        return;
    }

    // Tăng hoặc giảm số lượng
    if (action === "plus") {
        currentQuantity++;
    } else if (action === "minus" && currentQuantity > 1) {
        currentQuantity--;
    }

    // Cập nhật số lượng trong input
    quantityInput.value = currentQuantity;

    // Cập nhật tổng tiền từng sản phẩm
    const subtotal = currentQuantity * unitPrice;
    subtotalElement.innerText = subtotal.toLocaleString('vi-VN') + " đ";

    // Cập nhật tổng thanh toán
    updateCartTotal();

    // Gửi cập nhật số lượng về server
    updateCartOnServer(productId, currentQuantity);
}

function updateCartTotal() {
    // Lấy tất cả các phần tử `subtotal`
    const subtotalElements = document.querySelectorAll('[id^="subtotal-"]');
    let total = 0;

    subtotalElements.forEach(subtotalElement => {
        const subtotal = parseFloat(subtotalElement.innerText.replace(/[^0-9]/g, ''));
        if (!isNaN(subtotal)) total += subtotal;
    });

    // Hiển thị tổng thanh toán
    const cartTotalElement = document.getElementById("cart-total");
    cartTotalElement.innerText = total.toLocaleString('vi-VN') + " đ";
}
