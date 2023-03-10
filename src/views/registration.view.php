<style>
    form, h2 {
        font-family: 'Montserrat', sans-serif;
    }
    .label {
        border-top-left-radius: 0.75rem;
        border-bottom-left-radius: 0.75rem;
    }
    .input {
        border-top-right-radius: 0.75rem;
        border-bottom-right-radius: 0.75rem;
    }


</style>

<h2 class="ml-5 my-5">Créer un compte</h2>

<div class="flex justify-center">
<form class="flex flex-col" action="registration" method="post">
<div class="input flex flex-row mb-5 w-fit">
        <label for="firstname" class="w-28 label uppercase bg-lime-300 p-2 text-xs"> Prénom</label>
        <input type="firstname" name="firstname" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="input flex flex-row mb-5 w-fit">
        <label for="lastname" class="w-28 label uppercase bg-lime-300 p-2 text-xs"> Nom</label>
        <input type="lastname" name="lastname" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="input flex flex-row mb-5 w-fit">
        <label for="nickname" class="w-28 label uppercase bg-lime-300 p-2 text-xs">Pseudo</label>
        <input type="text" name="nickname" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="input flex flex-row mb-5 w-fit">
        <label for="email" class="w-28 label uppercase bg-lime-300 p-2 text-xs">Email</label>
        <input type="email" name="email" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="input flex flex-row mb-5 w-fit">
        <label for="password" class="w-28 label uppercase bg-lime-300 p-2 text-xs">Mot de passe</label>
        <input type="password" name="password" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="flex justify-center">
        <button type="submit">Inscription</button>
    </div>
</form>
</div>


<ul class="flex flex-col">
    <?php foreach ($hikes as $hike) : ?>
        <li class="my-5 flex justify-start ml-5">
            <a href="/hike?code=<?= $hike['hikeID']; ?>">
                <span class="uppercase bg-lime-300 p-2 text-xs rounded-xl"><?= $hike['hikeName'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

