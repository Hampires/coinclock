<footer class="footer">
    <div class="tab container">
        <div class="tab-item">
            <a href="{{ route('user.home') }}" class="tab-link{{ request()->routeIs('user.home') ? ' active' : '' }}">
                <i class="feather-home"></i>
                <span>Home</span>
            </a>
        </div>
        <div class="tab-item">
            <a href="{{ route('user.asset') }}" class="tab-link{{ request()->routeIs('user.asset') ? ' active' : '' }}">
                <i class="feather-pocket"></i>
                <span>Portfolio</span>
            </a>
        </div>
        <div class="tab-item">
            <a href="{{ route('user.referral') }}" class="tab-link{{ request()->routeIs('user.referral') ? ' active' : '' }}">
                <i class="feather-gift"></i>
                <span>Free</span>
            </a>
        </div>
        <div class="tab-item">
            <a href="{{ route('user.profile') }}" class="tab-link{{ request()->routeIs('user.profile') ? ' active' : '' }}">
                <i class="feather-more-horizontal"></i>
                <span>More</span>
            </a>
        </div>
    </div>
</footer>