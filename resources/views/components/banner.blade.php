<div id="announcementBanner" class="announcement-banner" data-aos="fade-down"
    data-aos-easing="linear"
    data-aos-duration="1200">
    <span>🩵 Multi-Mask - 25% off Face Masks + Face Mask Kits 🩵 SHOP NOW </span>
    <button id="closeBannerBtn" class="close-btn">&times;</button>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const closeBannerBtn = document.getElementById("closeBannerBtn");
        const announcementBanner = document.getElementById("announcementBanner");

        closeBannerBtn.addEventListener("click", function() {
            announcementBanner.style.display = "none";
        });
    });
</script>