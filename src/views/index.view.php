<script src="https://cdn.tailwindcss.com"></script>
<style> @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap'); </style>

<ul class="flex flex-col">
    <?php foreach ($hikes as $hike) : ?>
        <li class="my-5 flex justify-start ml-5">
            <a href="/hike?codeTwo=<?= $hike['hikeID']; ?>">
                <span class="uppercase bg-lime-300 p-2 text-xs rounded-xl"><?= $hike['hikeName'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<style>
    span {
        font-family: 'Montserrat', sans-serif;
    }
</style>