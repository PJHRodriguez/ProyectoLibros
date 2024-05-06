<?php include("./templates/header.php"); ?>


<!-- Contenido principal -->
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div class="relative">
            <img src="../img/intercambio.jpg" alt="Intercambio de Libros" class="w-full h-auto rounded-br-lg">

        </div>

        <div class="flex items-center justify-center bg-gray-100 rounded-tl-lg p-6">
            <p class="text-lg font-semibold text-gray-800">"Intercambiar libros es como compartir mundos. Cada página es un nuevo universo por descubrir, y cada lectura nos lleva a aventuras inesperadas".</p>
        </div>
    </div>




    <div class="container mx-auto px-4 py-8">
    <!-- Top Usuarios -->
        <h2 class="text-5xl font-semibold mb-4 text-center text-gray-700">Top Usuarios</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Carta de ejemplo para un usuario -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <a href="/usuario1">
                    <div class="flex justify-center pt-6">
                        <img src="./img/66381612dc09c_wasaski.jpg" alt="Usuario 1" class="rounded-full w-32 h-32 object-cover">
                    </div>
                </a>
                <div class="p-4">
                    <h3 class="text-center text-xl font-semibold mb-2">Usuario 1</h3>
                    <p class=" text-center text-gray-600 mb-1">Intercambios realizados: <span class="text-green-500">##</span></p>
                </div>
            </div>
   
        </div>
    </div>

    <<div class="container mx-auto px-4 py-8">
    <!-- Top Usuarios -->
        <h2 class="text-5xl font-semibold mb-4 text-center text-teal-600">Top Libros</h2>
        <hr class="bg-teal-600">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 pt-3">
            <!-- Carta de ejemplo para un libro -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <a href="/libro1">
                    <div class="flex justify-center pt-6"> 
                        <img src="./img/66381612dc09c_wasaski.jpg" alt="Libro 1" class="rounded-md w-32 h-48 object-cover"> 
                    </div>
                </a>
                <div class="p-4">
                    <h3 class="text-center text-xl font-semibold mb-2">Libro 1</h3>
                    <p class=" text-center text-gray-600 mb-1">Autor: <span class="text-green-500">Lorem</span></p>
                    <p class=" text-center text-gray-600 mb-1">Categoria: <span class="text-green-500">Lorem</span></p>
                </div>
            </div>

        </div>
    </div>
</div>


</div>





<?php include("./templates/footer.php"); ?>