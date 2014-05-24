# KalmanOlah/MarkdownBundle

Markdown/Parsedown bundle for Symfony2 providing a service and a twig filter

## Installation

Just add this to your `composer.json`:

```
...
"require": {
    ...
    "kalmanolah/markdownbundle": "*@dev",
    ...
}
...
```

Afterwards, enable the bundle in your `AppKernel.php` like so:

```
$bundles = array(
    ...
    new KalmanOlah\MarkdownBundle\KalmanOlahMarkdownBundle(),
);
```

## Usage

#### Using the service:

```
// Assuming you have a container handy
echo $this->get('markdown')->text('**Hello, world!**');
```

This would then print:

```
<b>Hello, world!</b>
```

#### Using the Twig filter:

```
{{ 'Hello, world!' | markdown }}
```
