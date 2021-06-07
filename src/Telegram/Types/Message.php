<?php

namespace skrtdev\Telegram;

use skrtdev\NovaGram\Bot;

/**
 * This object represents a message.
*/
class Message extends Type{
    
    protected string $_ = 'Message';

    /** @var int Unique message identifier inside this chat */
    public int $message_id;

    /** @var User|null Sender, empty for messages sent to channels */
    public ?User $from = null;

    /** @var Chat|null Sender of the message, sent on behalf of a chat. The channel itself for channel messages. The supergroup itself for messages from anonymous group administrators. The linked channel for messages automatically forwarded to the discussion group */
    public ?Chat $sender_chat = null;

    /** @var int Date the message was sent in Unix time */
    public int $date;

    /** @var Chat Conversation the message belongs to */
    public Chat $chat;

    /** @var User|null For forwarded messages, sender of the original message */
    public ?User $forward_from = null;

    /** @var Chat|null For messages forwarded from channels or from anonymous administrators, information about the original sender chat */
    public ?Chat $forward_from_chat = null;

    /** @var int|null For messages forwarded from channels, identifier of the original message in the channel */
    public ?int $forward_from_message_id = null;

    /** @var string|null For messages forwarded from channels, signature of the post author if present */
    public ?string $forward_signature = null;

    /** @var string|null Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages */
    public ?string $forward_sender_name = null;

    /** @var int|null For forwarded messages, date the original message was sent in Unix time */
    public ?int $forward_date = null;

    /** @var Message|null For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply. */
    public ?Message $reply_to_message = null;

    /** @var User|null Bot through which the message was sent */
    public ?User $via_bot = null;

    /** @var int|null Date the message was last edited in Unix time */
    public ?int $edit_date = null;

    /** @var string|null The unique identifier of a media message group this message belongs to */
    public ?string $media_group_id = null;

    /** @var string|null Signature of the post author for messages in channels, or the custom title of an anonymous group administrator */
    public ?string $author_signature = null;

    /** @var string|null For text messages, the actual UTF-8 text of the message, 0-4096 characters */
    public ?string $text = null;

    /** @var ObjectsList|null For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text */
    public ?ObjectsList $entities = null;

    /** @var Animation|null Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set */
    public ?Animation $animation = null;

    /** @var Audio|null Message is an audio file, information about the file */
    public ?Audio $audio = null;

    /** @var Document|null Message is a general file, information about the file */
    public ?Document $document = null;

    /** @var ObjectsList|null Message is a photo, available sizes of the photo */
    public ?ObjectsList $photo = null;

    /** @var Sticker|null Message is a sticker, information about the sticker */
    public ?Sticker $sticker = null;

    /** @var Video|null Message is a video, information about the video */
    public ?Video $video = null;

    /** @var VideoNote|null Message is a video note, information about the video message */
    public ?VideoNote $video_note = null;

    /** @var Voice|null Message is a voice message, information about the file */
    public ?Voice $voice = null;

    /** @var string|null Caption for the animation, audio, document, photo, video or voice, 0-1024 characters */
    public ?string $caption = null;

    /** @var ObjectsList|null For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption */
    public ?ObjectsList $caption_entities = null;

    /** @var Contact|null Message is a shared contact, information about the contact */
    public ?Contact $contact = null;

    /** @var Dice|null Message is a dice with random value */
    public ?Dice $dice = null;

    /** @var Game|null Message is a game, information about the game. More about games » */
    public ?Game $game = null;

    /** @var Poll|null Message is a native poll, information about the poll */
    public ?Poll $poll = null;

    /** @var Venue|null Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set */
    public ?Venue $venue = null;

    /** @var Location|null Message is a shared location, information about the location */
    public ?Location $location = null;

    /** @var ObjectsList|null New members that were added to the group or supergroup and information about them (the bot itself may be one of these members) */
    public ?ObjectsList $new_chat_members = null;

    /** @var User|null A member was removed from the group, information about them (this member may be the bot itself) */
    public ?User $left_chat_member = null;

    /** @var string|null A chat title was changed to this value */
    public ?string $new_chat_title = null;

