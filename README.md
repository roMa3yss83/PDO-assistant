# PDO ассистент

Простой класс для работы с [PDO](https://www.php.net/manual/ru/book.pdo.php)

### Настройка

В файл `configDB.php` в папке `Database` впишите нужные вам данные

```php
return [
    'host' => 'localhost',
    'dbname' => 'test',
    'user' => 'root',
    'password' => 'root'
];
```
Где 
 - `host` - хост
 - `dbname` - имя базы данных
 - `user` - пользователь базы данных
 - `password` - пароль

### Использование

Оператор **INSERT**
```php
echo $database->query(
    'INSERT INTO users(email, password) VALUES(:email, :password)',
        [
            ':email' => $email,
            ':password' => $password
        ]);
```
Оператор **SELECT** *c фильтрацией* данных
```php
var_dump($database->query(
    'SELECT id FROM users WHERE email = :email',
    [':email' => $email]
));
```
Оператор **SELECT** *без фильтрации* данных
```php
var_dump($database->query('SELECT email, password FROM users'));
