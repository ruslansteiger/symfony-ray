<?php

namespace App\Twig;

use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;

class RayTokenParser extends AbstractTokenParser
{
    public function parse(Token $token): RayNode
    {
        $lineno = $token->getLine();

        $parser = $this->parser;
        $stream = $parser->getStream();

        $nodes = [
            'var' => $parser->getExpressionParser()->parseExpression(),
        ];

        $stream->expect(Token::BLOCK_END_TYPE);

        return new RayNode($nodes, [], $lineno, $this->getTag());
    }

    public function getTag(): string
    {
        return 'ray';
    }
}
