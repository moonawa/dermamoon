@include('layouts.medecin')
<center><h1>Liste des Médecins</h1></center>
<div class="container-fluid">
<h1>{{ Session:: get('success')}}</h1>

<div class="col-md-6">
</div>
<div class="col-md-6">
  <form action="/search" method="GET">
   <div class="input-group">
      <input type="search" name="search" placeholder="recherche " class="form-control">
      <span class="input-group-prepend">
         <button type="submit" class="btn btn-success">Rechercher</button>
      </span>
   </div>
  </form>
  </div>
<br>
   <div class="row">
        <div class="col-12">
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Nom </th>
                 <th>Téléphone</th>
                 <th>Email</th>
                 <th>Hopital</th>
                 {{-- <td colspan="3">Action</td> --}}
              </tr>
           </thead>
           <tbody>
              @foreach($medecins as $product)
              <tr>
                <td>{{ $product->users->name }}</td>
                <td>{{ $product->users->telephone }}</td>
                 <td>{{ $product->code }}</td>
                 <td>{{ $product->hopital }}</td>
                 {{-- <td>{{ $product->mail }}</td>
  
                 <td><a href="{{ route('entreprises.edit',$product->id)}}" class="btn btn-success">Modifier</a></td>
                 
                <td><a class="btn btn-success" href="ensemble">Détails</a> </td>
                <td>
                 <form action="{{ route('entreprises.destroy', $product->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
                </td> --}}
              </tr>
              @endforeach
           </tbody>
          </table>
          {{-- {!! $medecins->links() !!} --}}
       </div> 
   </div>


   </div>

   </div>
   @include('layouts.footer')
