<!doctype html>
<html class="no-js" lang="en">

    @include('head.heads')

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        @include('menu.menus')
       {{-- menu --}}
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            @include('head.head_area')
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">QUẢN LÝ</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Sửa Giáo Vụ</span></li>
                            </ul>
                        </div>
                    </div>
                    @include('head.logout')
                </div>
            </div>
          
                  
                   <br>
                   <div style="width: 590px;
                   height: 100%; margin: 50px auto;"> 
                    <form method="post" action="{{route('admin-manager.update',$admin_manager)}}">
                        @if (session('error'))
                            <h1>{{ session('error') }}</h1>
                        @endif
                        @method('PUT')
                        @csrf
                        <div class="login-form-head">
                            <h4>Sửa Thông Tin Giáo Vụ </h4>
                            {{-- <p>Hello there, Sign up and Join with Us</p> --}}
                        </div>
                        @if(session()->has('message'))
                        <div class="alert alert-success"style="color: green">
                            {!! session()->get('message') !!}
                        </div>
                    @elseif(session()->has('error'))
                         <h1><div class="alert alert-danger" style="color: red">
                            {!! session()->get('error') !!}
                        </div></h1>
                    @endif
                    <div class="login-form-body">
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Họ Và Tên</label>
                            <input class="form-control" name="ten" value="{{ old('ten', $admin_manager->ten) }}"  id="example-text-input">
                            <div style="color: red">
                            
                                {{$errors->first('ten')}}
                             </div>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Ngày Sinh</label>
                            <input class="form-control" type="date"  name="birthday" value="{{ old('birthday', $admin_manager->birthday) }}"  id="example-text-input" >
                            <div style="color: red">
                            
                                {{$errors->first('birthday')}}
                             </div>
                        </div>
                               
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Email</label>
                            <input class="form-control" type="email" name="email" value="{{ old('email', $admin_manager->email) }}"  id="example-text-input">
                            <div style="color: red">
                            
                                {{$errors->first('email')}}
                             </div>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Số Điện Thoại</label>
                            <input class="form-control" type="text" name="phone" value="{{ old('email', $admin_manager->phone) }}"  id="example-text-input">
                            <div style="color: red">
                            
                                {{$errors->first('phone')}}
                             </div>
                        </div>
                               
                        <b class="text-muted mb-3 mt-4 d-block">Giới Tính:</b>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" checked id="customRadio4" name="gioi_tinh" class="custom-control-input" value="1" 
                            {{ old('gioi_tinh') == '1' || $admin_manager->gioi_tinh == '1' ? 'checked' : ''}}
                            >
                            <label class="custom-control-label" for="customRadio4">Nam</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadio5" name="gioi_tinh" class="custom-control-input" value="0"
                            {{ old('gioi_tinh') == '0' || $admin_manager->gioi_tinh == '0' ? 'checked' : ''}}
                            >
                            <label class="custom-control-label" for="customRadio5">Nữ</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio"  id="customRadio6" name="gioi_tinh" class="custom-control-input" >
                            <label class="custom-control-label" for="customRadio6">Khác</label>
                            <br>
                            <div style="color: red">
                            {{$errors->first('gioi_tinh')}}
                            {{-- <i class="ti-mobile"></i> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Địa Chỉ</label>
                            <input class="form-control" type="text" name="dia_chi" value="{{ old('dia_chi', $admin_manager->dia_chi) }}"  id="example-text-input">
                            <div style="color: red">
                            
                                {{$errors->first('dia_chi')}}
                             </div>
                        </div>
                               
                                <br>
                               
                                <div class="form-group">
                                    <label class="col-form-label">Quyền:</label>
                                    <select class="form-control" name="role" >
                                       
                                        <option value="1" {{ old('role') == '1' || $admin_manager->role == '1' ? 'selected' : ''}}>super Admin</option>
                                        <option value="0" {{ old('role') == '0' || $admin_manager->role == '0' ? 'selected' : ''}}> Admin</option>
                                    </select>
                                </div>
                          
                            
                            {{-- <div class="">
                                <label for="">Avatar:  </label>
                                <input type="file" id="" name="avatar"> <img src="file" alt="">
                                {{-- <i class="ti-upload"></i> --}}
                                <div class="text-danger"></div>
                            </div> 
                         
                          
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit">Đăng Ký <i class="ti-arrow-right"></i></button>
                                
                        </div>
                        <br><br><br><br><br>
                    </form>
                </div>
                
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Facebook my: <a href="https://www.facebook.com/programToan/">Toàn kim</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    @include('head.offset_area')
    <!-- offset area end -->
    <!-- jquery latest version -->
    @include('head.jquery')
</body>

</html>
