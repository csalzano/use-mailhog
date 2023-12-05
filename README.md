# use-mailhog

WordPress plugin. Configure WordPress on Valet to use MailHog. This code began life as a gist at [gist.github.com/bishless/44ec6f6d3da0cc4a02bbc04ce5465c3b](https://gist.github.com/bishless/44ec6f6d3da0cc4a02bbc04ce5465c3b).

I forked the gist but needed a nicer download file name. I install and activate this plugin each time I copy a database from production to my Laravel Valet environment.

## Other SMTP Settings

I removed this code that I do not need but want to preserve.

```
// Username to use for SMTP authentication.
$phpmailer->Username = 'yourusername';

// Password to use for SMTP authentication.
$phpmailer->Password = 'yourpassword';

// The encryption system to use - ssl (deprecated) or tls.
$phpmailer->SMTPSecure = 'tls';

// Change the from address.
$phpmailer->From = 'site_adm@wp.local';
$phpmailer->FromName = 'WP DEV';
```

## Links

**Laravel Valet**
https://github.com/laravel/valet

**MailHog**
https://github.com/mailhog/MailHog