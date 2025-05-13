<?php
/**
 * practica-cabello.php
 *
 * Ejemplo de script con DocBlocks para usar con phpDocumentor.
 *
 * @author Pablo Cabello
 * @version 1.0.0
 */

declare(strict_types=1);

/**
 * Calcula el factorial de un número.
 *
 * @param int $n Número del que se calculará el factorial (n ≥ 0)
 * @return int El resultado del factorial de n
 *
 * @throws InvalidArgumentException Si $n es negativo
 *
 * @internal Usa recursión; podría optimizarse con una versión iterativa para grandes valores.
 */
function factorial(int $n): int
{
    if ($n < 0) {
        throw new InvalidArgumentException('El número debe ser ≥ 0');
    }
    return $n <= 1 ? 1 : $n * factorial($n - 1);
}

/**
 * Devuelve un saludo personalizado.
 *
 * @param string  $nombre  Nombre de la persona a saludar
 * @param ?string $idioma  Código de idioma ISO‑639‑1; por defecto 'es'
 * @return string Mensaje de saludo
 *
 * @author Pablo Cabello
 * @todo Internacionalizar con distintas cadenas traducidas.
 */
function saludar(string $nombre, ?string $idioma = 'es'): string
{
    $greetings = [
        'es' => 'Hola',
        'en' => 'Hello',
        'fr' => 'Salut',
    ];

    $prefix = $greetings[$idioma] ?? $greetings['es'];
    return "$prefix, $nombre!";
}

// ─────────────────────────────
// Ejemplo de uso
// ─────────────────────────────

echo saludar('Mundo') . PHP_EOL;
echo "5! = " . factorial(5) . PHP_EOL;


