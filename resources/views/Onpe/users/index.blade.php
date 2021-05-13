@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onpe</title>
</head>
<body>
    

@section("content")
    
    
        <div class="table-container">
            <div class="btn-link"><a href="/Onpe/users/create" >Nuevo usuario</a></div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>			
                        <th>Nombre</th>			
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>DNI</th>
                        <th>Sexo</th>
                        <th>Estado civil</th>
                        <th>Fecha de nacimiento</th>
                        <th>Grupo de votación</th>
                        
                        <th>Ciudad</th>
                        <th>Creado en</th>
                        <th>Actualizado en</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                
                        
                    
                    @foreach ($users as $user )

                    <tr>
                        <td>{{$loop->iteration}} </td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->apPat}}</td>
                        <td>{{ $user->apMat}}</td>
                        <td>{{ $user->dni}}</td>
                        <td>{{ $user->sexo}}</td>
                        <!--<td>{{ $user->email}}</td>-->
                        <td>{{ $user->estCivil}}</td>
                        <td>{{ $user->fechaNac}}</td>
                        <td>{{ $user->grupoVot}}</td>
                        <td>{{ $user->ciudad_id}}</td>
                        <td>{{ $user->created_at}}</td>
                        <td>{{ $user->updated_at}}</td>
                        <td><a href="{{ url('/Onpe/users/'.$user->id.'/edit') }}" class="btn btn-success">Actualizar</a></td>
                        <!--<td><button class="btn" ><a href="{{ url('/user/'.$user->id.'/edit') }}"></a>ff</button></td>-->
                        <td>
                                
                            <form method="post" action="{{url('/Onpe/users/'.$user->id)}}" style="display:inline" >
                            {{ csrf_field() }}{{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Desea borrar?');">
                                Eliminar</button></form> </td>
                        
                        

                    </tr>
                    @endforeach
                
                
                </tbody>
            </table>
          </div>
          
          <script>
            function confirmToDelete(){
              if(confirm('Are you sure?')) ;
            }
          </script>

@endsection

</body>
</html>