# Ordinalize plugin for Craft

Plugin that adds an `ordinalize` Twig filter.

## Installation

Copy the `ordinalize` folder into `craft/plugins/`. In the Control Panel, go to `Settings > Plugins` and click the “Install” button next to “Ordinalize”.

## Usage

The filter adds an ordinal suffix to integers, i.e `1st, 2nd, 3rd, 4th...`.

For example:

```
{% for item in items %}
  This is the {{ loop.index|ordinalize }} item.
{% endfor %}
```

Outputs:

`This is the 2nd item.`

## Thank you

Thank you Cameron for your write up and example on [how to create a Twig filter extension](https://cameronspear.com/blog/craft-cms-twig-filter-extension/) and Brad for your [detailed answer to my question](http://craftcms.stackexchange.com/a/10607/176).
