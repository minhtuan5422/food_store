<script src="<?php echo PUBLIC_URL?>public/vendor/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="<?php echo PUBLIC_URL?>public/vendor/js/jquery.min.js"></script>
<script src="<?php echo PUBLIC_URL?>public/vendor/js/jquery.lazy.min.js"></script>
<script src="<?php echo PUBLIC_URL?>public/vendor/js/fancybox.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js'></script>
<script src="<?php echo PUBLIC_URL?>public/vendor/js/carousel.js"></script>
<script src="<?php echo PUBLIC_URL?>public/vendor/js/carousel.thumbs.js"></script>
<script src="<?php echo PUBLIC_URL?>public/vendor/js/jquery.toc.min.js"></script>
<script src="<?php echo PUBLIC_URL?>public/vendor/js/slick.min.js"></script>
<script src="<?php echo PUBLIC_URL?>public/vendor/js/sticky-kit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?php echo PUBLIC_URL?>public/js/script.js"></script>

<!-- URL Handler -->
<script>
    $(document).ready(function() {
        /* URL handler */
        $(".user__tab--link").click(function(evt) {
            evt.preventDefault();
            var baseUrl = "<?php echo PUBLIC_URL; ?>"; // Đường dẫn gốc của trang web, được định nghĩa trong file config.php hoặc tương tự
            var viewName = $(this).attr("data-view"); // Lấy tên view từ thuộc tính `data-view` của nút tab
            var url = baseUrl + 'admin/' + viewName; // Tạo URL cho tab được chọn
            window.history.pushState({
                path: url
            }, "", url); // Thay đổi URL trên thanh địa chỉ trình duyệt

            // Ẩn tất cả các tab và xóa lớp "active"
            $(".user__content").hide();
            $(".user__tab--link").removeClass("active");

            // Hiển thị tab được chọn và thêm lớp "active"
            $("#" + viewName).show();
            $(this).addClass("active");
        });
    })
</script>