<div class="container">
  <div class="section-header">
    <div class="section-title">
      <h1>Artikel Terbaru</h1>
      <div class="line-light"></div>
    </div>
    <a href="#" class="link">Lihat Semua Artikel &rightarrow;</a>
  </div>

  <div id="article-desktop">
    <div class="row">
      <div class="col-6">
        <div id="headnews" data-bg='url("https://images.unsplash.com/photo-1503694978374-8a2fa686963a?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D")'>
          <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, dolorum?</h3>
          <p>21 April 20XX</p>
        </div>
      </div>
      <div class="col-6">
        <div id="otherNews">
          <div id="secondNews" class="other-news">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="News Image">
            </div>
            <div class="content">
              <span>21 April 20XX</span>
              <h4 class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, animi.</h4>
            </div>
          </div>
          <div id="thirdNews" class="other-news">
            <span>21 April 20XX</span>
            <h3 class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim repudiandae tempore id. Cumque deleniti quis facilis sequi ducimus nostrum placeat aliquid quidem recusandae distinctio! Fugiat facere veritatis alias officiis debitis.</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius quod vitae dolore culpa fugit! Autem sapiente facere dolorem quibusdam dolorum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="article-mobile">
    <div class="other-news">
      <div class="img">
        <img src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="News Image">
      </div>
      <div class="content">
        <span>21 April 20XX</span>
        <h4 class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, animi.</h4>
      </div>
    </div>
    <div class="other-news">
      <div class="img">
        <img src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="News Image">
      </div>
      <div class="content">
        <span>21 April 20XX</span>
        <h4 class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, animi.</h4>
      </div>
    </div>
    <div class="other-news">
      <div class="img">
        <img src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="News Image">
      </div>
      <div class="content">
        <span>21 April 20XX</span>
        <h4 class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
      </div>
    </div>
  </div>
</div>

<script>
const headnews = document.querySelector("#headnews").forEach(item => {
  const bgImage = item.dataset.bg;
  item.style.setProperty('--headnews-img', `url(${bgImage})`);
  item.style.background = `linear-gradient(to bottom right, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3)), url(${bgImage})`;
});
</script>