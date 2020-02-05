@extends('base')

@section('section')
<div class="title">
    <h2>Ajouter un vehicule</h2>
</div>
<p>Notre explication du site. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada orci facilisis aliquet aliquam. Fusce pellentesque sagittis vulputate. Sed nec risus at neque dignissim vestibulum. Ut pharetra leo sit amet urna pharetra mattis. Donec dapibus dolor sed leo cursus, in euismod magna sagittis. Pellentesque luctus ipsum ac libero pharetra semper. Quisque consequat rutrum lacus vel gravida. Praesent fringilla aliquam pulvinar. Duis blandit dignissim tempor. Praesent finibus felis id augue consequat, sed tincidunt magna tristique. Nullam suscipit mauris mauris. Proin non erat iaculis, efficitur lectus ut, tristique ligula. Vivamus non vehicula massa, nec elementum libero.

</p>
                <form action="{{ route('vehicules.index') }}" method="POST" id="r_id" name="rForm">
				 @csrf
                <input type="hidden" name="c_id" id="c_id" value="0">
                    <div>
                        <label class="control-label @error('marque') is-invalid @enderror">Marque</label>
                        <div>
                            <input type="text" class="form-control" id="marque" name="marque" value="{{ old('marque') }}" required="">
                            @error('marque')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="control-label @error('prix') is-invalid @enderror">Prix</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="prix" name="prix" value="{{ old('prix') }}" required="">
                            @error('prix')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="col-sm-2 control-label @error('modele') is-invalid @enderror">Modele</label>
                        <div>
                            <input type="text" id="modele" name="modele" value="{{ old('modele') }}" required="">
                            @error('modele')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="control-label">Description</label>
                        <div>
                            <textarea id="description" name="description" value="" required=""></textarea>
                        </div>
                    </div>
                    <div>
                        <label class="control-label @error('couleur') is-invalid @enderror">Couleur</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="couleur" name="couleur" value="{{ old('couleur') }}" required="">
                            @error('couleur')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <br>
                    <button type="submit" class="btn btn-primary" id="btn-save" value="create-r">Save
                    </button>
                    </div>
                </form>
 @endsection
