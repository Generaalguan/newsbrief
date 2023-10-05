<?php 
// if (isset($_POST['create_user'])) {

// $user_email = $_POST['user_email'];

// $query = "INSERT INTO users( user_email) ";

// $query .= "VALUES('{$user_email}') ";

// $create_user_query = mysqli_query($connection, $query);

// confirm($create_user_query);


// echo "User Created";


// }

?>



<form class="form" method="post" action="">
            <div class="form__div">
                <input class="form__input" name="user_email" type="email" id="email" placeholder="Vul hier uw email..." >
            </div>
            <button name="create_user" class="form__btn">Verstuur</button>
</form>