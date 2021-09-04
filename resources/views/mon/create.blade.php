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
                                <li><span>Thêm Môn Học</span></li>
                            </ul>
                        </div>
                    </div>
                    @include('head.logout')
                </div>
            </div>
          
                  
                   <br>
                   <div style="width: 590px;
                   height: 100%; margin: 50px auto;"> 
                    <form method="post" action="{{route('mon-manager.store')}}">
                    
                        @csrf
                        <div class="login-form-head">
                            <h4>Thêm Môn Học</h4>
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
                                <label for="example-text-input" class="col-form-label">Tên Môn Học</label>
                                <input class="form-control" name="ten" type="text"  id="example-text-input">
                                <div style="color: red">
                                
                                    {{$errors->first('ten')}}
                                 </div>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Thời Gian Bắt Đầu</label>
                                <input class="form-control" name="tg_bat_dau" type="date" value="Carlos Rath" id="example-text-input">
                                <div style="color: red">
                                
                                    {{$errors->first('tg_bat_dau')}}
                                 </div>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Thời Gian Kết Thúc</label>
                                <input class="form-control" name="tg_bket_thuc" type="date" value="Carlos Rath" id="example-text-input">
                                <div style="color: red">
                                
                                    {{$errors->first('tg_bket_thuc')}}
                                 </div>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Ghi Chú</label>
                                <br>
                                <textarea name="ghi_chu" id="" cols="70" rows="6"></textarea>
                                <div style="color: red">
                                
                                    {{$errors->first('ghi_chu')}}
                                 </div>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Ngành Học:</label>
                                <select class="form-control" name="nganh_id" >
                                    <option>Select</option>
                                    @foreach ( $major as $m)
                                        <option value="{{ $m->id }}">{{ $m->ten }}</option>
                                        @endforeach
                                </select>
                            </div>
                           
                       
                          <br><br>
                          
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit">Thêm<i class="ti-arrow-right"></i></button>
                                
                        </div>
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
