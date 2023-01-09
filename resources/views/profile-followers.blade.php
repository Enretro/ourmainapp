<x-profile :shareData="$shareData" doctitle="{{$shareData['username']}}'s Followers">
  @include('profile-followers-only')
</x-profile>