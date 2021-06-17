@extends('layouts.admin')

@section('title' , 'Главная')


@section('content')
       <div class="row">
           @foreach($cards as $card)
               <div class="col-lg-3 col-6">
                   <!-- small box -->
                   <div class="small-box {{ $card['bg'] }}">
                       <div class="inner">
                           <h3>{{ $card['count'] }}</h3>

                           <p>{{ $card['title'] }}</p>
                       </div>
                       <div class="icon">
                           <i class="{{ $card['class'] }}"></i>
                       </div>
                       <a href="#" class="small-box-footer">Посмотреть больше <i class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
           @endforeach
       </div>
       @if(!empty($notifications))
           @include('admin.parts.notifications')
       @endif
@endsection

@section('scripts')
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('cd7b1f65c3ede833df2a', {
            cluster: 'eu'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
@endsection
