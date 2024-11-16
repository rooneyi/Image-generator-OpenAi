# Image-generator-OpenAi

This project allows you to generate images from text descriptions using the OpenAI API (DALL·E model). You can easily integrate this feature into a Symfony application.

## Prerequisites

Before getting started, make sure you have the following installed on your machine:

- [PHP](https://www.php.net/) >= 8.0
- [Composer](https://getcomposer.org/)
- Symfony CLI (optional but recommended): [Install Symfony](https://symfony.com/download)

## Installation

### 1. Clone the project

Clone this repository to your local machine:

```bash
git clone https://github.com/rooneyi/Image-generator-OpenAi.git
cd Image-generator-OpenAi
cp .env .env.local
```

# .env.local
OPENAI_API_KEY=your_openai_api_key_here

```bash
composer install
```

## config/services.yaml
```bash
services:
    OpenAI\Client:
        factory: ["OpenAI", "client"]
        arguments:
            - "%env(OPENAI_API_KEY)%"
```
## Execute the server developpment

```bash
php bin/console cache:clear
symfony server:start
```
## open App in the browsers on 
```bash
http://127.0.0.1:8000
```