    /** @var ObjectsList|null A chat photo was change to this value */
    public ?ObjectsList $new_chat_photo = null;

    /** @var bool|null Service message: the chat photo was deleted */
    public ?bool $delete_chat_photo = null;

    /** @var bool|null Service message: the group has been created */
    public ?bool $group_chat_created = null;

    /** @var bool|null Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup. */
    public ?bool $supergroup_chat_created = null;

    /** @var bool|null Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel. */
    public ?bool $channel_chat_created = null;

    /** @var MessageAutoDeleteTimerChanged|null Service message: auto-delete timer settings changed in the chat */
    public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed = null;

    /** @var int|null The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrate_to_chat_id = null;

    /** @var int|null The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrate_from_chat_id = null;

    /** @var Message|null Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply. */
    public ?Message $pinned_message = null;

    /** @var Invoice|null Message is an invoice for a payment, information about the invoice. More about payments » */
    public ?Invoice $invoice = null;

    /** @var SuccessfulPayment|null Message is a service message about a successful payment, information about the payment. More about payments » */
    public ?SuccessfulPayment $successful_payment = null;

    /** @var string|null The domain name of the website on which the user has logged in. More about Telegram Login » */
    public ?string $connected_website = null;

    /** @var PassportData|null Telegram Passport data */
    public ?PassportData $passport_data = null;

    /** @var ProximityAlertTriggered|null Service message. A user in the chat triggered another user's proximity alert while sharing Live Location. */
    public ?ProximityAlertTriggered $proximity_alert_triggered = null;

    /** @var VoiceChatScheduled|null Service message: voice chat scheduled */
    public ?VoiceChatScheduled $voice_chat_scheduled = null;

    /** @var VoiceChatStarted|null Service message: voice chat started */
    public ?VoiceChatStarted $voice_chat_started = null;

    /** @var VoiceChatEnded|null Service message: voice chat ended */
    public ?VoiceChatEnded $voice_chat_ended = null;

    /** @var VoiceChatParticipantsInvited|null Service message: new participants invited to a voice chat */
    public ?VoiceChatParticipantsInvited $voice_chat_participants_invited = null;

    /** @var InlineKeyboardMarkup|null Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons. */
    public ?InlineKeyboardMarkup $reply_markup = null;

