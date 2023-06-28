@php
    $currentRoute = url()->current();
@endphp
<!-- BEGIN SIDEBAR -->
<div id="sidebar">
    <div class="sidebar-top">
        <div class="search-box">
            <form class="search-form" action="#" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control placeholder-light" placeholder="جستجو..." name="key">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-round submit">
                            <i class="icon-magnifier"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div><!-- /.search-box -->
        <div class="user-box">
            <a href="#">
                <img src="{{ asset('admin-assets/assets/images/user/128.png') }}" alt="عکس پروفایل"
                    class="img-circle img-responsive">
            </a>
            <div class="user-details">
                <h4>حمید آفرینش فر</h4>
                <p class="role">مدیر فنی</p>
                <div class="dropdown user-login">
                    <button class="btn btn-xs btn-status dropdown-toggle btn-round" type="button"
                        data-bs-toggle="dropdown" data-hover="dropdown">
                        <i class="fas fa-circle text-success"></i>
                        <span>دردسترس</span>
                    </button>
                    <ul class="dropdown-menu dropdown-status">
                        <li>
                            <a href="#" class="busy">
                                <i class="fas fa-circle text-success"></i>
                                <span>دردسترس</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="busy">
                                <i class="fas fa-circle text-danger"></i>
                                <span>مشغول</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-circle text-gray"></i>
                                <span>مخفی</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-circle text-warning"></i>
                                <span>سایر</span>
                            </a>
                        </li>
                    </ul>
                </div><!-- /dropdown -->
            </div><!-- /.user-details -->
        </div><!-- /.user-box -->
    </div><!-- /.sidebar-top -->
    <div class="side-menu-container">
        <ul class="metismenu" id="side-menu">
            <li @if (route('admin.index') == $currentRoute) class="open active conditional-bg" @endif>
                <a href="#" class="dropdown-toggle">
                    <i class="icon-home"></i>
                    <span>پیشخوان</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin.index') }}" @if (setActiveClass(route('admin.index'))) class="current" @endif>
                            <i class="icon-home"></i>
                            <span>داشبورد</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li @if (setActiveClassMarket($currentRoute)) class="open active conditional-bg" @endif>
                <a href="#" class="dropdown-toggle">
                    <i class="icon-basket-loaded"></i>
                    <span>بخش فروش</span>
                </a>
                <ul>
                    <li @if (setActiveClassVitrin($currentRoute)) class="open active conditional-bg" @endif>
                        <a href="#" class="dropdown-toggle">
                            <i class="fas fa-grip-vertical"></i>
                            <span>ویترین</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('admin.market.category.index') }}"
                                    @if (setActiveClass(route('admin.market.category.index'))) class="current" @endif>
                                    <i class="fas fa-rectangle-list"></i>
                                    <span>دسته بندی ها</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.market.brand.index') }}"
                                    @if (setActiveClass(route('admin.market.brand.index'))) class="current" @endif>
                                    <i class="fas fa-robot"></i>
                                    <span>برند ها</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.market.comment.index') }}"
                                    @if (setActiveClass(route('admin.market.comment.index'))) class="current" @endif>
                                    <i class="fas fa-comments"></i>
                                    <span>نظرات</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="{{ route('admin.market.delivery.index') }}"
                            @if (setActiveClass(route('admin.market.delivery.index'))) class="current" @endif>
                            <i class="fas fa-motorcycle"></i>
                            <span>روش های ارسال</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li @if (setActiveClassDiscount($currentRoute)) class="open active conditional-bg" @endif>
                        <a href="#" class="dropdown-toggle">
                            <i class="fas fa-money-check-dollar"></i>
                            <span>تخفیف ها</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('admin.market.discount.copan.index') }}"
                                    @if (setActiveClass(route('admin.market.discount.copan.index'))) class="current" @endif>
                                    <i class="fas fa-money-bill-1-wave"></i>
                                    <span>کپن تخفیف</span>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="{{ route('admin.market.discount.common-discount.index') }}"
                                    @if (setActiveClass(route('admin.market.discount.common-discount.index'))) class="current" @endif>
                                    <i class="fab fa-creative-commons-by"></i>
                                    <span>تخفیف عمومی</span>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="{{ route('admin.market.discount.amazing-sale.index') }}"
                                    @if (setActiveClass(route('admin.market.discount.amazing-sale.index'))) class="current" @endif>
                                    <i class="fab fa-amazon-pay"></i>
                                    <span>فروش شگفت انگیز</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li @if (setActiveClassDiscount($currentRoute)) class="open active conditional-bg" @endif>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-basket-loaded fa-flip-horizontal"></i>
                            <span>سفارشات</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('admin.market.discount.copan.index') }}"
                                    @if (setActiveClass(route('admin.market.discount.copan.index'))) class="current" @endif>
                                    <i class="fas fa-basket-shopping"></i>
                                    <span>تمام سفازشات</span>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="{{ route('admin.market.discount.common-discount.index') }}"
                                    @if (setActiveClass(route('admin.market.discount.common-discount.index'))) class="current" @endif>
                                    <i class="fas fa-file-lines"></i>
                                    <span>جدید</span>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="{{ route('admin.market.discount.amazing-sale.index') }}"
                                    @if (setActiveClass(route('admin.market.discount.amazing-sale.index'))) class="current" @endif>
                                    <i class="fas fa-motorcycle"></i>
                                    <span>در حال ارسال</span>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="{{ route('admin.market.discount.amazing-sale.index') }}"
                                    @if (setActiveClass(route('admin.market.discount.amazing-sale.index'))) class="current" @endif>
                                    <i class="fas fa-sack-dollar"></i>
                                    <span>پرداخت نشده</span>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="{{ route('admin.market.discount.amazing-sale.index') }}"
                                    @if (setActiveClass(route('admin.market.discount.amazing-sale.index'))) class="current" @endif>
                                    <i class="fas fa-x"></i>
                                    <span>باطل شده</span>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="{{ route('admin.market.discount.amazing-sale.index') }}"
                                    @if (setActiveClass(route('admin.market.discount.amazing-sale.index'))) class="current" @endif>
                                    <i class="fas fa-reply"></i>
                                    <span>مرجوعی</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul><!-- /#side-menu -->
    </div><!-- /.side-menu-container -->
</div><!-- /#sidebar -->
<!-- END SIDEBAR -->
