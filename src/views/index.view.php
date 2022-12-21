<ul class="flex flex-col">
    <?php foreach ($hikes as $hike) : ?>
        <li class="my-5 flex justify-start ml-5">
            <a href="/hike?code=<?= $hike['hikeID']; ?>">
                <span class="uppercase bg-lime-300 p-2 text-xs rounded-xl"><?= $hike['hikeName'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<ul class="flex flex-col">
    <?php foreach ($tags as $tag) : ?>
        <li class="my-5 flex justify-start ml-5">
            
                <span class="uppercase bg-lime-300 p-2 text-xs rounded-xl"><?= $tag['hikeID'] ?></span>
              <a href="/tagName?codeTag=<?= $tag['tagName']; ?> "> <span class="uppercase bg-lime-300 p-2 text-xs rounded-xl"><?= $tag['tagName'] ?></span></a> 
        </li>
    <?php endforeach; ?>
</ul>
<style>
    span {
        font-family: 'Montserrat', sans-serif;
    }
</style>