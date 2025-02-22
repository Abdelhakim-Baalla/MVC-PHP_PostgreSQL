<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTodo</title>
    <link rel="shortcut icon" href="../../Public/Assets/Images/checklist.png" type="image/x-icon">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <main class="flex h-screen items-center">
        <section class="border-6 w-1/2 text-center">
            <h1>MyTodo</h1>

            <form class="max-w-sm mx-auto" action="../Controllers/ListController.php" method="post">
              <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task Title</label>
                <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Task Title"/>
              </div>
              <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task Description</label>
                <textarea name="description" id="description" rows="6" cols="20" placeholder="Task Description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
              </div>

              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </section>


        <section class="border-6 w-1/2">
            <div>

            </div>
        </section>
    </main>
</body>
</html>