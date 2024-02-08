<?php

declare(strict_types=1);

class PostController
{

  public function index(): void
  {
    echo "Affichage de tous les article";
  }

  public function show($id): void {
    echo "Affichage de l'article avec l'ID : $id";
  }
}
