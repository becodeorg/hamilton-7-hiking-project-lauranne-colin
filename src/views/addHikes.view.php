<h2 class="ml-5 my-5">Add an hike</h2>

<div class="flex justify-center">
<form class="flex flex-col" action="addHike" method="post">
<div class="input flex flex-row mb-5 w-fit">
        <label for="hikeName" class="w-28 label uppercase bg-lime-300 p-2 text-xs"> Name of the hike</label>
        <input type="hikeName" name="hikeName" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="input flex flex-row mb-5 w-fit">
        <label for="distance" class="w-28 label uppercase bg-lime-300 p-2 text-xs"> Distance of the hike</label>
        <input type="distance" name="distance" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="input flex flex-row mb-5 w-fit">
        <label for="duration" class="w-28 label uppercase bg-lime-300 p-2 text-xs">Description</label>
        <input type="duration" name="duration" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="input flex flex-row mb-5 w-fit">
        <label for="elevation" class="w-28 label uppercase bg-lime-300 p-2 text-xs">Elevation gain of the hike</label>
        <input type="elevation" name="elevation" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="input flex flex-row mb-5 w-fit">
        <label for="hikeDescription" class="w-28 label uppercase bg-lime-300 p-2 text-xs">Description</label>
        <input type="hikeDescription" name="hikeDescription" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="input flex flex-row mb-5 w-fit">
        <label for="update" class="w-28 label uppercase bg-lime-300 p-2 text-xs">Need an update</label>
        <input type="update" name="update" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
    </div>
    <div class="flex justify-center">
        <button type="submit">Add hike</button>
    </div>
</form>
</div>
