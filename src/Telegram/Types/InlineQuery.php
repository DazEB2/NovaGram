<?php

namespace skrtdev\Telegram;

use skrtdev\NovaGram\Bot;

/**
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
*/
class InlineQuery extends Type{
    
    protected string $_ = 'InlineQuery';

    /** @var string Unique identifier for this query */
    public string $id;

    /** @var User Sender */
    public User $from;

    /** @var string Text of the query (up to 256 characters) */
    public string $query;

    /** @var string Offset of the results to be returned, can be controlled by the bot */
    public string $offset;

    /** @var string|null Type of the chat, from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat */
    public ?string $chat_type = null;

    /** @var Location|null Sender location, only for bots that request user location */
    public ?Location $location = null;

    public function __construct(array $array, Bot $Bot = null){
        $this->id = $array['id'];
        $this->from = new User($array['from'], $Bot);
        $this->query = $array['query'];
        $this->offset = $array['offset'];
        $this->chat_type = $array['chat_type'] ?? null;
        $this->location = isset($array['location']) ? new Location($array['location'], $Bot) : null;
        parent::__construct($array, $Bot);
   }
    
}
