<h2 class="ml-5 my-5">Nos parcours par difficulté</h2>

<ul class=" flex flex-wrap flex-row">
    <?php foreach ($tags as $tag) : ?>
        <li class="my-5 border-black w-fit border-2 justify-start ml-5">
            <a class="flex flex-row" href="/tagName?codeTag=<?= $tag['tagName']; ?> "><span class="uppercase p-2 text-xs rounded-xl"><?= $tag['hikeID'] ?></span>
            <span class="uppercase p-2 text-xs flex"><?= $tag['tagName'] ?></span></a> 
        </li>
    <?php endforeach; ?>
</ul>
<style>
    span {
        font-family: 'Montserrat', sans-serif;
    }
</style>