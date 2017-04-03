@component('mail::message')
# Introduction

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dicta <a href="">doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.

@component('mail::button', ['url' => '#', 'color' => 'blue'])
    Button Text
@endcomponent

## Heading 2

@component('mail::table')
    | Product       | Link          | Something|
    | ------------- |---------------| --------:|
    | Col 2 is      | Centered      | $10      |
    | Col 3 is      | Right-Aligned | $20      |
@endcomponent

@component('mail::button', ['url' => '#', 'color' => 'green'])
    Button Text
@endcomponent

### Heading 3

@component('mail::panel')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere ipsa vel veritatis? Ex, minima sunt.
@endcomponent

@component('mail::button', ['url' => '#', 'color' => 'red'])
    Button Text
@endcomponent

@component('mail::promotion')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci eos esse nesciunt unde? Aspernatur, eum?
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@component('mail::subcopy')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci eos esse nesciunt unde? Aspernatur, eum?
@endcomponent

@endcomponent