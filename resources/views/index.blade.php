@extends('base')

@section('section')
<div class="title">
    <h2>Nos vehicules</h2>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada orci facilisis aliquet aliquam. Fusce pellentesque sagittis vulputate. Sed nec risus at neque dignissim vestibulum. Ut pharetra leo sit amet urna pharetra mattis. Donec dapibus dolor sed leo cursus, in euismod magna sagittis.

</p>
<h3>Ajouter un vehicule</h3>
<a href="/vehicules/create" accesskey="2" title="" class="button">Ajout</a>
@endsection
@section('tbox')
<div style="display: none;">{{$i=1}}</div>

@foreach($variables as $vehicule)

    <div id="tbox{{$i}}">
        <div class="title">

            <h2><a href="/vehicules/{{$vehicule->id}}" accesskey="2" title="">{{ $vehicule->marque }}</a></h2>
            <h3><a href="/vehicules/{{$vehicule->id}}/edit">Modifier</a></h3>
            <div><a href="/vehicules/{{$vehicule->id}}/edit" ><img src="images/pencil.png" style="width:20px; height:20px;"></a></div>
        </div>
        <p>{{$vehicule->description}}</p>
        <p>{{$vehicule->prix}}</p>
        <p>{{$vehicule->couleur}}</p>
        <p>{{$vehicule->modele}}</p>
        <form action="{{ url('/vehicules', ['id' => $vehicule->id]) }}" method="post">
            <input type="submit" class="button" style="cursor: pointer;" value="Delete" />
            <input type="hidden" name="_method" value="delete" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
    <div style="display: none;">  {{$i=$i+1}}</div>
@endforeach
@endsection
