# Travaux effectués

# Installation

- New container
- cd app && docker exec
- git clone folder Aliptic
- `composer auto-update`
- `echo 'deb [trusted=yes] https://repo.symfony.com/apt/ /' | tee /etc/apt/sources.list.d/symfony-cli.list`
- `apt update`
- `apt install symfony-cli`
- `composer update`
- `curl -fsSL https://deb.nodesource.com/setup_17.x | bash -`
- `apt update` && `apt install nodejs`
- `vim /etc/apache2/sites-available/000-default.conf`
- `a2enmod rewrite`
- `apt-get install php8.0-sqlite`
- `service apache2 reload`
- `php bin/console make:migration`
- `php bin/console doctrine:migrations:migrate`

```src/DataFixtures/AppFixtures.php
        $plat = new Plat();
        $plat->setNom('Foie Gras');
        $plat->setDescription("Il est de toutes les tables pour les fêtes de fin d’année. Même si le monde associe cette spécialité à la France, la tradition du gavage d’oie remonte à l’Antiquité. Sur un pain brioché avec un peu de confit d’oignons ou de la confiture de figue, vous dégusterez le foie gras de façon idéale.");
        $plat->setCategory($categorie_n1);
        $manager->persist($plat);
// ETC ...
```

- `php bin/console doctrine:fixtures:load`
- `git remote set-url origin https://github.com/quatrecouleurs/install_symphony.git`
- `git branch -M main`
- creating a git access token
- `git push -u origin main`
- `git checkout -b bootstrap_install`
- `composer require symfony/webpack-encore-bundle`
- `npm install`
- `npm install -g npm@8.5.3`

```webpack.config.js
    // enables Sass/SCSS support
    .enableSassLoader();
```

- `sudo chown -R joel:games installation_symphony/`
- `sudo chmod -R 775 installation_symphony/`
- `npm install sass-loader@^12.0.0 sass --save-dev`
- `npm run watch`

````templates/base.html.twig
        {% block stylesheets %}
            {# 'app' must match the first argument to addEntry() in webpack.config.js #}
            {{ encore_entry_link_tags('app') }}

            <!-- Renders a link tag (if your module requires any CSS)
                 <link rel="stylesheet" href="/build/app.css"> -->
        {% endblock %}
                {% block javascripts %}
            {{ encore_entry_script_tags('app') }}

            <!-- Renders app.js & a webpack runtime.js file
                <script src="/build/runtime.js" defer></script>
                <script src="/build/app.js" defer></script>
                See note below about the "defer" attribute -->
        {% endblock %}

- `npm install bootstrap --save-dev`

```assets/styles/app.css
@import "~bootstrap/scss/bootstrap";
````

- `git commit -a`
- `
