<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>

<body>
    <div class="bg-[#dfe3e5] w-screen h-screen grid place-items-center">
        <div class="px-[2rem] py-[3rem] rounded-md bg-white w-[90%] h-[90%] ">
            <div class="flex justify-between">
                <h1 class="text-[20px]">Gestión de usuarios</h1>
                <a href="/"
                    class="text-[20px] px-[1rem] py-[0.5rem] text-[#fff] bg-[#004e6b] flex items-center rounded-md cursor-pointer">
                    <span class="material-symbols-outlined mr-[10px]">
                        person_add
                    </span> Agregar
                </a>
            </div>
            <div class="px-[1rem] py-[5rem]">
                <table class="w-[100%]">
                    <thead>
                        <tr>
                            <th class="border-b-2 text-start">Usuario</th>
                            <th class="border-b-2 text-start">Email</th>
                            <th class="border-b-2 text-start">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <form action="api/usuarios/{{ $usuario->id }}" method="POST">
                                        @method('DELETE')
                                        <input class="bg-[#A50000] text-white p-[0.3rem] rounded-md" type="submit"
                                            value="Eliminar">
                                    </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
