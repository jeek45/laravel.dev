@foreach($messages as $message)
    <div class="row" id="row{{$message->id}}">
        <div class="col-sm-1 message-avatar hidden-xs">
            <img src="{{url('public/assets/image/'.$message->user->id%6 .'.PNG')}}" width="40" height="40" alt="" class="img-circle pull-right" />
        </div>
        <div class="col-sm-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        {{$message->user->name}}
                       @if(Auth::user()->is_admin)
                            @if($delete)
                                <span class="pull-right small message-timestamp">
                                    <a Onclick="delete_mes({{$message->id}})"><span class="glyphicon glyphicon-remove" ></span></a>
                                </span>
                            @endif
                            @if($edit)
                                <span class="pull-right small message-timestamp"  style="margin-right:5px;">
                                    <a Onclick="edit_mes({{$message->id}})"><span class="glyphicon glyphicon-edit" ></span></a>
                                </span>
                            @endif
                        @else
                            @if((Auth::user()->id)==($message->user_id))
                                @if($delete)
                                    <span class="pull-right small message-timestamp">
                                        <a Onclick="delete_mes({{$message->id}})"><span class="glyphicon glyphicon-remove" ></span></a>
                                    </span>
                                @endif
                                @if($edit)
                                    <span class="pull-right small message-timestamp"  style="margin-right:5px;">
                                        <a Onclick="edit_mes({{$message->id}})"><span class="glyphicon glyphicon-edit" ></span></a>
                                    </span>
                                @endif

                            @endif
                        @endif
                        <span class="pull-right small message-timestamp" style="margin-right:10px;">
                            @if($message->created_at!=$message->updated_at)
                            {{trans('wall_messages.update')}} {{LocalizedCarbon::instance($message->updated_at)->diffForHumans()}}
                            @else
                                {{LocalizedCarbon::instance($message->created_at)->diffForHumans()}}
                            @endif
                        </span>


                    </h3>
                </div>
                <div class="panel-body">
                    <div id="edit_text">
                       <textarea id="{{$message->id}}" class="form-control mess" style="border: 0px; resize: none; background-color: #fff;" disabled> {{$message->text}}</textarea>
                    </div>
                    <!-- Кнопка сохранения для изменения формы -->
                    <div id="save{{$message->id}}" style="display:none">
                            <span class="pull-right small message-timestamp">
                                <a onClick="save_mes({{$message->id}},$('#'+{{$message->id}}).val().trim())" "><strong>Сохранить</strong></a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="text-center">
    {!! $messages->render() !!}
</div>