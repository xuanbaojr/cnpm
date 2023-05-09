<html>
  <head>

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/profile.css', 'resources/js/bootstrap.js',
    'resources/css/swiper-bundle.min.css',
    'resources/css/index.css',
    'resources/css/animation.css',
    'resources/css/modal.css',
    'resources/css/slider.css',
    'resources/css/sidebar.css',
    'resources/css/searchbar.css',
    'resources/css/pagination.css',
    'resources/css/bootstrap.min.css',
    'resources/css/detail.css',])
    <title>Room</title>
</head>
<body>
    <div id="main">
      
      <!-- Begin: Content -->
      @section('content')
      <div class="content" style="margin: 0 10%">
        <div class="room-content ">
          <div id="demo" class="carousel slide " data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
              
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./assets/img/room1-1.jpg" alt="Los Angeles" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/img/room1-2.jpg" alt="Chicago" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/img/room1-3.jpg" alt="New York" class="d-block w-100">
                  </div>
                </div>
              
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
          </div>
          <div class="head-detail">
            <h1 class="detail-title">{{$post->title}}</h1>
            <address class="post-address">{{$post->dia_chi}}</address>
            <div class="post-attributes"><div class="item price"><i></i><span style="color: #16c784; font-weight: bold; font-size: 1.5rem">{{$post->gia_phong}}/tháng</span></div><div class="item acreage"><i></i><span> {{$post->dien_tich}}<sup>2</sup></span></div><div class="item published"><i></i><span title="Thứ 7, 22:45 15/04/2023">{{$post->updated_at}}</span></div><div class="item hashtag"><i></i><span>603145</span></div></div>
          </div>
          <div class="post-main-detail">
            <section class="section post-main-content">
              <div class="section-header-detail">
                <h2 class="section-title-detail">Thông tin mô tả</h2>
              </div>
              <div class="section-content">
              {{$post->description}}
              </div>
            </section>
            <section class="section post-overview">
              <div class="section-header">
                <h3 class="section-title">Đặc điểm tin đăng</h3>
              </div>
              
            </section>
          
          </div>
              
        </div>
        <div class="aside-content">
          <div class="user-detail">
            <div>
              <img class="user-ava" src="./assets/img/avatar1.jpg">
            </div>
            <div class="name-user" title="">
              <a href="/profile/{{$post->user->id}}" style="color: #2C2C2C;">{{$post->user->username}}</a>
            </div>
            <a href="" class="see-profile"> </a>
            <a class="contact-detail" href="#">Gửi yêu cầu</a>
          </div>
          <div class="like-post-list">
            <div class="section-header">
              <span class="section-title">Tin bạn thích</span>
            </div>
            <ul class="like-listing">
              <li class="like-post-item">
                <a href="/phong-tro-moi-xay-48-13-luong-the-vinh-phuong-tan-thoi-hoa-tan-phu-gan-dam-sen-pr603145.html">
                    <img class="lazy_done" src="./assets/img/room1-1.jpg" height="65" width="65" layout="responsive">
                  <div class="post-meta">
                    <p class="post-title" style="color: #055699;;margin-bottom: 0.5rem;">Cho thuê phòng trọ tại Cầu Giấy</p>
                    <p class="post-list-price">1.8 triệu/tháng</p>
                    
                  </div>
                </a>
              </li>
              <li class="like-post-item">
                <a href="/phong-tro-moi-xay-48-13-luong-the-vinh-phuong-tan-thoi-hoa-tan-phu-gan-dam-sen-pr603145.html">
                  <img class="lazy_done" src="./assets/img/room1-1.jpg" height="65" width="65" layout="responsive">
                <div class="post-meta">
                  <p class="post-title" style="color: #055699;margin-bottom: 0.5rem;">Cho thuê phòng trọ tại Cầu Giấy</p>
                  <p class="post-list-price">1.8 triệu/tháng</p>
                  
                </div>
              </a>
              </li>
              <li class="like-post-item">
                <a href="/phong-tro-moi-xay-48-13-luong-the-vinh-phuong-tan-thoi-hoa-tan-phu-gan-dam-sen-pr603145.html">
                  <img class="lazy_done" src="./assets/img/room1-1.jpg" height="65" width="65" layout="responsive">
                <div class="post-meta">
                  <p class="post-title" style="color: #055699;;margin-bottom: 0.5rem;">Cho thuê phòng trọ tại Cầu Giấy</p>
                  <p class="post-list-price">1.8 triệu/tháng</p>
                </div>
              </a>
              </li>
              <li class="like-post-item">
                <a href="/phong-tro-moi-xay-48-13-luong-the-vinh-phuong-tan-thoi-hoa-tan-phu-gan-dam-sen-pr603145.html">
                  <img class="lazy_done" src="./assets/img/room1-1.jpg" height="65" width="65" layout="responsive">
                <div class="post-meta">
                  <p class="post-title" style="color: #055699;;margin-bottom: 0.5rem;">Cho thuê phòng trọ tại Cầu Giấy</p>
                  <p class="post-list-price">1.8 triệu/tháng</p>
                </div>
              </a>
              </li>
              <li class="like-post-item">
                <a href="/phong-tro-moi-xay-48-13-luong-the-vinh-phuong-tan-thoi-hoa-tan-phu-gan-dam-sen-pr603145.html">
                  <img class="lazy_done" src="./assets/img/room1-1.jpg" height="65" width="65" layout="responsive">
                <div class="post-meta">
                  <p class="post-title" style="color: #055699;;margin-bottom: 0.5rem;">Cho thuê phòng trọ tại Cầu Giấy</p>
                  <p class="post-list-price">1.8 triệu/tháng</p>
                </div>
              </a>
              </li>
              <li class="like-post-item">
                <a href="/phong-tro-moi-xay-48-13-luong-the-vinh-phuong-tan-thoi-hoa-tan-phu-gan-dam-sen-pr603145.html">
                  <img class="lazy_done" src="./assets/img/room1-1.jpg" height="65" width="65" layout="responsive">
                <div class="post-meta">
                  <p class="post-title" style="color: #055699;;margin-bottom: 0.5rem;">Cho thuê phòng trọ tại Cầu Giấy</p>
                  <p class="post-list-price">1.8 triệu/tháng</p>
                </div>
              </a>
              </li>
              <li class="like-post-item">
                <a href="/phong-tro-moi-xay-48-13-luong-the-vinh-phuong-tan-thoi-hoa-tan-phu-gan-dam-sen-pr603145.html">
                  <img class="lazy_done" src="./assets/img/room1-1.jpg" height="65" width="65" layout="responsive">
                <div class="post-meta">
                  <p class="post-title" style="color: #055699;;margin-bottom: 0.5rem;">Cho thuê phòng trọ tại Cầu Giấy</p>
                  <p class="post-list-price">1.8 triệu/tháng</p>
                </div>
              </a>
              </li><li class="like-post-item">
                <a href="/phong-tro-moi-xay-48-13-luong-the-vinh-phuong-tan-thoi-hoa-tan-phu-gan-dam-sen-pr603145.html">
                  <img class="lazy_done" src="./assets/img/room1-1.jpg" height="65" width="65" layout="responsive">
                <div class="post-meta">
                  <p class="post-title" style="color: #055699;;margin-bottom: 0.5rem;">Cho thuê phòng trọ tại Cầu Giấy</p>
                  <p class="post-list-price">1.8 triệu/tháng</p>
                </div>
              </a>
              </li>
              <li class="like-post-item">
                <a href="/phong-tro-moi-xay-48-13-luong-the-vinh-phuong-tan-thoi-hoa-tan-phu-gan-dam-sen-pr603145.html">
                  <img class="lazy_done" src="./assets/img/room1-1.jpg" height="65" width="65" layout="responsive">
                <div class="post-meta">
                  <p class="post-title" style="color: #055699;;margin-bottom: 0.5rem;">Cho thuê phòng trọ tại Cầu Giấy</p>
                  <p class="post-list-price">1.8 triệu/tháng</p>
                </div>
              </a>
              </li>
            </ul>
          </div>
        </div>
        
        
      </div>


      <footer>
        <div class="content">
          <div class="left box">
            <div class="upper">
              <div class="topic">About us</div>
              <p>Roommate là một web giúp người dùng tìm kiếm và đặt phòng trọ và bạn trọ một cách dễ dàng. Với roomate,bạn có thể xem thông tin chi tiết về các phòng trọ, như giá cả, diện tích, địa điểm và các tiện nghi khác.</p>
            </div>
            <div class="lower">
              <div class="topic">Contact us</div>
              <div class="phone">
                <a href="#">
                  <i class="fas fa-phone-volume"></i>0843325687 </a>
              </div>
              <div class="email">
                <a href="#">
                  <i class="fas fa-envelope"></i>phungquan27052003@gmail.com </a>
              </div>
            </div>
          </div>
          <div class="middle box">
            <div class="topic">Our Services</div>
            <div>
              <a href="#">Trang chủ</a>
            </div>
            <div>
              <a href="#">Hỗ trợ người dùng </a>
            </div>
            <div>
              <a href="#">Câu hỏi thường gặp</a>
            </div>
            <div>
              <a href="#">Chính sách và điều khoản</a>
            </div>
            <div>
              <a href="#">Quy định đăng tin</a>
            </div>
            <div>
              <a href="#">Blog</a>
            </div>
          </div>
          <div class="right box">
            <div class="topic">Subscribe us</div>
            <form action="#">
              <input type="text" placeholder="Enter email address">
              <input type="submit" name="" value="Send">
              <div class="media-icons">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-youtube"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </form>
          </div>
        </div>
        <div class="bottom-footer">
          <p>Copyright &#169; 2023 <a href="#">QuanPhung</a> All rights reserved </p>
        </div>
      </footer>
      <div class="side_bar">
        <div class="sidebar">
          <div class="logo-sidebar">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">Roommate</span>
          </div>
          <div class="sidebar-content">
            <ul class="lists">
              <li class="list">
                <a href="#" class="nav-link">
                  <i class="bx bx-home-alt icon"></i>
                  <span class="link">Trang chủ</span>
                </a>
              </li>
              <li class="list">
                <a href="#" class="nav-link">
                  <i class='bx bx-check-shield icon'></i>
                  <span class="link">Đổi mật khẩu</span>
                </a>
              </li>
              <li class="list">
                <a href="#" class="nav-link">
                  <i class="bx bx-bell icon"></i>
                  <span class="link">Thông báo</span>
                </a>
              </li>
              <li class="list">
                <a href="#" class="nav-link">
                  <i class='bx bx-history icon'></i>
                  <span class="link">Lịch sử thuê phòng</span>
                </a>
              </li>
              <li class="list">
                <a href="#" class="nav-link">
                  <i class='bx bx-user-circle icon'></i>
                  <span class="link">Quản lý tài khoản</span>
                </a>
              </li>
              <li class="list">
                <a href="#" class="nav-link">
                  <i class='bx bx-support icon'></i>
                  <span class="link">Hỗ trợ khách hàng</span>
                </a>
              </li>
            </ul>
            <div class="bottom-cotent" style="margin-left: 25px">
              <li class="list">
                <a href="#" class="nav-link">
                  <i class="bx bx-log-out icon"></i>
                  <span class="link">Logout</span>
                </a>
              </li>
            </div>
          </div>
        </div>
      </div>
      <section class="overlay"></section>
      <div class="modal-contact">
        <div class="bottom">
          <div class="info"> Nhập thông tin của bạn <br>để được chúng tôi hỗ trợ sớm nhất </div>
          <form action="#">
            <div class="input-box">
              <input type="text" placeholder="Enter your phone number" required style="padding-left: 15px;">
            </div>
            <div class="input-box">
              <input type="text" placeholder="Enter your full name" required style="padding-left: 15px;">
            </div>
            <div class="input-box">
              <div class="row">
                <div class="col">
                  <input type="submit" value="Subscribe" class="js-submit">
                </div>
                <div class="col">
                  <button class="close-btn-contact js-close-btn-contact">Cancel</button>
                </div>
              </div>
            </div>
          </form>
          <div class="footer"> Don't worry, we don't spam </div>
        </div>
      </div>
      <div class="modal">
        <div class="modal-container">
          <div class="modal-close">
            <i class="ti-close"></i>
          </div>
          <header class="modal-header"> Đánh giá của bạn </header>
          <div class="rating-box">
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
          <div class="card" style="border: none; background-color: transparent;padding: 0 8%">
            <form>
              <div class="form-group">
                <div class="input-group">
                  <textarea class="form-control" id="comment-input" rows="6" placeholder="Nhập nội dung comment"></textarea>
                  <div class="input-group-append">
                    <button class="btn" id="clear-comment">
                      <i class="ti-close"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="row was-validated" action="/action_page.php" style="margin-top: 5px;">
                <div class="col-5" style="padding-right: 0px;">
                  <input type="text" class="form-control" id="email-comment" placeholder="Email..." name="email" required>
                  <div class="valid-feedback">Hợp lệ.</div>
                  <div class="invalid-feedback">Vui lòng không để trống ô này.</div>
                </div>
                <div class="col-5" style="padding-left: 2px;padding-right: 0px;">
                  <input type="text" class="form-control" id="name-user-comment" placeholder="Họ và tên..." name="name" required>
                  <div class="valid-feedback">Hợp lệ.</div>
                  <div class="invalid-feedback">Vui lòng không để trống ô này.</div>
                </div>
                <div class="col-2">
                  <button type="button" class="button-animation btn-info" style="margin-left: -5px;padding-top: 6px;padding-bottom: 6px;">Xác nhận</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
  
