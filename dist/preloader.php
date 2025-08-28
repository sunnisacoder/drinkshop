<div class="preloader">
    <span class="loader"></span>
</div>

<script>
    window.addEventListener('load', function() {
        const preloader = document.querySelector('.preloader');
        preloader.classList.add('hide');
        
        // 動畫結束後移除 preloader
        preloader.addEventListener('transitionend', function() {
            preloader.style.display = 'none';
        });
    });
</script>
