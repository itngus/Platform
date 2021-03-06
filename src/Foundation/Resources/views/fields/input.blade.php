<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">

    @if(isset($title))
        <label for="field-{{$name}}">{{$title}}</label>
    @endif

    <input type="{{$type}}" class="form-control {{$class or ''}}"  id="field-{{$name}}"


           @if(isset($prefix))
                name="{{$prefix}}[{{$lang}}][{{$name}}]"
           @else
                name="{{$lang}}[{{$name}}]"
           @endif


           value="{{$value or old($name)}}"
           placeholder="{{$placeholder or ''}}">

    @if(isset($help))
        <p class="help-block">{{$help}}</p>
    @endif
</div>