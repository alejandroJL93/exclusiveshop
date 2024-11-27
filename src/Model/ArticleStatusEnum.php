<?php

namespace App\Model;

enum ArticleStatusEnum: string
{
    case OUT_STOCK = 'Sin Stock';
    case AVAILABLE = 'Disponible';
    case OUT_SEASON = 'Fuera de temporada';
}
