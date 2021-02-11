# Aliya Merinomood
  
## Требования  
  
- PHP 7.2.5+  
- MySQL 5.7+  
- NodeJS 11+  
- NPM 6.5+  
  
## Установка  
  
#### 1) Склонируйте проект 
Запустите команду `git clone git@bitbucket.org:arniro/merinomood.git` в папке со всеми проектами (убедитесь, что добавили свой SSH ключ в bitbucket)  

#### 2) Установите зависимости composer  
Запустите команду `composer install`  
  
#### 3) Создайте файл с переменными окружения (.env)  
Скопируйте `.env.example` в `.env`  
  
#### 4) Сгенерируйте ключ приложения  
Запустите команду `php artisan key:generate`  
  
#### 5) Создайте базу данных  
  
#### 6) Заполните переменные окружения в файле `.env`  
- Укажите в `DB_DATABASE`, `DB_USERNAME` и `DB_PASSWORD` соответствующие значения  
- Укажите в `APP_URL` URL приложения  
  
#### 7) Запустите миграции (для создания таблиц в базе данных)  
Запустите команду `php artisan migrate`  
  
#### 8) Создайте пользователя (не обязательно)  
Запустите команду `php artisan admin:user`  
  
#### 9) Установите Front End зависимости  
Запустите команду `yarn install`  
  
#### 10) Запустите компиляцию  
Запустите команду `yarn run watch(hot)`
  
#### 11) Наслаждайтесь разработкой!
