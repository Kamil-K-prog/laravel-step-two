<?php

namespace App\Enums;


enum UserRole: int
{
    case USER = 0;
    case MODERATOR = 1;
    case ADMIN = 2;
}
