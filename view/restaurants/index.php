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
        <!-- Restaurants -->
        <div class="py-4 sm:py-8 block lg:py-16 bg-opacity-50 " >
            <div
                class="relative mx-auto h-full px-4 pb-20  md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 relative flex flex-col justify-center items-center">
                    <div class="max-w-xl mx-auto text-center">
                        <div class="inline-flex px-4 py-1.5 mx-auto rounded-full">
                            <p class="text-4xl font-semibold tracking-widest text-g uppercase pt-20">Tous Les Restaurants</p>
                        </div>
                        <hr>
                    </div>
                    <div class="grid grid-cols-2 gap-2 mt-12 lg:mt-20   ">
                        <?php foreach($restaurants as $restaurant): ?>
                            <div class="border-2 shodow-lg transition-all duration-1000 bg-white hover:bg-gray-100  hover:shadow-xl m-2 p-4 relative group ">
                                <a href="index.php?action=show&controller=restaurant&id=<?php echo $restaurant['id'] ?>">
                                    <div
                                        class=" absolute  bg-rose-900/50 top-0 left-0 w-24 h-1  transition-all duration-200   group-hover:bg-white group-hover:w-1/2  ">
                                    </div>
                                    <div class="py-2 px-2 relative shodow-lg ">
                                        <div class="flex justify-between">
                                            <img src="<?php echo $restaurant->descriptionRestaurant->paragraphe[1]->image['url'] ?>" alt="">
                                        </div>
                                        <div class="flex justify-between py-2">
                                            <h3 class="text-lg font-bold mt-2"><?php echo $restaurant->coordonnees->nom ?></h3>
                                            <span class="mt-4 text-base text-gray-500 text-sm italic"><?php echo $restaurant->descriptionRestaurant->paragraphe[1]->important ?></span>
                                        </div>
                                        <hr>
                                        <p class="my-4 text-base text-gray-500"><?php echo $restaurant->descriptionRestaurant->paragraphe[0] ?></p>
                                        <div class="text-gray-500 mt-6 text-sm italic">
                                            <p class="flex item-center mb-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                </svg>
                                                <span class="ml-2 text-sm"> <?php echo $restaurant->coordonnees->adresse ?></span>
                                            </p>
                                            <p class="flex item-center ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                                </svg>
                                                <span class="ml-2 text-sm"> <?php echo $restaurant->coordonnees->restaurateur ?></span>
                                             </p>                                           
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