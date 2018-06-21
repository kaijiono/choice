@if (count($admins) > 0)
<ul class="media-list">
@foreach ($admins as $admin)
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($admin->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {{ $admin->name }}
            </div>
            <div>
                <p>{!! link_to_route('admins.show', 'View profile', ['id' => $admin->id]) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $admins->render() !!}
@endif