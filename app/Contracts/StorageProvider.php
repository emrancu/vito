<?php

namespace App\Contracts;

use App\Models\Server;

interface StorageProvider
{
    public function connect(): bool;

    public function upload(Server $server, string $src, string $dest): array;

    public function download(Server $server, string $src, string $dest): void;

    public function delete(array $paths): void;
}
