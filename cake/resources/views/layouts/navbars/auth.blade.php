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
                <a href="{{ route('page.index', 'dashboard') }}">
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
            <li class="{{ $elementActive == 'catagory' ? 'active' : '' }}">
                <a href="{{ route('catagory.index', 'index') }}">
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
                    <i class="nc-icon nc-single-02"></i>
                    <p>{{ __('Sản Phẩm') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'size' ? 'active' : '' }}">
                <a href="{{ route('size.index', 'index') }}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>{{ __('Kích Thước Bánh') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'document' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                        {{ __('Laravel examples') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'doc' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'icons' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'icons') }}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>