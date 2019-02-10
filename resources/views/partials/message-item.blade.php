@foreach($messages as $message)
@if($message->sender_id == auth()->user()->id)
<li class="clearfix">
    <div class="message-data align-right">
        <span class="message-data-time"><i class="fa fa-clock-o you"></i> {{$message->created_at->diffForHumans()}}</span>
        <span class="message-data-name">You</span> <i class="fa fa-circle me"></i>
    </div>
    <div class="message me-message float-right"> {{$message->body}}  </div>
</li>
@else
<li>
    <div class="message-data">
        <span class="message-data-name"><i class="fa fa-circle you"></i> {{$message->sender->name}}</span>
        <span class="message-data-time"><i class="fa fa-clock-o you"></i> {{$message->created_at->diffForHumans()}}</span>
    </div>
    <div class="message you-message">
        {{$message->body}}
    </div>
</li>
@endif                                    
@endforeach