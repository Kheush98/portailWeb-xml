<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Ajouter un Film</title>
</head>
<body>
    <?php require_once 'view/partiels/header.php'; ?>>
    <div class="bg-white px-6 py-24 sm:py-32 lg:px-8 text-gray-900">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
      <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Ajouter un nouveau film </h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">Veuillez respecter les indications mises pour chaque champ</p>
    </div>
    <form action="index.php?action=add&controller=film" method="POST" class="mx-auto mt-8 max-w-xl sm:mt-12">
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2"> 
        <div class="sm:col-span-2">
          <label for="titre" class="block text-sm font-semibold leading-6">Titre</label>
          <div class="mt-2.5">
            <input type="text" name="titre" id="titre" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-gray-500 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-400 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="heures" class="block text-sm font-semibold leading-6">Duree (heures)</label>
          <div class="mt-2.5">
            <input type="number" name="heures" id="heures" autocomplete="" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-gray-500 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-400 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="minutes" class="block text-sm font-semibold leading-6">Duree (minutes)</label>
          <div class="mt-2.5">
            <input type="number" name="minutes" id="minutes"  class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-gray-500 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-400 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="realisateur" class="block text-sm font-semibold leading-6">Realisateur</label>
          <div class="mt-2.5">
            <input type="text" name="realisateur" id="realisateur" autocomplete="realisateur" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-gray-500 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-400 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="acteurs" class="block text-sm font-semibold leading-6">Acteurs (séparés par des virgules)</label>
          <div class="mt-2.5">
            <input type="text" name="acteurs" id="acteurs" autocomplete="acteurs" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-gray-500 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-400 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="annee" class="block text-sm font-semibold leading-6">Annee</label>
          <div class="mt-2.5">
            <input type="number" name="annee" id="annee" autocomplete="annee" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-gray-500 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-400 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="">
          <label for="langue" class="block text-sm font-semibold leading-6">Langue</label>
          <select id="langue" name="langue" class=" rounded-md border-0 bg-transparent shadow-sm py-4 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
            <option value="FR">Français</option>
            <option value="AN">Anglais</option>
          </select>
          <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>     
        </div>
        <div class="">
          <label for="genre" class="block text-sm font-semibold leading-6">Genre</label>
          <div class="mt-2.5">
            <input type="text" name="genre" id="genre" autocomplete="genre" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-gray-500 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-400 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="description" class="block text-sm font-semibold leading-6">Desrciption</label>
          <div class="mt-2.5">
            <textarea name="description" id="description" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>
      </div>
      <div class="">
        <label for="horaires" class="block text-sm font-semibold leading-6">Horaires (format: Jour-Heure-Minute, séparés par des virgules)</label>
        <div class="mt-2.5">
          <input type="text" name="horaires" id="horaires" autocomplete="horaires" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-gray-500 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-400 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="">
        <label for="notes" class="block text-sm font-semibold leading-6">Notes (auteur-valeur-base, séparées par des virgules)</label>
        <div class="mt-2.5">
          <input type="text" name="notes" id="notes" autocomplete="notes" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-gray-500 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-400 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="mt-10">
        <button type="submit" class="block w-full rounded-md bg-rose-800 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-rose-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ajouter</button>
      </div>
    </form>
  </div>
    <?php include 'view/partiels/footer.php'; ?>
</body>
</html>
