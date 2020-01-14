# Docksal Powered WordPress Installation

Features:

- Vanilla WordPress 5
- Lumberjack
- Carbon Fields

## Setup instructions

1. Clone this repo into your Projects directory

    ```
    git clone https://github.com/GuilhermeRios/wordpress-lumberjack-boilerplate.git wordpress-lumberjack-boilerplate
    cd wordpress-lumberjack-boilerplate
    ```

1. Initialize the site

    This will initialize local settings and install the site via `wp-cli`

    ```
    fin init
    ```

1. Point your browser to

    ```
    http://wordpress-lumberjack-boilerplate.docksal
    ```

1. Install composer dependencies

    ```
   cd docroot/wp-content/themes/lumberjack
   composer install
   ```

1. Docs

    1. Wordpress (https://developer.wordpress.org/)
    1. Lumberjack (https://docs.lumberjack.rareloop.com/)
    1. Timber (https://timber.github.io/)
    1. Carbon Fields (https://docs.carbonfields.net/)
    1. Theme - JointsWP (https://jointswp.com/)
