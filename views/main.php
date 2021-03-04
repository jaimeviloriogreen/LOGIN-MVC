<?php include("views/includes/header.php");?>

<main class="container">
    <section class="sectionLogin">
    <img class="icon-user-main" src="/assets/img/sector6.svg" alt="icon-user">
        
        <h1>Member Login</h1>
        <form action="#" method="POST" name="mainForm" autocomplete="off">
            <div class="user-name">
                <input type="text" name="username" id="username" autofocus placeholder="Username">
                <img class='icon-user' src='/assets/img/sector3.svg' alt='icon-user'>
            </div>
            <div class="user-lock">
                <input type="password" name="password" id="password" placeholder="Password"> 
                <img class='icon-lock' src='/assets/img/sector1.svg' alt='icon-lock'>
            </div>
            <input type="submit" value="LOGIN">
        </form>
        <a href="#">SINGIN</a>
    </section>
   
</main>

<?php include("views/includes/footer.php");?>
