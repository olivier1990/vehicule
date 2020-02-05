@extends('base')

@section('section')
<div class="title">
    <h2>C'est un vehicule {{$variable->marque}}</h2>
</div>
<p>Notre explication du site. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada orci facilisis aliquet aliquam. Fusce pellentesque sagittis vulputate. Sed nec risus at neque dignissim vestibulum. Ut pharetra leo sit amet urna pharetra mattis. Donec dapibus dolor sed leo cursus, in euismod magna sagittis. Pellentesque luctus ipsum ac libero pharetra semper. Quisque consequat rutrum lacus vel gravida. Praesent fringilla aliquam pulvinar. Duis blandit dignissim tempor. Praesent finibus felis id augue consequat, sed tincidunt magna tristique. Nullam suscipit mauris mauris. Proin non erat iaculis, efficitur lectus ut, tristique ligula. Vivamus non vehicula massa, nec elementum libero.

</p>
        <h2>{{$variable->marque}}</h2>
        <h4>Description: {{$variable->description}}</h4>
        <h4>Abbreviation: {{$variable->prix}}</h4>
        <h4>Periodes: {{$variable->couleur}}</h4>
        <h4>Periodes: {{$variable->modele}}</h4>
@endsection

