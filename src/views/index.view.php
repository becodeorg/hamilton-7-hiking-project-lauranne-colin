<ul class="flex flex-col">
    <?php foreach ($hikes as $hike) : ?>
        <li class="my-5 flex justify-start ml-5">
            <a href="/hike?code=<?= $hike['hikeID']; ?>">
                <span class="uppercase bg-lime-300 p-2 text-xs rounded-xl"><?= $hike['hikeName'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<ul class="hidden flex flex-wrap flex-row"> 
    <!-- c'est hidden c'est normal qu'on ne le voie pas -->
    <!-- suffit de retirer le hidden et ça le fait réapparaître c'est magique -->
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