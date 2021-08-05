<p align="center">
  <img alt="Slab" src="https://stirlingbrandworks.s3.amazonaws.com/misc/slab-logo.png" height="100">
</p>

<h1 align="center">Slab</h1>

<p align="center">
  <strong>WordPress base theme with a modern development workflow. Optimized by and for Stirling Brandworks.</strong>
</p>

Slab is a WordPress starter theme based on the [Sage starter theme by Roots](https://roots.io/sage/).

## Features

- Sass for stylesheets
- Modern JavaScript
- [Webpack](https://webpack.github.io/) for compiling assets, optimizing images, and concatenating and minifying files
- [Browsersync](http://www.browsersync.io/) for synchronized browser testing
- [Blade](https://laravel.com/docs/5.6/blade) as a templating engine
- [Controller](https://github.com/soberwp/controller) for passing data to Blade templates
- [Bootstrap 5](https://getbootstrap.com/)

### Requirements

Make sure all dependencies have been installed before moving on:

- [WordPress](https://wordpress.org/) >= 4.7
- [PHP](https://secure.php.net/manual/en/install.php) >= 7.1.3 (with [`php-mbstring`](https://secure.php.net/manual/en/book.mbstring.php) enabled)
- [Composer](https://getcomposer.org/download/)
- [Node.js](http://nodejs.org/) >= 8.0.0
- [Yarn](https://yarnpkg.com/en/docs/install)

## Getting Started

We recommend using [Local WP](https://localwp.com/) for WordPress development on your local machine.

With either of the following strategies, replace "your-theme-name" with the desired slug of your theme. This should match up with the repository slug for consistency.

### Using composer create-project (easiest)

Run the following command from your wp-content/themes directory and follow the prompts to configure your theme.

```shell
composer create-project --prefer-dist stirling-brandworks/slab --repository='{"type":"vcs","url":"https://github.com/stirling-brandworks/slab.git"}' --stability=dev --remove-vcs your-theme-name
```

### Using git with upstream sync

To start a new WordPress project using the Slab theme, we recommend the following workflow.

1. Navigate to the wp-content/themes directory
1. Clone this repository using the following commands. You should rename the theme directory at this point.

   ```shell
   git clone -b 9.x --single-branch git@github.com:stirling-brandworks/slab.git your-theme-name

   git branch main $(echo "Initial commit" | git commit-tree HEAD^{tree})

   git checkout main
   ```

1. Create a new remote repository for the site on GitHub. You should name the repository the same as what you replaced "your-theme-name" with above. Don't initialize your repository with anything via the Github options.
1. Update your origin URL to the newly created repository URL.
   ```shell
   git remote rename origin upstream
   git remote add origin git@github.com:stirling-brandworks/your-theme-name.git
   git push -u origin main
   ```

### Sync your theme with changes from Slab

If you followed the instructions above on your local machine, you should be able to run the following commands to sync your theme with the main Slab repository.

> Note: This is only compatible for minor versions of Sage/Slab. For example, you shouldn't update from Sage/Slab 9 to 10 using this method.

If you don't have an upstream repository, [see the documentation here to set one up](https://docs.github.com/en/github/collaborating-with-pull-requests/working-with-forks/configuring-a-remote-for-a-fork).

```shell
git fetch upstream
git checkout 9.x
git merge upstream/9.x
git push --set-upstream origin 9.x
```

You should then be able to open up a Pull Request in Github to sync the changes.

## Theme structure

```shell
themes/your-theme-name/   # → Root of your Sage based theme
├── app/                  # → Theme PHP
│   ├── Controllers/      # → Controller files
│   ├── admin.php         # → Theme customizer setup
│   ├── filters.php       # → Theme filters
│   ├── helpers.php       # → Helper functions
│   └── setup.php         # → Theme setup
├── composer.json         # → Autoloading for `app/` files
├── composer.lock         # → Composer lock file (never edit)
├── dist/                 # → Built theme assets (never edit)
├── node_modules/         # → Node.js packages (never edit)
├── package.json          # → Node.js dependencies and scripts
├── resources/            # → Theme assets and templates
│   ├── assets/           # → Front-end assets
│   │   ├── config.json   # → Settings for compiled assets
│   │   ├── build/        # → Webpack and ESLint config
│   │   ├── fonts/        # → Theme fonts
│   │   ├── images/       # → Theme images
│   │   ├── scripts/      # → Theme JS
│   │   └── styles/       # → Theme stylesheets
│   ├── functions.php     # → Composer autoloader, theme includes
│   ├── index.php         # → Never manually edit
│   ├── screenshot.png    # → Theme screenshot for WP admin
│   ├── style.css         # → Theme meta information
│   └── views/            # → Theme templates
│       ├── layouts/      # → Base templates
│       └── partials/     # → Partial templates
└── vendor/               # → Composer packages (never edit)
```

## Theme setup

Edit `app/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, and sidebars.

## Theme development

- Run `yarn` from the theme directory to install dependencies
- Update `resources/assets/config.json` settings:
  - `devUrl` should reflect your local development hostname
  - `publicPath` should reflect your WordPress folder structure (`/wp-content/themes/sage` for non-[Bedrock](https://roots.io/bedrock/) installs)

### Build commands

- `yarn start` — Compile assets when file changes are made, start Browsersync session
- `yarn build` — Compile and optimize the files in your assets directory
- `yarn build:production` — Compile assets for production

## Documentation

- [Sage documentation](https://roots.io/sage/docs/)
- [Controller documentation](https://github.com/soberwp/controller#usage)
