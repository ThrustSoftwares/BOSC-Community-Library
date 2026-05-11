# Contributing to BOSC Community Library

First off, thank you for considering contributing to the BOSC Community Library! It's people like you that make this open-source tool a reality for educational institutions across Uganda.

## How Can I Contribute?

### Reporting Bugs
If you find a bug in the library index or search system, please create an issue using the Bug Report template. Include as much detail as possible:
* Steps to reproduce the bug
* Expected behavior
* Screenshots if applicable

### Suggesting Enhancements
We love new ideas! If you have a feature request (e.g., adding support for new curriculum levels), please use the Feature Request template. Explain why this enhancement would be useful for the schools using this system.

### Pull Requests
1. Fork the repo and create your branch from `main`.
2. If you've added code that should be tested, add tests.
3. Update the documentation if necessary.
4. Ensure your PR description clearly describes the problem and solution.
5. Link the PR to the relevant issue.

## Development Setup
To run the project locally:

1. Install PHP, Composer, Node.js, and npm.
2. Run `composer install`.
3. Run `npm install`.
4. Copy `.env.example` to `.env`.
5. Run `php artisan key:generate`.
6. Run `php artisan migrate`.
7. Start the app with `php artisan serve`.
8. Run tests with `php artisan test`.
