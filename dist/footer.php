<footer class="footerArea" >
  <div class="wrap" data-aos="fade" data-aos-opacity="1">

    <div class="logoBox">
      <div class="inner">
        <a href="index.php">
          <img src="./images/footerLogo.svg" alt="大茗本位製茶堂" />
        </a>
      </div>
    </div>

    <div class="navBox">
      <nav class="footerNav">
        <ul class="nav-links">
          <li><a href="#"><span>品牌故事</span></a></li>
          <li><a href="#"><span>推薦飲品</span></a></li>
          <li><a href="#"><span>最新消息</span></a></li>
          <li><a href="#"><span>門市據點</span></a></li>
          <li><a href="#"><span>加盟資訊</span></a></li>
          <li><a href="#"><span>聯絡我們</span></a></li>
        </ul>
      </nav>
    </div>

    <div class="socialBox">
      <div class="iconBox">
        <a class="icon" href="javascript:;">
          <img src="./images/facebook.png" alt="">
        </a>
        <a class="icon" href="javascript:;">
          <img src="./images/instagram.png" alt="">
        </a>
      </div>
      <div class="emailBox">
        <span>Email/</span>
        <a href="mailto:test@gmail.com">test@gmail.com</a>
      </div>
    </div>
  </div>
  <div class="bottomBox" data-aos="fade" data-aos-delay="900" data-aos-opacity="1">
    <p class="text">本網站用途為切版仿切練習，<br class="show-mb">並不會進行任何商業用途。</p>
    <div class="goTop">
      <a href="javascript:;">
        <p>page top</p>
      </a>
    </div>
  </div>
</footer>

<script>
  AOS.init({
    duration: 1200,
    easing: 'ease-in-out',
    delay: 400,
    opacity: 0
  });

  const goTop = document.querySelector('.goTop');

  goTop.addEventListener('click', () => {
    const bannerArea = document.querySelector('.bannerArea');
    bannerArea.scrollIntoView({
      behavior: 'smooth'
    }); //auto是直接跳過去
  });
</script>