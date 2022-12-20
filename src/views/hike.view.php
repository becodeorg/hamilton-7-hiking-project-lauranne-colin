<style> 
    h2, p, .hikeDetails {
        font-family: 'Montserrat', sans-serif;
    }
</style>


<h2 class="uppercase py-5 flex justify-center"><?= $hike['hikeName'] ?></h2>

<p class="text-sm mx-5"><?= $hike['hikeDescription'] ?></p>

<div class="hikeDetails mt-5 mx-5 text-xs">
    <div class="hikeDate">Date d'ajout du parcours</div>
    <div class="hikeDateData"><?= $hike['hikeDate'] ?></div>
    <div class="hikeUpdate">Dernière update</div>
    <div class="hikeUpdateData"><?= $hike['hikeUpdate'] ?></div>
    <div class="distance">Distance du parcours</div>
    <div class="distanceData"><?= $hike['distance'] ?></div>
    <div class="duration">Durée du parcours</div>
    <div class="durationData"><?= $hike['duration'] ?></div>
    <div class="elevation">Dénivelé positif</div>
    <div class="elevationData"><?= $hike['elevation_gain'] ?>m</div>
</div>

<style>
    .hikeDetails {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(5, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
    }

    .hikeDate { grid-area: 1 / 1 / 2 / 2; }
    .hikeDateData { grid-area: 1 / 2 / 2 / 3; }
    .hikeUpdate { grid-area: 2 / 1 / 3 / 2; }
    .hikeUpdateData { grid-area: 2 / 2 / 3 / 3; }
    .distance { grid-area: 3 / 1 / 4 / 2; }
    .distanceData { grid-area: 3 / 2 / 4 / 3; }
    .duration { grid-area: 4 / 1 / 5 / 2; }
    .durationData { grid-area: 4 / 2 / 5 / 3; }
    .elevation { grid-area: 5 / 1 / 6 / 2; }
    .elevationData { grid-area: 5 / 2 / 6 / 3; }
</style>