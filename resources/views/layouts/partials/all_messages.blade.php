@if (isset($errors) && count($errors) > 0)
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&#x2715;</button>
        <h4><i class="icon fa fa-ban"></i> {{ trans('messages.error') }}!</h4>
        {{ trans('messages.some_problems') }}:
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('mes_error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&#x2715;</button>
        <h4><i class="icon fa fa-ban"></i> {{ trans('messages.error') }}</h4>
        {{ Session::get('mes_error') }}
    </div>
@endif

@if (Session::has('mes_success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&#x2715;</button>
        <h4><i class="icon fa fa-check"></i> {{ trans('messages.success') }}</h4>
        {{ Session::get('mes_success') }}
    </div>
@endif

<div id="ajax_error" class="alert alert-danger alert-dismissible" style="display:none">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&#x2715;</button>
    <h4><i class="icon fa fa-ban"></i><div class="ajax_error"></div></h4>
</div>

<div id="ajax_success" class="alert alert-success alert-dismissible" style="display:none">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&#x2715;</button>
    <h4><i class="icon fa fa-check"></i><div class="ajax_success"></div></h4>
</div>

