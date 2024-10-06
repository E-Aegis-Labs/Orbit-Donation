# Orbit Donation System

This is a donation system built with Laravel 11, Tailwind CSS, and Livewire. The system is still in development and integrates PayPal and Stripe as payment gateways. It allows users to make donations easily and securely.

## Features

- User-friendly donation interface.
- Integrated payment gateways (PayPal and Stripe).
- Real-time interactivity using Livewire.
- Fully responsive design using Tailwind CSS.
- Built with the latest version of Laravel (v11) and PHP (v8.3).

## Technologies

- **Laravel 11**: PHP framework for web artisans.
- **PHP 8.3**: Latest version of PHP.
- **Tailwind CSS**: Utility-first CSS framework for styling.
- **Livewire**: Full-stack framework for reactive interfaces.
- **PayPal & Stripe**: Integrated for donation payments.

## Requirements

- PHP 8.3 or higher
- Composer
- Node.js & npm
- MySQL or PostgreSQL

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/donation-system.git
    cd donation-system
    ```

2. **Install dependencies:**

    Install PHP dependencies:
    ```bash
    composer install
    ```

    Install JavaScript dependencies:
    ```bash
    npm install && npm run dev
    ```

3. **Set up the environment variables:**

    Copy the `.env.example` to `.env` and update the necessary configurations, including database and payment gateway details.
    ```bash
    cp .env.example .env
    ```

4. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

5. **Set up the database:**

    Configure the `.env` file with your database information and run migrations:
    ```bash
    php artisan migrate
    ```

6. **Run the application:**

    ```bash
    php artisan serve
    ```

7. **Configure PayPal and Stripe:**

    Update the `.env` file with your PayPal and Stripe API keys:
    ```dotenv
    PAYPAL_CLIENT_ID=your-paypal-client-id
    PAYPAL_SECRET=your-paypal-secret
    STRIPE_KEY=your-stripe-key
    STRIPE_SECRET=your-stripe-secret
    ```

## Usage

- Visit `http://localhost:8000` to access the donation system.
- Users can choose a donation amount and pay using either PayPal or Stripe.

## Development

This system is still under development. Contributions are welcome! If you have any issues or suggestions, feel free to submit them via GitHub Issues or Pull Requests.

## Contributing

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a Pull Request.

## License

This project is open-source and available under the [MIT License](LICENSE).
