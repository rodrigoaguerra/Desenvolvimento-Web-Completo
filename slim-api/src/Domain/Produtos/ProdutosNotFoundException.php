<?php
declare(strict_types=1);

namespace App\Domain\Produtos;

use App\Domain\DomainException\DomainRecordNotFoundException;

class ProdutosNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'The produtos you requested does not exist.';
}
