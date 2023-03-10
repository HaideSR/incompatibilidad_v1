<section id="sec-4" data-empty="{{$afinidad->isEmpty() ? 'true':''}}" class="form-step">
   <div class="accordion-body">
      <table class="table">
         <thead>
            <tr>
               <th scope="col">Nombres</th>
               <th scope="col">Apellido Paterno</th>
               <th scope="col">Apellido Materno</th>
               <th scope="col">Parentesco</th>
               <th scope="col">Acciones</th>
            </tr>
         </thead>
         <tbody>
            @foreach($afinidad as $persona)
               <tr>
                  <td>{{$persona->nombres}}</td>
                  <td>{{$persona->apellido_paterno}}</td>
                  <td>{{$persona->apellido_materno}}</td>
                  <td>{{$persona->parentesco}}</td>
                  <td>
                     
                     @if($errors->any())
                     <p class="error-message">{{$errors->first('mensaje')}}</p>
                     @endif

                     <a href="{{ route('afinidad.edit', $persona->id) }}" class="btn btn-sm btn-outline-info">
                        <i class="icon-create"></i> 
                     </a>
                     <form action="{{ route('afinidad.destroy', $persona->id) }}" method="POST" class="inline">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('¿Esta seguro de Eliminar?')" class="btn btn-sm btn-outline-danger">
                           <i class="icon-delete"></i>
                        </button>
                     </form>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
      <a href="/afinidad/create?&idF={{request()->funcionario}}" class="btn btn-outline-primary">
         <i class="icon-add_circle"></i>
         <span>Agregar Parientes</span>
      </a>
   </div>
</section>



