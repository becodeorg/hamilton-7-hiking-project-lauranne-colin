
<?php if (!empty($_SESSION['User'])): ?>
        
<h2>Profil Page</h2>

<p>Hello <?= $_SESSION['User']['nickname'] ?></p>
<section>
    <div>
        <p>
        Your Nickname :  <?= $_SESSION['User']['nickname'] ?>
        </p>
    </div>
    <div>
        <p>
            Your Firstname :  <?= $_SESSION['User']['firstname'] ?>
        </p>
    </div>
    <div>
        <p>
            Your Lastname :  <?= $_SESSION['User']['lastname'] ?>
        </p>
    </div>
    <div>
        <p>
            Your Email :  <?= $_SESSION['User']['email'] ?> 
            <span>change email</span>
        </p>
    </div>
</section>
<!-- <section>
<ul class="flex flex-col">
    <?php foreach ($hikes as $hike)
     //   if($hikes['ID']=$_SESSION['User']['ID'])
     : ?>
        <li class="my-5 flex justify-start ml-5">
           
                <span class="uppercase bg-lime-300 p-2 text-xs rounded-xl"><?= $hike['hikeName'] ?></span>
        
        </li>
    <?php endforeach; ?>
</ul>

<style>
    span {
        font-family: 'Montserrat', sans-serif;
    }
</style>
</section> -->
<?php endif; ?>