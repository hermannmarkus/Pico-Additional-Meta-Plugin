# Pico Additional Meta Plugin

This plugin for [Pico](http://picocms.org) let's you easily extend the meta fields you can use in your templates.

## Configuration

In your `config.yml` you can add _AdditionalMeta.keys_. They will be accessible in their lower case form in the templates.

```yaml
AdditionalMeta.enabled: true
AdditionalMeta.keys:
- NewMeta
```
