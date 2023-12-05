# use-mailhog

WordPress plugin. Configure WordPress on Valet to use MailHog. This code began life as a gist at [gist.github.com/bishless/44ec6f6d3da0cc4a02bbc04ce5465c3b](https://gist.github.com/bishless/44ec6f6d3da0cc4a02bbc04ce5465c3b).

I forked the gist, but since I don't know how to download gists with nice file names, I created this repo.

## Other SMTP Settings

I removed this code that I do not need but wanted to preserve.

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