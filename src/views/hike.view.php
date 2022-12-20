<script src="https://cdn.tailwindcss.com"></script>
<style> 
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap'); 
    h2, p {
        font-family: 'Montserrat', sans-serif;
    }
</style>


<h2 class="uppercase py-5 flex justify-center"><?= $hike['hikeName'] ?></h2>

<p class="text-sm mx-5"><?= $hike['hikeDescription'] ?></p>