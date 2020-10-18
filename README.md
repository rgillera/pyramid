# Installation

## Add a folder packages to your root directory
```
mkdir packages
```

## Add a folder vqpoint inside packages
```
mkdir vqpoint
```

## Clone the repository inside vqpoint folder
```
git clone https://github.com/rgillera/pyramid.git
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