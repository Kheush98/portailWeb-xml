<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <?php require_once 'view/partiels/header.php'; ?>
    <div class="sm:py-8 block lg: bg-opacity-50 text-gray-600" >
        <div class="relative mx-auto h-full px-4 pb-12  md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
            <main class="profile-page">
              <section class="relative block h-500-px">
                <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
                        background-image: url('<?php echo $restaurant->descriptionRestaurant->paragraphe[1]->image['url'] ?>');
                      ">
                  <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
                </div>
              </section>
              <section class="relative py-16">
                <div class="container mx-auto px-4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                    <div class="px-6">
                      <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                          <div class="relative">
                            <h3 class="text-4xl font-semibold leading-normal my-2">
                                <?php echo $restaurant->coordonnees->nom ?>
                            </h3>
                          </div>
                        </div>
                      </div>
                      <div class="text-center mt-1">
                        <div class="text-normal leading-normal mt-0 mb-2">
                          <i class="fas fa-map-marker-alt mr-2 text-normal"></i>
                          <?php echo $restaurant->coordonnees->adresse ?>
                        </div>
                        <div class="text-normal leading-normal mt-0 mb-2 ">
                          <i class="fa fa-user mr-2 text-normal "></i>
                          <?php echo $restaurant->coordonnees->restaurateur ?>
                        </div>
                      </div>
                      <div class="mt-10 pb-10 border-t border-blueGray-200 text-center">
                        <h3 class="py-3 text-lg font-bold">Description</h3>
                        <div class="flex flex-wrap justify-center">
                          <div class="w-full lg:w-9/12 px-4">
                            <p class="mb-10 text-base leading-relaxed">
                                <?php echo $restaurant->descriptionRestaurant->paragraphe[0] ?>
                            </p>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="grid col-span-4 relative">
                                    <a class="group shadow-md duration-200 delay-75 w-full bg-white rounded-sm py-6 pr-6 pl-9" href="">
                                        <p class="text-2xl font-bold group-hover:text-gray-700"> Carte </p>
                                        <p class="text-sm font-semibold group-hover:text-gray-700 mt-2 leading-6"> 
                                            <?php foreach ($restaurant->carte->plat as $plat): ?>
                                        
                                                <?php echo $plat->descriptionPlat->paragraphe ?> <?php echo '('.$plat['type'].')' ?> : <?php echo $plat->prix['montant'] ?> <?php echo $plat->prix['devise'] ?> <br>
                                    
                                            <?php endforeach; ?>
                                        </p>
                                        <div class="bg-rose-800 group-hover:bg-rose-900 h-full w-4 absolute top-0 left-0"> </div>
                                    </a>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </main>
        </div>
    </div>
    <?php include 'view/partiels/footer.php'; ?>
</body>
</html>