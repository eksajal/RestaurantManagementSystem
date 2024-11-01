<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a href="index.html" class="logo">
            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
        </a>
    </div>
    <ul class="nav">
        
        <li class="nav-item nav-category">
            <span class="nav-link"><h3>Navigations:</h3></span>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/users') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-account-group"></i>
                </span>
                <span class="menu-title">Users</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('foodmenu') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-food" style="color: red"></i>
                </span>
                <span class="menu-title">FoodMenu</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('viewchef') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-silverware-fork-knife"></i>
                </span>
                <span class="menu-title">Chefs</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('viewreservation') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-lock-outline"></i>
                </span>
                <span class="menu-title">Reservations</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('orders') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-cart" style="color: rgb(51, 200, 51)"></i>
                </span>
                <span class="menu-title">Orders</span>
            </a>
        </li>

    </ul>
</nav>
