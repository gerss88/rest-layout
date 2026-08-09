<h2 align="center">Установка</h2>

1. Клонируйте репозиторий:
<br>   git clone https://github.com/gerss88/rest-layout.git

2. Установите зависимости:
<br>   composer install
<br>   npm install

3. Скопируйте .env:
<br>   cp .env.example .env

4. Сгенерируйте ключ:
<br>   php artisan key:generate

5. Настройте БД в .env и выполните миграции:
<br>   php artisan migrate

6. Запустите:
<br>   php artisan serve
