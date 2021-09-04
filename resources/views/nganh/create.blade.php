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
                                <li><span> Them nganh hoc</span></li>
                            </ul>
                        </div>
                    </div>
                    @include('head.logout')
                </div>
            </div>
          
                  
                   <br>
                   <div style="width: 590px;
                   height: 100%; margin: 50px auto;"> 
                    <form method="post" action="{{route('nganh-manager.store')}}">
                    
                        @csrf
                        <div class="login-form-head">
                            <h4>Thêm nganh </h4>
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
                                <label for="example-text-input" class="col-form-label">Tên Ngành</label>
                                <input class="form-control" name="ten" type="text"  id="example-text-input">
                                <div style="color: red">
                                
                                    {{$errors->first('ten')}}
                                 </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Ghi Chú</label>
                                <input class="form-control" name="ghi_chu" type="text"  id="example-text-input">
                                <div style="color: red">
                                
                                    {{$errors->first('ghi_chu')}}
                                 </div>
                            </div>
                         
                        
                          
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit">them<i class="ti-arrow-right"></i></button>
                                
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
