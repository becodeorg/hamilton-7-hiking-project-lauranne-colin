<style>
    form, h2 {
        font-family: 'Montserrat', sans-serif;
    }
    .label {
        border-top-left-radius: 0.75rem;
        border-bottom-left-radius: 0.75rem;
    }
    .input {
        border-top-right-radius: 0.75rem;
        border-bottom-right-radius: 0.75rem;
    }
</style>

<h2 class="ml-5 my-5">Login</h2>

<div class="flex justify-center">
    <form class="flex flex-col action="login" method="post">
        <div class="input flex flex-row mb-5 w-fit">
            <label for="nickname" class="w-28 label uppercase bg-lime-300 p-2 text-xs">Username</label>
            <input type="text" name="nickname" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
        </div>
        <div class="input flex flex-row mb-5 w-fit">
            <label for="password" class="w-28 label uppercase bg-lime-300 p-2 text-xs">Password</label>
            <input type="password" name="password" placeholder="..." class="input border-stone-200 border-2 w-36 pl-2 text-xs">
        </div>
        <div class="flex justify-center">
            <button type="submit">Login</button>
        </div>
    </form>
</div>