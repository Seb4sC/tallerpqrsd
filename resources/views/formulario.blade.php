<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulario</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        label{
            font-weight: bold;
        }
        .datos-personales{
            display: grid;
            gap: 2rem;
        }
        @media screen and (min-width: 768px) {
            .datos-personales {
                grid-template-columns: repeat(auto-fit, minmax(600px, 1fr));
            }
        }
    </style>
</head>
<body>
    <form class="mb-5" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center mt-5">Formulario</h1>
        <div class="col mx-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="es-anonima" class="form-label">Anónima o no anónima</label>
                        <select class="form-select" id="es-anonima" aria-label="Petición Anónima o No Anónima">
                            <option selected>Seleccione una opción</option>
                            <option value="TRUE">Anónima</option>
                            <option value="FALSE">No Anónima</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="tipo-peticion" class="form-label">Tipo PQRSD</label>
                        <select class="form-select" id="tipo-peticion" aria-label="Tipo de petición">
                            <option selected>Seleccione una opción</option>
                            <option value="peticion">Petición</option>
                            <option value="queja">Queja</option>
                            <option value="reclamo">Reclamo</option>
                            <option value="solicitud">Solicitud</option>
                            <option value="denuncia">Denuncia</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="tipo-persona" class="form-label">Tipo de Persona</label>
                        <select class="form-select" id="tipo-persona" aria-label="Tipo de Persona">
                            <option selected>Seleccione una opción</option>
                            <option value="natural">Natural</option>
                            <option value="juridica">Jurídica</option>
                            <option value="apoderado">Apoderado</option>
                            <option value="ninos_ninas_adolescentes">Niños, niñas o adolescentes</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <h2 class="mx-5 mb-3">Datos Personales</h2>
        
        <div class="datos-personales mx-5">
            <div class="mb-0">
                <label for="name" class="form-label">Primer Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Ejemplo: Juan">
            </div>
            <div class="mb-0">
                <label for="name2" class="form-label">Segundo Nombre</label>
                <input type="text" class="form-control" id="name2" placeholder="Ejemplo: Carlos">
            </div>
            <div class="mb-0">
                <label for="last-name" class="form-label">Primer Apellido</label>
                <input type="text" class="form-control" id="last-name" placeholder="Ejemplo: Vélez">
            </div>
            <div class="mb-0">
                <label for="last-name2" class="form-label">Segundo Apellido</label>
                <input type="text" class="form-control" id="last-name2" placeholder="Ejemplo: Posada">
            </div>
            <div class="mb-0">
                <label for="tipo-documento" class="form-label">Tipo de Documento</label>
                <select class="form-select" id="tipo-documento" aria-label="Tipo de Documento">
                    <option selected>Seleccione una opción</option>
                    <option value="cedulaCiudadania">Cédula de Ciudadanía</option>
                    <option value="cedulaExtranjeria">Cédula de Extranjería</option>
                    <option value="registroCivil">Registro Civíl</option>
                    <option value="tarjetaIdentidad">Tarjeta de Identidad</option>
                </select>
            </div>
            <div class="mb-0">
                <label for="numero-identificacion" class="form-label">Número de Identificación</label>
                <input type="number" class="form-control" id="numero-identificacion" placeholder="Número de identificación">
            </div>
            <div class="mb-0">
                <label for="fecha-nacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fecha-nacimiento">
            </div>
            <div class="mb-0">
                <label for="genero" class="form-label">Género</label>
                <select class="form-select" id="genero" aria-label="Género">
                    <option selected>Seleccione una opción</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <div class="mb-0">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" placeholder="Ejemplo: Cra 15 #20n-51">
            </div>
            <div class="mb-0">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" placeholder="Ejemplo: pepe@gmail.com">
            </div>
            <div class="mb-0">
                <label for="descripcion" class="form-label">Descripción de la Solicitud</label>
                <textarea class="form-control" id="descripcion" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="archivo-adjunto" class="form-label">Adjuntar Archivo PDF</label>
                <input class="form-control" type="file" id="archivo-adjunto">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>