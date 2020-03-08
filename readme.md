## MarkdownMail

[https://markdownmail.com](https://markdownmail.com)

This application was created out of frustration that you had to send an actual email to test if your markdown theme looks good with your content. I also wanted to learn something about Vue, so I decided to create this little application where you can generate your own markdown themes for Laravel. 

One extra nice feature is that it also generates the HTML output of an email. So you can use this tool as well to generate an email template for any non Laravel applications. 

The markdown themes generator functionality can still be used, however Laravel made it a lot easier to see an email template in your browser without sending it. You can still use this [website](https://markdownmail.com) to generate your own custom themes ;)

## Show mails in Laravel

If you created your custom theme and put in your `config/mail.php` you can generate your emails using the following code
```php
Route::get('mailable', function () {
    $invoice = App\Invoice::find(1);

    return new App\Mail\InvoicePaid($invoice);
});
```

> Documentation: https://laravel.com/docs/master/mail#rendering-mailables
