# Game Catalog (Laravel 11)

Проект — каталог видеоигр, поддерживающий CRUD (создание, редактирование, удаление, просмотр) с фильтрацией, пагинацией и загрузкой изображений.

## 📦 Установка
1. Клонировать репозиторий:
```bash
git clone https://github.com/dmaberlin1/game-catalog.git cd game-catalog
```
2. Запустить контейнеры:
```bash
docker-compose up -d --build
```
3. Установить зависимости:
```bash
docker-compose exec app composer install
```
4. Создать `.env` и сгенерировать ключ:
```bash
docker-compose exec app cp .env.example .env docker-compose exec app php artisan key:generate
```
5. Запустить миграции и заполнить базу:
```bash
docker-compose exec app php artisan migrate --seed
```
6. Открыть в браузере:
```bash
http://localhost:8000
``` 


## 📌 Функционал
✔️ CRUD (добавление, редактирование, удаление)  
✔️ Пагинация  
✔️ Фильтрация по названию, жанру, платформе  
✔️ Загрузка изображений  
✔️ Docker для быстрого развертывания

## 🚀 Разработка
- Laravel 11
- PHP 8
- MySQL 8
- Docker + Nginx
- TailwindCSS

## 🛠 Запуск тестов
```bash
docker-compose exec app php artisan test
```
