# Laravel News Aggregator

A scalable, API-driven backend that aggregates and serves news articles from NewsAPI, New York Times, and The Guardian. Built with Laravel 12 using clean architecture, strategy patterns, and best practices.

---

## Features

- Aggregates news from **NewsAPI**, **NYT**, and **The Guardian**
- Stores articles locally in database
- Search, filter, sort, and paginate articles
- Clean architecture with services, repositories, strategy pattern
- Scheduled background fetching using Laravel Scheduler
- API documentation using Laravel Scribe
- Unit & Feature tests (95%+ coverage)
- Ready for API auth (Laravel Sanctum), rate limiting, and caching

---

## Requirements

- PHP >= 8.2
- Composer >= 2.6
- Laravel >= 12
- MySQL / PostgreSQL
- Node.js & NPM (optional for frontend or asset compilation)

---

## Installation

```bash
git clone https://github.com/your-username/news-aggregator.git
cd news-aggregator
composer install
cp .env.example .env
php artisan key:generate
```

Update your `.env` with DB and API keys:

```env
DB_DATABASE=news_aggregator
DB_USERNAME=root
DB_PASSWORD=

NEWSAPI_KEY=your_newsapi_key
NYT_API_KEY=your_nyt_key
GUARDIAN_API_KEY=your_guardian_key
```

Run migrations:

```bash
php artisan migrate
```

---

## External News APIs Used

- NewsAPI: [https://newsapi.org](https://newsapi.org)
- NYT: [https://developer.nytimes.com](https://developer.nytimes.com)
- The Guardian: [https://open-platform.theguardian.com](https://open-platform.theguardian.com)

---

## Fetching News

### Manual Fetch

```bash
php artisan news:fetch
```

### Scheduled Fetch

In `routes/console.php`:

```php
Schedule::command(FetchAllNews::class)->hourly();
```

Set up cron:

```bash
* * * * * cd /path-to-project && php artisan schedule:run >> /dev/null 2>&1
```

---

## PHPStan Analyze
In `Terminal`:
php vendor\bin\phpstan analyse app



## API Endpoints

### Get All Articles

`GET /api/articles`

**Query Parameters:**

- `q`: Search keyword
- `category`: Filter by category
- `source`: Filter by source
- `author`: Filter by author
- `from`, `to`: Date range
- `sort`: `latest` (default) or `oldest`
- `per_page`: Items per page (default: 15)

### Get Single Article

`GET /api/articles/{id}`

---

## API Documentation

Generate docs:

```bash
php artisan scribe:generate
```

Visit:

```
http://localhost:8000/docs
```

---

## Testing

```bash
php artisan test
```

Covers:

- Repository logic
- API service integration
- Feature tests for endpoints

---

## Architecture Overview

- `app/Services` - API strategy classes per source
- `app/Repositories` - DB access layer
- `routes/api.php` - API routes
- `routes/console.php` - Scheduled tasks
- `app/Console/Commands` - News fetch command
- `tests/` - Feature & unit tests

---

## Checklist vs Case Study Requirements

| Requirement from Case Study                    | Implemented?                               |
| ---------------------------------------------- | ------------------------------------------ |
| Aggregate from at least 3 APIs                 | ✅ NewsAPI, NYT, Guardian                   |
| Store articles locally                         | ✅ Yes                                      |
| Regularly update data                          | ✅ Via scheduler + command                  |
| Create API endpoints with filtering            | ✅ `/api/articles` with full filters        |
| Search, category, source, author, date filters | ✅ All included                             |
| Serve frontend-ready responses                 | ✅ JSON API with pagination                 |
| Apply SOLID, DRY, KISS principles              | ✅ Clean service/repo/strategy architecture |
| Use Laravel for backend                        | ✅ Laravel 12                               |
| Include documentation                          | ✅ Scribe-generated docs                    |
| Testing support                                | ✅ Unit + feature tests written             |

---

## 👨‍💼 Author

Made with Laravel by Yasir Jawed

