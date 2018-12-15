# PHP Easy login
This is one of my first PHP Login-Systems


## Login-Form

```php
                 <form action="login.php" method="post" id="form">
                            <input type="text" name="na" placeholder="Name" autofocus required>
                            <input type="password" name="pw" placeholder="Password" required>
                        <input type="submit">
                    </form>
```
## Register-Form
```php
                <form action="register.php" method="post" id="form">
                        <input type="text" name="na" placeholder="Name" required>
                        <input type="password" name="pw" placeholder="Password" required>
                        <input type="password" name="pw" placeholder="Repeat Password"required>
                    <input type="submit">
                </form>
                ```


## SQL
```
create table user
(
  id   int auto_increment
    primary key,
  name varchar(50) charset utf8  not null,
  pw   varchar(255) charset utf8 not null
);
```

this Login works with MySQL 

thanks for Reading my README.md :D 
