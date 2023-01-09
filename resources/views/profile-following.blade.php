<x-profile :shareData="$shareData" doctitle="Who {{$shareData['username']}} Follows">
  @include('profile-following-only')
</x-profile>