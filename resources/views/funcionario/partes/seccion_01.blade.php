<section id="sec-2" data-empty="false" class="form-step">
   <div class="accordion-body">
      <table class="table">
         <thead>
            <tr>
               <th scope="col">Cédula de indentidad</th>
               <th scope="col">Complemento</th>
               <th scope="col">Expedido</th>
               <th scope="col">Nombres</th>
               <th scope="col">Apellido Paterno</th>
               <th scope="col">Apellido Materno</th>
               <th scope="col">Dirección</th>
               <th scope="col"></th>
            </tr>
         </thead>
         <tbody>
            @foreach($conyugues as $conyugue)
               <tr>
                  <td>{{$conyugue->numero_ci}}</td> 
                  <td>{{$conyugue->complemento}}</td>
                  <td>{{$conyugue->expedido}}</td>
                  <td>{{$conyugue->nombres}}</td>
                  <td>{{$conyugue->apellido_paterno}}</td>
                  <td>{{$conyugue->apellido_materno}}</td>
                  <td>{{$conyugue->direccion}}</td>
                  <td>
                     <a href="{{ route('conyugue.edit', $conyugue->id) }}" class="btn btn-sm btn-outline-info">
                        <i class="icon-create"></i> 
                     </a>
                     <form action="{{ route('conyugue.destroy', $conyugue->id ) }}" method ="POST" class="inline">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('¿Esta seguro de Eliminar Pariente?')"  class="btn btn-sm btn-outline-danger">
                           <i class="icon-delete"></i>
                        </button>
                     </form>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
      <a href="/conyugue/create?&idF={{request()->funcionario}}" class="btn   btn-outline-primary">
         <i class="icon-add_circle"></i>
         <span>Agregar conyugue</span>
      </a>
   </div>
</section>