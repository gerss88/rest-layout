<p align="center">My rest Layout</p>

<p align="center">Установка</p>

1. Клонируйте репозиторий:
   git clone https://github.com/ВАШ_ЛОГИН/my-laravel-project.git

2. Установите зависимости:
   composer install
   npm install

3. Скопируйте .env:
   cp .env.example .env

4. Сгенерируйте ключ:
   php artisan key:generate

5. Настройте БД в .env и выполните миграции:
   php artisan migrate

6. Запустите:
   php artisan serve
