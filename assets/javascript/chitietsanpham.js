
        console.log("Danh sách ảnh:", imageUrls);

        if (imageUrls.length > 0) {
            let currentImageIndex = 0;
            let autoSlideInterval;

            function showImage(index) {
                const mainImage = document.getElementById('detail__img-id');
                console.log("Hiển thị ảnh:", imageUrls[index]);
                if (mainImage && imageUrls[index]) {
                    mainImage.style.backgroundImage = `url(${imageUrls[index]})`;
                    mainImage.classList.add('hidden');
                    setTimeout(() => {
                        mainImage.classList.remove('hidden');
                    }, 100);
                }
            }

            function startAutoSlide() {
                autoSlideInterval = setInterval(() => {
                    currentImageIndex = (currentImageIndex + 1) % imageUrls.length;
                    showImage(currentImageIndex);
                }, 3000);
                console.log("Bắt đầu tự động chuyển ảnh");
            }

            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
                console.log("Dừng tự động chuyển ảnh");
            }

            showImage(currentImageIndex);
            startAutoSlide();

            document.getElementById('next-btn').addEventListener('click', () => {
                stopAutoSlide(); // Dừng tự động khi nhấn nút
                currentImageIndex = (currentImageIndex + 1) % imageUrls.length;
                showImage(currentImageIndex);
                startAutoSlide(); // Bắt đầu lại tự động sau khi nhấn
            });

            // Nút "Lùi" (Previous)
            document.getElementById('prev-btn').addEventListener('click', () => {
                stopAutoSlide(); // Dừng tự động khi nhấn nút
                currentImageIndex = (currentImageIndex - 1 + imageUrls.length) % imageUrls.length;
                showImage(currentImageIndex);
                startAutoSlide(); // Bắt đầu lại tự động sau khi nhấn
            });
        } else {
            console.log("Danh sách ảnh trống!");
        }
        function selectImage(element, imgUrl) {
            document.querySelectorAll('.detail__classify-list .detail__classify-item').forEach(item => {
                item.classList.remove('selected');
            });
        
            element.classList.add('selected');
        
            // Đặt ảnh vào hình lớn
            document.getElementById('detail__img-id').style.backgroundImage = `url(${imgUrl})`;
        
            // Lưu lại ảnh vào input ẩn
            document.querySelector('input[name="product_img"]').value = imgUrl;
        }
        
        function selectSize(element, size) {
            document.querySelectorAll('#detail_classify_list_size .detail__classify-item').forEach(item => {
                item.classList.remove('selected1');
            });
        
            element.classList.add('selected1');
        
            // Lưu lại size vào input ẩn
            document.querySelector('input[name="product_size"]').value = size;
        }
        // ktra người dùng đăng nhập chưa 
        document.getElementById('addToCartBtn').addEventListener('click', function(event) {
            // Kiểm tra nếu người dùng chưa đăng nhập (kiểm tra cookie hoặc session)
            var customerId = getCookie('customer_id');
            if (!customerId) {
                event.preventDefault(); // Ngừng hành động mặc định của nút
                alert('Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng!');
            }
        });
        
        document.getElementById('buyNowBtn').addEventListener('click', function(event) {
            // Kiểm tra nếu người dùng chưa đăng nhập (kiểm tra cookie hoặc session)
            var customerId = getCookie('customer_id');
            if (!customerId) {
                event.preventDefault(); // Ngừng hành động mặc định của nút
                alert('Vui lòng đăng nhập để mua ngay!');
                // Bạn có thể mở modal đăng nhập tại đây, ví dụ:
            }
        });
        
        // Hàm để lấy giá trị của cookie
        function getCookie(name) {
            var value = "; " + document.cookie;
            var parts = value.split("; " + name + "=");
            if (parts.length == 2) return parts.pop().split(";").shift();
        }
        
// kiểm tra xem đã chọn size hay là chọn hình ảnh chưa
// Kiểm tra lựa chọn kích cỡ và hình ảnh
function validateForm(event) {
    // Kiểm tra hình ảnh được chọn
    const selectedImage = document.querySelector('.image-list .detail__classify-item.selected');
    const selectedSize = document.querySelector('.size-list .detail__classify-item.selected');

    if (!selectedImage) {
        alert("Vui lòng chọn hình ảnh trước khi thêm vào giỏ hàng hoặc mua ngay.");
        event.preventDefault(); // Ngăn chặn gửi form
        return false;
    }

    if (!selectedSize) {
        alert("Vui lòng chọn kích cỡ trước khi thêm vào giỏ hàng hoặc mua ngay.");
        event.preventDefault(); // Ngăn chặn gửi form
        return false;
    }

    // Nếu hợp lệ, cho phép gửi form
    return true;
}

// Thêm sự kiện click vào từng hình ảnh và kích cỡ
function selectImage(element, imgUrl) {
    // Bỏ chọn hình ảnh trước đó
    document.querySelectorAll('.image-list .detail__classify-item').forEach(item => item.classList.remove('selected'));

    // Đánh dấu hình ảnh được chọn
    element.classList.add('selected');
}

function selectSize(element, size) {
    // Bỏ chọn kích cỡ trước đó
    document.querySelectorAll('.size-list .detail__classify-item').forEach(item => item.classList.remove('selected'));

    // Đánh dấu kích cỡ được chọn
    element.classList.add('selected');
}

// Gắn sự kiện validate vào các nút
document.getElementById('addToCartBtn').addEventListener('click', validateForm);
document.getElementById('buyNowBtn').addEventListener('click', validateForm);


