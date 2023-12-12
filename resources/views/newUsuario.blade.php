<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>>Nuevo Usuario</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="bg-[#dfe3e5] w-screen h-screen grid place-items-center">
        <div class="px-[2rem] py-[3rem] rounded-md bg-white w-[90%] h-[90%] ">
            <div class="flex justify-between">
                <h1 class="text-[20px]">Agregar Usuarios</h1>
                <a href="/usuarios"
                    class="text-[20px] px-[1rem] py-[0.5rem] text-[#fff] bg-[#004e6b] flex items-center rounded-md cursor-pointer">
                    <span class="material-symbols-outlined mr-[10px]">
                        menu
                    </span> Volver al listado
                </a>
            </div>
            <div class="px-[30%] py-[5rem]">
                <form action="api/usuarios" method="POST">
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col w-[45%]">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre"
                                class="p-[0.5rem] border border-[#000000] mb-[1rem] mt-[0.8rem]"
                                placeholder="Ingrese el nombre">
                        </div>
                        <div class="flex flex-col w-[45%]">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" name="apellido"
                                class="p-[0.5rem] border border-[#000000] mb-[1rem] mt-[0.8rem]"
                                placeholder="Ingrese el apellido">
                        </div>
                    </div>
                    <div class="flex flex-col w-[100%]">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email"
                            class="p-[0.5rem] border border-[#000000] mb-[1rem] mt-[0.8rem]"
                            placeholder="Ingrese el email">
                    </div>
                    <div class="flex flex-col w-[45%]">
                        <label for="password">Contraseña</label>
                        <input type="text" id="password" name="password"
                            class="p-[0.5rem] border border-[#000000] mb-[1rem] mt-[0.8rem]"
                            placeholder="Ingrese la contraseña">
                    </div>
                    <div class="flex justify-center">
                        <input type="submit" value="Guardar"
                            class="py-[0.5rem] px-[5rem] mb-[1rem] mt-[2rem] bg-[#004e6b] text-[#fff] rounded-md cursor-pointer">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
