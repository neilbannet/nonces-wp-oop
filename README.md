# Nonce WP OOP
Demonstration of using WordPress nonces with object oriented approach.

## Minimum Requirements

- PHP 5.6
- Composer
- WordPress 4.9.2 (Latest)

## Usage
The code refers to the wordPress workflow for nonce URL creation and verification. For more info see [Codex](https://codex.wordpress.org/Function_Reference/wp_nonce_url).

### Nonce Url Generation
To add a nonce to a URL, WordPress uses `wp_nonce_url()` specifying the bare *url* and a string representing the *action*. Optionally is possible to specify a string for the *name* parameter, otherwise it defaults to *'_wpnonce'*.

Similarly, to generate a url with a nonce query parameter use the `WP_Nonce_Class` class with the proper *action* value and optionally with the proper *name* parameter, otherwise it defaults to *'_wp_nonce'*.

```php
$url_generate = new WP_Nonce_Class();
```

So, use the `GetNonceURL()` method with the proper *url* to generate the url with the nonce. 

```php
$url = $url_generate->GetNonceURL( 'http://pph.me/neilbannet' );
```

## Thanks to
* [Wordpress Nonces Documentation](https://codex.wordpress.org/WordPress_Nonces)

## License

[MIT](http://opensource.org/licenses/MIT)