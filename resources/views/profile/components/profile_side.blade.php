<div class="profile-sidebar">
    <div class="profile-sidebar-header">
        <div class="avatar"><img src="{{ asset('img/profile') }}/{{ Auth::user()->image }}" class="rounded-circle" alt=""></div>
        <h5>{{ Auth::user()->username }}</h5>
    </div>
</div>