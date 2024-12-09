// xử lý nút đăng nhập ở index
document.addEventListener('DOMContentLoaded', function () {
document.getElementById('Login').addEventListener('click',function() {     
      var Loginform = document.getElementById('login');   
      var modal = document.getElementById('modal_1');
      var loginDisplay = window.getComputedStyle(Loginform).getPropertyValue('display');
      var modalDisplay = window.getComputedStyle(modal).getPropertyValue('display');

        if(loginDisplay === 'none' && modalDisplay  === 'none' ){    
         Loginform.style.display = 'block';
         modal.style.display = 'flex';

        }
           
     });
    });
    // xử lý nút chuyển qua đăng ký của form đăng nhập
    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('moveRegister').addEventListener('click',function() {     
            var Loginform = document.getElementById('login');   
            var Registerform = document.getElementById('register'); 
            var loginDisplay = window.getComputedStyle(Loginform).getPropertyValue('display');
            var RegisterDisplay = window.getComputedStyle(Registerform).getPropertyValue('display');
              if(loginDisplay === 'block'  && RegisterDisplay === 'none' ){    
               Loginform.style.display = 'none';
               Registerform.style.display = 'block';
              }              
           });
          });
    
  // xử lý nút đăng ký ở index
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('Register').addEventListener('click',function() {     
          var Registerform = document.getElementById('register');   
          var modal = document.getElementById('modal_1');
          var RegisterDisplay = window.getComputedStyle(Registerform).getPropertyValue('display');
          var modalDisplay = window.getComputedStyle(modal).getPropertyValue('display');
    
            if(RegisterDisplay === 'none' && modalDisplay  === 'none' ){    
              Registerform.style.display = 'block';
             modal.style.display = 'flex';
            }               
         });
        });
          // xử lý nút chuyển qua đăng nhập của form đăng ký
    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('moveLogin').addEventListener('click',function() {     
            var Loginform = document.getElementById('login');   
            var Registerform = document.getElementById('register'); 
            var loginDisplay = window.getComputedStyle(Loginform).getPropertyValue('display');
            var RegisterDisplay = window.getComputedStyle(Registerform).getPropertyValue('display');
              if(loginDisplay === 'none'  && RegisterDisplay === 'block' ){    
               Loginform.style.display = 'block';
               Registerform.style.display = 'none';
              }              
           });
          });

     // xử lý nút đăng nhập
    //  document.getElementById('btn-login').addEventListener('click', function() {
    //      document.getElementById('login').submit();
    //  });
       // xử lý nút đăng ký
    //    document.getElementById('btn-register').addEventListener('click', function() {
    //     document.getElementById('register').submit();
    // });

     // xử lý nút trở lại trong đăng nhập 
     document.getElementById('come-back').addEventListener('click',function(){
      window.location.href = "index.php";
    //  window.history.back();
     });
    // xử lý trở về trong đăng ký
     document.getElementById('come-back__register').addEventListener('click',function(){
      window.location.href = "index.php";
     });

    // xử lý tăng giảm sản phẩm
    var quantityElement = document.getElementById("quantity-id");
    function increaseQuantity() {
      var currentQuantity = parseInt(quantityElement.innerText);
      quantityElement.innerText = currentQuantity + 1;
  }

  function decreaseQuantity() {
      var currentQuantity = parseInt(quantityElement.innerText);
      if (currentQuantity > 1) {
          quantityElement.innerText = currentQuantity - 1;
      }
  }

  
         
         // hàm lấy giá trị của 1 cookie
              function getCookie(name) {
                 // Tạo chuỗi chứa tên cookie cùng với dấu '=' ví dụ ở đây là truyền vào customer_id nên thành customer_id=
                var cookieName = name + '=';
                   // Giải mã chuỗi cookie để lấy được tất cả các cookie đã được lưu vì khi gửi đến máy chủ sẽ có khả năng bị mã hoá để bảo mật
                var decodedCookie = decodeURIComponent(document.cookie);
                
                var cookieArray = decodedCookie.split(';');
                for (var i = 0; i < cookieArray.length; i++) {
                     // Lấy một cookie từ mảng và loại bỏ khoảng trắng ở đầu và cuối chuỗi
                    var cookie = cookieArray[i].trim();
                    if (cookie.indexOf(cookieName) === 0) {
                      // cookieName.length là độ dài của của tên cookie truyền vào như customer_id=
                      // cookie.length: bao gồm cả cookieName.length + thêm giá trị cookie như customer_id=1
                      // substring cắt điểm đầu và điểm cuối  trả về giá trị của cookie như 1 hay 2
                        return cookie.substring(cookieName.length, cookie.length);
                    }
                }
                return null;
            }
                 // hàm truyền tên của cookie mà hàm getcookie muốn lấy và lưu giá trị của cookie lại
                 function isLoggedIn() {
                  var loggedInCookie = getCookie('customer_id');
                 return loggedInCookie ;
                }
                
        // xử lý hiện form đăng nhập khi chưa đăng ký mà thêm giỏ hàng
          document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('btn-addcartid').addEventListener('click',function() { 
              var Loginform = document.getElementById('login'); 
              var modal = document.getElementById('modal_1');

              var loginDisplay = window.getComputedStyle(Loginform).getPropertyValue('display');
              var modalDisplay = window.getComputedStyle(modal).getPropertyValue('display');
             
              if(isLoggedIn() === null && loginDisplay === 'none' && modalDisplay === 'none' ){       
                Loginform.style.display = 'block';
                modal.style.display = 'flex'; 
               event.preventDefault();
               }
        });
         });

        
        // hiển thị form địa chỉ
        document.addEventListener('DOMContentLoaded', function () {
          document.getElementById('add-address').addEventListener('click',function() { 
            var adressForm = document.getElementById('address-Id'); 
            var adressDisplay = window.getComputedStyle(adressForm).getPropertyValue('display');
            if(adressDisplay === 'none'){
              adressForm.style.display = 'flex';
            }
          });
        });
        document.addEventListener("DOMContentLoaded", function () {
          const items = document.querySelectorAll(".detail__classify-item");
      
          items.forEach(item => {
              item.addEventListener("click", function () {
                  // Xóa trạng thái 'selected' của tất cả các mục
                  items.forEach(i => i.classList.remove("selected"));
                  
                  // Gắn trạng thái 'selected' vào mục được chọn
                  this.classList.add("selected");
              });
          });
      });
      // sản phẩm phụ
      
      
