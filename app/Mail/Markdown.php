<?php

namespace App\Mail;

use Illuminate\Support\HtmlString;
use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

class Markdown extends \Illuminate\Mail\Markdown
{
    /**
     * Render the Markdown template into HTML.
     *
     * @param  string $view
     * @param  array $data
     * @param  \TijsVerkoyen\CssToInlineStyles\CssToInlineStyles|null $inliner
     * @param  array $previewData
     * @return HtmlString
     */
    public function renderPreview($view, array $data = [], $inliner = null, $previewData)
    {
        $this->view->flushFinderCache();

        $css = $this->view->make('emails.markdown.template', $previewData)->render();

        $html = $this->view->replaceNamespace(
            'mail', $this->htmlComponentPaths()
        )->make($view, $data)->render();

        return new HtmlString(($inliner ?: new CssToInlineStyles)->convert($html, $css));
    }
}