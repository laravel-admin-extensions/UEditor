<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <textarea id="{{$id}}" name="{{$name}}">{!! old($column, $value) !!}</textarea>

        @include('admin::form.help-block')

    </div>
</div>