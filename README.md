# Image-generator-OpenAi

Ce projet vous permet de générer des images à partir de descriptions textuelles en utilisant l'API OpenAI (modèle DALL·E). Vous pouvez facilement intégrer cette fonctionnalité à une application Symfony.

## Prérequis

Avant de commencer, vous devez avoir les éléments suivants installés sur votre machine :

- [PHP](https://www.php.net/) >= 8.0
- [Composer](https://getcomposer.org/)
- Symfony CLI (optionnel mais recommandé) : [Installer Symfony](https://symfony.com/download)

## Installation

### 1. Clonez le projet

Clonez ce repository sur votre machine locale :

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
# Exemple de configuration dans le fichier config/services.yaml :
## yaml

services:
    OpenAI\Client:
        factory: ["OpenAI", "client"]
        arguments:
            - "%env(OPENAI_API_KEY)%"
```bash
php bin/console cache:clear
symfony server:start
```
# Acceder A l'application en local au port 
## http://127.0.0.1:8000
