<ul>
    <?php foreach ($hikes as $hike) : ?>
        <li>
            <a href="/hike?codeTwo=<?= $hike['hikeID']; ?>">
                <span><?= $hike['hikeName'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>