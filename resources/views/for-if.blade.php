<h1>For If</h1>

@if ($value>100)
    <p>O valor é maior que 100.</p>
@else 
    <p>O valor é menor que 100.</p>
@endif

@for ($i=0; $i<$value; $i++)
    - {{ $i+1 }}
@endfor
<hr/>
@php 
    $c=0;
@endphp
@while ($c<$value)
    - {{ $c+1 }}
    @php 
        $c++;
    @endphp
@endwhile

@foreach ($minhaArray as $key => $item)
<p>[{{ $loop->index }}] {{ $key }} => {{ $item }}</p>
@endforeach