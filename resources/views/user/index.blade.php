<h2>User Index</h2>
<?=$name?>
<br>

<hr>

{{$name}}
{{$age}}

{{-- {{$age_1}} --}}

<br>
<?php
foreach ($array as $key => $value) {
    echo $value;
    echo "<br>";
}
foreach ($array as $key => $value) :
    echo $value;
    echo "<br>";
endforeach
?>


@foreach($array as $key=>$value)
    {{$value}} 
    {!!$value!!}
    <br>
@endforeach

@for($i=1;$i<=10;$i+=1)
    @if($i%2==0)
        {{$i}}
    @else
        --
    @endif
@endfor


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php 
    //dd($array)
?>
