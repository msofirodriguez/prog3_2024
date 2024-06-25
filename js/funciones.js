function askDeleteStudent(id){
    alertify.confirm("Eliminar datos","Esta seguro que desea eliminar este registro?"),
    deleteStudent(id)
    function(){alertify.error('Cancelar'); });
    
  }

  function deleteStudent(id){
    $.ajax({
        type:"POST",
        url:"student.controller.php",
        data:"operation=delete&id="+id,
        success:function(result){
            if(result==1){
                alertify.success("El proceso se ejecuto correctamente");
            }else{
                alertify.error("El proceso no pudo realizarse");
            }
        }
    });
  }
