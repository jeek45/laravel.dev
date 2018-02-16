@extends('layouts.app')

@section('content')

    @if (Auth::user())
        {{ Form::open(['role' => 'form', 'class' => 'form-horizontal send-message-form', ]) }}
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{ trans('wall_messages.new_message') }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                {!! Form::textarea('text',null,['class' => 'form-control', 'rows' => '3', 'placeholder' => trans('wall_messages.your_message'), 'id' =>'text', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                {!! Form::submit(trans('wall_messages.send_message'),['class' => 'btn btn-primary btn-wide', 'id' => "send_message"]) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    @endif

    @if(empty($messages))
        <p>{{ trans('wall_messages.no_messages') }}</p>
    @else
        @guest
            @include('page.partials.guest_messages')
        @else
            @include('page.partials.auth_messages')
        @endif
    @endif

@endsection

@section('stream_script')
    <script type="text/javascript">
        $(function () {
            var $text = $('#text'),
                $submit_btn = $('#send_message');
            $submit_btn.on('click', function (event) {
                if ($text.val().trim() === '') {
                    var button_old_text = $submit_btn.text();
                    window.setTimeout(function () {
                        $submit_btn.text(button_old_text)
                            .attr('disabled', false)
                            .removeClass('disabled');
                    }, 2500);
                    $submit_btn
                        .text('{{ trans("wall_messages.enter_message_text") }}')
                        .attr('disabled', true)
                        .addClass('disabled');
                    event.preventDefault();
                }
            });
        });
    </script>
@endsection