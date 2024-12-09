
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
        


