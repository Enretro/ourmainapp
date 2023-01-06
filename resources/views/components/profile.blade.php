<x-layout :doctitle="$doctitle">
 <div class="container py-md-5 container--narrow">
      <h2>
        <img class="avatar-small" src="{{$shareData['avatar']}}" /> {{$shareData['username']}}
        @auth
        @if($shareData['currentlyFollowing'] AND auth()->user()->username != $shareData['username'])
        <form class="ml-2 d-inline" action="/create-follow/{{$shareData['username']}}" method="POST">
          @csrf
          <button class="btn btn-primary btn-sm">Follow <i class="fas fa-user-plus"></i></button>
        </form>
        @endif

        @if($shareData['currentlyFollowing'])
        <form class="ml-2 d-inline" action="/remove-follow/{{$shareData['username']}}" method="POST">
          @csrf
          <button class="btn btn-danger btn-sm">Stop Following <i class="fas fa-user-times"></i></button>
        </form>
        @endif

        @if(auth()->user()->username == $shareData['username'])
          <a href="/manage-avatar" class="btn btn-secondary btn-small">Manage Avatar</a>
        @endif        
        @endauth
        
      </h2>

      <div class="profile-nav nav nav-tabs pt-2 mb-4">
        <a href="/profile/{{$shareData['username']}}" class="profile-nav-link nav-item nav-link {{ Request::segment(3) == "" ? "active" : "" }}">Posts: {{$shareData['postCount']}}</a>
        <a href="/profile/{{$shareData['username']}}/followers" class="profile-nav-link nav-item nav-link {{ Request::segment(3) == "followers" ? "active" : "" }}">Followers: {{$shareData['followerCount']}}</a>
        <a href="/profile/{{$shareData['username']}}/following" class="profile-nav-link nav-item nav-link {{ Request::segment(3) == "following" ? "active" : "" }}">Following: {{$shareData['followingCount']}}</a>
      </div>

      <div class="profile-slot-content">
       {{$slot}}
      </div>
      
    </div>
</x-layout>