

        
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
