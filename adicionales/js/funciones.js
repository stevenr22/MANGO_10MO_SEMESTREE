$('#formlogin').submit(function(e){
    e.preventDefault();
    var usuario = $.trim($("#Nusu").val());    
    var contrasena =$.trim($("#Ncontra").val());    
     
    if(Nusu.length == "" || Ncontra == ""){
       Swal.fire({
           type:'warning',
           title:'Debe ingresar un usuario y/o password',
       });
       return false; 
     }else{
         $.ajax({
            url:"../paginas/validar_login.php",
            type:"POST",
            datatype: "json",
            data: {usuario:usuario, contrasena:contrasena}, 
            success:function(data){               
                if(data == "null"){
                    Swal.fire({
                        type:'error',
                        title:'Usuario y/o password incorrecta',
                    });
                }else{
                    Swal.fire({
                        type:'success',
                        title:'¡Conexión exitosa!',
                        confirmButtonColor:'#3085d6',
                        confirmButtonText:'Ingresar'
                    }).then((result) => {
                        if(result.value){
                            //window.location.href = "vistas/pag_inicio.php";
                            window.location.href = "../dashboard/index.php";
                        }
                    })
                    
                }
            }    
         });
     }     
 });