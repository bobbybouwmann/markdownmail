<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Preview extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Collection
     */
    private $colors;

    /**
     * Create a new message instance.
     *
     * @param array $colors
     */
    public function __construct(array $colors = [])
    {
        $this->colors = $colors;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.markdown.preview');
    }

    /**
     * Build the Markdown view for the message.
     *
     * @return array
     */
    protected function buildMarkdownView()
    {
        $markdown = app()->make(Markdown::class);

        if (isset($this->theme)) {
            $markdown->theme($this->theme);
        }

        $data = $this->buildViewData();
        $previewData = ['colors' => $this->colors];

        return [
            'html' => $markdown->renderPreview($this->markdown, $data, null, $previewData),
            'text' => $markdown->renderText($this->markdown, $data),
        ];
    }
}
