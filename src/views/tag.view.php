<style> 
    h2, p, .hikeDetails {
        font-family: 'Montserrat', sans-serif;
    }
</style>


<h2 class="uppercase py-5 flex justify-center text-center">All <?= $tag['tagName'] ?> hike</h2>

<?php foreach($tag2 as $TagforName) : ?>
    <li class="my-5 flex justify-start ml-5">
              <a href="/hike?code=<?= $TagforName['hikeID']; ?>"> <span class="uppercase bg-lime-300 p-2 text-xs rounded-xl"><?= $TagforName['hikeName'] ?></span></a> 
            
        </li>

    <?php endforeach; ?>