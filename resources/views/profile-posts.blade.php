<x-profile :shareData="$shareData" doctitle="{{$shareData['username']}}'s Profile">
  @include('profile-posts-only')
</x-profile>