# Tabletop Nerds

This repository is where you will work on the group project milestones to create the best boardgame review site ever known.

## First-time local setup
1. open an Ubuntu terminal
   1. make sure you're in your home directory, where you've hopefully already created a projects folder: `cd ~/projects`
   2. make sure you have docker desktop running
2. clone this repo: `git clone git@github.com:csci-2479-au-2022/tabletop-nerds.git`
3. go into the project: `cd tabletop-nerds`
4. copy the `.env.example` file to `.env`
5. run the following docker command to install our Sail dependencies:
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```
   - see the documentation for this [here](https://laravel.com/docs/9.x/sail#installing-composer-dependencies-for-existing-projects)
6. start up the app: `./vendor/bin/sail up -d`
   - the `-d` is to run in detached mode, so you can still use the same shell
7. create app key: `./vendor/bin/sail artisan key:generate`
8. run database migrations: `./vendor/bin/sail artisan migrate`
9. run the front-end build tools: `sail npm install && sail npm run build`

## Using sail
- You can [configure an alias](https://laravel.com/docs/9.x/sail#configuring-a-shell-alias) in your Ubuntu terminal so you can type `sail` instead of `./vendor/bin/sail` every time you want to run a sail command
- To start your application containers, simply run `sail up -d`
- To stop them, run `sail down`
