
@include('layouts.medecin')
<center><h1>Mes Patients</h1></center>
<div>
@foreach($medecin as $ese)               
   <table class="table table-bordered" id="laravel_crud">
      <thead>
         <tr>
            <th>Nom </th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         @foreach( $ese->patients as $value)    
            <tr>
              <td>{{$value->age}}  </td> 
              <td><a href="{{ route('patients.show', $value->id) }}">voir</a> </td>
            </tr>
         @endforeach
          </tbody>
       </table>
        
   
@endforeach
     @yield('content')
 </div>

 </body>
</html>

@include('layouts.footer')