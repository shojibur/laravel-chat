<div>
   @if ($messages->count())
        @foreach ($messages as $message)
            <div class="mb-2 pb-2 border-bottom">
                <div> 
                    <strong> {{ $message->user->name }} </strong>
                    <time> </time>
                </div>
                <span style="white-space: pre-wrap;"> {{ $message->body }} </span>
            </div>
        @endforeach
      
   @else
        <p> It's quite here .... </p>
   @endif
</div>
