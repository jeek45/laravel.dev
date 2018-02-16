@foreach($messages as $message)
    <div class="row">
        <div class="col-sm-1 message-avatar hidden-xs">
            <img src="{{url('public/assets/image/'.$message->user->id%6 .'.PNG')}}" width="40" height="40" alt="" class="img-circle pull-right" />
        </div>
        <div class="col-sm-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        {{$message->user->name}}
                        <span class="pull-right small message-timestamp">
                                     {{LocalizedCarbon::instance($message->created_at)->diffForHumans()}}
                                    </span>
                    </h3>
                </div>
                <div class="panel-body">
                    <div id="edit_text">
                        {{$message->text}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="text-center">
    {!! $messages->render() !!}
</div>