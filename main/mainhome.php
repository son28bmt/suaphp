
                <div class="main-header">
            <div class="main-header-1">
                <ul class="main-submenu">
                        <li id="danhMuc" onclick="toggleSubMenu()">
                            <i class="fa-solid fa-bars" style="color: #000000;"></i> <span>Danh Mục Sản phẩm </span>
                            <ul class="navds-menu">
                                <li><a href="home.php?quanly=sua3tuoi"> <i class="fa-solid fa-child" style="color: #020203;"></i><span> Sữa cho bé dưới 3 tuổi </span> </a></li>
                                <li><a href="home.php?quanly=suamebau"><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa cho mẹ bầu </span> </a></li>
                                <li><a href="home.php?quanly=suachua"><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa chua </span> </a></li>
                                <li><a href="home.php?quanly=suachieucao"><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa cho trẻ tăng chiều cao </span> </a></li>
                                <li><a href="home.php?quanly=suatangcan"><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa cho trẻ tăng cân </span> </a></li>
                                <li><a href="home.php?quanly=suachua"><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa chua </span> </a></li>
                                <li><a href="home.php?quanly=suachieucao"><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa cho trẻ tăng chiều cao </span> </a></li>
                                <li><a href="home.php?quanly=suatangcan"><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa cho trẻ tăng cân </span> </a></li>
                                <li><a href="home.php?quanly=suachua"><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa chua </span> </a></li>
                            </ul>
                        </li>
                    </ul>
                <script>
                    function toggleSubMenu() {
                        // Your click event logic here
                        var submenu = document.querySelector('.navds-menu');
                        submenu.classList.toggle('show-submenu');
                    }
                </script>
                <div class="slideshow-container">
                <div class="mySlides fade">
                    <img style="width:100%;"  src="./image/y-tuong-quang-cao-voi-chu-bo-cua-Vinamilk.jpg" alt="ảnh 1">
                </div>
                <div class="mySlides fade">
                    <img style="width:100%;" src="./image/maxresdefault(9).jpg" alt="3">
                </div>
                
                <div class="mySlides fade">
                    <img style="width:100%;" src="./image/uong-sua-dac-ong-tho-co-tot-khong-wheyshop-1-1697103301463-16971033022011995778717.webp" alt="3">
                </div>
                <div class="mySlides fade">
                    <img style="width:100%;" src="./image/HINH SUA DUNG DC FIX.png" alt="3">
                </div>
                
                <!-- Thêm các slide ảnh khác ở đây -->
                </div>

                <!-- Thêm nút điều hướng -->

                <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {
                        slideIndex = 1;
                    }
                    slides[slideIndex - 1].style.display = "block";
                    setTimeout(showSlides, 5000); // Đổi ảnh sau mỗi 2 giây (2000 ms)
                    }
                </script>
            </div>
</div>