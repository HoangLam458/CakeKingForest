<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="{{route('cake')}}" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/final_logo.png">
            </div>
        </a>
        <a href="{{route('cake')}}" class="simple-text logo-normal">
            {{ __('Cake King Forest') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'admin/home') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Thống Kê') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                <a href="{{ route('user.index', 'index') }}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>{{ __('Tài Khoản') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'category' ? 'active' : '' }}">
                <a href="{{ route('category.index', 'index') }}">
                    <i class="nc-icon nc-bullet-list-67"></i>
                    <p>{{ __('Loại sản phẩm') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'invoice' ? 'active' : '' }}">
                <a href="{{ route('invoice.index', 'index') }}">
                    <i class="nc-icon nc-paper"></i>
                    <p>{{ __('Hóa đơn') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'sanpham' ? 'active' : '' }}">
                <a href="{{ route('sanpham.index', 'index') }}">
                    <i class="nc-icon nc-basket"></i>
                    <p>{{ __('Sản Phẩm') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'size' ? 'active' : '' }}">
                <a href="{{ route('size.index', 'index') }}">
                    <i class="nc-icon nc-ruler-pencil"></i>
                    <p>{{ __('Kích Thước Bánh') }}</p>
                </a>
            </li>
            <div class="h-25"></div>
            <li class="{{ $elementActive == 'size' ? 'active' : '' }}">
                <a href="{{ route('logout2') }}">
                    <i class="nc-icon nc-button-power"></i>
                    <p>{{ __('Đăng xuất') }}</p>
                </a>
            </li>
        </ul>






    </div>
</div>
