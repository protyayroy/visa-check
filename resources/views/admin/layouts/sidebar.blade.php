<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ $active == 'dashboard' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fa-solid fa-house"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ $active == 'application' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('application') }}">
                <i class="fa-solid fa-house"></i>
                <span class="menu-title">Visa Application</span>
            </a>
        </li>
        <li class="nav-item {{ $active == 'approve_list' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('approve.list') }}">
                <i class="fa-solid fa-house"></i>
                <span class="menu-title">Visa Approved List</span>
            </a>
        </li>
        <li class="nav-item {{ $active == 'add_approval' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('create.approval') }}">
                <i class="fa-solid fa-house"></i>
                <span class="menu-title">Add Approval</span>
            </a>
        </li>
        {{-- @if (auth('admin')->user()->type === 'admin' && auth('admin')->user()->status == 1)
            <li class="nav-item {{ $active == 'admin' ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#admin-management" aria-expanded="false"
                    aria-controls="admin-management">
                    <i class="fa-solid fa-user"></i>
                    <span class="menu-title">Admins</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ $active == 'admin' ? 'show' : '' }}" id="admin-management">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('view.admin') }}">View Admins</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add-edit.admin') }}">Add Admin</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ $active == 'category' ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#category-management" aria-expanded="false"
                    aria-controls="category-management">
                    <i class="fa-solid fa-list"></i>
                    <span class="menu-title">Categories</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ $active == 'category' ? 'show' : '' }}" id="category-management">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category') }}">View Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add-edit.category', ['slug' => null]) }}">Add
                                Category</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ $active == 'product' ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#product-management" aria-expanded="false"
                    aria-controls="product-management">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span class="menu-title">Products</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ $active == 'product' ? 'show' : '' }}" id="product-management">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product') }}">View Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add-edit.product') }}">Add Product</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ $active == 'banner' ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#banner-management" aria-expanded="false"
                    aria-controls="banner-management">
                    <i class="fa-solid fa-image"></i>
                    <span class="menu-title">Banners</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ $active == 'banner' ? 'show' : '' }}" id="banner-management">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('view-slider-banner') }}">Slider Banner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('view-subbanner') }}">Sub Banner</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ $active == 'user' ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#user-management" aria-expanded="false"
                    aria-controls="user-management">
                    <i class="fa-solid fa-user-group"></i>
                    <span class="menu-title">Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ $active == 'user' ? 'show' : '' }}" id="user-management">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.view') }}">View Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add.user') }}">Add User</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ $active == 'review' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.reviews') }}">
                    <i class="fa-solid fa-star"></i>
                    <span class="menu-title">Reviews</span>
                </a>
            </li>

            <li class="nav-item {{ $active == 'order' ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#order-management" aria-expanded="false"
                    aria-controls="order-management">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="menu-title">Orders</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ $active == 'order' ? 'show' : '' }}" id="order-management">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('order.view') }}">All Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('order.view', 'Pending') }}">Pending Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('order.view', 'Processing') }}">Processing Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('order.view', 'Completed') }}">Completed Orders</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item {{ $active == 'state' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('state.view') }}">
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="menu-title">States / Places</span>
                </a>
            </li>
        @elseif (auth('admin')->user()->type === 'vendor' && auth('admin')->user()->status == 1)
            <li class="nav-item {{ $active == 'product' ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#product-management" aria-expanded="false"
                    aria-controls="product-management">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span class="menu-title">Products</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ $active == 'product' ? 'show' : '' }}" id="product-management">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product') }}">View Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add-edit.product') }}">Add Product</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ $active == 'order' ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#order-management" aria-expanded="false"
                    aria-controls="order-management">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="menu-title">Orders</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ $active == 'order' ? 'show' : '' }}" id="order-management">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('order.view') }}">All Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('order.view', 'Pending') }}">Pending Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('order.view', 'Processing') }}">Processing Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('order.view', 'Completed') }}">Completed Orders</a>
                        </li>
                    </ul>
                </div>
            </li>
        @endif --}}
    </ul>
</nav>
