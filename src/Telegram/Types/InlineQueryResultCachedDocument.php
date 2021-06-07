<?php

namespace skrtdev\Telegram;

use skrtdev\NovaGram\Bot;

/**
 * Represents a link to a file stored on the Telegram servers. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file.
*/
class InlineQueryResultCachedDocument extends Type{
    
    protected string $_ = 'InlineQueryResultCachedDocument';

    /** @var string Type of the result, must be document */
    public string $type;

    /** @var string Unique identifier for this result, 1-64 bytes */
    public string $id;

    /** @var string Title for the result */
    public string $title;

    /** @var string A valid file identifier for the file */
    public string $document_file_id;

    /** @var string|null Short description of the result */
    public ?string $description = null;

    /** @var string|null Caption of the document to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** @var string|null Mode for parsing entities in the document caption. See formatting options for more details. */
    public ?string $parse_mode = null;

    /** @var ObjectsList|null List of special entities that appear in the caption, which can be specified instead of parse_mode */
    public ?ObjectsList $caption_entities = null;

    /** @var InlineKeyboardMarkup|null Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /** @var InputMessageContent|null Content of the message to be sent instead of the file */
    public ?InputMessageContent $input_message_content = null;

    public function __construct(array $array, Bot $Bot = null){
        $this->type = $array['type'];
        $this->id = $array['id'];
        $this->title = $array['title'];
        $this->document_file_id = $array['document_file_id'];
        $this->description = $array['description'] ?? null;
        $this->caption = $array['caption'] ?? null;
        $this->parse_mode = $array['parse_mode'] ?? null;
        $this->caption_entities = isset($array['caption_entities']) ? new ObjectsList(iterate($array['caption_entities'], fn($item) => new MessageEntity($item, $Bot))) : null;
        $this->reply_markup = isset($array['reply_markup']) ? new InlineKeyboardMarkup($array['reply_markup'], $Bot) : null;
        $this->input_message_content = isset($array['input_message_content']) ? new InputMessageContent($array['input_message_content'], $Bot) : null;
        parent::__construct($array, $Bot);
   }
    
}
