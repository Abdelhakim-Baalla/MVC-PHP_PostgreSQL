<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="shortcut icon" href="Assets/Images/checklist.png" type="image/x-icon">
    
    <style>
     
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen bg-gradient-to-r from-indigo-500 to-purple-600">

    <!-- Conteneur principal avec effets -->
    <div class="text-center p-10 md:p-16 bg-white bg-opacity-90 rounded-3xl shadow-2xl w-full sm:w-4/5 md:w-3/4 lg:w-2/3 transition-transform transform hover:scale-105">

        
        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-800 mb-6 leading-tight">
            Gérez vos tâches efficacement
        </h1>

        
        <a href="../App/Views/mytodo.php" class="mt-5 bg-gradient-to-r from-yellow-400 to-yellow-500 text-white py-2 px-5 rounded-full text-xl font-semibold shadow-lg transform transition duration-300 ease-in-out hover:bg-gradient-to-r hover:from-yellow-500 hover:to-yellow-400 hover:scale-105">
            Commencer
        </a>
        
    </div>

</body>

</html>
