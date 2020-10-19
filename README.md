# Installation

## Install using composer
```
mkdir packages
```

## Add this to composer autoload
```
"Vqpoint\\Pyramid\\": "packages/vqpoint/pyramid/src",
```

## Add this to config/app.php providers array
```
Vqpoint\Pyramid\Providers\PyramidServiceProvider::class,
```

## Run composer dump-autoload in the root directory.
```
composer dump-autoload
```
