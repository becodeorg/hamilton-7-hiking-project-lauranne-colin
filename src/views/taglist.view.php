<h2 class="ml-5 my-5">Nos parcours par difficulté</h2>

<ul class="flex flex-row">
    <?php foreach ($tags as $tag) : ?>
        <li class="">
            <a class="" href="/tagName?codeTag=<?= $tag['tagName']; ?> ">
            <span class=" uppercase bg-stone-200 rounded-xl p-2 text-xs ml-3"><?= $tag['tagName'] ?></span></a> 
        </li>
    <?php endforeach; ?>
</ul>
<style>
    span {
        font-family: 'Montserrat', sans-serif;
    }
</style>