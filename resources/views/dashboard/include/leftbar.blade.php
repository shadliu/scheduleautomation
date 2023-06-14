<div class="col-lg-2">
    <div class="my-account-box-1">
        <a href="{{ route('myproperty') }}">
            <h2>My Properties</h2>
        </a>
        <a href="{{ route('user.profile') }}">
            <h2>MY ACCOUNT</h2>
        </a>
        <a href="">
            <h2>Advertisement</h2>
        </a>
        <a href="">
            <h2>Review</h2>
        </a>
        <a href="">
            <h2>Inbox</h2>
        </a>
        <a href="{{ route('faq') }}">
            <h2>Help</h2>
        </a>
        <a href="{{ route('user.setting') }}">
            <h2>Settings</h2>
        </a>
        <a href="">
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <button type="submit" style="background: yellow; border: 1px solid yellow;"><h2>Log Out</h2></button>
            </form>
        </a>
    </div>
</div>