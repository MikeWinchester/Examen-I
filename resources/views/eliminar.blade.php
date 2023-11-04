<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar entrada</title>
</head>
<body>

 
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Eliminacion de registros</h5>
        </div>
        <div class="modal-body">
          <form action="{{route('directorio.destruir', $entrada->codigoEntrada)}}" method="POST">

          @csrf
          @method('DELETE')

          <table class="table">
            <thead>
              <tr>
                <th scope="col">C&oacute;digo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
              </tr>
            </thead>
            <tbody>                
                <tr>
                    <th scope="row">{{$entrada->codigoEntrada}}</th>
                    <td>{{$entrada->nombre}}</td>
                    <td>{{$entrada->apellido}}</td>
                    <td>{{$entrada->correo}}</td>
                    <td>{{$entrada->telefono}}</td>
                  </tr>
            </tbody>
          </table>
          <div class="modal-footer">
          <a href="{{route('directorio.inicio')}}" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</a>          
          <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Confirmar</button>          
        </div>
          </form>
        </div>
        
      </div>
    </div>
  


    
    

    

</body>
</html>