    public function __construct(array $array, Bot $Bot = null){
        $this->message_id = $array['message_id'];
        $this->from = isset($array['from']) ? new User($array['from'], $Bot) : null;
        $this->sender_chat = isset($array['sender_chat']) ? new Chat($array['sender_chat'], $Bot) : null;
        $this->date = $array['date'];
        $this->chat = new Chat($array['chat'], $Bot);
        $this->forward_from = isset($array['forward_from']) ? new User($array['forward_from'], $Bot) : null;
        $this->forward_from_chat = isset($array['forward_from_chat']) ? new Chat($array['forward_from_chat'], $Bot) : null;
        $this->forward_from_message_id = $array['forward_from_message_id'] ?? null;
        $this->forward_signature = $array['forward_signature'] ?? null;
        $this->forward_sender_name = $array['forward_sender_name'] ?? null;
        $this->forward_date = $array['forward_date'] ?? null;
        $this->reply_to_message = isset($array['reply_to_message']) ? new Message($array['reply_to_message'], $Bot) : null;
        $this->via_bot = isset($array['via_bot']) ? new User($array['via_bot'], $Bot) : null;
        $this->edit_date = $array['edit_date'] ?? null;
        $this->media_group_id = $array['media_group_id'] ?? null;
        $this->author_signature = $array['author_signature'] ?? null;
        $this->text = $array['text'] ?? null;
        $this->entities = isset($array['entities']) ? new ObjectsList(iterate($array['entities'], fn($item) => new MessageEntity($item, $Bot))) : null;
        $this->animation = isset($array['animation']) ? new Animation($array['animation'], $Bot) : null;
        $this->audio = isset($array['audio']) ? new Audio($array['audio'], $Bot) : null;
        $this->document = isset($array['document']) ? new Document($array['document'], $Bot) : null;
        $this->photo = isset($array['photo']) ? new ObjectsList(iterate($array['photo'], fn($item) => new PhotoSize($item, $Bot))) : null;
        $this->sticker = isset($array['sticker']) ? new Sticker($array['sticker'], $Bot) : null;
        $this->video = isset($array['video']) ? new Video($array['video'], $Bot) : null;
        $this->video_note = isset($array['video_note']) ? new VideoNote($array['video_note'], $Bot) : null;
        $this->voice = isset($array['voice']) ? new Voice($array['voice'], $Bot) : null;
        $this->caption = $array['caption'] ?? null;
        $this->caption_entities = isset($array['caption_entities']) ? new ObjectsList(iterate($array['caption_entities'], fn($item) => new MessageEntity($item, $Bot))) : null;
        $this->contact = isset($array['contact']) ? new Contact($array['contact'], $Bot) : null;
        $this->dice = isset($array['dice']) ? new Dice($array['dice'], $Bot) : null;
        $this->game = isset($array['game']) ? new Game($array['game'], $Bot) : null;
        $this->poll = isset($array['poll']) ? new Poll($array['poll'], $Bot) : null;
        $this->venue = isset($array['venue']) ? new Venue($array['venue'], $Bot) : null;
        $this->location = isset($array['location']) ? new Location($array['location'], $Bot) : null;
        $this->new_chat_members = isset($array['new_chat_members']) ? new ObjectsList(iterate($array['new_chat_members'], fn($item) => new User($item, $Bot))) : null;
        $this->left_chat_member = isset($array['left_chat_member']) ? new User($array['left_chat_member'], $Bot) : null;
        $this->new_chat_title = $array['new_chat_title'] ?? null;
        $this->new_chat_photo = isset($array['new_chat_photo']) ? new ObjectsList(iterate($array['new_chat_photo'], fn($item) => new PhotoSize($item, $Bot))) : null;
        $this->delete_chat_photo = $array['delete_chat_photo'] ?? null;
        $this->group_chat_created = $array['group_chat_created'] ?? null;
        $this->supergroup_chat_created = $array['supergroup_chat_created'] ?? null;
        $this->channel_chat_created = $array['channel_chat_created'] ?? null;
        $this->message_auto_delete_timer_changed = isset($array['message_auto_delete_timer_changed']) ? new MessageAutoDeleteTimerChanged($array['message_auto_delete_timer_changed'], $Bot) : null;
        $this->migrate_to_chat_id = $array['migrate_to_chat_id'] ?? null;
        $this->migrate_from_chat_id = $array['migrate_from_chat_id'] ?? null;
        $this->pinned_message = isset($array['pinned_message']) ? new Message($array['pinned_message'], $Bot) : null;
        $this->invoice = isset($array['invoice']) ? new Invoice($array['invoice'], $Bot) : null;
        $this->successful_payment = isset($array['successful_payment']) ? new SuccessfulPayment($array['successful_payment'], $Bot) : null;
        $this->connected_website = $array['connected_website'] ?? null;
        $this->passport_data = isset($array['passport_data']) ? new PassportData($array['passport_data'], $Bot) : null;
        $this->proximity_alert_triggered = isset($array['proximity_alert_triggered']) ? new ProximityAlertTriggered($array['proximity_alert_triggered'], $Bot) : null;
        $this->voice_chat_scheduled = isset($array['voice_chat_scheduled']) ? new VoiceChatScheduled($array['voice_chat_scheduled'], $Bot) : null;
        $this->voice_chat_started = isset($array['voice_chat_started']) ? new VoiceChatStarted($array['voice_chat_started'], $Bot) : null;
        $this->voice_chat_ended = isset($array['voice_chat_ended']) ? new VoiceChatEnded($array['voice_chat_ended'], $Bot) : null;
        $this->voice_chat_participants_invited = isset($array['voice_chat_participants_invited']) ? new VoiceChatParticipantsInvited($array['voice_chat_participants_invited'], $Bot) : null;
        $this->reply_markup = isset($array['reply_markup']) ? new InlineKeyboardMarkup($array['reply_markup'], $Bot) : null;
        parent::__construct($array, $Bot);
   }
    
}
