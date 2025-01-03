# Laravel API with Swagger Integration

This project is a RESTful API built with Laravel. It provides CRUD functionality for managing resources and includes Swagger integration for API documentation and testing.

---

## Features

- **CRUD Operations**: Full create, read, update, and delete functionality.
- **Swagger Integration**: Easily test and document API endpoints.
- **Laravel Framework**: Built on Laravel, leveraging its robust features and ecosystem.

---

## Requirements

- PHP >= 8.1
- Composer
- Laravel >= 10
- MySQL or any supported database

---

## Installation

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd <repository-folder>
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Set up the environment:
   - Copy the `.env.example` file and rename it to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Configure the database and other environment variables in the `.env` file.

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Run migrations to set up the database:
   ```bash
   php artisan migrate
   ```

6. Serve the application:
   ```bash
   php artisan serve
   ```

---

## API Documentation

This project uses Swagger for API documentation and testing.

1. Access Swagger UI by navigating to:
   ```
   http://localhost:8000/api/documentation
   ```

2. Use the interface to explore and test API endpoints.

---

## API Endpoints

| Method | Endpoint            | Description                |
|--------|---------------------|----------------------------|
| GET    | `/api/resources`    | Get all resources          |
| POST   | `/api/resources`    | Create a new resource      |
| GET    | `/api/resources/{id}` | Get a single resource by ID |
| PUT    | `/api/resources/{id}` | Update a resource by ID     |
| DELETE | `/api/resources/{id}` | Delete a resource by ID     |

---

## Development Notes

### Adding New Endpoints
1. Define the route in `routes/api.php`.
2. Implement the corresponding logic in the relevant controller.
3. Update Swagger documentation if necessary.

### Testing
- Use Postman or the built-in Swagger UI for testing endpoints.
- Ensure database migrations are run before testing.

---

## Contributing

1. Fork the repository.
2. Create a new feature branch:
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add your message here"
   ```
4. Push to the branch:
   ```bash
   git push origin feature/your-feature-name
   ```
5. Open a pull request.

---

## License

This project is licensed under the [MIT License](LICENSE).

---

## Acknowledgements

- [Laravel Documentation](https://laravel.com/docs)
- [Swagger OpenAPI Documentation](https://swagger.io/docs/)
