@component('mail::message')
# Heading 1

This is a paragraph filled with Lorem Ipsum and a link. Cumque dicta <a href="">doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.

## Heading 2

@component('mail::table')
    | Product       | Link          | Something|
    | ------------- |---------------| --------:|
    | Col 2 is      | Centered      | $10      |
    | Col 3 is      | Right-Aligned | $20      |
@endcomponent

### Heading 3

This is a paragraph filled with Lorem Ipsum and a link. Cumque dicta <a href="">doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.

@component('mail::button', ['url' => '#', 'color' => 'blue'])
    Blue button
@endcomponent

@component('mail::button', ['url' => '#', 'color' => 'green'])
    Green button
@endcomponent

@component('mail::button', ['url' => '#', 'color' => 'red'])
    Red button
@endcomponent

@component('mail::panel')
    How awesome is this panel?
@endcomponent

Heading 3

@component('mail::promotion')
    Coupon code: MarkdownMail
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@component('mail::subcopy')
    This is the subcopy of the email
@endcomponent

@endcomponent