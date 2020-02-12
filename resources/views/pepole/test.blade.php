<html>
<head></head>
<body>
{{--{{$pepoles}}--}}
@foreach($pepoles as $pepole)
{{--    {{$pepole->name}}{{$pepole->childern}}--}}
@foreach( $pepole->childern as $child)
    {{$child->ch}}
{{--    {{$pepole->name}}{{$child->name}}--}}
@endforeach
    @endforeach

</body>
</html>
