<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

![image](https://github.com/user-attachments/assets/bd9dc640-dee5-495d-a5f1-9bd36082d90e)

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# SHACK15

## Prerequisites

Ensure that the following are installed on your local machine:

- [PHP](https://www.php.net/downloads) (version 7.4 or higher)
- [Composer](https://getcomposer.org/download/)
- [PostgreSQL](https://www.postgresql.org/download/)
- [Laravel](https://laravel.com/docs/installation) CLI (optional)

## Installation

Follow these steps to set up the project locally.

### 1. Clone the Repository

```bash
git clone https://github.com/bsaii/shack15-laravel
cd shack15-laravel
```

### 2. Install Dependencies

After navigating into the project directory, install PHP dependencies with Composer:

```bash
composer install
```

### 3. Configure Environment Variables

Create a `.env` file by copying `.env.example`:

```bash
cp .env.example .env
```

Then, update the `.env` file with your PostgreSQL database credentials:

```plaintext
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Generate the application key:

```bash
php artisan key:generate
```

### 4. Set Up the Database

Run the following command to seed the database:

```bash
php artisan db:seed
```

> **Note**: Ensure your PostgreSQL service is running and the database specified in the `.env` file exists.

### 5. Serve the Application

Finally, start the Laravel development server:

```bash
php artisan serve
```

The application should now be running at [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Additional Commands

- **Database Migration**: To run database migrations, use `php artisan migrate`.
- **Clear Cache**: To clear the cache, run `php artisan cache:clear`.

## Troubleshooting

- **Database Connection**: Ensure PostgreSQL is running and accessible.
- **Dependencies**: Verify that Composer and PHP are correctly installed.

## Database Schema

### 1. **Members Table**
Stores basic information about each community member.

| Column           | Type               | Description                                    |
|------------------|--------------------|------------------------------------------------|
| `id`             | UUID               | Primary key, unique ID for each member         |
| `name`           | VARCHAR            | Member's name                                  |
| `email`          | VARCHAR            | Member's email                                 |
| `joined_date`    | TIMESTAMP          | Date the member joined                         |
| `last_active_date` | TIMESTAMP        | Last date the member was active                |
| `status`         | ENUM ('active', 'inactive') | Current status of the member  |

### 2. **Events Table**
Tracks details of events to monitor attendance and engagement.

| Column           | Type               | Description                                    |
|------------------|--------------------|------------------------------------------------|
| `id`             | UUID               | Primary key, unique ID for each event          |
| `name`           | VARCHAR            | Event name                                     |
| `event_date`     | TIMESTAMP          | Date and time of the event                     |
| `attendance_count` | INTEGER          | Total attendance for each event                |

### 3. **Event_Attendance Table**
Tracks individual member attendance for each event.

| Column           | Type               | Description                                    |
|------------------|--------------------|------------------------------------------------|
| `id`             | UUID               | Primary key                                    |
| `member_id`      | UUID               | Foreign key referencing `Members`              |
| `event_id`       | UUID               | Foreign key referencing `Events`               |
| `attended_date`  | TIMESTAMP          | Date the member attended the event             |

### 4. **Communication_Engagement Table**
Records member engagement in terms of messages and response rate.

| Column              | Type               | Description                                    |
|---------------------|--------------------|------------------------------------------------|
| `id`                | UUID               | Primary key                                    |
| `member_id`         | UUID               | Foreign key referencing `Members`              |
| `messages_sent`     | INTEGER            | Number of messages sent by the member          |
| `messages_received` | INTEGER            | Number of messages received                    |
| `response_rate`     | DECIMAL(5, 2)      | Average response rate for the member           |
| `last_interaction`  | TIMESTAMP          | Date of the last communication                 |

### 5. **Monthly_Activity Table**
Stores monthly activity metrics for each member.

| Column           | Type               | Description                                    |
|------------------|--------------------|------------------------------------------------|
| `id`             | UUID               | Primary key                                    |
| `member_id`      | UUID               | Foreign key referencing `Members`              |
| `year_month`     | DATE               | Year and month (e.g., 2024-10)                 |
| `active_days`    | INTEGER            | Number of days active in the month             |
| `messages_sent`  | INTEGER            | Number of messages sent in the month           |
| `events_attended`| INTEGER            | Total events attended in the month             |


## API Endpoints

- **GET** `/members`: Retrieves the members.
- **GET** `/events`: Retrieves the events.
- **GET** `/engagements`: Fetches engagements data.
- **GET** `/activities`: Provides activities data.
