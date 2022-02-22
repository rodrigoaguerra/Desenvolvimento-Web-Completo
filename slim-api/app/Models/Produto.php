<?php

namespace Models;
use Illuminate\Database\Eloquent\Model;
/**
 * usuarios -> Usuario
 * carrinhos -> Carrinho
 * carrinho_compras -> carrinhoCompra
 */
class Produto extends Model
{
  protected $fillable = [
    'titulo',
    'descricao',
    'preco',
    'fabricante',
    'created_at',
    'updated_at',
  ];

}
