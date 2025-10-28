# Rader Free Server - Docker Setup

This is a Docker configuration for hosting a PHP application with a MySQL database.

## Prerequisites

- Docker installed on your system
- Docker Compose installed on your system

## Getting Started

1. Clone or download this repository
2. Navigate to the project directory
3. Run the following command to start the services:

```bash
docker-compose up -d
```

4. Access your application at http://localhost:8080

## Services Included

- **Web Server**: PHP 8.1 with Apache
- **Database**: MySQL 8.0

## Configuration

### Web Service
- Port mapping: 8080 (host) -> 80 (container)
- Volume mapping: Current directory -> /var/www/html

### Database Service
- MySQL 8.0
- Root password: rootpassword
- Database: myapp
- User: user
- Password: password

## Stopping the Services

To stop the services, run:

```bash
docker-compose down
```

## Viewing Logs

To view the logs, run:

```bash
docker-compose logs
```