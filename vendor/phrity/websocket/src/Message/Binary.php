<?php

/**
 * Copyright (C) 2014-2024 Textalk and contributors.
 * This file is part of Websocket PHP and is free software under the ISC License.
 */

namespace WebSocket\Message;

/**
 * WebSocket\Message\Binary class.
 * A Binary WebSocket message.
 */
class Binary extends Message
{
    protected string $opcode = 'binary';
}
