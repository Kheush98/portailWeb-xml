<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php require_once 'view/partiels/header.php'; ?>
    <section class=" bg-rose-900ray-50 text-gray-600">
        
        <div class="py-4 sm:py-8 block lg:py-16 bg-opacity-50 " >
            <div
                class="relative mx-auto h-full px-4 pb-12  md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 relative flex flex-col justify-center items-center">
                    <div class="max-w-xl mx-auto text-center">
                        <div class="inline-flex px-4 py-1.5 mx-auto rounded-full  ">
                            <p class="text-4xl font-semibold tracking-widest text-gray-500 uppercase pt-20">Tous Les Films</p>
                        </div>
                        <hr>
                    </div>
                    <div class="pt-8">
                        <a href="index.php?action=addForm&controller=film" class="admin bg-rose-900 py-4 px-8 text-white font-bold text-xs rounded hover:bg-gray-200 hover:text-gray-800">Ajouter un film</a>
                    </div>
                    <div class="grid grid-cols-2 gap-2 mt-12 lg:mt-20   ">
                        <?php foreach($films as $film): ?>
                            <div class="rounded border-2 shodow-lg duration-1000 bg-white hover:bg-gray-100 hover:shadow-xl m-2 p-4 relative group ">
                                <a href="index.php?action=delete&controller=film&id=<?php echo $film['id'] ?>" onclick="confirm('Voulez-vous supprimer ce film ?')" class="admin">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </a>

                                <a href="index.php?action=show&controller=film&id=<?php echo $film['id'] ?>">
                                    <div
                                        class=" absolute bg-rose-900/50 top-0 left-0 w-24 h-1 transition-all duration-200 group-hover:bg-white group-hover:w-1/2  ">
                                    </div>
                                    <div class="py-2 px-2 relative shodow-lg ">
                                        <div class="flex justify-between">
                                            <div class="flex">
                                                <svg class="w-8 h-8 fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0 1 18 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0 1 18 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 0 1 6 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
                                                </svg>
                                                <h3 class="text-lg font-bold ml-2"><?php echo $film->titre ?></h3>
                                            </div>
                                            <span class="text-sm italic">De <?php echo $film->realisateur ?></span>
                                        </div>
                                        <hr>
                                        <p class="mt-4 text-base"><?php echo $film->description ?></p>
                                        <div class=" mt-4 text-sm italic">
                                            <p><span class="font-semibold">Genre</span> : <?php echo $film->genre ?></p>
                                            <p><span class="font-semibold">Durée</span> : <?php echo $film->duree['heures'] ?>h <?php echo $film->duree['minutes']?>min </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'view/partiels/footer.php'; ?>
</body>
</html>