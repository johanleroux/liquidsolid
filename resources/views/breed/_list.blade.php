<ul class="nav nav-pills nav-stacked">
  @forelse($breeds as $breed)
    <li><a href="{{ action('AdsController@index', ['breed_id'=>$breed->id]) }}"> <span class="pull-right">({{ $breed->ads_count }})</span>{{ $breed->name }}</a></li>
  @empty
    <li><a href="#"><span class="pull-right">(0)</span>No Breeds Found</a></li>
  @endforelse
</ul>
