<script src="https://cdn.tailwindcss.com"></script>
<style> @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap'); </style>
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

<h2 class="ml-5 my-5">Create your account</h2>

<div class="flex justify-center">
<form class="flex flex-col" action="registration" method="post">
    <div class="input flex flex-row mb-5 w-fit">
        <label for="username" class="w-28 label uppercase bg-lime-300 p-2 text-xs">Username</label>
        <input type="text" name="username" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="input flex flex-row mb-5 w-fit">
        <label for="email" class="w-28 label uppercase bg-lime-300 p-2 text-xs">Email</label>
        <input type="email" name="email" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="input flex flex-row mb-5 w-fit">
        <label for="password" class="w-28 label uppercase bg-lime-300 p-2 text-xs">Password</label>
        <input type="password" name="password" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="flex justify-center">
        <button type="submit">Register</button>
    </div>
</form>
</div>


<ul class="flex flex-col">
    <?php foreach ($hikes as $hike) : ?>
        <li class="my-5 flex justify-start ml-5">
            <a href="/hike?codeTwo=<?= $hike['hikeID']; ?>">
                <span class="uppercase bg-lime-300 p-2 text-xs rounded-xl"><?= $hike['hikeName'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

