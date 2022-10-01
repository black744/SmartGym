<?php
                    include("../db.php");
                    $conex=conectar();
                    session_start();
                    $nusuario = $_SESSION['usuario'];
                    if(isset($_POST['cancelar-turno'])){
                        $consultacancelar="UPDATE turnos SET estado='2'";
                        $resultadocanc=mysqli_query($conex,$consultacancelar);
                    };

                    if(isset($_POST['aceptar-turno'])){
                        $consultaaceptar="UPDATE turnos SET estado='1'";
                        $resultadoaceptar=mysqli_query($conex,$consultaaceptar);

                    };?>