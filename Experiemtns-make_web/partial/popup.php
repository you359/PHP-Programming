<style>
    #element_to_pop_up input {
        width: 100%;
        margin-bottom: 10px;
        padding: 5px;
    }

    #element_to_pop_up input[type="submit"] {
        background-color: #1f7e9a;
        color: #fff;
    }
</style>

<div id="element_to_pop_up">
    <h3>Login</h3>
    <form method="post" action="function/login.php">
        <input type="text" placeholder="id" name="id">
        <input type="password" placeholder="password" name="pw">
        <input type="submit" value="Login">
    </form>
</div>