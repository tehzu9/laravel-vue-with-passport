<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<br>
<p align="center"><img width="50"  src="https://discourse-cdn-sjc1.com/mcneel/uploads/default/original/3X/d/e/defd8711470e91ea412123b979b604fea76112ce.png"></p>
<br>

<p align="center"><a href="https://vuejs.org" target="_blank" rel="noopener noreferrer"><img width="100" src="https://vuejs.org/images/logo.png" alt="Vue logo"></a></p>

<p align="center">
  <a href="https://circleci.com/gh/vuejs/vue/tree/dev"><img src="https://img.shields.io/circleci/project/github/vuejs/vue/dev.svg" alt="Build Status"></a>
  <a href="https://npmcharts.com/compare/vue?minimal=true"><img src="https://img.shields.io/npm/dm/vue.svg" alt="Downloads"></a>
  <a href="https://www.npmjs.com/package/vue"><img src="https://img.shields.io/npm/v/vue.svg" alt="Version"></a>
  <a href="https://www.npmjs.com/package/vue"><img src="https://img.shields.io/npm/l/vue.svg" alt="License"></a>
</p>
## Laravel + Vue.js (boiler-plate)


#### Includes:

* #### [Laravel/Passport](https://laravel.com/docs/5.7/passport)
    * Full fledge authentication system with Oauth 2.0 (passport). 
    * By Default Password Grant implemented for frontend.
* #### [Spatie/Laravel-permission](https://github.com/spatie/laravel-permission)
    * Authorization handled with care.
    * php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
    * php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"
* #### [Spatie/Laravel-fractal](https://github.com/spatie/laravel-fractal)
    * Json-api wrapper implementation for api-response.
    * php artisan vendor:publish --provider="Spatie\Fractal\FractalServiceProvider"
* #### [Spatie/Laravel-medialibrary](https://docs.spatie.be/laravel-medialibrary/v7)
    * Medialibrary for managing media (images,videos,documents etc) locally or on Amazon S3.
    * php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="migrations"
    * php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="config"
* #### [Spatie/Laravel-query-builder](https://github.com/spatie/laravel-query-builder)
    * Laravel Eloquent Query made accessible directly from api endpoints.
    * php artisan vendor:publish --provider="Spatie\QueryBuilder\QueryBuilderServiceProvider" --tag="config"
* #### [Spatie/Laravel-database-mail-templates](https://github.com/spatie/laravel-database-mail-templates)
    * Email Templates to use on the go.
    * php artisan vendor:publish --provider="Spatie\MailTemplates\MailTemplatesServiceProvider" --tag="migrations"
* #### [Spatie/Laravel-activity-log](https://github.com/spatie/laravel-activitylog)
    * Activity log for logging user and system activites
    * php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="migrations"
    * php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="config"
* #### [Spatie/Laravel-backup](https://docs.spatie.be/laravel-backup/v5/introduction)
    * Usefull library for backing up you application
    * php artisan vendor:publish --provider="Spatie\Backup\BackupServiceProvider"
* #### [Laravel-scout-tnt-search-driver](https://github.com/teamtnt/laravel-scout-tntsearch-driver)
    Tnt search driver for different types of serarch algorithms:
    * fuzzy search
    * as you type functionality
    * geo-search
    * text-classification
    * stemming
    * custom tokenizers
    * bm25 ranking algorithm
    * boolean search
    * result highlighting
    * requires **ext-pdo_sqlite** php extention
    [documentation](https://github.com/teamtnt/laravel-scout-tntsearch-driver#installation).

* #### [Laravel Api Documentation Generator](https://github.com/mpociot/laravel-apidoc-generator)
    * php artisan vendor:publish --provider="Mpociot\ApiDoc\ApiDocGeneratorServiceProvider" --tag=config
* #### API versioning mechanism to keep backward compatibility
* #### Vuejs+axios+laravel-mix by default as laravel ships them out of the box
* [Vue router](https://router.vuejs.org/)
* [Bootstrap vue](https://bootstrap-vue.js.org/)
* [Vue toster](https://github.com/vue-comps/vue-toaster)
