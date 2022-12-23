

        
<h2 class="m-5 uppercase">Votre compte</h2>
    <div class="m-5">
        <p>
            Nom :  <?= $_SESSION['User']['lastname'] ?>
        </p>
        <p>
            Prénom :  <?= $_SESSION['User']['firstname'] ?>
        </p>
        <p>
            Email :  <?= $_SESSION['User']['email'] ?> 
        </p>
        <button class='mt-5'>Modifier l'email</button>
    </div>
</section>
