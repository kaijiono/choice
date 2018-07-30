 <h1>トークルーム</h1>

@foreach ($talks as $talk)
    
        
            <li>{{ $talk->created_at }}</li>
            <li>{{ $talk->is_user }}</li>
    
    
            <li>{{ $talk->created_at }}</li>
            <li>{{ $talk->comment }}</li>
    
    
@endforeach
