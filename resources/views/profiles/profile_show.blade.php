@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    @vite(['resources/js/user_profile.js','resources/js/bootstrap.bundle.min.js','resources/js/script.js'])
</head>
<body>
  <div id="menu">
  </div>
  
   <main >
   

    <div class="content" style="margin: 0 15%">
        <div class="user-bg">
          <img src="./assets/img/background-user.jpg" alt="" width="100%" height="100%" style="border-radius: 30px;">
        </div>
        <div class="head-user">
            <div class="ava-detail">
                <img src="./assets/img/avatar1.jpg" alt="" height="100%" width="100%" style="border-radius: 50%;">
            </div>
            <div class="user-info-profile">
                <h1 class="user-name">Quân Phùng</h1>
                <h5 class="user-follow" style="margin-left:10px">52K followers</h5>
            </div>
            <div class="func-btn">
              <button class="flw-btn">Follow</button>
              <button class="sp-btn">Tư vấn</button>
            </div>
        </div>
        <div class="user-content-post">
          <div class="side-infomation">
            <div class="side-title">
              <h3>Giới thiệu</h3>
            </div>
            <ul class="info-user-list">
              <li class="info-items">Họ và Tên: Phùng Lê Anh Quân</li>
              <li class="info-items">Ngày sinh: 27/05/2003</li>
              <li class="info-items">Giới tính: Nam</li>
              <li class="info-items">Nghề nghiệp: Sinh viên</li>
              <li class="info-items"><a href="profile.html">Chỉnh sửa thông tin chi tiết</a></li>
            </ul>
          </div>
          <div class="main-post-list">
            <div class="section">
              <!-- Title -->
              <div class="section-header" style="background-color: transparent;box-shadow: none;border-bottom:solid 2px #ccc ;margin-bottom: 10px;">
                <span class="section-title" style="font-size: 25px;">Danh sách tin của bạn</span>
              </div>
              <!-- Sort -->
              <div class="post-listing">
                <div class="post-item clearfix">
                  <div class="info-img">
                    <div class="mainimg">
                      <img src="./assets/img/room1-1.jpg" alt="" width="100%" height="100%">
                    </div>
                    <div class="sideimg">
                      <img src="./assets/img/room1-2.jpg" alt="" width="100%" height="100%" style="width: 100%;">
                      <div class="img-child row" style="margin:0px !important">
                        <div class="col" style="padding: 0px !important; height: 100%;width: 100%;">
                          <img src="./assets/img/room1-3.jpg" alt="">
                        </div>
                        <div class="col" style="padding: 0px !important;height: 100%;width: 100%;">
                          <img src="./assets/img/room1-4.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="post-meta">
                    <h2 class="post-title">
                      <a style="font-size: 14px;line-height: 20px;letter-spacing: -.2px;color: #2C2C2C;text-transform: uppercase;font-weight: 700;" href="#">Phòng trọ Thành Thái</a>
                    </h2>
                    <div class="meta-row clearfix">
                      <span class="post-price">5 triệu/tháng</span>
                      <span class="post-acreage">25m²</span>
                      <span class="post-location">
                        <a style="color: #000" href="#">Quận Phú Nhuận, Hồ Chí Minh</a>
                      </span>
                      <time class="post-time" title="Chủ Nhật, 15:59 12/03/2023">Hôm nay</time>
                      <p class="post-summary">Phòng đẹp nằm ngay trung tâm quận Phú Nhuận (xem hình thật). View trước là đối diện Khách Sạn 3* Tân Sơn Nhất, View sau là đường Nguyễn Văn Trỗi.</p>
                    </div>
                    <div class="contact-info">
                      <div class="post-author">
                        <img src="./assets/img/slider/slider1.jpg" alt="member-item" class="">
                        <span class="">phungquan2003</span>
                      </div>
                      <a rel="nofollow" href="#" class="btn-quick-zalo">Nhắn Zalo</a>
                    </div>
                  </div>
                </div>
                <div class="post-item clearfix">
                  <div class="info-img">
                    <div class="mainimg">
                      <img src="./assets/img/slider/slider1.jpg" alt="" width="100%" height="100%">
                    </div>
                    <div class="sideimg">
                      <img src="./assets/img/slider/slider1.jpg" alt="" width="100%" height="100%" style="width: 100%;">
                      <div class="img-child row" style="margin:0px !important">
                        <div class="col" style="padding: 0px !important">
                          <img src="./assets/img/slider/slider1.jpg" alt="">
                        </div>
                        <div class="col" style="padding: 0px !important">
                          <img src="./assets/img/slider/slider1.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="post-meta">
                    <h2 class="post-title">
                      <a style="font-size: 14px;line-height: 20px;letter-spacing: -.2px;color: #2C2C2C;text-transform: uppercase;font-weight: 700;" href="#">Phòng trọ Thành Thái</a>
                    </h2>
                    <div class="meta-row clearfix">
                      <span class="post-price">5 triệu/tháng</span>
                      <span class="post-acreage">25m²</span>
                      <span class="post-location">
                        <a style="color: #000" href="#">Quận Phú Nhuận, Hồ Chí Minh</a>
                      </span>
                      <time class="post-time" title="Chủ Nhật, 15:59 12/03/2023">Hôm nay</time>
                      <p class="post-summary">Phòng đẹp nằm ngay trung tâm quận Phú Nhuận (xem hình thật). View trước là đối diện Khách Sạn 3* Tân Sơn Nhất, View sau là đường Nguyễn Văn Trỗi.</p>
                    </div>
                    <div class="contact-info">
                      <div class="post-author">
                        <img src="./assets/img/slider/slider1.jpg" alt="member-item" class="">
                        <span class="">phungquan2003</span>
                      </div>
                      <a rel="nofollow" href="#" class="btn-quick-zalo">Nhắn Zalo</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End: Main content -->
            <div class="pagination">
              <button class="button" id="startBtn" disabled>
                <i class="fa-solid fa-angles-left"></i>
              </button>
              <button class="button prevNext" id="prev" disabled>
                <i class="fa-solid fa-angle-left"></i>
              </button>
              <div class="links">
                <a href="#" class="page-link active">1</a>
                <a href="#" class="page-link">2</a>
                <a href="#" class="page-link">3</a>
                <a href="#" class="page-link">4</a>
                <a href="#" class="page-link">5</a>
              </div>
              <button class="button prevNext" id="next">
                <i class="fa-solid fa-angle-right"></i>
              </button>
              <button class="button" id="endBtn">
                <i class="fa-solid fa-angles-right"></i>
              </button>
            </div>
          </div>
        </div>
    </div>
   </main>
<footer>
  <p>hghjghghgh</p>
</footer>
   
</body>
</html>