<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

use function sprintf;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class GeneratorNotSupportedException extends InvalidArgumentException
{
    public static function fromParameterName(string $parameterName): self
    {
        return new self(
            sprintf(
                'Passing an argument of type Generator for the %s parameter is not supported',
                $parameterName,
            ),
        );
    }
}
