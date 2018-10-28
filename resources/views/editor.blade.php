<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <script id="{{$id}}" name="{{$name}}" type="text/plain">{!! old($column, $value) !!}</script>

        @include('admin::form.help-block')

    </div>
</div>