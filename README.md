# Rader Free Server - CI/CD Pipeline

This is a Docker configuration for hosting a PHP application with a MySQL database, developed by Vijay as part of a CI/CD pipeline using Render free cloud service.

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

## CI/CD Pipeline with Render

This application is configured for continuous integration and deployment using Render's free cloud service:

1. **Automatic Deployments**: Connect your GitHub/GitLab repository to Render for automatic deployments on every push
2. **Free Tier**: Utilize Render's free tier for hosting your PHP application
3. **SSL Certificates**: Automatic SSL certificate provisioning
4. **Environment Variables**: Securely configure your application settings
5. **Custom Domains**: Point your custom domain to your Render app

### Render Deployment Steps

1. Push your code to a GitHub/GitLab repository
2. Sign up/Login to Render (https://render.com)
3. Create a new Web Service
4. Connect your repository
5. Configure the service:
   - Environment: Docker
   - Build command: `docker-compose up --build`
   - Start command: `docker-compose up`
6. Add environment variables if needed
7. Deploy!

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