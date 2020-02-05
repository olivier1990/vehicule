@extends('base')

@section('section')
<div class="title">
    <h2>Modifier un vehicule</h2>
</div>
<p>Notre explication du site. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada orci facilisis aliquet aliquam. Fusce pellentesque sagittis vulputate. Sed nec risus at neque dignissim vestibulum. Ut pharetra leo sit amet urna pharetra mattis. Donec dapibus dolor sed leo cursus, in euismod magna sagittis. Pellentesque luctus ipsum ac libero pharetra semper. Quisque consequat rutrum lacus vel gravida. Praesent fringilla aliquam pulvinar. Duis blandit dignissim tempor. Praesent finibus felis id augue consequat, sed tincidunt magna tristique. Nullam suscipit mauris mauris. Proin non erat iaculis, efficitur lectus ut, tristique ligula. Vivamus non vehicula massa, nec elementum libero.

</p>
        <form action="{{ route('vehicules.index').'/'.$vehicule->id}}" id="rForm" name="rForm" class="form-horizontal"  method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="r_id" id="r_id" value="{{$vehicule->id}}">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Marque</label>
                <div class="col-sm-12">
                <input type="text" class="form-control" id="marque" name="marque" value="{{$vehicule->marque}}" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Description</label>
                <div class="col-sm-12">
                    <input class="form-control" id="description" name="description" value="{{$vehicule->description}}" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Couleur</label>
                <div class="col-sm-12">
                    <input class="form-control" id="couleur" name="couleur" value="{{$vehicule->couleur}}" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Prix</label>
                <div class="col-sm-12">
                    <input class="form-control" id="prix" name="prix" value="{{$vehicule->prix}}" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Modele</label>
                <div class="col-sm-12">
                    <input class="form-control" id="modele" name="modele" value="{{$vehicule->modele}}" required="">
                </div>
            </div>
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="btn-save" value="edit">Save
                </button>
            </div>
        </form>
 @endsection
