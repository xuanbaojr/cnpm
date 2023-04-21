@extends('layouts.app')
<!DOCTYPE html>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
   
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/profile.css'])


   
    @section('content')
    
   <main >
   <div class="row">
    <div class="col-lg-2 sidebar">
        <div class="user-info">
            <div class="user_avatar"><img src="./assets/img/avatar1.jpg"></div>
            <div class="user_meta">
                <div class="inner">					
                    <div class="user_name">Phùng Lê Anh Quân</div>
                    <div class="user_number">0843325687</div>
                </div>
            </div>


            
               
                <div id="follow_button">
                    <follow_button :user = "'{{$user->id}}'"></follow_button>
                </div>
`          


            <button class="btn btn-danger">Đăng tin</button>
        </div> 
        <ul class="nav-sidebar">
            <li class="nav-item">
                <a href="managePost.html" class="nav-link">Quản lý bài đăng</a>
            </li>
            <li class="nav-item">
                <a href="profile.html" class="nav-link">Chỉnh sửa thông tin</a>
            </li>
            <li class="nav-item">
                <a href="changepass.html" class="nav-link">Đổi mật khẩu</a>
            </li>
            <li class="nav-item">
                <a href="moneyHistory.html" class="nav-link">Lịch sử nạp tiền</a>
            </li>
            <li class="nav-item">
                <a href="payHistory.html" class="nav-link">Lịch sử thanh toán</a>
            </li>
            <li class="nav-item">
                <a href="login-signup.html" class="nav-link">Đăng xuất</a>
            </li>
        </ul>
    </div>
    <div class="col-lg-10 change-info">
        <div class="title">
            <h2>Cập nhật thông tin cá nhân</h2>
        </div>
        <div class="main-info">

            <div class="row">
                <div class="col-lg-1" ></div>
                <div class="col-lg-1 input-title">Mã khách hàng</div>
                <div class="col-lg-2 input-size">
                    <input type="text" readonly="" class="form-control disable valid" id="user_id" value="#129268" aria-invalid="false">
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-1 input-title">Số điện thoại</div>
                <div class="col-lg-2 input-size">
                    <input type="text" readonly="" class="form-control disable valid" id="user_id" value="0843325687" aria-invalid="false">
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2  input-size">
                    <a href="#" class="change-number">Đổi số điện thoại</a>
                </div>
                
            </div>
        </div>
        <div class="more-info">

            
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-1 input-title">Tên hiển thị</div>
                <div class="col-lg-2 input-size">
                    <input type="text">
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-1 input-title">Email</div>
                <div class="col-lg-2 input-size">
                    <input type="text">
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-1 input-title">Số zalo</div>
                <div class="col-lg-2 input-size">
                    <input type="text">
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-1 input-title">Facebook</div>
                <div class="col-lg-2 input-size">
                    <input type="text">
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-1 input-title">Ảnh đại diện</div>
                <div class="col-lg-2 input-avatar-size">
                    <img src="" alt="avatar" id="demo-ava">
                    <input type="file" name="Choose file" id="file-avatar">
                </div>
                
            </div>   
            
            
        </div>    
        <button class="btn btn-primary save-button">Lưu & Cập nhật</button>

    </div>
   </div>
   </main>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/profile.js"></script>



   @endsection
   