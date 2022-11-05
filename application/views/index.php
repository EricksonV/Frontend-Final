<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <title>Crud_Alumnos</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">Parcial Final -- SpringBoot</h1>
          
          <hr style="background-color: black; color:black; height: 1px;">
        </div> 
      </div>
      <div class="row">
        <div class="col-md-12 mt-2">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ingresar Alumno
          </button>
          <button type type="button" class="btn btn-outline-primary btn-sm" data-bs-target="#cambio" id="cambio">
            Ver tipo de cambio
          </button>

          <!-- Modal Insert -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ingreso de Alumnos</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="" method="post" id="form">
                  <div class="form-group">
                    <label for="">Codigo de la Carrera</label>
                    <input type="text" id="codigoCarrera" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Anio</label>
                    <input type="text" id="anio" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Correlativo</label>
                    <input type="text" id="correlativo" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" id="nombre" class="form-control" title="El dpi valido consta de 13 digitos" maxlenght="15">
                  </div>
                  <div class="form-group">
                    <label for="">Apellido</label>
                    <input type="tel" id="apellido" class="form-control" pattern="[0-9]{9}" title="Un numero valido consta de 8 digitos">
                  </div>
                  <div class="form-group">
                    <label for="">Correo Electronico</label>
                    <input type="text" id="email" class="form-control">
                  </div>                 
                </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cerrar">Cerrar</button>
                  <button type="button" class="btn btn-primary" id="guarda">Guardar Alumno</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal edit -->
          <div class="modal fade" id="edit_Modal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel2">Edicion de Alumnos</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="" method="post" id="edit_form">
                    <input type="hidden" id="edit_modal_id" value="">
                  <div class="form-group">
                    <label for="">Codigo de la Carrera</label>
                    <input type="text" id="edit_codigoCarrera" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Anio</label>
                    <input type="text" id="edit_anio" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Correlativo</label>
                    <input type="text" id="edit_correlativo" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" id="edit_nombre" class="form-control" title="El dpi valido consta de 13 digitos" maxlenght="15">
                  </div>
                  <div class="form-group">
                    <label for="">Apellido</label>
                    <input type="tel" id="edit_apellido" class="form-control" pattern="[0-9]{9}" title="Un numero valido consta de 8 digitos">
                  </div>
                  <div class="form-group">
                    <label for="">Correo Electronico</label>
                    <input type="text" id="edit_email" class="form-control">
                  </div>
                </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cerrar">Cerrar</button>
                  <button type="button" class="btn btn-primary" id="actualiza">Actualizar Cambios</button>
                </div>
              </div>
            </div>
          </div>
        </div> <!--clase col-md-->   
      </div>  
        <div class="row">
          <div class="col-md-12 mt-3">
            <table class="table">
              <thead>
                <tr>
                  <th>Id Alumno</th>
                  <th>Codigo Carrera</th>
                  <th>Anio</th>
                  <th>Correlativo</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody id="tbody">

              </tbody>
            </table>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
      $(document).on("click","#guarda", function(e){
        e.preventDefault();
        
        var correlativo = $("#correlativo").val();
        var codigoCarrera = $("#codigoCarrera").val();
        var anio = $("#anio").val();
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var correo = $("#email").val();
        
        var data = {anio: $("#anio").val(), apellido: $("#apellido").val(), codigoCarrera: $("#codigoCarrera").val(), 
          correlativo:$("#correlativo").val(), correo: $("#email").val(), nombre: $("#nombre").val()}
        
        
        
        $.ajax({
          url: 'http://ec2-54-227-13-96.compute-1.amazonaws.com:8080/alumnos',
          type: 'POST',
          dataType: 'json',
          contentType: 'application/json',
          data: JSON.stringify(data),
          success: function(data){   
            console.log(data.idAlumno);
              fetch();
              $('#exampleModal').modal('hide');
              $("#form")[0].reset();
              Command: toastr["success"]("Alumno agregado satisfactoriamente")
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "2500",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              }     
          },
          error: function(error){
            Command: toastr["warning"]('No se puede agregar ya que falta uno o mas campos')
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "2500",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
          }
                
        });
        $("#form")[0].reset();
      });

      function fetch(){
        $.ajax({
          url: "http://ec2-54-227-13-96.compute-1.amazonaws.com:8080/alumnos",
          type: "get",
          dataType: "json",
          success: function(data){
            var tbody="";
            for(var key in data){
              tbody += "<tr>";
              tbody += "<td>"+data[key]['idAlumno']+"</td>";
              tbody += "<td>"+data[key]['codigoCarrera']+"</td>";
              tbody += "<td>"+data[key]['anio']+"</td>";
              tbody += "<td>"+data[key]['correlativo']+"</td>";
              tbody += "<td>"+data[key]['nombre']+"</td>";
              tbody += "<td>"+data[key]['apellido']+"</td>";
              tbody += "<td>"+data[key]['correo']+"</td>";
              tbody += `<td> 
                          <a href="#" id="del" class="btn btn-sm btn-outline-danger" value="${data[key]['idAlumno']}">Borrar</a> 
                          <a href="#" id="edit" class="btn btn-sm btn-outline-info" value="${data[key]['idAlumno']}">Editar</a>
                        </td>`;
              tbody += "/<tr>";
            }
            $("#tbody").html(tbody);
          }
        });
        
      }
      fetch();

      $(document).on("click", "#del", function(e){
        e.preventDefault();
        var del_id = $(this).attr("value");
        if(del_id == ""){
          $('#exampleModal').modal('hide');
              Command: toastr["error"]('Error al borrar')
              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "2500",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              }
        }else{
          const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger mr-2'
            },
            buttonsStyling: false
          });

          swalWithBootstrapButtons.fire({
            title: 'Esta seguro de borrar?',
            text: "No se puede recuperar esta informacion!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Borrar!',
            cancelButtonText: 'Cancelar!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {

              $.ajax({
                url: "http://ec2-54-227-13-96.compute-1.amazonaws.com:8080/alumnos/"+del_id,
                type: "DELETE",
                dataType: "json",
                data:{
                  del_id: del_id
                },
                success: function(data){
                    swalWithBootstrapButtons.fire(
                      'Eliminado!',
                      'El estudiante fue eliminado',
                      'success'
                    )
                    fetch();
                  

                },
                error: function(error){
                  swalWithBootstrapButtons.fire(
                      'Eliminado!',
                      'El estudiante no fue eliminado',
                      'success'
                    )
                    fetch();
                }
              });
              
            } 
          });
        }
      });
     
      $(document).on("click", "#edit", function(e) {
        e.preventDefault();

        var edit_id = $(this).attr("value");
        if (edit_id == "") {
            alert("Edit id required");
        } else {
            $.ajax({
              url: "http://ec2-54-227-13-96.compute-1.amazonaws.com:8080/alumnos/"+edit_id,
              type: "GET",
              dataType: "json",
              success: function(data){
                if(data.idAlumno!=""){
                  $('#edit_Modal').modal('show');
                  $('#edit_modal_id').val(data.idAlumno);
                  $('#edit_codigoCarrera').val(data.codigoCarrera);
                  $('#edit_anio').val(data.anio);
                  $('#edit_correlativo').val(data.correlativo);
                  $('#edit_nombre').val(data.nombre);
                  $('#edit_apellido').val(data.apellido);
                  $('#edit_email').val(data.correo);

                }else{
                  Command: toastr["error"]('Error al actualizar')
                  toastr.options = {
                  "closeButton": false,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "2500",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                  }
                }
                

              }
            });
        }
    });

    $(document).on("click", "#actualiza", function(e){
      e.preventDefault();
      var edit_id = $("#edit_modal_id").val();
      var edit_codigoCarrera = $("#edit_codigoCarrera").val();
      var edit_anio = $("#edit_anio").val();
      var edit_correlativo = $("#edit_correlativo").val();
      var edit_nombre = $("#edit_nombre").val();
      var edit_apellido = $("#edit_apellido").val();
      var edit_email = $("#edit_email").val();

      var data = {idAlumno:$("#edit_modal_id").val(), anio: $("#edit_anio").val(), apellido: $("#edit_apellido").val(), codigoCarrera: $("#edit_codigoCarrera").val(), 
          correlativo:$("#edit_correlativo").val(), correo: $("#edit_email").val(), nombre: $("#edit_nombre").val()};
      
      if(edit_id == "" || edit_codigoCarrera == "" || edit_anio == "" || edit_correlativo == "" || edit_nombre == "" || edit_apellido == "" || edit_email == ""){
          Swal.fire(
            'No podemos actualizar',
            'parece que se te ha olvidado uno o mas datos',
            'question'
          )
      }else{
        
        
        $.ajax({
          url: "http://ec2-54-227-13-96.compute-1.amazonaws.com:8080/alumnos/"+edit_id,
          type: "PUT",
	        dataType: "json",
          contentType: 'application/json',
          data: JSON.stringify(data),
          success: function(data){
            $('#edit_Modal').modal('hide');
              Command: toastr["error"]("Alumno No Actualizado")
              toastr.options = {
              "closeButton": false,
              "debug": false,
              "newestOnTop": false,
              "progressBar": false,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "2500",
              "timeOut": "5000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
              }
              fetch();    
            
          },
          error: function(error){
            fetch();             
              $('#edit_Modal').modal('hide');
              
              Command: toastr["success"]('Alumno Actualizado')
              toastr.options = {
              "closeButton": false,
              "debug": false,
              "newestOnTop": false,
              "progressBar": false,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "2500",
              "timeOut": "5000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
          }
        });
      }
      $("#form")[0].reset();
    });

    $(document).on("click","#cambio",function(e){
      e.preventDefault();

      $.ajax({
        url: 'http://34.229.173.9/tarea4DW_EC2/index.php/soap',
        type:'GET',
        success: function(data){
          let cambio = data.substr(404,7);
          let anios = data.substr(379,4);
          let mes = data.substr(375,2);
          let dia = data.substr(371,2);

          Swal.fire(
            '¿Quieres saber el tipo de Cambio?',
            'Fecha: '+dia+'/'+mes+'/'+anios+' Cambio: '+cambio,
            'question'
          )
          
        }

      });

    });
    </script>
  </body>
</html>
