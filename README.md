# laracms
CMS on Laravel

Установка

1. git clone
2. composer update
3. Права на 0777 на папку storage и public/uploads
4. Прописать пароли на базу в .env
5. php artisan migrate
6. Идем database/seeds/DatabaseSeeder.php там прописываем наш пароль
7. php artisan db:seed

Все. Админка работает.

Вход в админку: url.com/admin


Чтобы заработал фронтенд:
Идем в дерево сайта создаем корневой узел, назначаем ему шаблон Главная станица.

