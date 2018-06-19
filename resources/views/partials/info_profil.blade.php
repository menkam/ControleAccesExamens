<div class="profile clearfix">
    <div class="profile_pic">
      <img src="images/{{ Auth::user()->photo }}" alt="" class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Welcome,</span>
      <h2>{{ Auth::user()->name }}</h2>
    </div>
</div>

<!--div class="profile clearfix">
    <div class="profile_pic view hoverlay">
      <img src="images/{{ Auth::user()->photo }}" alt="" class="img-circle profile_img">
      <a>
        <div class="mask waves-effect"></div>
      </a>
    </div>
    <div class="profile_info">
      <span>Welcome,</span>
      <h2>{{ Auth::user()->name }}</h2>
    </div>
</div-->