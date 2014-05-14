<?php /*<html>
    <a href="http://localhost/events/events"> Go back to the choopa! </a>
    <h1>Register now to create your superior OWN EVENT!</h1>
    <form action="../users/register" method="post">
        <p>Register your account.</p>
        <label>Username:</label><input name="username" size="40" />
        <label>Password:</label><input type="password" name="password" size="40"/>
        <label>Email:</label><input type="email" name="email" size="40" maxlength="100" />
        <label>First Name:</label><input name="firstname" size="25" />
        <label>Last Name:</label><input name="lastname" size="25" />
        <input type="submit" value="register" name="register" />
    </form>
</html> 
 * 
 */
echo $this->form->create('User', array('action' => 'register'));
echo $this->form->input('username');
echo $this->form->input('email');
echo $this->form->input('firstname');
echo $this->form->input('lastname');
echo $this->form->input('passwd');
echo $this->form->input('passwd_confirm', array('type' => 'password'));
echo $this->form->submit();
echo $this->form->end();