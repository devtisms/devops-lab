<?php

declare(strict_types=1);

header('Content-Type: text/html; charset=UTF-8');

echo '<h1>DevOps Lab</h1>';
echo '<p>Aplicação PHP executando no SRVDEV.</p>';
echo '<p>Host: ' . htmlspecialchars(gethostname() ?: 'unknown', ENT_QUOTES, 'UTF-8') . '</p>';
